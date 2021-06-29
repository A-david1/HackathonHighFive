const answers = document.getElementsByClassName('answers');

for (let i = 0; i < answers.length; i++) {
    answers[i].addEventListener('click', () => {
        console.log('test');
        event.preventDefault();

    });
}


