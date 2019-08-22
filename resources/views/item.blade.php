<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>API REST — Item {{ $id }}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body { padding-top: 5rem }
		h1 { margin-bottom: 2rem }
	</style>
</head>
<body>
	<div class="container">
		<div class="well">
			<h1>Data {{ $id }}</h1>

			<table class="table">
				<thead>
					<tr>
						<th>Property</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>ID</th>
						<td><code>{{ $item->id }}</code></td>
					</tr>
					<tr>
						<th>datetime</th>
						<td><code>{{ $item->datetime }}</code></td>
					</tr>
					<tr>
						<th>name</th>
						<td><code>{{ $item->name }}</code></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
