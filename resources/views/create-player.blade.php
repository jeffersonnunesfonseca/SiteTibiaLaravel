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
                    <form id="frm-create-player">
                        <div class="form-group">
                          
                            <label for="character-name"><b>Name</b></label>
                            <br>
                            <span class="exists"></span>
                            <input type="text" class="form-control" name="character-name" id="character-name" aria-describedby="character-name" placeholder="Character Name">
                        </div>
                        <table style="text-align:center;">
                            <tr>
                                <td>
                                    <span class="error"></span>
                                    <b>Gender</b>
                                </td>
                                <td>
                                    <span class="error"></span>
                                    <b>Vocation</b>
                                </td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td style="padding: 1px 85px 40px;text-align: left;" id="gender">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="female"  id="gender">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                            <input type="radio" class="form-check-input" name="gender" value="male"  id="gender">
                                            <label class="form-check-label" for="male">Male</label>
                                    </div>
                                </td>
                                <td style="text-align: left;" id="vocation">
                                        <div class="form-check">
                                                <input type="radio" class="form-check-input" name="vocation" value="1" >
                                                <label class="form-check-label" for="vocation">Sorcerer</label>
                                        </div>
                                        <div class="form-check">
                                                <input type="radio" class="form-check-input" name="vocation" value="2">
                                                <label class="form-check-label" for="vocation">Druid</label>
                                        </div>
                                        <div class="form-check">
                                                <input type="radio" class="form-check-input" id="vocation" name="vocation" value="3">
                                                <label class="form-check-label" for="vocation">Paladin</label>
                                        </div>
                                        <div class="form-check">
                                                <input type="radio" class="form-check-input" id="vocation" name="vocation" value="4">
                                                <label class="form-check-label" for="vocation">Knight</label>
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                <td><br><br></td>
                            </tr>
                        </table>
                        <button type="button" id="btn-send-character" style="width:100%;" class="btn btn-primary">Create</button>
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
