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
    var image=$("#project_image")[0].files[0];
    var formData = $("#" + form_id).serialize();

    var projectform = new FormData();
    var image=$("#project_image")[0].files[0];
    projectform.append('project_image', image);
    projectform.append('name', $("#project_name").val());

    // alert(url)
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        url: url,
        type: $form.attr("method"),
        data: projectform,
        success: function(response) {
        console.log(response)
        }
    });
    
}