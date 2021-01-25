<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Merghindeal</title>
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
          <h3><span>Parohia Ortodoxă Merghindeal</span></h3>
          <p> Biserica cu hramul „Buna Vestire”</p>
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
              <p>Localitatea Merghindeal, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                  sasunicolae8@gmail.com
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
                0269.510834
              </a>
                <a class="text-secondary ml-5 w-60" href="tel:+">
                0740.9517312
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
              src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/merghindeal 7.jpg "
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain "
              alt=""

            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Buna Vestire” Merghindeal</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/profil1.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr.Nicolae-Cristian SASU</h3>
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
              Merghindeal. Toponimie: Margonda, Mergeln, Mergenthal Marjeln; Maerjln; Merglen; Marienthal, în traducere “Valea Mariei”.
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
               Comuna Merghindeal este situată la marginea sudică a podişului Transilvaniei, între oraşele Agnita şi Făgăraş, pe şoseaua care leagă aceste două oraşe, pe Valea Zăgazului şi Valea Veche. Dealurile străjuiesc aceste văi până la vărsarea lor în râul Hârtibaci, lângă satul Vărd. Comuna se află la distanţa de 68 km de municipiul Sibiu şi la 8 km de oraşul Agnita. Relieful este deluros, cu pante domoale străbătute de Valea Zăgazului.
            </p>

              <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            În ţinutul Merghindealului s-au cunoscut deja încă din perioada neoliticului urme de aşezări omeneşti. Obiectele de ceramică descoperite ca dovezi în acest sens sunt păstrate la muzeul Bruckental din Sibiu.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Prima menţiune documentară a localităţii Merghindeal, datează din anul 1332, cu denumirea de “Vallis Mariae” (Valea Mariei), dar cu siguranţă această aşezare a existat şi înainte, fiinddistrusă de năvălirea mongolăde la anul 1241.
            Locuitorii acestei comune s-au ocupat cu agricultura, pomicultura, viticultura şi oieritul dovedindu-se a fi buni gospodari şi evlavioşi creştini.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Alte date istorice semnificative cu privire la Merghindeal sunt legate de învăţământ. Într-un recensământ în limba latina de la anul 1488 este consemnată existenţa unui învăţător în Merghindeal. Nu se cunoaşte exact numărul copiilor ce învăţau carte la acea vreme, dar între anii 1502-1503 doi studenţi sași din Merghindeal frecventau Universitatea din Viena. Prima clădire destinată exclusiv învăţământului a fost construită în anul 1841. Până în acel an cursurile se ţineau în diferite case particulare. Prima clădire de şcoală pentru copiii români a fost construită de comunitatea ortodoxă în anul 1880.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Unul dintre cei mai de seamă fii ai Merghindealului a fost protopopul Aurel Munteanu care s-a născut la 2 mai 1882 din părinţii Nicolae şi Maria. Terminând studiile teologice în 1906, a rămas un an acasa. Acesta a fost cel mai rodnic an pentru Merghindeal. Îi murise bunicul şi casa lui, o cameră mare, a rămas pustie. Aici şi-a instalat o tablă mare, a mai dus câteva scaune de acasă pe lângă mobilierul existent şi astfel şi-a făcut o sală de clasă, unde a adus 6-8 copii absolvenţi ai şcolii primare din sat pentru a-i pregăti în vederea examenului de admitere la liceul din Sibiu. Cărţile şi caietele le-a cumpărat din Sibiu. A ţinut cu ei un curs de 10 luni, după terminarea căruia a plecat cu ei la Sibiu. Toţi elevii lui au avut succes la examenul de admitere. În paralel cu educaţia laică îi învăţa pe copii cum să se roage, să se poarte la biserică, a organizat un cor pe două voci care cânta la Sfânta Liturghie. El conducea corul şi predica în biserică la anumite ocazii. Sâmbăta seara şi duminica după vecernie aduna fetele şi feciorii pe care-i învăţa cântări bisericeşti, dar şi de lume. Le spunea poveşti, le explica multe lucruri de ştiinţă şi din istoria neamului romanesc şi geografia ţărilor româneşti. După vecernii şi în zi de ploaie se umplea casa cu oameni mari cărora le spunea din vieţile sfinţilor şi din faptele domnitorilor Ţării Româneşti. A fost omorât de ungurii șovini, la 06 septembrie 1940.
            </p>


            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Românii ortodocşi din Merghindeal s-au îngrijit şi de ridicarea unei biserici din lemn care s-a păstrat până la zidirea unei noi biserici din piatră. Astfel biserica străbună din lemn a fost demolată, dar credincioşii au aşezat în locul unde a fost Sfântul Altar o cruce moştenită de la străbuni. Pe această cruce din piatră sculptată se află scris cu litere chirilice în limba română: „Cu vrerea Tatălui, cu ajutorul Fiului şi cu al Sfântului Duh, ridicatu-s-a această sfântă cruce în hramul Uspenia (Adormirea) Maicii Domnului, Leat 7128 (1620) şi s-a ridicat de către robul lui Dumnezeu eu – Niculae – preotul”. Pentru buna păstrare această cruce a fost aşezată în curtea bisericii noi. Biserica nouă a fost construită în anul 1854, în timpul arhipăstoriei lui Andrei Şaguna şi al păstoriei preotului Ioan Cocoroadă, de către meşterul Wagner din Merghindeal, prin contribuţia şi sprijinul întregii parohii. Ea are hramul “Bunavestire” şi este aşezată în partea de miazăzi a comunei Merghindeal, la o distanţă de 200 m de şoseaua care leagă Agnita de Făgăraş.
            </p>


            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie) </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Construcţia are forma de navă, stil bizantin cu elemente romanice. Plafonul este format din trei bolţi egale ca înălţime şi se sprijină prin două arcuri pe patru stâlpi. Turnul are o înălţime de 28 m şi o lăţime de 8 m şi are două clopote. Sub păstorirea preotului Nicolae Godan s-au început o serie de reparaţii la biserică. În 1981 s-a zugrăvit biserica în interior de către Simion Hârţoagă. În 1982 s-au confecţionat  străni, în anul 1983 s-a reparat turnul, în 1984 s-a zugrăvit biserica în exterior, iar în 1986 s-a făcut gardul din jurul bisericii. S-au confecţionat apoi două tetrapoade pentru cântăreţi şi două scări la turn, iar în 1988 s-a făcut pardoseala cu ciment şi mozaic în altar şi pe solee.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              O restaurare destul de amplă şi complexă se desfăşoară din anul 2009, o dată cu instalarea preotului Nicolae Cristian Sasu. Aceasta a constat în schimbarea în întregime a acoperişului bisericii în anul 2009, înlocuirea ferestrelor cu geamuri termopan în 2010, turnarea unei pardoseli noi în naos şi pronaos, înlocuirea în totalitate a acoperişului turnului şi tencuirea bisericii în exterior în anul 2012, tencuirea integrală a interiorului bisericii în anul 2014 în vederea picturii. Între anii 2011-2013 s-au facut lucrări complexe la casa parohiala amenajandu-se un birou pentru preot si consiliul parohial, o bucătărie si un dormitor.
            </p>


            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Informatii de update
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
              Şirul preoţilor parohi: Sava Deişorean, înainte de 1819; Ioan Frăţiriu (1820–1840); Ioan Cocoroadă(1840–1888); Ioan Filipescu (1889–1931); Rusalim Boca (1931–1956); Gheorghe Opriş(1956–1968); Iosif  Bogdan (1968–1974); Aurel Grecu (1974); Nicolae Godan (1975–1999); Virgil Manase (1999–2008); Nicolae-Cristian Sasu (2009-prezent).
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Parohia deţine un cimitir în suprafaţă de 80 ari, împrejmuit cu gard nou format din stâlpi de beton şi plasă împletită.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
            Activitatea viitorului protopop Aurel Munteanu, prezentată în paragrafele de mai sus.
          </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 600.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
             Programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educative naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu caractermisionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Merghindeal</i>;
  </li>

   <li>
    2. NICOLAE STOICESCU, <i>Repertoriul bibliographic al localităţilor şi monumentelor medievale din Transilvania</i> , vol I, Editura Andreiana, Sibiu, 2012;
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
              src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/merghindeal 2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/merghindeal 5.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            </li>
            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/merghindeal 6.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/merghindeal 7.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
          </li>
            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/merghindeal 8.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/merghindeal/merghindeal.jpg"
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
