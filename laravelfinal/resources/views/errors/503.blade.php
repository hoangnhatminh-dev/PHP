<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: black;
                display: table;
                font-weight: bold;
                font-size: 30px;
                line-height: 35px;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            table{
                width: 100%;
            }
            th{
                background-color: #1f648b;
                color: white;
                font-size: 20px;
                line-height: 25px;
                font-weight: bold;
                border: solid 1px black;
            }

            .product-test{
                color: black;
                font-size: 25px;
                line-height: 30px;
                border: solid 1px black;

            }

            button{
                margin: 15px 15px;
                padding: 5px;
                border-radius: 10px;
                color: white;
                background-color: #1f648b;
            }

            button:hover{
                cursor: pointer;
            }

            .method{
                width: 30%;
                float: left;
                /*border: solid 1px black;*/
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @if(count($errors)>0)
{{--                    danh sach loi--}}
                    <div class = "alert alert-danger">
                        <strong>Error!</strong>
                        <br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
            </div>
        </div>
    </body>
</html>
