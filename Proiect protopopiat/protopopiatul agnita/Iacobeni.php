<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Iacobeni</title>
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
          <h3><span>Parohia Ortodoxă Iacobeni</span></h3>
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
              <p>Localitatea Iacobeni, nr. 215, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                parohiaiacobeni2010@yahoo.com
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
                0787.521605
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Iacobeni/400e8d3d-8004-4be3-838d-f20067c5274d.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Sf. Nicolae” Iacobeni </i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Iacobeni/cf7a7c8f-2da1-49ed-9d82-f838fd616845.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Teofil GÂRBACEA</h3>
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
                Numele  localităţii: într-un document datând din anul 1336 se pomeneşte de Villa Iacobi, în traducere «Satul lui Iacobi». Nu se cunoaşte cine a fost şi ce rol istoric a jucat acest Iacob. Numele satului nu s-a schimbat de-a lungul istoriei, păstrându-se denumirea iniţială tradusă în diverse limbi: Iacobi Villa, Jakobsdorf (în limba germană), Iacobfalva (în limba maghiară) şi Iacobeni în limba română.
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
              Satul  Iacobeni este aşezat pe valea Hârtibaciului, la o distanţă de 1,5 km de şoseaua ce leagă Agnita de Sighişoara, la 12 km de Agnita. Satul se întinde de-a lungul unui pârâu afluent al Hârtibaciului, fiind înconjurat din trei părţi de dealuri împădurite, iar într-o parte de lunca Hârtibaciului. Se spune că satul nu ar fi fost aşezat de la început pe locurile unde se află astăzi, ci undeva în apropiere. Acea aşezare s-a numit Michelsdorf şi a dispărut în urma unei epidemii. Locuitorii care au mai rămas în viaţă s-au refugiat pe teritoriul de astăzi al satului Iacobeni, dăruind acestei comune toată averea fostului sat. Pe teritoriul comunei au fost găsite dovezi materiale din comuna primitivă, precum şi din epoca romană. Aceste obiecte se găsesc la Muzeul Bruckental din Sibiu.
            </p>

              <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              În Evul Mediu, satul Iacobeni aparţinea scaunului săsesc Cincul Mare. În documentele administrative ale acestui scaun din secolele XVI–XVII comuna Iacobeni este amintită întotdeauna ca o comună de rangul III, urmând imediat după Cincu şi Agnita, ceea ce ne face să credem că a fost o comună mare şi de o importanţă economică deosebită. La un recensământ din anul 1488 aşezarea se prezenta ca foarte populată, a treia după Agnita şi Alţâna, având 75 de gospodării locuite, 4 gospodării părăsite, o şcoală, o moară şi trei săraci întreţinuţi de obşte.
            </p>

           <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Mai târziu comuna a trecut în administraţia judeţului Târnava Mare, plasa Agnita, apoi a fost arondat judeţului Sibiu.
            </p>



            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
            Recensământul populaţiei româneşti efectuat între anii 1760–1762 din ordinul generalului Buccow consemnează 13 familii de ortodocşi, ceea ce ne permite să deducem prin aproximaţie că numărul populaţiei româneşti a fost de 70–75 de locuitori. În anul 1761 călugărul Sofronie a ţinut o adunare la Beneşti pentru apărarea Ortodoxiei din Transilvania. La adunare au luat parte şi delegaţi ai ortodocşior din Iacobeni şi Stejeriş. În urma cererii adresate Curţii de la Viena s-a aprobat construirea unei biserici ortodoxe în Iacobeni şi dreptul populaţiei româneşti de a-şi păstra vechea ei credinţă ortodoxă. În  anul 1873 s-a finalizat construirea bisericii sub păstorirea vrednicului preot Ioan  Lascu.
            </p>

            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie) </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica a fost construită din piatră, cărămidă, lemn şi tiglă, având forma de navă, stil bizantin cu elemente gotice, obişnuit în zona Ardealului. Deasupra pridvorului se află un turn cu o înălţime de 13 m şi o lăţime de 4 m, construit în stil gotic. Turnul bisericii adăposteşte clopotniţa unde se găsesc două clopote: cel mic datând din anul 1842, iar cel mare sfinţit pentru ploaie datând din 1922. Naosul este despărţit de altar printr-un iconostas în formă circulară confecţionat în partea de jos din zid, iar cea de deasupra din lemn, cu frumoase ornamente lucrate manual, având încorporate câteva icoane reprezentând diferite scene biblice. Pardoseala este confecţionată din lemn.
            </p>

                    <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica  nu este pictată, fiind  doar zugravită cu motive florale şi simboluri religioase. Zugrăveala a fost realizată în anul 2003, de către meşterul local Tudor Mohai.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>  Parohia deţine un epitaf pictat pe pânză, datând din 1889 şi un clopot aflat în clopotniţă din 1842.</p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi.</span>: Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span>Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span>Nu este cazul.</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Începând cu anul 1842 ne este cunoscut şirul preoţilor care au păstorit parohia Iacobeni: Chirion Rotaru (1842–1855); Ioan Lascu (1855–1901); Valeriu Cosma; Ilie Popescu; Vasile Joantă; Aurel Gugu; Nicolae Mărginean (1975–1990); Crucian Murgoiu (1991–2003); Teofil Gârbacea, din 1 octombrie 2003 până în prezent.
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Parohia deţine două cimitire: într-unul sunt înmormântaţi românii, iar în celălalt, după obiceiul locului, sunt înmormântaţi credincioşii de etnie rromă.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut: Nu avem consemnări deosebite menţionate în documentele parohiale  </h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
              Este de remarcat faptul că satul Iacobeni a avut în cursul existenţei sale o viaţă culturală bogată. Astfel între anii 1545–1806 au absolvit liceul în Braşov 21 de tineri din Iacobeni. Din păcate nu se păstrează date despre cei care au frecventat liceele din Sibiu, Sighişoara şi Mediaş, dar faptul că la Braşov, care este situat mult mai departe, se înregistrează atâţia elevi, ne face să credem că numărul total al elevilor a fost mult mai mare. În anul 1664 a fost numit ca director al Şcolii Latine din Cincu, Johannes Schellius Jacobitanus (din Iacobeni). Între anii 1861-1910 este cunoscută şi prezentă în satul Iacobeni activitatea Asociaţiei Astra. În anul 1898 a luat fiinţă un despărţământ al Astrei la Agnita. În comitetul de conducere îl găsim în anul 1911 pe preotul ortodox Valer Cosma din Iacobeni.
          </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Parohia Iacobeni este alcătuită din 150 de familii cu 563 de suflete, dintre care 85% sunt țigani.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
              Programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educativ naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu caracter misionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
     1. <i>Arhiva Parohiei </i>;
  </li>

   <li>
     2.  <i>Monografia  judeţului Târnava  Mare</i>;
  </li>

   <li>
    3. Nicolae Stoicescu, <i>Repertoriul bibliographic al localităţilor şi monumentelor medievale din Transilvania</i> , vol I, Editura Andreiana, Sibiu, 2012;
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Iacobeni/400e8d3d-8004-4be3-838d-f20067c5274d.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Iacobeni/519438cc-d94e-4657-87c4-96a2431f92b6.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Iacobeni/a26fdd05-ec6a-406a-912a-824471f2edeb.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Iacobeni/b8f10a63-64f9-4405-8531-b4aa812950f7.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Iacobeni/cf7a7c8f-2da1-49ed-9d82-f838fd616845.jpg"
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
    <!--END CARUSEL-->
  </section>
                  <!--=====Carusel=====-->

<?php
include_once 'footer.php';
?>
</body>
</html>
