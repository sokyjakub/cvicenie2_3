<?php
?>
<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{$user->firstname}} {{$user->lastname}}
            </td>
            <td>
                {{$user->Email}}
            </td>
            <td>
                {{$user->age}}
            </td>
            <td>
                <a href="{{route('user.edit',$user->id)}}">editovať</a>
            </td>
            <td>
                <a href="{{route('user.delete',$user->id)}}">zmazať</a>
            </td>
        </tr>
    @endforeach
</table>
<div>
    <a href="{{route('user.add',$user->id)}}">Pridaj užívateľa</a>
</div>