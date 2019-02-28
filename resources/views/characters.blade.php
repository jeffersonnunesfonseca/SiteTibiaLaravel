@extends('templates.main')
@section('content-body')
<div class="container-box-center">
        <input type="hidden" id="session" value="@if ( Session::get('id')) {{ Session::get('id')}} @endif">
        <div class="border-decore-right-top"></div>
        <div class="border-decore-left-top"></div>
        <div class="border-decore-right-bottom"></div>
        <div class="border-decore-left-bottom"></div>
        <div class='title'>Characters</div>
        <div class="content-box">
            <div class='content-bg'>
                <div class='content'>
                    <h1>Em desenvolvimento.</h1>
                </div>
            </div>
        </div>
        <div class='border_bottom'></div>
    </div>
@endsection