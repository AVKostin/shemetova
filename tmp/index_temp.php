<?php include('./src/config.php'); ?>
<?php
$result = mysqli_query($connection, "SELECT * FROM `works`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title class="title"><?php echo $config['title']; ?></title>
  <link rel="stylesheet" href="css/css_temp.css">

</head>

<h1 class="title"><?php echo $config['title']; ?></h1>
<?php
while (($cat = mysqli_fetch_assoc($result))) {
?>
<div id="table-container1">
  <div class="table">
    <div class="str_1 title-price bdt-fancy-list-title"><?php echo $cat['title'] ?></div>
    <div class="str_1 title-descr title-descr bdt-fancy-list-text"><?php echo $cat['description'] ?></div>
    <div class="top_price">
      <div class="str_2">
        <div class="cell_1 values-price"><?php echo $cat['master'] ?><div class="cell_2 values-price1">мастер</div></div>
        <div class="cell_1 values-price"><?php echo $cat['top-master'] ?><div class="cell_2 values-price1">топ-мастер</div></div>
        <div class="cell_1 values-price"><?php echo $cat['seo'] ?><div class="cell_2 values-price1">шеф</div></div>
      </div>
    </div>
  </div>
  <?php
}
  ?>

  </body>

</html>
<?php
mysqli_close($connection)
?>