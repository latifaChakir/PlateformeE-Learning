<div class="row g-4 justify-content-center" id="coursesContainer">
    @foreach ($courses as $course)
        <div class="col-lg-3  col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="/images/{{ $course->image_path }}"
                        alt="">
                    <div
                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                        <a href="#"
                            class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                            style="border-radius: 30px 0 0 30px;">Read More</a>
                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                            style="border-radius: 0 30px 30px 0;">Join Now</a>
                    </div>
                </div>
                <div class="text-center p-4 pb-0">

                    <h5 class="mb-4">{{ $course->title }}</h5>
                </div>
                <div class="d-flex border-top">
                    <small class="flex-fill text-center border-end py-2"><i
                            class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                    <small class="flex-fill text-center border-end py-2"><i
                            class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                    <small class="flex-fill text-center py-2"><i
                            class="fa fa-user text-primary me-2"></i>30 Students</small>
                </div>
            </div>
        </div>
    @endforeach
</div>
