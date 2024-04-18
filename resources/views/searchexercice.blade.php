<div class="row mt-3" id="afficheExerices">
    @foreach ($courses as $course)
        <div class="col-md-3 mt-2">
            <div class="card course_card">
                <a href="courses/{{ $course->id }}"><img src="/images/{{ $course->image_path }}" class="card-img-top" alt="{{ $course->title }}"></a>
                <div class="card-body">
                    <h5 class="card-title">Let's practice <strong>{{ $course->title }}</strong></h5>
                    <div class="service_btn center">
                        <a href="/startExo/{{ $course->id }}"
                            class="btn waves-effect waves-orange btn-exo" style="border-radius: 20px; background-color: #f0f0f0;">Exercices</a>
                        <a href="/quiz/{{ $course->id }}"
                            class="btn waves-effect waves-orange btn-quiz" style="border-radius: 20px; background-color: #f0f0f0;">Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
