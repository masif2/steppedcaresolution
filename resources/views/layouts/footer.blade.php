@include('modals.index')
<script src="../../assets/js/vendor-all.min.js"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../../assets/js/pcoded.min.js"></script>
<script src="../../assets/js/main.js"></script>
<script>
function common_helper_split_query_string(){
    var vars = [], hash;
            var q = document.URL.split('?')[1];
            if(q != undefined){
                q = q.split('&');
                for(var i = 0; i < q.length; i++){
                    hash = q[i].split('=');
                   // vars.push(hash[1]);
                    vars[hash[0]] = hash[1];
                }
        }
        return vars;
}
 function get_per_page() {
            var e = document.getElementById("show_rows");
            var value = e.options[e.selectedIndex].value;
            var interest = $('ul').find('li.active').children().attr('href');
           var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&'); 
            for (var i = 0; i < url.length; i++) {  
                var urlparam = url[i].split('=');  
                if (urlparam[0] == interest) {  
                    return urlparam[1];  
                }  
            }  
         const vars=common_helper_split_query_string();
         window.location.href = interest + "?page="+vars.page+"&show_rows=" + value;
        }

        $(".page-link").click(function(){
            window.location.href =$(this).attr("data-link")+"&show_rows=" + $("#show_rows option:selected").val();
           
        })
</script>




