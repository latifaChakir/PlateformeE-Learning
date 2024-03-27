@extends('layouts.dashboard')
@section('content')

<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 ">
        <div class="d-flex justify-content-between">
            <h6 class="text-white text-capitalize ps-3">Edit Category</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
        <form method="post" id="forms" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 mx-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control task-desc" name="name" value="{{ $category->name }}">

            </div>

            <div class="mb-3 mx-3">
                <img src="/images/{{ $category->image_path }}" width="300px">
                <input type="file" class="form-control " name="image_path" accept="image/*">
            </div>

            <div class="d-flex w-100 justify-content-center">
                <button type="submit" class="btn btn-success btn-block mb-4 me-4 save">Save Edit</button>
                <a href="/categories">
                    <div class="btn btn-danger btn-block mb-4 annuler">Annuler</div>
                </a>
            </div>
        </form>
</div>
@endsection
