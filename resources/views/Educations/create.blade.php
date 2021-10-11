@extends('layouts.app')
@section('title', 'Educations')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Educations</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Educations.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('Educations.store') }}" method="POST" class="w-full max-w-lg">
        @csrf

        <div class="row">
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              jenis_kegiatan
              </label>
              <input name="jenis_kegiatan" id="jenis_kegiatan" type="text" placeholder="jenis_kegiatan" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              jenis_kegiatan_select
              </label>
              <input name="jenis_kegiatan_select" id="jenis_kegiatan_select" type="text" placeholder="jenis_kegiatan_select" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bukti_penugasan
              </label>
              <input name="bukti_penugasan" id="bukti_penugasan" type="text" placeholder="bukti_penugasan" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bukti_penugasan1
              </label>
              <input name="bukti_penugasan1" id="bukti_penugasan1" type="text" placeholder="bukti_penugasan1" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bukti_penugasan2
              </label>
              <input name="bukti_penugasan2" id="bukti_penugasan2" type="text" placeholder="bukti_penugasan2" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              sks_bukti_penugasan
              </label>
              <input name="sks_bukti_penugasan" id="sks_bukti_penugasan" type="text" placeholder="sks_bukti_penugasan" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              masa_penugasan
              </label>
              <input name="masa_penugasan" id="masa_penugasan" type="text" placeholder="masa_penugasan" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bukti_dokumen
              </label>
              <input name="bukti_dokumen" id="bukti_dokumen" type="text" placeholder="bukti_dokumen" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bukti_dokumen1
              </label>
              <input name="bukti_dokumen1" id="bukti_dokumen1" type="text" placeholder="bukti_dokumen1" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bukti_dokumen2
              </label>
              <input name="bukti_dokumen2" id="bukti_dokumen2" type="text" placeholder="bukti_dokumen2" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bukti_dokumen3
              </label>
              <input name="bukti_dokumen3" id="bukti_dokumen3" type="text" placeholder="bukti_dokumen3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              sks_bukti_dokumen
              </label>
              <input name="sks_bukti_dokumen" id="sks_bukti_dokumen" type="text" placeholder="sks_bukti_dokumen" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              rekomendasi
              </label>
              <input name="rekomendasi" id="rekomendasi" type="text" placeholder="rekomendasi" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection