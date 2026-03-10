
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
                <div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <button onclick="login()" type="submit" class="btn btn-primary btn-login">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    async function login() {
        let email = document.getElementById('email').value;
        if (email.length === 0) {
            alert("Email Required !");
            return;
        } else {
            // SHOW LOADER
            $(".preloader").fadeIn(200).removeClass('loaded');
            let res = await axios.get("/UserLogin/" + email);
            if (res.status === 200) {
                sessionStorage.setItem('email', email);
                setTimeout(function(){
                  window.location.href = "/verify-page";
                },3000);
                
            }else{
                alert("Something Went Wrong");
                // HIDE LOADER
        $(".preloader").fadeOut(200).addClass('loaded');
            }
        }
    }
</script>
