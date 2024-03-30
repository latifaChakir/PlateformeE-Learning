@extends('layouts.app')

@section('content')
  <!-- /asset/plugins CSS STYLE -->
  <!-- Bootstrap -->

  <div class="container mt-5">
    <section class="section pricing">
        @if ($message = Session::get('status'))
        <div class="alert alert-success" role="alert">
        {{$message}}
        </div>
       @endif
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Start <span class="alternate">Quiz</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item">
                        <div class="pricing-heading">
                            <!-- Title -->
                            <div class="title">
                                <h6>Starter</h6>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <h2>{{ $course->title }}<span></span></h2>
                                <p>/quiz</p>
                            </div>
                        </div>
                        <div class="pricing-body">
                            <!-- Feature List -->
                            <ul class="feature-list m-0 p-0">
                                <li><p><span class="fa fa-check-circle available"></span>1 Comfortable Seats</p></li>
                                <li><p><span class="fa fa-check-circle available"></span>Free Lunch and Coffee</p></li>
                                <li><p><span class="fa fa-times-circle unavailable"></span>Certificate</p></li>
                                <li><p><span class="fa fa-times-circle unavailable"></span>Easy Access</p></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <!-- Pricing Item -->
                    <div class="pricing-item featured">
                        <form action="{{ route('store_responses') }}" method="POST" id="quizForm">
                            @csrf
                            <div class="pricing-body" id="quizContainer">
                                @foreach ($questions as $key => $question)
                                <div class="pricing-body question" id="question{{ $key }}" style="{{ $key > 0 ? 'display:none' : '' }}">
                                    <p>{{ $question->text_question }}</p>
                                    <ul class="feature-list m-4 p-0">
                                        @foreach ($question->options as $option)
                                        <li>
                                            <label>
                                                <input type="radio" name="answers[{{ $key }}]" value="{{ $option->id }}">
                                                {{ $option->option_text }}
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @if ($key < count($questions) - 1)
                                    <button type="button" class="btn btn-primary next-question" data-next="{{ $key + 1 }}">Next</button>
                                    @else
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </section>
  </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const questions = document.querySelectorAll('.question');
        const nextButtons = document.querySelectorAll('.next-question');

        nextButtons.forEach(button => {
            button.addEventListener('click', function() {
                const currentQuestion = this.parentNode;
                const nextQuestionIndex = parseInt(this.getAttribute('data-next'));
                if (nextQuestionIndex < questions.length) {
                    currentQuestion.style.display = 'none';
                    questions[nextQuestionIndex].style.display = 'block';
                } else {
                    // Si c'est la dernière question, vous pouvez envoyer le formulaire ici
                    // document.getElementById('quizForm').submit();
                    // Vous pouvez également gérer le comportement après avoir répondu à toutes les questions
                    alert('Vous avez répondu à toutes les questions.');
                }
            });
        });
    });
</script>
