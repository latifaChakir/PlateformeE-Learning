@extends('layouts.dashboard')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
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
                                <h6 class="text-white text-capitalize ps-3">Categories table</h6>
                                <a href="#addModal" data-toggle="modal"><i
                                        class="material-icons text-white me-3">&#xE147;</i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2 pb-3">
                        <div class="table-responsive p-2">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name</th>

                                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prix
                                        </th> --}}
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Created At</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $category->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>


                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-sm text-secondary mb-0">{{ $category->created_at }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="buttons">
                                                    <a class="btn bg-grade-primary"
                                                        href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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
                    <form id="employeeForm" method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Category</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Category Namme">
                            </div>

                            <div class="form-group">
                                <label>Category Image </label>
                                <input type="file" class="form-control" name="image_path" accept="image/*">
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
    @endsection
