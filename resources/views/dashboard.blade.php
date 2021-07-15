@extends('layouts.app')

@section('content')
<div class="pcoded-wrapper">
    <div class="pcoded-content">
        <div class="container">
            <div class="row blue-border-bottom">
                <div class="col-sm-6 col-md-9 col-lg-10 px-0">
                    <div class="top-header pt-2 ">
                        <h3 class="margin-page-title">Dashboard</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="top-header right_icon_text">
                        <b class=""><a class="add_icon" href="" data-toggle="modal" data-target="#exampleModal"><span><i class="fas fa-plus-circle"></i></span><span> Add Graph</span></a></b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="table_div_padding">
                        <div class="card mb-0">
                            <div class="card_header">
                                <div class="grid_container li_dark_border">
                                    <div class="summary_text_center">
                                        <h5>Summary of Period</h5>
                                        <div class="summary_view_more ml-2">
                                            <button class="btn update_status_btn text-white">
                                                View More
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cross_image">
                                        <img class="cross_imgae_width" src="../assets/images/cross_new.png" />
                                    </div>
                                </div>
                                <div class="row new_row_adjusted li_dark_border">
                                    <div class="col-sm-12 sumary_select_list ">
                                        <select class="form-control form-select white_input" aria-label="Default select example">
                                            <option selected=""> Month 13 (Period Apr 15 - May 14,2021)</option>
                                            <option value="1">Month 12 (Period Apr 15 - May 14,2021)</option>
                                            <option value="2">Month 11 (Period Apr 15 - May 14,2021)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table  period_summary_table  table_margin_adj">
                                    <thead>
                                        <tr>
                                            <td> Form </td>
                                            <td> Status </td>
                                        </tr>
                                    </thead>
                                    <tbody class="summary_period_body">
                                        <tr>
                                            <td><a class="form_anchor_text">eMH Vendors - Health Canada Monthly
                                                </a></td>
                                            <td> Completed </td>
                                        </tr>
                                        <tr>
                                            <td><a class="form_anchor_text">eMH Vendors - Health Canada Monthly
                                                </a></td>
                                            <td> Completed </td>
                                        </tr>
                                        <tr>
                                            <td><a class="form_anchor_text">eMH Vendors - Health Canada Monthly
                                                </a></td>
                                            <td> Completed </td>
                                        </tr>
                                        <tr>
                                            <td><a class="form_anchor_text">eMH Vendors - Health Canada Monthly
                                                </a></td>
                                            <td> Completed </td>
                                        </tr>
                                        <tr>
                                            <td><a class="form_anchor_text">eMH Vendors - Health Canada Monthly
                                                </a></td>
                                            <td> Completed </td>
                                        </tr>
                                        <tr>
                                            <td><a class="form_anchor_text">eMH Vendors - Health Canada Monthly
                                                </a></td>
                                            <td> Completed </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="table_div_padding">
                        <div class="card mb-0">
                            <div class="card_header grid_container li_dark_border">
                                <div class=" row new_row_adjusted  text-center">
                                    <div class="col-sm-12">
                                        <h5 class="chart_heading">HC Reports - Stream 1.0 - Users</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="chart_sub_heading">Duration: Mar 21 to Aug 21</p>
                                    </div>
                                </div>
                                <div class="cross_image">
                                    <img class="cross_imgae_width" src="../assets/images/cross_new.png" />
                                </div>
                            </div>
                            <div class="row new_row_adjusted">
                                <div class="col-sm-12">

                                    <div class="chart_padding">
                                        <p class="yaxis_chart_label">Value</p>
                                        <figure class="highcharts-figure">
                                            <div id="container"></div>
                                        </figure>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="table_div_padding">
                        <div class="card mb-0">
                            <div class="card_header grid_container li_dark_border">
                                <div class="row new_row_adjusted  text-center">
                                    <div class="col-sm-12">
                                        <h5 class="chart_heading">HC Reports - Stream 1.0 - Users</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="chart_sub_heading">Duration: Mar 21 to Aug 21</p>
                                    </div>
                                </div>
                                <div class="cross_image">
                                    <img class="cross_imgae_width" src="../assets/images/cross_new.png" />
                                </div>
                            </div>
                            <div class="row new_row_adjusted">
                                <div class="col-sm-12">
                                    <div class="chart_padding">
                                        <p class="yaxis_chart_label">Value</p>
                                        <figure class="highcharts-figure">
                                            <div id="area_container"></div>
                                        </figure>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="table_div_padding">
                        <div class="card mb-0">
                            <div class="card_header grid_container li_dark_border">
                                <div class="row new_row_adjusted  text-center">
                                    <div class="col-sm-12">
                                        <h5 class="chart_heading">HC Reports - Stream 1.0 - Device</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="chart_sub_heading">Duration: Mar 21 to Aug 21 </p>
                                    </div>
                                </div>
                                <div class="cross_image">
                                    <img class="cross_imgae_width" src="../assets/images/cross_new.png" />
                                </div>
                            </div>
                            <div class="row new_row_adjusted">
                                <div class="col-sm-12">
                                    <div class="chart_padding">
                                        <p class="yaxis_chart_label">Value</p>
                                        <figure class="highcharts-figure">
                                            <div id="second_coloumn_chart"></div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title text-center report_modal_header" id="exampleModalLabel">Add Graph</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Starting Period</label>
                                        <select class="form-control white_input" id="exampleFormControlSelect1">
                                            <option>Month 1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Ending Period</label>
                                        <select class="form-control white_input" id="exampleFormControlSelect1">
                                            <option>Month 2</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Project</label>
                                        <select class="form-control white_input" id="exampleFormControlSelect1">
                                            <option>Home Wood Health</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Form</label>
                                        <select class="form-control white_input" id="exampleFormControlSelect1">
                                            <option>Green Space</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Stream</label>
                                        <select class="form-control white_input" id="exampleFormControlSelect1">
                                            <option>Stream 1.0</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Table</label>
                                        <select class="form-control white_input" id="exampleFormControlSelect1">
                                            <option>Users</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <table class="radio_table" style="width:75%">
                                        <tr>
                                            <th> Cumulative Value </th>
                                            <td>
                                                <label class="radio_container">
                                                    <input type="radio" checked="checked" name="cumulative_value">
                                                    <span class="checkmark"></span>
                                                    Yes
                                                </label>
                                            </td>
                                            <td>
                                                <label class="radio_container">No
                                                    <input type="radio" checked="checked" name="cumulative_value">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection