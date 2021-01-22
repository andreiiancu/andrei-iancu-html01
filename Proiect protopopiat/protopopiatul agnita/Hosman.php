<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Hosman</title>
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
          <h3><span>Parohia Ortodoxă Hosman</span></h3>
          <p> Biserica cu hramul „Buna Vestirel” și „Cuv. Paraschiva”</p>
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
              <p>Localitatea Hosman, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
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
                0751.5406374
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Hosman/man0032572.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Buna Vestire” Hosman </i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Călin ROAJDĂ</h3>
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
               Denumirea localităţii Hosman a suferit multe schimbări de-a lungul veacurilor. Primul nume e atestat în documente sub forma Holzmenia, în 1318. Acest nume a dăinuit mai mult de 100 de ani, apoi s-a transformat în 1479 în Holgsmengen. Nu după mult timp, în documentele din 1494 denumirea se transformă în Holczmang, Holczmanig şi Holzmang. După un an, în 1495, apare din nou sub forma din 1479, în Holgsmengen.
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
              În 1506, comuna se numea Holzman, în 1695 Hoolzmang, iar din 1918 după unirea Transilvaniei cu România, comuna e amintită în documente cu numele actual, Hosman.
            </p>

              <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Comuna Hosman este o comună foarte veche, ale cărei începuturi datează de prin secolul XIII, necunoscându-se data exactă a întemeierii ei.
            </p>

              <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Se presupune că ea a fost înfiinţată de saşi în perioada în care în toată Transilvania au fost aduşi saşii, secuii, de către regele Ungariei şi aşezaţi în părţile de sud şi est ale Ardealului. Ei s-au infiltrat printre populaţia românească aflată în aceste ţinuturi, trăind ca oameni liberi. Nu se ştie încă dacă saşii au găsit la Hosman o aşezare mai veche românească, sau nu. Cert este că în secolul al XIII- lea, Hosmanul exista. Acest lucru e dovedit şi de documente în care se arată că la 1275 s-a construit aici o biserică romano-catolică. Deducem că la acea dată trăia în Hosman un însemnat număr de locuitori saşi, care doreau să aibă o biserică proprie. În legătură cu toponimia şi înfiinţarea Hosmanului există o legendă care se păstrează până în zilele noastre. Se spune că există un om mic de statură, care transporta o zi pe săptămână lemne pe piaţa Sibiului şi de aceea el a fost poreclit Holzmandel (omul cu lemnele) căci nimeni nu-i cunoştea numele adevărat.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Veniturile aduse de vânzarea lemnelor ce se aflau din belşug pe acester locuri, au atras în părţile acestea mai mulţi oameni care încep să se îndeletnicească şi ei cu căratul lemnelor în Sibiu. Vor fi numiţi de sibieni, tot Holzmandel şi de aici s-a dat denumirea aşezării pe care ei au ridicat-o.
           </p>


            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Se spune că la 1456, Hosmanul a fost distrus în întregime de Vlad Ţepeş deoarece localnicii s-au opus cu dârzenie dorinţei domnitorului român de a-i supune. Acest lucru pare plauzibil deoarece se ştie că Vlad Ţepeş a dat o serie de interdicţii saşilor din Ardeal care făceau comerţ cu Ţara Românească. Satul a fost refăcut, dar data precisă a refacerii, precum şi numărul persoanelor rămase după incendiere nu se cunosc. Dar chiar dacă s-a refăcut, această reconstrucţie n-a durat prea mult, căci dintr-un document din 1479,  reiese că Hosmanul a fost din nou devastat în întregime de către turci. Cu acestă ocazie, averea nobilă a parohiei a fost predată Scaunului din Nocrich din care făcea parte şi Hosmanul. Inventarul parohiei a fost predat Capitolu-lui din Sibiu, cu menţiunea “până la repopularea comunei”. Se pare că într-un timp relativ scurt, satul a fost refăcut şi repopulat, amintindu-se într-un document din 1500, că Hosmanul se număra printre comunele libere ale Scaunului din Nocrich, având o populaţie grupată în 14 familii. Un alt eveniment mai important din viaţa comunei Hosman, s-a petrecut prin anii 1707-1708, când populaţia de aici a suferit crunt de pe urma curuţilor, şi a lăsat amintiri negre ce nu se pot uita şi s-a păstrat până în zilele noastre.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Biserica cu hramul “Buna Vestire”</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
               Până în anul 1829 toţi credincioşi din Hosman au fost ortodocşi având  o biserică de lemn construită în veacul al XVII-lea, adusă din Cârţişoara, lângă Făgăraş. Preoţi stabili nu erau în comună şi parohia a fost administrată de protopot Radovici şi preot Filimon, ambii din Glâmboaca.
            </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Această biserică s-a zidit în anul 1897, iar turnul s-a ridicat în 1898 până la creasta acoperişlui bisericii şi numai în 1902 s-a terminat, acoperindu-se cu tablă zincată. Fondul necesar construcţíei a fost creat de Pr. Iosif Morariu din donaţii proprii şi colectele din comunele: Răşinari, Sălişte ş.a.Credincioşi locali au contribuit numai cu prestare lucrărilor necalificate.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Sfinţirea bisericii sa făcut la 23 august 1898 de către protopopul Nicolae Moldovan din Nocrich asistat de şapte preoţi.
            </p>

             <p style="text-align:justify; text-indent: 5ch;">
              În anul 1946 şi 1973 biserica a fost renovată sub îngrijirea preotului Vasile Cinezan.
            </p>

            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie) </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Planul edificiului a fost întocmit de arhitectul Kappiter Karoly din Sibiu, folosindu-se la construcţie  material   din piatră, cărămidă şi acoperită cu ţiglă. Forma este de nava romană cu elemente bizantine.
            </p>

                    <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Nu este cazul.
            </p>

                       <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Biserica cu hramul “Cuvioasa Paraschiva”</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Biserica s-a clădit în anul 1875 din piatră, cărămidă fiind acoperită cu ţiglă şi tablă galvanizată, în vremea păstoriri Pr.Matei Popoviciu; a servit cultului greco-catolic până în anul 1948. Forma bisericii este dreptunghiulară, iar altarul semicerc. Constructia nu poate fi încadrată într-un stil definit. Nu cunoaştem provenienţa fondurilor necesare edificării şi nici măsura sporului credincioşilor la această zidire. A fost renovată în 1946, sub îngrijirea preotului Cornel Haţegan, iar în anul 1973, sub îngrijirea preotului  Vasile Cinezan.
            </p>


            <p style="text-align:justify; text-indent: 5ch;">
              	În turn sunt două clopote: unul de 30 kg. din anul 1925 şi celălalt de 220 kg din anul 1947. Din 1948 când toţi credincioşi au revenit la Biserica Mamă, edificiul bisericii cu hramul “Buna Vestire” a fost abandonat, slujbele săvâşindu-se în fosta biserică greco-catolică, cu hramul “Cuvioasa Parascheva”. În anul 2001a fost reintrodu-să în circuitul cultic după mai multe reparaţii în timpul păstoririi  Pr. Călin Roajdă, epitrop fiind Ioan Damian, trecut mai târziu la cele veşnice. Sfinţirea Bisericii s-a făcut în anul 2001 de către P.S. Visarion Răşinăreanu. Din anul 2001 alternativ se săvârşesc slujbele  religioas în cele două biserici parohiale .
            </p>



           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Nu este cazul.
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
               Ioan Popovici 1829-1848; Iosif Morar 1862-1922; Nicolae Vasu 1923-1925; Ioan Cetean 1925-1929; C.I. Mihăilescu 1929-1930; Vasile Cinezan 1935-1978; Gheorghe Bogăţan 1978-1985; Ioan Stancu 1985-1990; Leonte Romulus Luca 1990-1995; Călin Roajdă	1995-prezent.
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Cimitir parohial în suprafaţă de 2,8 Ha.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut: Nu avem consemnări deosebite menţionate în documentele parohiale  </h6>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 460.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
              Sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1.	Grim Josef, <i>Das Urbarialwesen in Siebenburgen </i>, Wien 1863;
=  </li>

   <li>
     2.	Krause Georg, <i>Siebernburgische Chronik des Schassburger Stadtschreibers</i> , Wien 1862, vol. I;
  </li>

   <li>
      3.	Muller Friederich, <i> Siebenburgische Sagen</i>, Wien 1885, ed. II;
  </li>

     <li>
       4.	Roth Viktor, <i>Beitrage zur Kunstgeschichte Siebenburgische</i> , Starssburg 1914;
  </li>

     <li>
       5.	Roth Viktor, <i>Die siebenburgisch-sachsische Kunst in der magyari schem Forschung 1915</i> , vol. 39;
  </li>

     <li>
        6.	Teutsch Freder ch, <i>Geschichte de ev. Kirche A.B. in Siebenburgische</i> , Sibiu 1921, vol. I;
      </li>

     <li>
       7.	Vătăşeanu Virgil, <i> Istoria artei feudale în ţările române</i>, Bucureşti 1959, vol. I;
  </li>

     <li>
     2. Profesor Gherasim Rusu Togan si Preot Mihai Rusu, , <i>Cantecul vetrei -Monografia localitatii Ghijasa de Sus</i>, judetul Sibiu, 2006;
  </li>

     <li>
       8.	Platner Johann, “Din Vechiul scaun al Nocrichului” în colecţia “Siebenburgens” Deutsche Tagesblat, 1929;
  </li>

     <li>
       9. <i>Dicţionar istoric al localităţţilor din Transilavania</i>	, vol. I, litera A-N pag. 244 coloana II, a ed. Acad. R.S.R;
  </li>

       <li>
          10. <i>Documente privind istoria României sec. XIV</i> , ed. Acad. R.S.
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Hosman/man0032559.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Hosman/man0032572.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Hosman/man0072232.jpg"
              alt=""
              width="90px"
            >
            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Hosman/man0136724.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Hosman/man0136728.jpg"
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
