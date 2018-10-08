<div class="form-group{{ $errors->has('jenismou') ? ' has-error' : '' }}">
{!! Form::label('jenismou', 'Jenis Mou', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('jenismou', null, ['class'=>'form-control']) !!}
{!! $errors->first('jenismou', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('moulevel') ? ' has-error' : '' }}">
{!! Form::label('moulevel', 'Mou Level', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('moulevel', null, ['class'=>'form-control']) !!}
{!! $errors->first('moulevel', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('pjk') ? ' has-error' : '' }}">
{!! Form::label('pjk', 'Penanggung Jawab Kampus', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('pjk', null, ['class'=>'form-control']) !!}
{!! $errors->first('pjk', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('nopjk') ? ' has-error' : '' }}">
{!! Form::label('nopjk', 'No Hp Penanggung Jawab Kampus', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::number('nopjk', null, ['class'=>'form-control']) !!}
{!! $errors->first('nopjk', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('pji') ? ' has-error' : '' }}">
{!! Form::label('pji', 'Penanggung Jawab Instansi', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('pji', null, ['class'=>'form-control']) !!}
{!! $errors->first('pji', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('nopji') ? ' has-error' : '' }}">
{!! Form::label('nopji', 'No Hp Penanggung Jawab Instansi', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::number('nopji', null, ['class'=>'form-control']) !!}
{!! $errors->first('nopji', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('pejabatpenandatangan') ? ' has-error' : '' }}">
{!! Form::label('pejabatpenandatangan', 'Pejabat Penandatangan', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('pejabatpenandatangan', null, ['class'=>'form-control']) !!}
{!! $errors->first('pejabatpenandatangan', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('mulai') ? ' has-error' : '' }}">
{!! Form::label('mulai', 'Mulai', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::date('mulai', null, ['class'=>'form-control']) !!}
{!! $errors->first('mulai', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('berakhir') ? ' has-error' : '' }}">
{!! Form::label('berakhir', 'Berakhir', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::date('berakhir', null, ['class'=>'form-control']) !!}
{!! $errors->first('berakhir', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('manfaat') ? ' has-error' : '' }}">
{!! Form::label('manfaat', 'Manfaat', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('manfaat', null, ['class'=>'form-control']) !!}
{!! $errors->first('manfaat', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('kerjasama') ? ' has-error' : '' }}">
{!! Form::label('kerjasama', 'Bentuk Kerjasama', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::text('kerjasama', null, ['class'=>'form-control']) !!}
{!! $errors->first('kerjasama', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group">
<div class="col-md-4 col-md-offset-2">
{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
</div>
</div>