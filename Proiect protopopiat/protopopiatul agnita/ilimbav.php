<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Ilimbav</title>
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
          <h3><span>Parohia Ortodoxă Ilimbav</span></h3>
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
              <p>Localitatea Ilimbav, nr. 152, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                vlad_stoica89@yahoo.com
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
                0741.593389
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/3f0cc639-b192-4f0d-9b02-d3a7403c80ae.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Buna Vestire” Ilimbav</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/c341cb4c-9ab8-46a1-9b27-ba7d12ff24df.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Vlad-Dumitru STOICA</h3>
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
             Ilimbav, Ilenbav (în dialectul săsesc Ellimbich, germană Eulenbach, Illenbach, în maghiară Illenbák, tradus ca ‚ ”Paraul Ulmilor”), este o localitate din județul Sibiu.
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
              Este situată la 30 km de Sibiu și la 7 km sud-est de râul Hârtibaci, în zona de podiș (461 m). Din primul recensământ cunoscut din 1488  se atesta 18 gospodării, 3 părăsite, ca în 1805 parohia să numere 296 familii ortodoxe, iar în prezent acest sat tradiţional ardelenesc are aproximativ 200 locuitori și înfăţişează o comunitate restrânsă compusă preponderent din oameni vârstnici şi câteva familii ce aparțin comunității rome.Sursele de venit pentru locuitori sunt reprezentate de pensiile modeste de ţăran agricultor, produsele de la animalele crescute în gospodării şi culturile de pe parcelele de pământ deţinute de fiecare proprietar. În apropierea satului funcţionează o staţie de uscare a gazelor unde lucrează câţiva ilimbăveni mai tineri.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Biserica a fost zidită între anii 1826-1836, pe locul unei foste biserici de lemn. Pentru zidire s-au luat bani împrumut de la Banca Universităţii Săseşti, plătiţi apoi din obolul credincioşilor. Maiştri zidar au fost: Sim şi Kauci din Avrig, iar dulgher Cantor Hans din Nocrich. În anul 1898 s-a reparat biserica şi s-a legat cu cheile de fier care sunt şi azi. La împlinirea a 100 de ani de la zidirea bisericii, în 1936 i s-au făcut reparaţii capitale în interior şi exterior. Maistrul zidar a fost Low din Marpod şi zugravii Ioan Gâlea şi Ioan Andrei din Porceşti. În 1980 s-au făcut reparaţii ale acoperişului, iar în anii următori a fost turnat trotuarul din jurul bisericii şi s-au fixat în pereţii de la apus, la intrarea în biserică plăci de marmură cu numele eroilor căzuţi în cele două războaie mondiale. În perioada 2009-2014 s-au efectuat lucrări de amploare la exteriorul bisericii, al zidului exterior, reacoperirea turnului si a bisericii, lucrări de drenaj, consolidarea părţii dinspre altar cu un zid de piatră, precum şi multiple lucrări de înfrumuseţare la interior.
            </p>

            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie) </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Are formă de navă cu ferestre semi-gotice achiziţionate de la Biserica evanghelică din Nocrich. Interiorul este semi-bizantin cu trei cupole si un amvon de cărămidă, având lungimea de 25m şi lăţimea de 7.30m şi înălţimea la bolte de 6.90 m. Materialul folosit a  fost piatra adusă de la Olt şi cărămida, iar acoperişul din lemn şi ţiglă.
            </p>

                    <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Între anii 1944-1945 s-au facut uşi la iconostas şi pictate în ulei de pictorul Ioan Căzilă, iar între anii 1974-1976 biserica a fost pictată în „ fresco” de către pictorul Ioan Căzilă, fiu al satului, în timpul păstoririi preotului Radu Bot.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>:</p>

             <p style="text-align:justify; text-indent: 5ch;">
              Icoane pe sticla, potir de plumb, cărţi cu litere chirilice: „Chiriocodromion”, 1732„Evanghelie”, 1760„Pentricostarion”, 1767„Liturghier”, 1798 „Predici” 1810„Patima şi moartea Mântuitorului”, 1808„Apostol” 1814„Octoih Mare”, 1825 „Psaltire” 1850, „Evangheilie”, 1859 „Chiriocodromion” 1855,„Molitflenic”1874„ Noul Testament”, 1877.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>:</p>

              <p style="text-align:justify; text-indent: 5ch;">
                Inscripţia de pe turn are următorul conţinut: „Cu ajutorul unuia Dumnezeu, Tatăl, Fiul şi Duhul Sfânt, s-a început această casă sfântă a se ridica în zilele înaltului împărat Francisc I la anul 1826 şi s-a isprăvit sub al nostru episcop Vasile Moga, protopop Ioan Popoviciu, preoţii Ioan Popovici şi Ioan Tocoaie, curator Savu Toacă, jude Ioan Oprea Lazăr, la anul 1836”.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Savu Toaca (epitrop), Teodosie Hordobeț (epitrop), Simion Tocoaie (cântăreț).</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Preoţii ortodocşi ce au slujit în parohia Ilimbav au fost: Ioan Popovici- hirotonit în Țara Românească în 1759, Ioan Cândea -hirotonit în Transilvania în 1785, Ştefan Popovici – hirotonit la Arad în 1797. Între 1782- 1885 au slujit preoţii: Ioan Popovici, Simion Tocoaie, Ioan Tocoaie, Iosif Popovici (acesta din urmă şi-a schimbat numele în Sinai după întoarcerea de la Muntele Sinai) şi Ioan Sinai. Au urmat preoţii: Ioan Alexandru 1886-1941, Nichifor Todor 1941- 1946, Valer Bânda 1947- 1966, Boiu Ioan 1967-1972, Radu Bot 1972-1979, Ioan Rus 1979 – 2008,  Viorel Pîntea (2008-2017), Vlad Dumitru Stoica (2017-prezent).
           </p>

           <br>
            <h6 style=" text-align:justify; line-height: 1.2";>Biserica de lemn "Buna Vestire"</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
              Tradiţia locului păstrează amintirea aducerii ei in anul 1852 din altă localitate si anume,Noul Român fiind desfăcută, bucată cu bucată, transportată şi asamblată pe noul amplasament, peste o fundaţie de piatră.
            </p>

            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie) </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              În ce privește arhitectura, biserica din Ilimbav este construită din bârne de stejar, dispuse în cununi orizontale, purtând denumirea curentă de „bolckbau”. Bârnele au secţiune dreaptă, întregul sistem de pereţi pe care îl alcătuiesc sprijinindu-se pe o talpă din trunchiuri masive de stejar, aşezată la rândul ei, pe un soclu de piatră;sistemul de articulaţie, folosit la îmbinarea a două grinzi, este „în coadă de rândunică”.
            </p>

                    <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Programul iconografic al bisericii de lemn din Ilimbav se distinge în primul rând prin claritate. Factura ţărănească a picturii e evidenţiată de expresia ei curată şi sinceră, fără a fi naivă. În însuşirile ei reverberează ceea ce e caracteristic stilului bizantin.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>:</p>

             <p style="text-align:justify; text-indent: 5ch;">
              Icoane pe sticla, potir de plumb, cărţi cu litere chirilice: „Chiriocodromion”, 1732„Evanghelie”, 1760„Pentricostarion”, 1767„Liturghier”, 1798 „Predici” 1810„Patima şi moartea Mântuitorului”, 1808„Apostol” 1814„Octoih Mare”, 1825 „Psaltire” 1850, „Evangheilie”, 1859 „Chiriocodromion” 1855,„Molitflenic”1874„ Noul Testament”, 1877.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>:</p>

              <p style="text-align:justify; text-indent: 5ch;">
              Pe clopotul turnat în bronz in anul 1854 se poate citi următoarea dedicaţie: „Î(n). N(umele). T(atălui). F(iului). D(uhului). Sfunt a Troi(Ţei) şi al Bunei Vestiri szau fokut acest klopot pe seama Sfintei Biszereczi Unite a Illimbavului Ioan Luka parochial Mathei Ignat Dascăl Zoszim Tokoae kantor Ioan Nika Popi Krisnik Zavu Toaka Ioan Pfilip Ceorg Caef la Sibiu 1854”.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
            Masa Sf. Altar cu tăblia tăiată în formă de disc (50 cm, în diametru), sprijinită pe un picior fusiform. Cioplitorii au incizat pe acesta o cruce cu braţe trapezoidale si un fragment de text: ВълћтЭρмэ, „Văleat 7147” (1639 de ani, scurşi de la naşterea lui Hristos).
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Anul 1639 reprezintă data târnosirii vechii biserici ortodoxe a satului construită, cel mai probabil, din lemn.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
             În anul 2011, biserica a fost inclusă întru amplu proiect de restaurare, fiind monument isotric, realizându-se până în prezent reparații la acoperiș, lucrări de consolidare, precum și fixarea picturii prin aplicare de foiță japoneză.
            </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Cimitirul parohial, in suprafata de 1 ha, se invecineaza nord-estic cu teritoriul bisericii de lemn si se afla in proprietatea bisericii, locurile de veci atribuindu-se gratuit.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut: Nu avem consemnări deosebite menţionate în documentele parohiale  </h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
             Vechiul camin cultural se afla in proprietatea parohiei sia avut in trecut rolul de scoala confesionala, in prezent fiind in curs de restaurare. Parohia detine la casa parohiala o biblioteca ce cuprinde  peste 50 volume de carte religioasa, colectii de reviste si documente de arhiva.
          </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
             în prezent, parohia numara 193 decredincioși creștini ortodocși, neexistând alte confesiuni.
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
            Activități pastoral-misionare, culturale, editoriale, filantropice, catehetice: participare la toate concursurile social-filantropice organizate de Patriarhia Romana, activitati catehetice si sociale desfasurate in special cu copiii de etnie roma.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
     1. <i>Cartea de Aur a parohiei </i>;;
  </li>

   <li>
     2.  <i>Arhiva bibliotecii parohiale </i>;
  </li>

     <li>
     3.   Lect. Dr. Ioan Abrudan, <i>Biserica de lemn Buna Vestire, din Ilimbav</i> , Revista Teologica, nr.3/2009, p.21-55.
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/3f0cc639-b192-4f0d-9b02-d3a7403c80ae.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/5c658542-d101-4f42-9cd7-2cd164357820.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/b09c3127-9876-4cab-80a7-90032a8ef53a.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
            </li>
            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/c341cb4c-9ab8-46a1-9b27-ba7d12ff24df.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/c9bd6e7a-b404-4198-8349-19e5353d3ef7.jpg"
              alt=""
              width="90px"
              tyle="object-fit: contain;"

            >
          </li>
            <li class="carousel_slide">
            <img
              class="carousel_image img-fluid"
              src="../protopopiatul agnita/assets/img/poze__parohii/Ilimbav/ed2717ec-5f88-46d9-84b1-31ccd6781523.jpg"
              alt=""
              width="90px"
              style="  object-fit:contain;"
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
