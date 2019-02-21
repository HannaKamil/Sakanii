@extends('include.adminMaster')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blank</h1>

                    <form role="form" action="/addu" method="post">
                        {{csrf_field()}}
                        <div class="form-group input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Full Name" name="name">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="form-group input-group">
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group input-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group input-group">
                            <input type="password" class="form-control"  name="password">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group input-group">
                            <input type="radio" class="form-control" name="gender" value="male"> male
                            <input type="radio" class="form-control" name="gender" value="female"> female
                            <span class="input-group-addon">.00</span>
                        </div>
                        <div class="form-group input-group">
                            <input type="radio" class="form-control" name="role" value="2"> owner
                            <input type="radio" class="form-control" name="role" value="3"> student
                            <span class="input-group-addon">.00</span>
                        </div>
                        <button type="submit" class="btn btn-register px-5 mb-0 font-weight-bold">
                            Add User
                        </button>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection