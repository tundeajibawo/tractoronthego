@extends('layouts.app')


@section('content')
<div class="container home_" style="margin:auto; ">
        <div class="animate-switch">
            <div class="row">
        <div class="col-md-5 col-md-offset-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Enter your email bellow to retrieve your account</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ ('/reset_password_without_token') }}">
                        {{ csrf_field() }}
                        <div class="home_btns_wrap">
                        <div class="home_btns_bottom text-center">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Enter E-Mail Address" class="form-control input-md type_of_house location_box" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="form-control input-lg btn-success">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
