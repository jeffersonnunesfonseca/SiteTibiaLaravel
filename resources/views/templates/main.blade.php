<style>
    .header{
        background-color: red;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')Old Styller</title>
    <div class='header'></div>
</head>
<body>
    <div class='container-main'>
        <div class='container-left'>
            <div class='left-box'>
                <div class="title"></div>
                <div class="border-decore-right-top"></div>
                <div class="border-decore-left-top"></div>
                <div class="border-decore-right-bottom"></div>
                <div class="border-decore-left-bottom"></div>
                <div class='content'>
                </div>
                <div class='border_bottom'></div>
            </div>
        </div>

        <div class='container-center'>
            @yield('content-body')

        </div>

        <div class='container-right'>
                <div class='right-box'>
                    <div class="title"><span class='title-content'></span></div>
                    <div class="border-decore-right-top"></div>
                    <div class="border-decore-left-top"></div>
                    <div class="border-decore-right-bottom"></div>
                    <div class="border-decore-left-bottom"></div>
                    <div class='content'>
                        <form id="frm-login" method="POST">
                            <table>
                                <tr>
                                    <td><input type="text" class='inputtext' placeholder='Account number' name="account-number"></td>
                                </tr>
                                <tr>
                                    <td><input type="password" class='inputtext' placeholder='Password' name="password"></td>
                                </tr>
                                <tr>
                                    <td><input type="button" class='btn-padrao btn-login' value="Login"></td>
                                </tr>
                                <tr>

                                    <td><a href="/createacc"><input type="button" class='btn-padrao' value="Register"></a></td>
                                </tr>
                            </table>
                        </form>
                            
                    </div>
                    <div class='border_bottom'></div>
                </div>
            </div>
    </div>


</body>
    <script src="/js/app.js"></script>
    <script src="/js/commons.js"></script>
    @stack('scripts')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
</html>