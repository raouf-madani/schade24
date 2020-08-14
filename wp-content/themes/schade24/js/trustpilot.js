$(function(){
  //alert('test');
  var domain = 'schade24.com';
  var b_id='';

  $.ajax({
      url: 'https://api.trustpilot.com/v1/business-units/find?apikey=S6fNS9uc0EcLrbcT7qcWhXfbfeelmXOW&name='+domain,
      type: 'GET',
      datatype: 'JSON',
      success: function(data){
          b_id = data.id;
          console.log('business id is 1 '+ b_id);
      },
      complete: function(){
          //console.log('business id is 2 '+ b_id);
          $.ajax({
              url: 'https://api.trustpilot.com/v1/business-units/'+b_id+'/reviews',
              type: 'GET',
              datatype: 'JSON',
              data: 'apikey=A172ElhOWRaJCAyzi3S8ZzIYptIGaVsT&stars=5&language=nl',
              success: function(data){
                  //console.log(data);
                  $.each(data.reviews, function(k, v){
                     //console.log('Name of consumer is '+ v.consumer.displayName); 
                     $('#trust-pilot').append('<li class="col-xs-3">'+
                                    '<a href="https://www.trustpilot.com/reviews/'+v.id+'" target="_blank">'+                         
                                      '<div class="trustpilot__widget__box">'+
                                          '<img src="https://schade24.com/application/views/themes/PIX03/images/rating.svg" alt="schade24" title="'+v.stars+'">'+
                                          '<strong class="tp-title">'+v.title+'</strong>'+
                                          '<p class="tp-comments">'+v.text.substr(0, 150)+'...</p>'+
                                          '<span class="tp-name">'+v.consumer.displayName+'</span>'+
                                      '</div>'+
                                    '</a>'+
                                  '</li>');
                  });
                  //alert(data.reviews[0].consumer.displayName);
              }, 
              complete: function(){
                  $('#trust-pilot').slick({
                        dots: true,
                        infinite: true,
                        speed: 700,
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        dots: false,
                        responsive: [
                          {
                            breakpoint: 1600,
                            settings: {
                              slidesToShow: 4,
                              slidesToScroll: 4,
                              infinite: true,
                              dots: false
                            }
                          },
                          {
                            breakpoint: 1300,
                            settings: {
                              slidesToShow: 3,
                              slidesToScroll: 3,
                              infinite: true,
                              dots: false
                            }
                          },
                          {
                            breakpoint: 992,
                            settings: {
                              slidesToShow: 2,
                              slidesToScroll: 2
                            }
                          },
                          {
                            breakpoint: 650,
                            settings: {
                              slidesToShow: 1,
                              slidesToScroll: 1,
                              arrows:false,
                              dots:false
                            }
                          }
                        ]
                      });
              }
          });
      }
  });
});