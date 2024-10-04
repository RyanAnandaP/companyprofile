

$(document).ready(function(){

    $('#applyjob').click(function(){
        $('form#daftarkerjaan').submit(function(e){
            // $('#applyjob').html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>')
            var formData = new FormData(this);
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                url:'/apply-job',
                data:formData,
                success:function(data){
                    $('#loading').modal('hide')
                    if(data['error']){
                        for(i=0;i<data['error'].length;i++){
                            if(data['error'][i].includes("name")){
                                $('#name-error').html(data['error'][i])
                            }else if(data['error'][i].includes("phone")){
                                $("#phone-error").html(data['error'][i])
                            }else if(data['error'][i].includes("email")){
                                $("#email-error").html(data['error'][i])
                            }else if(data['error'][i].includes("cv")){
                                $("#cv-error").html(data['error'][i])
                            }else if(data['error'][i].includes("photo")){
                                $("#photo-error").html(data['error'][i])
                            }else if(data['error'][i].includes("captcha")){
                                $("#captcha-error").html(data['error'][i])
                            }
                        }
                    }else{
                        $('#successModal').modal('show')
                        $('#success-message').html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>')
                        // $('#successModal').modal('show')
                        $('#success-message').html(data)
                        $('.close-function').attr('href','/karir')
                        window.setTimeout(function(){
                            // change url if error
                            window.location.href = "http://localhost:8000/karir";
                    
                        }, 1500);                    
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    })


})