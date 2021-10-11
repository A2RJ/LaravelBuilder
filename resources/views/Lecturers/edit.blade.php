@extends('layouts.app')
@section('title', 'Lecturers')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Lecturers.index') }}" title="Go back">Go back <i class="fas fa-backward "></i> </a>
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

    <form action="{{ route('Lecturers.update', $lecturers) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              no_sertifikat
              </label>
              <input name="no_sertifikat" id="no_sertifikat" type="text" placeholder="{{ $lecturers->no_sertifikat }}" value="{{ $lecturers->no_sertifikat }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              sertifikat_file
              </label>
              <input name="sertifikat_file" id="sertifikat_file" type="text" placeholder="{{ $lecturers->sertifikat_file }}" value="{{ $lecturers->sertifikat_file }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              nip
              </label>
              <input name="nip" id="nip" type="text" placeholder="{{ $lecturers->nip }}" value="{{ $lecturers->nip }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              nidn
              </label>
              <input name="nidn" id="nidn" type="text" placeholder="{{ $lecturers->nidn }}" value="{{ $lecturers->nidn }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              nama_dosen
              </label>
              <input name="nama_dosen" id="nama_dosen" type="text" placeholder="{{ $lecturers->nama_dosen }}" value="{{ $lecturers->nama_dosen }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              gelar_depan
              </label>
              <input name="gelar_depan" id="gelar_depan" type="text" placeholder="{{ $lecturers->gelar_depan }}" value="{{ $lecturers->gelar_depan }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              gelar_belakang
              </label>
              <input name="gelar_belakang" id="gelar_belakang" type="text" placeholder="{{ $lecturers->gelar_belakang }}" value="{{ $lecturers->gelar_belakang }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              alamat
              </label>
              <input name="alamat" id="alamat" type="text" placeholder="{{ $lecturers->alamat }}" value="{{ $lecturers->alamat }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              jab_functional
              </label>
              <input name="jab_functional" id="jab_functional" type="text" placeholder="{{ $lecturers->jab_functional }}" value="{{ $lecturers->jab_functional }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              tanggal_lahir
              </label>
              <input name="tanggal_lahir" id="tanggal_lahir" type="text" placeholder="{{ $lecturers->tanggal_lahir }}" value="{{ $lecturers->tanggal_lahir }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              tempat_lahir
              </label>
              <input name="tempat_lahir" id="tempat_lahir" type="text" placeholder="{{ $lecturers->tempat_lahir }}" value="{{ $lecturers->tempat_lahir }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              s1
              </label>
              <input name="s1" id="s1" type="text" placeholder="{{ $lecturers->s1 }}" value="{{ $lecturers->s1 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              s1_file
              </label>
              <input name="s1_file" id="s1_file" type="text" placeholder="{{ $lecturers->s1_file }}" value="{{ $lecturers->s1_file }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              s2
              </label>
              <input name="s2" id="s2" type="text" placeholder="{{ $lecturers->s2 }}" value="{{ $lecturers->s2 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              s2_file
              </label>
              <input name="s2_file" id="s2_file" type="text" placeholder="{{ $lecturers->s2_file }}" value="{{ $lecturers->s2_file }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              s3
              </label>
              <input name="s3" id="s3" type="text" placeholder="{{ $lecturers->s3 }}" value="{{ $lecturers->s3 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              s3_file
              </label>
              <input name="s3_file" id="s3_file" type="text" placeholder="{{ $lecturers->s3_file }}" value="{{ $lecturers->s3_file }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              jenis
              </label>
              <input name="jenis" id="jenis" type="text" placeholder="{{ $lecturers->jenis }}" value="{{ $lecturers->jenis }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              bidang_ilmu
              </label>
              <input name="bidang_ilmu" id="bidang_ilmu" type="text" placeholder="{{ $lecturers->bidang_ilmu }}" value="{{ $lecturers->bidang_ilmu }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              asesor1
              </label>
              <input name="asesor1" id="asesor1" type="text" placeholder="{{ $lecturers->asesor1 }}" value="{{ $lecturers->asesor1 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              nip_asesor1
              </label>
              <input name="nip_asesor1" id="nip_asesor1" type="text" placeholder="{{ $lecturers->nip_asesor1 }}" value="{{ $lecturers->nip_asesor1 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              asesor2
              </label>
              <input name="asesor2" id="asesor2" type="text" placeholder="{{ $lecturers->asesor2 }}" value="{{ $lecturers->asesor2 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              nip_asesor2
              </label>
              <input name="nip_asesor2" id="nip_asesor2" type="text" placeholder="{{ $lecturers->nip_asesor2 }}" value="{{ $lecturers->nip_asesor2 }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              nomor
              </label>
              <input name="nomor" id="nomor" type="text" placeholder="{{ $lecturers->nomor }}" value="{{ $lecturers->nomor }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              tahun_akademik
              </label>
              <input name="tahun_akademik" id="tahun_akademik" type="text" placeholder="{{ $lecturers->tahun_akademik }}" value="{{ $lecturers->tahun_akademik }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              semester
              </label>
              <input name="semester" id="semester" type="text" placeholder="{{ $lecturers->semester }}" value="{{ $lecturers->semester }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              email
              </label>
              <input name="email" id="email" type="text" placeholder="{{ $lecturers->email }}" value="{{ $lecturers->email }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              ktp
              </label>
              <input name="ktp" id="ktp" type="text" placeholder="{{ $lecturers->ktp }}" value="{{ $lecturers->ktp }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you like</p>
            </div>
          </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection