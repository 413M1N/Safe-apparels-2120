<!-- Contact -->
<div id="contact" class="form-2" style="margin-top: 4em">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Contact Information</h2>
        <ul class="list-unstyled li-space-lg">
          <li class="address">Don't hesitate to give us a call or send us a contact form message</li>

          <li><i class="fas fa-phone"></i><a class="white-text" href="tel:254796081493">+254796081493</a>
          </li>
          <li><i class="fas fa-envelope"></i><a class="white-text" href="mailto:info@safeapparels.com">info@safeapparels.com</a></li>
        <li><i class="fas fa-location"></i><a class="white-text" href="MPL Place,Kirichwa Rd">MPL Place,Kirichwa Rd</a></li>
        </ul>
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
            <input type="text" class="form-control-input" id="cphone" required>
            <label class="label-control" for="cphone">Phone</label>
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
            with Sarai Afrique's stated <a class="white-text" href="privacy-policy.html">Privacy Policy</a> and <a class="white-text"href="terms-conditions.html">Terms Conditions</a>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
          </div>
          <div class="form-message">
            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
          </div>
        </form>
        <!-- end of contact form -->

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of form-2 -->
