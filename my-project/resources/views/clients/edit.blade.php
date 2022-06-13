@extends('clients.layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Client</div>
    <div class="card-body">
        <form action="{{ route('clients.update',$clients->id)}}" method="post">
            @csrf
            @method('PUT')
           
            {{-- <input type="hidden" name='id' id='id' value='{{$clients->id}}'/>  --}}
            <label for="nomecliente"> Nome do cliente: </label>
            <input type="text" name='nomecliente' value="{{$clients->nomecliente}}" class="form-control">

            <label for="cpf"> CPF : </label>
            <input type="text" name='cpf' value="{{$clients->cpf}}" class="form-control">

            <label for="email"> email: </label>
            <input type="text" name='email' value="{{$clients->email}}" class="form-control">
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div>
</div>

@endsection