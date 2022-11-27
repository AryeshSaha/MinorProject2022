<head>
    <link rel="stylesheet" href="../style/ForPass.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.js" integrity="sha512-nNH8gXanGmEPnnK9/yhI3ETaIrujVVJ7dstiVIwMtcfbcj1zzTlnH5whbsYhg6ihg5mFe1xNkPPLwCwwvSAUdQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Forgot Password</title>
</head>

<body>
    <div class="row">
        <h1>Forgot Password</h1>
        <h6 class="information-text">Enter your registered email to reset your password.</h6><br>
        <div class="form-group">

            <p><label for="username">Enter your active email</label></p>
            <input type="text" name="user_email" id="user_email" value required>
            <button name="enter_email" onclick="validate()">Submit</button><br><br>




            <p><label for="otp">Enter the OTP</label></p>
            <input type="otp" name="otp" id="otp">
            <button onclick="auth()">Verify</button>
        </div>
        <div class="footer">
            <h5>New here? <a href="signup.html" target="_blank">Sign Up</a></h5>
            <h5>Already have an account? <a href="login.html" target="_blank">Log In</a></h5>
        </div>
        <script>
            const otp = Math.trunc(Math.random() * (999999 - 111111) +
                111111)

            const validate = async () => {
                const email = document.getElementById('user_email').value;

                await axios.post(
                    `https://techwiithsuman-blog.herokuapp.com/api/v1/email/send-otp`, {
                        to: email,
                        message: `Your OTP is ${otp}`

                    }
                );
            }
            const auth = () => {
                const pass = Number(document.getElementById('otp').value);
                console.log(pass);
                console.log(otp);
                if (otp === pass) {
                    console.log('Match');
                    console.log(pass);
                    window.location.href = "./reset.php"
                }


            }
        </script>
    </div>
</body>