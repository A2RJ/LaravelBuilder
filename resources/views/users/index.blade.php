@extends('template.index')
@section('title', 'user')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel 8 CRUD </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('user.create') }}" title="Create a data"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>name</th><th>email</th><th>ttl</th><th>password</th><th>user_image</th><th>gender</th><th>alamat</th><th>kel</th><th>kec</th><th>kab</th><th>prov</th><th>phone</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $data)
    <tr>
        <td>{{ $data->iteration }}</td>
        <th>{{$data->name}}</th><th>{{$data->email}}</th><th>{{$data->ttl}}</th><th>{{$data->password}}</th><th>{{$data->user_image}}</th><th>{{$data->gender}}</th><th>{{$data->alamat}}</th><th>{{$data->kel}}</th><th>{{$data->kec}}</th><th>{{$data->kab}}</th><th>{{$data->prov}}</th><th>{{$data->phone}}</th>
        <td>
            <form action="{{ route('user.destroy', $data->id_user) }}" method="POST">
                <a href="{{ route('user.show', $data->id_user) }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>Show
                </a>
                <a href="{{ route('user.edit', $data->id_user) }}">
                    <i class="fas fa-edit  fa-lg"></i>Edit
                </a>
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $users->links() !!}
@endsection