@extends('layouts.app')
@section('title', 'Dedications')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $dedications->id_dedication }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Dedications.index') }}" title="Go back"> Go back<i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id_dedication:</strong>
                    {{ $dedications->id_dedication }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jenis_kegiatan:</strong>
                    {{ $dedications->jenis_kegiatan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jenis_kegiatan_select:</strong>
                    {{ $dedications->jenis_kegiatan_select }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan:</strong>
                    {{ $dedications->bukti_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan1:</strong>
                    {{ $dedications->bukti_penugasan1 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_penugasan2:</strong>
                    {{ $dedications->bukti_penugasan2 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sks_bukti_penugasan:</strong>
                    {{ $dedications->sks_bukti_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>masa_penugasan:</strong>
                    {{ $dedications->masa_penugasan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen:</strong>
                    {{ $dedications->bukti_dokumen }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen1:</strong>
                    {{ $dedications->bukti_dokumen1 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen2:</strong>
                    {{ $dedications->bukti_dokumen2 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bukti_dokumen3:</strong>
                    {{ $dedications->bukti_dokumen3 }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sks_bukti_dokumen:</strong>
                    {{ $dedications->sks_bukti_dokumen }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rekomendasi:</strong>
                    {{ $dedications->rekomendasi }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created_at:</strong>
                    {{ $dedications->created_at }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>updated_at:</strong>
                    {{ $dedications->updated_at }}
                </div>
            </div>
            
    </div>
@endsection