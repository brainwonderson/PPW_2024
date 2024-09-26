<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #EFF7F2;
        }

        .wrapper {
            width: 420px;
            padding: 30px;
            background: white;
            color: black;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .wrapper h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 5px;
            border: 2px solid #ccc; /* Menambahkan border */
            background: #fff;
            color: #333;
            border-radius: 5px;
            outline: none; /* Menghilangkan outline saat input di-focus */
        }

        .input-box input:focus {
            border-color: #333; /* Mengubah warna border saat input di-focus */
        }

        .input-box i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #333;
        }

        .remember-forgot {
            display: flex;
            color: black;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 20px;
        }


        .btn {
            width: 100%;
            background: #333;
            padding: 10px;
            border: none;
            color: #fff;
            font-size: 16px;
        }

        .register-link {
            color: black;

        }

        </style>
</head>

<body>
    <div class="wrapper">
        <form>
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" placeholder="User Name" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email Address" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember Me</label>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>Already have an account? <a href="{{ url('/login') }}">Log in</a></p>
            </div>
        </form>
    </div>
</body>
</html>