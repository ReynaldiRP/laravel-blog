<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>
    </header>
    <main>
        <div class="pattern">
            <div class="d-flex justify-content-center align-items-center mt-5">
                <div class="card">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item text-center">
                            <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link btr" data-toggle="pill" role="tab" aria-selected="false"
                                href="#pills-profile">Signup</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        @if ($errors->any())
                        <div class="alert alert-danger" id="error-message">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            @guest
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form px-4 pt-5">
                                    <input type="email" name="email" @error('email') is-invalid @enderror
                                        value="{{old('username')}}" class="form-control" placeholder="Email" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="password" name="password" @error('password') is-invalid @enderror"
                                        value="{{old('password')}}" class="form-control" placeholder="Password"
                                        required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <button class="btn btn-dark btn-block mt-5">{{ __('Login') }}</button>
                                </div>
                            </form>
                            @endguest
                        </div>
                        <div class="tab-pane fade show" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form px-4">

                                    <input type="text" name="name" @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" class="form-control" placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <input type="password" id="password-confirm" name="password_confirmation"
                                        class="form-control" placeholder="Confirm Password">
                                    <button class="btn btn-dark btn-block">{{ __('Register') }}</button>

                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        $(".btl").click(function() {
            $("#pills-home").show();
            $("#pills-profile").hide();
            $("#pills-home-tab").addClass("active");
            $("#pills-profile-tab").removeClass("active");
        });

        $(".btr").click(function() {
            $("#pills-home").hide();
            $("#pills-profile").show();
            $("#pills-home-tab").removeClass("active");
            $("#pills-profile-tab").addClass("active");
        });
    });
    $(document).ready(function() {
        setTimeout(function() {
            $('#error-message').fadeOut('slow');
        }, 1000);
    });

    $.ajax({
        type:'POST',
        url: 'login2.php',
        data: $('#register-form').serialize(),
        succes: function(response) {
            
        }
    })
    </script>
</body>

</html>