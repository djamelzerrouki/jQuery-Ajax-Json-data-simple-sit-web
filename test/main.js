$(document).ready(function () {
$("#btn").click(function () {
   var inputName=$("#name").val();
    $.ajax({
        //https://jsonplaceholder.typicode.com/posts
       url:"ajax.php",
       method:"get",
       data:{name:inputName},
success:function (response) {
  $("#result").html(response);
}
    });
});
});