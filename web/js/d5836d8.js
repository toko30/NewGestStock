/* global $ */
$(function() {
    $('#formComposant_famille').on('change', function() {
        
        var path = $("#pathAjax").attr("data-path") + '-' + $('#formComposant_famille').val();
        $.ajax({
        type: 'GET',
        url: path,
        timeout: 30000,
        success: function(data) 
        {
            $('#formComposant_sousFamille').html();
            $('#formComposant_sousFamille').html(data);
        }
        })
    })
});

$('.sousMenu').on('click', function(){

	if($('#' + this.id + '11').css('display') == 'none')
	{
		$('#' + this.id + '1').attr('src', '../../img/moins.png');
		$('#' + this.id + '11').slideDown()

	}
	else
	{
		$('#' + this.id + '1').attr('src', '../../img/plus.png');
		$('#' + this.id + '11').slideUp();
	}
});
$('.titreCheckBox').on('click', function(){

	if($('#' + this.id + '11').css('display') == 'none')
	{
		$('#' + this.id + '1').attr('src', '../../img/moins.png');
		$('#' + this.id + '11').slideDown();
		$('#' + this.id + '11').css('display', 'block');
	}
	else
	{
		$('#' + this.id + '1').attr('src', '../../img/plus.png')
		$('#' + this.id + '11').slideUp();
	}
});
$('.imgFlecheCheckBox').on('click', function(){

	if($('#' + this.id + '1').css('display') == 'none')
	{
		$('#' + this.id).attr('src', '../../img/moins.png');
		$('#' + this.id + '1').slideDown();
		$('#' + this.id + '1').css('display', 'block');
	}
	else
	{
		$('#' + this.id).attr('src', '../../img/plus.png')
		$('#' + this.id + '1').slideUp();
	}
});
