<!-- navbar -->
<header class="masthead mb-auto">
	<div class="inner">
		<h3 class="masthead-brand"><a href="https://oror.kr/" class="noul">컴터박's Website</a></h3>
		<nav class="nav nav-masthead justify-content-center">
			<a class="nav-link<?php echo ($highlight == 'Home') ? ' active': ''; ?>" href="/">Home</a>
			<a class="nav-link<?php echo ($highlight == 'About') ? ' active': ''; ?>" href="/about">About</a>
			<ul style="padding: 0 !important; margin:0 !important; list-style: none !important">
				<li class="nav-item dropdown" style="margin-left: 1rem">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="https://api.oror.kr">API</a>
						<a class="dropdown-item" href="https://cloud.oror.kr">Cloud</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="https://home.oror.kr">Home Server</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="https://adios.oror.kr">새해 카운터 - Adios2018</a>
					</div>
				</li>
			</ul>
			<a class="nav-link<?php echo ($highlight == 'Contact') ? ' active': ''; ?>" href="/contact" style="margin-left: 1rem">Contact</a>
			<a class="nav-link" href="https://github.com/computerpark">Github</a>
		</nav>
	</div>
</header>