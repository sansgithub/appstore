@include('includes.header')
@include('includes.message-block')
<div class="row">
<div class="col-md-4 col-md-offset-4">
<h3>Sign Up</h3>
<form action="{{ route('signup-attempt') }}" method="post">
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="email">Your E-Mail</label>
        <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
    </div>
    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
        <label for="first_name">Your First Name</label>
        <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
    </div>
    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
        <label for="last_name">Your Last Name</label>
        <input class="form-control" type="text" name="last_name" id="last_name" value="{{ Request::old('last_name') }}">
    </div>  
    <div class="form-group {{ $errors->has('user_type') ? 'has-error' : '' }}">
        <label for="user_type">Select User Type:</label>
        <select class="form-control" id="user_type" name="user_type">
            <option value="user">User</option>          
            <option value="mod">Mod</option>
        </select>
    </div>
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="password">Your Password</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
    <div class="form-group {{ $errors->has('password_re') ? 'has-error' : '' }}">
        <label for="password_re">Renter your Password</label>
        <input class="form-control" type="password" name="password_re" id="password_re">
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
    <input type="hidden" name="_token" value="{{ Session::token() }}">
</form>
</div>
</div>
@include('includes.footer')
