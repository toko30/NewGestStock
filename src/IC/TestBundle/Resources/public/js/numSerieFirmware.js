

$('#firmware').on('change', function()
{ 
    if($('select option:selected').attr('class') == 0)
    {
        $('.numSeriePF').css('visibility', 'hidden');
    }
    else
    {
        $('.numSeriePF').css('visibility', 'visible');
    }
});