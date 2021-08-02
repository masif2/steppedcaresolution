<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function($){
        let array=[ "10", "20", "30","40","50"];
        $("#show_rows").empty();
        var show_rows='';
        @if(!empty($row_show))
            for ( var key in array) {
            if(array[key] == {{$row_show}}){
                show_rows='<option value="'+array[key]+'" " selected>'+array[key]+'</option>';
            }else{
                show_rows ='<option value="'+array[key]+'" ">'+array[key]+'</option>';
            }

            $("#show_rows").append(show_rows);
        }
        @else
            for ( var key in array) {
            show_rows ='<option value="'+array[key]+'" ">'+array[key]+'</option>';
            $("#show_rows").append(show_rows);
        }
        @endif
    });
</script>
