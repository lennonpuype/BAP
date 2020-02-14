{
  const $form = document.querySelector(`form`);

  const handleSubmitForm = e => {
    const $form = e.currentTarget;

    if ($form.classList.contains(`invalid`)) {
      e.preventDefault();
      Array.from($form.elements).forEach($element => {
        showValidationErrors($element);
      });
    } else {
      document.querySelector(`.error`).textContent = ``;
    }
  };

  const handleBlurField = () => {
    //showValidationErrors(e.currentTarget);
  };

  const showValidationErrors = $field => {
    let message;
    //Ingevuld of niet
    if ($field.validity.valueMissing) {
      message = `verplicht`;
    }

    //Juiste type?
    if ($field.validity.typeMismatch) {
      message = `Geef een geldig email adres in`;
    }

    //Te groot getal
    if ($field.validity.rangeOverflow) {
      message = `type niet correct`;
    }

    //Boodschap tonen
    if (message) {
      $field.parentElement.querySelector(`.error`).textContent = message;
    }
  };

  const handleInputField = e => {
    const value = e.currentTarget.value;
    console.log(value);
    if (validateEmail(e.currentTarget)) {
      $form.classList.remove(`invalid`);
      e.currentTarget.parentElement.querySelector(`.error`).textContent = ``;
    } else {
      if (!$form.classList.contains(`invalid`)) {
        $form.classList.add(`invalid`);
        showValidationErrors();
      }
    }
  };

  const validateEmail = field => {
    if (field.type === `email`) {
      const expression = /(?!.*\.{2})^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|`((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?`)@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;// eslint-disable-line

      return expression.test(String(field.value).toLowerCase());
    } else {
      return;
    }
  };

  const addValidationListeners = formelements => {
    formelements.forEach($field => {
      $field.addEventListener(`blur`, handleBlurField);
      $field.addEventListener(`input`, handleInputField);
    });
  };

  const init = () => {
    const $singleRoutePage = document.querySelector(`.singleRoutePage`);
    const $arPage = document.querySelector(`.arPage`);

    if ($singleRoutePage || $arPage) {
      if ($form) {
        $form.noValidate = true;
        $form.addEventListener(`submit`, handleSubmitForm);
        $form.classList.add(`invalid`);
        addValidationListeners(Array.from($form.elements));
      }
    }
  };

  init();
}
