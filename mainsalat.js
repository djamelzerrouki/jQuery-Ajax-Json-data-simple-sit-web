$(document).ready(function () {
$("#btn").click(function () {
     $.ajax({
         url:"http://localhost/projects/jQuryProject/getjson.php",
          method:"get",
 success:function (data) {
  var array =$(data);
    array.each(function (index,elemnt) {
       alert(elemnt.id_mod); 
       $("#results").append("<li><a href='#' id='"+elemnt.id_mod+"' class='post'>"+elemnt.id_mod+"</a> </li>");

  });

}


});
});
});