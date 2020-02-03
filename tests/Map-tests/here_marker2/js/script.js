{
  let mapData = {};
  let userLocation = {};
  let markers = [];
  let map;

  const platform = new H.service.Platform({
    'apikey': 'Ymzvxu_5jYrtjqdyrlORjoasI2KdTSwzdLZuyNkPH3k'
  });

  const parseJson = data => {
    mapData = data.cities[0].maps;

    const defaultLayers = platform.createDefaultLayers();

    map = new H.Map(document.getElementById('map'),
      defaultLayers.vector.normal.map, {
      center: { lat: mapData.lat, lng: mapData.lng },
      style: "alps",
      zoom: mapData.zm,
      pixelRatio: window.devicePixelRatio || 1
    });

    const ui = H.ui.UI.createDefault(map, defaultLayers);
    var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

    window.addEventListener('resize', () => map.getViewPort().resize());

    fetch(data.cities[0].routes[0].route)
      .then(r => r.json())
      .then(d => parseUrl(d, data.cities[0], map));
  }

  const parseUrl = (data, cityData, map) => {
    addMarkersToMap(map, data, cityData);
  }

  const addMarkersToMap = (map, data, cityData, result) => {
    const route = data.response.route;

    route.map(routeData => {
      const waypoints = routeData.waypoint;

      //Route met wijzers mee
      const maneuvers = routeData.leg[1].maneuver;

      maneuvers.map(maneuver => {
        console.log(maneuver);
      })

      waypoints.map(waypoint => {
        const marker = new H.map.Marker({ lat: waypoint.originalPosition.latitude, lng: waypoint.originalPosition.longitude });
        map.addObject(marker);

        markers.push(marker);

        marker.addEventListener(`tap`, e => {
          const currentMarker = e.target;
          const lat = currentMarker.b.lat;
          const lng = currentMarker.b.lng;
          const clickedWaypoint = findWaypoint(lat, lng, cityData.routes[0].waypoints);

          const $h1 = document.createElement(`h1`);
          const $content = document.querySelector(`.content`);
          $content.textContent = ``;
          $content.appendChild($h1);

          $h1.textContent = clickedWaypoint.name;
        })
      })

      if (userLocation !== ``) {
        setInterval(() => {
          const userMarker = new H.map.Marker({ lat: userLocation.lat, lng: userLocation.lng });
          map.addObject(userMarker);
        }, 1000)
      }
    })
  }

  const findWaypoint = (lat, lng, waypoints) => {
    const triggeredWaypoint = waypoints.filter(waypoint => String(waypoint.geolocation.lat).substring(0, 8) === String(lat).substring(0, 8))
    return triggeredWaypoint[0];
  }

  const init = () => {
    fetch("./assets/data/routes.json")
      .then(r => r.json())
      .then(parseJson);


    setInterval(() => {
      fetchUserLocation();
    }, 100)
  }

  const fetchUserLocation = () => {
    navigator.geolocation.getCurrentPosition(function (location) {
      userLocation = {
        lat: location.coords.latitude,
        lng: location.coords.longitude,
        acc: location.coords.accuracy
      }
    });
  }

  init();
}