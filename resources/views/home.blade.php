@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">PHP Laravel Project - CRUD</h1>
                <p>Projet laravel 8</p>
                <p>Créer par Jonathan Chaffanjon entreprise Platon formation</p>
                <img class="image" src="images/logo-platon-linkdigit.png" alt="Image">
                <br>
                <a href="products" class="btn btn-outline-primary">Show Products</a>
                <a href="roles" class="btn btn-outline-primary">Show roles des user</a>
                <a href="users" class="btn btn-outline-primary">Show all users</a>
            </div>
        </div>
    </div>


</div>

@endsection
