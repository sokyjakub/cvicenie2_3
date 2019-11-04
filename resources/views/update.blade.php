<?php
?>
<form method="post" action="{{route('user.update',$user->id)}}">
    Meno:<br>
    <input type="text" name="firstname" value="{{$user->firstname}}">
    <br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="{{$user->lastname}}">
    <br>
    Email:<br>
    <input type="text" name="Email" value="{{$user->Email}}">
    <br>
    Vek:<br>
    <input type="text" name="age" value="{{$user->age}}">
    <br>
    <br><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="Upraviť">
</form>