
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
                        <label class="form-label">Verification Code</label>
                        <input id="code" type="code" class="form-control" placeholder="Enter Verification Code">
                    </div>
                    <button onclick="verify()" type="submit" class="btn btn-primary btn-login">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    async function verify() {
        let code = document.getElementById('code').value;
        let email = sessionStorage.getItem('email');
        if (code.length === 0) {
            alert("Code Required !");
        } else {
            $(".preloader").fadeIn(200).removeClass('loaded');
            let res = await axios.get("/VerifyLogin/" + email+"/"+code);
            if (res.status === 200) {
              if(sessionStorage.getItem("last_location")){
                window.location.href=sessionStorage.getItem("last_location")
              } else{
                window.location.href="/"
              }
            
            }else{
                $(".preloader").fadeOut(200).addClass('loaded');
                alert("Something Went Wrong");
            }
        }
    }
</script>
