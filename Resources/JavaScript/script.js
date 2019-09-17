$(document).ready(function() {
  // For sticky navigation
  $(".js--section-about").waypoint(
    function(direction) {
      if (direction == "down") {
        $("nav").addClass("sticky");
      } else {
        $("nav").removeClass("sticky");
      }
    },
    {
      offset: "90%;"
    }
  );
});
