<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Noiștat</title>
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
          <h3><span>Parohia Ortodoxă Noiștat</span></h3>
          <p> Biserica „Sf. Arhangheli Mihail şi Gavriil”</p>
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
              <p>Localitatea Noiștat, jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-light" href="mailto:">
                  orosrazvan30@yahoo.com
                 </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Sună</h3>

              <a class="text-light  " href="tel:+">
              0761639721
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Noistat/noistat-profil.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:scale-down "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul  „Sf. Arhangheli Mihail şi Gavriil” Noiștat</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Noistat/profil-preot.jpg" style="height:30rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Răzvan-Ioan OROS</h3>
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
             Numele satului nu s-a schimbat de-a lungul istoriei, păstrându-se denumirea inițială tradusă în diferite limbi: „în dialectul săsesc Naerscht, în germană Neustadt, în trad. Orașul Nou, în maghiară Újváros ” .
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
            Satul Noiștat, care este situat în partea de estică  a teritoriului administrativ al județului Sibiu, făcând parte din comuna Iacobeni pe lângă alte sate, anume: Movile, Netuș, Iacobeni și Stejeriș, aflându-se la o distanță de 18 Km de orașul Agnita și 26 Km de orașul cetate, Sighișoara, iar ca localizare GPS, având coordonatele: Latitudine N 46o 3ʹ 14ʺ și Longitudine E 24o 47ʹ 38ʺ. Satul Noiștat „este pentru prima oară atestat în anul 1355 sub numele de Nous villa” , iar din punct de vedere administrativ, „până în 1867, Noiştat a aparţinut de scaunul Cincu Mare. După 1867, va intra în componenţa judeţului Târnava Mare. În 1899 prin Regulamentul de organizare al judeţului Târnava Mare, Noiştatul va aparţine de plasa Agnita” . În 1500, se menţionează că în Noiştat locuiau 45 de gospodari, un dascăl, 3 păstori şi 2 săraci întreţinuţi de obşte. Sunt menţionate 4 gospodării pustii. Între anii 1760 şi 1762 la conscripţia românilor efectuată din ordinul generalului austriac Buccow sunt menţionate în Noiştat 20 de familiei ortodoxe, fără preot şi fără biserică.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              De-a lungul timpului în Noiştat au existat familii de tâmplari, care încă fabricau mobilă ţărănească, pe care le pictau în culori vii pe un fond albastru, iar în 1880, „funcţiona o moară cu apă cu o singură pereche de pietre, transformată ulterior în moară cu aburi” .
              La recensământul efectuat în  anul 1920 existau 181 de case cu 552 locuitori, din care 211 români şi restul sași, iar la recensământul din 2011 există 181 de case cu 502 locuitori, dintre care de etnie rromă 263 și români 239; de credință ortodoxă sunt 452, iar Penticostali ”pocăiți” sunt 50.
            </p>


            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
            Biserica ortodoxă română cu hramul "Sf. Arhangheli  Mihail şi Gavriil", a fost construită în anul 1820, prin osteneala și dărnicia obștei, a credincioșilor din această filie. De menționat este faptul că Biserica din Noiștat a fost filie a Parohiei Movile de la începuturile ei până în 15 noiembrie 1998 când a devenit parohie de sine stătătoare, primul preot paroh fiind Cezar Teodor Bulgariu .
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Biserica este zidită din piatră şi cărămidă, fiind în formă de corabie, mică şi simplă, cu tavanul drept şi acoperişul prevăzut cu un turn mic din lemn care serveşte drept clopotniţă, având două clopote mici. Naosul este despărţit de altar printr-un perete de zid.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>: Nu este pictată.
           </p>

           <p style="text-align:justify; text-indent: 5ch;">
             În 2009,  preotul  Ioan Popescu, împreună cu Consiliul Parohial, analizând starea bisericii, care era într-un avansat grad de degradare, s-a efectuarea mai multe reparații, astfel: începând din 2009, s-a realizat drenajul Bisericii, s-a turnat șapă și s-a pus scândură, instalația electrică pe cupru cu siguranțe automate, pregătirea bisericii pentru pictură frescă, Pictarea întregii Bisericii ( 200 m2) în tehnica frescă, de către pictorul Gheorghe Țivrea, refacerea antreului, a clopotniței, refacerea întregului exterior al bisericii (tencuirea zidurilor cât și zugrăvirea pe o suprafață 160 m2); s-a refăcut acoperișul bisericii cu țiglă nouă, punerea de scocuri noi, s-a amenajat interiorul ( mobilier nou sculptat – analog, Sf. uși împărătești, strană, etc.), mochetă în întreaga biserică. În anul 2013 pe data de 22 septembrie, biserica din satul Noiștat a fost Sfințită de către IPS Laurențiu Streza, Arhiepiscopul Sibiului și Mitropolitul Ardealului.
            </p>



            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: Nu există.</p>

            <p style="text-align:justify; text-indent: 5ch;">
             Biserica din Noiştat deţine următoarele obiecte de valoare: Mântuitorul cu viţe de vie, icoană pe sticlă; Sf. Vasile cel Mare, icoană pe sticlă; Sf. Ierarh Nicolae, icoană pe sticlă; Sf. Mucenic Gheorghe, icoană pe sticlă; Maica Domnului, icoană pe sticlă. Icoanele au fost donate de credincioşi. Atât locul, cât şi numele pictorilor este necunoscut.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>


          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

           <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
            Preoţii slujitori administratori au fost: Macedon Grecu; Dan Pompiliu; Apolinarie Siceanu; Ioan Rohan; Aron Rebegel; Mircea Stoia (1978–1992); Teofil Gârbacea (1995–1998); Adrian Moldovan (2004 – 2005); Nicolae-Pavel-Zian Streza (2019- 2020).
           </p>


            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Preoţii slujitori parohi au fost: Cezar Teodor Bulgariu (1998–2004); Liviu Prunea (2005–2007); Ioan Popescu  (2009-2017); Răzvan-Ioan Oros .
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Parohia Noiștat are un cimitir în suprafață de 5000 mp.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educativ naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu caracter misionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale.
            </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 452 credincioşi.
            </p>



          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Noiștat</i>;
  </li>

    <li>
     2. Nicolae Stoicescu, <i>Repertoriul Bibliografic al Localităților și Monumentelor medievale din Transilvania</i>, Vol. II, Editura Andreiana, Sibiu 2013;
  </li>
    3. <i>http://bisericifortificatesasesti.blogspot.ro/2011/11/noistat-neustadt-jud-sibiu.html</i>.
  <li>

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
              src="../protopopiatul agnita/assets/img/poze__parohii/Noistat/noistat-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Noistat/noistat-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Noistat/noistat-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Noistat/noistat-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
             </li>
             <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Noistat/noistat-profil.jpg"
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
