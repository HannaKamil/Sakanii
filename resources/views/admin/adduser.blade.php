@extends('include.adminMaster')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="direction: rtl">
                    <h1 class="page-header">اضافة مستخدم جديد</h1>

                    <form role="form" action="/addu" method="post" class="">

                        {{csrf_field()}}
                        <div class="form-group input-container">

                            {{--<span class="input-group-a">@</span>--}}

                            <input type="text" class="form-control username" placeholder="الاسم" name="name" required>
                        </div>
                        {{--<div class="w-100"></div>--}}
                        <div class="form-group input-container">
                            {{--<span class="input-group-addon">@</span>--}}
                            <input type="text" class="form-control" placeholder="اسم المستخدم" name="username" required>
                        </div>
                        <div class="form-group input-container">
                            <input type="number" class="form-control" placeholder="رقم المحمول" name="phone_number" required>
                            {{--<span class="input-group-addon">.00</span>--}}
                        </div>
                        <div class="form-group input-container">
                            <input type="email" class="form-control" placeholder="البريد الاكترونى" name="email">
                            {{--<span class="input-group-addon">.00</span>--}}


                        </div>
                        <div class="form-group input-container">
                            <input type="password" class="form-control"  name="password" placeholder="كلمة السر">
                            {{--<span class="input-group-addon">.00</span>--}}
                        </div>
                        <div class="form-group input-container">

                            <label for="" class="font-weight-bold font-italic">النوع : </label>

                            <label class="content pr-5 font-weight-bold font-italic" style="margin-right: 28px; margin-bottom: 12px">ذكر

                                <input type="radio"  name="gender" value="male" class="align-self-center radio">
                                <span class="custom-radio" style="right: -30px"></span>
                            </label>

                            <label class="content pr-5 font-weight-bold font-italic" style="margin-right: 28px; margin-bottom: 12px">انثى

                                <input type="radio" name="gender" value="female" class="align-self-center radio">
                                <span class="custom-radio" style="right: -30px"></span>
                            </label>
                            {{--<span class="input-group-addon">.00</span>--}}
                        </div>
                        <div class="form-group input-container">

                            <label for="">سجل ك</label>
                            <label class="content pr-5 font-weight-bold font-italic" style="margin-right: 28px; margin-bottom: 12px">مالك عقار

                                <input type="radio" name="role" value="2" class="align-self-center radio">
                                <span class="custom-radio" style="right: -30px"></span>
                            </label>

                            <label class="content pr-5 font-weight-bold font-italic" style="margin-right: 28px; margin-bottom: 12px">عميل

                                <input type="radio"  name="role" value="3" class="align-self-center radio">
                                <span class="custom-radio" style="right: -30px"></span>
                            </label>

                            {{--<span class="input-group-addon">.00</span>--}}
                        </div>
                        <button type="submit" class="btn input-submit">
                            اضف مستخدم
                        </button>

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