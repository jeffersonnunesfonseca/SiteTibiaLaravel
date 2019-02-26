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
                            <th style="width:100%;text-align:center;padding: 18px 2px 7px;">
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
                        <table class="table" style="width:100%;text-align:center;">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Vocation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dados)
                                        <tr>
                                                <td>{{$dados["name"]}}</td>
                                                <td>{{$dados["online"]}}</td>
                                                <td>{{$dados["vocation_name"]}}</td>
                                        </tr>
                                        
                                    @endforeach
                                    <tr style="height: 100px;">
                                        <td>
                                            <br />
                                            <button type="button" class="btn btn-primary" id="btn-create-character" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                Create character
                                            </button>
                                        </td>
                                        <td></td>
                                        <td>
                                            <br />
                                            <button type="button" class="btn btn-primary" id="btn-delete-character" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                Delete character
                                            </button>
                                        </td>
                                    </tr>
            

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
@push('scripts')
    <script src="/js/myaccount.js"></script>
@endpush
