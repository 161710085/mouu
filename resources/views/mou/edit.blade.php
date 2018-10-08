@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li><a href="{{ url('/admin/mou') }}">Mou</a></li>
<li class="active">Mou</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Mou</h2>
</div>
<div class="panel-body">
{!! Form::model($mou, ['url' => route('mou.update', $mou->id),
'method'=>'put', 'class'=>'form-horizontal']) !!}
@include('mou._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection