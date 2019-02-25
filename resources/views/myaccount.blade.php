@extends('templates.main')
@section('content-body')
    <div class="container-box-center">
        <div class="border-decore-right-top"></div>
        <div class="border-decore-left-top"></div>
        <div class="border-decore-right-bottom"></div>
        <div class="border-decore-left-bottom"></div>
        <div class='title'>MYACCOUNT</div>
        <div class="content-box">
            <div class='content-bg'>
                <div class='content'>
                    <table style="width: 100%;">
                        <tr>
                            <th style="width:100%;text-align:center;">
                                <span class="welcome-myaccount">Welcome to your account!</span> 
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <br />
                            </th>
                        </tr>
                        <tr>
                            <th  style="width:100%;background-color:#5f4d41;color:white;">
                                Characters
                            </th>
                        </tr>
                        <tr>
                            <td>
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dados)
                                        <tr>
                                                <td>{{$dados["id"]}}</td>
                                                <td>Otto</td>
                                        </tr>
                                        
                                    @endforeach

                                </tbody>
                            </table>
                            </td>
                        </tr>
 
                    </table>
                </div>
            </div>
        </div>
        <div class='border_bottom'></div>
    </div>
@endsection 