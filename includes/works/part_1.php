
<?php while (($cat = mysqli_fetch_assoc($result))) {
  $title = $cat['title'];
  $description = $cat['description'];
?>
 <div class="elementor-element elementor-element-4df5ec4 e-con-boxed e-con price-table" data-id="4df5ec4" data-element_type="container" data-settings="{" content_width":"boxed"}">
    <div class="e-con-inner ">
      <div class="elementor-element elementor-element-a86c736 e-con-full e-con " data-id="a86c736" data-element_type="container" data-settings="{" content_width":"full"}">
        <div class="elementor-element elementor-element-739b16c elementor-align-left elementor-tablet-align-center bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list" data-id="739b16c" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
        <h4 class="title-price bdt-fancy-list-title">
          <?php echo "$title";?><span class="title-descr bdt-fancy-list-text "><?php echo " $description"; ?></span></h4>

        </div>
      </div>

      <div class="top_price">

      <div class="cell_1 values-price elementor-element elementor-element-fc7ad8b e-con-full e-con" data-id="fc7ad8b" data-element_type="container" data-settings="{" content_width":"full","background_background":"classic"}">
        <div class="elementor-element elementor-element-085298f elementor-align-center bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list" data-id="085298f" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
          <div class="elementor-widget-container">
            <div class="bdt-fancy-list bdt-list bdt-fancy-list-group">
                <div class="bdt-fancy-list-wrap">
                    <div class="bdt-flex flex-wrap">
                    <div class="bdt-fancy-list-content">
                    <h4 class="bdt-fancy-list-title">
                          <?php echo $cat['master'] ?> </h4>
                        <p class="bdt-fancy-list-text">
                          Майстер</p>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cell_1 values-price elementor-element elementor-element-ca86653 e-con-full e-con" data-id="ca86653" data-element_type="container" data-settings="{" content_width":"full","background_background":"classic"}">
        <div class="elementor-element elementor-element-085298f elementor-align-center bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list" data-id="085298f" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
          <div class="elementor-widget-container">
            <div class="bdt-fancy-list">
                  <div class="bdt-fancy-list-wrap">
                    <div class="bdt-flex flex-wrap">
                      <div class="bdt-fancy-list-content">
                        <h4 class="bdt-fancy-list-title">
                          <?php echo $cat['top-master'] ?> </h4>
                        <p class="bdt-fancy-list-text">
                          Топ-майстер
                        </p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cell_1 values-price elementor-element elementor-element-6fae554 e-con-full e-con" data-id="6fae554" data-element_type="container" data-settings="{" content_width":"full","background_background":"classic"}">
        <div class="elementor-element elementor-element-085298f elementor-align-center bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list" data-id="085298f" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
          <div class="elementor-widget-container">
            <div class="bdt-fancy-list">
                  <div class="bdt-fancy-list-wrap">
                    <div class="bdt-flex flex-wrap">
                      <div class="bdt-fancy-list-content">
                        <h4 class="bdt-fancy-list-title">
                          <?php echo $cat['seo'] ?> </h4>
                        <p class="bdt-fancy-list-text">
                          Керівник</p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
<?php
}
?>