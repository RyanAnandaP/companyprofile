$(document).ready(function(){
  $('#product-button').click(function(){
    window.location.href = '/product'
  })
  $('#career-button').click(function(){
    window.location.href = '/career'
  })
  $('[data-toggle="popover"]').popover();
  $('.popover-dismiss').popover({
    trigger: 'focus'
  })

  $('.card-description-1').hide();
  $('.card-description-2').hide();
  $('.card-description-3').hide();
  $('.card-description-4').hide();
  $('.card-box-1').mouseover(function(){
    $('.card-icon-1').hide();
    $('.card-description-1').show()
    $('.card-description-1').addClass('d-flex')
  }).mouseleave(function(){
    $('.card-description-1').hide();
    $('.card-description-1').removeClass('d-flex')
    $('.card-icon-1').show()
  })
  $('.card-box-2').mouseover(function(){
    $('.card-icon-2').hide();
    $('.card-description-2').show()
    $('.card-description-2').addClass('d-flex')
  }).mouseleave(function(){
    $('.card-description-2').hide();
    $('.card-description-2').removeClass('d-flex')
    $('.card-icon-2').show()
  })
  $('.card-box-3').mouseover(function(){
    $('.card-icon-3').hide();
    $('.card-description-3').show()
    $('.card-description-3').addClass('d-flex')
  }).mouseleave(function(){
    $('.card-description-3').hide();
    $('.card-description-3').removeClass('d-flex')
    $('.card-icon-3').show()
  })
  $('.card-box-4').mouseover(function(){
    $('.card-icon-4').hide();
    $('.card-description-4').show()
    $('.card-description-4').addClass('d-flex')
  }).mouseleave(function(){
    $('.card-description-4').hide();
    $('.card-description-4').removeClass('d-flex')
    $('.card-icon-4').show()
  })

  $('#services').hide();
  $('#view-ipo').click(function(){
    // console.log('test')
    $('#services').fadeToggle("linear");
    if($('#view-ipo').html() == 'View IPOs'){
      $('#view-ipo').html('Hide IPOs')
    }else{
      $('#view-ipo').html('View IPOs')
    }
  })
})