@extends('layouts.app')

@section('content')
<div class="container">
<br>
<br>
<div class="row">
        <div class="col-md-4">
            <div class="card text-center mb-3" style="width: 18rem;">
                <div class="card-body" style="background-color: #00CED1;">
                    <h5 class="card-title">
                    <i style='font-size:35px' class='fas'>&#xf0c0;</i> User </h5>
                    <p class="card-text">{{ $countUser }}</p>
                    @if (Auth::check() && Auth::user()->hasRole('admin'))
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Go</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3" style="width: 18rem;">
                <div class="card-body" style="background-color: #40E0D0;">
                    <h5 class="card-title ">
                    <i style='font-size:35px' class='fas'>&#xf15c;</i> Kriteria </h5>
                     <p class="card-text">{{ $countPemisah }}</p>
                     @if (Auth::check() && Auth::user()->hasRole('admin'))
                    <a href="{{ route('pemisahs.index') }}" class="btn btn-primary">Go</a>
                    @endif
                     
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3" style="width: 18rem;">
                 <div class="card-body" style="background-color: #20B2AA;">
                    <h5 class="card-title">
                    <i style="font-size:35px" class="fa">&#xf303;</i> Penilaian Kerja</h5>
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
                <th style="background-color: #1E90FF">No Butir</th>
                <th style="background-color: #1E90FF">Bobot Penilaian</th>
                <th style="background-color: #1E90FF">Elemen Penilaian</th>
                <th style="background-color: #1E90FF">Deskriptor</th>
                <th style="background-color: #1E90FF">Baik Jika</th>
                <th style="background-color: #1E90FF">Hasil Asesmen</th>
                <th style="background-color: #1E90FF">Nilai</th>
                <th style="background-color: #1E90FF">Link</th>
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
