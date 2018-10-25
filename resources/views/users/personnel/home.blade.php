@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('inc.navbar_personnel')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header bg-primary text-white">
                        PDS
                    </h5>
                    <div class="card-body">
                        <h5 class="card-title">Personal Data Sheet</h5>
                        <a href="/pds" class="btn btn-primary">Go to PDS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
