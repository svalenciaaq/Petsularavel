@extends('layouts.app')

<!-- Title -->
@section('title' , 'login')

<!-- Nav-Title -->
@section('nav-title', 'Login')


@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-sm-4 offset-md-4">     
   {!! Form::open(['route' => 'login-post' , 'method' => 'POST', 'class' =>'panel' , 'id'=> 'form-login'])!!}

   <span class="mx-auto text-center">
    <h2 class="display-5">Login</h2>
    </span> 

   <!--  Email -->
   <div class="form-group">
    <div class="row">
      <div class ="col"> 
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control' , 'placeholder' => 'Email']) !!} 
     </div>
    </div>
  </div>
    
   <!--  Tel -->
   <div class="form-group">
   <div class="row">
    <div class ="col"> 
   {!! Form::label('password', 'Password') !!}
   {!! Form::password('password', null, ['class' => 'form-control' , 'placeholder' => 'Password' ]) !!}
     </div>
    </div>
  </div>
   
   <!-- Button -->
   <div class="row">
    <div class="col text-center">
        {!! Form::submit('Enviar', ['class' => 'btn btn-success btn-sm mb-4 center btn-block ' , 'id' => 'btn-send']) !!}
        {!! Form::close() !!}
    </div>
  </div>
     </div>
  </div>
@endsection

@section('validate')
{!! Html::script('assets/js/validate.js') !!}
@endsection