<div class="form-group{{ $errors->has('namainstansi') ? ' has-error' : '' }}">
{!! Form::label('namainstansi', 'Nama Instansi', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('namainstansi', null, ['class'=>'form-control']) !!}
{!! $errors->first('namainstansi', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group {!! $errors->has('jenis_instansi_id') ? 'has-error' : '' !!}">
{!! Form::label('jenis_instansi_id', 'Jenis Instansi', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::select('jenis_instansi_id', [''=>'']+App\jenis_instansi::pluck('name','id')->all(), null)!!}
{!! $errors->first('jenis_instansi_id', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
{!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('kota') ? ' has-error' : '' }}">
{!! Form::label('kota', 'Kota', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('kota', null, ['class'=>'form-control']) !!}
{!! $errors->first('kota', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
{!! Form::label('provinsi', 'Provinsi', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('provinsi', null, ['class'=>'form-control']) !!}
{!! $errors->first('provinsi', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('kodepos') ? ' has-error' : '' }}">
{!! Form::label('kodepos', 'Kode Pos', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::number('kodepos', null, ['class'=>'form-control']) !!}
{!! $errors->first('kodepos', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('namapimpinan') ? ' has-error' : '' }}">
{!! Form::label('namapimpinan', 'Nama Pimpinan', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('namapimpinan', null, ['class'=>'form-control']) !!}
{!! $errors->first('namapimpinan', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
{!! Form::label('jabatan', 'Jabatan', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('jabatan', null, ['class'=>'form-control']) !!}
{!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('nope') ? ' has-error' : '' }}">
{!! Form::label('nope', 'No Telepon', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::number('nope', null, ['class'=>'form-control']) !!}
{!! $errors->first('nope', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
{!! Form::label('email', 'email', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('email', null, ['class'=>'form-control']) !!}
{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('web') ? ' has-error' : '' }}">
{!! Form::label('web', 'web', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('web', null, ['class'=>'form-control']) !!}
{!! $errors->first('web', '<p class="help-block">:message</p>') !!}
</div>
</div>
<div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
{!! Form::label('fax', ' fax', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-8">
{!! Form::text('fax', null, ['class'=>'form-control']) !!}
{!! $errors->first('fax', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group">
<div class="col-md-8 col-md-offset-2">
{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
</div>
</div>