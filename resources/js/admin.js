$(document).ready(function(){
    $('form#inputjob').submit(function(e){
        $('#loading').modal('show')
        var formData = new FormData(this);
        e.preventDefault();
        console.log('test');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:'/input-job',
            data:formData,
            success:function(data){
                $('#successModal').modal('hide')
                $('#successModal').modal('show')
                $('.success-message').html(data);
                $('.close-function').attr('href','/input-job')
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
})