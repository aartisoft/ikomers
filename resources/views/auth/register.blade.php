@extends('frontend.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('customers_firstname') ? ' has-error' : '' }}">
                            <label for="customers_firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="customers_firstname" type="text" class="form-control" name="customers_firstname" value="{{ old('customers_firstname') }}" required autofocus>

                                @if ($errors->has('customers_firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customers_firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('customers_lastname') ? ' has-error' : '' }}">
                                <label for="customers_lastname" class="col-md-4 control-label">Last Name</label>
    
                                <div class="col-md-6">
                                    <input id="customers_lastname" type="text" class="form-control" name="customers_lastname" value="{{ old('customers_lastname') }}" required autofocus>
    
                                    @if ($errors->has('customers_lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('customers_lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
