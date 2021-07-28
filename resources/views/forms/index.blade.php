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
                                                        {{--<a href="#" class="btn table_btn table_btn delete_btn text-white">Delete</a>--}}
                                                        <button type="button" class="btn  table_btn delete_btn text-white delete_modal" data-toggle="modal" data-deleteForm="{{route('forms.delete')}}{{'?ref='.encrypt($form->form_id)}}">Delete</button>
                                                        <button type="button" class="btn stream_button_new table_btn text-white" onclick="location.href = '../default/forms-stream.html'">Streams</button>
                                                    </div>
                                                    @include('forms.partials.update_form_modal')
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

    <script>
        $(".delete_form_modal").click(function(){
            $("#target_row").val($(this).attr('data-deleteForm'));
            $("#form_delete_modal").modal('show');
        })
    </script>
@endsection
