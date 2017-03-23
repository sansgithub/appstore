<h1>Welcome {{ Auth::user()->first_name }} you are logged in as <strong>Admin!</strong></h1>

<ul class="nav navbar-nav navbar-right">   
	<li><a href="{{ route('logout') }}">Logout</a></li>
</ul>