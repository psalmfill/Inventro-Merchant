@extends('layouts.default')
@section('page_style')
<style>
.login-form {
    border:1px solid #f44336;
    background-color:#f44336;
    border-radius:10px;
    position:absolute;
    top:20%;
    left:5%;
    padding:4%;
    color:#fff;
}
.login-form .box-title{
    color:#fff;
    text-align:center;
    text-transform:uppercase
}
</style>
@endsection

@section('content')
        <div class="col-md-3 col-sm-12 col-md-offset-4 login-form">
                        <div class="">
                            <h3 class="box-title m-b-0">Login</h3>
                            <div class="devider"></div>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputuname">User Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                <input type="text" class="form-control" id="exampleInputuname" placeholder="Username"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpwd1">Password</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                <input type="password" class="form-control" id="exampleInputpwd1" placeholder="Enter email"> </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1"> Remember me </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block waves-effect waves-light m-r-10">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
@endsection