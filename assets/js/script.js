
jQuery('input#browse').change(function() {
	if ($(this).val())
		jQuery('form#upload').submit();
	else
		return;
});

jQuery('img.pic').click(function() {
	var path = $(this).attr('src');
	jQuery('img#data').attr('src', path);
});

jQuery('button#album').click(function() {
	jQuery('form#album-delete').submit();
});