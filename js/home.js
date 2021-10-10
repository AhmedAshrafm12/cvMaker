var x=document.querySelector('.h');
var str="Welcome to your cv maker";
let m=0;
var write=setInterval(function(){
    if(m==str.length-1){
        clearInterval(write)
    }
    x.innerHTML+=str[m];
    m++;
},50);
setTimeout(function(){var x=document.querySelector('.p1');
var str="for a good startup you need a good cv";
let m=0;
var write=setInterval(function(){
    if(m==str.length-1){
        clearInterval(write)
    }
    x.innerHTML+=str[m];
    m++;
},50);},1000)

setTimeout(function(){var x=document.querySelector('.p2');
var str="so let us help you with that";
let m=0;
var write=setInterval(function(){
    if(m==str.length-1){
        clearInterval(write)
    }
    x.innerHTML+=str[m];
    m++;
},100);},3000)