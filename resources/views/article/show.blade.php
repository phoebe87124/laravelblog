<html>
    <head>
        <meta charset="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">

        </div>

        <div class="main">
            <center><div class="articlebox" style="margin:5%;"><center>
            <h5>{{$article->title}}</h5>
            <h6>Time:{{$article->created_at}}</h6>
            <hr style="width:90%; height:1px;">
            <br>
            <center><img src="{{$article->image}}" alt=""><center>
            <br>
                <div class="articlecontent">
                    {{$article->content}}
                </div>
            </div>

            <button type="button" class="btn btn-outline-secondary" style="margin:-2% 0px 5%;"><a href="/">Back to HOME</a></button>
        </div>


    </body>

</html>