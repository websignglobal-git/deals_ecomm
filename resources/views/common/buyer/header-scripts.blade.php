<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta id="csrf" name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/common/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/common/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/common/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/common/owl.carousel.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Aldrich|Aleo|Athiti|Source+Sans+Pro" rel="stylesheet">
    <title>Deals of Market</title>
  </head>
  <body onload="getPaymentmthd()">