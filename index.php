<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arithmetic Operations </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f9;
    }
    .calculator {
      background: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 400px;
      text-align: center;
    }
    h1, h2 {
      color: #333;
    }
    input, button {
      margin: 10px 0;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: calc(100% - 22px);
    }
    button {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
    #resultBox {
      background: #e9ecef;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <h1>Arithmetic Operations</h1>
    <form method="POST">
      <input type="number" name="num1" placeholder="Enter first number" required>
      <input type="number" name="num2" placeholder="Enter second number" required>
      <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["calculate"])) {
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];

          // Perform all operations
          $addition = $num1 + $num2;
          $subtraction = $num1 - $num2;
          $multiplication = $num1 * $num2;
          $division = $num2 != 0 ? $num1 / $num2 : "Error (division by zero)";

          // Display results
          echo "<div id='result'>
                  <h2>Results</h2>
                  <p>Addition: $addition</p>
                  <p>Subtraction: $subtraction</p>
                  <p>Multiplication: $multiplication</p>
                  <p>Division: $division</p>
                </div>";
      }
    ?>
  </div>
</body>
</html>