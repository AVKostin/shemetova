<?php while (($cat = mysqli_fetch_assoc($result))) {
?>

<div class="elementor-element elementor-element-8747c45 e-con-boxed e-con" data-id="8747c45"
  data-element_type="container" data-settings="{" content_width":"boxed"}">
  <div class="e-con-inner">
    <div class="elementor-element elementor-element-1abc2679 e-con-full e-con" data-id="1abc2679"
      data-element_type="container" data-settings="{" content_width":"full","background_background":"classic"}">
      <div
        class="elementor-element elementor-element-45647b98 elementor-align-left elementor-tablet-align-left bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list"
        data-id="45647b98" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
        <div class="elementor-widget-container">
          <div class="bdt-fancy-list">
            <ul class="bdt-list bdt-fancy-list-group">
              <li>
                <div class="bdt-fancy-list-wrap">
                  <div class="bdt-flex flex-wrap">
                    <div class="bdt-fancy-list-content">
                      <h4 class="bdt-fancy-list-title">
                        <?php echo $cat['title'] ?>
                      </h4>
                      <p class="bdt-fancy-list-text">
                        <?php echo $cat['description'] ?></p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div style="padding: 0;" class="elementor-element elementor-element-29953fb7 e-con-full e-con" data-id="29953fb7"
      data-element_type="container" data-settings="{">
      <div
        class="elementor-element elementor-element-418b3f5d elementor-align-center bdt-content-position--left elementor-widget elementor-widget-bdt-fancy-list"
        data-id="418b3f5d" data-element_type="widget" data-widget_type="bdt-fancy-list.default">
        <div
          style="background-color: #FFFFFF; width: 175px; height: 70px; display: flex; align-items: center; justify-content: center;"
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
<?php
}
?>