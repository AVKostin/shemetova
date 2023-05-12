<?php
while (($cat = mysqli_fetch_assoc($result))) {
  $title = $cat['title'];
  $description = $cat['description'];
?>
<div class="table_container">
  <div class="table_price">

      <div class="str_1 title-price bdt-fancy-list-title"> <h4 class="title-price bdt-fancy-list-title">
                  <?php echo "$title";?>
                  <span class="title-descr bdt-fancy-list-text "><?php echo " $description"; ?></span>
                </h4>
      </div>

      <div class="top_price">
        <div class="str_2">
        <div class="price_block">
        <p class="cell_1 values-price"><?php echo $cat['master'] ?>
            </p>
            <p class="cell_2 values-price1">Майстер
            </p>
        </div>
        <div class="price_block">
        <p class="cell_1 values-price"><?php echo $cat['top-master'] ?>
            </p>
            <p class="cell_2 values-price1">Топ-майстер
            </p>
        </div>
        <div class="price_block">
        <p class="cell_1 values-price"><?php echo $cat['seo'] ?>
            </p>
            <p class="cell_2 values-price1">Керiвник
            </p>
        </div>
        </div>
      </div>

  </div>
</div>
  <?php
}
  ?>