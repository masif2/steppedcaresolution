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

})