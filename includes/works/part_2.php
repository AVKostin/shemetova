
<?php while (($cat = mysqli_fetch_assoc($result))) {
  $title = $cat['title'];
  $description = $cat['description'];
?>
<div class="elementor-element elementor-element-9a5f07b e-con-boxed e-con" data-id="9a5f07b"
  data-element_type="container" data-settings="{" content_width":"boxed"}">
  <div class="e-con-inner">
    <div class="elementor-element elementor-element-71bf59e e-con-full e-con" data-id="71bf59e"
      data-element_type="container" data-settings="{" content_width":"full","background_background":"classic"}">
      <div
        class="elementor-element elementor-element-336a931a elementor-align-left elementor-tablet-align-left bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list"
        data-id="336a931a" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
        <div class="elementor-widget-container">
          <div class="bdt-fancy-list">
            <ul class="bdt-list bdt-fancy-list-group">
              <li>
                <div class="bdt-fancy-list-wrap">
                  <div class="bdt-flex flex-wrap">
                    <div class="bdt-fancy-list-content">
                    <h4 class="bdt-fancy-list-title">
                          <?php echo "$title $description" ?>
                        </h4>
                        <p class="bdt-fancy-list-text"></p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="top_price">

    <div style="padding: 0;" class="cell_1 values-price elementor-element elementor-element-22685097 e-con-full e-con" data-id="22685097"
      data-element_type="container" data-settings="{" content_width":"full","background_background":"classic"}">
      <div
        class="elementor-element elementor-element-4acfbddf elementor-align-center bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list"
        data-id="4acfbddf" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
        <div
          style="background-color: #FFFFFF; width: 175px; height: 67px; display: flex; align-items: center; justify-content: center;"
          class="elementor-widget-container">
          <div class="bdt-fancy-list">
            <ul class="bdt-list bdt-fancy-list-group">
              <li>
                <div class="bdt-fancy-list-wrap">
                  <div class="bdt-flex flex-wrap">
                    <div class="bdt-fancy-list-content">
                      <h4 class="bdt-fancy-list-title">
                        <?php echo $cat['price'] ?> </h4>
                      <p class="bdt-fancy-list-text">
                      </p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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