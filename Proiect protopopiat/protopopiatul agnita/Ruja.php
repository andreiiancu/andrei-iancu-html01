<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Ruja</title>
</head>
<body>

<!--=====header=====-->
<?php
include_once 'headerparohii.php';
?>
<!--=====end-header=====-->

<!--=====about-section=====-->
 <section  id="about"
      class="about section-bg col-lg-12"
      style="margin-top: 6rem;
      background-color: transparent;
      ">

<!-- crux -->
 <div class="crux d-flex justify-content-center ">
   <img src="../protopopiatul agnita/assets/img/poze__parohii/cruce-logo-parohie.jpg" alt="" height="40px">
 </div>
 <!-- crux -->

<!--=====title-content=====-->
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
          <h3><span>Parohia Ortodoxă Ruja</span></h3>
          <p> Biserica „Buna Vestire”</p>
       </div>
<!--=====end-title-content=====-->


       <!-- contact -->
        <div
          class=" contact-priest  row  "

          data-aos="fade-up"
          data-aos-delay="100"
          >
          <div class=" subcontact col-lg-6 h-80">
            <div class="info-box mb-7">
              <i class="bx bx-map w-100"></i>
              <h3>Adresa</h3>
              <p>Localitatea Ruja,jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>E-mail</h3>
                <a class="text-light" href="mailto:">
                   parohia_ruja@yahoo.com
                </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Sună</h3>

              <a class="text-light  " href="tel:+">
               0761.784097
              </a>

            </div>
            </div>
            </div>
            <style>
               .contact-priest :hover {
                background-color: lightcoral;
                color: #fff;
              }

               .contact-priest {
                background-color: lightslategrey;
                color: #fff;
              }


            </style>
            <!-- end-contact -->

        <div class="row">
          <div
            class="front-image col-lg-12"
            data-aos="zoom-out"
            data-aos-delay="100"

            style="background-color:lightcoral; border:darkgrey  solid 10px;"
          >
            <img
              src="../protopopiatul agnita/assets/img/poze__parohii/Ruja/ruja-2.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain; "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul "Buna Vestire" Ruja</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Ruja/ruja-4.jpg" style="height:23rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Marius-Daniel REBEGEL</h3>
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


<!--=====content-text=====-->
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
               Numele sub care este menţionată localitatea de-a lungul timpului: Roseln, Riseln, Rîzeln, Rizln, Rosslen, Rosenthal, Rozsonda, Ruja.
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
               Localitatea este menționată documentar pentru prima dată într-un act official în anul 1349. Satul Ruja este situat la aproximativ 7 km spre nord-est de oraşul Agnita, de care aparține din punct de vederea dministrativ. Vatra satului este alungită circa 3 km pe doi afluenți mici  ai râului Hârtibaciu, unul dintre ei numindu-se după numele german al localității- Roseln. Satul are 3 ramificații, în forma literei T, asemănător multor sate  săsești din Podișul Hârtibaciului. Este un sat “linie”, în care casele sunt așezate unele lîngă altele sau curte lîngă curte. Relieful este unul deluros, clima temperată, cu vegetații diverse.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Actuala biserică, a fost construită în anul 1846, din piatră, cărămidă, lemn si țiglă, de către credincioșii satului Ruja, pe cheltuiala lor, sub atenta supraveghere a preotului Gavrilă Grecu.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Stilul construcției este bizantin, combinat cu unele elemente gotice, stil obișnuit în Ardeal. Biserica, are forma de navă, 19 m lungime,7 m lățime, fiind alcatuită din 4 bolți (inclusive altarul), despărțite prin arcade sprijinite pe stâlpi de zid.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>:
           </p>

           <p style="text-align:justify; text-indent: 5ch;">
             Pictura a fost realizată de pictorii Iosif și Ciresica Crainic din Sibiu între anii 1979-1981.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: Nu este cazul. </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: Nu este cazul.</p>

            <p style="text-align:justify; text-indent: 5ch;">
              Manuscrise și cărţi vechi: Se păstrează în arhiva parohială o Psaltire, de la 1863 şi un Ceaslov , tot din acelaşi an.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
               Cântăreți: Nicolae Grecu, Ioan Pintea, Nicolae Orlandea, Gavrilă Orlandea, Cornel Câmpu, Ionel Grusea, Ioan Morariu.
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Epitropi: Ioan Cândea, Nicolae Grecu, Ioan Pintea, Emanoil Grecu, Octavian Bologa, Dionisie Macavei, Cornel Câmpu, Oargă  Emil.
           </p>

             <br>
            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
             Gavrilă Grecu (1844-1891), Nicolae Babes (1893-1943), Traian Grecu (1946-1959), Ioan Mihălțan (1960-1970), Aron Ioan Rebegel (1970-1998), Marius Rebegel (1998-prezent).
           </p>


          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
               Parohia Ruja, dispune de două cimitire parohiale, unul in curtea bisericii și celălalt la marginea de nord a satului.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:</h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
          ..............................................................................
           </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch; text-align:justify;">
            Numărul de credincioşi: Actualmente, parohia Ruja are 220 de familii de credincioşi, aproximativ  850  de suflete.
          </p>


           <p class="col-lg-12" style="text-indent: 5ch;">
           Activităţi pastoral-misionare, culturale, editorial, filantropice, catehetice ş.a.: Programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educative naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de mini proiecte cu caracter misionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave problem sociale.
          </p>

          <br>
          <h6 style="line-height: 1.2";>Surse bibliografice:</h6>

      <p style="text-indent: 5ch;">
        <ul style="list-style-type: none;">
            <li>
              1. <i>Arhiva Parohiei Ortodoxe Ruja</i>;
          </li>
            <li>
              2. Corneliu Bucur, <i>Repere cultural-istorice ale civilizației multiculturale transilvănene- Valea Hârtibaciului</i>, Astra Museum, Sibiu, 2008;
          </li>
          <li>
            3. Cocean Pompei,  Filip Sorin, <i>Geografia Regională a României</i> , Editura Universitară Clujeană, 2011;
          </li>
          <li>
           </li>
            4. Florina Grecu, <i>Bazinul Hârtibaciului. Elemente de morfohidrografie</i> , Editura Academiei, Bucureşti, 1992;
            <li>
              5. Hermann Fabini, <i>Universul cetăților bisericești din Transilvania</i> , Editura Monumenta, Sibiu, 2009;
          </li>
          <li>
            6. Nicolae Stoicescu, <i>Repertoriul bibliographic al localităţilor şi monumentelor medievale din Transilvania</i> , vol I, EdituraAndreiana, Sibiu, 2012.
          </li>
        </ul>
      </p>

          <br>
</div>

          </div>
        </div>

      </div>
<!--=====end-content-text=====-->
    </section>
<!-- End About Section -->

<!--=====Carousel-foto=====-->
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Ruja/ruja-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ruja/ruja-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ruja/ruja-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ruja/ruja-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ruja/ruja-5.jpg"
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
      </div>
    </div>
  </section>
<!--=====end-Carousel=====-->


<!--=====footer=====-->
<?php
include_once 'footer.php';
?>
<!--=====end-footer=====-->
</body>
</html>
