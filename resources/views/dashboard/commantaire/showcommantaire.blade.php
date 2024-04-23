@extends('layouts.dashboard')
@section('content')
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 ">
                <div class="d-flex justify-content-between">
                    <h6 class="text-white text-capitalize ps-3">Show Message </h6>
                </div>
            </div>
        </div>

        <div class="card-body px-5 pb-2 border rounded">
            <div class="container">
                <h2>{{ $message->subject }}</h2>
                <div class="card" style="width:400px">
                  <img class="card-img-top" src="/images/{{ $message->image_path }}" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <h4 class="card-title">{{ $message->name }}</h4>
                    <p class="card-text">{{ $message->message }}</p>
                    <a href="/Commantaires" class="btn bg-gradient-primary">Go Back</a>
                  </div>
                </div>

        </div>

    </div>
@endsection
