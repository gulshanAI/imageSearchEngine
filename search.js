$(document).ready(function () {
   $('#searchit').submit(function(){
       let btn = true;
       let k = $('#searchit input');
       if($.trim(k.val()) == ""){
            k.css("border", "1px solid red")
            btn = false;
       }
       else{
        k.css("border", "1px solid #ccc")
       }
       if(btn){
        let data = k.val();
           $.ajax({
               type: "POST",
               url: "search2.php",
               data: {"k" : data},
               beforeSend: function(){
                $('#searchit button').html("Searching....");
                $('#searchit button').attr("disabled", true);
               },
               success: function (data) {
                $('#searchit button').html("Search");
                $('#searchit button').attr("disabled", false);
                $('.result').html(data);
                console.log(data)
                
                var img = [];
                   $('.images_table').find('tr').each(function(){
                        $(this).find('td').each(function(){
                            let im = $(this).find('img').attr("src");
                            img.push(im); 
                        }) 
                   }); 
                   $('.result').html(""); 
                   var thdata = "";
                   $.each(img, function(ind, ele){
                    thdata += '<img src="'+ele+'" >';
                   }) 
                   $('.result').html(thdata); 
                   console.log(img)
                    
                //    $('body').find('#desktop-search #leftnav').html("")
                //    $('body').find('#desktop-search #leftnav').hide();
                //    $('#gbg').hide();
                //    $('#gbz').hide();
                //    $('body').find('#mn tbody[id != "desktop-search"]').hide();
               }
           });
       }
       return false;
   })
});