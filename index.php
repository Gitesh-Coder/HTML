<?php
// Process the form if it has been submitted
$total = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eraser = max(0, intval($_POST['eraser'])) * 10;
    $sharpener = max(0, intval($_POST['sharpener'])) * 15;
    $pen = max(0, intval($_POST['pen'])) * 20;
    $pencil = max(0, intval($_POST['pencil'])) * 25;

    $total = $eraser + $sharpener + $pen + $pencil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>

    <form action="" method="post">
        <div>
            <label>
                Eraser - 10
                <input type="number" name="eraser" value="0" min="0">
            </label>
        </div>
        <div>
            <label>
                Sharpener - 5
                <input type="number" name="sharpener" value="0" min="0">
            </label>
        </div>
        <div>
            <label>
                Pen - 20
                <input type="number" name="pen" value="0" min="0">
            </label>
        </div>
        <div>
            <label>
                Pencil - 15
                <input type="number" name="pencil" value="0" min="0">
            </label>
        </div>
        <button type="submit">Confirm Order</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Your total is: <strong>$<?php echo htmlspecialchars($total); ?></strong></p>
    <?php endif; ?>

    <p>Note: The total will be calculated on the server after submission.</p>
</body>
</html>
