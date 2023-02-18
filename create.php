<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'phpcrud');
include 'json/json_connection.php';

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $features = $_POST['features'];
    $more = $_POST['more'];

    mysqli_query($db, "INSERT INTO mobile (name, price, features, more) VALUES ('$name', '$price','$features','$more')");
    $_SESSION['message'] = "Device was saved";
    header('location: table.php');
}
?>
<head>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>


<div style="margin-left: 200px; margin-right: 200px">
<form method="post" action="create.php" >
         <p style="font-weight: bold;">
            Add phone to DB table
        </p>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name..." value="">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" class="form-control" name="price" placeholder="Price..." value="">
    </div>
    <div class="form-group">
        <label>Features</label>
        <textarea type="text" class="form-control" name="features" placeholder="Features..." value=""></textarea>
    </div>
    <div class="form-group">
        <label>Read more</label>
        <input type="text" class="form-control" name="more" placeholder="Read More..." value="">
    </div>
    <div class="input-group">
            <button class="btn" type="submit" name="save" >Save</button>
    </div>


</form>

</div>