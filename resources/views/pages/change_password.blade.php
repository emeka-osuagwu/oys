
@extends('auth_master')

@section('title', 'Login')

@section('content')

<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img"> 
            <div class="bg-overlay"></div>
            <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Oysterng</strong> </h3>
        </div> 


        <div class="panel-body">
        <form class="form-horizontal m-t-20" action="{{ Url('password/reset') }}" method="post">
            
            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="text" name="email" readonly value="{{$email}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="password" name="password" required="" placeholder="Password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control input-lg" type="password" name="password" required="" placeholder="Re Password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>
                    
                </div>
            </div>
            
            <div class="form-group text-center m-t-40">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Change Passsword</button>
                </div>
            </div>

        </form> 
        </div>                                 
        
    </div>
</div>

@endsection
