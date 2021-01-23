<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Marpod</title>
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
          <h3><span>Parohia Ortodoxă Marpod</span></h3>
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
              <p>Localitatea Marpod, strada Principală nr. 185, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                  pava_87@yahoo.com
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
                0760.270102
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Marpod/0b7acaa5-9b38-4f14-af24-a56d929d8e76.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Sf. Nicolael” Marpod</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Marpod/IMG_8935-1024x575.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Marian PĂVĂLAȘCU</h3>
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
              Satul Marpod se situează pe Valea Hârtibaciului, la o depărtare de 32 km de reşedinţa judeţului, municipiul Sibiu; la 27 km de cel mai apropiat oraş - Agnita.
              Numele comunei este de origine nesigură, gotică sau agatârşă. Ar proveni de la un nume de persoană, perpetuat până în sec. al XVII, când ultima familie cu acest nume se stinge, Mar - Streitos, Mähre - cal de luptă şi bodo - bieten, an-bieten = a oferi; deci, cel care oferă cal de luptă. În timp numele suferă modificări de sunete şi accent, în epoca austro-maghiară şi apoi la români din 1349 „Meyerpoth” ajungandu-se in 1839 la denumirea de Mriapod şi, ultimul, Marpodu – Marpod, cum se numeste și până în ziua de astăzi.
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
              Dacă până în 1867 (dualismul austro-ungar), satul era integrat administrativ în scaunul Nocrichului, iar de la această dată facea parte din Comitatul Sibiului până în 1918 - satul va aparţine, pe rând, de judeţul Sibiu până la apariţia regiunilor în 1950, când va fi cuprins în raionul Agnia, judeţul Sibiu. Astăzi este din nou în locul său firesc administrativ, începând din 1968 - anul reformei administrative.
            </p>

              <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Din punct de vedere economic, oamenii se ocupau cu agricultura, creșterea de vite dar și cu cultivarea vitei de vie. La sfârşitul secolului XIV şi XV existau puternice bresle de croitori şi cizmari, la jumătatea secolului XVI se practica şi turnătoria în cositor, iar în anul 1960 găsim meşteşugul olăritului.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Din punct de vedere cultural, Marpodul a dăruit țării noastre oameni de înaltă ținută culturală, iar cel mai concludent exemplu este cel al familiei Bologa: Iacob Bologa (1817-1888) cancelist la Curtea de Apel din Tg. Mureş; Consilierul aulic Valeriu Lucian Bologa (1892-1971)profesor la Facultatea de Medicină,om de ştiinţă emerit; Lucian Bologa (1901-1957) psihopedagog, pedagog social, istoric al pedagogiei.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Apare la Marpod şi prima Biserică ortodoxă, deocamdată o mică bisericuţă din lemn. Locaşul de cult e cumpărat din satul Olteţ (Făgăraş). Bisericuţa este ridicată între anii 1811-1815. Lucrările sunt supravegheate de învăţătorul Toma losif, primul învăţător pentru românii din Marpod. Slujba religioasă a fost asigurată de preoţii din Ilimbav. În timpul săptămânii, învăţătorul împreună cu credincioşii făceau Vecernia în micul locaş. Despre ea se spune că era aşa de mică, încât de Paşti şi de Crăciun lumea stătea la ferestre, neîncăpând în Biserică.
            </p>

             <p style="text-align:justify; text-indent: 5ch;">
                Biserica actuală din Marpod a fost zidită între anii 1830-1836, lângă biserica din lemn. Fiind o comunitate mică, circa 40 de familii, românii din Marpod se ataşează din punct de vedere bisericesc, de preoţii din Ilimbav, sat românesc. Astfel, preoţii din Ilimbav devin conducători spirituali şi pentru românii din Marpod. Între anii 1829-1849 preotul loan Sinai se ocupă şi de parohia ortodoxă Marpod. Acest preot a fost un neobosit apărător şi luptător pentru drepturile românilor sărăciţi de conducera politică existentă. Astfel sub impulsul de preot şi de familia Bologa din Marpod, românii încep construcţia unei biserici ortodoxe din piatră şi cărămidă. Lucrările propriu-zise încep în anul 1830. Fondurile necesare au fost adunate în parte de la locuitorii satului, din donaţii, precum şi din colecte strânse de la credincioşi din satele româneşti vecine: llimbav, Săsăuși.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Meşterii care au lucrat la ridicarea ei au fost români din llimbav. Din păcate nu li s-a păstrat numele. Cărămida necesară a fost făcută de românii din sat. Din păcate aceasta nu era de foarte bună calitate pentru că românii din Marpod nu beneficiau de un loc propice fabricării cărămizilor. Cele mai bune locuri în acest scop fiind ocupate de saşi. Calitatea proastă a cărămizii urma să dea numeroase probleme urmaşilor.
            </p>

            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie) </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              construcţia bisericii este simplă, în forma de navă cu naos în formă dreptunghiulară şi altar (absidă) cu pereţii laterali drepţi şi tavan plat din scânduri şi trestie tencuit. Catapeteasma este din zid cu deschizături. Materialul folosit la constructia ei, este piatra (la fundaţie) şi cărămida, iar ca liant s-a folosit pământ galben. Acoperişul este simplu cu ţiglă solzi. Turnul este cu două etaje în formă de prismă dreptunghiulară cu acoperiş ascuţit în 8 ape, acoperit cu
            </p>

                    <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Este realizata in tehnica „all secco” sau tempera grasă, finalizându-se în proporție de 80%. Pictorul angajat pentru această lucrare este Marian Verza din Sibiu, pictor de categoria a II-a. Vechiul iconostas este din lemn pictat de pictorul Toma Sopa din Ilimbav în anul 1960. Uşile împărăteşti sunt din lemn poleite şi pictate iar uşile diaconeşti sunt tot din lemn pictate tot de Toma Sopa.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>:</p>

             <p style="text-align:justify; text-indent: 5ch;">
                Cel mai vechi obiect de cult este o icoană cu Sfântul Dumitru, icoană din secolul XVIII pictată pe sticlă. Tot din secolul XVIII sunt datate icoanele Botezul Domnului, Învierea Domnului. Pogorârea Duhului Sfânt. Sf.  Apostoli Petru si Pavel. Numele pictorului nu ni s-a păstrat. Toate sunt pictate pe sticlă.
            </p>





             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>:</p>

            <p style="text-align:justify; text-indent: 5ch;">
             Principala carte de cult, Sfânta Evanghelie este din anul 1806. Este în limba româna scrisă cu litere chirilice. Este cumpărată de dascălul Toma Iosif. Acesta a copiat mai multe cărţi religioase: Judecata ceriului, Vedeniile Sfântului Grigorie, Minunile Precestei precum şi Octoihul cel mic, carte din care slujea Vecernia, în casa sa, iar din 1811 în prima biserică, împreună cu românii din Marpod. Referitor la aceste cărţi, Iosif Toma scrie: „Preotul de la care am scris acestea le-a scris la anul 1751-popa Iancu din Săcel-De la acela am scris eu acestea, cel mai mic şi mai nemernic mult păcătos Toma Zaharia Iosif din Ungro- Vlahia”. Numeroase cărţi sunt de la mijlocul secolului al XIX- lea, în majoritate donate de consilierul Iacob Bologa: Sfânta Evanghelie (1844), tipărită la Sibiu. Molitvelnic (1849) din timpul episcopului Andrei Şaguna, tipărit la Sibiu, Mineiele lunilor: Februarie, Martie, Aprilie, Mai, Iunie, Iulie, August, Septembrie, Octombrie, Noiembrie, Decembrie.
            </p>

              <p style="text-align:justify; text-indent: 5ch;">
              Toate aceste obiecte se păstrează la Muzeul Protopopiatului Agnita.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Primul preot care se ocupă periodic de romanii din Marpod este preotul "Niculae din Nocrich". Despre el se zice: „că oamenii aduceau pe popa Nicolae din Nocrich vara totdeauna sub paza celor 6 bărbaţi înarmaţi cu pari de frica unor saşi. Preotul este atestat la sfârşitul secolului XVIII şi începutul sec XIX.Alţi preoţi care au mai administrat această parohie sunt : loan Cândea (1812-1817), Simion Tocoae(1817-1821), Ioan Chirtop (1821-1826), loan Tocoae (1826-1829). Între ani 1829-1848 parohia e administrată de preotul loan Sinai. După el au urmat între anii 1860-1861 Aron Chirtop apoi a servit Ion Popoviciu (1861 -1862).În 26 octombrie 1862 este numit ca preot în Marpod Iacob Bologa, nepot de frate al consilierului Iacob Bologa. Acesta este primul preot născut în sat.În ziua de 14 octombrie 1895 este numit ca preot pentru Marpod Florian Bologa, fiul preotului Iacob Bologa. Acesta avea 22 de ani. Sub păstorirea lui lungă (1895-1945) s-au înfiinţat numeroase fonduri şi societăţi pentru înfrumuseţarea bisericii, precum şi un fond pentru edificarea unei noi biserici. Dupa pastorirea preotului Florian Bologa, în parohia Marpod sunt amintiţi următorii preoţi: Toader Nichifor, Octavian Stoian, Pompei Trif, Cornel Hategan, Buruiană Valer Gheorghe Bândea, Valer Stănilă, loan Fulea, Niculae Păcurar, Aurel Chirilă Constantin Pintesu. La 19 iulie 1977 este numit preot pentru parohia Marpod si filia Tichindeal , preotul Moise Rusu care se ocupa de parohie până în noiembrie 2012, când se retrage la pensie. Actualmente, preotul  Marius Munteanu, de loc din Brașov, care se ocupă de parohie până în  2020 şi actualemnte preot este Păvălaşcu Marian.
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
             Parohia deţine un cimitir aflat în imediata vecinătate a bisericii.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
               în cursul anului 2014 s-au desfășurat pelerinaje cu copii la mănăstirea Sâmbăta de Sus, cu ajutorul departamnetului social al Arhiepiscopiei Sibiului, cu credincioșii la mănăstirea Prislop, mănăstirea Nicula, catedrala din Cluj. Activități catehetice și de combatere a consumului de droguri și alcool cu copii în parteneriat cu Primăria Marpod și instituțiile responsabile.
          </p>

          <p class="col-lg-12" style="text-indent: 5ch;">
              Pe raza parohiei funcționează azilul de bătrâni „Cornelia și Bobu”, cu care avem un protocol de colaborare, și pe baza căruia ne desfășurăm activitate din punct de vedere pastoral.
          </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            În timpul părintelui Moise Rusu s-a început pictura bisericii în tehnica „all secco”, mai exact la mijlocul anului 2012, pictură care a continuat sub supravegherea noului preot și care este aproape de finalizare. De asemenea s-a schimbat întregul interior al bisericii: s-a schimbat podeaua cu scandura, și s-a pus mochetă pe toată suprafața, s-a pregătit Sfânta Masă pentru sfințire, s-au înlocuit aproape toate obiectele de cult, s-a achiziționat mobilier, stație audio, s-au turnat alei în jurul bisericii, s-a schimbat tot acoperișul cu țiglă nouă pe biserică și turn, inclusiv toată lemnăria.
          </p>

            <p class="col-lg-12" style="text-indent: 5ch;">
            	Parohia Marpod numără 156 de familii de credincioși ortodocși. S-a construit o capelă mortuară, iar pe viitor avem în vedere  și înființarea unui centru social-filantropic, în parteneriat cu primăria Marpod.
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
    1. 	 Vasile Rusu, <i>Românii din Marpod</i> , editura Imago, Sibiu, 1999;
  </li>

   <li>
    2. Pr. M. Păcuraru, „Politica statului ungar față de biserica românească din Transilvania în  timpul dualismului 1867-1918”, Sibiu, 1986.
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Marpod/01edf06d-77bb-44b2-abf2-c08e67cfa30b.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Marpod/0b7acaa5-9b38-4f14-af24-a56d929d8e76.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Marpod/0cdb3a56-67ec-4f27-a6dd-9cc97f767b39.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            </li>
            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Marpod/282adb17-2d19-424e-b190-44c74e383074.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Marpod/81339975-1128-4888-8ce6-2fcbccc4d79e.jpg"
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
