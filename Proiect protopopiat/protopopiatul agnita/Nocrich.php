<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Nocrich</title>
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
          <h3><span>Parohia Ortodoxă Nocrich</span></h3>
          <p> Biserica „Sf. Vasile cel Mare”</p>
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
              <p>Localitatea Nocrich, jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-light" href="mailto:">
                 </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Sună</h3>

              <a class="text-light  " href="tel:+">
              0752.817534
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-profil.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:scale-down "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul  “Sf. Vasile cel Mare” Nocrich</i></span>
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
        <div class="col-md-4 col-sm-6 ">
            <div class="our-team">
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/profil-preot.jpg" style=" object-fit:contain; object-position:top; height:17rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Aurel AVRAM</h3>
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
    /* background: #ff3232; */
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
    padding: 5px 0 10px;
    background: #ff4444;
    position: absolute;
    bottom: 0px;
    left: 50%;
    opacity: 0.8;
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
               Pentru prima dată apare în documentele feudale, în anul 1263, sub denumirea de Nogrech, denumire reluată în 1402 în traducere latină ca Noua Ecclesiae. Alte denumiri: Loschkirk, Laeschkirik, Leskirich, Leschkirch, Loschkirch”. Aceste denumiri derivă din cuvintele germane: „Losch” în traducere „stuf” sau „papură” și „Kirch” (=biserică), adică „Biserica acoperită cu stuf”sau „Biserică acoperită cu papură” după unii, iar după alții, numele localității ar fi fost dat de existența, în împrejurimi, a unor bălți cu întinderi mari de stuf.
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
               Comuna Nocrich, se află în județul Sibiu, în partea centrală a României, în Podișul Hârtibaciului, la jumătatea distanței dintre Sibiu și Agnita. Teritoriul a fost locuit din timpuri străvechi, respectiv din perioada comunei primitive. De asemenea s-au păstrat urme de viețuire și din perioada stăpânirii romane, acestea înmulţindu-se odată cu înaintarea în timp.Tradiția spune că pe locul de astăzi al localității Nocrich, era o așezare formată din câteva familii de români, „alungați de niște oameni călări, cu pălării mari și negre și cizme în picioare”, care ar fi întemeiat aici o nouă așezare.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              	Din punct de vedere geografic localitatea Netuş este situată în partea de nord vest a judeţului Sibiu, având ca vecini la est- satul Noiştat, la vest – Iacobeni, la nord- comuna Apold şi la sud – satul Movile.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Începând cu anul 1349, localitatea a fost reședință pentru Scaunul Nocrich, mai târziu, sediul Scaunului, mutându-se alternativ la Alțâna și Nocrich. În anul 1876 s-a desființat Scaunul Nocrich și a apărut „Pământul Regesc”(Fundus Regius), iar din anul 1919 Nocrichul a devenit centrul plasei Nocrich. Începând cu anul 1945, este centrul administrativ al comunei Nocrich. În recensămintele populației realizate de-a lungul timpului, singurii locuitori consemnaţi sunt sașii, ceea ce înseamnă că datele sunt relative, populaţia românească fiind ignorată complet. Având în vedere existența unei biserici vechi din lemn, apoi din anul 1820, existența actualei biserici, precum și a unui Protopopiat Ortodox cu sediul la Nocrich. Începând cu anul 1760, cu siguranţă trebuia să existe și o populație ortodoxă română destul de numeroasă.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            În anul 1589 localitatea Nocrich a fost ridicată la rang de Opidum- Orășel, având dreptul de a ține târguri, iar din anul 1591 primește dreptul de a aplica pedeapsa capitală (jus gladii). În anul 1710, Împăratul Austriei, Carol al VI-lea, numește pe Mikhael Brekner din Alțâna jude regal si îlînobilează sub numele Von Brukenhal (în contul unei datorii). În anul 1751, împărăteasa Maria Tereza, restituie pământurile românilor alungați din Scaunul Nocrich și îi despăgubește. În anul 1773, viitorul  Împărat, Iosif al II –lea vizitează Nocrich-ul.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
               În anul 1800 are loc un incendiu de proporții, fiind distruse 62 de gospodării și vechea biserică luterană și probabil vechea biserică ortodoxă de lemn. Biserica luterană se construiește între anii 1803-1906, în stil Rococo.
            </p>




            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Biserica ortodoxă română din comuna Nocrich, cu hramul „Sf. Vasile cel Mare”, este așezată în partea vestică a comunei, la nr. 243. Biserica ocupă o suprafață de 252 m2, arhitectura fiind de tipul bisericilor cu tindă pentru femei și cu altarul despărțit prin perete de cărămidă, cu bolta deasupra ușilor diaconești și împărătești. Primul preot ortodox cunoscut, a fost Pr. Simion Toconia,  hirotonit la Arad, oficiind într-o biserică de lemn cu un clopot. Unii susțin că pe locul acestei biserici s-a ridicat actuala biserică luterană. Actuala biserică a fost zidită între anii 1820-1832, prin donațiile credincioșilor ortodocși și munca enoriașilor (40 de familii), a fost sfințită de episcopul Vasile Mangra.În decursul existenței, biserica a suferit reparații importante în anii: 1894, 1905, 1927, 1946, 1975, 1991, 2003,2004 și pictată între anii 2006-2008, de către pictorul bisericesc Ioan Dobre, cu ajutorul donațiilor credincioșilor și cu ajutorul Primăriei.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Biserica are construcţia din lemn şi este acoperită cu ţiglă. Ea se află în mijlocul cimitirului şi forma pe care o are este de corabie. Dimensiunile bisericii sunt: lungime 15 m şi lăţime de 5 m. Plafonul este confecţionat din grinzi şi scândură. Odinioară clopotniţa era separat făcută undeva în mijlocul cimitirului fără a avea legătură cu construcţia bisericii dar ulterior au fost legate printr- un coridor făcut din scândură şi sticlă şi acoperit cu ţiglă. Această clopotniţă este fabricată din lemn gravat cu motive artistice şi conţine două clopote care datează din anul 1854, fabricate la Sighişoara.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>: Vezi în descrierea de mai sus.
           </p>



            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>:</p>

            <p style="text-align:justify; text-indent: 5ch;">
              În Sfânta Biserică se află un iconostas din lemn pe care sunt aşezate icoane pictate pe lemn şi pe sticlă (patrimoniu cultural). Aceste icoane sunt împodobite cu ştergare cu motive populare, lucrate manual de credincioasele din sat.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>


          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
            <ul style="list-style-type: none;">
              <li>
                1.	Pr. Simion Toconea, 1802
              </li>
              <li>
                2. 	Pr. Iosif Cândea , 1841
              </li>
              <li>
                3.	Pr. Ioan Sinai, 1847
              </li>
              <li>
                4.	Pr. Grigorie Maier, 1847-1896
              </li>
              <li>
                5.	Pr. Nicolae Moldovan, 1896-1903
              </li>
              <li>
                6.	Pr.Aron Nețianu, 1904-1921
              </li>
              <li>
                7.	Pr. Florian Bologa, 1922-1928
              </li>
              <li>
                8.	Pr. Nicolae Pandrea, 1928-1930
              </li>
              <li>
                9.	Pr. Ioan Ghicășaru, 1930-1959
              </li>
              <li>
                 10.	Pr. Lazăr Bordean, 1959-1968
              </li>
              <li>
                 11.	Pr. Cercel Popovici,  1968-1972
              </li>
              <li>
                 12.	Pr. Traian Pui, 1972-1974
              </li>
              <li>
                 13.	Pr. Vasile Bogdan, 1974-1986
              </li>
              <li>
                 14.	Pr. Aurel Avram, 1986-prezent
              </li>
            </ul>
           </p>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Începând cu anul 1760 la Nocrich funcționa Tractul( Protopopiatul) Nocrich și Cincu Mare, până în anul 1903, când se va muta la Agnita. După Conscripția de la 1760-1762, se amintește de Scaunul săsesc Nocrich și Tractul sau Protopopiatul Nocrich, la care aparțineau parohiile: Nocrich (39 familii), Alțâna (75 familii), Ghijasa de Jos (55 familii), Pelișor și Hosman (44 familii), Marpod (51 familii), Benești (136 familii), Săsăuș (199 familii), Fofeldea (238 familii), Ilimbav (181 familii), Țichindeal (92 familii).
            </p>

             <h6 class="col-lg-12" > Șirul Protopopilor de Nocrich este:</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            <ul style="list-style-type: none;">
              <li>
                1.	Protopop Stefan Radovici, 1805
              </li>
              <li>
                2.	Nicolae Popea, 1867-1870
              </li>
            </ul>
            </p>

             <p class="col-lg-12" style="text-indent: 5ch;">
             La anul 1870 se contopesc cele două tracte al Cincului și al Nocrich-ului formându-se unul singur, al Agnitei, însă reședința este tot la Nocrich, fiind administrat de:
            </p>

              <p class="col-lg-12" style="text-indent: 5ch;">
            <ul style="list-style-type: none;">
              <li>
                3.	Protopop Grigorie Maier 1870-1881
              </li>
              <li>
                4.	Protopop Nicolae Maier 1901-1903
              </li>
            </ul>
            </p>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Prin organizațiile sale teritoriale Astra, organiza anual adunări generale, cu mii de participanți- adevărate congrese de solidaritate națională la Nocrich. Adunarea generală s-a ținut la 24 iunie 1930, delegația Astrei și oaspeții într-un număr impresionant, a fost primită la hotarul comunei, iar în centrul comunei s-a ținut slujba de invocare a Duhului Sfânt, apoi s-a prezentat carul alegoric, delegația a donat un dulap plin cu cărți.
            </p>

            <h6 class="col-lg-12" >Școala</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            „ Școală au avut românii din Nocrich. Urme se găsesc prin anii 1700-1840, unde era cercetată de consilierul Iacob Bologa din Marpod, ca școlar. Învățământul era foarte primitiv. Între învățători s-au perindat în acest timp sunt Iosif Morariu, care a fost primul dascăl calificat și care a ținut prelegeri mai regulat în limba română și germană, Ioan Flităr, Ioan Damian, Ilie Bunea, Dumitru Purece, Nicolae Tecușan și din anul 1912 Simion Dragoman.
            </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Cimitirul este  parohial  şi se află în jurul bisericii.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            În descrierile de mai sus.
            </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
           În prezent comuna Nocrich este în plină dezvoltare economică și spirituală. În comună funcționează Primăria Nocrich, Școala Generală cu clasele I-VIII, dispensar uman și veterinar.
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
           Consilierea şi sprijinirea persoanelor aflate în dificultate se face  prin colaborare cu  Comitetului parohial.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>	Monografii anterioare</i>;
  </li>

    <li>
      2.	Rapoarte ale Parohiei Nocrich;
  </li>

   <li>
   3.	Rusu Vasile,” Românii din Marpod”, Sibiu,1999;
  </li>

   <li>
   4.	Nistor Nicolae, M.N. Marinescu ”Sibiul și ținutul în lumina istoriei”, vol.II, Cluj- Napoca,1990;
  </li>

   <li>
   5.	Mihuleț Achim, profesor Com. Nocrich- „O posibilă zonă turistică” Nocrich,2010;
  </li>

   <li>
   6.	Stoicescu Nicolae,” Repertoriul bibliografic al localităților și monumentelor medievale din Transilvania, vol. II,  Ed. Andreiană Sibiu,2013”;
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-5.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-6.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nocrich/nocrich-profil.jpg"
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
