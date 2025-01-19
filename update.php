<?php
    include 'php/config.php';
    $id = $_GET['id'];

    $dataFetchQuery = "SELECT * FROM `expenses` WHERE `id` = '$id'";
    $record = mysqli_query($conn,$dataFetchQuery);
    $data = mysqli_fetch_array($record);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="/css/update.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Update expense form -->
    <div class="container-lg py-5 update-expense-form" id="update-expense-form">
        <h3>Update Expense</h3>
        <form method="POST" action="/php/updateexpense.php">
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="updatecategory" name="category" placeholder="Enter category" value="<?php echo $data['category'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="updateamount" name="amount" placeholder="Enter amount" value="<?php echo $data['amount'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="expense_date" class="form-label">Expense Date</label>
                <input type="date" class="form-control" id="updateexpense_date" name="expense_date" value="<?php echo $data['expense_date'] ?>" required>
                <input type="hidden" name='id' value="<?php echo $data['id'] ?>">
            </div>
            <button type="submit" class="btn edt-btn">Update Expense</button>
        </form>
        <button class="btn my-3 edt-btn" onclick="closeUpdateForm()">Close</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>