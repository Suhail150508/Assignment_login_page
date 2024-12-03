<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow" style="width: 25rem; border-radius: 10px;">
            <img src="assets/images/login_image.jpg" class="card-img-top" alt="Banner Image" style="object-fit: cover; height: 150px;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center py-5">
                    <h5 class="card-title mb-0">Sign In</h5>
                    <div>
                        <a href="#" class="me-2 text-decoration-none text-dark"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-decoration-none text-dark"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3 position-relative">
                        <input type="password" class="form-control" name="password" placeholder="Password" required id="password">
                        <button type="button" class="btn btn-light position-absolute" style="top: 0; right: 0; height: 100%; border: none;" id="togglePassword">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Sign In</button>
                </form>
                <div class="d-flex justify-content-between mt-3">
                    <div>
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="#" class="text-decoration-none">Forgot Password</a>
                </div>
                <div class="text-center mt-3">
                    <small>Not a member? <a href="#" class="text-decoration-none">Sign Up</a></small>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type',
            type);
        const icon = this.querySelector("i");
        icon.classList.toggle("fa-eye");
        icon.classList.toggle("fa-eye-slash");
    });
</script>
