<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
.auth-wrapper {
    min-height: 85vh;
}

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

.auth-right {
    background: #fff;
    border-radius: 0 20px 20px 0;
    padding: 40px;
}

.auth-box {
    box-shadow: 0 20px 60px rgba(0,0,0,0.15);
    border-radius: 20px;
    overflow: hidden;
}

.btn-success {
    border-radius: 10px;
    padding: 10px;
    font-weight: 600;
}

.fade-in {
    animation: fadeIn 0.6s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(15px); }
    to { opacity: 1; transform: translateY(0); }
}

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
            <h1>Create Account ✨</h1>
            <p class="mt-3">
                Join us and start managing your data efficiently.
            </p>

            <div class="mt-4">
                <small>🚀 Fast Setup</small><br>
                <small>🔒 Secure System</small><br>
                <small>📊 Easy Dashboard</small>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-6 auth-right">

            <h4 class="mb-4 fw-bold text-center">Register</h4>

            <form method="post" action="/store">

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                    <label for="name">Full Name</label>
                </div>

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

                <!-- Register -->
                <button class="btn btn-success w-100">Create Account</button>

            </form>

            <!-- Login -->
            <div class="text-center mt-3">
                <small>
                    Already have an account?
                    <a href="/login" class="fw-semibold text-decoration-none">Login</a>
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