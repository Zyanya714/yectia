<?php require_once("layout/header.php"); ?>
<div class="container">
  <div class="row">
    <div class="col-md-2 col-12">
      <?php require_once("layout/sidenav.php"); ?>
    </div>
    <div class="col-md-10 col-12">
      <div class="container-fluid py-4">
        <div class="card box-content">
          <div class="card-body p-3">
            <div class="container">
              <h3 class="px-4 mt-4 titulo-seccion">Apoyo al cuidador</h3>
              <div class="container-wrapper-genially" style="position: relative; min-height: 400px; max-width: 100%;"><video class="loader-genially" autoplay="autoplay" loop="loop" playsinline="playsInline" muted="muted" style="position: absolute;top: 45%;left: 50%;transform: translate(-50%, -50%);width: 80px;height: 80px;margin-bottom: 10%">
                  <source src="https://static.genial.ly/resources/loader-default.mp4" type="video/mp4" />Your browser does not support the video tag.
                </video>
                <div id="613995d98a420c0d2ab3b527" class="genially-embed" style="margin: 0px auto; position: relative; height: auto; width: 100%;"></div>
              </div>
              <script>
                (function(d) {
                  var js, id = "genially-embed-js",
                    ref = d.getElementsByTagName("script")[0];
                  if (d.getElementById(id)) {
                    return;
                  }
                  js = d.createElement("script");
                  js.id = id;
                  js.async = true;
                  js.src = "https://view.genial.ly/static/embed/embed.js";
                  ref.parentNode.insertBefore(js, ref);
                }(document));
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once("layout/footer.php"); ?>