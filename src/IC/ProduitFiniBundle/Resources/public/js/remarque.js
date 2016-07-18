var path = $("#pathAjax").attr("data-path");

$('.lignePret').on('click', function()
{   
    if($('#ligne_remarque' + $(this).attr('id')).length)
    {
        
        
        if($(this).hasClass('clicked'))
        {
            $(this).addClass('del');  
        }
        
        $('.lignePret').each(function()
        {
            $(this).removeClass('clicked');
            $('#ligne_remarque' + $(this).attr('id')).css('display', 'none');
        });
    }
    
    if(!$(this).hasClass('del'))
    {
        $(this).addClass('clicked');

        $('#ligne_remarque' + $(this).attr('id')).css('display', 'table-row');
    } 

    $(this).removeClass('del');
});

$('.textRemarque').on('keyup', function()
{
    var arrayId = $(this).attr('name').split('_');

    $.ajax({
        type: 'POST',
        url: path,
        data: {text: $(this).val().trim(), id: arrayId[1]},
        timeout: 30000
    });
});