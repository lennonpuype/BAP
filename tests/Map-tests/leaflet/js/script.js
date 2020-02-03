{
  var map,
    dir;

  map = L.map('map', {
    layers: MQ.mapLayer(),
    center: [38.895345, -77.030101],
    zoom: 15
  });

  dir = MQ.routing.directions();

  dir.route({
    locations: [
      '1600 pennsylvania ave, washington dc',
      '935 pennsylvania ave, washington dc'
    ]
  });

  map.addLayer(MQ.routing.routeLayer({
    directions: dir,
    fitBounds: true
  }));
}