$(document).ready(function() {
	$('.popupBox').draggable({
		containment: 'document'
	});
	
	$('.popupBox2').draggable({
		containment: 'document'
	});
});

function showPopup(popupID, shadeID) {
	
	if (!$(".popupBox2#" + popupID).is(":visible")) {
		$(".popupBox2#" + popupID).show();
		$("#" + shadeID).show();
	}
}

function killPopup(popupID, shadeID) {
	
	if ($(".popupBox2#" + popupID).is(":visible")) {
		$(".popupBox2#" + popupID).hide();
		$("#" + shadeID).hide();
	}
}

function togglePopup(popupID, shadeID, extraInfo) {
	
	if (!$(".popupBox2#" + popupID).is(":visible")) {
		$(".popupBox2#" + popupID).show();
		$("#" + shadeID).show();
	} else {
		$(".popupBox2#" + popupID).hide();
		$("#" + shadeID).hide();
	}
}
