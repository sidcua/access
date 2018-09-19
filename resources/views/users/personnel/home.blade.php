@extends('layouts.app')
@section('title', 'Home')
@include('inc.navbar_personnel')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
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
