<?php
    session_start();
    if(!isset($_SESSION['email'])){
        echo "<script>alert('login first')</script>";
        echo "<script>location.href='/login.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BudgetBuddy</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">BudgetBuddy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2"><a class="nav-link active" href="#">Dashboard</a></li>
                    <li class="nav-item mx-2"><a class="nav-link" href="#">Add Expense</a></li>
                    <li class="nav-item mx-2"><a class="nav-link" href="#">View Expenses</a></li>
                    <li class="nav-item mx-2"><a class="nav-link" href="#">Profile</a></li>
                    <li class="nav-item mx-2"><a class="nav-link btn logout-btn px-3" href="/php/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Welcome Back, [Username]!</h2>
        <div class="row">
            <!-- Overview Section -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Expenses</h5>
                        <p class="card-text display-6">৳ 25,000</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Budget Remaining</h5>
                        <p class="card-text display-6">৳ 10,000</p>
                        <a href="#" class="btn btn-success">Update Budget</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Expenses This Month</h5>
                        <p class="card-text display-6">৳ 5,000</p>
                        <a href="#" class="btn btn-info">View Breakdown</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="mt-5">
            <h3>Recent Transactions</h3>
            <table class="table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-01-17</td>
                        <td>Groceries</td>
                        <td>৳ 1,200</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-01-15</td>
                        <td>Transport</td>
                        <td>৳ 500</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2025-01-10</td>
                        <td>Dining</td>
                        <td>৳ 2,300</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 BudgetBuddy | All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
