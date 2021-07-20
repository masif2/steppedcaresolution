$(document).ready(function(){
    //
    $(".project_upload_btn").click(function() {
        $(".file_upload_custom").click();
    })
    //
    $(".file_upload_input").click(function() {
        $(".file_upload_custom").click();
    })

    //

    $(".delete_modal").click(function(){
       let url=$(this).attr('data-deleteMember');
        $("#delete_modal").show();
       
    })
    //
    $("#js_add_project_btn").click(function(){
        
    })

})


function AddProject(form_id){
    event.preventDefault();
    var $form = $("#" + form_id);
    var url = $form.attr('action');
    var formData = $("#" + form_id).serialize();
    // alert(url)
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        url: url,
        type: $form.attr("method"),
        data: formData,
        success: function(response) {
        console.log(response)
        }
    });
    
}