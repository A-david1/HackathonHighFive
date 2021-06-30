const answers = document.getElementsByClassName('answers');

for (let i = 0; i < answers.length; i++) {
    answers[i].addEventListener('click', () => {
        event.preventDefault();

        let answerContent = answers[i].dataset;
        let answerLink = event.currentTarget;
        let link = answerLink.href;
        console.log(answerContent);
        fetch(link,  {method: 'POST'})
            .then(res => res.json())
            .then(data => console.log(data))
    });
}

//TODO function change avatar with RubixData