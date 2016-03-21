$("#inputEnregistrement").focus();

var finEnregistrement = false;
var jsonObjects = {'ref': [], 'numSerie': []};
var arrayNumSerie = [];
var arrayRef = [];

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
        
        if(finEnregistrement == false)
        {
            if(valeurNumSerie.length != 0)
            {
                if(presence == -1)
                {
                    arrayNumSerie.push(valeurNumSerie);
                    arrayRef.push(valeurRef);
                    
                    jsonObjects.ref.push(valeurRef);
                    jsonObjects.numSerie.push(valeurNumSerie);

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
                alert('Veuillez renseigné un numéro de série'); 
            }            
        }
        else
        {
            alert('Tout les lecteurs on été enregistrés'); 
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
    var pathPetite = $("#pathAjaxPetite").attr("data-path");
    var pathMoyenne = $("#pathAjaxMoyenne").attr("data-path");
    var pathGrande = $("#pathAjaxGrande").attr("data-path");
    var arrayLecteur = [];
    var arrayRefPetite = [];
    var arrayRefMoyenne = [];
    var arrayRefGrande = [];
    var arrayNumSeriePetite = [];
    var arrayNumSerieMoyenne = [];
    var arrayNumSerieGrande = [];
    var nbPetite = 0;
    var printers = dymo.label.framework.getPrinters();
    var printerName = '';
    var label = '';
    var pathXml = '';
    
    if (printers.length == 0)
        throw 'No DYMO printers are installed. Install DYMO printers.';
    else
    {
        for (var i = 0; i < printers.length; ++i)
        {
            var printer = printers[i];
            if (printer.printerType == 'LabelWriterPrinter')
            {
                printerName = printer.name;
                break;
            }
        }
        
        $('.lecteur').each(function()
        {   
            arrayLecteur.push($(this));
        });
        
        for(i = 0; i < arrayLecteur.length; i++)
        {        
            for(var i1 = 0; i1 < arrayRef.length; i1++)
            {
                if(arrayLecteur[i].attr('name') == arrayRef[i1])
                {               
                    if(arrayLecteur[i].attr('petite') != 0)
                    {
                        for(var i2 = 0; i2 < arrayLecteur[i].attr('petite'); i2++)
                        {
                            arrayRefPetite.push(arrayRef[i1]);
                            arrayNumSeriePetite.push(arrayNumSerie[i1]);
                        }
                    }
                    
                    if(arrayLecteur[i].attr('moyenne') != 0)
                    {
                        for(var i2 = 0; i2 < arrayLecteur[i].attr('moyenne'); i2++)
                        {
                            arrayRefMoyenne.push(arrayRef[i1]);
                            arrayNumSerieMoyenne.push(arrayNumSerie[i1]);
                        }
                        
                    }
                    
                    if(arrayLecteur[i].attr('grande') != 0)
                    {
                        for(var i2 = 0; i2 < arrayLecteur[i].attr('grande'); i2++)
                        {
                            arrayRefGrande.push(arrayRef[i1]);
                            arrayNumSerieGrande.push(arrayNumSerie[i1]);          
                        }
                    }
                }
            } 
        }
        
        if(arrayRefPetite.length != 0)
            alert('Vérifier que les petites etiquettes sont bien dans l\'imprimante');
        
        for(i = 0; i < arrayRefPetite.length; i++)
        {
            if(i%2 == 0)
            {
                var ref1 = arrayRefPetite[i];
                var numSerie1 = arrayNumSeriePetite[i];
                
                if(i + 1 == arrayRefPetite.length)
                {
                    pathXml = pathPetite + '_' + ref1 + '_' + numSerie1 + '_XXX_00000000';
                    
                    $.ajax({
                        type: 'GET',
                        url: pathXml,
                        success: function(xml) 
                        { 
                            label = dymo.label.framework.openLabelXml(xml);
                            label.print(printerName);
                        }
                    }); 
                    break;   
                }
            }
            else
            {
                pathXml = pathPetite + '_' + ref1 + '_' + numSerie1 + '_' + arrayRefPetite[i] + '_' + arrayNumSeriePetite[i];
                
                $.ajax({
                    type: 'GET',
                    url: pathXml,
                    success: function(xml) 
                    { 
                        label = dymo.label.framework.openLabelXml(xml);
                        label.print(printerName);
                    }
                });
            }

        }
        
        if(arrayRefMoyenne.length != 0)
            alert('Vérifier que les etiquettes moyennes sont bien dans l\'imprimante');
        
        for(i = 0; i < arrayRefMoyenne.length; i++)
        {
            pathXml = pathMoyenne + '_' + arrayRefMoyenne[i] + '_' + arrayNumSerieMoyenne[i];
            
            $.ajax({
                type: 'GET',
                url: pathXml,
                success: function(xml) 
                { 
                    label = dymo.label.framework.openLabelXml(xml);
                    label.print(printerName);
                }
            });
        }
        
        if(arrayRefGrande.length != 0)
            alert('Vérifier que les grandes etiquettes sont bien dans l\'imprimante');
        
        for(i =0; i < arrayRefGrande.length; i++)
        {
            pathXml = pathGrande + '_' + arrayRefGrande[i] + '_' + arrayNumSerieGrande[i];
            
            $.ajax({
                type: 'GET',
                url: pathXml,
                success: function(xml)
                {
                    label = dymo.label.framework.openLabelXml(xml);
                    label.print(printerName);
                }
            });
        }   
    }
              
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
    });
});
    
$('body').on('click', function(e)
{
    $("#inputEnregistrement").focus();
});