<!-- Pricing -->
<div id="products" class="cards-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="turquoise mb-5">SAFE APPAREL PRODUCTS</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <?php
      $i = 0;
      if (isset($all_product)) {
        foreach (array_reverse($all_product) as $value) {
          $i++;
      ?>
          <div class="col-lg-4 col-md-6">
            <!-- Card-->
            <div class="card">
              <div class="card-body">
                <div class="card-title" style="text-transform: uppercase;"><?php echo $value->pro_title; ?></div>
                <!-- <div class="card-subtitle">Protective clothing</div> -->
                <hr class="cell-divide-hr">
                <div class="card-image">
                  <div class="image-container">
                    <img class="img-fluid" src="<?php echo base_url() . $value->pro_image; ?>" alt="alternative">
                  </div> <!-- end of image-container -->
                </div>
                <ul class="list-unstyled li-space-lg">
                  <?php echo $value->pro_desc; ?>
                </ul>
                <div class="button-wrapper">
                  <a class="btn-solid-reg popup-with-move-anim request-product-btn" href="#details-lightbox-1" data-product="<?php echo $value->pro_title; ?>">REQUEST</a>
                </div>
              </div>
            </div> <!-- end of card -->
            <!-- end of card -->
          </div>
      <?php }
      } ?>
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of pricing -->

<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="container">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <h2 class="text-center turquoise">QUOTE REQUEST</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Contact Form -->
        <form id="contactForm" data-toggle="validator" data-focus="false">
          <div class="form-group">
            <input type="text" class="form-control-input" id="cname" required>
            <label class="label-control" for="cname">Company/Organization Name</label>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control-input" id="cemail" required>
            <label class="label-control" for="cemail">Email</label>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <select class="form-control-input" name="cproduct" id="cproduct" required>
              <?php
              $i = 0;
              if (isset($all_product)) {
                foreach (array_reverse($all_product) as $value) {
                  $i++;
              ?>
                  <option value="<?php echo $value->pro_title; ?>"><?php echo $value->pro_title; ?></option>
              <?php }
              } ?>
            </select>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <input type="number" class="form-control-input" id="cquantity" required>
            <label class="label-control" for="cquantity">Quantity</label>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <select class="form-control-input" name="ccountry" id="ccountry" required>
              <option value="Kenya" selected>Kenya</option>
              <option value="Burundi">Burundi</option>
              <option value="Ethiopia">Ethiopia</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Somalia">Somalia</option>
              <option value="South Sudan">South Sudan</option>
              <option value="Rest of Africa">Rest of Africa</option>
            </select>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control-textarea" id="cmessage" required></textarea>
            <label class="label-control" for="cmessage">Your message</label>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group checkbox">
            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree
            with Sarai Afrique's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <button type="submit" class="form-control-submit-button">SUBMIT REQUEST</button>
          </div>
          <div class="form-message">
            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
          </div>
        </form>
        <!-- end of contact form -->

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 1 -->