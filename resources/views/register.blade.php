<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IT Helpdesk</title>

    <link rel="stylesheet" href="assets/style.css">
</head>

<body class="bg-white">
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">

            <!--start login contant-->
            <div class="app-contant">
                <div class="bg-white">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
                                <div class="d-flex align-items-center h-100-vh">

                                    <div class="login p-50">
                                        <img src="assets/gajelas.png" alt="Helpdesk" width="200px" class="mb-2">
                                        <p>Please register your account</p>
                                        <form method="POST" action="/register" class="mt-3 mt-sm-5">
                                            <input type="hidden" name="_token" value="4ZQNXHnIlScSCkGFUVoKBXFQBenvGZMeEmWD1UEw">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Password</label>
                                                        <input id="password" type="password" class="form-control" name="password" required>

                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button type="submit" href="index.html" class="btn btn-primary text-uppercase">Register</button>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <p>Already have an account ?<a href="/login"> Login</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
                                <div class="row align-items-center h-120">
                                    <div class="col-7 mx-auto ">
                                        <img class="img-fluid" src="assets/login.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>