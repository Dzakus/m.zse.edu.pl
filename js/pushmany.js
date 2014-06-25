var fun = function () {
    var menuW = '';
    if ($(window).width() < 615) {
        $('.navbar-brand').text("ZSEiI w Sosnowcu");
        return menuW = '85%';
    }
    else {
        $('.navbar-brand').text("Zespół Szkół Elektronicznych i Informatycznych w Sosnowcu");
        return menuW = '20%';
    }
};
   $(document).ready(function() {
      $("#my-menu").mmenu({
         slidingSubmenus: false,
      });
      $("#my-button").click(function() {
         $("#my-menu").trigger("open.mm");
      });
      fun();
   });