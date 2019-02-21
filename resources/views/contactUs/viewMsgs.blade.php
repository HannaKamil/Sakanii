@extends('include.adminMaster')
@section('content')




    <table class=" table table-striped table-dark">
        <thead>
        <tr>
            {{--<th scope="col">#</th>--}}
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Flat Address</th>
            <th scope="col">Message</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>



        </tr>
        </thead>
        <tbody>

        @foreach($messages as $message)
            <tr>
                {{--<th scope="row">{{$message->contact_id}}</th>--}}
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->flat_address}}</td>
                <td>{{$message->message}}</td>
                <td>{{$message->created_at}}</td>
                <td>{{$message->updated_at}}</td>

                <!--frist way delete-->
                <td><button><a href="/del/{{$message->contact_id}}">Delete</a></button></td>

                <!--2nd way delete-->
            {{--<td>--}}
            {{--<form action="{{action('ContactController@destroy', $message->contact_id)}}" method="post">--}}
            {{--{{csrf_field()}}--}}
            {{--<input name="_method" type="hidden" value="DELETE">--}}
            {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
            {{--</form>--}}
            {{--</td>--}}


            <!--frist way to Edit-->
                <td><button><a href="/edit/{{$message->contact_id}}">Edit</a></button></td>
                <td><button><a href="/show/{{$message->contact_id}}">Show Message</a></button></td>

                <td><button><a href="/replay/{{$message->contact_id}}">replay</a></button></td>


            </tr>
        @endforeach


        </tbody>
    </table>








@endsection