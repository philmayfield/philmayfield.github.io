$(window).load(function() {
	var h = $("#binder").height();
	var rows = h / 42;
	rows = Math.ceil(rows);
	var newheight = rows * 42;
	$("#binder").height(newheight);
});

$(document).ready(function() {
    $("#getp").click(function() {
		h = $("#binder").height();
		rows = h / 42;
		rows = Math.ceil(rows);
		newheight = rows * 42;
		$("#fortesting").text("The height for content is " + h + "px. Using " + rows + " rows. New height is " + newheight + "px.");
		$("#binder").height(newheight);
	});
});