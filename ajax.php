<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Document</title>

    <style type="text/css">
        #container{
            background: darkgreen;
            color: aliceblue;
        }

        .title{
            height: 200px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<h1 id="container" class="title">Welcome To Ajax</h1>
<!--- <h1 id="container" class="">Welcome To Jquery</h1> --->

<button id="btnclick"><i class ="fa fa fa-square"></i>Click Me</button>

<div id="countryList"></div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript" >


    $(document).ready(function () {
        $('#btnclick').bind('click',function () {


            var btn = $(this);
            btn.find('i').removeClass('fa-square').addClass('fa-refresh fa-spin fa-3x fa-fw');

            $.ajax({
                url: "http://country.io/capital.json",

            }).done(function(response) {
                btn.find('i').removeClass('fa-refresh fa-spin fa-3x fa-fw').addClass('fa-square');
                var html = '<table><tr><th>Country</th><th>City</th></tr>'

                $.each(response,function(name,city){

                    html = html + '<tr><td>'+name+'</td><td>'+city+'</td></tr>'
                    console.log(name,city);
                });
                html = html+'</table>';

                $('#countryList').html(html);
            });

        });

    });

</script>
</body>
</html>
