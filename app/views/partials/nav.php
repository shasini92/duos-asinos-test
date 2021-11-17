<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
	<div class="collapse navbar-collapse text-light">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link text-white" href="/">Home</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			<?php if (!isset($_SESSION['name'])) { ?>
				<li class="nav-item ">
					<a class="nav-link text-white" href="/login">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="/register">Register</a>
				</li>
			<?php } else { ?>
				<li class="nav-item">
					<a class="nav-link text-white" href="/logout">Logout</a>
				</li>
			<?php } ?>
		</ul>
	</div>
</nav>