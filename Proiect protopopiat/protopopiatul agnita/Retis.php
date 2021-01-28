<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Retiș</title>
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
          <h3><span>Parohia Ortodoxă Retiș</span></h3>
          <p> Biserica „Sf. Nicolae”</p>
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
              <p>Localitatea Retiș, nr. 46, jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-light" href="mailto:">
                  petru_c2008@yahoo.com
                 </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Sună</h3>

              <a class="text-light  " href="tel:+">
              0743.673457
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-profil1.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain; "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul "Schimbarea la Față" Retiș</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Retis/preot-profil.jpg" style="height:23rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Petru-Cosmin DĂNILĂ</h3>
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
             Localitatea Retiş a fost cunoscută sub mai multe denumiri de-a lungul timpului: Retişdorf, Reteşdorf, Râtu, Rittersdorf, Reteschdorf, Retesdorf, Reten. Se pare că denumirea localităţii este legată de un anumit nume de familie, cum ar fi “satul lui Rether”.
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
             Satul Retiș, se află pe cursul superior al râului Hârtibaciu și, din punct de vedere administrativ, aparține de comuna Brădeni, situată în nord-estul judetului Sibiu. Satul Retiș se află în amonte pe stânga Hârtibaciului. Populația satului este compusă din români 90% și 10% minorități (țigani). Sași nu mai sunt în Retiș pentru că după 1990 au plecat toți în Germania. Acum majoritatea locuitorilor din Retiș sunt pensionari, iar cei care sunt în putere se ocupă cu agricultura și creșterea vitelor. Totdeauna, locuitorii Retișului au fost de religie ortodoxă, deși sectele au încercat să dezbine pe români, dar nu au reușit.
            </p>

             <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              În Retiș, tot timpul s-a păstrat tradiția românească și ortodoxă, retișenii fiind exemplu pentru satele din jur. Retișenii au fost și au rămas oameni harnici, despre aceasta vorbind starea caselor și a gospodăriilor lor. La sărbatori se îmbracă în port popular, fapt ce dă o notă cu totul aparte față de satele din jur.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Prima atestare documentară este în anul 1353, mențiunea aflându-se în scrierea regelui Ludovic I. Posesiunea Reter este localizată în Transilvania și aparține Scaunului de la Sighișoara.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Următorul izvor este din 1389, într-un document al Scaunului de la Cincu. Doi conți, Tilo și Ladislau, cărora le aparținea Retișul, au făcut o înțelegere cu comuna Selistadt, referitoare la o jumătate de moară și un iaz. Retișenii trebuiau să amenajeze pe domeniul nobililor un alt iaz, primind în schimb vechea moară și vechiul iaz.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Din secolul XIV, Retișul aparține ca enclavă comitatului Apold și se găsea între Scaunele săsești ale Sighișoarei. Într-un Capitoliu vechi, Retișul este inclus între comunitățile mici ale Capitoliului. În actele vechi ale școlii din Retiș, satul apare cu numele Retizdorf, apoi Reten și în cele din urmă cu numele de Retiș.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Intr-un document din 1417 aflat actual la muzeul Brukenthal din Sibiu, se spune că iobagii români din Retiș au luat parte la răscoala iobagilor din Comitatul Alba, condusă de Kardosi Janos. Documentul din 1620, aflat tot la muzeul Brukenthal din Sibiu, atestă că groful Haller, care avea o reședință la Albești și stăpânea și pământurile din partea Retișului, a hotărât mutarea iobagilor români de aici pe un alt domeniu al său de pe Mureș. Împotrivirea și dârzenia lor a făcut ca, la cei mutati acolo, să scadă natalitatea aproape la zero, fapt care l-a facut pe grof să-i aducă înapoi la locul de baștină.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Se spune din tradiție că, pentru îndârjirea lor în lupta împotriva iobăgiei, groful Haller ar fi hotărât odată să dea foc satului. Iobagii, auzind de acest lucru, au trimis câțiva delegați la Albești și acesta a fost înduplecat să nu recurgă la un asemenea gest.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Din tradiție se știe că terenurile cele mai bune au fost ale grofilor, printre care amintim cu numele pe Beldi Pall si Beldi Ladiszlau.
              Iobagii din Retiș și Țeline au participat la Adunarea de la Blaj din 1848, iar la întoarcere au strigat să vină acasă cei de pe câmp, că s-a pus iobăgia jos. In timp ce se ținea Adunarea de la Blaj din 1848, se spune ca groful de atunci ar fi avut voie să sape șanturi în jurul pământurilor sale, iar cele rămase se vor împărți iobagilor.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Tratamentul pe care grofii îl aplicau iobagilor era foarte aspru. Erau persecutați și din punct de vedere religios, trimițându-i  la muncă și în zilele de sărbătoare, chiar și în vinerea și în ziua de Paști. Unii se spune că luau pasti la pădure, unde le duceau câțiva bătrâni din sat.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Biserica veche din Retiș era de lemn, iar datorită vechimii și faptului că era mică, a fost demolată și în 1811 s-a zidit biserica actuală din piatră, cărămidă și lemn. Biserica are hramul Sf. Nicolae. Pe locul vechii biserici s-a ridicat o Cruce din stejar masiv pictată, care din 1985 este protejată în mod corespunzător.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              In anul 2010 s-a realizat drenaj, canalizare și pavaj în jurul bisericii, banii provenind de la Secretariatul de Stat pentru Culte din Bucuresti.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica actuală are formă de navă, interiorul are patru bolți, una în altar, două în naos și una în pronaos.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Între 1885 – 1890, biserica a fost legată în fier, de un meșter al cărui nume nu se cunoaște. Iconostasul este din cărămidă.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>:
           </p>

           <p style="text-align:justify; text-indent: 5ch;">
               Bolta din fața altarului și iconostasul au fost pictate în frescă de frații Grecu din Săsăuș între 1880 – 1890, Visarion Cătană din Retiș lucrând ca ajutor de pictor. La această pictură s-a intervenit în anii 1947, 1959, 1984. Restul bisericii n-a fost pictat, dar s-a pictat în frescă de către pictorul restaurator Nicolae Sava din București, între anii 1984 – 1988. Tot în această perioadă s-au făcut ferestre și uși noi la biserică. Reparații exterioare s-au efectuat la biserică în anii 1972 și 2006.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Biserica a fost sfințită de către episcopul Vasile Moga din Sibiu în 27 august 1823 și resfințită de către Preasfințitul Serafim Făgărășanul, episcop vicar la Sibiu, în 23 septembrie 1990.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Datorită vechimii, biserica este declarată monument istoric de categoria a III-a.  Actual, biserica este în stare bună.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Din 1993, credincioșii din Retiș au cumpărat biserica evanghelică, împreună cu casa parohială și anexele ce aparțin, cu perimetrul aferent de 0,52 ha în mijlocul satului. Actul între Episcopia Evanghelica C.A. din Sibiu si Parohia Ortodoxa Romana Retis s-a legalizat prin notariat în luna martie 1994, la Mediaș. Această biserică a fost construită în 1599, apoi s-a intervenit la ea în 1694, iar în 1835 s-a ridicat turnul.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              <p style="text-align:justify; text-indent: 5ch;">
              In anul 2006 cu acordul și cu cheltuiala credincioșilor din Retis, biserica s-a reparat la exterior, iar în 2009 și 2010 în interior, s-a făcut iconostas și s-au făcut picturi pe panouri mari în biserică, precum și alte modificări, pentru a putea fi folosită ca biserică ortodoxă. S-a făcut trotuar din beton în jurul bisericii și de la stradă până la biserică, prin curtea parohiei. După terminarea lucrărilor, la 28 august 2011 biserica a fost sfințită de Înaltpreasfințitul Laurențiu Streza, Arhiepiscopul Sibiului și Mitropolitul Ardealului.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              <p style="text-align:justify; text-indent: 5ch;">
                Hramul acestei biserici este Sfânta Treime. Credincioșii se bucură de acest fapt pentru că cei mai mulți sunt în vârstă și biserica este în centrul satului.
            </p>

            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: La biserica Sf.Nicolae din Retiș, clopotul mic este de la 1700, cu inscripția „Verbum Domini manet in aeternum”.  </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: Avem cărți vechi, în cirilică, editate înainte de 1900, care sunt destul de uzate.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>


             <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
             Cântăreți bisericești care au activat în Retiș, amintim: Cristian Zosim, Zosim Colceriu, Emil Pătru, Voinea Țânț (care activează și în prezent). Epitropi de seamă, amintim pe următorii: Ioan Dobre, Ioan Țânț, Ilarion Țânț, Ioan Mihai, Cornel Aroneasa, Ioan Rogoz, Ioan Baciu și Stelian Dărăbanț (care activează și astăzi).
           </p>
          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
            Ioan Popoviciu (1761-1779), Iosif Moise (1779-1799), Ioan Dobre (până în 1821), Zosim Dobre (1823-1844),Isaia Dobre (1844-1872), Crucean Mărgineanu (1873-1877), Nicolae Enciu (1877-1879), Ioan Manoviciu(1879-1917), Valeriu Cosma(1917-1918), Miron Neagu (1918-1919), Ioan Dobre (1920-1940), Alexandru Opriș (1940-1952), Filaret Costea (1953-1961), Gheorghe Gașpar (1962-1970), Ioan Scutea (1970- 2014), Petru Cosmin Dănilă (2014-prezent).
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
               Parohia deţine un cimitir în suprafaţă de 60 ari.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut: Nu se cunosc.</h6>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
           Numărul de credincioşi: 540 credincioşi.
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
            Activităţi pastoral-misionare, culturale, editorial, filantropice, catehetice ş.a.: programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educative naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu character misionar-filantropic organizate annual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave problem sociale.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Retiș</i>;
  </li>
  <li>
    2. NICOLAE STOICESCU, <i>Repertoriul bibliographic al localităţilor şi monumentelor medievale din Transilvania</i> , vol I, EdituraAndreiana, Sibiu, 2012;
  </li>
  <li>
    3. CORIOLAN SUCIU, <i>Dicționar istoric al localităților din Transilvania</i>, vol. I, Bucureşti, 1967.
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-5.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-6.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-7.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-8.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-profil.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Retis/retis-profil1.jpg"
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
