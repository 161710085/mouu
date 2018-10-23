<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('name', 'Jenis Instansi', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('name', null, ['class'=>'form-control']) !!}
{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    {!! Form::label('status', 'Status', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::radio('status', 'Aktif', ['class'=>'radio-control']) !!} Aktif
        {!! Form::radio('status', 'Tidak Aktif', ['class'=>'radio-control']) !!} Tidak Aktif
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
<div class="col-md-4 col-md-offset-2">
{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
</div>
</div>