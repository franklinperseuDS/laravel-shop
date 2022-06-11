@extend('clientsLayout')
@section('content')

<div class="card">
    <div class="card-header">Edit Client</div>
    <div class="card-body">
        <form action="{{ url('client/'.$client->id"}} method="post">
            {!! crsf_field() !!}
            
            
            <label for="namecliente"> Nome do cliente: </label>
            <input type="text" name='namecliente'  class="form-control">

            <label for="cpf"> CPF : </label>
            <input type="text" name='cpf'  class="form-control">

            <label for="email"> email: </label>
            <input type="text" name='email' class="form-control">
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>

@endsection