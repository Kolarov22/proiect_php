<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>    
</head>
    <body>

        <h2> Welcome to your account </h2>



        <form method="POST" action="add_products.php">
            <input type="text" name="product" placeholder="Add product">
            <input type="text" name="price" placeholder="Add the price">
            <input type="submit" name="send" value="Add to cart">
        </form> 

        <?php
        require 'connect.php';
            session_start();
            if(isset($_SESSION['id'])){
                echo 'You are logged in as user ' . $_SESSION['user'];
            }
            $total = 0;
            $user = $_SESSION['user'];
            $select = "SELECT * FROM stock";
            $result = mysqli_query($conectare, $select);
                if ($result->num_rows > 0) {
                    echo "<table><tr><th>Product</th><th>Price</th></tr>";
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>".$row["product"]."</td><td>".$row["price"]."</td></tr>";
                            $total+= $row["price"];
                        }
                    echo "</table>";    
                }    
        ?>

        <tr> 
            <td>Total price</td>
            <td><?php echo $total; ?></td>

        </tr>
        <br>
        <br>
        <form method="POST" action="clear.php">
        <input type="submit" name="clear" value="Clear shopping list">
        </form>

    </body>
</html>    
