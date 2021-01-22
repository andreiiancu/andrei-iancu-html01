<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Ghijasa de Sus</title>
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
          <h3><span>Parohia Ortodoxă Ghijasa de Sus</span></h3>
          <p> Biserica cu hramul „Sf. Ioan Botezătorul”</p>
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
              <p>Localitatea Ghijasa de Sus, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                  raresdusescu@yahoo.com
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
                0720.94694
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
          >
            <img
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/front__image.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Sf. Ioan Botezătorul” Ghijasa de Sus </i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/profil.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Rareș DUȘESCU</h3>
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
              Satul Ghijasa de Sus este situat la limita sudică a Podişului Târnavelor din cadrul depresiunii Transilvaniei, în partea inferioara a Văii Hârtibaciului.
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
              Aşezarea datează din epoca pietrei, fapt confirmat de cercetările şi descoperirile arheologice, efectuate în anii 1970-1975, de către specialiştii muzeului Bruckenthal şi ai Facultăţii de istorie-filologie din Sibiu, la trei kilometri sud de actuala vatră.
           </p>


            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              O informaţie despre atestarea documentară a satului ne-o prezintă  Coriolan Suciu în al său Dicţionar istoric al localităţilor din Transilvania, Vol.I, pag.259. Folosindu-se de Documentele lui Veress, Vol. IX, pag.367, menţionează că satul este atestat pentru prima oară în anul 1636, sub numele de Ghezes. Acelaş dicţionar notează variaţii diverse ale denumirii satului, din 1733, Felsӧ Kisazo ; în 1850, Felsӧ Gezacs; între 1760-1762 Felsӧ  Gizos ; în 1805 Felsӧ Gezes şi Ober Gesass, apoi Ghizasa de Sus.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Respectivul Dicţionar istoric ne oferă menţiunea că în Evul Mediu ele au existat ca un singur sat, respectiv acolo, în Gruiul lui Bogdan pe Hârţişoara, o apă firavă care trece prin apropiere, unde după cum s-a arătat, s-au gasit urme certe despre o veche aşezare.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Se presupune că vechea vatră a satului de la Hârţişoara a fost părăsită, probabil din cauza saşilor sau a unor coflicte din interior a populaţiei aglomerate ce a necesitat defrişări de pădure, de tufişuri şi mărăcini. S-au împărţit în trei ramuri. Unii s-au stabilit pe locul Ghijasei de Sus spre nord, altă ramură s-a deplasat dincolo de pârâul Hârţa în Ghijasa de Jos, iar alta spre apus la locul numit astăzi « Colighi » dispărut ca aşezare a unei vetre stabile.
            </p>

                                    <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Ca formă administrativă Ghijasa de Sus devine comună de sine stătătoare aparţinând judeţului Târnava Mare, apoi a regiunii Braşov inclusă în raionul Agnita, iar din 1968 sat aparţinător comunei Nocrich, jud. Sibiu
            </p>



            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Monumentul cel mai important al satului, biserica actuală cu hrmul Sf. Ioan Botezătorul,  datează din anul 1862, an în care s-a început construcţia şi « s-a isprăvit » în 1883, « de comunele din împrejur nu se afla », cum notează în Protocolul pe 1884 inimosul preot Ioan Veltean, iniţiatorul acestei ctitorii. Vechea biserică se afla în dealul din partea de est a satului, în grădina lui Pârvuleţ şi a lui Siridon, unde se găsea şi semnul, respectiv piatra de altar. Preotul Veltean a cumparat pe cheltuiala proprie actuala curte a bisericii de la locuitorul Ioan Vlad, nume care azi s-a pierdut, cu 160 de florini şi cu condiţia ca « pâna voi fii eu în viaţă să-l pomenesc în liturghie » .
            </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Şematismul Arhiedecesei Metropolitane, Blaj, pe anul 1900, la pag.552  oferă date interesante despre trecutul organizării bisericii din Ghijasa de Sus :
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              «Parohia aceasta nu era pe timpul conscripţiei episcopului Klein (Samuel Micu ). 470 de suflete : avea biserică, dar nu şi casă parohială. Preoţi erau doi : popa Radu si popa Toma, acesta din urma neunit (ortodox) de unde deduce  că o parte din cele 470 de suflete erau neuniţi. » Cu cine a mai funcţionat ca preot până în anul 1824, din lipsă de date nu s-a putut nota. De la anul 1824, a funcţionat Natanail Grigoroviciu, căruia i-a urmat Ioan Grigoroviciu, carea fost  împuşcat de insurgenţi în 1848. Acestuia i-a urmat Ioan Popoviciu şi Ioan Veltean, care a funcţionat până în anul 1890, « cari de la anul 1890 până în prezinte, funcţionează actualul preot Valeriu Stoian » (anul 1900).
            </p>

             <p style="text-align:justify; text-indent: 5ch;">
             Cât de apropiaţi au fost aceşti preoţi de sufletul românilor de pe aceste meleaguri o dovedesc faptele lor de dăruire înscrise sub semnul luptei pentru păstrarea identităţii naţionale şi a desfinţării apăsătoarei poveri a iobăgiei, pentru care preotul Ioan Grigoroviciu a plătit cu viaţa împreuna cu fiul său pe vremea aceea.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Cu privire la locaşul bisericii, aflăm de pe inscripţia de la intrare că la 1881 era notar Ioan Bela şi jude comunal Ioan Oprean care şi-au adus aportul la ridicarea sfantului locaş.
              Slujitorii sfintei biserici împreună cu credincioşii săi au adus fiecare contribuţia lor la bunul mers al parohiei îngrijindu-se de  Sfântul locaş care în ultimul timp a fost împodobit cu o frumoasa haina picturală în tehnică  « fresco ».
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi.</span>: Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span>Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span>Nu este cazul.</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              După preotul Stoian amintit în Şematismul din anul 1900 au slujit următorii preoţi: Pr. Simion Stoiţă (1939- 1953); Pr. Simion Pavel (1953-1961); Pr. Ion Forsea (1961-1973); Pr. Mircea Leb (1973- 1986); Pr. Virgil Barbu (1986-1988); Pr. Mihai Rusu (1988-2015); Pr. Rareș-George Dușescu (2015-prezent).
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Parohia are cimitir propriu în jurul bisericii.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut: Nu avem consemnări deosebite menţionate în documentele parohiale  </h6>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Deşi în prezent parohia are doar 183 de suflete (65 familii) totuşi ea nu a stagnat, prezintă unele facilităţi, gaz-metan, asfalt, monument al eroilor (unicat), biserica pictata în frescă  îngrijită, un cămin cultural, ceea ce ne apropie de un standard mediu de civilizaţie.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
          Activităţi pastoral-misionare, culturale, editorial, filantropice, catehetice ş.a.: programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educativ naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu caracter misionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Ghijasa de Sus</i>;
  </li>

   <li>
     2. Profesor Gherasim Rusu Togan si Preot Mihai Rusu, , <i>Cantecul vetrei -Monografia localitatii Ghijasa de Sus</i>, judetul Sibiu, 2006;
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

      <div class="carousel_track-container">
        <ul class="carousel_track">
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/131975380_451301535908226_7517042683789978632_o.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii//Ghijasa__de__Sus/132104593_451301605908219_3765642419069142208_o.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/136964274_461648701540176_1548386636416032759_o.jpg"
              alt=""
              width="90px"
            >
                      <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/1896901_816013731745981_292722112_n.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/46958451_101739797531070_4278625744302637056_o.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/476885_634860199861336_173785307_o.jpg"
              alt=""
              width="90px"
            >
                      <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Sus/front__image.jpg"
              alt=""
              width="90px"
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
