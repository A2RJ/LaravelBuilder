@extends('layouts.app')
@section('title', 'Educations')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $educations->id_education }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Educations.index') }}" title="Go back"> Go back<i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_education:</strong>
                    {{ $educations->id_education }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jenis_kegiatan:</strong>
                    {{ $educations->jenis_kegiatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jenis_kegiatan_select:</strong>
                    {{ $educations->jenis_kegiatan_select }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan:</strong>
                    {{ $educations->bukti_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan1:</strong>
                    {{ $educations->bukti_penugasan1 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan2:</strong>
                    {{ $educations->bukti_penugasan2 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sks_bukti_penugasan:</strong>
                    {{ $educations->sks_bukti_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>masa_penugasan:</strong>
                    {{ $educations->masa_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen:</strong>
                    {{ $educations->bukti_dokumen }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen1:</strong>
                    {{ $educations->bukti_dokumen1 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen2:</strong>
                    {{ $educations->bukti_dokumen2 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen3:</strong>
                    {{ $educations->bukti_dokumen3 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sks_bukti_dokumen:</strong>
                    {{ $educations->sks_bukti_dokumen }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rekomendasi:</strong>
                    {{ $educations->rekomendasi }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created_at:</strong>
                    {{ $educations->created_at }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>updated_at:</strong>
                    {{ $educations->updated_at }}
                </div>
            </div>
            
    </div>
@endsection