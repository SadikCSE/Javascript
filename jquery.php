<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery Document</title>

    <style type="text/css">
        #container{
            background: darkgreen;
            color: aliceblue;
        }

        .title{
            height: 200px;
        }
    </style>
</head>
<body>
    <h1 id="container" class="title">Welcome To Jquery</h1>
    <!--- <h1 id="container" class="">Welcome To Jquery</h1> --->

    <button id="btnclick">Click Me</button>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script type="text/javascript" >


        $(document).ready(function () {
            $('#btnclick').bind('click',function () {

                $('#container').css({
                    'background':'red',
                    'color':'black',
                });

                $('h1').removeClass('title');
                //$('h1').addClass('title');
            });



        });




        console.log('Hello');
    </script>
</body>
</html>
