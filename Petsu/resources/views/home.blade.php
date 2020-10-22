@extends('layouts.app')

<!-- Title -->
@section('title' , 'Home')

<!-- Nav-Title -->
@section('nav-title', 'Petsu')


@section('content')
    
   <!-- Section: Features v.2 -->
   <section class="my-5 bg-white borderer">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Petsu</h2>
    <!-- Section description -->
    <p class="lead grey-text text-center w-responsive mx-auto mb-5">
      Application with authentication by roles, where there are two roles, one admin and one salesman.<br>
      The role admin allows us to perform raw users and also raw quotes, the role seller <br>
      allows us to create only raw quotes, the application is made 100% in laravel, using <br>
      several of its utilities such as its authentication module, its middleware, its blade templates
      to give it a view, where it also uses jquery for validation on the front, and Request for <br>
      validations in the back end.


    </p>
  
      </div>
    </section>
  
@endsection