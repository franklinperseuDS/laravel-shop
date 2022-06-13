@extends('clients.layout')
@section('content')

<div class="card">
    <div class="card-header">Create Client</div>
    <div class="card-body">
        <form action="{{ route('clients.store')}}" method="POST">
           @csrf
            
            
            <label for="namecliente"> Nome do cliente: </label>
            <input type="text" name='nomecliente'  class="form-control">

            <label for="cpf"> CPF : </label>
            <input type="text" name='cpf'  class="form-control">

            <label for="email"> email: </label>
            <input type="text" name='email' class="form-control">
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>

@endsection