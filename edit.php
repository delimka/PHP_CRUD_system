<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'phpcrud');
include 'json/json_connection.php';

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $record = mysqli_query($db, "SELECT * FROM mobile WHERE id=$id");


        $n = mysqli_fetch_array($record);
        $name = $n['name'];
        $price = $n['price'];
        $features = $n['features'];
        $more = $n['more'];


}


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $features = $_POST['features'];
    $more = $_POST['more'];

    mysqli_query($db, "UPDATE mobile SET name='$name', price='$price', features ='$features', more='$more' WHERE id=$id");
    $_SESSION['message'] = "Device was updated!";
    header('location: table.php');
}
?>

<head>
 <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<div style="margin-left: 200px; margin-right: 200px">
<form  method="post" action="edit.php" >

        <p style="font-weight: bold;">
            Update phone : <?php echo $name?>
        </p>

    <div class="edit_table">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div  class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
    </div>
    <div  class="form-group">
        <label>Price</label>
        <input type="number" class="form-control" name="price" value="<?php echo $price; ?>">
    </div>
    <div  class="form-group">
        <label>Features</label>
        <textarea  name="features" class="form-control" value="<?php echo $features; ?>"></textarea>
    </div>
    <div  class="form-group">
        <label>Read more</label>
        <input type="text" name="more" class="form-control" value="<?php echo $more; ?>">
    </div>
    <div class="input-group">
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>

    </div>



</form>
</div>