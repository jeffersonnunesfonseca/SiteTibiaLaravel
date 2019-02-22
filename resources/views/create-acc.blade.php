@extends('templates.main')
@section('content-body')
    <div class="container-box-center">
        <div class="border-decore-right-top"></div>
        <div class="border-decore-left-top"></div>
        <div class="border-decore-right-bottom"></div>
        <div class="border-decore-left-bottom"></div>
        <div class='title'></div>
        <div class="content-box">
            <div class='content-bg'>
                <div class='content'>
                    <form id='frm-cadastro'>
                        <div class="form-group">
                            <div class="form-group col-md-6">
                                <label for="account-number">Account Number</label>
                                <input type="text" name='account-number' class="form-control" id="account-number" placeholder="Account Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="text" name='password' class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password-conf">Confirma Password</label>
                                <input type="text" name='password-conf' class="form-control" id="password-conf" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name='email' class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>                                
                        <button type="button" id='btn-cadastro' class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class='border_bottom'></div>
    </div>
@endsection
@push('scripts')
    <script src="/js/createacc.js"></script>
@endpush

