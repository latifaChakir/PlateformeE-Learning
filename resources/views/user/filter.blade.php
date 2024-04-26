<div class="row" id="searchResults">
    @foreach ($coursePayment as $coursepayment)
        <div class="col-md-6 col-sm-8 col-10 m-auto">
            <div class="blog-post">
                <div class="post-thumb">
                    <a href="#">
                        <img src="/images/{{ $coursepayment->image_path }}" alt="post-image" class="img-fluid">
                    </a>
                </div>
                @php
                    $isCoursePaid = $courseisPayed->where('cours_id', $coursepayment->id)->isNotEmpty();
                @endphp

                <div class="post-content">
                    <div class="post-title">
                        <h2><a href="#">{{ $coursepayment->title }}</a></h2>
                    </div>
                    <div class="post-meta">
                        <ul class="list-inline">

                            <li class="list-inline-item">
                                <a
                                    href="{{ $isCoursePaid ? '/courses/' . $coursepayment->id : '/certificat/' . $coursepayment->id }}">
                                    {{ $isCoursePaid ? 'Read More' : 'Join Now' }}
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-heart-o"></i>
                                <a href="#">350</a>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-comments-o"></i>
                                <a href="#">30</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
