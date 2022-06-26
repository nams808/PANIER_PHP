(function($){    
    $('.addPan').click(function(event){
        event.preventDefault();
        $.get($(this).attr('href'),{}, function(data){
            if(data.error){
                alert(data.message);
            }
            else{
                $('#total').empty().append(data.total);
                    $('#count').empty().append(data.count);
                //alert(data.message);
                
                    
                
            }
        },'json');
        return false;
    });
})(jQuery);