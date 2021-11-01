@extends('layouts.proapp')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="/css/design1.css">
</head>
<div class="header1">

    <?php if(Session::has('staff_id')) {?>
    <h1>New Orders</h1>
    </div>
    <fieldset>
        <legend>All Orders</legend>
    <table class="table">
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Customer</th>
              <th>Total Price</th>
              <th>Payment type</th>
              <th>Status</th>
             
              
            </tr>    
        </thead>
        @foreach($Myorder as $item)
        <tr>
        <td>{{$item->O_id}}</td>
        <td>{{$item->U_username}}</td>
            
            <td>{{$item->P_tprice}}</td>
            <td>{{$item->Paymanttype}}</td>
            <td>{{$item->O_status=='0' ? 'pending':'completed'}}</td>
            
    </tr>
    
        
    @endforeach
        <tbody>
    </tbody>
    </table>
    </fieldset>
    <?php } 
    ?>
    @endsection