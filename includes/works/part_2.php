<?php
while (($cat = mysqli_fetch_assoc($result))) {
  $title = $cat['title'];
  $description = $cat['description'];
?>
<div class="table_container">
  <div class="table_price">
      <div class="str_1 title-price bdt-fancy-list-title"> <h4 class="price_single title-price bdt-fancy-list-title">
                  <?php echo "$title";?>
                  <span class="title-descr bdt-fancy-list-text "><?php echo " $description"; ?></span>
                </h4>
      </div>
      <div class="top_price">
        <div class="str_2">
        <div class="price_block">
        <p class="cell_1 values-price"> <?php echo $cat['price'] ?>
        </div>
      </div>
      </div>

  </div>
</div>
  <?php
}
  ?>