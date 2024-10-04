/*Pusher.logToConsole = true;*/var pusher = new Pusher('1502d7801711bed5a2da', {cluster: 'ap1',forceTLS: true});
$(document).ready(function(){
    uid = $('#user-id').val()
    getChats();
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        first_name = data['json']['user'].substring(0,1)
        second_name = data['json']['user'].substring(data['json']['user'].indexOf(" ")+2,data['json']['user'].indexOf(" ")+1)
        name = first_name+second_name
        if(uid != data['json']['pointer']){
            $('.text-message').append('<div class="row mb-3"><div class="col-12 small text-secondary">'+name+'</div><div class=" rounded-xl pt-2 pl-3 pr-3 bg-primary text-white text-overflow" style="max-width:80%" ><p>'+data['json']['message']+'</p></div></div>')
        }else{
            $('.text-message').append('<div class="row mb-3 d-flex align-item-right"><div class="col-12 text-right small text-secondary">You</div><div class="col-10 offset-2" style="max-width:80%"><div class="row float-right"><div class=" rounded-xl pt-2 pl-3 pr-3 bg-success text-white text-overflow" ><p>'+data['json']['message']+'</p></div></div></div></div>')
        }
        $(".text-message").animate({ scrollTop: $('.text-message')[0].scrollHeight*10000}, 1000);
    });

    function getChats(){
        $.ajax({
            type:'GET',
            url:'/getChats',
            success:function(data){
                // console.log(data[0]['pointer'])
                // colors = ['primary','danger','warning','success']
                // f=0;
                for(i=0;i<data.length;i++){
                    // if(f==4)f=0
                    // color = colors[f];
                    // console.log(data[i]['user_id'])
                    first_name = data[i]['user'].substring(0,1)
                    second_name = data[i]['user'].substring(data[i]['user'].indexOf(" ")+2,data[i]['user'].indexOf(" ")+1)
                    name = first_name+second_name
                    // console.log(second_name)

                    if(uid != data[i]['pointer']){
                        $('.text-message').append('<div class="row mb-3"><div class="col-12 small text-secondary">'+name+'</div><div class=" rounded-xl pt-2 pl-3 pr-3 bg-primary text-white text-overflow" style="max-width:80%" ><p>'+data[i]['message']+'</p></div></div>')
                    }else{
                        $('.text-message').append('<div class="row mb-3 d-flex align-item-right"><div class="col-12 text-right small text-secondary">You</div><div class="col-10 offset-2" style="max-width:80%"><div class="row float-right"><div class=" rounded-xl pt-2 pl-3 pr-3 bg-success text-white text-overflow" ><p>'+data[i]['message']+'</p></div></div></div></div>')
                    }
                    // $(".text-message").animate({ scrollTop: $('.text-message')[0].scrollHeight*10000}, 1000);
                    // f++
                }
                $(".text-message").animate({ scrollTop: $('.text-message')[0].scrollHeight*10000}, 1000);
            }
        })
    }

    $('form#sendChat').submit(function(e){
        $('#sendButton').attr('disabled',true)
        
        formData = new FormData(this);
        e.preventDefault();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:'/sendMessage',
            data:formData,
            success:function(data){
                $('#sendButton').attr('disabled',false)
                $('#text-message-field-no-ambiguity').val('')
                
            },
            cache: false,
            contentType: false,
            processData: false
        })
        return false;
    })
})