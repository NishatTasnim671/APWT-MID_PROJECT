@extends('layouts.app')
@section('content')


    <?php if(Session::has('staff_id')) {?>
    <h1>Welcome  {{ $Systemuser->U_Name }}</h1>

    <a  class="btn btn-info" href="/Staff/categories/">Category</a>
    <a  class="btn btn-info" href="/Staff/products/">Product</a>
    <a  class="btn btn-info" href="/Staff/showorders/">Order Details</a>
    
        
        

       
<?php } 
    ?>



@endsection