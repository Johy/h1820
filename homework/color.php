<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .color{
            width:200px;
            height:200px;
            background:rgb(<?php echo mt_rand(0,255);?> ,<?php echo mt_rand(0,255);?> ,<?php echo mt_rand(0,255);?> );
    </style>
</head>
<body>
<div id="app">
        <div class="color"></div>
    </div>
    <script>
        setInterval(function(){            
            location.href=location.href
        },2000);
    </script>
</body>
</html>