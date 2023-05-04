<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Six Sigma Pvt. Ltd.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/style.css');}}">
</head>
<body>
<header>
    <div class="header">
        <div class="left">
            <i class="fa fa-home"></i>
            <h3>Dashboard</h3>
        </div>
        <div class="right">
            <i class="fa fa-sign-out"></i>            
        </div>
    </div>
</header>
<aside>
    <div class="aside-items">
        <ul>
            <a href="{{ route('index2') }}" ><li>Users</li></a><br><br>
            <a href="{{ route('index1')}}" ><li>Categories</li></a><br><br>
            <a href="{{ route('index')}}" ><li>Blogs</li></a>
        </ul>
    </div>
</aside>
<main class="main">
    @yield('front-section')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>