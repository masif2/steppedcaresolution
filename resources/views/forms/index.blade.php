@extends('layouts.app')

@section('title', 'List Form')

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
                            @include('layouts.flash-message')
                            <div class="card pt-3">
                                <form method="POST" action="{{ route('forms.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                                                <div class="mb-3">
                                                    <label for="newform" class="form-label">Create New Form *</label>
                                                    <input type="text" class="form-control" id="newform" name="name" value="{{ old('name') }}" required placeholder="Month 1" aria-describedby="newform">
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                                                <div class="mb-3">
                                                    <label for="FormGroup" class="form-label">Select Project *</label>
                                                    <select class="form-control form-select" name="project_id" aria-label="Default select example" required>
                                                        <option value="">Select Project</option>
                                                        @foreach($projects as $project)
                                                            <option value="{{$project->id}}" {{old('project_id') == $project->id ? "selected" : ""}}>{{$project->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
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
                                                <td style="width: 10%">No</td>
                                                <td>Form</td>
                                                <td>Project</td>
                                                <td>Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($forms as $form)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td><a href="#">{{$form->form_name}}</a></td>
                                                <td>{{$form->project_name}}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a data-toggle="modal" data-target="#editFormModal{{$form->form_id}}" class="btn table_btn update_btn text-white">Update</a>
                                                        <a href="#" class="btn table_btn table_btn delete_btn text-white">Delete</a>
                                                        <button type="button" class="btn stream_button_new table_btn text-white" onclick="location.href = '../default/forms-stream.html'">Streams</button>
                                                    </div>

                                                    {{--Modal for edit form--}}
                                                    <div class="modal fade" id="editFormModal{{$form->form_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form method="POST" action="{{ route('forms.update', [$form->form_id]) }}"  enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="id" value="{{$form->form_id}}">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-xl-12 col-md-12 col-12">
                                                                                <div class="mb-4">
                                                                                    <label for="newform" class="form-label">Create New Form *</label>
                                                                                    <input type="text" class="form-control" id="newform" name="name" value="{{$form->form_name}}" required placeholder="Month 1" aria-describedby="newform">
                                                                                </div>
                                                                                <div class="mb-4">
                                                                                    <label for="FormGroup" class="form-label">Select Project *</label>
                                                                                    <select class="form-control form-select" name="project_id" aria-label="Default select example" required>
                                                                                        <option value="">Select Project</option>
                                                                                        @foreach($projects as $project)
                                                                                            <option value="{{$project->id}}" {{$form->project_id == $project->id ? "selected" : ""}}>{{$project->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer project_modal_footer users_modal_footer">
                                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                                            <button class="btn btn-light text-white" data-dismiss="modal">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
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
