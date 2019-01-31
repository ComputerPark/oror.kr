<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--
			<meta name="description" content="">
			-->

	<?php include '../res/php/fav.php' ?>

	<title>프로젝트 - 컴터박's Website</title>

	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../res/css/projects.css" rel="stylesheet">
</head>
<body>
<header>
	<!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #448AFF !important;">
		<ul style="margin-bottom: 0 !important; list-style:none; padding-left:0 !important;">
			<li style="list-style:none; padding-left:0">
				<a class="navbar-brand" href="https://oror.kr" style="margin-right: 0.2rem">컴터박</a>
				<a class="navbar-brand" href="https://api.oror.kr">API</a>
			</li>
		</ul>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="https://oror.kr">Home</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="https://api.oror.kr">Status<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">APIs</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="https://ara.api.oror.kr">Ara</a>
						<a class="dropdown-item" href="#">Coming Soon</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a class="btn btn-outline-light" href="https://github.com/Computerpark" role="button">Github</a>
			</form>
		</div>
	</nav>
</header>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Album example</h1>
			<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc.
				Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
			<p>
				<a href="#" class="btn btn-primary my-2">Main call to action</a>
				<a href="#" class="btn btn-secondary my-2">Secondary action</a>
			</p>
		</div>
	</section>

	<div class="album py-5 bg-light">
		<div class="container">

			<div class="row">
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card mb-4 shadow-sm">
						{% include icons/placeholder.svg width="100%" height="225" background="#55595c" color="#eceeef"
						class="card-img-top" text="Thumbnail" %}
						<div class="card-body">
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
								content. This content is a little bit longer.</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
									<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
								</div>
								<small class="text-muted">9 mins</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

<footer class="text-muted">
	<div class="container">
		<p class="float-right">
			<a href="#">Back to top</a>
		</p>
		<p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
		<p>New to Bootstrap? <a href="{{ site.url }}">Visit the homepage</a> or read our <a
				href="{{ site.baseurl }}/docs/{{ site.docs_version }}/getting-started/introduction/">getting started guide</a>.
		</p>
	</div>
</footer>
<?php include '../res/php/analytics.php' ?>
</body>
</html>