$('.register').click(function(){
    $.ajax({
        url:'router/router.php?ind=register',
        data:$('#registration').serialize(),
        type:'POST',
        beforeSend:function(){
            
        },
        success:function(e){
            if(e == 'success'){
                $('#registration_status').html('<p class="alert alert-success">Successfully Registered</p>')
                $('#email').val('')
                $('#name').val('')
                $('#password').val('')
            }else if(e == 'email already exist'){
                $('#registration_status').html('<p class="alert alert-danger">Username already exists!</p>')
            }
        }
    })
})
