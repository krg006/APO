$(document).ready(function() {
	$('.popupBox').draggable({
		containment: 'document'
	});
	
	$('.popupBox2').draggable({
		containment: 'document'
	});
});

function showPopup(popupID, shadeID) {
	$('#' + popupID).show();
	$('#' + shadeID).show();
}
		
function killPopup(popupID, shadeID) {
	$('#' + popupID).hide();
	$('#' + shadeID).hide();
	$('#' + popupID + ' #form_register input').val('');
}

function killAllPopups(shadeID) {
	$('.popupBox').hide();
	$('#' + shadeID).hide();
}