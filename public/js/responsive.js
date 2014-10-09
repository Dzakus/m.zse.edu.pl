$(document).ready(function(){
	// HTML markup implementation, overlap mode
	$( '#menu' ).multilevelpushmenu({
        collapsed: true,
		containersToPush: [$( '#pushobj' )],
		menuWidth: '25%',
		menuHeight: '100%',
        mode: "cover"
	});
});

$(window).resize(function () {
	$( '#menu' ).multilevelpushmenu( 'redraw' );
});
