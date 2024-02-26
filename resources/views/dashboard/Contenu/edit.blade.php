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
        <form method="post" id="forms" action="{{route('contentCourse.update',$course->id)}}">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h4 class="modal-title">Edit Course Content</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <select class="form-control custom-select" name="course_id" placeholder="choose a course">
                        @foreach($courses as $cours)
                            {{-- <option value="{{ $cours->id }}">{{ $cours->title }}</option> --}}
                            <option value="{{ $cours->id }}" @if($cours->id == $course->cours_id) selected @endif>
                                {{ $cours->title }}
                            </option>
                        @endforeach
                    </select>                        
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="chapter_name" value="{{ $course->chapters_title }}">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $course->title }}">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <textarea id="summernote" name="content" style="margin-top: 50px !important;">{{ $course->content }}</textarea> 
                    </div>
                                   
                </div>
                <div class="buttons justify-content-end">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-default" value="Save">
                </div>
        </form>
</div>
@endsection