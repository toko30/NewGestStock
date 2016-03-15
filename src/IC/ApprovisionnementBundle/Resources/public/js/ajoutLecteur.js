$('#inputEnregistrement').on('keyup', function(touche)
{
    var appui = touche.which || touche.keyCode;
    
    if(appui == 13)
    {
        var listelecteur = $('#listeLecteur').html();

        $('#listeLecteur').html(listelecteur + '<br>' + $('#inputEnregistrement').val().replace('#!', '').replace('!#', ''));
        $('#inputEnregistrement').val('');
    }
});

$('.lecteur').on('click', function(touche)
{
    
});