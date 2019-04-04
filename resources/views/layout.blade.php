<!DOCTYPE html >
<head>
	
<title>tasks</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body style="background-image: url('https://wallpapercave.com/wp/7wIhmgY.jpg'); background-size: cover;">
	
	<div class="container" style="margin-top: 20px " >
	<div class="navbar" style= "border-style: groove; border-color: #337ab7; s border-width: 3px;margin-top: 5px" >
		<a class="navbar-brand" href="/task " >Task Manager</a>
		<div style="width: 100%">
		<ul class="nav navbar-nav" style="margin-left: 700px">
			<li class="active">
				<a href="/task">Tasks</a>

			</li>

			<li>
				<a href="/task/create">Create Task</a>

			</li>
			
<li>
				<a href="{{route('about')}}">About Us</a>

			</li>
			

		</ul>
		</div>

	</div>

	@yield('content')
</div>
</body>