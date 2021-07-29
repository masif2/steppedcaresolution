@extends('layouts.app')
@section('content')
<div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="container">
                    <div class="row blue-border-bottom">
                        <div class="col-sm-6 col-md-9 col-lg-10 px-0">
                            <div class="top-header pt-2 ">
                                <h3 class="margin-page-title">Periods</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-2">
                            <div class="top-header right_icon_text">
                                <b class=""><a class="add_icon" href="{{route('dashboard.periods.create')}}"><span ><i class="fas fa-plus-circle"></i></span><span> Add Periods</span></a></b>
                            </div>
                        </div>
                    </div>
                    <div class="row  blue-border-bottom">
                        <div class="col-sm-12 col-md-4 px-0 ">
                            <p class="pl-4 mt-2 mb-0"> Search </p>
                            <div class="form-group pl-4 pt-1 d-flex search_bar_adj">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search here">
                                <button class="span_search span_mid"><i class="fas fa-search search_icon"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table_div_padding">
                                <div class="card mb-0">
                                    <div class="table-responsive">
                                        <table class="table     table_margin_adj">
                                            <thead>
                                                <tr>
                                                    <td> Name </td>
                                                    <td> Start Date </td>
                                                    <td> End Date </td>
                                                    <td> Status </td>
                                                    <td> Actions</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Month 1</td>
                                                    <td> 26,May 2021 </td>
                                                    <td> 26,May 2021 </td>
                                                    <td> Active </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn table_btn  update_btn text-white">Update</button>
                                                            <button type="button" class="btn  table_btn delete_btn text-white">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Month 1</td>
                                                    <td> 26,May 2021 </td>
                                                    <td> 26,May 2021 </td>
                                                    <td> Active </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn table_btn  update_btn text-white">Update</button>
                                                            <button type="button" class="btn  table_btn delete_btn text-white">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Month 1</td>
                                                    <td> 26,May 2021 </td>
                                                    <td> 26,May 2021 </td>
                                                    <td> Active </td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn table_btn  update_btn text-white">Update</button>
                                                            <button type="button" class="btn  table_btn delete_btn text-white">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class=" flex-columns flex-setting mob_margin_pagination">
                                    <div class="inline_block_adj show_rows_adj">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Show Rows :</label>
                                        <select class=" my-1 show_rows_count" id="inlineFormCustomSelectPref">
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option selected value="3">30</option>
                                        <option value="4">40</option>
                                        <option value="5">50</option>
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