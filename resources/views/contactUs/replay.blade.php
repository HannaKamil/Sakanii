{{--@extends('include.adminMaster')--}}
{{--@section('content')--}}
<form action="/send" method="post">

    {{csrf_field()}}
    <label>To</label><br>
    <input type="email"   name="to_form" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
    <br>
    <br>
    <label>Message</label><br>
    <textarea class="form-control" name="form_message" cols="60" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>

    <div class="text-center"><button type="submit">Send Message</button></div>

</form>

{{--@endsection--}}

