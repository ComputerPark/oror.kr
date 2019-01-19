<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="컴터박의 웹사이트에 오신 것을 환영합니다. 이곳에서 저에 대해 알아가고 Github와 API 등을 방문하세요.">
	<?php
		$highlight = 'Home';
		include 'fav.php'
	?>

	<title>컴터박 - 컴맹이 해커가 되기까지</title>

	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this website -->
	<link href="res/css/cover.css" rel="stylesheet">
</head>
<body class="text-center">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<?php include 'navbar.php' ?>
		<main class="inner cover">
			<img class="logo" src="res/img/logo.png" alt="oror.kr 로고">
			<h1 class="cover-heading">컴맹이 해커가 되기까지</h1>
			<p class="lead">안녕하세요! 개발하는 중학생, 컴터박입니다. 저의 개인 웹사이트에 오신 것을 환영합니다. 이곳에서 저에 대해 알아가고 연락할 수 있습니다. API 서비스와 Github 계정 많이 방문해 주세요!</p>
			<p class="lead">
				<a href="/about" class="noul btn" style="border-radius: 10em; border: 2px solid #fff !important; font-size: 1.2rem; font-weight: 400">About Me</a>
			</p>
		</main>
		<?php include 'footer.php' ?>
	</div>

	<!-- Font Awsome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!--jquery, popper.js, bootstrapjs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
