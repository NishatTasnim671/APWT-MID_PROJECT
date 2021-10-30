


    <?php if(Session::has('staff_id')) {?>
    <h1>This is Staff Profile</h1>

    <img src="/images/{{ $Systemuser->U_profileimg}}" width="100px" height="100px">
        <h3>Name :   {{ $Systemuser->U_Name }}</h3>
        <h3>Phone :  {{ $Systemuser->U_phone }}</h3>
        <h3>Address :  {{ $Systemuser->U_address  }}</h3>
        <h3>Username :  {{  $Systemuser->U_username }}</h3>
        <h3>Email : {{ $Systemuser->U_email }}</h3>
        <td><a  class="btn btn-info" href="/Staff/update/{{$Systemuser->id}}/{{$Systemuser->U_username}}">Update</a></td>
        
        

       
<?php } 
    ?>