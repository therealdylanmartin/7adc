// Phone number input formatting
const phoneInputFields = document.querySelectorAll('.phone-input');

phoneInputFields.forEach(input => {
  input.addEventListener('keyup', () => {
    phoneNumberFormatter(input);
  })
})

phoneNumberFormatter = (input) => {
  const formattedInputValue = formatPhoneNumber(input.value);
  input.value = formattedInputValue;
}

formatPhoneNumber = (value) => {
  if (!value) return value;

  const phoneNumber = value.replace(/[^\d]/g, '');

  if (value === '(') {
    return '';
  } else if (phoneNumber.length < 4) {
    return `(${phoneNumber}`;
  } else if (phoneNumber.length < 7) {
    return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3)}`;
  }

  return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3, 6)}-${phoneNumber.slice(6, 10)}`;
}

// Email Popup handling
const emailPopUp = document.querySelector('#mce-email-modal');
const emailPopUpCloseBtn = document.querySelector('#mce-email-modal-CLOSE');

window.addEventListener('load', () => {
  if (document.cookie.indexOf('visited=true') === -1 && document.cookie.indexOf('subscribed=true') === -1) {
    emailPopUp.classList.add('email-popup__visible');
  }
});

emailPopUpCloseBtn.addEventListener('click', () => {
  emailPopUp.classList.remove('email-popup__visible');
  disablePopUpForADay();
});

emailPopUp.addEventListener('click', (e) => {
  if (e.target.matches('.email-popup__background') && !e.target.matches('.email-popup')) {
    emailPopUp.classList.remove('email-popup__visible');
    disablePopUpForADay();
  }
});

// Function for setting visit cookie to disable email popup
const disablePopUpForADay = () => {
  const today = new Date();
  const expireDate = new Date(today.getTime() + 24 * 60 * 60 * 1000);
  const formattedDate = expireDate.toGMTString();
  document.cookie = `visited=true; expires=${formattedDate};`;
}

// Setting subscribe cookie to disable email popup and hiding popup
const emailSubscribeButtons = document.querySelectorAll('.subscribe-button');

emailSubscribeButtons.forEach(button => {
  button.addEventListener('click', () => {
    document.cookie = 'subscribed=true';
  });
})
