@extends('layouts.app')

@section('title', 'User registration')

@section('nav-title' , 'User registration')

@section('log')

<a class ="navbar-brand" href="{{route('logout')}}">Logout</a>
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
 {{ Auth::user()->name }} <span class="caret"></span>
</a>

@endsection

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
        {!! Form::model($users,['route' => ['users.update' , $users->id] , 'method' => 'PUT',
         'class' =>'panel' , 'id'=> 'form-users'])!!}
   
   <!-- Name -->
    <div class="form-group">
      <div class="row">
        <div class ="col"> 
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control ' , 'placeholder' => 'Nombre' ]) !!}
        </div>
      </div>
    </div>
    
   <!--  Email -->
   <div class="form-group">
    <div class="row">
      <div class ="col"> 
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control' , 'placeholder' => 'Email']) !!} 
     </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class ="col">
        {!! Form::label('email', 'Email') !!} 
        {!! Form::select('rol_id', ['1' => 'Administrator', '2' => 'Seller' ], 
        null, ['class'=> 'form-control','placeholder' => 'choose a role'] , ) !!}
      </div>
    </div>
  </div>
    
   <!--  password -->
   <div class="form-group">
   <div class="row">
    <div class ="col"> 
   {!! Form::label('password', 'Password') !!}
   {!! Form::password('password', null, ['class' => 'form-control' , 'placeholder' => 'Password']) !!}
     </div>
    </div>
  </div>

  <div class="form-group">
   <div class="row">
    <div class ="col"> 
   {!! Form::label('password', 'Password') !!}
   {!! Form::password('password_confirmation', null, ['class' => 'form-control' , 'placeholder' => 'Password']) !!}
     </div>
    </div>
  </div>
  
   <!-- Button -->
   <div class="row">
    <div class="col text-center">
        {!! Form::submit('Send', ['class' => 'btn btn-success btn-sm mb-4 center ' , 'id' => 'btn-send']) !!}
        {!! Form::close() !!}
        <a href="{{ route('users.index') }}" class="btn btn-success btn-sm mb-4 center" >Atrás</a>
    </div>
  </div>
     </div>
  </div>
@endsection


@section('validate')
{!! Html::script('assets/js/validateUsers.js') !!}
@endsection