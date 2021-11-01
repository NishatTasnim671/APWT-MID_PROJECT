<head>
<link rel="stylesheet" type="text/css" href="/css/design.css">
</head>
<div class="header sticky">
      <a  href="{{route('Home')}}">Efip</a>
</div>
<div class="topnav">
    
<?php if(Session::has('staff_id')) {?>
 


    <a href="{{route('staffDash')}}" class="btn btn-dark btn-sm" role="button"> Dashboard</a>
 <a href="{{route('logout')}}" class="btn btn-dark btn-sm" role="button"> Logout</a>
 <a href="{{route('product')}}" class="btn btn-dark btn-sm" role="button"> Product</a>
<?php    

}

else  {?>
<a href="{{route('Home')}}" class="btn btn-dark btn-sm" role="button"> Home</a>






<a  href="{{route('Registration')}}">Sign up</a>


<a href="{{route('login')}}" > Sign In</a>

<?php } ?>
</div>
