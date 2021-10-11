@extends('layouts.app')
@section('title', 'Users')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Edit Product</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('Users.index') }}" title="Go back">Go back <i class="fas fa-backward "></i> </a>
    </div>
  </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('Users.update', $users) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="row">

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          name
        </label>
        <input name="name" id="name" type="text" placeholder="{{ $users->name }}" value="{{ $users->name }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          email
        </label>
        <input name="email" id="email" type="text" placeholder="{{ $users->email }}" value="{{ $users->email }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          fakultas_id
        </label>
        <input name="fakultas_id" id="fakultas_id" type="text" placeholder="{{ $users->fakultas_id }}" value="{{ $users->fakultas_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          dekan_id
        </label>
        <input name="dekan_id" id="dekan_id" type="text" placeholder="{{ $users->dekan_id }}" value="{{ $users->dekan_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          prodi_id
        </label>
        <input name="prodi_id" id="prodi_id" type="text" placeholder="{{ $users->prodi_id }}" value="{{ $users->prodi_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          kejur_id
        </label>
        <input name="kejur_id" id="kejur_id" type="text" placeholder="{{ $users->kejur_id }}" value="{{ $users->kejur_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
      </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          password
        </label>
        <input name="password" id="password" type="text" placeholder="{{ $users->password }}" value="{{ $users->password }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>
@endsection