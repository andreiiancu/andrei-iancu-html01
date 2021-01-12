<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href= 'style.css'></link>
</head>
<body >
  <?php
  include 'headerparohii.php';
  ?>

<br> <br> <br>
 <section
      id="contact"
      class="contact badge-info"
    >
      <div
        class="container"
        data-aos="fade-up"
      >

        <div class="section-title">
          <h3><span class="text-dark">Contact</span></h3>
          <p>Pentru orice nelămurire ne poți găsi la adresa și contactele de mai jos.</p>
        </div>

        <div
          class="row "
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <div class="col-lg-6 ">
            <div class="info-box mb-4">
              <i class="bx bx-map text-light"></i>
              <h3 class="text-light">Adresa noastră</h3>
              <p class="text-light">Str. Mihai Viteazul, nr. 21, Agnita, jud. Sibiu, cod poștal: 555100</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 ">
            <div class=" info-box mb-4 ">
              <i class="bx bx-envelope text-light"></i>
              <h3 class="text-light">Email-ul nostru</h3>
              <a
              class="text-light"
               href="mailto:"              >
                protopopiatul_agnita@yahoo.com</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 ">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call text-light"></i>
              <h3 class="text-light">Sună-ne</h3>

              <a class="text-light" href="tel:+">
                0269 510 325</a>
            </div>

          </div>

        </div>

        <div
          class="row"
          style="margin-top: 30px;"
          data-aos="fade-up"
          data-aos-delay="100"
        >

          <div class="col-lg-12 ">

            <iframe class=" col-lg-12"
              class="mb-4 mb-lg-0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2772.7751659941027!2d24.616641315574665!3d45.975749979110404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c8195b22544ab%3A0x5db2c07acac21867!2sProtopopiatul%20Ortodox%20Rom%C3%A2n%20Agnita!5e0!3m2!1sen!2sro!4v1608636697515!5m2!1sen!2sro"
              width="600"
              height="450"
              frameborder="0"
              style="border:0;"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </div>

          <div class="col-lg-12"
          style="margin-left: 10px;"
          >
            <form
              action="forms/contact.php"
              method="post"
              role="form"
              class="php-email-form"
            >
              <div class="form-row">
                <div class="col form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="Please write something for us"
                  placeholder="Message"
                ></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


<!-- email-validation -->

<!-- email-validation -->

<?php
  include 'search.php';
  ?>
<?php
  include 'footer.php';
  ?>
</body>
</html>
