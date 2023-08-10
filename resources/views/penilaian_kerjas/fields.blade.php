<!-- No Butir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_butir', 'No Butir:') !!}
    {!! Form::text('no_butir', null, ['class' => 'form-control']) !!}
</div>

<!-- Bobot Penilaian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bobot_penilaian', 'Bobot Penilaian:') !!}
    {!! Form::number('bobot_penilaian', null, ['class' => 'form-control']) !!}
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


<div class="form-group col-sm-6">
    {!! Form::label('lokasi_penyimpanan', 'Lokasi Penyimpanan:') !!}
    {!! Form::text('lokasi_penyimpanan', null, ['class' => 'form-control']) !!}
</div>

<!-- Pemisah Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('pemisah_id', 'Pemisah Id:') !!}
    {!! Form::number('pemisah_id', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group col-sm-6">
    {!! Form::label('pemisah_id', 'Kriteria:') !!}
    {!! Form::select('pemisah_id', $pemisahs, null, [
        'class' => 'form-control border-info round',
        'id' => 'suku',
        'placeholder' => '- Pilih - ',
    ]) !!}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('penilaian', 'Nilai') }}
    {{ Form::number('penilaian', null, ['class' => 'form-control border-info round']) }}
</div>

<div class="form-group col-sm-6">
    {{ Form::label('link', 'Link') }}
    {{ Form::textarea('link', null, ['class' => 'form-control border-info round']) }}
</div>


@if (isset($files))

    <div class="form-group col-sm-6">
        <label for="existingFiles">Existing Files</label>
        @foreach ($files as $file)
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="card-title">{{ $file->name }}</h6>
                    <p class="card-text">Size: {{ $file->human_readable_size }}</p>
                    <a href="{{ $file->getUrl() }}" class="btn btn-primary">Download</a>
                    {{-- <form action="{{ route('deleteImage', $file->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form> --}}


                </div>
            </div>
        @endforeach
    </div>

    
@else
    
@endif
