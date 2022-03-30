const answers = document.getElementsByClassName('answers');
//const questions = document.getElementsByClassName('question');

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
            .then (data => {
                let numclass = data.data;
                console.log(numclass);
                for (let i = 1; i < numclass.length+1; i++) {
                    let avatar = document.getElementById('user' + i);
                    console.log(numclass[i-1]);
                    avatar.classList.remove('avatar0');
                    avatar.classList.remove('avatar1');
                    avatar.classList.remove('avatar2');
                    avatar.classList.remove('avatar3');
                    avatar.classList.remove('avatar4');
                    avatar.classList.remove('avatar5');
                    avatar.classList.add('avatar' + numclass[i-1])
                }})})}



