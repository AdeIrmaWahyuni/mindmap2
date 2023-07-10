@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($files as $file)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $file->name }}</h5>
                            <p class="card-text">Size: {{ $file->human_readable_size }}</p>
                            <a href="{{ $file->getUrl() }}" class="btn btn-primary">Download</a>
                            <form action="{{ route('deleteImage', $file->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <form action="{{ route('tambahgambar', [$id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-sm-6">
            <label for="formFileMultiple" class="form-label">Tambah Gambar</label>
            <div class="input-group">
                <input type="file" class="form-control" id="formFileMultiple" multiple name="files[]">
                <label class="input-group-text" for="formFileMultiple">Pilih file</label>
            </div>
        </div>

        <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
