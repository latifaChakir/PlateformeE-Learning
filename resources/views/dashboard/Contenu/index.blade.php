@extends('layouts.dashboard')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
 {{$message}}
</div>
@endif
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 ">
                <div class="d-flex justify-content-between">
                <h6 class="text-white text-capitalize ps-3">Courses content table</h6>
                <a href="#addModal" data-toggle="modal"><i class="material-icons text-white me-3">&#xE147;</i> </a>
            </div>
              </div>
            </div>
            <div class="card-body px-2 pb-3">
              <div class="table-responsive p-2">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Chapiter Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($contents as $contenu)

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$contenu->courses_title}}</h6>
                          </div>
                        </div>
                      </td>

                        <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$contenu->chapters_title}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                <p class="text-sm text-secondary mb-0">{{$contenu->title}}</p>
                              </div>
                            </div>
                          </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-sm text-secondary mb-0 truncated-content" data-full-content="{{ $contenu->content }}">
                                    {!! Str::limit($contenu->content, 30, '...') !!}
                                </p>

                            </div>
                            </div>
                        </td>

                      <td class="align-middle">
                        <div class="buttons">
                        <a class="btn bg-grade-primary" href="{{route('contentCourse.edit',$contenu->id)}}">Edit</a>
                        <form action="{{route('contentCourse.destroy',$contenu->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="addModal" class="modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="employeeForm" method="post" action="{{route('contentCourse.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Course Content</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <select class="form-control custom-select" name="course_id" placeholder="choose a course">
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="chapter_name" placeholder="Chapter Name">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content" style="margin-top: 50px !important;"></textarea>
                        </div>

                        <div class="buttons justify-content-end">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-default" value="Save">
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>


    <div id="contentModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p id="fullContent" class="text-sm text-secondary mb-0"></p>
                </div>
            </div>
        </div>
    </div>

@endsection



