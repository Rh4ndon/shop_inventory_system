<?php 
 @include '../models/dbcon.php';
 if (isset($_POST['add'])) {
                           
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $name = strtoupper($name);
    $brand= strtoupper($brand);
    $qnt = $_POST['quantity'];
    $rprice = $_POST['rprice'];
    $price = $_POST['price'];


    mysqli_query($conn,"insert into products (product_name,product_brand,quantity,retail_price,price)
				values ('$name','$brand','$qnt','$rprice','$price')") or die(mysqli_error()); ?>

                                <script>
							 	window.location = "../assistant/assistant_dashboard.php";
                                alert('Product Added');
								</script>






<?php }



@include '../models/dbcon.php';
if (isset($_POST['sell'])) {
                          
   $name = $_POST['product_name'];
   $brand = $_POST['product_brand'];
   $name = rtrim(strtoupper($name));
   $brand= rtrim(strtoupper($brand));
   $qnt = $_POST['quantity'];
   $customer = $_POST['customer'];


   date_default_timezone_set('Asia/Manila');
    $day = date("m-d-Y");  
    $timestamp = strtotime("$day");
    $dayss = filter_var($day, FILTER_SANITIZE_STRING);

    $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
	$result = mysqli_query($conn,$query_product)or die(mysqli_error());
	$row = mysqli_fetch_array($result);
	$num_row = mysqli_num_rows($result);
    $p_id = $row['id'];
    $total = $row['quantity'] - $qnt;

    $rprice = $row['retail_price'];
    $price = $row['price'];
    $profit = $price - $rprice;

    if( $num_row > 0 ) {



        mysqli_query($conn,"insert into transactions (product_name,product_id,product_brand,quantity,retail_price,price,profit,customer,day)
        values ('$name','$p_id','$brand','$qnt','$rprice','$price','$profit','$customer','$day')") or die(mysqli_error()); 
    mysqli_query($conn,"update products set quantity = '$total' where id = '$p_id' ")or die(mysqli_error());
              ?>
               

                               <script>
                                window.location = "../cashier/cashier_dashboard.php";
                               alert('Product Sold');
                               </script>






<?php }else{?>
    <script>
                                window.location = "../cashier/cashier_dashboard.php";
                               alert('Transaction Failed Cant Find Product');
                               </script>


<?php
} }

@include '../models/dbcon.php';
if (isset($_POST['order'])) {
                          
   $name = $_POST['product_name'];
   $brand = $_POST['product_brand'];
   $name = strtoupper($name);
   $brand= strtoupper($brand);
   $qnt = $_POST['quantity'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uid = $_POST['u_id'];


    date_default_timezone_set('Asia/Manila');
    $day = date("m-d-Y");  
    $timestamp = strtotime("$day");
    $dayss = filter_var($day, FILTER_SANITIZE_STRING);

    $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
	$result = mysqli_query($conn,$query_product)or die(mysqli_error());
	$row = mysqli_fetch_array($result);
	$num_row = mysqli_num_rows($result);
    $p_id = $row['id'];
    $rprice = $row['retail_price'];
    $price = $row['price']; 

    if( $num_row > 0 ) {

        mysqli_query($conn,"insert into orders (product_name,product_id,product_brand,retail_price,price,quantity,u_id,fname,lname,day,status)
        values ('$name','$p_id','$brand','$rprice','$price','$qnt','$uid','$fname','$lname','$dayss','Pending')") or die(mysqli_error()); 
    
              ?>
               

                               <script>
                                window.location = "../user/user_dashboard.php";
                               alert('Order Sent');
                               </script>






<?php }else{?>
    <script>
                                window.location = "../user/user_dashboard.php";
                               alert('Transaction Failed Cant Find Product');
                               </script>


<?php
} }

@include '../models/dbcon.php';
 if (isset($_POST['delete'])) {
                           
    $del_id = $_POST['del_id'];
    
    


    mysqli_query($conn,"DELETE from products WHERE id=$del_id") or die(mysqli_error()); ?>

                                <script>
							 	window.location = "../assistant/assistant_dashboard.php";
                                alert('Product Deleted');
								</script>






<?php }

@include '../models/dbcon.php';
 if (isset($_POST['edit'])) {
                           
    $edit_id = $_POST['del_id'];
    
?>

                                <script>
							 	window.location = "../assistant/edit.php?id=<?php echo $edit_id; ?>";
								</script>






<?php }

@include '../models/dbcon.php';
 if (isset($_POST['save'])) {
                           
    $name = $_POST['product_name'];
    $brand = $_POST['product_brand'];
    $name = strtoupper($name);
    $brand= strtoupper($brand);
    $qnt = $_POST['quantity'];
    $rprice = $_POST['rprice'];
    $price = $_POST['price'];
    $product_id = $_POST['product_id'];

    mysqli_query($conn,"update products set product_name = '$name',product_brand = '$brand',quantity = '$qnt', retail_price = '$rprice', price = '$price' where id = '$product_id'")or die(mysqli_error());
     ?>

                                <script>
							 	window.location = "../assistant/assistant_dashboard.php";
								</script>






<?php }
@include '../models/dbcon.php';
if (isset($_POST['confirm'])) {
                          
   $name = $_POST['product_name'];
   $brand = $_POST['product_brand'];
   $name = strtoupper($name);
   $brand= strtoupper($brand);
   $qnt = $_POST['quantity'];
   $order_id = $_POST['order_id'];
   $customer = $_POST['customer'];


    date_default_timezone_set('Asia/Manila');
    $day = date("m-d-Y");  
    $timestamp = strtotime("$day");
    $dayss = filter_var($day, FILTER_SANITIZE_STRING);

    $query_product = "SELECT * FROM products WHERE product_name LIKE '$name' AND product_brand LIKE '$brand'";
	$result = mysqli_query($conn,$query_product)or die(mysqli_error());
	$row = mysqli_fetch_array($result);
	$num_row = mysqli_num_rows($result);
    $p_id = $row['id'];
    $total = $row['quantity'] - $qnt;

    $rprice = $row['retail_price'];
    $price = $row['price'];
    $profit = $price - $rprice;

    if( $num_row > 0 ) {



        mysqli_query($conn,"insert into transactions (product_name,product_id,product_brand,quantity,retail_price,price,profit,customer,day)
        values ('$name','$p_id','$brand','$qnt','$rprice','$price','$profit','$customer','$dayss')") or die(mysqli_error()); 
    mysqli_query($conn,"update products set quantity = '$total' where id = '$p_id' ")or die(mysqli_error());
    mysqli_query($conn,"update orders set status = 'Done' where order_id = '$order_id' ")or die(mysqli_error());

              ?>
               

                               <script>
                                window.location = "../cashier/cashier_dashboard.php";
                               alert('Product Sold');
                               </script>






<?php }else{?>
    <script>
                                window.location = "../cashier/cashier_dashboard.php";
                               alert('Transaction Failed Cant Find Product');
                               </script>


<?php
} }







?>







