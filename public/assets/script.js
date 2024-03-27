document.addEventListener("DOMContentLoaded", function() {
    const showAnswerButtons = document.querySelectorAll('.show-answer-btn');
    console.log(showAnswerButtons);

    showAnswerButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const exerciseId = this.getAttribute('data-exercise-id');
            fetchAnswer(exerciseId);
        });
    });

    function fetchAnswer(exerciseId) {
        fetch(`/showanswer/${exerciseId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur lors de la récupération de la réponse.');
                }
                return response.json();
            })
            .then(data => {

                const answerDisplay = document.getElementById('answerDisplay');
                answerDisplay.textContent = "Answer: " + data.answer;
                answerDisplay.style.display = "block";
            })
            .catch(error => {
                console.error('Erreur lors de la récupération de la réponse:', error);
                alert('Erreur: Impossible de récupérer la réponse.');
            });
    }
});
