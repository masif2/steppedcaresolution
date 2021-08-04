<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

                $.ajax({
                    type:"get",
                    url:"{{url('/get-users')}}/"+selected_option,
                    success:function(response)
                    {
                        if(response)
                        {
                            $('#all_users').val('');

                            var html = '';
                            $.each(response,function(key,value){
                                html += '<li class="list-group-item" data-draggable="item" >'+
                                        '<input type="hidden" name="all_users[]" id="all_users" value="'+key+'"><span>'+value+'</span>'
                                    +'</li>';

                                /*$("#all_users").val(key);
                                $("#all_user_names").append(value);*/
                            });
                            console.log(html)
                            $("#all_users").html(html)
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
                            $('#stream_id').append('<option value="">Select Stream</option>');
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
