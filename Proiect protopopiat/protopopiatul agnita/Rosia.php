<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Roșia</title>
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
          <h3><span>Parohia Ortodoxă Roșia</span></h3>
          <p> Biserica „Naşterea Sf. Ioan Botezătorul”</p>
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
              <p>Localitatea Roşia, Str. Principalǎ, nr. 201, jud. Sibiu</p>
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
               0754.053975
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-profil2.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain; "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul "Naşterea Sf. Ioan Botezătorul" Roșia</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/preot-profil1.jpg" style="height:23rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Ioan RĂDULEȚ</h3>
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
            Localitatea Roșia, situată în partea centrală a județului Sibiu, în sudul Podişului Hârtibaciului, pe cursul superior al pârâului Zăvoi, a purtat în cursul istoriei sale diferite nume: Rufo Monte, Vöröș Mart (Versantul Roșu), iar mai târziu Rothberg (Dealul Roșu).
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
            Comuna Roșia este aşezatǎ la est de Municipiul Sibiu, la o distanță de 17 km, pe drumul județean Sibiu – Vurpăr. Se mărginește la est cu satul Țichindeal, la sud satele Cornățel și Cașolț, la vest satele Daia și Nou, iar la nord cu comuna Vurpăr.
            </p>

             <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             Aceastǎ localitate este situată pe un teritoriu istoric, existența unui sit arheologic datat de istorici în epoca neolitică, vine să atesteze vechimea populării acestei așezări. Cercetările şi inventarierea obiectelor descoperite, au fost făcute sub îndrumările şi cu aportul Prof. Nicolae Lupu, director al Muzeului Brukenthal şi arheologul Paul Iuliu.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             Prima atestare documentară din perioada 1120-1140 se găseste la Muzeul Brukenthal în documente purtând denumirea de Rufo Monte. Această așezare a fost distrusă pe la anul 1225 în timpul invaziilor. După ce așezarea a fost distrusă, locuitorii rămași în viață s-au refugiat în pădure unde şi-au construit colibe în locul numit azi ,,Dealul Nourelei”. În acest loc s-au găsit urme (resturi de vase, s.a.) de pe vremea dacilor.De la colonizarea sașilor cărora li s-au dat multe privilegii, s-a schimbat și numele localității. Roșia săsească a fost sat liber, ocupația de bază fiind agricultura și creșterea animalelor.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
             Până în anul 1850 cele 50 de familii de credincioși ortodocși din Roșia nu au avut un locaș propriu de rugăciune, ci aparțineau ca filie a parohiei din Cornățel. În 1854 din încredințarea și cu recomandarea Sfântului Ierarh Andrei Șaguna, Mitropolitul Ardealului, preotul Ioan Bânda (de loc din Săsăuși- consătean cu vestiții pictori, frații Grecu), colectează din comunele din Comitatul Brașov și din Mărginimea Sibiului banii necesari pentru ridicarea unei biserici în sat.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
               La fondurile strânse din colecta publica, Sfântul Ierarh Andrei Șaguna adauga cu mărinimie suma de 50 de florini, devenind ctitor al sfântului locaș. Construcția bisericii începe în 1856 și se finalizează în 1857.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Fundația construcției a fost realizată din piatră, zidăria din cărămidă iar acoperișul din șarpantă de lemn și țiglă.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
               În anii 1955 și 1956 s-a renovat biserica, lungindu-se pronaosul cu doi metri și s-a zidit turn din beton armat și cărămidă acoperit cu țiglă, sub păstorirea preotului Ioan Tudor. Lucrările s-au făcut după planul și devizul arhitectului A. Cernea din Sibiu.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica este construită în stil autohton, în formă de corabie, cu un turn in fața pronaosului și are trei încăperi: pronaosul, naosul și altarul. Turnul are 8 arcade semicirculare cu jaluzele din lemn de brad. La turn sunt 3 geamuri înalte pentru lumină. În pronaos peste intrare se află podișorul pentru tineret, din lemn de brad, susținut de două grinzi de stejar zidite în pereții laterali. În podișor este și intrarea în turn. Pronaosul are două geamuri pentru lumină, naosul are patru geamuri, iar altarul, în formă de semicerc are trei geamuri. Iconostasul este lucrat din cărămidă. Toată biserica are tavan drept.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>:
           </p>

           <p style="text-align:justify; text-indent: 5ch;">
             Biserica a fost pictată în culori de apă, între anii 1994-1995 în timpul păstoririi preotului Ioan Stancu, de catre pictorii (zugravii) bisericești Opriș Gheorghe, Fățan Nicolae si Stancu Adrian.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: Nu este cazul. </p>

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
                1.	Pr. Ioan Bânda: 1854 – 1906;
              </li>
              <li>
                2.	Pr. Constantin Moldovan: 1907 – 1909;
              </li>
              <li>
                3.	Pr. Trandafir Scorobețiu: 1910 – 1919;
              </li>
              <li>
                4.	Pr. Ioan Bânda jr. : 1920 – 1940;
              </li>
              <li>
                5.	Pr. Ioan Tudor: 1941 – 1976;
              </li>
              <li>
                6.	Pr. Traian Rotar: 1977 – 1990;
              </li>
              <li>
                7.	Pr. Ioan Stancu: 1991 – 2005;
              </li>
              <li>
                8.	Pr. Sergiu Eugen Moga: 2006 –2017;
              </li>
              <li>
                9.	Pr. Ioan Răduleț (2017-prezent).
              </li>
            </ul>
           </p>


          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            ..............................................................................
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut: Nu se cunosc.</h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
          ..............................................................................
           </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            În prezent populaţia satului se ridică la un numar de 1590 de suflete. Ca aparteneță etnica o singură familie și-a declarat apartenența la etnia rromilor, opt etnici sași, 230 români, 1351 țigani (românizați ,care s-au declarat la ultimul recensământ români).
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span class="col-lg-12" style="text-indent: 5ch;">
             Pe teritoriul satului sunt active 4 culte : creștini ortodocși 1292, baptiști 280, evanghelici luterani 8, martorii lui Iehova 10.
           </p>


           <p class="col-lg-12" style="text-indent: 5ch;">
           Activitǎţi pastoral misionare, culturale, editoriale, filantropice, catehetice: Parohia a fost implicatǎ în activitǎţile Proiectului “Alege Şcoala” şi în mod constant, preotul paroh Sergiu Moga organizeazǎ acţiuni sociale pentru persoanele nevoiaşe, cu ocazia marilor praznile bisericeşti. Din punct de vedere cultural, amintim participarea copiilor din parohie, la faza comunalǎ, a concursului “Ziua internaţionalǎ a iei”.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Retiș</i>;
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-5.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-6.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-7.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-profil.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Rosia/rosia-profil2.jpg"
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
