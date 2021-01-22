<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Ghijasa de Jos</title>
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
          <h3><span>Parohia Ortodoxă Ghijasa de Jos</span></h3>
          <p> Biserica cu hramul „Cuv. Paraschiva”</p>
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
              <p>Localitatea Ghijasa de Jos, jud. Sibiu</p>
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
                0745817277
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Jos/51522722_1497378187062252_4131203478653501440_n.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Cuv. Paraschiva” Ghijasa de Jos </i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Jos/profil.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. adm. Mihai RUSU</h3>
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
              Numele localităţii plus toponimie: Ghijasa de Jos, mai demult Visa de Jos, Ghijașa de Jos (în dialectul săsesc Grisgesesz, în germană Untergesäss, în maghiară Alsógezés) este o localitate în județul Sibiu. Aparține de comuna Nocrich.
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
              Atestată documentar în anul 1311, Ghijasa de Jos era un  domeniu feudal acordat de regele Ungariei, comiţilor din Alţâna. Încă de la începutul înfiinţării localităţii, Ghijasa de Jos a fost un sat românesc.
           </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              În anul 1486, localitatea era proprietatea nobilului Geredi din Alţâna, iar mai târziu va fi împărţită moşierilor Zisne, Apon şi Ceyulai  Radaez , care aveau proprietăţi şi în localităţile Vecerd, Ighiş, Ghijasa  de Sus, Metiş, Bârghiş, şi Coveş. Din anul 1804 administratia centrala a aceastor posesiuni se afla la Bârghiş, unde va lua fiinţă compososeratul nobiliar. Dar situaţia socială se va agrava  în preajma anului 1848. Ca urmare ţăranii iobagi din Ghijasa de Jos se vor răscula şi împreună cu cei din Ghijasa de Sus, Vecerd, Ighiş si Coveş vor porni spre Bârghiş unde se afla administraţia centrală a domeniilor nobiliare. Acţiunea lor se termină prin uciderea unor nobili . Aceşti nobili sunt duşi peste Olt în locuri retrase, iar unii dintre ei vor fi înecaţi în râul Olt. În urma acţiunii lor de răzbunare fruntaşii răsculaţilor vor fi prinşi şi spânzuraţi(cei din Ghijasa şi Bârghiş), iar unii împuşcaţi(cei din Ighiş,Vecerd şi Coveş).
           </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
               După unirea Transilvaniei cu România situaţia maselor s-a îmbunătăţit foarte puţin, deşi în1921 reforma agrară a adus ceva pământ ţăranilor din Ghijasa de Jos. Aceasta reformă a fost mai mult formală,  doar un numar  foarte restrîns de locuitori, in satul Ghijasa de Jos au fost împroprietăriţi cu pamânt 5 familii. Iar  unii dintre ei neavând unelte şi animale cu ce sa lucreze pământul, vor fi  nevoiţi să-l vândă.  Aceasta situaţie grea a unor locuitori îi vor determina să plece în America în cautarea unor condiţii de viată mai bune. Din punct de vedere economic , Ghijasa de Jos nu a putut lua un mare avânt, deoarece nu are căi de comunicaţie care să faca legătura direct cu oraşele Sibiu sau Agnita. În  anul1962 se va uni cu administraţia de la Nocrich.  Această situaţie a dus la părăsirea şi mutarea multor locuitori  ai localităţii  în Nocrich, Şelimbar şi Sibiu. Cei care au rămas  în localitate se vor ocupa cu agricultura şi cresterea animalelor. Ghijasa de Jos este aşezată la o distanţă de 7 km de comuna Nocrich,  la răsărit de Ghijasa de Sus, la nord de pădurea Vurpărului, la sud de satul Ţichindeal şi la apus de comuna Vurpăr.
           </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica din satul Ghijasa de Jos, cu hramul ,,Cuv. Paraschiva” a fost zidită în anul 1822 din piatră şi căramidă în forma de navă. Biserica este monument istoric.
            </p>

              <p style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie):</span>
           </p>

             <p style="text-align:justify; text-indent: 5ch;">
              Navă, aprox. 80mp.
            </p>

            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura (când a fost realizată, de către cine, când a fost restaurată):</span>
           </p>

             <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
             Nu este pictată.
            </p>


            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
               David Preda(1786), David Ioan(1799), Moise Preda, Vasile Cheşcu, Nicolae Dobrescu, Pavel Simion, Cercel Popovici(1970 – 1979), Ioan Hampu (1979-1996), Viorel Hoadrea (1996-2015), Florin Albu (2015- prezent)
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
               Cimitirul este în jurul bisericii.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:</h6>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 50 de suflete .
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
              Participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu caracter misionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale
          </p>

          <br>
          <h6 style="line-height: 1.2";>Surse bibliografice:</h6>

          <p style="text-indent: 5ch;">
          <ul style="list-style-type: none;">
            <li>
                1. <i>Arhiva Parohiei Ortodoxe Ghijasa de Jos</i>;
            </li>

            <li>
                2. <i>Istoricul localităţii Ghijasa de Jos </i>, nepublicat;

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
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Jos/51522722_1497378187062252_4131203478653501440_n.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ghijasa__de__Jos/51640227_1497378227062248_8206478606143062016_n.jpg"
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
      </div>
    </div>
    <!--END CARUSEL-->
  </section>
<?php
include_once 'footer.php';
?>

</body>
</html>
