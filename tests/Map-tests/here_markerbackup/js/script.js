{
  let mapData = {};
  let userLocation = {};
  let markers = [];
  let routingParameters = [{}]

  const platform = new H.service.Platform({
    'apikey': 'Ymzvxu_5jYrtjqdyrlORjoasI2KdTSwzdLZuyNkPH3k'
  });

  const parseJson = data => {
    mapData = data.cities[0].maps;


    const defaultLayers = platform.createDefaultLayers();

    const map = new H.Map(document.getElementById('map'),
      defaultLayers.vector.normal.map, {
      center: { lat: mapData.lat, lng: mapData.lng },
      zoom: mapData.zm,
      pixelRatio: window.devicePixelRatio || 1
    });

    // routingParameters = {
    //   'mode': 'fastest;car',
    //   'waypoint0': `geo!${data.cities[0].routes[0].waypoints[0].geolocation.lat},${data.cities[0].routes[0].waypoints[0].geolocation.lng}`,
    //   'waypoint1': `geo!${data.cities[0].routes[0].waypoints[1].geolocation.lat},${data.cities[0].routes[0].waypoints[1].geolocation.lng}`,
    //   'waypoint2': `geo!${data.cities[0].routes[0].waypoints[2].geolocation.lat},${data.cities[0].routes[0].waypoints[2].geolocation.lng}`,
    //   'representation': `display`
    // }




    const ui = H.ui.UI.createDefault(map, defaultLayers);
    var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
    // var router = platform.getRoutingService();

    // router.calculateRoute(routingParameters, addMarkersToMap,
    //   function (error) {
    //     alert(error.message);
    //   });

    fetch(data.cities[0].routes[0].route)
      .then(r => r.json())
      .then(d => parseUrl(d, data.cities[0], map));
  }

  const parseUrl = (data, cityData, map) => {
    addMarkersToMap(map, data, cityData);
  }

  const addMarkersToMap = (map, data, cityData, result) => {
    const route = data.response.route;

    // const routeShape = route.shape;
    // const linestring = new H.geo.LineString();

    // console.log(result);

    // routeShape.forEach(function (point) {
    //   var parts = point.split(',');
    //   linestring.pushLatLngAlt(parts[0], parts[1]);
    // });

    // var routeLine = new H.map.Polyline(linestring, {
    //   style: { strokeColor: 'blue', lineWidth: 3 }
    // });

    route.map(routeData => {
      const waypoints = routeData.waypoint;

      waypoints.map(waypoint => {
        const marker = new H.map.Marker({ lat: waypoint.originalPosition.latitude, lng: waypoint.originalPosition.longitude });
        map.addObject(marker);

        markers.push(marker);
        console.log(markers);

        // map.addObjects([routeLine, markers[0], markers[1]]);
        //map.getViewModel().setLookAtData({ bounds: routeLine.getBoundingBox() });

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
        const userMarker = new H.map.Marker({ lat: userLocation.lat, lng: userLocation.lng });
        map.addObject(userMarker);
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