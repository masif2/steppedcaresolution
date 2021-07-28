@extends('layouts.app')
@section('content')
<div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="container">
                    <div class="row blue-border-bottom">
                        <div class="col-sm-12 col-md-12 px-0">
                            <div class="top-header pt-2 ">
                                <h3 class="margin-page-title">Permissions</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table_div_padding">
                                <form action="">
                                    <div class="container">
                                        <div class="row mb-5">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label for="Project" class="form-label">Project</label>
                                                    <select class="form-control form-select" aria-label="Default select example">
                                                        <option selected>Select Project</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Disable</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label for="FormGroup" class="form-label">Form Group</label>
                                                    <select class="form-control form-select" aria-label="Default select example">
                                                        <option selected>Select Form Group</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Disable</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label for="Stream" class="form-label">Stream</label>
                                                    <select class="form-control form-elect" aria-label="Default select example">
                                                        <option selected>Select Stream</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Disable</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row permission">
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                <h3 class="text-center">Assigned User</h3>
                                                <div class="card mb-0">
                                                    <ul class="list-group">
                                                        <li class="active list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                        <li class="list-group-item">A fourth item</li>
                                                        <li class="list-group-item">And a fifth one</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                <div class="button">
                                                    <button class="mb-4 btn btn-primary d-block"><< Assign</button>
                                                    <button class="btn btn-primary d-block">Unassign >></button>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                <h3 class="text-center">Unassigned User</h3>
                                                <div class="card mb-0">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="active list-group-item">A third item</li>
                                                        <li class="list-group-item">A fourth item</li>
                                                        <li class="list-group-item">And a fifth one</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <button class="btn btn-primary">Save</button>
                                                <button class="btn btn-light text-white">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection