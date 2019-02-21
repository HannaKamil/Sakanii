



<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Message</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>View Message</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Flat addreess</th>
            <th>Message</th>
            <th>Created At</th>
            <th>Updated At</th>

        </tr>
        </thead>
        @foreach($messages as $message)
        <tbody>
        <tr>
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->flat_address}}</td>
            <td>{{$message->message}}</td>
            <td>{{$message->created_at}}</td>
            <td>{{$message->updated_at}}</td>
            <!--frist way delete-->
            <td><button><a href="/del/{{$message->contact_id}}">Delete</a></button></td>

            {{--//replay--}}
            <td><button><a href="/replay/{{$message->contact_id}}">replay</a></button></td>
        </tr>
        </tbody>
        @endforeach
    </table>
</div>

</body>
</html>
