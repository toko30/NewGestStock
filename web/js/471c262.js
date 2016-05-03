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
$( document ).ready(function() {
    $('.visible').each( function(index){
        
    });
});