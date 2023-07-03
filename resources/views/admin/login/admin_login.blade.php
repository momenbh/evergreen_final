<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('/admin/login/css/style.css') }}">

</head>

{{--message--}}
@if(session()->has('message'))

  <p class="alert alert-danger">{{session()->get('message')}}</p>
@endif

{{--End message--}}

<body class="img js-fullheight" style="background-image: url(/admin/login/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Evergreen</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>

                        <form action="{{route('do.login')}}" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Username" required
                                    name="email">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    required name="password">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                {{-- <div class="w-50 text-md-right">
									<a href="" style="color: #fff">Registration</a>
								</div> --}}
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('/admin/login/js/jquery.min.js') }}"></script>
    <script src="{{ url('/admin/login/js/popper.js') }}"></script>
    <script src="{{ url('/admin/login/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/admin/login/js/main.js') }}"></script>

</body>

</html>
