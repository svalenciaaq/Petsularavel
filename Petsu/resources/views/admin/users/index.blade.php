@extends('layouts.app')

@section('log')
<a class ="navbar-brand" href="{{route('logout')}}">Logout</a>
@endsection

<!-- Principal section -->
@section('content')
<a href="{{ url ('admin/users/create')}}" class = "btn btn-success mt-4 ml-3 mb-3">Create</a>
<a href="{{ url ('admin')}}" class = "btn btn-success mt-4 ml-3 mb-3">Back</a>

<!--  Table register -->
<table class = "table table-striped table-bordered table-hover bg-white "  style="height:20%;">
    <thead class ="thead-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if($users->count())  
        @foreach ($users as $user)
        <tr>
            <!-- Show info -->
        <td class = "align-middle">{{ $user->name}}</td>
            <td class = "align-middle">{{ $user->email}}</td>
        
            <td class = "aling-middle">
                <!-- Buttons Accions -->
                {!! link_to_route('users.edit', $title = 'Edit', $parameters = $user->id,
                 $attributes = ['class'=>'btn btn-primary mb-2'] ) !!}
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],]) !!}
                {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger' ,
                 'onClick' =>"return confirm('Are you sure?');"]) !!} 
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
    {{ $users->links() }}
@endsection