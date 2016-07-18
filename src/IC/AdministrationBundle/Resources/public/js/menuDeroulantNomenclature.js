$('.nomenclature').on('click', function(){

	if($('#' + this.id + '1').css('display') == 'none')
	{
        $('.nomenclature').each(function() {
            $('#' + this.id + '1').slideUp();
        });
        
		$('#' + this.id + '1').slideDown()
	}
	else
	{
		$('#' + this.id + '1').slideUp();
	}
});
$('input[type="radio"]').on('click', function()
{
	if($(this).val() == '0')
		$(this).parent().parent().prev().removeClass('nomenclatureChecked');
	else
		$(this).parent().parent().prev().addClass('nomenclatureChecked');
});