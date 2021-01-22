<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Dealu Frumos</title>
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
          <h3><span>Parohia Ortodoxă Dealu Frumos</span></h3>
          <p> Biserica cu hramul „Sf. Nicolae”</p>
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
              <p>  Dealu Frumos,Jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                   darabantz_stelian@yahoo.com
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
                0756.420480
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
              src="../protopopiatul agnita/assets/img/poze__parohii/dealu-frumos/dealu-frumos 2.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Sf.   Nicolae” Dealu Frumos </i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/dealu-frumos/profil.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Stelian-Ciprian DARABANȚ</h3>
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
              Numele localităţii plus toponimie: Dealu Frumos, mai demult Șulumberg, Șulemberg, (în dialectul săsesc Schinebärch, Šinebarχ, în germană Schönberg, în trad. "Dealu Frumos", în maghiară Lesses, Leses ) este un sat în județul Sibiu, Transilvania, România. Aparține de comuna Merghindeal.
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
            Într-o regiune marginită de păduri bogate şi dealuri cultivabile, la marginea sudică a podişului Transilvaniei se afla Dealu Frumos.
            Prima menționare a acestui loc se face într-un act de vânzare-cumpărare din anul 1280, cumpărător fiind Gerlachus de Pulcromonte. Marea invazie mongolă din 1241 a dus la distrugerea localității, dar ea a fost ulterior refăcută. În 1321 localitatea apare sub denumirea „de Pulcro monte”. În prima jumătate a secolului 13 a fost ridicată aici o bazilică în stil romanic, cu arcade de piatră, dar care nu avea turn-clopotniță. În secolul 15 a fost ridicat turnul-clopotnița, de aproape 23 metri înălțime… cu ziduri de până la 2 metri grosime, având rol defensiv; are și nișe de tragere. În turnul clopotniță, la nivelul cel mai înalt se află orologiul, iar clopotele se află cu un etaj mai jos; unul dintre clopote este din anul 1538. Un drum de strajă este susținut de bârne de lemn, la fel ca și pe turnul din partea opusă a bisericii, unde există un turn asemănător, dar ceva mai mic. În secolul al XVI- lea, biserica a fost transformată într-o construcție gotică de tip hală.
           </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;"> Repere în timp</span>
           </p>
            <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
            - în 1486, la 22 mai, are loc împăcarea locuitorilor din Dealu Frumos și Agnita, litigiul pornind iniţial de la graniţa din pădure şi heleşteu ce aparţineau ambelor localităţi.
           </p>


           <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
            - în 1509 la 4 iunie are loc un proces între Proştea şi Dealu Frumos litigiul fiind moara şi helesteul. Caştig de cauză au locuitorii din Dealu Frumos.
           </p>

           <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
            - în 1547 se stabileşte graniţa între Movile şi Dealu Frumos pentru care s-au ivit multe certuri.
           </p>

           <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
            - în 1630 un alt proces de hotar are loc între Iacobeni şi Dealu Frumos pentru un teren pe care cei din Dealu Frumos l-au contractat la cei din Iacobeni.
           </p>

           <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
             Din punct de vedere cultural, în anul 1911, ASTRA are un reprezentant, pe Păcală Mihai, iar din 1913 si pe Ştirbeţ Ilie.
           </p>

            <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
            - în 1914 se înfiinţează o agentură la ASTRA şi o bibliotecă la Dealu Frumos.
           </p>

            <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
            - la 18 august 1923 Asociaţiunea pentru Literatură şi Cultura Poporului Român declara membru pe viata al sau pe On. Biserica rom. greco-ortodoxa în Şulumberg şi o investeşte cu toate drepturile normate în statute.
           </p>

           <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
              - în anul 2003 “Universitatea de Arhitectură si Urbanism Ion Mincu” şi-a îmbogăiţ activitatea cu centrul “Universitar de Studii în Arhitectura” de la Dealu Frumos. Sediul acestui organism este găzduit de Bazilica romanică şi fortificaţiile acesteia de secolul XIII. Ansamblul este teatrul evenimentelor ce se desfaşoară aici cu tema Arhitectura Vernaculară şi în acelaşi timp scena de aplicare a metodelor de conservare şi restaurare învăţate sau propuse.
          </p>

           <p class=" col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
            Acestui centru de studii de la Dealu Frumos i-a fost acordat  premiul “Grigore Ionescu” pentru Patrimoniul Cultural Naţional fiind prima implicare a unei universităţi în gestionarea pe termen lung a unui monument istoric. Aici la Dealu Frumos s-a desfăsurat Festivalul “Arhitext” cu evenimente special dedicate şcolilor de arhitectura, arte, design.
          </p>


            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica  cu hramul Sfantul Ierarh Nicolae este aşezată în partea de apus a localităţii la 600 m de drumul judeţean. Biserica a fost construită în anul 1826 sub păstorirea preotului Nicolae Oancea  prin contribuţia şi prin sprijinul întregii parohii.
            </p>

              <p style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie):</span>
           </p>

             <p style="text-align:justify; text-indent: 5ch;">
              Materialele folosite la zidire sunt piatră şi cărămidă, iar acoperişul e lucrat din lemn acoperit cu ţiglă. Construcţia e sub forma de nava. Plafonul prezintă trei bolţi ce se sprijină prin arcuri pe patru stâlpi. Stilul ei este bizantin cu puţine elemente gotice obişnuit în Ardeal. Turnul bisericii are o înăltime de 24 m. şi o laţime de 9 m. În el se află trei clopote. Biserica este monument istoric.
            </p>


            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura (când a fost realizată, de către cine, când a fost restaurată):</span>
           </p>
             <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              Pictura s-a realizat  în anul 1955 de către Constantin Buliga în tehnică tempera.
            </p>


            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi.</span>: colecţia de minee scrise în caractere cirilice editate între anii 1853-1856.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> În mineiul lunii august 1854 se găseste o notificare în care scrie că “în anul 1887 s-a sfinţit şcoala noastra confesionala” fiind paroh Mihai Păcală, învaţător Toma Ştirbeţ, cantăr Ioan Suciu şi goşman Ioan Savu” .</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span>Nu este cazul.</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
               Preoţii slujitori la Sfântul Altar al bisericii care au avut un rol deosebit în viaţa bisericii au fost Ioan Bunea, Nicolae Oancea, Mihai Păcală, Emil Păcală, Savu Pavel, Suciu Ieronim, Laslo Mircea, Cernea Grigoriu, Opriş Gheorghe, Bogdan Iosif, Nicolae Godan.
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              parohia are în proprietate un cimitir parohial de aproximativ 1 Ha.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:</h6>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;"></span>
           </p>
          <p class="col-lg-12" style="text-indent: 5ch;">
             Nu este cazul.
          </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 220.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
            Parohia sprijină persoanele aflate în dificultate.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Dealu Frumos</i>;
  </li>

   <li>
     2.	Nicolae Stoicescu, <i>Repertoriul bibliographic al localităţilor şi monumentelor medievale din Transilvania</i>, vol I, Editura Andreiana, Sibiu, 2012;

  </li>

   <li>
     3 <i>ro.wikipedia.org/wiki/Dealu_Frumos_Sibiu</i>
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
              src="../protopopiatul agnita/assets/img/poze__parohii/dealu-frumos/dealu-frumos 1.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii//dealu-frumos/dealu-frumos 2.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/dealu-frumos/profil.jpg"
              alt=""
              width="90px"
            >

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
