
$(document).ready(function(){


    $(".contenedor").on('submit','[data-carga]',function(e){
        //alert($(this).attr('data-carga'));
        e.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            data: $(this).serialize(),
            type: $(this).attr("method")
        }).done(function(e){
            alert(e);
        });
        
    });
});