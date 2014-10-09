var fun = function () {
    if ($(window).width() < 615) {
        $('.navbar-brand').text("ZSEiI w Sosnowcu");
    }
    else {
        $('.navbar-brand').text("Zespół Szkół Elektronicznych i Informatycznych w Sosnowcu");
    }
};
$(document).ready(function () {
    $("#my-menu").mmenu({
        slidingSubmenus: false
    });
    $("#my-button").click(function () {
        $("#my-menu").trigger("open.mm");
    });
    fun();

    $("div#inpl_mail_msg pre")
        .each(function () {
            $(this).replaceWith(this.childNodes)
        });
});