@extends('main')

@section('title', 'Admin Login')

@section('content')
<div class="container" style="margin-top: 165px;">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">Email</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <input type="checkbox" name="remember" style="padding-right: 20px;">
                                    <label style="font-size: 0.8em;">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success col-md-12">
                            Login
                        </button>
                        <!-- <a class="btn btn-link" href="{{ url('/admin/password/reset') }}" style="font-size: 0.6em;">Forgot password</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
