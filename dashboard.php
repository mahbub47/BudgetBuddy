<?php
    include 'php/config.php';
    session_start();
    if(!isset($_SESSION['email'])){
        echo "<script>alert('login first')</script>";
        echo "<script>location.href='/login.php'</script>";
    }

    $usermail = $_SESSION['email'];
    $user = mysqli_query($conn,"SELECT `id` FROM `users` WHERE `email` = '$usermail'");
    $rowuser = $user->fetch_assoc();
    $userid = $rowuser['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BudgetBuddy</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/dashboard.js"></script>
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
                    <li class="nav-item mx-2"><a class="nav-link" href="#" onclick="showForm()">Add Expense</a></li>
                    <li class="nav-item mx-2"><a class="nav-link" href="#expense">View Expenses</a></li>
                    <li class="nav-item mx-2"><a class="nav-link" href="#">Profile</a></li>
                    <li class="nav-item mx-2"><a class="nav-link btn logout-btn px-3" href="/php/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Add expense form -->
    <div class="container-lg py-5 add-expense-form" id="add-expense-form">
        <h3>Add Expense</h3>
        <form method="POST" action="/php/addexpense.php">
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Enter category" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
            </div>
            <div class="mb-3">
                <label for="expense_date" class="form-label">Expense Date</label>
                <input type="date" class="form-control" id="expense_date" name="expense_date" required>
            </div>
            <button type="submit" class="btn edt-btn">Add Expense</button>
        </form>
        <button class="btn my-3 edt-btn" onclick="closeForm()">Close</button>
    </div>

    <!-- Dashboard Content -->
    <div class="container py-5" id="expense">
        <h2 class="text-center mb-4">Manage your finance</h2>
        <div class="row">
            <!-- Overview Section -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Expenses</h5>
                        <p class="card-text display-6">৳ 25,000</p>
                        <a href="#" class="btn edt-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Budget Remaining</h5>
                        <p class="card-text display-6">৳ 10,000</p>
                        <a href="#" class="btn edt-btn">Update Budget</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Expenses This Month</h5>
                        <p class="card-text display-6">৳ 5,000</p>
                        <a href="#" class="btn edt-btn">View Breakdown</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Transactions -->
        <div class="mt-5">
            <h3>Recent Transactions</h3>
            <table class="table">
                <thead class="">
                    <tr>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $allData = mysqli_query($conn,"SELECT * FROM `expenses` WHERE `user_id` = '$userid'");
                    while($row = $allData->fetch_assoc()){
                        echo
                        "<tr>
                            <td>$row[expense_date]</td>
                            <td>$row[category]</td>
                            <td>৳$row[amount]</td>
                            <td>
                                <a class='btn edt-btn' href='update.php?id=$row[id]'>Update</a>
                                <a class='btn dlt-btn' href='/php/deleteexpense.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>";
                    }
                ?>
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
