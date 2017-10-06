jQuery( document ).ready( function( $ ){
	$( 'a' ).on( 'click', function( e ){
		e.preventDefault();
		var link = $( this ).attr( 'href' );
		alert( 'You clicked a link that goes to ' + link );
		window.location = link;
	});
});