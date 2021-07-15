@extends('layouts.app')
@section('content')
<div class="pcoded-wrapper">
    <div class="pcoded-content">
        <div class="container">

            <div class="row blue-border-bottom">
                <div class="col-sm-6 col-md-9 col-lg-10 px-0">
                    <div class="top-header pt-2 ">
                        <h3 class="margin-page-title">Manage Users</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 ">
                    <div class="top-header right_icon_text search_bar_adj">
                        <b class=""><a class="add_icon" href="{{route('dashboard.user.create')}}"><span><i class="fas fa-plus-circle"></i></span><span> Add Member</span></a></b>
                    </div>
                </div>
            </div>
            <form>
                <div class="row  blue-border-bottom">
                    <div class="col-sm-12 col-md-3 px-0">
                        <p class="pl-4 mt-2 mb-0"> Search </p>
                        <div class="form-group pl-4 pt-1 d-flex search_bar_adj">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search here">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 px-0">
                        <p class="pl-4 mt-2 mb-0"> Type </p>
                        <div class="form-group pl-4 pt-1 d-flex search_bar_adj">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>All</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 px-0">
                        <p class="pl-4 mt-2 mb-0"> Project </p>
                        <div class="form-group pl-4 pt-1 d-flex search_bar_adj">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>All</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <button class="span_search span_mid"><i class="fas fa-search search_icon"></i></button>
                        </div>

                    </div>

                </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table_div_padding">

                        <div class="card mb-0">
                            <div class="table-responsive">
                                <table class="table   table_margin_adj">
                                    <thead>
                                        <tr>
                                            <td> Name </td>
                                            <td> Email </td>
                                            <td> Phone </td>
                                            <td> Type </th>
                                            <td class="three_btn_width"> Status </td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $key=>$data)
                                        @if(auth()->user()->id==$data->id)
                                        @else
                                        <tr>
                                            <td> {{$data->name}}</td>
                                            <td> {{$data->email}} </td>
                                            <td> {{$data->phone}} </td>
                                            <td> {{$data->role}} </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{route('dashboard.user.view','ref='.encrypt($data->id))}}" type="button" class="btn  table_btn  view_btn text-white">View</a>
                                                    <a href="{{route('dashboard.user.edit','ref='.encrypt($data->id))}}" type="button" class="btn table_btn  update_btn text-white">Update</a>
                                                    
                                                    <button type="button" class="btn  table_btn delete_btn text-white delete_modal"
                                                     data-toggle="modal" 
                                                     data-deleteMember="{{route('dashboard.user.delete','ref='.encrypt($data->id))}}">Delete</button>
        
                                                </div>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
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