<!DOCTYPE html>
<html lang="en">
<head>
  <title>BotShop-laravel website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BotShop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="float:right";>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="/Shop">Shop</a></li>
        <li><a href="/Bucket">Bucket<span style="color:red"></span></a></li>
        <li><a href="/Profile">Profile</a></li>
        <li><a href="/Logout">Logout</a></li>  
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h2>Welcome to our Shop,Dear</h2>
  <p>Hear you collection of variaty of bottle that fall in love with them!</p> 
  
  <img src="{{URL::asset('/images/water-bottle.png')}}" alt="profile Pic" height="200" width="200">

  
  

</div>


<br><br>
<hr>

<fieldset>
            <legend>Bottle company we offer</legend>

            <div class="jumbotron text-center" style="margin-bottom:50">
  
            <marquee>
                <img src="{{URL::asset('/images/cello.png')}}" alt="" height="100" width="100">
                <b><span style="margin-right:250px";>-Cello</span></b>
                <img src="{{URL::asset('/images/bottle.png')}}" alt="" height="100" width="100">
                <b><span style="margin-right:250px";>-Milton</span></b>
                <img src="{{URL::asset('/images/b2.png')}}" alt="" height="100" width="100">
                <b><span style="margin-right:250px";>-Speedex</span></b>
                <img src="{{URL::asset('/images/tabasco.png')}}" alt="" height="100" width="100">
                <b><span style="margin-right:250px";>-Speedex</span></b>

            </marquee>    



</div>
</fieldset>
         



