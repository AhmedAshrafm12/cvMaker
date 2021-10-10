$(function(){
    "use strict";
    $('[placeholder]').focus(function(){
        $(this).attr('data-text',$(this).attr('placeholder'));
        $(this).attr('placeholder','');})
    .blur(function(){
        $(this).attr('placeholder',$(this).attr('data-text'));
        $(this).attr('data-text','');
})

$('input,textarea').each(function(){
    if($(this).attr('required')==='required'){
        $(this).after('<span class="asterisk">*</span>');
    }   
});

$('.del').click(function(){
    return confirm('Are You Sure?');
})

$('.addjop').click(function(e){
e.preventDefault();
var x=$(".adcont .jo").clone();
$(".addjop").before(x);
});

$('.type').click(function(e){
  $('.wa').fadeIn(500);
  $('.jo').fadeOut();
  var har=Array.from(document.querySelectorAll('.jname'));
har.forEach(e => {
  var v= $('.jhead').val();
   $('.jhead').val( v+','+e.value);
});

var sar=Array.from(document.querySelectorAll('.jsc'));
sar.forEach(e => {
  var v= $('.since').val();
   $('.since').val( v+','+e.value);
});
var tar=Array.from(document.querySelectorAll('.jt'));
tar.forEach(e => {
  var v= $('.to').val();
   $('.to').val( v+','+e.value);
});



var rar=Array.from(document.querySelectorAll('.rol'));
rar.forEach(e => {
  var v= $('.roles').val();
   $('.roles').val( v+','+e.value);
});

});




$('.addedu').click(function(e){
    e.preventDefault();
    var x=$(".adcont .cop").clone();
      $(".addedu").before(x);
    });



    $('.edtype').click(function(e){
      $('.wa').fadeIn(500);
      $('.jo').fadeOut();
    var edn=Array.from(document.querySelectorAll('.ename'));
    edn.forEach(e => {
      var v= $('.edname').val();
       $('.edname').val( v+','+e.value);
    });

    var eds=Array.from(document.querySelectorAll('.esince'));
    eds.forEach(e => {
      var v= $('.edsince').val();
       $('.edsince').val( v+','+e.value);
    });

    var edt=Array.from(document.querySelectorAll('.eto'));
    edt.forEach(e => {
      var v= $('.edto').val();
       $('.edto').val( v+','+e.value);
    });

});




$('.addcer').click(function(e){
  e.preventDefault();
  var x=$(".cadcon .cop").clone();
    $(".addcer").before(x);
  });



  $('.ctype').click(function(e){
    $('.wa').fadeIn(500);  $('.jo').fadeOut();

    var cn=Array.from(document.querySelectorAll('.cename'));
    cn.forEach(e => {
      var v= $('.cname').val();
       $('.cname').val( v+','+e.value);
    });

    var cat=Array.from(document.querySelectorAll('.ceat'));
    cat.forEach(e => {
      var v= $('.cat').val();
       $('.cat').val( v+','+e.value);
    });

});


$('.addi').click(function(e){
  e.preventDefault();
  var x=$(".iadcon .cop").clone();
    $(".addi").before(x);
  });

$('.itype').click(function(e){
  $('.wa').fadeIn(500);
  $('.jo').fadeOut();
  console.log('here');
  var int=Array.from(document.querySelectorAll('.int'));
  int.forEach(e => {
    var v= $('.intv').val();
     $('.intv').val( v+','+e.value);
  });

});


console.log('hello');
$('.print').click(function(){
 $(this).fadeOut();
 $('.cco').fadeOut();
 confirm("Are you shure");
 window.print();
});

$('.changeColor').click(function(){
  // alert('after applaying new color reload your page');

  $('.chcolor').animate({
    'top':'50px'
  },1000)
  
})



});