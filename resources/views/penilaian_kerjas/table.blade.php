<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="penilaian-kerjas-table">
            <thead>
            <tr>
                <th>Bobot Penilaian</th>
                <th>Elemen Penilaian</th>
                <th>Deskriptor</th>
                <th>Baik Jika</th>
                <th>Hasil Esesmen</th>
                <th>Pemisah Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($penilaianKerjas as $penilaianKerja)
                <tr>
                    <td>{{ $penilaianKerja->bobot_penilaian }}</td>
                    <td>{{ $penilaianKerja->elemen_penilaian }}</td>
                    <td>{{ $penilaianKerja->deskriptor }}</td>
                    <td>{{ $penilaianKerja->baik_jika }}</td>
                    <td>{{ $penilaianKerja->hasil_asesmen }}</td>
                    <td>{{ $penilaianKerja->pemisah_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['penilaianKerjas.destroy', $penilaianKerja->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('penilaianKerjas.show', [$penilaianKerja->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('penilaianKerjas.edit', [$penilaianKerja->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $penilaianKerjas])
        </div>
    </div>
</div>
