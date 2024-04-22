<div class="row g-4" id="messages">
    @foreach ($messages as $message)
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item text-center pt-3">
            <div class="p-4">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="/images/{{ $message->image_path }}" style="width: 80px; height: 80px;">
                <h5 class="mb-3">{{ $message->name }}</h5>
                <p>{{ $message->message }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
