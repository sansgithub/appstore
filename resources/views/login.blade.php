@include('includes.header')
@include('includes.message-block')
<div class="row">
<div class="col-md-4 col-md-offset-4 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-4">      
    <h3>Log In</h3>
    <form action="{{ route('attempt') }}" method="post">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Your E-Mail</label>
            <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password">Your Password</label>
            <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
</div>
</div>
@include('includes.footer')