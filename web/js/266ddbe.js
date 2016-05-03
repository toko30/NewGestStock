$("#inputNumSerie").focus();

var finEnregistrement = false;
var jsonObjects = {'ref': [], 'numSerie': []};
var arrayNumSerie = new Array();
var arrayNumSeriePF = new Array();
var inc = 0;

$('#inputNumSerie').on('keyup', function(touche, e)
{
    var appui = touche.which || touche.keyCode;
    var vide = 0;
    var valeurNumSerie = $(this).val().replace('#!', '').replace('!#', '').replace('§', '');
    
    if(appui == 13)
    {           
        $('.numSerieAssemblage').each(function()
        {
            if($(this).text() == valeurNumSerie) 
            {
                    var split = $(this).attr('class').split(' ');
                
                    $('.enteteNumSerie').each(function()
                    {                   
                        if($(this).attr('id') == split[1])
                        {
                            $(this).text(valeurNumSerie);
                        }
                    });
            }
        });
        
        $('.numSerieAssemblage').each(function()
        {
        if($(this).text() == valeurNumSerie) 
        {
                var split = $(this).attr('class').split(' ');
            
                $('.enteteNumSerie').each(function()
                {                   
                    if($(this).attr('id') == split[1])
                    {
                        $(this).text(valeurNumSerie);
                    }
                });
        }
        });

        $('.enteteNumSerie').each(function()
        {                
            if($(this).text() == '')
            {
                vide = 1;
            }
        });
        
        if(vide == 0)
        {
            $('#buttonAddPF').css('visibility', 'visible');
            $('#buttonAddPF').text('Ajouter au produit fini');
        }
        $(this).val('');
    }  
});

$('.numSerieAssemblage').on('dblclick', function(touche, e)
{
    var vide = 0;
    var valeurNumSerie = $(this).text();
    var numSerieProduitFini = $(this).attr('id');
    
    $('.numSerieAssemblage').each(function()
    {
        if($(this).text() == valeurNumSerie) 
        {
            var split = $(this).attr('class').split(' ');
            
            $('.enteteNumSerie').each(function()
            {                   
                if($(this).attr('id') == split[1])
                {
                    $(this).text(valeurNumSerie);
                }
            });
        }
    });

    $('.numSerieAssemblage').each(function()
    {
        if($(this).text() == valeurNumSerie) 
        {
            var split = $(this).attr('class').split(' ');
            
            $('.enteteNumSerie').each(function()
            {                   
                if($(this).attr('id') == split[1])
                {
                    $(this).text(valeurNumSerie);
                    
                    if(numSerieProduitFini != '')
                        $('#buttonAddPF').attr('numSeriePF', numSerieProduitFini);
                }
            });
        }
    });

    $('.enteteNumSerie').each(function()
    {                
        if($(this).text() == '')
        {
            vide = 1;
        }
    });
    
    if(vide == 0)
    {
        $('#buttonAddPF').css('visibility', 'visible');
        $('#buttonAddPF').text('Ajouter au produit fini');
    }
});

$('#buttonAddPF').on('click', function()
{
    var arrayNumSeriePetite = [];
    var arrayNumSerieMoyenne = [];
    var arrayNumSerieGrande = [];  
    //var printers = dymo.label.framework.getPrinters();
    var path = $("#pathAjax").attr("data-path");
    var pathPetite = $("#pathAjaxPetite").attr("data-path");
    var pathMoyenne = $("#pathAjaxMoyenne").attr("data-path");
    var pathGrande = $("#pathAjaxGrande").attr("data-path");
    var ref = $('#etiquette').text();
    
    if($(this).text() == 'Enregistrer les produits finis')
    {
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
                    
            for(var i = 0; i < arrayNumSeriePF.length; i++)
            {           
                if($('#etiquette').attr('petite') != 0)
                {
                    for(var i1 = 0; i1 < $('#etiquette').attr('petite'); i1++)
                    {
                        arrayNumSeriePetite.push(arrayNumSeriePF[i]);
                    }
                }
                
                if($('#etiquette').attr('moyenne') != 0)
                {
                    for(var i1 = 0; i1 < $('#etiquette').attr('moyenne'); i1++)
                    {
                        arrayNumSerieMoyenne.push(arrayNumSeriePF[i]);
                    }
                    
                }
                
                if($('#etiquette').attr('grande') != 0)
                {
                    for(var i1 = 0; i1 < $('#etiquette').attr('grande'); i1++)
                    {
                        arrayNumSerieGrande.push(arrayNumSeriePF[i]);          
                    }
                }
            }
            
            //IMPRESSION ETIQUETTE
            if(arrayRefPetite.length != 0)
                alert('Vérifier que les petites etiquettes sont bien dans l\'imprimante');
            
            for(i = 0; i < arrayRefPetite.length; i++)
            {
                if(i%2 == 0)
                {
                    var numSerie1 = arrayNumSeriePetite[i];
                    
                    if(i + 1 == arrayRefPetite.length)
                    {
                        pathXml = pathPetite + '_' + ref + '_' + numSerie1 + '_00000000';
                        
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
                    pathXml = pathPetite + '_' + ref + '_' + numSerie1 + '_' + arrayNumSeriePetite[i];
                    
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
                pathXml = pathMoyenne + '_' + ref + '_' + arrayNumSerieMoyenne[i];
                
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
            
            for(i = 0; i < arrayRefGrande.length; i++)
            {
                pathXml = pathGrande + '_' + ref + '_' + arrayNumSerieGrande[i];
                
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
            
            $.ajax({
            type: 'POST',
            url: path,
            data: {arrayNumSerie : arrayNumSerie, arrayNumSeriePF: arrayNumSeriePF},
            timeout: 30000,
            success: function(data) 
            {
                window.location.href =  document.referrer;
            }
            });
        }
    }
    else
    {
        if($(this).attr('numseriepf') == '')
        {
            //requete ajax pour récup un numSerie
        }
        else
        {
            arrayNumSerie[inc] = new Array();
            
            $('.enteteNumSerie').each(function()
            {                
                arrayNumSerie[inc].push($(this).text());
                $(this).text('');
            });
            
            inc++;
            
            arrayNumSeriePF.push($(this).attr('numseriepf'));      
        }
        
        $('.numSerieAssemblage').each(function()
        {
            var $element = $(this);
            $.each(arrayNumSerie,function(index, value)
            {        
                $.each(arrayNumSerie[index],function(index, value)
                {     
                                
                    if($element.text() == value)
                    {
                        $element.remove();
                    }
                });
            });
        });            
    }

    $('#buttonAddPF').text('Enregistrer les produits finis');
});
    
$('body').on('click', function(e)
{
    $("#inputNumSerie").focus();
});