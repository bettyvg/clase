<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div id= "div1" class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div>
<div id= "div2" class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div>
<script>
    $(document).ready(function(){
        var url = "http://localhost/";

        get_categories();
        
        function get_categories() {
           $.ajax({
        url     : url+"api/bi_categories_getall",
        type    : "get",
        success : (function (data) {
            $.each( data, function( key, value) {
                //$("#div1").append("<p>"+value.BusinessCategories.name+"</p>");
                if(value.BusinessCategories.name == 'Restaurante')
                {
                    $("#div1 h1").append("<h1>"+value.BusinessCategories.name+"</h1>");
                }else if(value.BusinessCategories.name == 'Gym'){
                $("#div2 h1").append("<h1>"+value.BusinessCategories.name+"</h1>");
                }
            });
        }),
    }); 
        }
        
});

</script>
</body>
</html>