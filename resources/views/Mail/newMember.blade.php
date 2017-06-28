<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p>Hi,</p>
<p>
<h3>{{$member->first_name}} {{$member->middle_name}} {{$member->last_name}}</h3>
    has just signed up for unzabeca membership.
<a href="{{url('/members/viewMembers')}}">click here to approve!</a>

</p>

</body>
</html>
