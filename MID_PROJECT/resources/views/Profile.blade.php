
<head>
<link rel="stylesheet" type="text/css" href="/css/profiledesign.css">
</head>
<div class="header sticky">

    <?php if(Session::has('staff_id')) {?>
    <h1>This is Staff Profile</h1>
    </div>
    <fieldset>
        <legend>Information</legend>
    <img src="/images/{{ $Systemuser->U_profileimg}}" width="80px" height="220px">
    
        <h1 align="center">Name :   {{ $Systemuser->U_Name }}</h1>
        <h3 align="center">Phone :  {{ $Systemuser->U_phone }}</h3>
        <h3 align="center">Address :  {{ $Systemuser->U_address  }}</h3>
        <h3 align="center">Username :  {{  $Systemuser->U_username }}</h3>
        <h3 align="center">Email : {{ $Systemuser->U_email }}</h3>
        <div class="button">
       <a   href="/Staff/update/{{$Systemuser->id}}/{{$Systemuser->U_username}}">Update</a>
    </div>
        
    </fieldset>
       
<?php } 
    ?>