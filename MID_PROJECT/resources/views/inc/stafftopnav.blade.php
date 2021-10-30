<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('Home')}}">Efip</a>
    </div>
    <ul class="nav navbar-nav">
<?php if(Session::has('staff_id')) {?>
 


  <li><a href="{{route('staffDash')}}" class="btn btn-dark btn-sm" role="button"> Dashboard</a></li>
 <li><a href="{{route('logout')}}" class="btn btn-dark btn-sm" role="button"> Logout</a></li>
 <li><a href="{{route('category')}}" class="btn btn-dark btn-sm" role="button"> Category</a></li>
<?php    

}

else  {?>
<li><a href="{{route('Home')}}" class="btn btn-dark btn-sm" role="button"> Home</a></li>





<div class="dropdown-divider"></div>
<a class="dropdown-item btn btn-dark btn-sm" href="{{route('Registration')}}">Sign up</a>
</div>

<li><a href="{{route('login')}}" class="btn btn-dark btn-sm" role="button"> Sign In</a></li>

<?php } ?>







</li>


</ul>
</div>
</nav>

