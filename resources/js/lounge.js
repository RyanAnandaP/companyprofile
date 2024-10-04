Pusher.logToConsole = true;var pusher = new Pusher('1502d7801711bed5a2da', {cluster: 'ap1',forceTLS: true});
$(document).ready(function(){
    getRecentChats()
    getNews()
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
       getRecentChats()
    });

    function getRecentChats(){
        $('#recentChats').html('')
        $.ajax({
            type:'GET',
            url:'/getRecentChats',
            success:function(data){
                colors = ['primary','danger','warning','success']
                f=0;
                for(i=0;i<10;i++){
                    if(f==4)f=0
                    color = colors[f];
                    $('#recentChats').append('<div class="col-10 pt-3 pl-2 mb-2 shadow rounded-pill" style="height:20%;"><div class="row"><div class="col-12"><div class="chat-overflow ml-2">'+data[i]['message']+'</div></div></div></div>')
                    f++
                }
            }
        })
    }

    function getNews(){
        $.ajax({
            type:'GET',
            url:'https://newsapi.org/v2/top-headlines?country=id&apiKey=61ae7bd3db18402493d9132fad89bd36',
            success:function(data){
                for(i=0;i<10;i++){
                    $('#newsCard').append('<div class="col-10 p-3 mb-2 shadow rounded-pill" style="height:30%;"><div class="row"><div class="col-3"><img src="'+data["articles"][i]["urlToImage"]+'" alt="" style="width:3em;height:3em;object-fit:cover"></div><div class="col overflow-auto"><div class="title-overflow">'+data["articles"][i]["title"]+'</div></div></div></div>')
                }
            }
        })
    }

})