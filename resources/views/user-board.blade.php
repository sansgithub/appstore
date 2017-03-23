<h1>Welcome {{ Auth::user()->first_name }} you are logged in as <strong>User</strong></h1>

<ul class="nav navbar-nav navbar-right">   
	<li><a href="{{ route('logout') }}">Logout</a></li>
</ul>
{{--<div class="row">
	<div class="col-md-4 col-md-offset-4">
		
            <header><h3>Upload App</h3></header>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="first_name">
                </div>
                <div class="form-group">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
       
	</div>
</div>--}}