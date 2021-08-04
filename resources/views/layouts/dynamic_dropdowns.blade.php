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
