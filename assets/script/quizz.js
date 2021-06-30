const answers = document.getElementsByClassName('answers');

for (let i = 0; i < answers.length; i++) {
    answers[i].addEventListener('click', () => {
        event.preventDefault();

        const userpick = {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: answers[i].dataset.choice,
        }

        fetch(answers[i].dataset.path, userpick)
            .then(response => response.json())
            .then (response => console.log(response))
    });
}


