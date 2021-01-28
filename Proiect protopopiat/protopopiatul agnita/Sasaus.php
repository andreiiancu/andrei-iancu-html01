<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Săsăuș</title>
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
          <h3><span>Parohia Ortodoxă Săsăuș</span></h3>
          <p> Biserica „Adormirea Maicii Domnului”</p>
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
              <p>Localitatea Săsăuș,jud. Sibiu</p>
            </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6">
            <div class=" info-box mb-4">
              <i class="bx bx-envelope"></i>
              <h3>E-mail</h3>
                <a class="text-light" href="mailto:">
                   pavellucian77@gmail.com
                </a>
             </div>
          </div>

          <div class=" subcontact col-lg-3 col-md-6"

          >
            <div class="info-box  mb-4 col-md-6">
              <i class="bx bx-phone-call "></i>
              <h3 class="">Sună</h3>

              <a class="text-light  " href="tel:+">
               0741.794478
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Sasaus/sasaus-profil.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain; "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul "Adormirea Maicii Domnului" Săsăuș</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Sasaus/" style="height:23rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Lucian-Ioan PAVEL</h3>
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
             Denumirea localității Săsăuș este foarte veche și este legată de prezența sașilor colonizați  în această parte a Transilvaniei lângă așezămintele românilor aflați în această zonă. Sașii au adus cu ei acest nume din Germania, unde mai există cel puțin trei localități cu numele de Sachsenhausen. Satul este atestat documentar pentru prima dată în 1488, sub denumirea de Zazanhuz, apoi Sachsenhausen, în 1508 Sagezenhawsen, în 1674 Sassahuss.
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
               Satul Săsăuș este situat la nord-vest de orașul Sibiu, la aproximativ 45 km și se învecinează la nord cu satul Chirpăr, la sud cu satul Nou Român, la est cu Șomartinul și la vest cu hotarele satelor Ilimbav și Fofeldea. Așezat în centrul țării, este situat la marginea sudică a podișului Hârtibaciului. În anul 1733 această așezare avea 670 suflete ortodoxe și unite, în 1762 avem 5 preoți uniți, fără nici un credincios pentru un număr de 199 familii neunite.Vechile obiecte găsite pe locul satului (un vârf de lance de la sfârșitul epocii bronzului, un păhărel de alamă, un mojar și un dinte de mamut), arată că regiunea a fost locuită din cele mai vechi timpuri.
            </p>

            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Lăcașul de cult ortodox cu hramul „Adormirea Maicii Domnului” din Săsăuș este cea mai veche biserică monument istoric de pe Valea Hârtibaciului.Profesorul Valeriu Literat, afirma că data încheierii construcției bisericii ar fi în anul 1780-1782, lansînd însă ipoteza că ar fi mai veche de acest an. Nu se cunoaște cauza lipsei pisaniei din biserică, în care să fie specificată data exactă și conjunctura în care ar fi fost construit monumentul. Pr. Cornel Stănuleț aprecia în informațiile găsite în arhiva casei parohiale că această biserică ar fi fost zidită în anul 1780, din dania credincioșilor, nelăsându-se mai prejos de alte sate vecine.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
               Biserica este construită în stil autohton basilical în formă de corabie cu un turn clopotniță de forma unei prisme, cu plan rectangular, care asigură și intrarea în nava centrală dinspre vest. Biserica are un plan dreptunghiular alungit și dimensiuni medii între bisericile românești de zid (26 x 8 m). Nava și absida au un acoperiș piramidal, cu șarpantă de lemn și învelitoare de țiglă solzi, iar acoperișul turnului „reprezintă o șarpantă istorică, element preluat din arhitectura turnurilor de apărare ale ansamblurilor fortificate. Zidurile exterioare au grosimi cuprinse între 1,30 și 0,93 m și sunt pătrunse de șase ferestre care prezintă elemente gotice. Structura este de zidărie portantă mixtă, piatră de râu, gresie moale și cărămidă. Turnul este pătrat, înalt de 17 m, acoperit cu țiglă (reacoperit în 1912) și are trei clopote. Pronaosul a avut cupola pictată, ca și în naos și altar. Ea s-a dărâmat la cutremurul din 1940 și plafonul a fost reconstruit pe plan drept pierzându-se și elementele de pictură. Pardoseala este din lemn de brad și a fost schimbată în 1947 ,după ce biserica a fost trăsnită. Tot atunci s-au efectuat reparații asupra tocurilor și giurgiuvalelor de la ferestrele bisericii și vopsite de trei ori cu vopsea de ulei cu completarea ferăriei necesare și s-a intervenit asupra întregului edificiu. Lucrări de conservare și întărire a structurii monumentului s-au mai efectuat în anii 1959 și în  2009-2010. Prezentul lăcas de cult, este astăzi cuprins in lista monumentelor istorice, la pozitia SB-II-m-B-12541, aprobată de Ministerul Culturii și Cultelor, cu Ordinul nr. 2314/2004.
            </p>

           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>:
           </p>

           <p style="text-align:justify; text-indent: 5ch;">
            A fost realizată în mod cert la sfârșitul sec. al XVIII-lea, de frații Nicolae și Alexandru Grecu, originari din Arpașul de Jos, care „au început să activeze încă înainte de 1800.  Tehnica de execuție a picturii este „a fresco” cu modelări în proplasmă. Stilul este neobizantin, amintind prin bogăția ornamentelor de stilul brâncovenesc. Gama cromatică este vioaie cu predominarea variantelor de roșu și gri. Galbenul are o strălucire cu totul aparte. Biserica a fost pictată și în exterior și „este posibil să  mai existe sub var fragmente de zugrăveală. Important de precizat este faptul că pictorii din familia Grecu nu lucrau după modele și își preparau singuri vopselele pentru pictură. Ei au cunoscut și respectat ciclurile religioase ale erminiilor bizantine.
            </p>

            <p class="col-lg-12"> <span class="font-italic" >Obiecte vechi de cult</span>: În arhiva parohiei. </p>

             <p class="col-lg-12"> <span class="font-italic" >Manuscrise şi cărţi vechi</span>: În arhiva parohiei.</p>

             <p class="col-lg-12"> <span class="font-italic" >Pomelnice şi alte înscrieri sau inscripţii:</span> Nu este cazul.</p>

             <p class="col-lg-12"> <span class="font-italic" >Cântăreţi şi epitropi de seamă: </span> Nu este cazul.</p>

             <br>
            <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Şirul preoţilor parohi:</span>
           </p>

            <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
              Preoții care au slujit în această biserică sunt următorii: Cârstea Gârbea, George Bunea și Matei al popii Bucur (1761-1767), Gheorghe Bunea, Gheorghe Matei, Gheorghe Bunea Junior, Ioan Matei şi Mihai Banciu(1805-1843), Ioan Popoviciu Senior, Ioan Popoviciu junior(1843-1858), Simion Turtea numit în 1920, Cornel Stănuleț (1922-1966), Gheorghe Rusu (1967-1970), Ioan Ciupitu(1971-1975), Aurel Grama (1976-1978), Ioan Faraon (1978-1987), Ioan Dobrotă (1988-1995), Gavril Man (1995-2006), Alexandru Copăcianu (2006-2017), Lucian-Ioan Pavel (2018-prezent).
           </p>


          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Este situat în partea de est a satului, în locul numit „Dealul lui Banci”, și are o suprafață de două ha. Locul unde este amplasat, fiind cumpărat de credincioșii din sat.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:</h6>

          <p class="col-lg-12" style="text-indent: 5ch;">
            Se remarcă notarii Buzea Nicolae și Ioan Stoica din Săsăuș,  în conducerea despărțământului ASTRA din 1912, când este înființată și biblioteca poporală din acest sat. În 1925 este construită clădirea școlii actuale cu donații din partea săsăujenilor plecați la lucru în America, iar în 1966 căminul cultural. Din 1919 funcționează „casa culturală” cu sediul în vechea școală confesională actuala casă parohială. Preotul Ioan Faraon organizează la casa parohială o colecție de obiecte tradiționale și religioase care odată cu trecerea timpului s-a degradat. Această colecție tradițională (ceea ce s-a mai putut salva) a fost reorganizată în timpul Preotului Alexandru Copăcianu în anul 2012, într-o cameră de la casa parohială. În anul 1966 a fost ridicată clădirea căminului cultural. În 1921 a fost adusă pentru credincioșii greco-catolici biserica mică de lemn, din satul Vurpăr.
           </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch; text-align:justify;">

          </p>


           <p class="col-lg-12" style="text-indent: 5ch;">
            În prezent, în Parohia Săsăuș mai sunt doar 126 de persoane toate ortodoxe, care mai speră la revitalizarea satului și restaurarea bisericii și care contribuie la conservarea patrimoniului cultural, material și spiritual al parohiei.
          </p>

          <br>
          <h6 style="line-height: 1.2";>Surse bibliografice:</h6>

      <p style="text-indent: 5ch;">
        <ul style="list-style-type: none;">
            <li>
              1. Calboreanu, Ovidiu, „Releveu pentru reabilitarea bisericii Ortodoxe din Săsăuș-Studiu istoric”, 2011;
          </li>
            <li>
              2. Preot Ioan Ciupitu, „Istoricul Parohiei Ortodoxe Săsăuș, jud. Sibiu,Arhiva Parohiei;
          </li>
          <li>
              3. Restaurator pictură murală Liviu Ciungan,  „Studiu pentru restaurarea și conservarea picturii murale interioare și exterioare a Bisericii „Adormirea Maicii Domnului din Săsăuș”, 2011;
          </li>
          <li>
              4. Virgil Ciobanu , „Statistica românilor ardeleni din anii 1760-1762”, în AAIN, III, 1924;
           </li>
            <li>
              5. Maistru constructor Francisc Dari,  Ofertă pentru biserica parohială „Adormirea Maicii Domnului din Săsăuș” în Arhiva Parohiei;
          </li>
          <li>
            6. Prof. Maria Drăgan,  Prof. Mircea Drăgan,  „Monografia satului Săsăuș”,  Ed. George Cabas-Sibiu: Anastasis ,2010;
          </li>
          <li>
             7.  Valeriu Literat,  „Biserici zugrăvite de o familie de pictori”, în vol.„Biserici vechi românești din Țara Oltului, Cluj-Napoca, volum îngrijit de Nicolae Sabău;
          </li>
          <li>
            8. Marius Porumb , „Dicționar de pictură veche românească din Transilvania, sec. XIII-XVIII”, București,1998;
          </li>
          <li>
             9. Lucian Sava,  „Deviz privind lucrările de restaurare a picturilor murale, monumentul istoric Săsăuș, com. Chirpăr, 1977;
          </li>
          <li>
              10. Preot Cornel Stănuleț,  „Istoric al Bisericii Ortodoxe Române din Săsăuș”, în Arhiva Parohiei.
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Sasaus/sasaus-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Sasaus/sasaus-2.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

            <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Sasaus/sasaus-3.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>

          <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Sasaus/sasaus-4.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Sasaus/sasaus-profil.jpg"
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
