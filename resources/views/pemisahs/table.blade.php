<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="pemisahs-table">
            <thead>
            <tr>
                <th>Nama</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pemisahs as $pemisah)
                <tr>
                    <td>{{ $pemisah->nama }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['pemisahs.destroy', $pemisah->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('pemisahs.show', [$pemisah->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('pemisahs.edit', [$pemisah->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $pemisahs])
        </div>
    </div>
</div>
