$("#num_serie_numSerie").focus();

$('body').on('click', function(e)
{
    $("#num_serie_numSerie").focus();
});

$("#num_serie_numSerie").on('keypress', function(e)
{
    $(this).val().replace('#!', '').replace('!#', '').replace('§', '');
});