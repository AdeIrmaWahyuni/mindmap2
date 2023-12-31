<!-- No Butir Field -->
<div class="col-sm-12">
    {!! Form::label('no_butir', 'No Butir:') !!}
    <p>{{ $penilaianKerja->no_butir }}</p>
</div>

<!-- Bobot Penilaian Field -->
<div class="col-sm-12">
    {!! Form::label('bobot_penilaian', 'Bobot Penilaian:') !!}
    <p>{{ $penilaianKerja->bobot_penilaian }}</p>
</div>

<!-- Elemen Penilaian Field -->
<div class="col-sm-12">
    {!! Form::label('elemen_penilaian', 'Elemen Penilaian:') !!}
    <p>{{ $penilaianKerja->elemen_penilaian }}</p>
</div>

<!-- Deskriptor Field -->
<div class="col-sm-12">
    {!! Form::label('deskriptor', 'Deskriptor:') !!}
    <p>{{ $penilaianKerja->deskriptor }}</p>
</div>

<!-- Baik Jika Field -->
<div class="col-sm-12">
    {!! Form::label('baik_jika', 'Baik Jika:') !!}
    <p>{{ $penilaianKerja->baik_jika }}</p>
</div>

<!-- Hasil Asesmen Field -->
<div class="col-sm-12">
    {!! Form::label('hasil_asesmen', 'Hasil Asesmen:') !!}
    <p>{{ $penilaianKerja->hasil_asesmen }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Waktu Input:') !!}
    <p>{{ $penilaianKerja->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Waktu Perbarui:') !!}
    <p>{{ $penilaianKerja->updated_at }}</p>
</div>

<!-- Pemisah Id Field -->
<div class="col-sm-12">
    {!! Form::label('pemisah_id', 'Kriteria:') !!}
    <p>{{ $penilaianKerja->pemisah_id }}</p>
</div>

<!-- Users Id Field -->
<div class="col-sm-12">
    {!! Form::label('users_id', 'Users:') !!}
    <p>{{ $penilaianKerja->users_id }}</p>
</div>

@foreach ($files as $file)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $file->name }}</h5>
            <p class="card-text">Size: {{ $file->human_readable_size }}</p>
            <a href="{{ $file->getUrl() }}" class="btn btn-primary">Download</a>
        </div>
    </div>
@endforeach


