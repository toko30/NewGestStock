/* global $ */

$('#composant_famille').on('change', function() 
{
    var path = $("#pathAjax").attr("data-path") + '-' + $('#composant_famille').val();
    
    $.ajax({
    type: 'GET',
    url: path,
    timeout: 30000,
    success: function(data) 
    {
        $('#composant_sousFamille').html();
        $('#composant_sousFamille').html(data);
    }
    });
});


$( document ).ready(function() {
  var path = $("#pathAjax").attr("data-path") + '-' + $('#composant_famille').val();
    $.ajax({
    type: 'GET',
    url: path,
    timeout: 30000,
    success: function(data) 
    {
        $('#composant_sousFamille').html();
        $('#composant_sousFamille').html(data);
    }
    });
});