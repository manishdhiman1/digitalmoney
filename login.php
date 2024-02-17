<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        DigitalMoney Login
    </title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <form method="post" action="#" id="form1">
        <div class="bg-account-pages py-4 py-sm-0">

            <div class="account-home-btn d-none d-sm-block">
                <a href="index.aspx" class="text-white"><i class="mdi mdi-home h1"></i></a>
            </div>

            <section class="vh-100">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card account-card mt-5">
                                        <div class="card-body">
                                            <div class="text-center ">
                                                <h3 class="fw-bold"><a href="index.aspx"
                                                        class="text-dark text-uppercase account-pages-logo"><img
                                                            src="images/logo-2.png" alt="logo" /> </a></h3>
                                                <p class="text-muted">Sign in to continue to DigitalMoney.</p>
                                            </div>
                                            <div class="p-4">

                                                <div class="form-group">
                                                    <label for="username">Username</label>

                                                    <input name="Username" type="text" id="Username"
                                                        class="form-control" placeholder="Enter Username" />
                                                    <span id="Uname" style="visibility:hidden;">Please Enter
                                                        Username</span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="userpassword">Password</label>

                                                    <input name="Password" type="password" id="Password"
                                                        class="form-control" placeholder="Enter Password" />
                                                    <span id="Pass" style="visibility:hidden;">Please Enter
                                                        Password</span>


                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault" />

                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Remember me
                                                    </label>
                                                </div>

                                                <div class="d-grid mt-3">

                                                    <input type="submit" name="bttn" value="Login" id="bttn"
                                                        class="btn btn-primary" />
                                                </div>

                                                <div class="mt-4 mb-0 text-center">
                                                    <a href="passwordforget.php" class="text-dark"><i
                                                            class="mdi mdi-lock"></i> Forgot your password? <a
                                                            href="signup.php" class="text-danger">Sign up</a></a>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
</body>

</html>