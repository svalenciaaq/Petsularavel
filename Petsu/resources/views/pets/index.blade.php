@extends('layouts.app')

<!-- Title -->
@section('title' , 'index')

<!-- Nav-Title -->
@section('nav-title', ' pets appointments')

@section('log')
<a class ="navbar-brand" href="{{route('logout')}}">Logout</a>
@endsection

<!-- Principal section -->
@section('content')
<a href="{{ url ('pets/create')}}" class = "btn btn-success mt-4 ml-3 mb-3">Create</a>
@if( Auth::user()->name == "admin")
<a href="{{ url ('admin')}}" class = "btn btn-success mt-4 ml-3 mb-3">Back</a>
@endif

<!--  Table register -->
<table class = "table table-striped table-bordered table-hover bg-white "  style="height:20%;">
    <thead class ="thead-dark">
        <tr>
            <th>Name</th>
            <th>Race</th>
            <th>Age</th>
            <th>Subject</th>
            <th>Owner</th>
            <th>CellPhone</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if($pets->count())  
        @foreach ($pets as $pet)
        <tr>
            <!-- Show info -->
        <td class = "align-middle">{{ $pet->name}}</td>
            <td class = "align-middle">{{ $pet->race}}</td>
            <td class = "align-middle">{{ $pet->age}}</td>
            <td class = "align-middle">{{ $pet->subject}}</td>
            <td class = "align-middle">{{ $pet->owner}}</td>
            <td class = "align-middle">{{ $pet->cellphone}}</td>
            <td class = "align-middle">{{ $pet->date}}</td>
        
            <td class = "aling-middle">

                <!-- Buttons Accions -->
                {!! link_to_route('pets.edit', $title = 'Edit', 
                $parameters = $pet->id, $attributes = ['class'=>'btn btn-primary mb-2'] ) !!}
                {!! Form::open(['method' => 'DELETE','route' => ['pets.destroy', $pet->id],]) !!}
                {!! Form::button('Delete', ['type' => 'submit', 
                'class' => 'btn btn-danger' , 'onClick' =>"return confirm('Are you sure?');"]) !!} 
                {!! Form::close() !!}
                
            </td>
        </tr>
            
        @endforeach
        @else
        <tr>
            <td colspan="8">No records available!</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection

<!-- Paginate -->
@section('paginate')
    {{ $pets->links() }}
@endsection