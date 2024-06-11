<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}"><!-- Ganti dengan path file CSS yang sesuai -->
</head>

<body>
    <div class="form-bg"></div> <!-- Latar belakang blur -->
    <div class="container">
        <div class="title" style="text-align:center; padding-top:1em; padding-bottom:1em; font-weight:bold;">Register
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                    autofocus placeholder="Name">
            </div>

            <div class="form-group">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                    placeholder="Email">
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control" name="password" required
                    autocomplete="new-password" placeholder="Password">
            </div>

            <div class="form-group">
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                    required placeholder="Confirm Password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>

</html>