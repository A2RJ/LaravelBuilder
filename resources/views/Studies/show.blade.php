@extends('layouts.app')
@section('title', 'Studies')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $studies->id_study }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Studies.index') }}" title="Go back"> Go back<i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_study:</strong>
                    {{ $studies->id_study }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jenis_kegiatan:</strong>
                    {{ $studies->jenis_kegiatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jenis_kegiatan_select:</strong>
                    {{ $studies->jenis_kegiatan_select }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan:</strong>
                    {{ $studies->bukti_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan1:</strong>
                    {{ $studies->bukti_penugasan1 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan2:</strong>
                    {{ $studies->bukti_penugasan2 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sks_bukti_penugasan:</strong>
                    {{ $studies->sks_bukti_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>masa_penugasan:</strong>
                    {{ $studies->masa_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen:</strong>
                    {{ $studies->bukti_dokumen }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen1:</strong>
                    {{ $studies->bukti_dokumen1 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen2:</strong>
                    {{ $studies->bukti_dokumen2 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen3:</strong>
                    {{ $studies->bukti_dokumen3 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sks_bukti_dokumen:</strong>
                    {{ $studies->sks_bukti_dokumen }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rekomendasi:</strong>
                    {{ $studies->rekomendasi }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created_at:</strong>
                    {{ $studies->created_at }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>updated_at:</strong>
                    {{ $studies->updated_at }}
                </div>
            </div>
            
    </div>
@endsection