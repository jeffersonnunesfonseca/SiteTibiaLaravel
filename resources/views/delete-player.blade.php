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
                    <form id="frm-delete-player">
                        <div class="form-group">
                            <label for="character-name"><b>Name</b></label>
                            <br>
                            <span class="exists"></span>
                            <input type="text" class="form-control" name="character-name" id="character-name" aria-describedby="character-name" placeholder="Character Name">
                        </div>
                      
                        <button type="button" id="btn-deleted-character" style="width:100%;" class="btn btn-primary">Deleted</button>
                    </form>
                </div>
            </div>
        </div>
        <div class='border_bottom'></div>
    </div>
@endsection
@push('scripts')
    <script src="/js/myaccount.js"></script>
@endpush
