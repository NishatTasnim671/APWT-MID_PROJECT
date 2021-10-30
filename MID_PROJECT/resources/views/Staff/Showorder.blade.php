@extends('layouts.proapp')
@section('content')


    <?php if(Session::has('staff_id')) {?>
    <h1>New Orders</h1>
    <table class="table" border='1'>
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
    <?php } 
    ?>
    @endsection