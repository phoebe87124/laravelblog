<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>

    <!--====================== navbar ======================-->
    <div class="header">
    <br><br>
    <div class="container" style="background-color:lightpink;height:17%;">
        <br><center><h1>－－Phoebe's BLOG－－</h1><center>
    </div>
    
    <br><br>
        <ul class="nav nav-tabs" style="bgcolor:lightpink;">
            <li class="nav-item">
                <a class="nav-link" href="admin/article">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        </div>
    </div>

    <!--====================== article ======================-->
<div class="articles" width="40%;">
    <div>
        @foreach($articles as $article)
        <div class="card" style="width: 20rem; height:93%; margin:5% 4%; box-shadow:0px 0px 10px #666666; float:left;">
            <img class="card-img-top" src="{{$article->image}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <hr width="90%;">
                <p class="card-text">{{$article->shortcontent}}</p>
                <a href="/article/{{$article->id}}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
    </body>
</html>