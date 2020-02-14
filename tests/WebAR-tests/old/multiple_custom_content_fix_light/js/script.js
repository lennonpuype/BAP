{
  const init = () => {
    const $scene = document.querySelector(`.scene`);
    // const $entity = document.querySelectorAll(`.entity`);
    // const allEntities = Array.from($entity);
    // allEntities.map(entity => {
    //   console.dir(entity);
    // })

    const $marker = document.querySelectorAll(`.marker`);
    const allMarkers = Array.from($marker);
    allMarkers.map(marker => {
      console.dir(marker);
    })


  }

  init();
}