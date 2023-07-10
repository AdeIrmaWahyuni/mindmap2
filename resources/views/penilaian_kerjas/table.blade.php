<div class="card-body p-0">
    <?php $nama = ''; ?>
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
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pemisahs as $pemisah)
                    <?php $nama = $pemisah->nama; ?>

                    @foreach ($pemisah->penilaianKerjap as $penilaianKerjax)
                        <?php
                        if ($nama != '') {
                            echo '<tr><td colspan="9" class="table-active"> ' . $nama . '  </td></tr>';
                            $nama = '';
                        }
                        ?>

                        @php
                            $penilaian = $penilaianKerjax->penilaian;
                            $bgColor = '';
                            if ($penilaian >= 4) {
                                $bgColor = 'bg-success';
                            } elseif ($penilaian == 3) {
                                $bgColor = 'bg-warning';
                            } elseif ($penilaian == 2) {
                                $bgColor = 'bg-orange';
                            } elseif ($penilaian == 1) {
                                $bgColor = 'bg-danger';
                            }
                        @endphp

                        <tr class="{{ $bgColor }}">
                            <td>{{ $penilaianKerjax->no_butir }}</td>
                            <td>{{ $penilaianKerjax->bobot_penilaian }}</td>
                            <td>{{ $penilaianKerjax->elemen_penilaian }}</td>
                            <td>{{ $penilaianKerjax->deskriptor }}</td>
                            <td>{{ $penilaianKerjax->baik_jika }}</td>
                            <td>{{ $penilaianKerjax->hasil_asesmen }}</td>
                            <td>{{ $penilaianKerjax->penilaian }}</td>
                            <td>
                                @foreach ($penilaianKerjax->linkArray as $link)
                                    <a href="{{ $link }}" target="_blank">{{ $link }}</a><br>
                                @endforeach
                            </td>
                            <td style="width: 120px">
                                {!! Form::open(['route' => ['penilaianKerjas.destroy', $penilaianKerjax->id], 'method' => 'delete']) !!}
                                <div class='btn-group'>
                                    <a href="{{ route('penilaianKerjas.show', [$penilaianKerjax->id]) }}"
                                        class='btn btn-default btn-xs'>
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a href="{{ route('penilaianKerjas.edit', [$penilaianKerjax->id]) }}"
                                        class='btn btn-default btn-xs'>
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="{{ route('penilaiankerjaimages', [$penilaianKerjax->id]) }}"
                                        class='btn btn-default btn-xs'>
                                        <i class="far fa-eye"></i>
                                    </a>
                                    {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'onclick' => "return confirm('Are you sure?')",
                                    ]) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endforeach

            </tbody>
        </table>
    </div>
    


    <div class="card-footer clearfix">
        <div class="float-right">
            {{-- @include('adminlte-templates::common.paginate', ['records' => $penilaianKerjas]) --}}
        </div>
    </div>
</div>
