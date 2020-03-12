<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    @include('components.includeCss')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">

                            <img src="images/icon/logo.png" alt="CoolAdmin">

                        </div>
                        <div class="login-form">
                            <form action="{{ route('login') }}" method="POST">

                                @csrf

                                @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        Password is incorrect or email not found
                                    </div>
                                @enderror

                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email"
                                        class="au-input au-input--full @error('email') is-invalid @enderror"
                                        type="email" name="email" value="{{ old('email') }}" required
                                        autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password"
                                        class="au-input au-input--full @error('password') is-invalid @enderror"
                                        type="password" name="password" value="{{ old('password') }}"
                                        required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">
                                    sign in
                                </button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Dont you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('components.includeJS')

</body>

</html>
<!-- end document-->
