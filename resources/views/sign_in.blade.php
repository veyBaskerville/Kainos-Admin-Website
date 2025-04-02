<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    @vite(['resources/css/styles.scss', 'resources/js/app.js', 'resources/css/login.css']) 
</head>
<body class="bg" style="background-image: url('{{ asset('img/brgy1.jpg') }}');">
    
    <!-- SIGN UP -->
    <div class="overlay"></div>
    
    <!-- Login Container -->
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-container row w-75">
            <!-- Left Panel -->
            <div class="left-panel col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex align-items-center mb-4">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" width="100" height="100">
                    <h1 class="fw-bold me-4 text-secondary">iServeComembo</h1>
                </div>
                <br>
                <br>
                <h2 class="text-secondary">Welcome Back Admin!</h2>
                <p class="lead text-secondary">You can sign in to access with your existing account.</p>
            </div>

            <!-- Right Panel -->
            <div class="right-panel col-md-6 d-flex flex-column justify-content-center align-items-center">
                <h3 class="mb-4 fw-bold">Log-in</h3>
                <form class="login-form w-100" style="max-width:500px;">
                    <input type="email" class="form-control mb-3 input-outline" placeholder="Email" required>
                    <input type="password" class="form-control mb-3 input-outline" placeholder="Password" required>
                    <button type="submit" class="btn btn-primary w-50 d-grid mx-auto">Log-In</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>