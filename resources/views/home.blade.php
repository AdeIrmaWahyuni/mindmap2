@extends('layouts.app')

@section('content')
<div class="container">
<br>
<br>
<div class="row">
        <div class="col-md-4">
            <div class="card text-center mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">User</h5>
                    <p class="card-text">{{ $countUser }}</p>
                    @if (Auth::check() && Auth::user()->hasRole('admin'))
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Go</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title ">Kriteria</h5>
                     <p class="card-text">{{ $countPemisah }}</p>
                     @if (Auth::check() && Auth::user()->hasRole('admin'))
                    <a href="{{ route('pemisahs.index') }}" class="btn btn-primary">Go</a>
                    @endif
                     
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Penilaian Kerja</h5>
                     <p class="card-text">{{ $countPenilaianKerja }}</p>
                     @if (Auth::check() && Auth::user()->hasRole('admin'))
                        <a href="{{ route('penilaianKerjas.index') }}" class="btn btn-primary">Go</a>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>






    <div class="card-body p-0">
<?php $nama = ''?>
    <div class="table-responsive">
    {{-- {{ dd($pemisahs) }} --}}
        <table id="penilaian-kerjas-table" class="table table-striped table-hover">
            <thead>
            <tr>
                <th>No Butir</th>
                <th>Bobot Penilaian</th>
                <th>Elemen Penilaian</th>
                <th>Deskriptor</th>
                <th>Baik Jika</th>
                <th>Hasil Asesmen</th>
                <th>Nilai</th>
                <th>Link</th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($pemisahs as $pemisah)
                <?php $nama = $pemisah->nama?>
            
                @foreach($pemisah->penilaianKerjap as $penilaianKerjax)
                <?php 
                    if($nama != ''){
                        echo '<tr><td colspan="9" class="table-active"> '. $nama .'  </td></tr>';
                        $nama = '';
                    }
                ?>
                    <tr>
                        <td>{{ $penilaianKerjax->no_butir }}</td>
                        <td>{{ $penilaianKerjax->bobot_penilaian }}</td>
                        <td>{{ $penilaianKerjax->elemen_penilaian }}</td>
                        <td>{{ $penilaianKerjax->deskriptor }}</td>
                        <td>{{ $penilaianKerjax->baik_jika }}</td>
                        <td>{{ $penilaianKerjax->hasil_asesmen }}</td>
                        <td>{{ $penilaianKerjax->penilaian }}</td>
                        <td> 
                            @foreach($penilaianKerjax->linkArray as $link)
                                <a href="{{ $link }}" target="_blank">{{ $link }}</a><br>
                            @endforeach
                        </td>
                       
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('penilaianKerjas.index') }}" class="btn btn-light btn-lg">Lihat Data Lainnya</a>


    <div class="card-footer clearfix">
        <div class="float-right">
            {{-- @include('adminlte-templates::common.paginate', ['records' => $penilaianKerjas]) --}}
        </div>
    </div>
</div>
</div>

@endsection
