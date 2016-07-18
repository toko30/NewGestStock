var printers = dymo.label.framework.getPrinters();
var $nomNomenclature;
var $listeNumSerie = [];
var path1 = $("#path1").attr("data-path");
var path2 = $("#path2").attr("data-path");
var path3 = $("#path3").attr("data-path");
$('.buttonImpression').on('click', function(e)
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
    }

    $nomNomenclature = $('.buttonImpression').attr('id')

    $('.numSerie').each(function()
    {
        $listeNumSerie.push($(this).text())
    });

    if($listeNumSerie.length != 0)
        alert('Vérifier que les petites etiquettes sont bien dans l\'imprimante');
        
    for(var i = 0; i < $listeNumSerie.length; i++)
    {
        if(i%2 == 0)
        {
            var numSerie1 = $listeNumSerie[i];
            
            if(i + 1 == $listeNumSerie.length)
            {
                pathXml = path2 + '_' + $nomNomenclature + '_' + numSerie1 + '_00000000';

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
            pathXml = path2 + '_' + $nomNomenclature + '_' + numSerie1 + '_' + $listeNumSerie[i];

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

    alert('veuillez attendre la fin de l\'impression avant de valider');

    $.ajax({
    type: 'GET',
    url: path1,
    timeout: 30000,
    success: function(data) 
    {
        window.location.href =  path3;
    }
    });
});