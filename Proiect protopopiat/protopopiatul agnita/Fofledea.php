<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Fofeldea</title>
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
          <h3><span>Parohia Ortodoxă Fofeldea</span></h3>
          <p> Biserica cu hramul „Sf.   Vasile   cel   Mare”</p>
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
              <p>Localitatea Fofeldea, nr. 207, jud. Sibiu</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-secondary" href="mailto:">
                   horatyu@yahoo.com
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
                07441868530
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/585e9a42-8ac7-41ee-a61c-be95cda55401.jpg"
              class="img-fluid col-lg-12 " style="height:50rem"
              alt=""
            > <span style="margin-left: 1rem" class="text-danger"><i>FOTO: Biserica cu hramul „Sf.   Vasile   cel   Mare” Fofledea </i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/profil.jpg" style="height:30rem;">
                <div class="team-content">
                    <h3 class="title">Pr. Horațiu-Ilie BARAC</h3>
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
            Numele localităţii plus toponimie: de-a lungul timpului localitatea a fost cunoscută sub următoarele denumiri: Altus Campus, Alto Campo (Câmp Înalt), Fofeld, Foventea, Hochfeld şi Fofeldea.
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
              Prima atestare a localității datează din 1382; de-a lungul timpului a avut diferite denumiri: Hohfeldia, (în dialectul săsesc Hiufält, Hîfield, în germană Hochfeld, în trad. "Câmpul Înalt", "Câmpul de Sus", în maghiară Hóföld, Fófeld);. Localitatea Fofeldea este aşezată în partea de sud-est a judeţului Sibiu, la 32 km depărtare de municipiul Sibiu, pe drumul judetean 106 Sibiu-Agnita. Satul este situat pe firul văii Fofelzii, la 4 km depărtare de Valea Hârtibaciului, fiind înconjurat de dealuri cu înălţimi cuprinse între 550 şi 650 m: spre răsărit Dealul Cocorului, spre miazăzi Dealul Rotunzii, Gruiul Curmăturii, Măgura şi Piscul Iazului, spre sud-est Piscul Dacilor, spre nord-vest Piscul lui Vâlc, spre nord Dealul Marpodului şi spre nord-est Dealul Ilimbavului. Comune vecine: la est Găinarul (Poieniţa), la sud-est Colunul, la sud Glâmboaca, la sud-vest Hosmanul, la nord-est Săsăuşul, la nord-vest Marpodul, la nord Ilimbavul. Acest sat îşi are începutul chiar pe vremea daco-romanilor, bazele lui fiind puse de către santinelele romane aduse aici de către romani împotriva dacilor. Fântâna Uriaşilor, o fundaţie de piatră şi cărămidă descoperită în partea de răsărit a satului în anul 1958, este o dovadă în acest sens. Se zice că primele case din acest sat ar fi fost construite în Fundătură, în Rătunda, unde azi sunt livezi şi pe Uliţeni, unde se află Fântâna Uriaşilor. Localitatea a fost atestată documentar pentru prima data în anul 1332
           </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Istoria zidirii ei: înainte de anul 1700 a existat o biserică veche din lemn, care a fost luată forţat de către uniți. Românii ortodocşi majoritari au fost nevoiţi să se roage lui Dumnezeu într-o casă, apoi într-o bisericuţă de lemn până în 1808 când s-a terminat biserica cea nouă, construită din piatră şi cărămidă între anii 1804-1808, având hramul “Sfântul Vasile cel Mare”. Meşteri zidari au fost Andrei şi Toma Krauss din Sibiu, iar dulgher a fost Kristian Gromas. Lucrarea a fost terminată de aceşti meşteri în anul 1808, iar finisajul se pare că a durat pînă prin 1810. Nu există nici o mărturie din care să reiasă contribuţia unei familii de nobili sau boieri. Biserica este o ctitorie a credincioșilor din Fofeldea.
            </p>

              <p style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Arhitectura (plan, dimensiuni, material de construcţie):</span>
           </p>

             <p style="text-align:justify; text-indent: 5ch;">
              Arhitectura construcţiei este în formă de navă cu 3 bolţi-calote în pronaos şi naos sprijinite pe piloni de zidărie cu pandativ şi separate cu arce semicaro. Altarul este în formă de absidă cu bolta-calotică mai mică. Lungimea totală a bisericii este de 30 m, iar lăţimea de 10 m. Zidurile sunt din piatră cu brâie subţiri din cărămidă, iar liantul de la fundaţie şi până la acoperiş din pământ galben, iar partea exterioară ascunde bolţile prin şarpante în formă gotică. Biserica are turnul în formă gotică legat în partea de vest.
            </p>

             <p style="text-align:justify; text-indent: 5ch;">
              Biserica a fost reparată în anii 1908–1909, când s-au introdus tiranţi metalici transversali şi în 1930 s-a reparat fundaţia şi tencuiala exterioară şi interioară, cu aceste ocazii distrugîndu-se porţiuni din pictură, cu toată grija cu care s-a lucrat, însă lucrările au fost necesare prelungindu-i astfel viaţa. Abia în anul 1958, în timpul preotul paroh Liviu Opriş s-a putut reface acoperişul. Biserica a mai fost apoi lovită de un trăsnet puternic, căzând o parte din pictură. Biserica era propusă pentru a fi declarată monument istoric. Demersurile pentru introducerea în lista monumentelor istorice şi pentru reparaţia bisericii începute în anul 1957 de către preotul paroh Liviu Opriş, au fost apoi continuate de către preotul paroh Ioan Fulea, numit în parohie începând cu 1 martie 1965. Situaţia monumentului era critică, necesitând o intervenţie urgentă. Preotul paroh Ioan Fulea (care avea şi o experienţă în construcţii) a reuşit în vara- toamna anului 1965 să introducă biserica în lista monumentelor istorice, apoi în baza devizului aprobat a primit ajutor şi a început procurarea materialelor. În anul următor au început lucrările de reparaţie capitală.
            </p>


            <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura (când a fost realizată, de către cine, când a fost restaurată):</span>
           </p>

             <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
             Pictura (când a fost realizată, de către cine, când a fost restaurată): se ştie din memoria satului că pictura a fost executată de pictorii fraţii Grecu din Săsauşi. Aceşti pictori se trag dintr-o familie de simpli zugravi, care au moştenit arta din tată în fiu, formând o adevărată ,,dinastie de pictori şi zugravi”, cum pe bună dreptate îi numeşte Vasile Drăguţ. Ultimele vlăstare au câştigat experienţă la mănăstirile din Moldova şi Ţara Românească (poate şi Italia) şi au evoluat până la frescă, formându-şi un stil propriu.
            </p>

             <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
             Pictura are valoare integră şi multiplă: artistică prin desen precis şi plin de expresie, prin cromatica culorilor complimentate (cumpănite) şi dispuse măiestriei în detaliu cât şi în ansamblu, realizând căldura şi înaintarea artistică. Mesajul duhovnicesc este redat foarte reuşit prin linii simple, dar pline de înţeles ca şi prin întrebuinţarea culorilor asemănătoare proverbelor populare, care în cuvinte puţine redau adevăruri adânci. De altfel întreaga pictură are  un adânc caracter popular. Mesajul istoric este redat prin bogatele şi grăitoarele scene din a II-a cupolă din naos, scene biblice cu captivaţie şi elemente de epocă. Biserica Ortodoxă ,,Sfântul Vasile cel Mare” este monument istoric datorită vechimii şi picturii interioare. Această pictură este considerată la fel de importantă ca albastru de Voroneţ; ea mai este supranumită în rândul specialiştilor ,,Galben de Fofeldea”. Tehnica „fresco” a permis artiştilor să reflecteze canoanele artei bizantine şi să creeze panouri vaste. Faptul că pictorii au stăpânit excelent tehnica de execuţie „al fresco” este dovedit de rezistenţa în timp a pigmenţilor. Totul este talent şi meşteşug. Rămâne încă a se cerceta locul de extragere a pigmenţilor minerali folosiţi - în special galbenul cu nuanţe atât de vii. Galbenul predomină reuşind să pună în valoare diferitele nuanţe de roşu, gri, albastru, verzui. Este un galben-crom cu o strălucire de aur, fiind caracteristic frescelor fraţilor Grecu. Pentru a cunoaşte adevărata valoare, pictura trebuie văzută la faţa locului.
            </p>


             <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
             Ansamblul iconografic: în pronaos este pictată Maica Domnului cu pruncul în braţe, înconjurată de figuri din Vechiul Testament şi Noul Testament şi medalion cu mucenici.
            </p>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              Naosul: prima bolta: Pantocratorul –Sf. Treime, pictată în 3 feţe în acelaşi cap, cu 3 registre reprezentând cete de îngeri, scene biblice în costumaţie de epocă, un ţăran iobag, care duce crucea Mântuitorului, escortat de soldaţi îmbrăcaţi în haine habsburgice. Scena judecăţii în faţa lui Pilat –unde acuzatorii sunt îmbrăcaţi în costume de juzi, gornici, domet de pământ, principi etc. Pe bolta naosului este pictat Iisus Hristos Pantocratul, înconjurat de 3 registre de pictură: cete de îngeri, prooroci şi Sfinţi Părinţi bisericeşti, iar la cei 4 pandativi evangheliştii Matei, Marcu, Luca şi Ioan.
            </p>

             <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              În Sfântul Altar, pe boltă, se află alt Pantocrator, iar pe pereții laterali următoarele scene de pictură: cei 12 apostoli care primec împărtăşania din mâna Mântuitorului, iar Iuda o scuipă jos; Sfinți Părinţi ai Bisericii; scena tăierii capului Sfântului Ioan Botezătorul; în stânga viziunea lui Petru din Alexandria şi naşterea Sfintei Fecioare Maria.
            </p>

             <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              Pe pereţii laterali sunt pictaţi în întreaga biserică sfinţi în mărime aproape naturală, precum şi diferite scene din Noul Testament, Vechiul Testament şi istoria Bisericii.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult:</span> În spaţiul muzeal al parohiei sunt păstrate şi mai multe cărţi vechi, editate după anul 1790, între care majoritatea cărţilor tipărite de mitropolitul Andrei Şaguna şi dicţionarele limbii române ale lui August Treboniu Laurian în anul 1867.</p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi.</span>: Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span>Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span>Nu este cazul.</p>

          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Şirul preoţilor parohi: Daniel Romeo Iaru (1740-1750); Natham Zaharia (1847 –1883); Aron Chirtop (1883-1907); Ioan Bonea (1907-1946); Ioan Bonea jr. (1946-1948); Emil Stoica (1948-1956); Liviu Opriş (1956-1959); Pompiliu Acelenescu (1959-1960); Cinezan Vasile din Hosman -administrator (1960-1965); Ioan Fulea (1965-1984); Ioan I Muntean (1984-1999); Mihai Tolea (1999-aprilie 2001); Călin Roajdă din Hosman –administrator (mai-august 2001); Gheorghe Negrea (sept. 2001–februarie 2003); Muntean Ioan II (februarie 2003–2010); Ioan-Dumitru Tătoiu (2010-2017); Barac Horațiu-Ilie (2017-prezent).
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
              Parohia are în proprietate un cimitir parohial de aproximativ 30 ari.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:</h6>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;"> Personalități importante</span>
           </p>

          <p class="col-lg-12" style="text-indent: 5ch;">
            1. August Treboniu Laurian (1810-1881), istoric, filolog, publicist, primul secretar al Academiei Române din Bucureşti, inspector şcolar în Moldova şi fruntaş al Revoluţiei din 1848;
          </p>

           <br>
           <p class="col-lg-12" style="text-indent: 5ch;">
            2. Ioan Stoica (1897–1926) mecanic de aviaţie şi pilot de avioane.
          </p>

          <br>
           <p class="col-lg-12" style="text-indent: 5ch;">
            3. Daniel Cordescu: învăţător, a înfiinţat următoarele: Liceul Lumina din Bucureşti, dărâmat de comunişti, Institutul de Credit şi Economii, societate pe acţiuni, cea dintâi bancă ţărănească din Ardeal (1897).
          </p>

          <br>
           <p class="col-lg-12" style="text-indent: 5ch;">
            4. Ioan Manliu –profesor în Bucureşti, de la dânsul şi-a procurat vestitul Badea Cârţan cărţile, pe care le-a adus în Ardeal.
          </p>


          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 460 .
          </p>

          <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Activităţi pastoral-misionare, culturale, editoriale, filantropice, catehetice ş.a.</span>
           </p>

          <p style="text-indent: 5ch;">
          Activităţi pastoral-misionare, culturale, editorial, filantropice, catehetice ş.a.: programul catehetic naţional “Hristos împărtăşit copiilor”; proiectul educativ naţional “Alege şcoala!”; participarea la etapa pe protopopiat a concursurilor naţionale de miniproiecte cu caracter misionar-filantropic organizate anual în întreaga Patriarhie Română; sprijinirea în măsura posibilităţilor a persoanelor vârstnice şi a celor care se confruntă cu grave probleme sociale.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Fofeldea</i>;
  </li>

   <li>
     2.	Nicolae Stoicescu, <i>Repertoriul bibliographic al localităţilor şi monumentelor medievale din Transilvania</i>, vol I, Editura Andreiana, Sibiu, 2012;

  </li>

   <li>
      3. Coriolan Suciu<i>Dicționar istoric al localităților din Transilvaniau</i>, vol. I, Bucureşti, 1967.
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/1b2d9ea2-a3cc-447d-8176-e6780fcf99bf.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii//Fofeldea/309a6535-07fe-42b5-a679-e2a5122bba53.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/5249639e-570a-4076-b8f8-a637614120f5.jpg"
              alt=""
              width="90px"
            >
                      <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/585e9a42-8ac7-41ee-a61c-be95cda55401.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/6f4e8709-6820-435c-a1c3-2f3f0713a1b6.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/b611e92e-2e00-4c51-9b3c-d3d919cbbf52.jpg"
              alt=""
              width="90px"
            >
                      <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/c392ff41-9efd-4af4-933c-de379d6dc709.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/c82bf270-f9c9-4e7b-b36e-86e9bd2e3958.jpg"
              alt=""
              width="90px"
            >
          </li>
          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Fofeldea/d8b4c0d0-8b91-4f24-8aab-2d2f489e3110.jpg"
              alt=""
              width="90px"
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
        <button class="carousel_indicator"></button>
        <button class="carousel_indicator"></button>
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
