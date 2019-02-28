@extends('templates.main')
@section('content-body')
<div class="container-box-center">
        <input type="hidden" id="session" value="@if ( Session::get('id')) {{ Session::get('id')}} @endif">
        <div class="border-decore-right-top"></div>
        <div class="border-decore-left-top"></div>
        <div class="border-decore-right-bottom"></div>
        <div class="border-decore-left-bottom"></div>
        <div class='title'>Highscore</div>
        <div class="content-box">
            <div class='content-bg'>
                <div class='content'>
                        Site na versão 1.0
                        <br>
                        Mapa Styller Youruts
                            <br>
                        SERVIDOR DEDICADO
                        <br>
                        CRIAR CONTA 1/1
                        <br>
                        RATES
                        <br>
                        - EXP 350X STAGE
                        <br>
                        - LOOT 3x
                        <br>
                        - SKILL 40X
                        <br>
                        - MAGIC 25 X
                        <br>
                        venham se divertir no Old Styller, estamos sempre INOVANDO, pensando em nossos players.
                        <br>
                        Alguns de nossos sistemas:
                        <br>
                        - Refinamento de itens;
                        <br>
                        - Party EXP;
                        <br>
                        - Guild EXP;
                        <br>
                        - Cast;
                        <br>
                        - Castle com recompensa se consquitar 5x seguidas;
                        <br>
                        - Auto loot;
                        e muito mais !
                        <br>
                        dúvidas in game ou sac.oldstyller@gmail.com
                </div>
            </div>
        </div>
        <div class='border_bottom'></div>
    </div>
@endsection