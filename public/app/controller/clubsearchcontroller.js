app.controller('searchCtrl', function($scope, $http, NgMap) {
  
  $scope.location = { lat: 47.923535, lon: 106.888721 };

  $scope.findMyLocation = function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        $scope.location = { lat: pos.lat, lon: pos.lng };
      }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
      });
      
    } else {
      error('Geo Location is not supported');
    }             
  }  

  NgMap.getMap().then(function(map) {

  });
});