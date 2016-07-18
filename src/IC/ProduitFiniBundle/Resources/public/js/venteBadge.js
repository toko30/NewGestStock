var arrayIdClient = [];
var arrayRef = [];
var arrayQuantite = [];
var path = $("#pathAjax").attr("data-path");
var path1 = $("#pathAjax1").attr("data-path");
var d = new Date();
var month = d.getMonth()+1;
var day = d.getDate();

var date = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + d.getFullYear();

$('#buttonAddListeVente').on('click', function()
{
    var valeurRef = $('#inputRef').val();
    var idClient = $('#selectClient').val();
    var quantite = $('#inputQuantite').val();
    var presence = jQuery.inArray(valeurRef, arrayRef);
    
    if(idClient != 0)
    {  
        if(presence == -1)
        { 
            if(quantite != '' && valeurRef != '')
            {       
                $.ajax({
                    type: 'POST',
                    url: path,
                    data: {ref: valeurRef, quantite: quantite},
                    timeout: 30000,
                    success: function(data) 
                    {
                        if(data == -1)
                            alert('référence introuvable');
                        else if(data == -2)
                            alert('quantité en stock insufisante');
                        else
                        {
                            arrayIdClient.push(idClient);
                            arrayRef.push(valeurRef);
                            arrayQuantite.push(quantite);
                            
                            var tableau = $('#tabListeVente').get();
                            var ligne = tableau[0].insertRow(-1);
                            var colonne1 = ligne.insertCell(0);
                            var colonne2 = ligne.insertCell(1);
                            var colonne3 = ligne.insertCell(2);
                            var colonne4 = ligne.insertCell(3);
                                        
                            colonne1.innerHTML = $('#selectClient option:selected').text();
                            colonne2.innerHTML = valeurRef;      
                            colonne3.innerHTML = quantite; 
                            colonne4.innerHTML = date;

                            $('#SendSell').css('display', 'block');    
                            $('#inputRef').val('').focus(); 
                            $('#inputQuantite').val('').focus();                             
                        }               
                    }
                });
            }
            else
                alert('Veuillez remplir tout les champs');  
        }
        else
            alert('Numéro de série déja ajouté à la liste');  
    }
    else
        alert('Veuillez sélectionner un client');     
});

$('#SendSell').on('click', function()
{
    var stringRefjson = JSON.stringify(arrayRef);
    var stringIdClientjson = JSON.stringify(arrayIdClient);
    var stringQuantitejson = JSON.stringify(arrayQuantite);
    
    $.ajax({
        type: 'POST',
        url: path1,
        data: {listRef: stringRefjson, listIdClient: stringIdClientjson, listQuantite: stringQuantitejson},
        timeout: 30000,
        success: function(data) 
        {
            history.go(0);
        }
    });
});