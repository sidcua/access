@extends('layouts.app')
@section('title', 'Home')
@include('inc.navbar_personnel')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="jumbotron bg-white">
                <h1 class="display-5 text-primary">Personal Data Sheet</h1>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="#" role="button">Edit PDS</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-1">
            <form action="">
                    <div class="card">
                        <h5 class="card-header bg-primary text-white">
                            I. Personal Information
                        </h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="surname">Surname</label>
                                            <input type="text" class="form-control" id="surname" placeholder="Doe">
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="John">
                                        </div>
                                        <div class="form-group">
                                            <label for="middlename">Middle Name</label>
                                            <input type="text" class="form-control" id="middlename" placeholder="Michael">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="csid">CS ID No.</label>
                                            <input type="text" class="form-control" id="csid" placeholder="(Do not fill up. For CSC use only)">
                                        </div>
                                        <div class="form-group">
                                            <label for="extension">Name Extension</label>
                                            <input type="text" class="form-control" id="extension" placeholder="(JR, SR)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
