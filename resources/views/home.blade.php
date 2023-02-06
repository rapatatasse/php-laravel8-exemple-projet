@extends('layouts.app')

@section('content')



<img class= "W-50  img-thumbnail" src="images/femme.jpg" alt=""  style="width: 18rem;">
<h1 class="display-one mt-5">PHP Laravel Project2 - CRUD</h1>
<p>Exemple de projet pour cours</p>
<br>
<a href="products" class="btn btn-outline-primary">Show Products</a>
<a href="roles" class="btn btn-outline-primary">Show roles des user</a>
@if (Auth::user()->role->name == "Admin") 
    <a href="users" class="btn btn-outline-primary">Show all users</a>
@endif

@if (Auth::user()->isAdmin()) 
    <a href="users" class="btn btn-outline-primary">Show all users2</a>
@endif

        <p> <?php echo 'Balise php 2'; ?></p>
           <p> <?= 'Balise php 2' ?></p>
           <p> {!! 'Balise laravel 2' !!}</p>
           <p> Mon rôle : {!! Auth::user()->role->name !!}</p>
           <p> Ma varibale : {!! $mavariable !!}</p>
           <br>
            @if($mavariable == 'Jojo')         
                <li>condition vrai</li>         
            @else
                <li>condition fausse</li>     
            @endif
            <br>
         
            <?php $legumes = array('carotte','poivron','aubergine','chou'); ?>
            <p>Boucle avec varible tableau</p>
            @forelse($legumes as $product)
           
               <li> {!! $product !!}</li>
               
            @empty
                <li>pas de données</li>
            @endforelse

          
@endsection
