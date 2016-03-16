$("#inputEnregistrement").focus();

var finEnregistrement = false;
var jsonObjects = [];
var arrayNumSerie = [];

$('#inputEnregistrement').on('keyup', function(touche, e)
{
    var appui = touche.which || touche.keyCode;
    
    if(appui == 13)
    {
        var compteur = parseInt($('#focus .compteur .decrement').text()) - 1;
        var valeurNumSerie = $(this).val().replace('#!', '').replace('!#', '').replace('§', '');
        var valeurRef = $('#focus').attr('name');
        var presence = jQuery.inArray(valeurNumSerie, arrayNumSerie);
        var arrayLignes = $('#listeLecteur');
        var jsonObj1 = {};
        
        if(valeurNumSerie.length != 0 && finEnregistrement == false)
        {
           if(presence == -1)
            {
                arrayNumSerie.push(valeurNumSerie);
                
                jsonObj1.ref = valeurRef;
                jsonObj1.numSerie = valeurNumSerie;
                jsonObjects.push(jsonObj1);
                
                arrayLignes.append('<tr><td>' + valeurRef + '</td><td>' + valeurNumSerie + '</td></tr>');     
                
                $('#focus').attr('name');
                $('#focus .compteur .decrement').text(compteur);
                
                if(compteur == 0)
                {
                    $('#focus').attr('class', 'lecteurTermine');
                    $('#focus').removeAttr('id');
                    $('.lecteur').attr('id', 'focus');
                }
            }
            else
            {         
                alert('Le lecteur est déjà renseigné');  
            }            
        }
        else
        {
            alert('Le lecteur est déjà renseigné'); 
        }
        var stop = false;
        
        $('.decrement').each(function()
        { 
            if(parseInt($(this).text()) == 0 && stop == false)
                finEnregistrement = true;
            else
            {
                finEnregistrement = false;
                stop = true;
            }
        });
        
        if(finEnregistrement == true)
        {
            $('#titreChange').text('Enregistrement des lecteurs terminé');     
            $('#inputEnregistrement').remove(); 
        }
        
        $(this).val('');
    }
});

$('.lecteur').on('click', function(e)
{
    if($(this).attr('id') != 'focus' && $(this).attr('class') != 'lecteurTermine')
    {
        $('#focus').removeAttr('id');
        $(this).attr('id', 'focus');
    }
});

$('#addLecteur').on('click', function() 
{
    var path = $("#pathAjax").attr("data-path");
    
    $.ajax({
    type: 'POST',
    url: path,
    data: {listeLecteur : jsonObjects},
    dataType: "json",
    timeout: 30000,
    success: function(data) 
    {
        window.location.href =  document.referrer;
    }
    })
})
    
$('body').on('click', function(e)
{
    $("#inputEnregistrement").focus();
});