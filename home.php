<?php
    session_start();
    if(isset($_SESSION['email'])){
        echo "<script>location.href='/dashboard.php'</script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BudgetBuddy</title>
    <link rel="stylesheet" href="/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg p-2">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">BudgetBuddy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item p-1"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item p-1"><a class="nav-link" href="/login.php">Login</a></li>
                    <li class="nav-item p-1"><a class="btn get-strd-btn" href="/registrationn.php">Get Started</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="text-center py-5">
        <div class="container-lg">
            <h1 class="display-1 text-bold">Take Control of Your Finances Today!</h1>
            <p class="lead">Track your income, expenses, and savings all in one place.</p>
            <div class="text-center"><img src="/assets/money.png" class="img-fluid mx-auto" alt="Responsive image"></div>
            <a href="/registrationn.php" class="btn get-strd-btn btn-lg my-5 px-4 mx-2">Get Started</a>
            <a href="#features" class="btn lrn-btn btn-lg mx-2">Learn More</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="py-5 ">
        <div class="container text-center">
            <h2 class="mb-4">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <i class="bi bi-graph-up fs-1"></i>
                    <h5 class="mt-3">Track Expenses</h5>
                    <p>Manage your income and expenses effortlessly.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-wallet2 fs-1"></i>
                    <h5 class="mt-3">Set Budgets</h5>
                    <p>Stay on top of your financial goals.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-bar-chart-line fs-1"></i>
                    <h5 class="mt-3">Generate Reports</h5>
                    <p>Analyze spending trends with easy-to-understand reports.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-white text-center py-3">
        <p>&copy; 2025 BudgetBuddy | All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
