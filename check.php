<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
       <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
</head>
<body>
    <h2>Simple Calculator</h2>
    <form style="width:640px;background-color:white" class="shadow px-3" method="post" >
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Num1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="num1" required>
 
  </div>
  
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Num2</label>
    <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num2" required>

    <!-- <form method="post"> -->
        <!-- <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
         -->
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if($_POST['calculate']){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = "";

        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "sub":
                $result = $num1 - $num2;
                break;
            case "mul":
                $result = $num1 * $num2;
                break;
            case "div":
                if ($num2 == 0) {
                    $result = "Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Invalid operation!";
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>