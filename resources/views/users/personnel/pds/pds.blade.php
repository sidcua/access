@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('inc.navbar_personnel')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="jumbotron bg-white">
                    <h1 class="display-5 text-primary">Personal Data Sheet</h1>
                    <hr class="my-4">
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
                                <hr>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input type="date" class="form-control col-md-4" id="date_of_birth" placeholder="1/1/1990">
                                        </div>
                                        <div class="form-group">
                                            <label for="place_of_birth">Place of Birth</label>
                                            <input type="text" class="form-control" id="place_of_birth" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="">Sex</label>
                                            <div class="offset-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="">Civil Status</label>
                                            <div class="offset-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Single</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Widowed</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option3">
                                                    <label class="form-check-label" for="inlineRadio1">Married</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option4">
                                                    <label class="form-check-label" for="inlineRadio2">Separated</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option5">
                                                    <label class="form-check-label" for="inlineRadio2">Other/s</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Height</label>
                                            <input type="number" class="form-control" id="" placeholder="(meters)">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Weight</label>
                                            <input type="number" class="form-control" id="" placeholder="(kg)">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Blood Type</label>
                                            <input type="text" class="form-control" id="" placeholder="ex. AB">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">GSIS ID No.</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pag-Ibig No.</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">PhilHealth No.</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">SSS No.</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">TIN No.</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Agency Employee No.</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Residential Address</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                            <small id="" class="form-text text-muted">House/Block/Lot No. Street Subdivision/Village Barangay City/Municipality Province</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Zipcode</label>
                                            <input type="number" class="form-control col-md-3" id="" placeholder="">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label for="">Permanent Address</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                            <small id="" class="form-text text-muted">House/Block/Lot No. Street Subdivision/Village Barangay City/Municipality Province</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Zipcode</label>
                                            <input type="number" class="form-control col-md-3" id="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Telephone No.</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Mobile No.</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">+63</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="xxxxxxxxxx" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email Address (if any)</label>
                                            <input type="email" class="form-control" id="" placeholder="example@example.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header bg-primary text-white">
                            II. Family Background
                        </h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Spouse's Surname</label>
                                                        <input type="text" class="form-control" id="" placeholder="Doe">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">First Name</label>
                                                        <input type="text" class="form-control" id="" placeholder="Jane">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Middle Name</label>
                                                        <input type="text" class="form-control" id="" placeholder="Michael">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Name Extension</label>
                                                        <input type="text" class="form-control col-md-4" id="" placeholder="(JR, SR)">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Employer/Business Name</label>
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Business Address</label>
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Occupation</label>
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Telephone No.</label>
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label for="">Name of Children</label>
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="">Date of Birth</label>
                                                        <input type="date" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="date" class="form-control" id="" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Father's Surname</label>
                                            <input type="text" class="form-control" id="" placeholder="Doe">
                                        </div>
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" id="" placeholder="John">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Middle Name</label>
                                            <input type="text" class="form-control" id="" placeholder="Michael">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Name Extension</label>
                                            <input type="text" class="form-control col-md-4" id="" placeholder="(JR, SR)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Mother's Maiden Name</label>
                                            <input type="text" class="form-control" id="" placeholder="Jane Michael Doe">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Surname</label>
                                            <input type="text" class="form-control" id="" placeholder="Doe">
                                        </div>
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" id="" placeholder="Jane">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Middle Name</label>
                                            <input type="text" class="form-control" id="" placeholder="Michael">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Name Extension</label>
                                            <input type="text" class="form-control col-md-4" id="" placeholder="(JR, SR)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header bg-primary text-white">
                            III. Educational Background
                        </h5>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Elementary</h3>
                                        <div class="form-group">
                                            <label for="">Name of School</label>
                                            <input type="text" class="form-control" id="" placeholder="">
                                            <small id="" class="form-text text-muted">Write in full</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Period of Attendance</label>
                                            <div class="input-group col-md-5">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">From - To</span>
                                                </div>
                                                <input type="number" aria-label="First name" class="form-control">
                                                <input type="number" aria-label="Last name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Year Graduated</label>
                                            <input type="text" class="form-control col-md-2" id="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Scholarship/Academic Honors Received</label>
                                            <input type="text" class="form-control col-md-2" id="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        
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
