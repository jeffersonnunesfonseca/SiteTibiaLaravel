@extends('templates.main')
@section('content-body')
    <div class="container-box-center">
        <input type="hidden" id="session" value="@if ($session['id']) {{$session['id']}} @endif">
        <div class="border-decore-right-top"></div>
        <div class="border-decore-left-top"></div>
        <div class="border-decore-right-bottom"></div>
        <div class="border-decore-left-bottom"></div>
        <div class='title'></div>
        <div class="content-box">
            <div class='content-bg'>
                <div class='content'>
                </div>
            </div>
        </div>
        <div class='border_bottom'></div>
    </div>
@endsection