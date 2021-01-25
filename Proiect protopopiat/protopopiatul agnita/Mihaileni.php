<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Mihăileni</title>
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
          <h3><span>Parohia Ortodoxă Mihăileni</span></h3>
          <p> Biserica „Sf. Nicolae” şi biserica „Sf. Dumitru”</p>
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
              <p>Localitatea Mihăileni, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                  aditoacse@yahoo.com
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
              0745.198091
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Mihaileni/13173069_1076256625773396_8131755591631422117_o.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain "
              alt=""

            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr.  Cornel-Adrian TOACȘE</h3>
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
               în maghiară: Sálfalva, în germană: Schaldorf. Numele actual de Mihăileni, se pare că vine tocmai de la Mihai Viteazul, odată cu repopularea localității.
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
               Localitatea Mihăileni este situată  în  centrul județului  Sibiu, la 45 km de Sibiu, cu  acces, atât din drumul  Sibiu- Medias, cât și din drumul Sibiu-Agnita (valea Hârtibaciului), în zona  cunoscută sub numele de Valea Buii. Localitatea Mihăileni are o populație de 210 locuitori, toți de naționalitate români.
            </p>

              <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              O dată exactă a înființării localițății Mihăileni, nu se cunoaște, dar se presupune că localitatea a luat naștere undeva în sec 14-15. Există doar o istorie nescrisă și de aceea nu o putem data ca fiind una reală; cum că, în jurul anului 1600, populația de aici s-ar fi împotrivit unirii lui Mihai Viteazu și, ca pedeapsă, toți au fost decapitați, satul fiind repopulat cu familii aduse din zona Făgărașului, neexistând însă nici un act istoric, care să accentueze acest lucru, ci  doar obiceiurile religioase, diferite de celelalte sate vecine și asemenatoare zonei Făgărașului. Cu siguranță că aici au existat și alte naționalități (sași, maghiari), căci însuși numele avute anterior, adeveresc acest lucru. Singurele date existente în ceea ce privește istoria localității Mihăileni se găsesc în anul 1839, când sătenii, sub păstorirea preotului orthodox, Pavel Leb, au ridicat actual biserică, cu hramul Sf. Nicolae, din central satului, biserica veche fiind situată în dealul cimitirului din localitate. Fiind o biserică mică din lemn. Populația va îmbrațișa însa, împreună cu preotul Pavel Leb, confesiunea greco-catolică, după obiceiurile mincinoase ale vremurilor   respective. Abia în jurul anilor 1950, credincioșii vor reveni  la religia ortodoxă, stramoșească. Momentan, doar 5 persoane mai sunt de confesiune greco-catolica, restul, până la 210 sunt toți ortodocși.
            </p>




            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Biserica din Mihăileni, în care se oficiază slujbele, are hramul Sfântul Nicolae. Din schița de plan a monografiei comunei Mihăileni a directorului Ioan David, se constată că această biserică a fost zidită în anul 1839.  Înainte de a fi zidită aceasta, a existat o biserică de lemn, în jurul căreia s-a format cimitirul actual al satului. Materialul bisericii celei noi a fost adus în mare parte de la biserica de lemn care a fost în acele timpuri demolată, din cauza stăpânirii străine a ungurilor, de religie catolică. Biserica nouă, aşezată în mijlocul satului, a fost zidită în timpul pstoririi preotului Pavel Leb, care pentru unele promisiuni din partea ungurilor a trecut la religia greco-catolică, cu întreg poporul.

            </p>

                         <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             Biserica are formă de navă cu pridvor, pronaos, naos, altar.            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            </p>

                  <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">A doua biserică:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              A doua biserică din Mihăileni este biserica veche ortodoxă a celor câtorva familii de ortodocși rămași neuniți, fiind zidită în 1880 cu bani colectați din vechiul regat și pe cheltuiala proprie  a lui Candid Inescu. Biserica are formă de corabie, tâmpla este din scândură cu puține icoane, aratând prin aceasta vitregia vremii de atunci, în care au trăit putini ortodocşi. Cărțile de slujbă au fost aduse de la Mănăstirea Curtea de Argeș, prin osteneala călugărului care se semnează Nilschi Monahul. Aceste împrumuturi de cărți și obiecte sfinte ne fac cunoscute strădania ierarhilor și a preoților ortodocşi, de a păstra nealterată învățătura de credință.
            </p>




            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               între anii 1970-1971 Biserica “Sf. Nicolae” a fost împodobită cu pictură in tempera, prin osteneala credincioşilor şi a preotului Simion Săsăujan. În anul 1999, prin donaţii ale credincioşilor din Mihăileni, biserica şi casa parohială au suferit reparaţii capitale (faţada, acoperişul), prin purtarea de grijă a preotului paroh Lucian Negrilă şi a consiliului parohial. În anul 2006, cu ajutorul Consiliului Local şi prindonaţiile credincioşilor, biserica şi casa parohială au fost dotate cu instalaţie de ncălzire centrală, iar prin donaţia familiei Flanagan (Mark şi soţia Silvia) din S.U.A., biserica a fost pardosită cu gresie. A urmat lucrarea de pictură a interiorului bisericii, încununat prin sfinţirea ei la data de 15 noiembrie 2009, de către I.P.S. Laurenţiu, MitropolitulArdealului.
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
              Şirul preoților parohi: preoții cunoscuți, care au slujit în această parohie sunt: Pr. Popa Dumitru , apoi fiul său Pr. Simion Dumitru, Pr. Pavel Leb (unit), Pr. Pavel Vlad,  Pr. Silviu Raica , Pr. Aurel Aldea,  Pr. Victor Garlontea,  Pr. Ioan Hampu,  Pr. Simion Sasaujan,  Pr. Ioan Sumedrea , Pr. Liviu Dobrin, Pr. Lucian Negrilă, Pr. Nicolae-Dorin Dumbrava, Pr. Adrian-Cornel Toacşe.
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Parohia nu deține cimitir.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 210.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Merghindeal</i>;
  </li>

   <li>
     2. <i>http://ro.wikipedia.org/wiki/Comuna_Mih%C4%83ileni,_Sibiu</i>
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
              src="../protopopiatul agnita/assets/img/poze__parohii/mihaileni/16836587_885915361551637_7623385047524581287_o.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/mihaileni/13173069_1076256625773396_8131755591631422117_o.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

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
