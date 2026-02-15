
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  padding: 0;
  margin: 0;
}
.container-sec {
  background-color: #ffffff;
  border-radius: 8px;
  padding: 20px;
  margin-top: 30px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  max-width: 600px;
}
.otp-code {
  font-size: 24px;
  font-weight: bold;
  background-color: #f8f9fa;
  padding: 15px;
  text-align: center;
  border-radius: 8px;
  border: 1px dashed #007bff;
  color: #007bff;
}
.btn-verify {
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  background-color: #007bff;
  border-radius: 6px;
  text-decoration: none;
  font-weight: bold;
}
.footer-text {
  color: #6c757d;
  font-size: 14px;
  text-align: center;
  margin-top: 20px;
}
.footer-text a {
  color: #007bff;
  text-decoration: none;
}
.otp-lock {
  color: #333;
  font-size: 80px;
}
.welcome-section {
  background: #144fa9db;
  padding: 30px;
  border-radius: 4px;
  color: #fff;
  font-size: 20px;
  margin: 20px 0px;
}
.welcome-text {
  font-family: monospace;
}
.app-name {
  font-size: 30px;
  font-weight: 800;
  margin: 7px 0px;
}
.verify-text {
  margin-top: 25px;
  font-size: 25px;
  letter-spacing: 3px;
}
i.fas.fa-envelope-open {
  font-size: 35px !important;
  color: #ffffff;
}

</style>

<body>
  <div class="container-sec">
    <div class="text-center">
      <div><i class="fas fa-lock otp-lock"></i></div>
      <div class="welcome-section">
        <div class="app-name">
          --- APP NAME ---
        </div>
        <div class="welcome-text">
          Thanks for signing up !
        </div>

        <div class="verify-text">
          Please Verify Your Email Address
        </div>
        <div class="email-icon">
          <i class="fas fa-envelope-open"></i>
        </div>

      </div>
      <h2>Hello, [User's Name]</h2>
      <p>Your One-Time Password (OTP) for verification is:</p>
      <div class="otp-code">{{ $details['code'] }}</div>
      <p class="mt-4">Please use this OTP to complete your verification. The OTP is valid for the next 10 minutes.</p>
      <a href="#" class="btn-verify">Verify Now</a>
    </div>
    <div class="footer-text">
      <p>If you did not request this OTP, please <a href="#">contact us</a> immediately.</p>
      <p>Thank you,<br>The [Your Company] Team</p>
    </div>
  </div>
</body>

