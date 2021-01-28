<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Nou</title>
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
          <h3><span>Parohia Ortodoxă Nou</span></h3>
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
              <p>Localitatea Nou, nr. 86, jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-light" href="mailto:">
                   radu.andrein@yahoo.com
                 </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Sună</h3>

              <a class="text-light  " href="tel:+">
              0787591294
              </a>
                <a class="text-light  " href="tel:+">

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
              src="../protopopiatul agnita/assets/img/poze__parohii/nou/nou2.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:scale-down "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul  „Sf. Nicolae” Noiștat</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/nou/preot-profil.jpg" style="height:30rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Constantin-Eugen ILINCĂI</h3>
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
            Printre multele sate frumoase ale Romaniei se află și satul Nou din judetul Sibiu, care a făcut parte din Protopopiatul Sibiu, iar de la 01 martie 2017-prezent, se află sub jurisdicția Protopopiatului Agnita. Acest sat se află la o distanță de 18 km de Municipiul Sibiu şi aparţine comunei Roșia pe lângă alte sate cum sunt Roșia, Cașolț, Cornățel, Daia. Vecinii sunt: la V Daia, la S Rosia, la E Vurpărul, la N Hamba și Slimnicul. Relieful este deluros, prin mijlocul satului trece pârâul Nou. Dealurile sunt împădurite și au și pășuni.
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
            Coloniștii sași aduși de Maria Tereza și Iosif al II lea au găsit suprafețe vaste de pădure, pășuni, teren pentru agricultură Românii au fost în mare paarte izgoniți din locurile lor, rămănând puțini așezați printre sași și sub păduri, restul fiind acaparat de sași. De aici denumirea de Nou săsesc. Românii au devenit toti servitori și argați, păzindu-le cirezile de vite ale sașilor și muncindu-le pământul. Mai târziu au adus și țigani pentru același lucru și fiind mai ieftini decât românii. Aceștia cu timpul s-au înmulțit și au depășit numărul sașilor și al românilor.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Cea mai veche familie originară românească din Nou este familia Clotan, ceilalți se trag din slugile sașilor din satele vecine ca: Vecerd, Ghijasa de Sus și de Jos, Nucet, Slimnic, Țichindeal și chiar de pe Târnava și din Munții Apuseni.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Sașii locuiau în case de piatră și cărămidă, foarte mari. dar fără gust estetic.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Dupa Al Doilea Razboi Mondial, românii au primit terenuri mult mai bune și neinundabile, unde și-au ridicat locuințe corespunzatoare, iar țiganii au ajuns pe vale apoi au intrat în sat.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Țiganii și românii erau ținuți înapoiați pentru a-i conduce mai ușor. Aici a apărut cel mai important rol al Bisericii, acela de a da lumină, un rol determinant.
            </p>


            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
            Preotul Simion Moldovan a cedat casa parohiala pentru școală și a ridicat altă casă parohială.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              În școala confesională a ajuns și învățătorul Dragomir de lângă Alba Iulia, care prin activitatea lui a ajuns sa fie pomenit și respectat până în ziua de azi .
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              În 1965 s a introdus curentul electric În biserică .
              Se consideră că satul Nou a luat naștere la mijlocul secolului al XIII lea . Se spune că din sașii așezați în Roșia , o parte după certuri și neințelegeri au plecat și au dat naștere unui sat nou la 2 km N de Rosia într o poiană.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              În 1600 a fost incendiat de secui. Clopotul mare din B.Ev.C. A. e din 1625, care s-a refăcut prin turnare în 1828, 1874 și 1887.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Se afirmă că românii ar fi venit și stabilit aici în sat, numai dupa 4oo de ani de la întemeiere, prin secolul XIV, iar țiganii mai târziu.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Cu aceasta afirmație, sigur  săsească, eu nu aș fi de accord, pe motivul că pe raza satului Roșia s-a descoperit sit arheologic, care vorbește despre locuitori din epoca bronzului și apoi cetate daco - romană . Și la noi pe un deal din N-E satului se vad urme cred de cetate, de unde se deduce că la venirea  sașilor erau români .
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Șematismul greco-catolic din 1900, amintește  că în 1733, parohia număra 150 de suflete, având pe preotul Ioan, biserica fiind deja și casa parohială și chiar eclejie de 1/2 jug. Se menționează  despre cărtile funciare care s-au făcut în anul 1874 . Comasarea pământului în comună s-a făcut în 1891 – l893.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
            Se amintește că în anul 1888 ar fi ars de patru ori în întregine ..
            În 1896 a bântuit o epidemie de tifos, unde foarte mulți din locuitori au murit .
            Andrei al III lea, în anul 1291 menționează în diploma lui de inaugurare a cetății Turnurilor clădite în jurul bisericii, cladită în stil roman ,biserica evanghelica din Nou, cladită in 1350 .
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              La renovarea bisericii în 1907 s a descoperit și se poate vedea și astăzi floarea - Lila - care este în stema lui Anjou Rege Carol Robert și Ludovic I .
              Se ştie că în 1833 s a ridicat o biserică din lemn cu hramul Sf. Nicolae până în 1908 , când a fost dărâmată şi a fost construită biserica actuală, în 1909.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
            Românii au biserici de lemn până în 1909,  când au cumpărat un teren de la un sas și au ridicat actuala biserică din piatră și cărămidă, cu hramul Sfântul Nicolae, dar pe un tren mlăștinos și astfel plină de egrasie până în 2012, cand s-a făcut drenaj . Biserica s-a ridicat din contribuția credincioșilor, de aceea nu se cunosc ctitorii.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Biserica este dreptunghiulară la exterior și cu o mică apsidă la altar și semicirculară în interior. Pronausul, nausul si altarul sunt despărțite de arcuri semicirculare, acoperite cu bolți semicilindrice, arhitecturaăcaracteristică Țării Românești în Ardeal cu un turn impunător la intrare .  Suprafața este de 160 de mp cu o înălțime de 4 m. Iconostasul este din zid, pe el fiind aşezate icoane. .
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>: Menționată în descrierea de mai sus.
           </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: Nu există.</p>

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
                1. Ioan Popa 1733-?;
              </li>
              <li>
                2. Popovici Ionaş 1821-1870;
              </li>
              <li>
                3. Nicolae Dop 1871-?;
              </li>
              <li>
                4. Gheorghe Stoian 1872-1874;
              </li>
              <li>
                5. Atanase Măcelaru 1875-1892;
              </li>
              <li>
                6. Iosif Popoviciu 1894-1898;
              </li>
              <li>
                7. Simion Moldovan 1920 -1930;
              </li>
              <li>
                8.Teodor Pădureanu 1931- 1932;
              </li>
              <li>
               9. Toma Mihaiu 1932-1949;
              </li>
              <li>
                10. Nicolae Popescu 1949-1960;
              </li>
              <li>
                11. Nicolae Gâlcă 1960-1980;
              </li>
              <li>
                12. Stănişor Rusale 1980-1990;
              </li>
              <li>
                13. Iuliu-Horea Bejenaru 1990-2016;
              </li>
              <li>
                14. Constantin-Eugen Ilincăi (2017-prezent).
              </li>
            </ul>
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Parohia are în posesie un cimitir, care este funcţional şi în prezent.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educativ naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu caracter misionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale.
            </p>

            <p class="col-lg-12" style="text-indent: 5ch;">
              În 1930 s-a făcut recensământul populației și în Nou a ieșit: până la 7 ani băieti 106, fete 200 total 306. D e la 7 ani în sus știutori de carte barbați 337, femei 291, neștiutori de carte bărbați 123, femei 159 .
            </p>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Dupa origine etnica: români 712, unguri 2, sași 402 ,
            </p>

            <p class="col-lg-12" style="text-indent: 5ch;">
              După confesiune: ortodocși 9, Greco catolici 703 , romano catolici 2.
            </p>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Protestanți: 402.
            </p>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Dupa ocupație: agricultori  440 , meseriași 24 , industriași 2, comercianți 3, functionari 8, muncitori cu brațul 253, servitori 51, fără profesie 335 .
            </p>


            <p class="col-lg-12" style="text-indent: 5ch;">
              Pământul comunei 7563 iugăre , 1265 stânjeni, curți și grădini 24 iugăre 1279 stânjeni , arabil 2079 iugăre 76 stânjeni , fânațe 759 iugăre 1110 stânjeni, pașuni 2639 iugăre 631 stânjeni , pădure 1824 de iugăre 422 stânjeni și necultivabile: pâraie, drumuri , surpături și altele 236 de iugăre 1279 stânjeni.
            </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 465 familii, aproximativ 1700 de suflete,  dintre care 18 familii de români şi 2 saşi. Cel mai mare sat din aceasta comună este satul Nou, de 525 de familii, aproximativ 2600 de suflete.
            </p>



          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Noiștat</i>;
  </li>

    <li>
     2. Nicolae Stoicescu, <i>Repertoriul Bibliografic al Localităților și Monumentelor medievale din Transilvania</i>, Vol. II, Editura Andreiana, Sibiu 2013;
  </li>
    3. <i>http://bisericifortificatesasesti.blogspot.ro/2011/11/noistat-neustadt-jud-sibiu.html</i>.
  <li>

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
              src="../protopopiatul agnita/assets/img/poze__parohii/nou/preot-profil.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/nou/nou1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/nou/nou2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/nou/nou3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
             </li>
             <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/nou/nou4.jpg"
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
