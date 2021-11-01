<head>
<link rel="stylesheet" type="text/css" href="/css/design.css">
</head>
<div class="header sticky">
<h1>Welcome to Eflip shopping</h1>
</div>
<div class="topnav">

<?php if(Session::has('staff_id')) {?>
 


 <a href="{{route('Home')}}" class="btn btn-dark btn-sm" role="button"> Home</a>
<a href="{{route('staffProfile')}}" class="btn btn-dark btn-sm" role="button"> Profile</a>
 <a href="{{route('logout')}}" class="btn btn-dark btn-sm" role="button"> Logout</a>
 <a href="{{route('staffDash')}}" class="btn btn-dark btn-sm" role="button"> Dashboard</a>
<?php    

}

else  {?>
<a href="{{route('Home')}}"> Home</a>

<a  href="{{route('Registration')}}">Sign up</a>

<a href="{{route('login')}}" > Sign In</a>

<?php } ?>
</div>
