<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Netuș</title>
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
          <h3><span>Parohia Ortodoxă Netuș</span></h3>
          <p> Biserica „Sf. Apostoli Petru şi Pavel”</p>
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
              <p>Localitatea Movile, jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
                <a class="text-light" href="mailto:">
                  zamfir.dumitru@yahoo.com
                 </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Sună</h3>

              <a class="text-light  " href="tel:+">
              0745.765291
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Netus/Netus-5.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:scale-down "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul hramul “ Sfântul Ierarh Nicolae” Movile</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Netus/profil-preot1.jpg" style="height:30rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Ciprian CONSTANTIN</h3>
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
              Numele localității Movile provine de la dealurile care o înconjoară. După unii, numele satului- Movile, ar veni de la faptul că primii coloniști sași, odată ajunși aici, nu se decideau ce nume sã-i dea locului unde au „descălecat”. Așa cã, în fiecare duminicã, țineau câte o „ședințã” pe una din movilele din zonã, și frigeau câte o oaie. Niciodatã nu ajungeau la un consens cu privire la ce nume sã-i dea satului, așa cã, duminica urmãtoare, o luau de la capãt, pe altã movilã, cu altã oaie la frigare. Așa că după ce au sacrificat multe oi, pe fiecare deal câte una, au numărat pieile acestora și au ajuns la numărul, o sută de dealuri- Hundrubechiu, în germană.
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
             Cunoscută sub denumirea veche Hundrubechiu, satul Movile din comuna Iacobeni este atestat documentar pentru prima dată în anul 1206, când aici exista o parohie romano-catolică, aşezarea fiind numită pe atunci „Villa Militum”. În anul 1355 localitatea apare din nou în documentele vechi cu numele de Hundertpuch (în limba germană: o sută de movile/dealuri). În 1324 a avut loc o rãscoalã a coloniștilor sași din zonã, condusã de Henning din Petersdorf (Petrești) împotriva regelui Carol Robert de Anjou. La 1329, satul îi menționat ca fãcând parte din scaunul Cincu sub numele de “HundertPuch”, iar cu numele de Hundertpucheln apare în anul 1355. În anul 1488, Hundert Bücheln are 54 agricultori, doi pãstori, trei case goale, o moarã și o școalã și este, ca mãrime, a cincea localitate din scaunul Cincu, dupã Agnita, Iacobeni, Cincu Mare și Merghindeal. În 1506, un movilean, Antonius Pauli („de centum Tumulis”) studia la Universitatea din Cracovia. La 1532 Movile avea o populație de 400 de locuitori, numãr impresionant pentru acea epocã. În 1600, trupele lui Mihai Viteazul devasteazã Scaunul Cincu, seria de „încercãri” la care este supus satul de istorie continuând cu mai multe invazii, dar și epidemii de ciumã (1654, 1704, 1705, 1709) populația Movilelor scãzând pânã la 301 locuitori  în 1765. Din fișa noului cimitir ortodox, înființat în jurul anului 1780, aflăm că înainte de această dată dreptmăritorii creștini se îngropau în jurul bisericii. De asemenea se menționează că la data scrierii respectivului document (15 aprilie 1967) în Movile trăiau 305 suflete de români. În 1794, românii din sat încep construcția primei bisericii de piatră din zonă, pe locul fostului cimitir și al unei biserici de lemn din secolul XVII. Anul 1830 aduce scăderea drastică a numărului de locuitori datorită epidemiei de holeră. Anul 1879 aduce încercarea de maghiarizare a școlilor. La 1 ianuarie 1972 în Istoricul Parohiei Ortodoxe Movile Părintele Apolinarie Seiceanu scria: „Astăzi locuiesc în satul Movile 52 de familii de români, cu 232 de suflete, și 35 de familii de țigani cu 98 de suflete. Satul este mixt, deoarece mai conviețuiesc aici și 90 de familii de sași cu 336 de suflete”.După 1989 marea majoritate a sașilor au emigrat în Germania, astfel că la recensământul din anul 2002 existau încă 335 de oameni în Movile, iar astăzi satul nu depășește 300 de locuitori.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
             Legat de creștinii ortodocși din sat, situația lor a fost la fel de grea ca a tuturor celorlalți din Ardeal. În Movile, românii locuiau pe „dealul românilor”, unde aveau biserica, școala confesională și cimitirul, iar centrul satului era ocupat de sași. Actuala biserică ortodoxă din Movile, construită din piatră și cărămidă, ar fi  ctitoria negustorilor braşoveni Radu Bogdan şi Dumitru Orghidan, deşi nu există informaţii oficiale. Ea a fost începută în 1794 și terminată doi ani mai târziu (an care este sculptat în rama uşii de la intrarea în sfântul locaș), pe locul altei biserici mai vechi din lemn, care după unii ar fi fost construită în secolul XVII. După autorii pisaniei de la intrarea în sfântul locaş, bisericuţa din lemn ar fi datat din anul 1470 şi ar fi fost dărâmată o dată cu construirea celei noi. Actuala biserică este monument istoric (SB-II-m-B-12475) şi a fost înconjurată odinioară de cimitir, dovadă a dorinţei movilenilor de a fi împreună cu Hristos şi după moarte.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica este zidită în formă de corabie care conduce pe cei care-i trec pragul „la limanul cel lin” al mântuirii, şi a fost construită în întregime din piatră şi cărămidă, în stil brâncovenesc. Turnul Bisericii care adăposteşte cele trei clopote, se află la intrare, având o înălţime de 15 metri, iar sfântul altar este despărţit de restul sfântului locaș printr-un perete de zid. Naosul, partea din mijloc a bisericii, este împodobită cu o cupolă din cărămidă din care veghează Pantocratorul - icoana Mântuitorului Iisus Hristos, Atotţiitorul. Pronaosul, loc rezervat femeilor, este despărţit de naos prin două coloane pe care sunt pictaţi prooroci. Sfântul locaş de rugăciune nu a suferit nici o modificare de arhitectură de-a lungul timpului, dar reparaţii la pereţii interiori, exteriori şi la acoperiş s-au efectuat în vremea preotului Apolinarie Seicean, în jurul anului 1955, dar și a Părintelui Mircea Stoia. Iconostasul este din zid şi înaintea înfrumusețării cu pictură, a fost acoperit cu icoane pictate pe lemn şi pe sticlă, restul bisericii fiind zugrăvită cu motive naţionale.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Pictura, executată de pictorul Stăniţ Aurel este relativ recentă, lucrările fiind începute în vara anului 1990 şi terminate un an mai târziu, sub păstorirea Părintelui Mircea Stoia. În prezent, sfântul locaș se află într-un amplu proces de reabilitare.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: Nu există.</p>

            <p style="text-align:justify; text-indent: 5ch;">
            Fiind monument istoric, Biserica deţine şi o impresionantă colecţie de obiecte vechi de cult care poate fi vizitată într-un spaţiu reamenajat al casei parohiale zilnic între orele 10-17. În cadrul acestei colecţii există cărţi de cult cu litere slavone (Triod din 1781, Psaltire din 1798, Evanghelie din 1812, Petru Maior, Predici, 1810), icoane pe sticlă din secolul XVIII, prăznicare pictate pe lemn pe ambele părţi în secolul XVIII, un prapor din anul 1794, cu icoana Încoronării Maicii Domnului, dar și  potire vechi.
            </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: în relatarea de mai sus .</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span></p>

            <p style="text-align:justify; text-indent: 5ch;">
               Alături au lăudat pe Domnul la strana sfintei noastre biserici, cântăreții de seamă Gheorghe Bodolea, Roman Bodolea (între anii 1926-1990, cu diplomă de cântăreț bisericesc la Sighișoara), Ioan Gleja, Ioan Gania, Silviu Neagoș ( între anii 1892-1926), Rusalim Ciuchină, Ștefan Ciuchină, Iovian Langa. Unii  dintre epitopii de care își amintesc credincioșii cu mult respect: Ioan Ciuchină și Florian Chișu.
            </p>
          <br>

            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Lista preoţilor care au slujit lui Dumnezeu şi oamenilor din Movile (dar și în filia Noiștat) începe cu anul 1832: Ioan Cioaclă (1832-1865); Ioan Grecu (1865-1902); Macedon Grecu (1902-1940); Pompil Dan (1940-1950); Apolinarie Seicean (1950-1973); Doru Romul Gheaja (1973-1974) sub păstorirea căruia s-a cumpărat actuala casă parohială; Ioan Rohan (1974-1977); Mircea Stoia (1975-1995); Teofil Gârbacea (1995-2003); Adrian Moldovan (2004-2010); Sebastian Toma (2010-2017); Florin-Dumitru  Robu Zamfir (2017-prezent).
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Parohia Ortodoxă Română Movile deține un cimitir parohial în suprafață de 50  ari.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:   </h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            În ce priveşte activitățile culturale din trecut, se ştie că în anul 1903, sub conducerea asociaţiei ASTRA, a fost înfinţată „Reuniunea Femeilor Române” pentru înfrumuseţarea Bisericii. Din același an datează clădirea, unde a funcţionat şcoala confesională-ortodoxă din sat numită  „şcoala valahă” și atestată documentar în 1903 (nu deţinem informaţii dacă aceasta este una dintre sutele de şcoli construite în  vremea sau chiar cu banii Sfântului Mitropolit Andrei Șaguna, sau a fost construită mai târziu), construită pe „Dealul românilor”, clădire care a fost preluată abuziv în temeiul Decretului 176/1948 de către stat, dar retrocedată Bisericii Ortodoxe (Greco-Orientale) din Movile la 6 octombrie 2006 prin osteneala părintelui Adrian Moldovan.
            </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
            Numărul de credincioşi: 300.
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
           S-a editat o foaie parohială lunară numită <i>Calea spre Împărăție</i> .
           În Movile oamenii încă mai fac pâine la cuptorul din curte, şi acest lucru  nu se întâmplă doar înaintea marilor sărbători, ci chiar în zilele obişnuite. De asemenea,  este vestit în zonă  „vinul de Movile” şi tot aici  se poate mânca una dintre cele mai bune prăjituri de pe Valea Hârtibaciului numită lichiu, pregătită de gospodine la sărbătorile însemnate.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Movile</i>;
  </li>

   <li>
    2. NICOLAE STOICESCU, <i>Repertoriul bibliographic al localităţilor şi monumentelo rmedievale din Transilvania</i>, vol I, Editura Andreiana, Sibiu, 2012.
  </li>

    <li>
    3. <i>http://ro.wikipedia.org/</i>;
  </li>

    <li>
    4. <i>www.hundertbuecheln.de</i>;
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Movile/movile-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Movile/movile-2.jpg"
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
