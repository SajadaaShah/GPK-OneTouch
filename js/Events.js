var i = 0;
var d = 0;
function myFunctionl(x) {
    //x.classList.toggle("fa-thumbs-down");
    x.style.color='black';
    if(i==0){
       x.style.color='blue';
       i=1; 
    }    
}
function myFunctiondl(x) {
    //x.classList.toggle("fa-thumbs-down");

    x.style.color='blue';
}
const btn = document.getElementById('btn');

btn.addEventListener('click', function onClick(event) {
  const box = document.getElementById('box');

  box.style.backgroundColor = 'coral';

  // 👇️ optionally change text color
  // box.style.color = 'white';
});
