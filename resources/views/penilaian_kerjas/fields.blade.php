<!-- No Butir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_butir', 'No Butir:') !!}
    {!! Form::text('no_butir', null, ['class' => 'form-control']) !!}
</div>

<!-- Bobot Penilaian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bobot_penilaian', 'Bobot Penilaian:') !!}
    {!! Form::text('bobot_penilaian', null, ['class' => 'form-control']) !!}
</div>

<!-- Elemen Penilaian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('elemen_penilaian', 'Elemen Penilaian:') !!}
    {!! Form::text('elemen_penilaian', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskriptor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deskriptor', 'Deskriptor:') !!}
    {!! Form::text('deskriptor', null, ['class' => 'form-control']) !!}
</div>

<!-- Baik Jika Field -->
<div class="form-group col-sm-6">
    {!! Form::label('baik_jika', 'Baik Jika:') !!}
    {!! Form::text('baik_jika', null, ['class' => 'form-control']) !!}
</div>

<!-- Hasil Asesmen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hasil_asesmen', 'Hasil Asesmen:') !!}
    {!! Form::text('hasil_asesmen', null, ['class' => 'form-control']) !!}
</div>

<!-- Pemisah Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('pemisah_id', 'Pemisah Id:') !!}
    {!! Form::number('pemisah_id', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group col-sm-6">
    {!! Form::label('pemisah_id', 'Pemisah:') !!}
    {!! Form::select('pemisah_id', $pemisahs, null, ['class' => 'form-control border-info round','id'=>'suku','placeholder'=>'- Pilih - ']) !!}
</div>