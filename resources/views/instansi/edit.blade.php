@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li><a href="{{ url('/admin/instansi') }}">instansi</a></li>
<li class="active">instansi</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">instansi</h2>
</div>
<div class="panel-body">
{!! Form::model($instansi, ['url' => route('instansi.update', $instansi->id),'method'=>'put', 'class'=>'form-horizontal']) !!}

@include('instansi._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection