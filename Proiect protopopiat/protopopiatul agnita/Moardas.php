<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Moardăș</title>
</head>
<body>
  <?php
include_once 'headerparohii.php';
?>
 <section
      id="about"
      class="about section-bg col-lg-12"
      style="margin-top: 6rem;
      background-color: transparent;
      "

    >
      <div
        class="container"
        data-aos="fade-up"
      >

        <div class="section-title">
          <h2 class="border-bottom-danger text-secondary"
          style="
        border-radius:none;
        background-color: transparent;
        border-bottom: 2px red solid;
        "
          > Protopopiatul Ortodox Agnita</h2>
          <h3><span>Parohia Ortodoxă Moardăș</span></h3>
          <p> Biserica „Înălţarea Domnului”</p>
       </div>

       <!-- contact -->
        <div
          class="row "
          style="
          margin-left:1rem;
          width: 70rem;
          "
          data-aos="fade-up"
          data-aos-delay="100"
          >
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map w-100"></i>
              <h3>Adresa</h3>
              <p>Localitatea Moardăș, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                  constantinpalade91@yahoo.com
                 </a>
             </div>
          </div>

          <div class="col-lg-2 col-md-4"
          style="margin-right: -1px;"
          >
            <div class="info-box  mb-4 ">
              <i class="bx bx-phone-call ml-5"></i>
              <h3 class="ml-5">Sună</h3>

              <a class="text-secondary ml-5 w-60" href="tel:+">
              0753450277
              </a>

            </div>
            </div>
            </div>
            <!-- end-contact -->

        <div class="row">
          <div
            class="col-lg-12 "
            data-aos="zoom-out"
            data-aos-delay="100"
            style="background-color:gainsboro"
          >
            <img
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-front-image.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain "
              alt=""

            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul hramul “ Înaltarea Domnului” Moardăș</i></span>
          </div>
          <div
            class=" bg-light article-content col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify"
            data-aos="fade-up"
            data-aos-delay="100"
          >


<!--=====share-social=====-->
         <?php
          include 'share__buttons.php';
         ?>
<!--=====social-share=====-->

<!--====foto-priest=====-->
           <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <img src="../protopopiatul agnita/assets/img/poze__parohii" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr.  Constantin PALADE</h3>
                    <ul class="social">

                    </ul>
                </div>
            </div>
        </div>
</div>

<style>

  .demo{ background: #e5e5e5; }
.our-team{
    border: 2px solid #ff3232;
    border-radius: 10px;
    text-align: center;
    margin: 10px;
    z-index: 1;
    position: relative;
}
.our-team:before,
.our-team:after{
    content: "";
    width: 100%;
    height: 104%;
    background: #ff3232;
    position: absolute;
    top: 50%;
    left: 0;
    z-index: -1;
    transform: translateY(-50%) scaleX(0.3);
    transition: all 0.3s ease 0s;
}
.our-team:after{
    width: 106%;
    left: 50%;
    transform: translate(-50%, -50%) scaleY(0.25);
}
.our-team:hover:before{ transform: translateY(-50%) scaleX(0.7); }
.our-team:hover:after{ transform: translate(-50%, -50%) scaleY(0.7); }
.our-team img{
    width: 100%;
    height: auto;
    border-radius: 10px;
    transition: all 0.3s ease 0s;
}
.our-team .team-content{
    width: 93%;
    padding: 25px 0 10px;
    background: #ff4444;
    position: absolute;
    bottom: 50px;
    left: 50%;
    opacity: 0.4;
    -webkit-clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
    clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
    transform: translateX(-50%);
    transition: all 0.3s cubic-bezier(0.5, 0.2,0.1,0.9);
}
.our-team:hover .team-content{
    bottom: 10px;
    opacity: 1;
}
.our-team .title{
    font-size: 25px;
    font-weight: 600;
    color: #fff;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin: 0;
}
.our-team .post{
    display: block;
    font-size: 16px;
    color: #fff;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.our-team .social{
    padding: 0;
    margin: 0;
    list-style: none;
}
.our-team .social li{
    display: inline-block;
    margin: 0 5px;
}
.our-team .social li a{
    display: block;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 50%;
    background: #fff;
    font-size: 20px;
    color: #ff3232;
    transition: all 0.3s ease 0s;
}
.our-team .social li{
    background: linear-gradient(to bottom,#ff3232, darkred);
    box-shadow: 0 0 0 5px rgba(255,255,255,0.3);
    color: #fff;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
</style>
        </div>
        <br>
    </div>

    <br> <br> <br>

</div>
          <!--=====end-foto-priest=====-->



            <h6 style="line-height: 1.2";>A. Istoricul comunității parohiale</h6>

             <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Numele localității</span>
           </p>

           <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
               Moardăş, ung. Mardos, germ. Mardisch, 1373 Mardisch, 1373 -1375 Ardesch, 1414 Argias, 1415 Argyas, 1480 Ardyan, 1750 Moardos, 1760-1762 Mordisch, 1850 Argyes, 1854 Mardos, Mardisch, Moardeş;
            </p>



             <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Prezentarea generală a localităţii (geografic, istorico-demografic, archeologic, cultural, economic)</span>
           </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
                Mai demult localitatea se numea Mardeşu, Argheş (în dialectul săsesc Muardesch, Muerdesch, în germană Mardisch, în maghiara Mardos). Localitatea se află la 20 km E de Șeica Mare în direcţia Agnita, într-o zonă împădurită. Până la Agnita sunt circa 30 km şi până la Mediaș sunt circa 45 km, iar până la Sibiu, 50 km.
              Se pare că denumirea localităţii are origini cumane, care a fost preluată de maghiari şi transmisă saşilor ca Ardesch, devenită ulterior Mardisch. Prima menţiune este din 1373, prvind numirea unui preot, Michael de Ardesch.
            </p>

              <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Se pare că denumirea localităţii are origini cumane, care a fost preluată de maghiari şi transmisă saşilor ca Ardesch, devenită ulterior Mardisch. Prima menţiune este din 1373, prvind numirea unui preot, Michael de Ardesch.
           </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             În 1516, cu ocazia primului recensământ, localitatea este menţionată ca o comună liberă aparţinând de Scaunul Șeica, având 40 de capi de familie (gospodării), trei văduve, un cioban, un morar şi un învăţător.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Pe harta din 1532, întocmită de Johannes Honterus, localitatea era menţionată ca fiind cea mai mică din Scaunul Şeica, cu numai 35 de capi de familie. La mijlocul secolulul al IX-lea, în Moardăş au fost recenzaţi 545 de locuitori, saşi, români, unguri şi ţigani. În 1930, au fost recenzaţi 628 de locuitori, din care 328 saşi şi 239 români.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            La sfârşitul lunii ianuarie 1945, mulţi locuitori saşi au fost deportati în Uniunea Sovietica la muncă forţată.
            Într-o notă întocmită de primărie în 9 noiembrie 1946, situaţia saşilor din Moardăş era următoarea: 262 la casele lor, 44 la muncă forţată în URSS, 45 plecaţi în Germania.
            După Revoluţia din 1989, aproape toţi saşii din Moardăş au emigrat în Germania.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Date istorice referitoare la o anterioară biserică  celei actuale nu se cunosc, desi tradiția spune ca în vechiul cimitir comunal ar fi existat o bisericuță din lemn de proporții reduse. Biserica actuală a fost construită în anul 1820 în timpul păstoririi preotului Ștefan Raica, care a păstorit între anii 1818-1854.
              Arhitectura (plan, dimensiuni, material de construcţie) Biserica este construită din cărămidă, cu fundație din piatră, fiind acoperită cu tiglă. Stilul construcției este tipic ardelenesc, în forma de nava, cu tavanul în semicerc, simplu fără arcuituri și fără pictură. Fondurile necesare ridicării bisericii au provenit din contribuțiile credincioșilor puțini la număr și din colecta efectuată prin țară.
            </p>

             <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             Biserica a fost renovată în întregime sub preotul Grigore Hampu, în anul 1940, atât în interior, cât și în exterior, la interior s-a confectionat întreg mobilierul: strane, iconostas, ferestre. Tot atunci biserica a fost zugrăvită în interior și exterior.
             În anul 1977, în timpul păstoririi Pr. Virgil Vasu, clădirea bisericii a fost dotată cu paratrăsnet și cu instalație electrică. Biserica a fost renovată în interior și exterior în anul 1981.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Biserica a fost renovată din nou în întregime, sub preotul Cristian Lazar, în anul 2015, atât în interior, cât și în exterior, la interior s-a confecționat: ferestre noi, dușumea nouă din scândură de brad și o ușă nouă din stejar, biserica a fost zugrăvită în interior și exterior păstrându-se caracteristicile bisericii vechi.
              Alte date referitoare la construcția bisericii nu se cunosc.
            </p>



            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Nu este cazul;
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: Nu există.</p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: Nu există.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Ștefan Raica (1818-1854), Ioan Munteanu (1854-1872), Samoila Sabo (1872-1876), Ioan Sancu (1876-1887), Marian Paculea (1887-1889), Aurel Hulea (1889-1893), Nicolae Stoian (1893-1894), Ioan Vlad (1894-1895), Bazilu Oprea (1895-1905), Gheorghe Vamos (1905-1910), Gheorghe Spineanul (1910-1924), Silviu Raica (1924-1926), Grigore Hampu (1926-1974), Virgil Vasu (1974-1988), Dancu Aurel (1988-2008), Cristian Lazar (2008-2018), Rareș-George Dușescu- administrator (2018 prezent);
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Parohia Ortodoxă Română Moardăș deține un cimitir parohial în suprafață de 30  ari.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 38.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">
           Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>


           <p class="col-lg-12" style="text-indent: 5ch;">
           Activităţi pastoral-misionare, culturale, editorial, filantropice, catehetice ş.a. Sprijinirea în măsura posibilităților a persoanelor vârstnice și a celor ce se confruntă cu grave probleme sociale;
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Moardăş</i>;
  </li>
</ul>
</p>

          <br>
</div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <section
    style="
    height: 70rem;
    ">

    <div class="carousel"
    style="
    height: 45rem;
    padding-bottom: 3rem;
    "
    >

    <div
    style="
    display:flex;
    justify-content:center;
    "

    ><h4 class="border-botoom text-secondary "
      style="
      display:flex;
      justify-content: center;
      border-bottom:pink 1px solid;
      width:10rem;

      "
      >Galerie foto</h4>
    </div>

      <button class="carousel_button carousel_button--left"
      style="
      background-color: transparent;
      border: red solid 1px;
      "
      >
        <img

          src="../protopopiatul agnita/assets/img/svg/back.svg"
          alt=""
        >
      </button>

      <div class="carousel_track-container bg-light" style="background-color: rgba(34, 34, 34, 0.267);">
        <ul class="carousel_track">
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            </li>
                      <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            </li>
                      <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-5.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-6.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            </li>
                      <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas/moardas-7.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Moardas//moardas-8.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            </li>

        </ul>

      </div>
      <button class="carousel_button carousel_button--right"
      style="
      background-color: transparent;
      border: red solid 1px;
      "
      >
        <img
          src="../protopopiatul agnita/assets/img/svg/forward.svg"
          alt=""
        >
      </button>
      <div class="carousel_nav">
        <button class="carousel_indicator current-slide"></button>
        <button class="carousel_indicator"></button>
         <button class="carousel_indicator"></button>
         <button class="carousel_indicator"></button>
         <button class="carousel_indicator"></button>
         <button class="carousel_indicator"></button>
         <button class="carousel_indicator"></button>
         <button class="carousel_indicator"></button>
      </div>
    </div>
    <!--END CARUSEL-->
  </section>
                  <!--=====Carusel=====-->

<?php
include_once 'footer.php';
?>
</body>
</html>
