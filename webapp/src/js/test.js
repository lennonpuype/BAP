const showCodeScreen = (page, language) => {
  let codeValue = ``;
  const $a = document.createElement(`a`);

  if (language === `dutch`) {
    // eslint-disable-line
    page.innerHTML = `<div class="back_btn">
    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg>
    <a class="back_txt">Terug</a>
    </div>
    <div class="code_content">
  <h1 class="page_title_small">Voer je persoonlijke code<br/>hier in</h1>
  <p class="sub_info">Deze kan je vinden op het door<br/>jou gekozen ticketje</p>
  <form class="code_form">
    <input type="hidden" name="action" value="entercode"/>
    <input type="hidden" name="l" value="nl"/>
    <div class="code_div">
      <div class="code_input">
      <input type="text" name="code" class="code neumorphism_box" maxlength="5" disabled/>
      <a class="help_btn_code">Hulp nodig?</a>
      </div>
      <div class="character_btns">
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">0</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">1</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">2</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">3</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">4</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">5</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">6</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">7</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">8</button>
        <button class="char_btn code_btn btn_shadow" data-type="number" type="button">9</button>
        <button class="char_btn code_btn btn_shadow" data-type="route" type="button">S</button>
        <button class="char_btn code_btn btn_shadow" data-type="city" type="button">T</button>
        <button class="char_btn code_btn btn_shadow" data-type="route" type="button">F</button>
        <button class="char_btn code_btn btn_shadow" data-type="city" type="button">K</button>
        <button class="char_btn code_btn btn_shadow" data-type="city" type="button">L</button>
        <button class="char_btn code_btn btn_shadow" data-type="city" type="button">V</button>
        <button class="extra_btn delete_btn code_btn btn_shadow" data-type="remove" type="button"><</button>
        <button class="extra_btn clear_btn code_btn btn_shadow" data-type="clear" type="button">C</button>
      </div>
    </div>
  </form></div>`;

    const $codeDiv = document.querySelector(`.code_div`);
    const $codeInput = document.querySelector(`.code`);

    setInterval(() => {
      const value = $codeInput.value;
      const firstCharacter = value[0];
      const secondCharacter = value[1];

      $codeDiv.appendChild($a);
      $a.classList.add(`page_btn`, `btn_shadow`);

      //Check if value has 5 characters en the first character or second character is true -> Returns the code is valid to continue
      if (value.length === 5) {
        if (
          (firstCharacter === `K` ||
            firstCharacter === `T` ||
            firstCharacter === `L` ||
            firstCharacter === `V`) &&
          (secondCharacter === `S` ||
            secondCharacter === `T` ||
            secondCharacter === `F`)
        ) {
          $a.innerHTML = `Ga verder >`;
          $a.classList.remove(`hidden`);
          $a.setAttribute(`href`, `index.php?page=routes&l=nl&code=${value}`);
        } else {
          $a.innerHTML = ``;
          $a.classList.add(`hidden`);
          $a.disabled = true;
          $a.removeAttribute(`href`);
        }
      } else {
        $a.innerHTML = ``;
        $a.classList.add(`hidden`);
        $a.disabled = true;
        $a.removeAttribute(`href`);
      }

      const $allBtns = document.querySelectorAll(`.char_btn`);
      const btnArray = Array.from($allBtns);

      btnArray.map(btn => {
        if (value.length === 0) {
          if (btn.dataset.type === `route` || btn.dataset.type === `number`) {
            btn.setAttribute(`disabled`, true);
            btn.classList.add(`inactive_button`);
          } else {
            btn.removeAttribute(`disabled`);
            btn.classList.remove(`inactive_button`);
          }
        }

        if (value.length === 1) {
          if (btn.dataset.type === `route`) {
            btn.removeAttribute(`disabled`);
            btn.classList.remove(`inactive_button`);
          } else {
            btn.setAttribute(`disabled`, true);
            btn.classList.add(`inactive_button`);
          }

          if (btn.dataset.type === `number`) {
            btn.setAttribute(`disabled`, true);
            btn.classList.add(`inactive_button`);
          } else {
            btn.removeAttribute(`disabled`);
            btn.classList.remove(`inactive_button`);
          }
        }

        if (value.length > 1) {
          if (btn.dataset.type === `route` || btn.dataset.type === `city`) {
            btn.setAttribute(`disabled`, true);
            btn.classList.add(`inactive_button`);
          } else {
            btn.removeAttribute(`disabled`);
            btn.classList.remove(`inactive_button`);
          }
        }
      });
    }, 100);
  }

  if (language === `french`) {
    // eslint-disable-line
    page.innerHTML = `<div class="back_btn">
    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg>
    <a class="back_txt">Terug</a>
    </div>
    <div class="code_content">
  <h1 class="page_title_small">Entrez votre code<br/>personnel ici</h1>
  <p class="sub_info">Vous pouvez le trouver sur le ticket que<br/>vous avez choisi</p>
  <form class="code_form">
    <input type="hidden" name="action" value="entercode"/>
    <input type="hidden" name="l" value="fr"/>
    <div class="code_div">
      <div class="code_input">
      <input type="text" name="code" class="code neumorphism_box" maxlength="5" disabled/>
      <a class="help_btn_code" disabled>Besoin d'aide?</a>
      </div>
      <div class="character_btns">
        <button class="char_btn code_btn btn_shadow" type="button">0</button>
        <button class="char_btn code_btn btn_shadow" type="button">1</button>
        <button class="char_btn code_btn btn_shadow" type="button">2</button>
        <button class="char_btn code_btn btn_shadow" type="button">3</button>
        <button class="char_btn code_btn btn_shadow" type="button">4</button>
        <button class="char_btn code_btn btn_shadow" type="button">5</button>
        <button class="char_btn code_btn btn_shadow" type="button">6</button>
        <button class="char_btn code_btn btn_shadow" type="button">7</button>
        <button class="char_btn code_btn btn_shadow" type="button">8</button>
        <button class="char_btn code_btn btn_shadow" type="button">9</button>
        <button class="char_btn code_btn btn_shadow" type="button">S</button>
        <button class="char_btn code_btn btn_shadow" type="button">T</button>
        <button class="char_btn code_btn btn_shadow" type="button">F</button>
        <button class="char_btn code_btn btn_shadow" type="button">K</button>
        <button class="char_btn code_btn btn_shadow" type="button">L</button>
        <button class="char_btn code_btn btn_shadow" type="button">V</button>
        <button class="extra_btn delete_btn code_btn btn_shadow" data-type="remove" type="button"><</button>
        <button class="extra_btn clear_btn code_btn btn_shadow" data-type="clear" type="button">C</button>
      </div>
    </div>
  </form></div>`;

    const $codeDiv = document.querySelector(`.code_div`);
    const $codeInput = document.querySelector(`.code`);

    setInterval(() => {
      const value = $codeInput.value;
      const firstCharacter = value[0];
      const secondCharacter = value[1];

      $codeDiv.appendChild($a);
      $a.classList.add(`page_btn`, `btn_shadow`);

      //Check if value has 5 characters en the first character or second character is true -> Returns the code is valid to continue
      if (value.length === 5) {
        if (
          (firstCharacter === `K` ||
            firstCharacter === `T` ||
            firstCharacter === `L` ||
            firstCharacter === `V`) &&
          (secondCharacter === `S` ||
            secondCharacter === `T` ||
            secondCharacter === `F`)
        ) {
          console.log(`Code is valid`);
          $a.innerHTML = `Continuez >`;
          $a.classList.remove(`ongeldig`);
          $a.setAttribute(`href`, `index.php?page=routes&l=fr&code=${value}`);
        } else {
          console.log(`Enter a valid code`);
          $a.innerHTML = `Code invalide`;
          $a.classList.add(`ongeldig`);
          $a.disabled = true;
          $a.removeAttribute(`href`);
        }
      } else {
        $a.innerHTML = `Code invalide`;
        $a.classList.add(`ongeldig`);
        $a.disabled = true;
        $a.removeAttribute(`href`);
      }
    }, 100);
  }

  if (language === `english`) {
    // eslint-disable-line
    page.innerHTML = `<div class="back_btn">
    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/><path d="M0 0h24v24H0V0z" fill="none"/></svg>
    <a class="back_txt">Terug</a>
    </div>
    <div class="code_content">
  <h1 class="page_title_small">Enter your personal<br/>code here</h1>
  <p class="sub_info">You can find the code on the back<br/>of the card you've chosen</p>
  <form class="code_form">
    <input type="hidden" name="action" value="entercode"/>
    <input type="hidden" name="l" value="en"/>
    <div class="code_div">
      <div class="code_input">
      <input type="text" name="code" class="code neumorphism_box" maxlength="5" disabled/>
      <a class="help_btn_code" disabled>Need help?</a>
      </div>
      <div class="character_btns">
        <button class="char_btn code_btn btn_shadow" type="button">0</button>
        <button class="char_btn code_btn btn_shadow" type="button">1</button>
        <button class="char_btn code_btn btn_shadow" type="button">2</button>
        <button class="char_btn code_btn btn_shadow" type="button">3</button>
        <button class="char_btn code_btn btn_shadow" type="button">4</button>
        <button class="char_btn code_btn btn_shadow" type="button">5</button>
        <button class="char_btn code_btn btn_shadow" type="button">6</button>
        <button class="char_btn code_btn btn_shadow" type="button">7</button>
        <button class="char_btn code_btn btn_shadow" type="button">8</button>
        <button class="char_btn code_btn btn_shadow" type="button">9</button>
        <button class="char_btn code_btn btn_shadow" type="button">S</button>
        <button class="char_btn code_btn btn_shadow" type="button">T</button>
        <button class="char_btn code_btn btn_shadow" type="button">F</button>
        <button class="char_btn code_btn btn_shadow" type="button">K</button>
        <button class="char_btn code_btn btn_shadow" type="button">L</button>
        <button class="char_btn code_btn btn_shadow" type="button">V</button>
        <button class="extra_btn delete_btn code_btn btn_shadow" data-type="remove" type="button"><</button>
        <button class="extra_btn clear_btn code_btn btn_shadow" data-type="clear" type="button">C</button>
      </div>
    </div>
  </form></div>`;

    const $codeDiv = document.querySelector(`.code_div`);
    const $codeInput = document.querySelector(`.code`);

    setInterval(() => {
      const value = $codeInput.value;
      const firstCharacter = value[0];
      const secondCharacter = value[1];

      $codeDiv.appendChild($a);
      $a.classList.add(`page_btn`, `btn_shadow`);

      //Check if value has 5 characters en the first character or second character is true -> Returns the code is valid to continue
      if (value.length === 5) {
        if (
          (firstCharacter === `K` ||
            firstCharacter === `T` ||
            firstCharacter === `L` ||
            firstCharacter === `V`) &&
          (secondCharacter === `S` ||
            secondCharacter === `T` ||
            secondCharacter === `F`)
        ) {
          console.log(`Code is valid`);
          $a.innerHTML = `Continue >`;
          $a.classList.remove(`ongeldig`);
          $a.setAttribute(`href`, `index.php?page=routes&l=en&code=${value}`);
        } else {
          console.log(`Enter a valid code`);
          $a.innerHTML = `Invalid code`;
          $a.classList.add(`ongeldig`);
          $a.disabled = true;
          $a.removeAttribute(`href`);
        }
      } else {
        $a.innerHTML = `Invalid code`;
        $a.classList.add(`ongeldig`);
        $a.disabled = true;
        $a.removeAttribute(`href`);
      }
    }, 100);
  }
