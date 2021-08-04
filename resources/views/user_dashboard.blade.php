@extends('layouts.app')

@section('title', 'List Form')

@section('content')
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="container">
                <div class="row blue-border-bottom">
                    <div class="col-sm-6 col-md-9 col-lg-10 px-0">
                        <div class="top-header pt-2">
                            <h3 class="margin-page-title">Streams</h3>
                        </div>
                    </div>
                </div>
                {{--<div class="row report_row_top blue-border-bottom">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-12">
                        <div>
                            <label for="Project" class="form-label">Select Period</label>
                            <select
                                class="form-control form-select white_input"
                                aria-label="Default select example"
                            >
                                <option selected>Month 1</option>
                                <option value="1">Month 2</option>
                                <option value="2">Month 3</option>
                            </select>
                        </div>
                    </div>
                </div>--}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table_div_padding">
                            <div class="card mb-0">
                                <div class="table-responsive">
                                    <table class="table user-stream-table table_margin_adj">
                                        <thead>
                                        <tr>
                                            <td>Stream Name</td>
                                            <td>Form</td>
                                            <td>Project</td>
                                            <td>Status</td>
                                            <td>Actions</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($streams as $stream)
                                            <tr>
                                                <td class="form_anchor_text"><a href="#">{{$stream->stream_name}} </a></td>
                                                <td>{{$stream->form_name}}</td>
                                                <td>
                                                    @php
                                                        $project_name = \App\Models\project::where('id', $stream->project_id)->value('name')
                                                    @endphp
                                                    {{$project_name}}
                                                </td>
                                                <td>{{$stream->stream_status}}</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a type="button" class="btn table_btn update_btn text-white" href="{{route('dashboard.stream.stream_update')}}">Update</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5"></td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=" flex-columns flex-setting mob_margin_pagination">
                                <form>
                                    <div class="inline_block_adj show_rows_adj">
                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Show Rows :</label>
                                        <select name="" class="my-1 show_rows_count" id="show_rows" onchange="get_per_page()">
                                        </select>
                                    </div>
                                </form>
                                <div class="show_rows_adj margin_top">
                                    {{$streams->links('components.pagination')}}
                                </div>
                            </div>

                            {{--<div class="flex-columns flex-setting mob_margin_pagination">
                                <div class="inline_block_adj show_rows_adj">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref"
                                    >Show Rows :</label
                                    >
                                    <select
                                        class="my-1 show_rows_count"
                                        id="inlineFormCustomSelectPref"
                                    >
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
                                            <li class="page-item">
                                                <a class="page-link active" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.pagination')
@endsection
