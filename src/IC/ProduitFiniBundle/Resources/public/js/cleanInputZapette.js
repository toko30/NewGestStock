$('#pret_numSerie').on('keypress', function(touche, e)
{
    $(this).val($(this).val().replace('#!', '').replace('!#', '').replace('§', ''));

    var appui = touche.which || touche.keyCode;

    if(appui == 13)
    {    
        return false;   
    }
});