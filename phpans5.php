<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="wrapper"> 
  <ul>
    <li>AA</li>
    <li>BB</li>
    <li>CC</li>
    <li>DD</li>
</ul>
</div>
</body>
<script>
    $($('.wrapper').find('ul').get().reverse()).each(function(){
  $(this).replaceWith($('<ol>'+$(this).html()+'</ol>'))
})
</script>
</html>