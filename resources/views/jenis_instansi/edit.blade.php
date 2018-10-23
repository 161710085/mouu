@extends('layouts.admin')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li><a href="{{ url('/admin/authors') }}">Jenis Instansi</a></li>
<li class="active">Ubah Jenis Instansi</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Ubah Jenis Instansi</h2>
</div>
<div class="panel-body">
{!! Form::model($jenis_instansi, ['url' => route('jenisinstansi.update', $jenis_instansi->id),
'method'=>'put', 'class'=>'form-horizontal']) !!}
@include('jenis_instansi._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection