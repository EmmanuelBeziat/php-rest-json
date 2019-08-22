<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>API REST — Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body { padding-top: 5rem }
		h1 { margin-bottom: 2rem }
	</style>
</head>
<body>
	<div class="container">
		<h1>Items list</h1>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Datetime</th>
					<th>Name</th>
					<th>Web</th>
					<th>RAW</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($items as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->datetime }}</td>
					<td>{{ $item->name }}</td>
					<td><a href="/view/items/{{ $item->id }}">View Web</a></td>
					<td><a href="/api/items/{{ $item->id }}">View RAW</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>
