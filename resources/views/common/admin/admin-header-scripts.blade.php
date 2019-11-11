<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta id="csrf" name="csrf-token" content="{{ csrf_token() }}">
		<title>Dashboard</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/admin/admin-template.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/admin/products.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/widgEditor.css">
	</head>
	<body onload="getProductsData()">
