$( function() {
	$( "#player" ).draggable({ axis: "x", containment: "#area_player", scroll: false, handle: ".handle" });
} );

$(".o-c").click(function(){
	$("#player").toggleClass("minimize");
});

$(".play").click(function(){
	$(".play").toggleClass("pause");
});