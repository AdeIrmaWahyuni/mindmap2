@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                  
                    </h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-dark float-right"
                       href="{{ route('penilaianKerjas.index') }}">
                                                    @lang('Back')
                                            </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('penilaian_kerjas.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
