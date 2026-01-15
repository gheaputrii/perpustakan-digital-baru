<!DOCTYPE html>
<html>
<head>
    <title>Login Perpustakaan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<body class="login-page">


<div class="container">
    <h1>Perpustakaan Digital</h1>
    <form>
        <label>Username</label>
        <input type="text" placeholder="Masukkan username">

        <label>Password</label>
        <input type="password" placeholder="Masukkan password">

        <button>Login</button>
    </form>
</div>

@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
   <!-- form login -->
</div>
@endsection


</body>
</html>
