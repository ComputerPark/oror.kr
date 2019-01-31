<!-- navbar -->
<header class="masthead mb-auto">
	<div class="inner">
		<h3 class="masthead-brand"><a href="https://oror.kr/" class="noul">컴터박's Website</a></h3>
		<nav class="nav nav-masthead justify-content-center">
			<a class="nav-link nav-firstitem<?php echo ($highlight == 'Home') ? ' active': ''; ?>" href="/">Home</a>
			<a class="nav-link<?php echo ($highlight == 'About') ? ' active': ''; ?>" href="/about">About</a>
			<ul style="padding: 0 !important; margin:0 !important; list-style: none !important">
				<li class="nav-item dropdown" style="margin-left: 1rem">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Adios2019 - 새해 카운터</a>
						<a class="dropdown-item" href="#">수능 카운터</a>
						<a class="dropdown-item" href="#">OpenRand - 자리바꾸기</a>
						<a class="dropdown-item" href="#">아라봇 프로젝트</a>
						<a class="dropdown-item" href="#">2018_Semicolon (서부정보)</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="https://api.oror.kr">API 콘솔</a>
						<a class="dropdown-item" href="/projects">모든 프로젝트 보기</a>
					</div>
				</li>
			</ul>
			<a class="nav-link<?php echo ($highlight == 'Contact') ? ' active': ''; ?>" href="/contact" style="margin-left: 1rem">Contact</a>
			<a class="nav-link" href="https://github.com/computerpark">Github</a>
		</nav>
	</div>
</header>