@extends('layouts.app')


@section('title', 'Edit Appoinmets')

@section('nav-title' , 'Edit Appoinmets')


@section('log')
<a class ="navbar-brand" href="{{route('logout')}}">Logout</a>
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
   {!! Form::model($pet,['route' => ['pets.update' , $pet->id] , 'method' => 'PUT', 
   'class' =>'panel' , 'id'=> 'form-client'])!!}
   
  <!-- Name -->
  <div class="form-group">
    <div class="row">
      <div class ="col"> 
          {!! Form::label('name', 'Nombre') !!}
          {!! Form::text('name', null, ['class' => 'form-control ' , 'placeholder' => 'Nombre' ]) !!}
      </div>
    </div>
  </div>
  

 <!--  Dni -->
 <div class="form-group">
  <div class="row">
    <div class ="col"> 
      {!! Form::label('race', 'Raza') !!}
      {!! Form::text('race', null, ['class' => 'form-control' , 'placeholder' => 'Raza']) !!} 
   </div>
  </div>
</div>
  
 <!--  Tel -->
 <div class="form-group">
 <div class="row">
  <div class ="col"> 
 {!! Form::label('age', 'Age') !!}
 {!! Form::text('age', null, ['class' => 'form-control' , 'placeholder' => 'Age' ]) !!}
   </div>
  </div>
</div>

 <!--  Date -->
 <div class="form-group">
 <div class="row">
  <div class ="col"> 
 {!! Form::label('subject', 'Subject') !!}
 {!! Form::text('subject', null, ['class' => 'form-control' , 'placeholder' => 'Subject']) !!}
   </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
   <div class ="col"> 
  {!! Form::label('owner', 'Owner') !!}
  {!! Form::text('owner', null, ['class' => 'form-control' , 'placeholder' => 'Owner']) !!}
    </div>
   </div>
 </div>

 <div class="form-group">
  <div class="row">
   <div class ="col"> 
  {!! Form::label('cellphone', 'CellPhone') !!}
  {!! Form::text('cellphone', null, ['class' => 'form-control' , 'placeholder' => 'CellPhone']) !!}
    </div>
   </div>
 </div>


 <div class="form-group">
  <div class="row">
   <div class ="col"> 
  {!! Form::label('date', 'Date') !!}
  {!! Form::date('date', null, ['class' => 'form-control' , 'placeholder' => 'Date']) !!}
    </div>
   </div>
 </div>


 <!-- Button -->
 <div class="row">
  <div class="col text-center">
      {!! Form::submit('Enviar', ['class' => 'btn btn-success btn-sm mb-4 center ' , 'id' => 'btn-send']) !!}
      {!! Form::close() !!}
      <a href="{{ route('pets.index') }}" class="btn btn-success btn-sm mb-4 center" >Atrás</a>
  </div>
</div>
   </div>
</div>
   
@endsection

@section('validate')
{!! Html::script('assets/js/validate.js') !!}
@endsection