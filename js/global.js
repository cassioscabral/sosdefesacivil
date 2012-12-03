$(function() {
    var scntDiv = $('#p_scents');
    var i = $('#p_scents p').size() + 1;
        
    $('#addScnt').live('click', function() {
        $('<li>\n\
            <div class="campo"><label for="p_scnts">Campo:</label>\n\
            <input type="text" id="p_scnt" size="20" name="campo[]" value="" placeholder="" />\n\
            </div><div class="valor"><label for="p_scnts">Valor:</label>\n\
            <input type="text" id="p_scnt" size="20" name="valor[]" value="" placeholder="" /></div>\n\
            <a class="label label-important" href="#" id="remScnt">Remover</a>\n\
          </li>').appendTo(scntDiv);
        i++;
        return false;
    });
        
    $('#remScnt').live('click', function() { 
        if( i > 2 ) {
            $(this).parents('li').remove();
            i--;
        }
        return false;
    });
    
    $(".content").hide();
    //toggle the componenet with class msg_body
    $(".heading").click(function()
    {
        $(this).next(".content").slideToggle(500);
    });
    
    //    $("#btnContinuar").click(function(){
    //        $('.bs-docs-example').fadeOut('slow', function() {
    //            // Animation complete.
    //            });
    //    });

    $("#btnCarregar").click(function(){
        $("#conteudo").html();
        $.ajax({
            url: 'http://127.0.0.1/ecosistema/exemplo/carregar',
            method: 'get',
            success: function(data){
                $('#book').fadeIn('slow', function() {
                    $("ul#conteudo").append('<li>'+data+'</li>');
                });
            }
        });
    });

});