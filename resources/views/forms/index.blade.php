@extends('layouts.app')
@section('content')

<div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 px-0">
                            <div class="top-header pt-2 blue-border-bottom">
                                <h3 class="margin-page-title">Forms</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table_div_padding">
                                <div class="card pt-3">
                                    <form action="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-5 col-lg-6 col-md-6 col-12">
                                                    <div class="mb-3">
                                                        <label for="newform" class="form-label">Create New Form</label>
                                                        <input type="text" class="form-control" id="newform" placeholder="Month 1" aria-describedby="newform">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                                    <label for="newform" class="form-label hide-on-mobile" style="visibility: hidden;display: block;">Create New Form</label>
                                                    <button class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card pt-3">
                                    <form action="">
                                        <div class="container">
                                            <div class="row report_row_top ">
                                                <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                                                    <div class="select_project_width">
                                                        <label for="Project" class="form-label">Search</label>
                                                        <input type="text" class="form-control" id="newform" placeholder="Select Here" aria-describedby="newform">
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-6 col-12 report_flex_row">
                                                    <div class=" select_project_width">
                                                        <label for="FormGroup" class="form-label">Select Project</label>
                                                        <select class="form-control form-select " aria-label="Default select example">
                                                            <option selected="">Child Health Care
                                                            </option>
                                                            <option value="1"></option>
                                                            <option value="2">Disable</option>                                                        
                                                        </select>
                                                    </div>
                                                    <div class="span_search_div">
                                                        <button class="report_search_icon span_mid"><i class="fas fa-search "></i></button>
                                                    </div>
                                                </div>
                        
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card mb-0">
                                    <div class="table-responsive">
                                        <table class="table   table_margin_adj">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Form</td>
                                                    <td>Project</td>
                                                    <td>Actions</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="../default/forms-stream.html">this is long form name</a></td>
                                                    <td>Child Health Care</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn table_btn  update_btn text-white">Update</button>
                                                            <button type="button" class="btn  table_btn delete_btn text-white">Delete</button>
                                                            <button type="button" class="btn btn-dark table_btn  text-white" onclick="location.href = '../default/forms-stream.html'">Streams</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="../default/forms-stream.html">this is long form name</a></td>
                                                    <td>Child Health Care</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn table_btn  update_btn text-white">Update</button>
                                                            <button type="button" class="btn  table_btn delete_btn text-white">Delete</button>
                                                            <button type="button" class="btn btn-dark table_btn  text-white" onclick="location.href = '../default/forms-stream.html'">Streams</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><a href="../default/forms-stream.html">this is long form name</a></td>
                                                    <td>Child Health Care</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn table_btn  update_btn text-white">Update</button>
                                                            <button type="button" class="btn  table_btn delete_btn text-white">Delete</button>
                                                            <button type="button" class="btn btn-dark table_btn  text-white" onclick="location.href = '../default/forms-stream.html'">Streams</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class=" flex-columns flex-setting">
                                    <div class="inline_block_adj show_rows_adj">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Show Rows :</label>
                                        <select class=" my-1 show_rows_count" id="inlineFormCustomSelectPref">
                                        <option selected>30</option>
                                        <option value="1">50</option>
                                        <option value="2">60</option>
                                        <option value="3">70</option>
                                    </select>
                                    </div>
                                    <div class="show_rows_adj margin_top">
                                        <nav aria-label="Page navigation example ">
                                            <ul class="pagination">
                                                <li class="page-item "><a class="page-link active" href="#">Prev</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





@endsection