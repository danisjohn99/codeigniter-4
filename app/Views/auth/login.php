<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
/* Full height layout */
.auth-wrapper {
    min-height: 85vh;
}

/* Left side branding */
.auth-left {
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: #fff;
    border-radius: 20px 0 0 20px;
    padding: 50px;
}

.auth-left h1 {
    font-weight: 700;
}

.auth-left p {
    opacity: 0.9;
}

/* Right side form */
.auth-right {
    background: #fff;
    border-radius: 0 20px 20px 0;
    padding: 40px;
}

/* Card feel */
.auth-box {
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    border-radius: 20px;
    overflow: hidden;
}

/* Buttons */
.btn-dark {
    border-radius: 10px;
    padding: 10px;
    font-weight: 600;
}

/* Social buttons */
.social-btn {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 10px;
    width: 100%;
    background: #fff;
    transition: 0.2s;
}

.social-btn:hover {
    background: #f8f9fa;
}

/* Animation */
.fade-in {
    animation: fadeIn 0.6s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(15px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media(max-width: 768px){
    .auth-left {
        display: none;
    }
    .auth-right {
        border-radius: 20px;
    }
}
</style>

<div class="container auth-wrapper d-flex align-items-center justify-content-center">

    <div class="row w-100 auth-box fade-in">

        <!-- LEFT SIDE -->
        <div class="col-md-6 d-flex flex-column justify-content-center auth-left">
            <h1>Welcome Back 🚀</h1>
            <p class="mt-3">
                Manage your dashboard, posts and users in one place.
            </p>

            <div class="mt-4">
                <small>✨ Secure Login</small><br>
                <small>⚡ Fast Dashboard</small><br>
                <small>🔒 Protected System</small>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-6 auth-right">

            <h4 class="mb-4 fw-bold text-center">Sign In</h4>

            <form method="post" action="/loginAuth">

                <!-- Email -->
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    <label for="email">Email address</label>
                </div>

                <!-- Password -->
                <div class="form-floating mb-3 position-relative">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>

                    <span onclick="togglePassword()" 
                          style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer;">
                        👁️
                    </span>
                </div>

                <!-- Options -->
                <div class="d-flex justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Remember me</label>
                    </div>
                    <!-- <a href="#" class="text-decoration-none">Forgot?</a> -->
                </div>

                <!-- Login -->
                <button class="btn btn-dark w-100">Login</button>

            </form>

            <!-- Register -->
            <div class="text-center mt-3">
                <small>
                    Don't have an account?
                    <a href="/register" class="fw-semibold text-decoration-none">Register</a>
                </small>
            </div>

        </div>

    </div>

</div>

<script>
function togglePassword() {
    const input = document.getElementById("password");
    input.type = input.type === "password" ? "text" : "password";
}
</script>

<?= $this->endSection() ?>