<?php

$db = mysqli_connect('localhost', 'root', '', 'phpcrud');
session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body >

<div style="display: flex;
justify-content: space-evenly;" >
<div>
    <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Device</a>
</div>
<div >
    <a href="search.php" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Find your phone</a>
</div>

</div>


<?php if (isset($_SESSION['message'])): ?>
    <div style="margin: 30px auto;
    padding: 10px;
    border-radius: 5px;
    color: white;
    background: darkgray;
    border: 1px solid #3c763d;
    width: 30%;
    text-align: center;">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM mobile"); ?>

<div style=" margin: 50px">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" style="text-align: center">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Features</th>
            <th scope="col">Read more</th>
            <th colspan=""scope="col">Action</th>
        </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td style= "font-weight: bold; text-align: center"><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['features']; ?></td>
                <td><?php echo $row['more']; ?></td>
                <td>
                    <a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-success" >Edit</a>
                </td>
                <td>
                    <a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>