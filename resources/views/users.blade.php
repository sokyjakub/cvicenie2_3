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
                <a href="{{route('edit.user',$user->id)}}">editovať</a>
            </td>
        </tr>
    @endforeach
</table>