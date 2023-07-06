<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

{{-- {!! Form::text('user_id', {{ Auth::users()->id }}, ['class' => 'form-control']) !!} --}}
