@extends('layouts.app')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design1.css">
</head>

<?php if(Session::has('staff_id')) {?>
    <h1 align="center">Welcome  {{ $Systemuser->U_Name }}</h1>
<div class="topnav">
   

    <a href="/Staff/categories/">Category</a>

    <a  href="/Staff/products/">Product</a>
    <a href="/Staff/showorders/">Order Details</a>
    </div>
        
        

       
<?php } 
    ?>



@endsection