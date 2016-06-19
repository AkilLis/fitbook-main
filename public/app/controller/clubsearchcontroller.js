app.controller('searchCtrl', function(NgMap) {
  NgMap.getMap().then(function(map) {
    var vm = this;

    vm.toggleBounce = function() {
      debugger;
      if (this.getAnimation() != null) {
        this.setAnimation(null);

      } else {
        this.setAnimation(google.maps.Animation.BOUNCE);
      }
    }
  });
});