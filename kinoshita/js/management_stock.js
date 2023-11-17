

let value=document.querySelectorAll(".value");

console.log(value[0].innerHTML);

function increment(){
  let num=value[0].innerHTML;
  num=parseInt(num);
  value[0].innerHTML=num+1;
}

function decrement(){
  let num=value[0].innerHTML;
  num=parseInt(num);
  value[0].innerHTML=num-1;
}

