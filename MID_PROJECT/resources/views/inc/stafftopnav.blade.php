<head>
<link rel="stylesheet" type="text/css" href="/css/design.css">
</head>
<div class="header sticky">
<h1>Welcome to Eflip shopping</h1>
</div>
<div class="topnav">
<?php if(Session::has('staff_id')) {?>
 


  <a href="{{route('staffDash')}}" > Dashboard</a>
 <a href="{{route('logout')}}" > Logout</a>
 <a href="{{route('category')}}" > Category</a>
<?php    

}

else  {?>
<a href="{{route('Home')}}" > Home</a>






<a  href="{{route('Registration')}}">Sign up</a>
</div>

<a href="{{route('login')}}" > Sign In</a>

<?php } ?>

</div>

