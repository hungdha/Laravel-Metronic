<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu">
		<li><a href="{{ url('/user/' . Auth::user()->username .'/profile' ) }}">Profile</a></li>
		<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
	</ul>
</li>