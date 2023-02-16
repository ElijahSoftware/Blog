<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


    {{-- Css --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>registratie</title>
</head>

<body>
    <div class="blog py-5 bg-light">
        <div class="container">
            <div class="blog">
                <section class="vh-100 bg-image" <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-5">
                                        <h3 class="text-uppercase text-center mb-5">Account Aanmaken</h3>
                                        <form method="POST" action="/register">
                                            {{ csrf_field() }}

                                            <div class="form-outline mb-4">
                                                <input type="name" id="name" name="name"
                                                    class="form-control form-control-lg"required />
                                                <label class="form-label" for="form3Example1cg">Name</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="email" id="email"
                                                    name="email"class="form-control form-control-lg"required />
                                                <label class="form-label" for="email">Email</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="password" name="password"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="password">Password</label>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <button type="submit"
                                                    class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body"required>Register</button>
                                            </div>

                                            <p class="text-center text-muted mt-5 mb-0">Heb al een account? <a
                                                    href="#!" class="fw-bold text-body"><u>Log hier</u></a>
                                            </p>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
</body>

</html>
