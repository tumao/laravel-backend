@extends('main');

@section('content')
<script src='/app/user-login.js'></script>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>欢迎登陆</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box" style="width:500px;">
            <div class="alert alert-warning">
                请正确填写用户名和密码.
            </div>
            <!-- <form class="form-horizontal" action="index.html" method="post"> -->
            <fieldset>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                    <input id='username' type="text" class="form-control" placeholder="用户名">
                </div>
                <div class="clearfix"></div><br>

                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                    <input id='password' type="password" class="form-control" placeholder="密码">
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend">
                    <label class="remember" for="remember"><input type="checkbox" id="remember"> 记住密码</label>
                </div>
                <div class="clearfix"></div>

                <p class="center col-md-5">
                    <button type="submit" class="btn btn-primary" onclick='userlogin()'>登录</button>
                </p>
            </fieldset>
            <!-- </form> -->
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->
@stop