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


    $("#"+form_id).submit();
/*
    let image_upload = new FormData();
    let profile_image = $("#project_image")[0].files[0];
    image_upload.append('photo', profile_image);


    var $form = $("#" + form_id);
    var url = $form.attr('action');
    var image=$("#project_image")[0].files[0];
    var formData = $("#" + form_id).serialize();

    $.each($("#project_image")[0].files[0], function(key, file) {
        $('.files').append('<li>' + file.name + '</li>');

        var data = new FormData();
        data.append("project_image", file);
         data.append("project_image", file);

    // alert(url)
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        url: url,
        type: $form.attr("method"),
        dataType: 'json',
        processData: false,
        data: data,
        success: function(response) {
        console.log(response)
        }
    });
}); 
*/
}