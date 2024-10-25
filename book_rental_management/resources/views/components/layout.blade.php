
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Book Rental Management App</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Book Rental</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

          <li class="sidebar-item {{ Route::is('books.index')? 'active' : '' }} {{ Route::is('books.index')? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('books.index') }}">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Book</span>
            </a>
					</li>

					<li class="sidebar-item {{ Route::is('customers.index')? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('customers.index') }}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Customer</span>
            </a>
					</li>

					<li class="sidebar-item {{ Route::is('customers.frequent')? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('customers.frequent') }}">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Frequent Customers</span>
            </a>
					</li>

          <li class="sidebar-item {{ Route::is('rents.index')? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('rents.index') }}">
              <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Rental</span>
            </a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header d-flex justify-content-between">
									{{ $title }}
								</div>
								<div class="card-body">
                  {{ $slot }}
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>&copy; Copyright 2024 - Book Rental Management</strong></a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	@include('sweetalert::alert')

	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
	<script>
		let table = new DataTable('#dataTable', {
			scrollX: true
		});
	</script>
</body>
</html>