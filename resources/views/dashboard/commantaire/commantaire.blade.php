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
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Users Commantaires</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-3">
                        <div class="table-responsive p-3">
                            <table class="align-items-center mb-2" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 250px">
                                            Author</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Subject</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Message</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/images/{{ $message->image_path }}"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $message->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $message->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $message->subject }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{!! Str::limit($message->message, 70, '...') !!}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a href="/showDetail/{{ $message->id }}"><span class="badge badge-sm bg-grade-primary">Details</span></a>
                                            <a href="/refusedComment/{{ $message->id }}"><span class="badge badge-sm bg-gradient-danger">Refused</span></a>
                                            <a href="/AcceptComment/{{ $message->id }}"><span class="badge badge-sm bg-gradient-success">Accepted</span></a>

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </tableclass=>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
