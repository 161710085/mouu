@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li><a href="{{ url('/admin/jenisinstansi') }}">instansi</a></li>
<li class="active">Tambah instansi</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Tambah instansi</h2>
</div>
<div class="panel-body">
{!! Form::open(['url' => route('instansi.store'),
'method' => 'post', 'class'=>'form-horizontal']) !!}
@include('instansi._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection