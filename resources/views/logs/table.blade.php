<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="logs-table">
            <thead>
            <tr>
                <th>Pesan</th>
                <th>Orang</th>
                <th colspan="3">Detail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->pesan }}</td>
                    <td>{{ $log->nama }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['logs.destroy', $log->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('logs.show', [$log->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            {{-- <a href="{{ route('logs.edit', [$log->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a> --}}
                            {{-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
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
            @include('adminlte-templates::common.paginate', ['records' => $logs])
        </div>
    </div>
</div>
