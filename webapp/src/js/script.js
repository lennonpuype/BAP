{
  const $page1 = document.querySelector(`.page1`);
  const $page2 = document.querySelector(`.page2`);
  const $page3 = document.querySelector(`.page3`);
  const $page4 = document.querySelector(`.page4`);

  let currentLanguage;
  let activeCityId = 0;
  let unlockedRouteId = [];

  const init = () => {
    const $index = document.querySelector(`.index`);
    if ($index) {
      manageHomePage();

      const startTags = [
        "Start exploring",
        "Commencez à explorer",
        "Start met verkennen"
      ];

      let iPrev = 0;
      const $startBtn = document.querySelector(`.startBtn`);

      setInterval(() => {
        const iNew = iPrev;

        if (iNew === startTags.length - 1) {
          iPrev = 0;
        } else {
          iPrev++;
        }

        $startBtn.textContent = startTags[iNew];
      }, 1500);

      const $body = document.querySelector(`.body`);
      $body.removeAttribute("style");
    }

    const $routePage = document.querySelector(`.routePage`);

    if ($routePage) {
      manageRoutePage();
    }

    // fetch(`index.php?page=routes`, {
    //   headers: new Headers({ Accept: 'application/json' }),
    //   method: 'POST',
    //   body: 'sdlfmldsfkmldsfkmldfsk'
    // })
    //   .then(r => r.json())
    //   .then(json => {
    //     console.log(json);
    //   }).catch(err => console.log(err));
  };

  const manageRoutePage = () => {
    handleRouteJSON();
  };

  const handleRouteJSON = () => {
    const url = `./assets/data/cities.json`;
    fetch(url)
      .then(r => r.json())
      .then(parseCities);
  };

  const parseCities = data => {
    const city = data.cities[activeCityId];
    const routes = city.routes;

    routes.map(route => {
      createRouteCards(route);
    });

    const $a = document.querySelectorAll(`.route_button`);
    const allA = Array.from($a);

    const $routeIds = document.querySelectorAll(`.routeId`);
    const routeIdArray = Array.from($routeIds);

    routeIdArray.map(routeId => {
      unlockedRouteId.push(routeId.textContent);
      unlockedRouteId.sort();
    });

    console.log(unlockedRouteId);

    for (let i = 0; i < allA.length; i++) {
      // console.log(unlockedRouteIdNew[i]);
      // console.log(allA[i].dataset.id);
      // console.log("");

      if (unlockedRouteId[i] !== undefined) {
        allA[i].setAttribute(`href`, `index.php?page=route&id=${routes[i].id}`);
        allA[i].classList.add(`unlocked`);
        allA[i].classList.remove(`locked`);
        allA[i].textContent = `Start`;
      }

      if (unlockedRouteId[i] === undefined) {
        allA[i].setAttribute(`href`, `#`);
        allA[i].classList.add(`locked`);
        allA[i].classList.remove(`unlocked`);
        allA[i].textContent = `Voer code in`;
      }

      const $lockedRoutes = document.querySelectorAll(`.locked`);
      const lockedRoutesArray = Array.from($lockedRoutes);
      const $routePage = document.querySelector(`.routePage`);
      lockedRoutesArray.map(lockedRoute => {
        lockedRoute.addEventListener(`click`, e => {
          const $popup = document.querySelector(`.popup_code`);
          $popup.classList.remove(`hidden`);
          $routePage.classList.add(`hidden`);
          showPopupCodeScreen(currentLanguage, $popup);
        });
      });
    }

    const $startBtn = document.querySelector(`.unlocked`);
    $startBtn.addEventListener(`click`, handleClickUnlockedStartButton);
  };

  const handleClickUnlockedStartButton = e => {
    console.log(e);
  };

  const createRouteCards = route => {
    const $routes = document.querySelector(`.routes`);
    const $article = document.createElement(`article`);
    $routes.appendChild($article);
    $article.classList.add(`route`);

    const $h1 = document.createElement(`h1`);
    const $ul = document.createElement(`ul`);
    const $li = document.createElement(`li`);
    const $a = document.createElement(`a`);

    $article.appendChild($h1);
    $article.appendChild($ul);
    $article.appendChild($a);
    $ul.appendChild($li);

    $h1.classList.add(`route_name`);
    $ul.classList.add(`route_parameters`);
    $li.classList.add(`route_parameter`);
    $a.classList.add(`route_button`);

    $a.dataset.id = route.id;

    $h1.textContent = route.name;

    $ul.innerHTML = `<li class="route_parameter">${route.distance}</li>
    <li class="route_parameter">${route.time}</li>
    <li class="route_parameter">${route.waypoints.length} points</li>`;
  };

  const showPopupCodeScreen = (language, $popup) => {
    let codeValue = ``;
    const $a = document.createElement(`a`);

    $popup.innerHTML = `<form>
    <input type="hidden" name="action" value="entercode"/>
    <input type="hidden" name="l" value="nl"/>
    <div class="code_div">
      <input type="text" name="code" class="code" maxlength="5" disabled/>
      <div class="character_btns">
        <button class="char_btn code_btn" type="button">0</button>
        <button class="char_btn code_btn" type="button">1</button>
        <button class="char_btn code_btn" type="button">2</button>
        <button class="char_btn code_btn" type="button">3</button>
        <button class="char_btn code_btn" type="button">4</button>
        <button class="char_btn code_btn" type="button">5</button>
        <button class="char_btn code_btn" type="button">6</button>
        <button class="char_btn code_btn" type="button">7</button>
        <button class="char_btn code_btn" type="button">8</button>
        <button class="char_btn code_btn" type="button">9</button>
        <button class="char_btn code_btn" type="button">S</button>
        <button class="char_btn code_btn" type="button">T</button>
        <button class="char_btn code_btn" type="button">F</button>
        <button class="char_btn code_btn" type="button">K</button>
        <button class="char_btn code_btn" type="button">L</button>
        <button class="char_btn code_btn" type="button">V</button>
        <button class="extra_btn clear_btn code_btn" data-type="clear" type="button">C</button>
        <button class="extra_btn delete_btn code_btn" data-type="remove" type="button"><</button>
      </div>
    </div>
  </form>`;

    const $codeDiv = document.querySelector(`.code_div`);

    $codeDiv.appendChild($a);
    $a.innerHTML = `Unlock nieuwe route!`;

    const $code = document.querySelector(`.code`);

    const $allBtns = document.querySelectorAll(`.char_btn`);
    const allBtnArray = Array.from($allBtns);

    const $allExtraBtns = document.querySelectorAll(`.extra_btn`);
    const allExtraBtnArray = Array.from($allExtraBtns);

    allExtraBtnArray.map(btn => {
      btn.addEventListener(`click`, e => {
        if (e.currentTarget.dataset.type === `clear`) {
          codeValue = ``;
          $code.value = ``;
        }

        if (e.currentTarget.dataset.type === `remove`) {
          codeValue = codeValue.substring(0, codeValue.length - 1);
          $code.value = codeValue;
        }
      });
    });

    allBtnArray.map(btn => {
      btn.addEventListener(`click`, e => {
        if (codeValue.length >= 5) {
          codeValue = codeValue;
        } else {
          codeValue += e.currentTarget.textContent;
        }

        $a.setAttribute(
          `href`,
          `index.php?page=routes&l=nl&code=${codeValue}&action=enternewcode`
        );
        $code.value = codeValue;
      });
    });
  };

  const showCodeScreen = (page, language) => {
    let codeValue = ``;
    const $a = document.createElement(`a`);

    if (language === "dutch") {
      page.innerHTML = `<a class="back_btn">Terug</a>
    <h1>Voer je persoonlijke code<br/>hier in</h1>
    <p class="sub_info">Deze kan je vinden op het<br/>door jou gekozen ticketje</p>
    <form>
      <input type="hidden" name="action" value="entercode"/>
      <input type="hidden" name="l" value="nl"/>
      <div class="code_div">
        <input type="text" name="code" class="code" maxlength="5" disabled/>
        <div class="character_btns">
          <button class="char_btn code_btn" type="button">0</button>
          <button class="char_btn code_btn" type="button">1</button>
          <button class="char_btn code_btn" type="button">2</button>
          <button class="char_btn code_btn" type="button">3</button>
          <button class="char_btn code_btn" type="button">4</button>
          <button class="char_btn code_btn" type="button">5</button>
          <button class="char_btn code_btn" type="button">6</button>
          <button class="char_btn code_btn" type="button">7</button>
          <button class="char_btn code_btn" type="button">8</button>
          <button class="char_btn code_btn" type="button">9</button>
          <button class="char_btn code_btn" type="button">S</button>
          <button class="char_btn code_btn" type="button">T</button>
          <button class="char_btn code_btn" type="button">F</button>
          <button class="char_btn code_btn" type="button">K</button>
          <button class="char_btn code_btn" type="button">L</button>
          <button class="char_btn code_btn" type="button">V</button>
          <button class="extra_btn clear_btn code_btn" data-type="clear" type="button">C</button>
          <button class="extra_btn delete_btn code_btn" data-type="remove" type="button"><</button>
        </div>
      </div>
    </form>`;

      const $codeDiv = document.querySelector(`.code_div`);

      $codeDiv.appendChild($a);
      $a.innerHTML = `Start!`;
    }

    if (language === "french") {
      page.innerHTML = `<a class="back_btn">Retour</a>
    <h1>Entrez votre code personnel</h1>
    <p class="sub_info">Vous le trouverez<br/>au le ticket vous choisisez</p>
    <form>
      <input type="hidden" name="action" value="entercode"/>
      <input type="hidden" name="l" value="nl"/>
      <div class="code_div">
        <input type="text" name="code" class="code" maxlength="5" disabled/>
        <div class="character_btns">
          <button class="char_btn code_btn" type="button">0</button>
          <button class="char_btn code_btn" type="button">1</button>
          <button class="char_btn code_btn" type="button">2</button>
          <button class="char_btn code_btn" type="button">3</button>
          <button class="char_btn code_btn" type="button">4</button>
          <button class="char_btn code_btn" type="button">5</button>
          <button class="char_btn code_btn" type="button">6</button>
          <button class="char_btn code_btn" type="button">7</button>
          <button class="char_btn code_btn" type="button">8</button>
          <button class="char_btn code_btn" type="button">9</button>
          <button class="char_btn code_btn" type="button">S</button>
          <button class="char_btn code_btn" type="button">T</button>
          <button class="char_btn code_btn" type="button">F</button>
          <button class="char_btn code_btn" type="button">K</button>
          <button class="char_btn code_btn" type="button">L</button>
          <button class="char_btn code_btn" type="button">V</button>
          <button class="extra_btn clear_btn code_btn" data-type="clear" type="button">C</button>
          <button class="extra_btn delete_btn code_btn" data-type="remove" type="button"><</button>
        </div>
      </div>
    </form>`;

      const $codeDiv = document.querySelector(`.code_div`);

      $codeDiv.appendChild($a);
      $a.innerHTML = `Commencer!`;
    }

    if (language === "english") {
      page.innerHTML = `<a class="back_btn">Back</a>
    <h1>Enter you personal code here</h1>
    <p class="sub_info">You can find the code on the<br/>ticket you've chosen</p>
    <form>
      <input type="hidden" name="action" value="entercode"/>
      <input type="hidden" name="l" value="nl"/>
      <div class="code_div">
        <input type="text" name="code" class="code" maxlength="5" disabled/>
        <div class="character_btns">
          <button class="char_btn code_btn" type="button">0</button>
          <button class="char_btn code_btn" type="button">1</button>
          <button class="char_btn code_btn" type="button">2</button>
          <button class="char_btn code_btn" type="button">3</button>
          <button class="char_btn code_btn" type="button">4</button>
          <button class="char_btn code_btn" type="button">5</button>
          <button class="char_btn code_btn" type="button">6</button>
          <button class="char_btn code_btn" type="button">7</button>
          <button class="char_btn code_btn" type="button">8</button>
          <button class="char_btn code_btn" type="button">9</button>
          <button class="char_btn code_btn" type="button">S</button>
          <button class="char_btn code_btn" type="button">T</button>
          <button class="char_btn code_btn" type="button">F</button>
          <button class="char_btn code_btn" type="button">K</button>
          <button class="char_btn code_btn" type="button">L</button>
          <button class="char_btn code_btn" type="button">V</button>
          <button class="extra_btn clear_btn code_btn" data-type="clear" type="button">C</button>
          <button class="extra_btn delete_btn code_btn" data-type="remove" type="button"><</button>
        </div>
      </div>
    </form>`;

      const $codeDiv = document.querySelector(`.code_div`);

      $codeDiv.appendChild($a);
      $a.innerHTML = `Start!`;
    }

    const $code = document.querySelector(`.code`);

    const $allBtns = document.querySelectorAll(`.char_btn`);
    const allBtnArray = Array.from($allBtns);

    const $allExtraBtns = document.querySelectorAll(`.extra_btn`);
    const allExtraBtnArray = Array.from($allExtraBtns);

    allExtraBtnArray.map(btn => {
      btn.addEventListener(`click`, e => {
        if (e.currentTarget.dataset.type === `clear`) {
          codeValue = ``;
          $code.value = ``;
        }

        if (e.currentTarget.dataset.type === `remove`) {
          codeValue = codeValue.substring(0, codeValue.length - 1);
          $code.value = codeValue;
        }
      });
    });

    allBtnArray.map(btn => {
      btn.addEventListener(`click`, e => {
        if (codeValue.length >= 5) {
          codeValue = codeValue;
        } else {
          codeValue += e.currentTarget.textContent;
        }

        $a.setAttribute(`href`, `index.php?page=routes&l=nl&code=${codeValue}`);
        $code.value = codeValue;
      });
    });
  };

  const manageHomePage = () => {
    //Handle Page 1
    const $pageBtn1 = $page1.querySelector(`.page_btn`);
    $pageBtn1.addEventListener(`click`, () => {
      $page1.classList.add(`inactive`);
      $page2.classList.remove(`inactive`);
    });

    //Handle Page 2
    const $pageBtns2 = $page2.querySelectorAll(`.page_btn`);
    const page2ButtonsArray = Array.from($pageBtns2);

    page2ButtonsArray.map(pageBtns => {
      pageBtns.addEventListener(`click`, e => {
        const currentTarget = e.currentTarget;
        currentLanguage = currentTarget.dataset.language;

        $page2.classList.add(`inactive`);
        $page3.classList.remove(`inactive`);

        if (currentLanguage === `dutch`) {
          $page3.innerHTML = `<a class="back_btn">Terug</a>
          <h1>Test de A.R. Experience</h1>
          <p class="sub_info">Sta je bij de installatie?<br/>Scan het A.R. vlak en kijk wat er gebeurt</p>
          <div class="arscene_div">
            <iframe src="index.php?page=arscene" class="arscene_iframe"></iframe>
          </div>
          <a class="page_btn">Voer de code in</a>`;

          openPage4();
          goBackToPage2();
        }

        if (currentLanguage === `french`) {
          $page3.innerHTML = `<a class="back_btn">Retour</a>
          <h1>Teste d'experience A.R.</h1>
          <p class="sub_info">Êtes-vous à l'installation?<br/>Scannez le A.R. à plat et regardez ce qui se passe</p>
          <div class="arscene_div">
            <iframe src="index.php?page=arscene" class="arscene_iframe"></iframe>
          </div>
          <a class="page_btn">Entrez le code</a>`;

          openPage4();
          goBackToPage2();
        }

        if (currentLanguage === `english`) {
          $page3.innerHTML = `<a class="back_btn">Back</a>
          <h1>Test the A.R. Experience</h1>
          <p class="sub_info">Are you next to a installation?<br/>Scan the A.R. image an see what happens</p>
          <div class="arscene_div">
            <iframe src="index.php?page=arscene" class="arscene_iframe"></iframe>
          </div>
          <a class="page_btn">Enter your code</a>`;
          goBackToPage2();
          openPage4();
        }
      });
    });
  };

  const goBackToPage2 = () => {
    const pageBtn = $page3.querySelector(`.back_btn`);
    pageBtn.addEventListener(`click`, () => {
      $page3.classList.add(`inactive`);
      $page2.classList.remove(`inactive`);
    });
  };

  const openPage4 = () => {
    const $pageBtn3 = $page3.querySelector(`.page_btn`);
    $pageBtn3.addEventListener(`click`, () => {
      $page3.classList.add(`inactive`);
      $page4.classList.remove(`inactive`);

      if (currentLanguage === `dutch`) {
        showCodeScreen($page4, "dutch");
      }

      if (currentLanguage === `french`) {
        showCodeScreen($page4, "french");
      }

      if (currentLanguage === `english`) {
        showCodeScreen($page4, "english");
      }

      const pageBtn = $page4.querySelector(`.back_btn`);
      pageBtn.addEventListener(`click`, () => {
        $page4.classList.add(`inactive`);
        $page3.classList.remove(`inactive`);
      });
    });
  };

  init();
}
