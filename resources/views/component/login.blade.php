

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>


<style>
body{
    background:#f4f6f9;
}

.login-box{
    max-width:400px;
    margin:auto;
    margin-top:120px;
}

.card{
    border:none;
    border-radius:10px;
}

.card-header{
    background:#0d6efd;
    color:white;
    text-align:center;
    font-size:22px;
    font-weight:bold;
}

.btn-login{
    width:100%;
}
</style>

</head>
<body>

<div class="container">
    <div class="login-box">

        <div class="card shadow">

            <div class="card-header">
                User Login
            </div>

            <div class="card-body">

                <form>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-login">
                        Login
                    </button>

                    <div class="text-center mt-3">
                        <a href="#">Forgot Password?</a>
                    </div>

                    <div class="text-center mt-2">
                        Don't have an account?
                        <a href="#">Register</a>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

</body>
