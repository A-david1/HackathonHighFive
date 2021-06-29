

let answers=document.getElementsByClassName('answer');
let container=document.getElementsById('div-question1')

for(let i=0 ; i < answers.length ; i++){

answers[i].addEventListener("click", () => {
    answers[i].classList.add('clicked');
    container[i].classList.remove('active');
    container[i].classList.add('none');
    container[i++].classList.add('active');
   });
}






