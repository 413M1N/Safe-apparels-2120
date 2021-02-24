<!-- Header -->
<header id="header" class="header">
  <div class="header-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="text-container">
            <h6><span class="gold">SARAI AFRIQUE </span></h6>
            <h2><span class="turquoise">SAFE APPARELS</span></h2>
            <h5 class="white-text">Delivering quality and consistent Personal Protective Equipment</h5>
            <h5 class="white-text">Industry leading approach embracing best practices on a global level
              in selection, training and fit validation of PPE equipment </h5>
            <a class="btn page-scroll mt-5 btn-round" href="#ppe">
              <i class='fas fa-angle-down' style="font-size: 24px;"></i>
            </a>
          </div> <!-- end of text-container -->
        </div> <!-- end of col -->
        <div class="col-lg-6 d-none d-sm-block">
          <div class="image-container">
            <img class="img-fluid" src="<?php echo base_url('assets/images/safe-apparel.jpg') ?>" alt="alternative">
          </div> <!-- end of image-container -->
        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div>
    <!-- end of containerpng
  </div> <!- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->

<div id="ppe" class="cards-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="turquoise">PRODUCT CATALOGUE</h2>
        <p class="p-large">We have an extensive product catalogue of Safe Apparel
        </p>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <?php
              $i = 0;
              if (isset($all_product)) {
                foreach (array_slice($all_product, 9, 3) as $value) {
                  $i++;
              ?>
                  <div class="col-lg-4">
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
                      </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                  </div>
              <?php }
              } ?>
            </div> <!-- end of row -->
          </div>
          <div class="carousel-item">
            <!-- ROW 2 -->
            <div class="row">
              <?php
              $i = 0;
              if (isset($all_product)) {
                foreach (array_slice($all_product, 0, 3) as $value) {
                  $i++;
              ?>
                  <div class="col-lg-4">
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
                      </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->
                  </div>
              <?php }
              } ?>
            </div> <!-- end of row -->
          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <a class="btn-solid-reg btn-more" href="<?php echo base_url() ?>products">SEE ALL PRODUCTS</a>
    </div>
  </div> <!-- end of container -->
</div>
<!-- Services -->
<div id="about" class="cards-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="turquoise mb-5">ABOUT US</h2>
        <p class="p-large">Sarai Afrique Limited strives to be the leading fashion house in Africa
          by providing the highest quality products in the industry, continuously improving through
          innovation, embracing technological changes and demonstrating a commitment to the raising of
          apparel standards in Africa.</p>
        <p class="p-large">We have worked with clients from across all industries from
          Multinationals, Government, NG0s, Banks, Health Institutions, Telco Companies, Insurance
          Companies, Manufacturers and Retailers.</p>
        <!--<p class="p-large">Our strengths lie in our partnerships and access to large scale manufacturers-->
        <!--  who produce-->
        <!--  high quality approved PPE.</p>-->
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of services -->


<div class="basic-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="text-container">
          <h3 class="turquoise">MERITS</h3>
          <ul>
            <li class="list">Quality</li>
            <li class="list">Variety (a one-stop-shop)</li>
            <li class="list">Continous innovation and creativity</li>
            <li class="list">Quck turn around</li>
            <li class="list">Quick response</li>
            <li class="list">Right advice to suit your budget or target market</li>
            <li class="list">Wide range of supply chain partners</li>
          </ul>
          <!-- <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIGHTBOX</a> -->
        </div> <!-- end of text-container -->
      </div> <!-- end of col -->
      <br>
      <div class="col-lg-6 d-none d-sm-block">
        <div class="image-container">
          <img class="img-fluid" src="<?php echo base_url('assets/images/safe1.jpg') ?>" alt="alternative">
        </div> <!-- end of image-container -->
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->
<br>
<!--logo horizontally-->
<h2 class="center">  OUR CLIENTS </h2>
<div id="content1">
    <img src="<?php echo base_url('assets/logos/acdi.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/icm.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/epk.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/pwc.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/fine.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/ura.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/front.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/sarai.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/KQ.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/prim.png') ?>" class="images1" />
    <img src="<?php echo base_url('assets/logos/nor.png') ?>" class="images1" />


</div>


<!--end of logo horizontally-->
<br>
<br>
<br>
<!-- Video -->
<div class="basic-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="turquoise">Safe Apparels Videos</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">

        <!-- Video Preview -->
        <div class="image-container">
          <div class="video-wrapper">
            <a class="popup-youtube" href="<?php echo base_url('assets/images/out.mp4') ?>" data-effect="fadeIn">
              <img class="img-fluid" src="<?php echo base_url('assets/images/introframe.jpeg') ?>" alt="alternative">
              <span class="video-play-button">
                <span></span>
              </span>
            </a>
          </div> <!-- end of video-wrapper -->
        </div> <!-- end of image-container -->
        <!-- end of video preview -->

        <p>Safety video to show you our trainings on how to use our<strong>Safe Apparel</strong> and industry best practice methods</p>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of video -->

<!-- Contact -->
<div id="contact" class="form-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Contact Information</h2>
        <ul class="list-unstyled li-space-lg">
          <li class="address" >Don't hesitate to give us a call or send us a contact form message</li>

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
            with Sarai Afrique's stated <a class="white-text" href="privacy-policy.html">Privacy Policy</a> and <a class="white-text" href="terms-conditions.html">Terms Conditions</a>
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
<!-- end of contact -->
<!--start of pictures-->
<h2 class="turquoise">  WORKSHOP GALLERY </h2>
<div class="row1">
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo1.png') ?>" alt="Nature" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo2.png') ?>" alt="Snow" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo4.jpeg') ?>" alt="Mountains" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo3.png') ?>" alt="Lights" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo5.jpeg') ?>" alt="Lights" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo6.jpeg') ?>" alt="Lights" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo7.jpeg') ?>" alt="Lights" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo8.jpeg') ?>" alt="Lights" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo9.jpeg') ?>" alt="Lights" onclick="myFunction(this);">
  </div>
  <div class="column1">
    <img src="<?php echo base_url('assets/images/photo10.jpeg') ?>" alt="Lights" onclick="myFunction(this);">
  </div>
</div>

<!-- The expanding image container -->
<div class="container1">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>







<!--end of pictures-->

<!---//////////////////////////////////////-==========->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-380ea1c8-00ed-401c-b04d-bece7ad054d5"></div>
    </div>
  </div>
</div>
