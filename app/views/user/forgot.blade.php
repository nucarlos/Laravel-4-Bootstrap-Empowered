@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Forgot Password</h1>
</div>
{{ Confide::makeForgotPasswordForm() }}
@stop
