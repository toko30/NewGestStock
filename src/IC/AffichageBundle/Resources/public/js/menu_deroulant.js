
$('.sousMenu').on('click', function(){

	if($('#' + this.id + '11').css('display') == 'none')
	{
		$('#' + this.id + '1').attr('src', '../../Resources/public/images/moins.png');
		$('#' + this.id + '11').slideDown()

	}
	else
	{
		$('#' + this.id + '1').attr('src', '../../Resources/public/images/plus.png');
		$('#' + this.id + '11').slideUp();
	}
});
$('.titreCheckBox').on('click', function(){

	if($('#' + this.id + '11').css('display') == 'none')
	{
		$('#' + this.id + '1').attr('src', '../../Resources/public/images/moins.png');
		$('#' + this.id + '11').slideDown();
		$('#' + this.id + '11').css('display', 'block');
	}
	else
	{
		$('#' + this.id + '1').attr('src', '../../Resources/public/images/plus.png')
		$('#' + this.id + '11').slideUp();
	}
});
$('.imgFlecheCheckBox').on('click', function(){

	if($('#' + this.id + '1').css('display') == 'none')
	{
		$('#' + this.id).attr('src', '../../Resources/public/images/moins.png');
		$('#' + this.id + '1').slideDown();
		$('#' + this.id + '1').css('display', 'block');
	}
	else
	{
		$('#' + this.id).attr('src', '../../Resources/public/images/plus.png')
		$('#' + this.id + '1').slideUp();
	}
});
