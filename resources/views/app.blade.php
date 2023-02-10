<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel with Inertia</title>
        <link href="/resources/css/tailwind.css" rel="stylesheet">
		@vite
	</head>
	<body class="antialiased">
    <section class="px-8">
		@inertia
    </section>
	</body>
</html>
