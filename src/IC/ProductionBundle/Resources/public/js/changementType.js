$('#production_type').on('change', function() 
{
    var path = $("#pathAjax").attr("data-path") + '-' + $('#production_type').val();

    $.ajax({
    type: 'POST',
    url: path,
    data: {all: $('.lienAll').attr('id')},
    timeout: 30000,
    success: function(data) 
    {
        $('#production_versionNomenclature').html();
        $('#production_versionNomenclature').html(data);
    }
    });
});
$( document ).ready(function() {
    
    var path = $("#pathAjax").attr("data-path") + '-' + $('#production_type').val();

    $.ajax({
    type: 'POST',
    url: path,
    data: {all: $('.lienAll').attr('id')},
    timeout: 30000,
    success: function(data) 
    {
        $('#production_versionNomenclature').html();
        $('#production_versionNomenclature').html(data);
    }
    });    
});