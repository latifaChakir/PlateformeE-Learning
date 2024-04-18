<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        #assignmentcontainer {
            background-color: #E7E9EB;
            padding: 50px;
            padding-top: 50px;
            padding-bottom: 20px;
            min-height: 200px;
            font-family: Consolas, Menlo, "Courier New", Courier, monospace;
            font-size: 120%;
            line-height: 1.7em;
            border-radius: 5px;
            margin: 20px;
        }
    </style>
</head>


<body>
    <div class='w3-main w3-light-grey' style='margin-left:220px;' id="results">
        <div class='w3-row w3-white'>
            <div class='w3-col l10 m12' id='main'>
                <div style='overflow:hidden;'>
                    <h3 style="margin: 20px">{{ $exercice->title }}</h3>
                    <p style="margin-left: 20px">{{ $exercice->question_text }}</p>
                    <div id="assignmentcontainer">
                        <form action="/submitAnswer" method="post">
                            @csrf
                            <input type="number" name="id" value="{{ $exercice->id }}" hidden>
                            <input type="hidden" name="course_id" value="{{ $exercice->chapter->course_id }}">
                            <label for="">Your Answer :</label>
                            <div class="form-group">
                                <textarea id="summernote" name="answer" style="margin-top: 30px !important; width: 100%; height: 100px;"></textarea>
                            </div>
                            <button type="submit" class="w3-bar-item w3-btn"
                                style="background-color: #075985 !important; color: #FFF !important;border-radius: 10px;">Submit</button>
                        </form>
                    </div>
                    <hr>
                </div>

            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
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
    </script>
</body>

</html>
