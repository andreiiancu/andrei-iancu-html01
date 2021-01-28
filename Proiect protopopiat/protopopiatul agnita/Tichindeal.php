<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Țichindeal</title>
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
          <h3><span>Parohia Ortodoxă Țichindeal</span></h3>
          <p> Biserica „Cuv. Paraschiva”</p>
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
              <p>Localitatea Țichindeal, jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>E-mail</h3>
                <a class="text-light" href="mailto:">
                  dorin_lkw@yahoo.de
                </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Telefon</h3>

              <a class="text-light  " href="tel:+">
               07473956928
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-4.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain; "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul "Cuv. Paraschiva" Țichindeal</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/preot.jpg" style="height:23rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Vasile-Dorin PURECE</h3>
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
            Denumirea localității Țichindeal, provine din prima atestare documentară din 1350, când apare sub denumirea de Sechendeal, adică Vale Siculorum sau Valea secuilor. Mai târziu, apărând și sașii pe aceste locuri i-au dat denumirea de Ziegenthal, adică Valea caprelor.
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
              Localitatea Țichindeal este situată într-o depresiune din Podișul Hârtibaciului. Din drumul județean Sibiu-Agnita, înainte de Mănăstirea Valea Hârtibaciului -Nocrich , se face o ramificație spre stânga, pe un drum comunal până în satul Țichindeal.
              Populația satului e de origine română, dar există și o minoritate destul de numeroasă de etnie romă. Ocupația de bază a țichindelenilor este creșterea animalelor. Cei mai mulți sunt crescători de oi și de capre, de unde derivă și denumirea satului de Valea caprelor.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Primii coloniști ai satului au fost secuii, dar într-un act din 1402 scrie că satul era locuit de coloniști sași.
              Prima biserică care a fost construită în Țichindeal a fost catolică. Sașii fiind în acea vreme de confesiune catolică. Ei au părăsit satul în anii 1703-1711.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Potrivit unei tradiții locale, primii români ce s-au așezat în Țichindeal au fost familiile: Dragoman, Tatu, Aron, Hidu, Ienciu și Mihai. Istoria populației românești din Țichindeal a început cu Absid Dragoman, venit aici din Banat.
              În 1488 a avut loc cel mai vechi recensământ al satului în care se specifica că existau 23 gospodării locuite.
              În 1771 s-a născut în familia Hidu, viitorul revoluționar Ioan Hidu, general al revoluției din 1848, care a murit luptând eroic pentru drepturile celor asupriți.
              Din punct de vedere cultural menționăm că în 1780, la Țichindeal, s-a deschis prima școală românească de pe Valea Hârtibaciului.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Primul învățător a fost Simion Mihai care ținea cursurile pe la casele particulare ale scriitorului Teodor Aron, la casa lui Dragoman și a lui Simion Giurgiu.
              În anul 1898 învățătorul Simion Dragoman este cel care a construit cu ajutorul material și financiar al locuitorilor, școala confesională.
              Astăzi în locul fostei școli confesionale funcționează căminul cultural.
              Dintre intelectualii satului care s-au afirmat în cultura românească, amintim pe Teodor Aron din familia protopopului Aron, născut în 1802.
              Teodor Aron este cunoscut prin scrierile sale despre “Originea românilor și încreștinarea românilor”, carte tipărită în  1850 la Budapesta.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Însă, cel mai important fiu al satului este omul de cultură, marele scriitor și reprezentant al iluminismului ardelean, Dimitrie Țichindeal un strănepot al lui Absid Dragoman. Dimitrie s-a născut la Țichindeal, dar din cauza asupririi românilor, a trebuit să se refugieze împreună cu părinții (tatăl său fiind preotul Zaharia), în Banat. Familia lui Dimitrie și-a schimbat atunci numele de familie din Dragoman în aceea de Țichindeal. Dimitrie Țichindeal, descris frumos în versuri de către Eminescu, a fost un scriitor și un traducător de valoare, într-o limbă curat românească.
            </p>

             <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             Ion Eliade Rădulescu îl număra printre luceferii Transilvaniei, alături de Gheorghe Lazăr, Petru Maior și Gheorghe Șincai.
             Satul Țichindeal a dat poporului român o seamă de bărbați vrednici de remarcat în viața publică, respectiv pe generalul Ion Hidu-Cluj și colonelul Ioan Hidu-Lugoj, care au semnat la Alba Iulia actul Unirii, din partea satului Țichindeal.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Din documentele și inscripțiile ce s-au păstrat, se afirmă că biserica a fost zidită în 1791, în mijlocul satului, lângă școală și cămin, cu cheltuiala credincioșilor. Cei mai renumiți fiind: Savu Banea, Petru Morar, Toma Petru, Ioan Banea, Toma Dragoman și Judele Simion Cloțan.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica a fost construită din cărămidă în anul 1791, în formă de corabie: altar, naos, pronaos și pridvor. Toate trei au semicalote. Pridvorul zidit cu stâlpi groși, susține turnul bisericii. Biserica are o lungime de 21,85 meri și o lățime de 574 metri și o suprafață de 125 metri pătrați.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>:
           </p>

           <p style="text-align:justify; text-indent: 5ch;">
              Pictura: La intrarea în biserică, pe partea dreaptă se află o pisanie, o inscripție, cu anii când s-a executat pictura bisericii 1815-1818.
              Biserica este declarată monument istoric și este pictată în frescă de către pictorii Ioan Grecu din Săsăuș și fratele său Alexandru.
              Pictura bisericii este cea originală și se crede că s-a executat cu întreruperi timp de 13 ani. Sunt reprezentate diverse scene din istoria biblică, din viața Mântuitorului și din viețile sfinților. Una dintre scenele cu un conținut semnificativ din punct de vedere social-național al poporului român este „Încoronarea cu cununa de spini”, prin care se face aluzie la Gheorghe Doja. Îl reprezintă pe Iisus în mantie roșie, împărătească, stând jos și cu mâinile legate. În stânga tabloului un grup de demnitari cu figuri răutăcioase îmbrăcați ca nobili ai regatului maghiar. În cadrul tabloului se desprinde mișcarea celor doi soldați îmbrăcați în uniforme de husari care dau un aspect dramatic scenei. Figura celui chinuit are o expresie de resemnare, în timp ce soldatul ține cu cleștele coroana de fier înroșită în foc și o fixează pe capul martirului.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Obiectele vechi de cult, icoanele și cărțile vechi se află în Colecția Muzeală de pe lângă biserica „Sfântul Nicolae” Agnita.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>:</p>

             <p style="text-align:justify; text-indent: 5ch;">
              Înscrieri sau inscripții: La intrarea în biserică se află o pisanie cu anii când s-a executat pictura bisericii, 1815-1818.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>

             <br>
            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Șirul preoților slujitori: În anul 1698 slujea la altarul bisericii protopopul Radu. După 1780 este cunoscut preotul Popa Ioan, după care urmează Ioan Banea. Succesorul său a fost preotul Ioan Tatu după care vine fiul său Ioan Tatu, căpitan erou, până în anul 1915, urmează Aron Mețian, iar apoi Ioan Cetean până în 1938, apoi Pompiliu Dan, iar apoi Apolinarie Seicean. În 1944 a fost Ioan Duță și după 1948 a slujit preotul fost unit, revenit la ortodoxie, Lazăr Bordean. I-a urmat preotul Aurel Chirilă până în 1976, după care, pentru scurt timp, Constantin Pintescu. Din 1978 a urmat preotul Moise Rusu, paroh al parohiei Marpod, care administra și Țichindeal. Din toamna anului 1995 și până în 2017 păstorește preotul Mircea Popescu, urmat de Vasile Dorin Purece (2017-prezent).
           </p>


          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
               Parohia deţine un cimitir parohial, în suprafaţă de 50 ari.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:</h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
            Activități cultural-filantropice în trecut: În 1780 s-a deschis prima școală românească de pe Valea Hârtibaciului, iar în 1898 s-a construit școala confesională.
           </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch; text-align:justify;">
             Parohia este compusă din 30 de familii. Numărul credincioșilor este de 130 de suflete.
          </p>


           <p class="col-lg-12" style="text-indent: 5ch;">
            Activități pastorale, filantropice, gospodărești etc.: În ultima perioadă din 1999 și urmare s-au făcut reparații la biserică, s-a reparat acoperișul, s-a înlocuit țigla, s-au făcut tencuieli exterioare, s-a zugrăvit exterior biserica și s-a realizat un sistem de canalizare pentru apa pluvială. În parcul de lângă biserică s-a înălțat o cruce de marmură în memoria eroilor neamului, căzuți în cele Două Războaie Mondiale, realizată din contribuția credincioșilor parohiei noastre. Din punct de vedere filantropic s-au organizat colecte de bani pentru ajutorarea parohiilor sărace și a persoanelor nevoiașe, apoi colecte de produse alimentare, rechizite și îmbrăcăminte pentru copiii din sat, elevii de la școală, în totalitate romi.
          </p>

          <br>
          <h6 style="line-height: 1.2";>Surse bibliografice:</h6>

      <p style="text-indent: 5ch;">
        <ul style="list-style-type: none;">
            <li>
              1. <i>Istoricul parohiei și bisericii din Țichindeal și Monografia satului Țichindeal 1976, în manuscris.</i>
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tinchindeal-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-5.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-6.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-7.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-8.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-9.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-10.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-11.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/tichindeal-12.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Țichindeal/preot.jpg"
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
