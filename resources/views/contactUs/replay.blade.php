{{--@extends('include.adminMaster')--}}
{{--@section('content')--}}
{{--<form action="/send" method="post">--}}

    {{--{{csrf_field()}}--}}
    {{--<label>To</label><br>--}}
    {{--<input type="email"   name="to_form" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--<label>Message</label><br>--}}
    {{--<textarea class="form-control" name="form_message" cols="60" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>--}}

    {{--<div class="text-center"><button type="submit">Send Message</button></div>--}}

{{--</form>--}}

{{--@endsection--}}





{{--copy--}}




@extends('include.adminMaster')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="direction: rtl">
                    <h1 class="page-header">الرد على الرسائل</h1>

                    <form role="form" action="/addu" method="post" class="">

                        {{csrf_field()}}

                        <div class="form-group input-container">
                            <input type="email" class="form-control" name="to_form" id="email" placeholder="البريد الاكترونى" data-rule="email" data-msg="Please enter a valid email" />
                            {{--<span class="input-group-addon">.00</span>--}}
                        </div>

                        <div class="form-group input-container">
                            <textarea class="form-control" name="form_message" cols="60" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="الرسالة"></textarea>
                            {{--<span class="input-group-addon">.00</span>--}}
                        </div>


                        <button type="submit" class="btn input-submit" style="padding: 7px 50px">ارسل</button>

                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->


        {{--copy--}}




    </div>

@endsection