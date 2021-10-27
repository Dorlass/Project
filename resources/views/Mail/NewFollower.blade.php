<html>
    <body>
        <img src{{message->embed()}}/>
        <h3>New Follower</h3>
        <p>{{$user->name}}:{{$user->email}}</p>
    </body>
</html>