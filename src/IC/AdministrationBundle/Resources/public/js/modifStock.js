var path = $("#pathAjax1").attr("data-path");
$('.inputStock').on('keyup', function()
{
    if($(this).val() == '')
        $(this).val() == '0';
        
    $.ajax({
    url: path,
    type: 'POST',
    data: {idComposant: $(this).attr('id'), stock: $(this).val()},
    timeout: 3000,
    success: function(data) 
    {

    }
    });    
});