var fun = function(){
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
$(document).ready(function(){
    var w = fun();
	$( '#menu' ).multilevelpushmenu({
        collapsed: true,
        menuWidth: w,
        menuHeight: '100%',
        mode: "overlap",
        onItemClick: function(){
            console.log(arguments);
            var $item = arguments[2],
                link = $item.find('a').href();
        }

	});

});

$(window).resize(function () {
    fun();
    $( '#menu' ).multilevelpushmenu( 'redraw' );
});