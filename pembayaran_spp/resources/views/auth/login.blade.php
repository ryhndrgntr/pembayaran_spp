<!DOCTYPE html>
<html>

<head>
    <title>E-SPP | KARASUNO HIGH SCHOOL</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <section class="py-14 lg:py-20"
        style="
    background-image: url('/img/karasuno.jpeg');
    background-position: center;
    background-size: cover;
    ">
    
        <div class="container">
            <div class="login-content">
                <form method="POST" action="{{ route('signin') }} ">
                    @csrf
                    @if ($msg = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $msg }}</strong>
                        </div>
                    @endif
                    <img src="/img/karasuno1.png">
                    <h3 class="title" style="">KARASUNO HIGH SCHOOL</h3>
                    <div class="input-div one ">
                        <div class="i" style="color:black">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <input type="email" name="email" placeholder="Email" id="email"
                                value="{{ old('email') }}" required />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock" style="color:black"></i>
                        </div>
                        <div class="div">
                            <input type="password" name="password" placeholder="Password" id="password" required />
                        </div>
                    </div>
                    <input type="submit" class="btn" value="Login" style="background: gray">
                </form>
            </div>
        </div>
        <script type="text/javascript" src="/js/main.js"></script>
</body>

</html>
