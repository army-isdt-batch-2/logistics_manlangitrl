<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="img-back">
    <div class="container text-center text-black mt-5">
        <h2><strong>LOGISTICS MANAGEMENT SYSTEM</trong>
    </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col"></div>
            <div class="col-md-4 mt-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Philippine_Army_Seal.svg/1200px-Philippine_Army_Seal.svg.png"
                            alt="" style="width: 80px;">
                        <br>
                        <br>
                        <strong>Log-in to your account</strong>
                        <br>
                        <br>
                        <form action="{{route('login.verify')}}" method="post" class="text-start">
                         @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" required> 
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input"  required>
                                <label class="form-check-label" for="exampleCheck1">Keep me login</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success rounded -pill">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
<style>
.img-back {
    background-image: url(/img/background.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 20;
 
}
.card{
    background-image: url(/img/login-card.png);

}
</style>