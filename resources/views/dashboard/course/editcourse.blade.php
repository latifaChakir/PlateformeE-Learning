@extends('layouts.dashboard')
@section('content')

<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 ">
        <div class="d-flex justify-content-between">
            <h6 class="text-white text-capitalize ps-3">Edit Course</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
        <form method="post" id="forms" action="{{route('course.update',$course->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mx-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control task-desc" name="title" value="{{ $course->title }}">

            </div>
            <div class="mb-3 mx-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control task-desc" name="description" value="{!! Str::limit($course->description, 100, '...') !!}">

            </div>
            <div class="mb-3 mx-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control task-desc" name="price" value="{{ $course->price }}">
            </div>
            <div class="mb-3 mx-3">
                <img src="/images/{{ $course->image_path }}" width="300px">
                <input type="file" class="form-control " name="image_path" accept="image/*">
            </div>

            <div class="d-flex w-100 justify-content-center">
                <button type="submit" class="btn btn-success btn-block mb-4 me-4 save">Save Edit</button>
                <a href="/course">
                    <div class="btn btn-danger btn-block mb-4 annuler">Annuler</div>
                </a>
            </div>
        </form>
</div>
@endsection
