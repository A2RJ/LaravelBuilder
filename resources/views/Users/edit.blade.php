@extends('layouts.app')
@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Users.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="{{ route('Users.update', $Users) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              id
              </label>
              <input name="id" id="id" type="text" placeholder="{{ $Users->id }}" value="{{ $Users->id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              name
              </label>
              <input name="name" id="name" type="text" placeholder="{{ $Users->name }}" value="{{ $Users->name }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              email
              </label>
              <input name="email" id="email" type="text" placeholder="{{ $Users->email }}" value="{{ $Users->email }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              fakultas_id
              </label>
              <input name="fakultas_id" id="fakultas_id" type="text" placeholder="{{ $Users->fakultas_id }}" value="{{ $Users->fakultas_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              dekan_id
              </label>
              <input name="dekan_id" id="dekan_id" type="text" placeholder="{{ $Users->dekan_id }}" value="{{ $Users->dekan_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              prodi_id
              </label>
              <input name="prodi_id" id="prodi_id" type="text" placeholder="{{ $Users->prodi_id }}" value="{{ $Users->prodi_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              kejur_id
              </label>
              <input name="kejur_id" id="kejur_id" type="text" placeholder="{{ $Users->kejur_id }}" value="{{ $Users->kejur_id }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              email_verified_at
              </label>
              <input name="email_verified_at" id="email_verified_at" type="text" placeholder="{{ $Users->email_verified_at }}" value="{{ $Users->email_verified_at }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              password
              </label>
              <input name="password" id="password" type="text" placeholder="{{ $Users->password }}" value="{{ $Users->password }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              remember_token
              </label>
              <input name="remember_token" id="remember_token" type="text" placeholder="{{ $Users->remember_token }}" value="{{ $Users->remember_token }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              created_at
              </label>
              <input name="created_at" id="created_at" type="text" placeholder="{{ $Users->created_at }}" value="{{ $Users->created_at }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              updated_at
              </label>
              <input name="updated_at" id="updated_at" type="text" placeholder="{{ $Users->updated_at }}" value="{{ $Users->updated_at }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection