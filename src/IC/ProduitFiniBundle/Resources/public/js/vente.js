var arrayIdClient = [];
var arrayNumSerie = [];
var path = $("#pathAjax").attr("data-path");
var path1 = $("#pathAjax1").attr("data-path");
var d = new Date();
var month = d.getMonth()+1;
var day = d.getDate();

var date = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + d.getFullYear();
                
$('#inputNumSerie').on('keyup', function(touche, e)
{
    var appui = touche.which || touche.keyCode;
    var vide = 0;
    var valeurNumSerie = $(this).val().replace('#!', '').replace('!#', '').replace('§', '');
    var idClient = $('#selectClient').val();
    var presence = jQuery.inArray(valeurNumSerie, arrayNumSerie);
    
    if(appui == 13)
    {
        if(idClient != 0)
        {
            if(presence == -1)
            {    
                $.ajax({
                    type: 'POST',
                    url: path,
                    data: {numSerie: valeurNumSerie},
                    timeout: 30000,
                    success: function(data) 
                    {
                        if(data == -1)
                            alert('lecteur déja vendu');
                        else if(data == -2)
                            alert('numéro de série introuvable');
                        else
                        {
                            arrayIdClient.push(idClient);
                            arrayNumSerie.push(valeurNumSerie);
                            var tableau = $('#tabListeVente').get();
                            var ligne = tableau[0].insertRow(-1);
                            var colonne1 = ligne.insertCell(0);
                            var colonne2 = ligne.insertCell(1);
                            var colonne3 = ligne.insertCell(2);
                            var colonne4 = ligne.insertCell(3);
                                        
                            colonne1.innerHTML = $('#selectClient option:selected').text();
                            colonne2.innerHTML = valeurNumSerie;     
                            colonne3.innerHTML = data;   
                            colonne4.innerHTML = date; 
                            $('#SendSell').css('display', 'block');
                        }
                        $('#inputNumSerie').val('').focus(); 
                    }
                });
            }
            else
                alert('Numéro de série déja ajouté à la liste');
        }
        else
            alert('Veuillez sélectionner un client');       
    }
});

$('#buttonAddListeVente').on('click', function()
{
    var idClient = $('#selectClient').val();
    var valeurNumSerie = $('#inputNumSerie').val().replace('#!', '').replace('!#', '').replace('§', '');
    var presence = jQuery.inArray(valeurNumSerie, arrayNumSerie);
    
    if(idClient != 0)
    {
        if(presence == -1)
        {
            $.ajax({
                type: 'POST',
                url: path,
                data: {numSerie: valeurNumSerie},
                timeout: 30000,
                success: function(data) 
                {
                    if(data == -1)
                        alert('lecteur déja vendu');
                    else if(data == -2)
                        alert('numéro de série introuvable');
                    else
                    {
                        arrayIdClient.push(idClient);
                        arrayNumSerie.push(valeurNumSerie);
                        var tableau = $('#tabListeVente').get();
                        var ligne = tableau[0].insertRow(-1);
                        var colonne1 = ligne.insertCell(0);
                        var colonne2 = ligne.insertCell(1);
                        var colonne3 = ligne.insertCell(2);
                        var colonne4 = ligne.insertCell(3);
                                    
                        colonne1.innerHTML = $('#selectClient option:selected').text();
                        colonne2.innerHTML = valeurNumSerie;     
                        colonne3.innerHTML = data;   
                        colonne4.innerHTML = date;            
                        $('#SendSell').css('display', 'block');
                    }
                    $('#inputNumSerie').val('').focus();
                }
            });
        }
        else
            alert('Numéro de série déja ajouté à la liste');    
    }
    else
        alert('Veuillez sélectionner un client');
});

$('#SendSell').on('click', function()
{
    var stringNumSeriejson = JSON.stringify(arrayNumSerie);
    var stringIdClientjson = JSON.stringify(arrayIdClient);
    
    $.ajax({
        type: 'POST',
        url: path1,
        data: {listNumSerie: stringNumSeriejson, listIdClient: stringIdClientjson},
        timeout: 30000,
        success: function(data) 
        {
            history.go(0);
        }
    });
});