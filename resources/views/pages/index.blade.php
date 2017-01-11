@extends('layouts.index')

@section('title', ucfirst($mypage->name))

@section('content')

	<!-- text samples -->
	@include('texts.index', ['data' => $modules['Text'], 'loc'=>'@header', 'tpl'=>'show'])
	<hr>
	@include('texts.index', ['data' => $modules['Text'], 'loc'=>'@body', 'tpl'=>'show'])

@endsection

@section('script')

@endsection
		
