<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@stack('title')</title>

    <style>
        body {
            background: linear-gradient(135deg, #74ABE2 0%, #5563DE 100%);
            font-family: 'Poppins', sans-serif;
        }

        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .register-box {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            padding: 40px 35px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            animation: fadeIn 0.8s ease;
        }

        .register-box h2 {
            font-weight: 600;
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .register-box label {
            font-weight: 500;
            color: #444;
            font-size: 14px;
        }

        .register-box input {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px 15px;
            margin-top: 6px;
            margin-bottom: 14px;
            transition: all 0.3s;
            font-size: 14px;
        }

        .register-box input:focus {
            border-color: #5A67D8;
            box-shadow: 0 0 0 3px rgba(90, 103, 216, 0.2);
            outline: none;
        }

        .register-btn {
            width: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .register-btn:hover {
            background: linear-gradient(90deg, #5a67d8, #6b46c1);
        }

        .social-btn {
            width: 100%;
            border-radius: 10px;
            padding: 10px;
            color: #fff;
            font-weight: 500;
            border: none;
            margin-top: 12px;
            transition: transform 0.2s ease;
        }

        .social-btn:hover {
            transform: translateY(-2px);
        }

        .facebook-btn {
            background: #1877F2;
        }

        .twitter-btn {
            background: #1DA1F2;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .login-link a {
            color: #e53e3e;
            font-weight: 600;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    @stack('css')

</head>

<body>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>

   
    @stack('js')
</body>

</html>
<!-- end document-->