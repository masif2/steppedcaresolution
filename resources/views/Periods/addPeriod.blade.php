@extends('layouts.app')
@section('content')
<div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="container">

                    <div class="row blue-border-bottom">
                        <div class="col-sm-12 col-md-12 px-0">
                            <div class="top-header pt-2 ">
                                <h3 class="margin-page-title">Add Period</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table_div_padding">
                                <form action="">
                                    <div class="card mb-0 pt-4 mb-4">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Month 1" aria-describedby="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-control form-select" aria-label="Default select example">
                                                        <option selected>Select Status</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Disable</option>                                                        
                                                      </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label for="startdate" class="form-label">Start Date</label>
                                                        <input type="date" class="form-control" id="startdate" placeholder="Month 1" aria-describedby="startdate">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-x-6 col-md-6 col-12">
                                                    <div class="mb-4">
                                                        <label for="EndDate" class="form-label">End Date</label>
                                                        <input type="date" class="form-control" id="EndDate" placeholder="Month 1" aria-describedby="EndDate">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">Save</button>
                                    <button class="btn btn-light text-white">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection