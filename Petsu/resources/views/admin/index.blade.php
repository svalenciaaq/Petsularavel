@extends('layouts.app')

<!-- Title -->
@section('title' , 'Admin')

<!-- Nav-Title -->
@section('nav-title', 'Administration panel')


@section('content')
    <!-- Section: Features v.2 -->
<section class="my-5 bg-white borderer">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Petsu</h2>
    <!-- Section description -->
    <p class="lead grey-text text-center w-responsive mx-auto mb-5">
      This administration panel allows the total control of the application from all the resources
       that have to do with the users, as well as the management of the pets' appointments
    </p>
  
    <!-- Grid row -->
    <div class="row">
  
      <!-- Grid column -->
      <div class="col-md-4 mb-md-3 mb-5">
  
        <!-- Grid row -->
        <div class="row">
  
          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2 ">
            <i class="fas fa-bullhorn blue-text fa-2x"></i>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col col-md-offset-5 ">
            <h4 class="font-weight-bold">Users</h4>
            <p class="grey-text">this section allows the total control of the users from creating new users,
               editing and deleting them, as well as the possibility of visualizing each one of the users</p>
            <a   href="{{ route('users.index') }}" class="btn btn-primary btn-sm">users</a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->
  
      </div>
      <!-- Grid column -->
  
      <!-- Grid column -->
      <div class="col-md-4 mb-md- mb-5">
  
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10 mx-auto">
            <h4 class="font-weight-bold">Pets' Appoiments</h4>
            <p class="grey-text">This section allows full control of the pets' appointments,
               such as creating new appointments, editing and deleting these appointments, 
               and viewing each of the appointments that have been created</p>
            <a   href="{{ route('pets.index') }}"class="btn btn-primary btn-sm">
                appointments
            </a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->

        
  
      </div>
      <!-- Grid column -->
  

      <div class="col-md-4 mb-md- mb-5">
  
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10 mx-auto">
            <h4 class="font-weight-bold">soon</h4>
            <p class="grey-text">
              A section for functions that will be added in the future, 
              such as a data and statistics visualization dashboard
            </p>
        <a  class="btn btn-primary btn-sm" >
                Soon
            </a>
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row -->

        
  
      </div>

  
  </section>
  <!-- Section: Features v.2 -->
@endsection