$(document).ready(function () {
$("#btn").click(function () {
     $.ajax({
         url:"https://jsonplaceholder.typicode.com/posts",
         method:"get",
       //data:{name:inputName},
success:function (data) {
  var array =$(data);
    array.each(function (index,elemnt) {
       $("#results").append("<li><a href='#' id='"+elemnt.id+"' class='post'>"+elemnt.title+"</a> </li>");

  });

},
         complete:function () {
             $(".post").click(function () {
                 var id =$(this).attr("id");
                  $.ajax({
                     url:"https://jsonplaceholder.typicode.com/posts/"+id,
                     method:"get",
                      success:function (data) {
                               $("#title").text(data.title);
                              $("#body").text(data.body);
                          }
                         });
             });
         }


});
});
});