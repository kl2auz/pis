@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Create
                    </button>

                        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Staff</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('staffs.store') }}" method="POST">
                                    @csrf <!-- This is for CSRF protection -->
                                    <div class="modal-body">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
                                            <input type="text" name="first_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
                                            <input type="text" name="middle_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">Last Name</span>
                                            <input type="text" name="last_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                        </div>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">Gender</span>
                                            <input type="text" name="gender" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                        </div>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">Age</span>
                                            <input type="text" name="age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                        </div>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">Address</span>
                                            <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                        </div>
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">Birthday</span>
                                            <input type="date" name="birthday" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
