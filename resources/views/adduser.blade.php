<?php
?>
<form method="post" action="{{action('UserController@insertAction')}}">
    Meno:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="Mouse">
    <br>
    Email:<br>
    <input type="text" name="Email" value="@">
    <br>
    Vek:<br>
    <input type="text" name="age" value="40">
    <br>
    <br><br>
    <input type="submit" name="submit" value="Odoslat">

    {{ csrf_field() }}
</form>