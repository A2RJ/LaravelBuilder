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
            Tambah
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
        <th>name</th><th>email</th><th>password</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <th>{{$data->name}}</th><th>{{$data->email}}</th><th>{{$data->password}}</th>
        <td>
            <a href="{{ route('user.show', $data) }}" title="show">
                <i class="fas fa-eye text-success  fa-lg"></i>Show
            </a>
            <a href="{{ route('user.edit', $data) }}">
                <i class="fas fa-edit  fa-lg"></i>Edit
            </a>
            <form action="{{ route('user.destroy', $data) }}" method="POST">
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