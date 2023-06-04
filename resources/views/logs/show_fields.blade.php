<!-- Pesan Field -->
<div class="col-sm-12">
    {!! Form::label('pesan', 'Pesan:') !!}
    <p>{{ $log->pesan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $log->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $log->updated_at }}</p>
</div>

<!-- Users Id Field -->
<div class="col-sm-12">
    {!! Form::label('users_id', 'Users Id:') !!}
    <p>{{ $log->users_id }}</p>
</div>

