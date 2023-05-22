    $("body").on("click",".ban",function(){

        var current_object = $(this);

        bootbox.dialog({
            message: "<form class='form-inline add-to-ban' method='POST'><div class='form-group'><textarea class='form-control reason' rows='4' style='width:500px' placeholder='Add Reason for Ban this user.'></textarea></div></form>",
            title: "Add To Black List",
            buttons: {
                success: {
                label: "Submit",
                className: "btn-success",
                callback: function() {
                    var baninfo = $('.reason').val();
                    var token = $("input[name='_token']").val();
                    var action = current_object.attr('data-action');
                    var id = current_object.attr('data-id');


                    if(baninfo == ''){
                        $('.reason').css('border-color','red');
                        return false;
                    }else{
                        $('.add-to-ban').attr('action',action);
                        $('.add-to-ban').append('<input name="_token" type="hidden" value="'+ token +'">')
                        $('.add-to-ban').append('<input name="id" type="hidden" value="'+ id +'">')
                        $('.add-to-ban').append('<input name="baninfo" type="hidden" value="'+ baninfo +'">')
                        $('.add-to-ban').submit();
                    }
                }
            },
            danger: {
                label: "Cancel",
                className: "btn-danger",
                callback: function() {
                // remove
                }
            },
        }
    });
});
