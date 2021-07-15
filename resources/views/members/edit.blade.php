@extends('layouts.app')
@section('content')
<div class="pcoded-wrapper">
    <div class="pcoded-content">
        <div class="container">

            <div class="row blue-border-bottom">
                <div class="col-sm-12 col-md-12 px-0">
                    <div class="top-header pt-2 ">
                        <h3 class="margin-page-title">View Member</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table_div_padding">
                        <form action="">
                            <div class="card mb-4">
                                <div class="card-header">Basic Info</div>
                                <div class="container">
                                    <div class="row pt-4">
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="firstname" class="form-label">First Name *</label>
                                                <input type="text" readonly class="form-control" id="firstname" placeholder="Month 1" aria-describedby="firstname" value="{{$user->firstname??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input type="text" readonly class="form-control" id="lastname" placeholder="Month 1" aria-describedby="lastname" value="{{$user->lastname??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="email" class="form-label">Email *</label>
                                                <input type="email" readonly class="form-control" id="email" placeholder="Month 1" aria-describedby="email" value="{{$user->lastname??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="tel" readonly class="form-control" id="phone" placeholder="Month 1" aria-describedby="phone" value="{{$user->lastname??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="Address" class="form-label">Address</label>
                                                <input type="text" readonly class="form-control" id="Address" placeholder="Month 1" aria-describedby="Address" value="{{$user->address??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="zip" class="form-label">Zip / Postal Code</label>
                                                <input type="text" readonly class="form-control" id="zip" placeholder="Month 1" aria-describedby="zip" value="{{$user->zip??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="City" class="form-label">City</label>
                                                <input type="text" readonly class="form-control" id="City" placeholder="Month 1" aria-describedby="City" value="{{$user->city??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="state" class="form-label">State / Province</label>
                                                <input type="text" readonly class="form-control" id="state" placeholder="Month 1" aria-describedby="state" value="{{$user->state??null}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="Country" class="form-label">Country</label>
                                                <select class="form-control form-select" disabled aria-label="Default select example">
                                                    <option selected>Select Country</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Aditional Info</div>
                                <div class="container">
                                    <div class="row pt-4">
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="Type" class="form-label">Project</label>
                                                <select disabled class="form-control form-select" aria-label="Default select example">
                                                    <option selected>Select Type</option>
                                                    @foreach($projects as $key=>$data)
                                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="Type" class="form-label">Type</label>
                                                <select class="form-control form-select" disabled aria-label="Default select example">
                                                    <option selected>Select Type</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="Status" class="form-label">Status</label>
                                                <select class="form-control form-select" disabled aria-label="Default select example">
                                                    <option selected>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">User Details</div>
                                <div class="container">
                                    <div class="row pt-4">
                                        <div class="col-lg-2 col-xl-2 col-md-4 col-sm-6 col-12">
                                            <p class="user_details_font">Created On: 24-10-2021 </p>
                                        </div>
                                        <div class="col-lg-2 col-xl-2 col-md-4 col-sm-6 col-12">
                                            <p class="user_details_font">Created By: Micheal</p>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-lg-2 col-xl-2 col-md-4 col-sm-6 col-12">
                                            <p class="user_details_font">Updated On: 25-10-2021
                                            </p>
                                        </div>
                                        <div class="col-lg-2 col-xl-2 col-md-4 col-sm-6 col-12">
                                            <p class="user_details_font"> Updated By: Micheal</p>
                                        </div>
                                    </div>
                                    <div class="row pt-4">
                                        <div class="col-lg-2 col-xl-2 col-md-4 col-sm-6 col-12">
                                            <p class="user_details_font">Last Login: 25-10-2021 10:58:23</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Save</button>
                            <a href="{{route('dashboard.users')}}" type="button" class="btn btn-light text-white">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection