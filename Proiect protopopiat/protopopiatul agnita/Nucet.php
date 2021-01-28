<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parohia Ortodoxă Nucet</title>
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
          <h3><span>Parohia Ortodoxă Nucet</span></h3>
          <p> Biserica „Tăierea capului Sf. Ioan Botezătorul”</p>
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
              <p>Localitatea Nucet, jud. Sibiu</p>
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
              0724.017444
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Nucet/nucet-1.jpg"
              class="img-fluid col-lg-12 " style="height:57rem; object-fit:contain; "
              alt=""
              data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
            >
            <span style="margin-left: 1rem" class="mb-50 text-light"><i>FOTO: Biserica cu hramul  "Tăierea capului Sf. Ioan Botezătorul" Nucet</i></span>
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
                <img src="../protopopiatul agnita/assets/img/poze__parohii/Nucet/profil-preot.jpg" style="height:23rem; ">
                <div class="team-content">
                    <h3 class="title">Pr. Crucian-Gheorghe MURGOIU</h3>
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
            Numele de Nucet vine de la numeroasele livezi bogate în nuci. Așezarea cea mai apropiată este Cornățel, la 3 km., spre V, spre S se află Săcădate, peste Olt fiind Avrigul, la 10 km., iar la NE Glâmboaca la 6 km , iar spre N Hosmanul, la 5 km. La granița NV a satului curge râul Hârtibaciu, satul situându-se in partea stângă a acestuia. Nucetul este străbătut de un singur drum, care leagă cele doua artere asfaltate dispuse în unghi Brașov-Sibiu, Sibiu-Agnita.
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
              Parohia Nucet a făcut  parte până la 01 martie 2017 din Protopopiatul Saibiu, când a fost mutat sub jurisdicția Protopopiatului Agnita.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Satul Nucet, din comuna Roşia, județul Sibiu este așezat la o inalțime de cca. 470 de metri față de nivelul mării, pe o suprafață de ½ km, la 23 km față de orașul Sibiu, in direcția SE, pe linia Sibiu-Agnita.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             Forma de relief e deluroasă. Așezat pe versantul nordic al dealului Coasta, deal format prin alunecare din dealul Curmatura și Viișoara, din locul în care astăzi este Valea Ursului și Părăul Pietrelor. Datorită alunecării în anteclinalul sud-vestic s-au format dealurile Gruiul Lung, Gruiul Mare, Gruiul Jocului și alte trei Gruiețe, fără denumire. Hora de dealuri care închide vatra satului spre Nord poartă denumirea de Viișoara, cu rîpele Zăpode, a lui Bogdan, a lui Albotă, a lui Boborodea, având in deschidere gradina Sucinului, iar în prelungire Valea Ursului, care desparte Dealul Viișoara de Dealul Turleț. În față Piscul Mare închide înspre Sud Valea Răcii, care are prelungire pârâul Pietrilor. În fundal Dealul Piciosa, cel mai înalt vârf si Dealul Codrului desparte satul de Țara Oltului, având între ele Valea Răcurele. Dealul Codrului are un grui denumit al Furcilor, unde odinioară erau ridicați in furcoi românii iobagi.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Din lipsă de documente, cu greu străbatem veacurile îndepărtate. Culegerea datelor am întemeiat-o deci pe tradiție și de la bătrânii satului și din cronica parohială, întemeiată de antecesorii noștrii.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              Se presupune că satul a fost întemeiat în jurul anului 1450 și era format de români, care apoi au devenit iobagi pe pamânturile grofilor Kontzei, Teleky Ianoș, Brukenthal, Czungrady și Schweinitz Elena, care zidesc o mănăstire romanp-catolică, pe dealul Coasta cu hramul Sfântul Ioan, de unde se impune satului numele de Szentijanoshehj. Această mănăstire a fost părăsită cu timpul și dărâmată. Credinciosul Dinu Gheorghe de la nr. 94, care are locul arabil chiar pe locul fostei mănăstiri, a mărturisit că a dezgropat cu plugul pietre, oseminte omenești , și o cheie foarte mare pe care a predat-o Muzeului Brukenthal. Legenda spune că un clopot de la mănăstire s-a rostogolit pe deal către Cornățel până în lacul fără fund denumit al lui Horoată- în realitate o balta care vara seacă.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
             La demolarea bisericii vechi de lemn din Progadie, bătrânii satului spun că învățătorul Ioan Fruma, în vârstă de 85 de ani ( decedat în 1939) și Ioan Filip în vârstă de 95 ( decedat în 1955), afirmă că erau copii și că atunci biserica ar fi avut peste 300 de ani, fiind cosntruită din lemn de stejar din Dumbrăvița, azi loc arabil, fără cea mai mica urmă de pădure. Mergând înapoi la data nașterii acestor bătrâni ( 1850-60) cu 300 de ani dăm de anul 1550. Desigur, acesta ar fi anul construcției bisericii și nu al primelor așezări ale oamenilor pe aceste meleaguri.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            Cu privire la locul primei așezări a satului, bătrânii spun că a fost așezat în Șes- șesul mărginaș cu actual vatră s satului și care a fost ars în urma unei lupte sau invazii. Fapt cert este însă că satul se mută pe valea situată între Piscul Mare și Piciora, pe locul numit Pădureni, unde există un cimitir și chiar o casă cu șură, care a fost locuită până în 1968, când locuitorii ei s-au mutat în vatra satului.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
            O versiune spune că acest sat a fost dat ca dotă unei fete de boier care s-a măritat în Moldova, iar noul stăpân și-a trimis aici oamenii de încredere pentru administrație. Nume ca Albotă, Nastailă, Staroci, Voica, atestă această teză. Aceasta s-a putut întâmpla numai dupa arderea satului.
            </p>

            <p class=" text-justify "
            style="text-align:justify;
              text-indent: 4.9ch;
           "
            >
              În dealul coastă împădurit pe atunci, se aciuiesc diferiți fugari ai unor vestite cete de hoți, din banda lui Bălan și frații Dăian, care locuiau in bordeie săpate în deal. Și această teză pare veridică, având în vedere căile de comunicație, târgurile apropiate, precum și pădurile care facilitau dispariția lor.
            </p>


            <br>
            <h6 style=" text-align:justify; line-height: 1.2";>B. Istoricul bisericii parohiale</h6>


           <p class="col-lg-12" style="text-align:justify; text-indent: 5ch;">
              <span style=" text-decoration:underline;">Istoria zidirii ei:</span>
           </p>


            <p style="text-align:justify; text-indent: 5ch;">
             Cele mai vechi știri despre biserica din Nucet sunt bazate tot pe tradiție.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Cea mai veche biserica cunoscută era cea din progadie (cimitir) mai sus amintită, unde și azi se mai cunoaște piatra pe care a fost prestolul, împrejur fiind îngropați preoții, locului spunându-i-se la popi. A fost construită din lemn de stejar cu ferestre foarte mici, pictată în interior, însă foarte mică și neîncăpătoare. Turnul era de piatră, cu un singur clopot, care a fost adus în biserica actuală de credincioșii Iordănel și Bratu- acest clopot a fost luat de autoritățile maghiare în timpul Primului Război Mondial.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Cu ocazia trecerii unei părți de locuitori la uniație, ei își fac o mică bisericuță lângă cimitir la Scărița.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              După anul 1850 se simte necesitatea construirii unei biserici în sat, atât pentru ortodocși cât și pentru uniți. În acest fel se cade de acord ca, arendându-se ierburile comunale unui mărginean venit cu oile cu suma respectivă, să se cumpere locul unde este astăzi biserica. Acest loc era destinat construirii ambelor biserici, dar după cumpărarea locului uniții favorizați de autoritățile timpului reușesc să-și întabuleze locul în întregime, nerecunoscând ortodocșilor niciun drept. Fiind puțini la număr nu reușesc să clădească o biserică și astfel cumpără o biserică veche de lemn din satul Sărata de peste Olt pe care o aduc în Nucet și care le-a servit ca locaș de cult până în 1948.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Anul construcției acestei biserici, cu hramul Sfintei Parascheva, este 1883. Biserica avea formă de navă, construită în stil romanic cu un turn. Pictura a fost efectuată de pictorul Iosif Haas.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Trași pe sfoară de uniți, ortodocșii nu se descurajează și astfel cumpără un mic loc comunal, chiar peste drum de curtea unită. Lângă acest loc mai cedează câțiva metrii Iordan Boborodea de la nr. 29 ( Dănica ), iar Nicolae al lui Irimie Bogdan mai cedează și el ca vecin de cealaltă parte câțiva metrii, cu condiția de a fi crâsnic pe viață la biserică. Astfel se ajunge la mărimea terenului pe care este clădită biserica actuală. Odată locul asigurat, preotul Nicolae Rociu împreuna cu credincioșii săi adună fonduri și materiale pentru zidirea bisericii.
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
            În însemnarea făcută de preotul Nicolae Rociu în anul 1903, se arată următoarele:
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
            „ÎNSEMNARE”
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
              „ În anul 1870 am început, poporul ortodox român a ne pregăti pentru a zidi una biserică de zidu, a aduna materialu adecă cărămizi, var, piatră și am adunat pînă în anul 1880 și adecă avînd bani gata biserica adecă 1230 fl.v.a și mai ajutîndu-ne și alți creștini adecă Maria Iordan Bucur din Săcădate cu 80 fl.v.a. Ioan Lăptariu din Porcești cu 60 fl.v.a Anghel lui Ioanu Popii din Porcești cu 5 fl.v.a. și mai mulți cu cîte ceva, am pornit în anul acesta a zidi biserică și pînă toamna tot în acest an am isprăvit biserică și s-a sfințit și s-a slujit serviciu divin pînă în anul 1901 și în anul 1901 s-au dus unii dintre creștinii noștrii în țeara america și știind ei că biserica nostră este săracă lipsită de carți și veșminte preoțești s-au înțeles unii cu alții ca să trimită bani de acolo spre a cumpăra cele ce sunt de lipsă în beserică. Și așa în anul 1902 tocmai pe sfintelea Paști am primit eu subscrisul paroh de creștini noștri duși în america 430 coroane ( sau 250 florei ) pe care îi voi însemna cu numele și care cît au dat.”
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
            „URMEADIA”
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
             Sunt însemnați pe rând toți credincioșii care au contribuit cu diferite sume, iar la urmă se justifică sumele, arătându-se ce s-a cumpărat: potir, cărți, veșminte, etc. Această însemnare este încheiată astfel:
            </p>

            <p style="text-align:justify; text-indent: 5ch;">
            “ Dumnezeu să lungescă zilele la ajutători și binefăcători bisericii și după ce vor trece din viață să le fie sufletul priimit înaintea lui Dumnezeu amin. Acești bani i-am primit eu ca preot, născut la 24 iunie 1823 și căsătorit la anul 1848 și preoțit la anul 1850, în 26 iulie, servind pînă astăzi la sfîntul altar. Nucet 10 aprilie 1903.”
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Arhitectura </span>
           </p>

            <p style="text-align:justify; text-indent: 5ch;">
              Biserica zidită sub preotul Nicolae Rociu, având hramul Taierea Capului Sfântului Ioan Botezătorul, este construită în stil romanic, cu un turn, în formă de navă. În exterior este zugrăvită simplu. În interior, biserica este zugrăvită cu motive florale în stil bizantin. Tavanul poartă în mijloc Pantocratorul , iar în colțuri pe cei patru evangheliști. Iconostasul este pictat în ulei pe zid de către pictorul Iosif Haas din Sibiu, în 1924. Reparații s-au făcut în 1939 capital, iar parțial în 1962.
            </p>


           <p class="col-lg-12 text-justify "
            style="text-align:justify;
              text-indent: 5ch;
           "
            >
           <span style=" text-decoration:underline;">Pictura </span>: În descrierea de mai sus.
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
            Deoarece în Primul Război Mondial documentele vechi au fost distruse, cu greu putem afla șirul preoților. Din mărturisirile preotului Ioan Damian aflăm doar de la anul 1800 astfel:
           </p>

           <p class="col-lg-12" style=" text-align:justify; text-indent: 5ch;">
            <ul style="list-style-type: none;">
              <li>
              •	1800-1823 preotul Popa Ioan Șandru, urmașilor săi zicîndu-le și azi ai Tomii Popii
              </li>
              <li>
              •	1823-1850 preotul Constantin Filip, probabil din Săcădate
              </li>
              <li>
              •	1850-1902 preotul Nicolae Rociu, care zidește biserica și care a luat parte activă la răscoala din 1848;
              </li>
              <li>
                •	1902-1937 preotul Ioan Damian, originar din Vecerd, lângă Agnita, care se căsătorește cu fiica învățătorului local, Ioan Fruma. În 1916 se retrage cu armata română peste munți; se reîntoarce împreună cu socrul său, învățătorul Ioan Fruma și fiul său, Traian, care ulterior a fost preot misionar în America. A fost întemnițat la Sibiu, Făgăraș și Cluj. Acest preot a continuat opera începută de preotul Nicolae Rociu.
              </li>
              <li>
              •	1937-1970 preotul Remus Constantin, originar din Hendorf, azi Brădeni, este ginerele preotului Ioan Damian. Acesta zugrăvește biserica în anul 1939, ia parte activă la actul reîntregirii bisericii în 1948, an din care începe a sluji împreuna cu preotul Ioan Filip. Din anul 1959 electrifică biserica, iar în 1962 introduce gazul metan
              </li>
              <li>
                •	1970-1980 preotul Mihai Tăucean, născut în Burdugeni, Suceava, căsătorit cu învățătoarea din Veștem, Cornelia Dorobanțu
              </li>
              <li>
              •	1980-1998 preotul Sas Ioan
              </li>
              <li>
              •	1998-2003 preotul Imbru Octavian
              </li>
              <li>
                •	2003-2010 preotul Danciu Alin
              </li>
              <li>
                •	2010- până în prezent preotul Murgoiu Crucian Gheorghe
              </li>
            </ul>
           </p>

          <h6 class="col-lg-12" >C. Cimitirul</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            Parohia are un singur cimitir care aparţine bisericii parohiale, unde sunt înmortmântaţi creştinii ortodocşi aparţinători ai acestei parohii. Cimitirul este situat în partea sudică a satului într-o zonă costişă, având o suprafaţă de aproximativ un hectar. Cimitirul este împrejmuit cu stâlpi de ţeavă şi sârmă. Recent s-au făcut ample lucrări de curăţire şi înteţinere a cimitirului.
            </p>

          <br>
          <h6 style="line-height: 1.2";>D. Activități culturale și filantropice în trecut:</h6>

            <p class="col-lg-12" style="text-indent: 5ch;">
            În privinţa activităţiilor culturale şi filantropice în trecut, nu avem menţionat undeva că ar fi fost asemena activităţi. În prezent datorită structurii demografice a parohiei nu sunt activităţi de acest gen.
            </p>

          <br>
          <h6 style="line-height: 1.2";>E. Profilul actual al parohiei:</h6>

           <p class="col-lg-12" style="text-indent: 5ch;">
           Numărul de credincioşi este în prezent foarte redus, parohia având 30 de suflete, o parte din ei pe timp de iarnă plecând la Sibiu. Vârsta acestor credincioşi este în medie de 65-90 de ani.
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
              Activitatea liturgică se desfăşoară în bună rânduială, credincioşii fiind prezenţi la slujbele bisericii. Cu ocazia hramului ţinut la 29 august, de tăierea capului Sfântului Ioan Botezătorul, creddincioşii participă îmbrăcaţi în haine româneşti, iar din partea parohiei primind fiecare câte un dar duhovnicesc (carte de rugăciuni, psaltire, cruciuliţe, icoane).
               Credincioşii, deşi vârstnici ajută preotul paroh la întreţinerea locaşului şi a celorlalte propietăţi ale parohiei, astfel încât în fiecare an s-a putut face câte ceva.
          </p>

          <br>
<h6 style="line-height: 1.2";>Surse bibliografice:</h6>

<p style="text-indent: 5ch;">
<ul style="list-style-type: none;">
  <li>
    1. <i>Arhiva Parohiei Ortodoxe Nucet</i>;
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
              src="../protopopiatul agnita/assets/img/poze__parohii/Nucet/nucet-1.jpg"
              alt=""
              width="90px"
              style="object-fit: contain;"

            >
          </li>

          <li class="carousel_slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nucet/nucet-2.JPG"
              alt=""
              width="90px"
              style="object-fit: contain;"
            >
            </li>
            <li class="carousel_slide current-slide">
            <img
              class="carousel_image"
              src="../protopopiatul agnita/assets/img/poze__parohii/Nucet/profil-preot.jpg"
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
