$(document).ready(function(){
    getNews();
    function getNews(){
        $.ajax({
            type:'get',
            url:'https://newsapi.org/v2/top-headlines?country=id&apiKey=61ae7bd3db18402493d9132fad89bd36',
            success:function(data){
                for(i=0;i<data['articles'].length;i++){
                    $('#newsStand').append('<div class="col-md-4 mb-3"><div class="card shadow"><img class="card-img-top" style="height:10em;overflow:hidden" src="'+data["articles"][i]["urlToImage"]+'" alt="Card image cap"><div class="card-body"><h5 class="card-title title-overflow">'+data["articles"][i]["title"]+'</h5><p class="card-text content-overflow">'+data["articles"][i]["description"]+'</p><a href="'+data["articles"][i]["url"]+'" class="btn btn-primary rounded-pill">Baca Lebih Lanjut &ensp;<i class="fa fa-caret-right"></i></a></div></div></div>')
                }
                for(i=0;i<3;i++){
                    if(i==0)
                        $('#newsHighlights').append('<div class="carousel-item active"><img class="d-block w-100" style="height:100vh;object-fit:cover" src="'+data["articles"][i]["urlToImage"]+'" alt="First slide"><div class="carousel-caption d-none d-md-block bg-primary shadow-lg w-100 pl-2 pr-2" style="bottom:0;height:15vh;right:0;left:0"><h3>'+data["articles"][i]["title"]+'</h5></div></div>')
                    else
                        $('#newsHighlights').append('<div class="carousel-item"><img class="d-block w-100" style="height:100vh;object-fit:cover" src="'+data["articles"][i]["urlToImage"]+'" alt="First slide"><div class="carousel-caption d-none d-md-block bg-primary shadow-lg w-100 pl-2 pr-2" style="bottom:0;height:15vh;right:0;left:0"><h3>'+data["articles"][i]["title"]+'</h5></div></div>')
                }
            }
        })
    }
})