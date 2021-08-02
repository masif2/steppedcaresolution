@extends('layouts.app')

@section('title', 'Add Permissions')

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
                            <form method="POST" action="{{ route('dashboard.permission.store') }}">
                                @csrf
                                <div class="container">
                                    <div class="row mb-5">
                                        @if($active_user->role != 'Admin')
                                            <input type="hidden" name="project_id" value="{{$active_user->project_id}}">
                                        @else
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label for="FormGroup" class="form-label">Select Project *</label>
                                                    <select class="form-control form-select" id="project_id" name="project_id" aria-label="Default select example" {{--required--}}>
                                                        <option value="">Select Project</option>
                                                        @foreach($projects as $project)
                                                            <option value="{{$project->id}}" {{old('project_id') == $project->id ? "selected" : ""}}>{{$project->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="FormGroup" class="form-label">Select Form *</label>
                                                <select class="form-control form-select" id="form_id" name="form_id" {{--required--}} aria-label="Default select example">
                                                    <option value="">Select Form</option>
                                                    @if(!empty($forms))
                                                        @foreach($forms as $form)
                                                            <option value="{{$form->id}}">{{$form->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="mb-4">
                                                <label for="Stream" class="form-label">Select Stream *</label>
                                                <select class="form-control form-elect" id="stream_id" name="stream_id" {{--required--}} aria-label="Default select example">
                                                    <option value="">Select Stream</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row permission">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            <h3 class="text-center">Assigned User</h3>
                                            <div class="card mb-0">
                                                <ul class="list-group" data-draggable="target">

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            {{--<div class="button">
                                                <button class="mb-4 btn btn-primary d-block"><< Assign</button>
                                                <button class="btn btn-primary d-block">Unassign >></button>
                                            </div>--}}
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            <h3 class="text-center">Unassigned User</h3>
                                            <div class="card mb-0">
                                                <ul class="list-group" data-draggable="target">
                                                    @foreach($users as $user)
                                                        <li class="list-group-item" data-draggable="item">
                                                            <input type="hidden" name="assigned[]" value="{{$user->id}}">{{$user->name}}
                                                        </li>
                                                    @endforeach
                                                    {{--<li class="list-group-item"  data-draggable="item">A second item</li>
                                                    <li class="active list-group-item"  data-draggable="item">A third item</li>
                                                    <li class="list-group-item"  data-draggable="item">A fourth item</li>
                                                    <li class="list-group-item"  data-draggable="item">And a fifth one</li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <button class="btn btn-primary">Save</button>
                                            <a href="{{route('dashboard.permissions')}}" class="btn btn-light text-white">Cancel</a>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        (function()
        {
            //exclude older browsers by the features we need them to support
            //and legacy opera explicitly so we don't waste time on a dead browser
            if
            (
                !document.querySelectorAll
                ||
                !('draggable' in document.createElement('span'))
                ||
                window.opera
            )
            { return; }

            //get the collection of draggable items and add their draggable attribute
            for(var
                    items = document.querySelectorAll('[data-draggable="item"]'),
                    len = items.length,
                    i = 0; i < len; i ++)
            {
                items[i].setAttribute('draggable', 'true');
            }

            //variable for storing the dragging item reference
            //this will avoid the need to define any transfer data
            //which means that the elements don't need to have IDs
            var item = null;

            //dragstart event to initiate mouse dragging
            document.addEventListener('dragstart', function(e)
            {
                //set the item reference to this element
                item = e.target;

                //we don't need the transfer data, but we have to define something
                //otherwise the drop action won't work at all in firefox
                //most browsers support the proper mime-type syntax, eg. "text/plain"
                //but we have to use this incorrect syntax for the benefit of IE10+
                e.dataTransfer.setData('text', '');

            }, false);

            //dragover event to allow the drag by preventing its default
            //ie. the default action of an element is not to allow dragging
            document.addEventListener('dragover', function(e)
            {
                if(item)
                {
                    e.preventDefault();
                }

            }, false);

            //drop event to allow the element to be dropped into valid targets
            document.addEventListener('drop', function(e)
            {
                //if this element is a drop target, move the item here
                //then prevent default to allow the action (same as dragover)
                if(e.target.getAttribute('data-draggable') == 'target')
                {
                    e.target.appendChild(item);

                    e.preventDefault();
                }

            }, false);

            //dragend event to clean-up after drop or abort
            //which fires whether or not the drop target was valid
            document.addEventListener('dragend', function(e)
            {
                item = null;

            }, false);

        })();

    </script>
    <script>

        // get forms
        $('select#project_id').change(function(){
            $(this).find("option:selected").each(function(){
                var selected_option = $(this).attr("value");
                if(selected_option){
                    $.ajax({
                        type:"get",
                        url:"{{url('/get-forms')}}/"+selected_option,
                        success:function(response)
                        {
                            if(response)
                            {
                                $('#form_id').empty();
                                $('#form_id').append('<option value="">Select Form</option>');
                                $.each(response,function(key,value){
                                    $('#form_id').append('<option value="'+key+'">'+value+'</option>');
                                });
                            }
                        }
                    });
                }
            });
        }).change();

        // get streams
        $('select#form_id').change(function(){
            $(this).find("option:selected").each(function(){
                var selected_option = $(this).attr("value");
                if(selected_option){
                    $.ajax({
                        type:"get",
                        url:"{{url('/get-streams')}}/"+selected_option,
                        success:function(response)
                        {
                            if(response)
                            {
                                $('#stream_id').empty();
                                $('#stream_id').append('<option value="">Select Form</option>');
                                $.each(response,function(key,value){
                                    $('#stream_id').append('<option value="'+key+'">'+value+'</option>');
                                });
                            }
                        }
                    });
                }
            });
        }).change();
    </script>
@endsection
