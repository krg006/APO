$(document).ready(function() {
	$('.popupBox').draggable({
		containment: 'document',
		handle: ".boxheader"
	});
});

function showPopup(popupID, shadeID) {
	$('#' + popupID).fadeIn(200);
	$('#' + shadeID).show();
}
		
function killPopup(popupID, shadeID) {
	$('#' + popupID).fadeOut(200);
	$('#' + shadeID).hide();
	$('#' + popupID + ' input').val('');
}

function killAllPopups(shadeID) {
	$('.popupBox').fadeOut(200);
	$('#' + shadeID).hide();
	$('.popupBox input').val('');
}
