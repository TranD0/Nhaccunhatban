<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.00">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/dist/boxicons.js"
        integrity="sha512-kWH92pHUC/rcjpSMu19lT+H6TlZwZCAftg9AuSw+AVYSdEKSlXXB8o6g12mg5f+Pj5xO40A7ju2ot/VdodCthw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/keyboard-css@1.2.4/dist/css/main.min.css" />

    <script src="https://unpkg.com/scrollreveal"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="homepage1.css">
    <script src="homepage1.js" async defer></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
<?php
    session_start();
 
   if (isset($_SESSION['email']) ){
    $usn= $_SESSION['email']."_Log out";
   
   }
   else   $usn= "Login";
   unset($_SESSION['email']);
  ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
                <img src="WebpageMedia/daruma.png" alt="" style="width: 4%;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" style="margin-right: 20px;">
                            <a class="nav-link " aria-current="page" href="#Home">Home</a>
                        </li>
                        <li class="nav-item" style="margin-right: 20px;">
                            <a class="nav-link " aria-current="page" href="#About">About</a>
                        </li>
                        <li class="nav-item" style="margin-right: 20px;">
                            <a class="nav-link " aria-current="page" href="#Instrument">Instrument</a>
                        </li>
                        <li class="nav-item" style="margin-right: 130px;">
                            <a class="nav-link " aria-current="page" href="#traditional-artist">Artists</a>
                        </li>
                        <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="Login.php">
                        <?php
   echo $usn;
   ?>
                        </a>
                      
                      </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="Home" class="home-section section" style="display: flex;">
            <div class="col">
                <div class="intro section" style="display: flex;">
                    <div class="japan-flag" style="position: absolute;"></div>
                    <div style="display: block; margin-top: 65px;">
                        <h1 id="JAPAN" class="h-title">JAPAN</h1>
                        <h1 id="INSTRUMENT" class="h-title">INSTRUMENT</h1>
                    </div>
                </div>

                <a href="#About">
                    <button class="next">
                        <div href="#About">Let's Go! <i class='bx bx-chevrons-down bounce'></i></div>
                    </button>
                </a>
            </div>
        </section>
    </header>

    <section id="About" style="height: auto; padding: 120px;">
        <div class="about-section section row">
            <div class="col-lg-6 section">
                <div class="container section shadow-box" style="display: block;">
                    <h3
                        style="font-family: Impact, Haettenschweiler, sans-serif; border-bottom: 5px solid white; padding-bottom: 5px">
                        Traditional Japanese musical instruments
                    </h3>
                    <p style="font-size: 22px;">
                        <span style="color: rgb(255, 80, 80);font-weight: bold;">Traditional Japanese musical
                            instruments</span> are integral to the country's cultural heritage and have a profound
                        impact on its music. Instruments like the <span
                            style="color: red; text-decoration: underline; font-weight: bold;">koto</span>, a plucked
                        string instrument, produce delicate sounds, while the <span
                            style="color: red; text-decoration: underline; font-weight: bold;">shakuhachi</span>, a
                        bamboo flute, has a haunting tone. <span
                            style="color: red; text-decoration: underline; font-weight: bold;">The shamisen</span>, a
                        three-stringed instrument, is popular in folk music, and <span
                            style="color: red; text-decoration: underline; font-weight: bold;">taiko drums</span> create
                        powerful rhythms. These instruments, along with others like the <span
                            style="color: red; text-decoration: underline; font-weight: bold;">biwa</span> and <span
                            style="color: red; text-decoration: underline; font-weight: bold;">fue</span>, showcase the
                        unique musical traditions of Japan. Exploring them provides insight into the country's rich
                        cultural tapestry and the enchanting sounds that define its music.
                    </p>
                </div>

            </div>
            <div class="col-lg-6" style="padding: 40px;">
                <div class="text-center mb-5">
                    <h2 class="fw-bold about-title" >ABOUT</h2>
                </div>
                <p style="font-size: 20px; font-weight: bold;color:#DECFA7;">
                    Hi ya, the intent of this website is to introduce some historical Japanese instruments. The majority
                    of musical instruments that have their roots in modern along with ancient Japan are found to be the
                    relics that define the exquisite qualities of sound. Therefore, we looked into those instruments.
                    Prior to that, we listened to a variety of sources on video games and social media and were
                    impressed by them. Anyhoo, please enjoy surfing our webpage.
                </p>
            </div>

            <div class="sillyGif" style="transform: scaleX(-1); margin-top: -90px;">
                <img src="/WebpageMedia/taikoFighto.gif" style="position: absolute; z-index: 2;" alt="">
                <img class="taikoFace" style="width: 160px;margin-left: 45px;" src="/WebpageMedia/TaikoFace.png" alt="">
            </div>
        </div>
    </section>





    <section id="Instrument" class="section" style=" padding: 60px; color: black;">
        <div class="instrument-section row">
            <div class="col-lg-6">
                <h1 class="item-head fw-bold section">Biwa (琵琶)</h1>
                <p class="description-container section">The biwa is a Japanese musical instrument with a short neck and
                    a wooden lute-like structure. It has
                    a rich cultural history and is traditionally associated with narrative storytelling. Originating in
                    China and subsequently spreading throughout East Asia, the biwa found its way to Japan during the
                    Nara period (710–794). With a typical length ranging from 60 centimeters (24 inches) to 106
                    centimeters (42 inches), the biwa features a distinctive water drop-shaped body and a short neck,
                    often equipped with four or sometimes five strings. In Japan, the biwa is primarily played using a
                    bachi, a specialized pick, instead of finger plucking, and it frequently accompanies gagaku
                    performances. Notably, the biwa has gained renown for its role in reciting The Tale of the Heike, an
                    epic war chronicle from the Kamakura period (1185–1333). </p>
            </div>
            <div class="col-lg-6 image-container section" style="padding: 40px;">
                <div class="item-image section"><img src="WebpageMedia/biwa.jpg" alt=""></div>
            </div>
        </div>


        <div class="slider section" style="background-color:#20223C; padding: 10px; ">
            <div class="item">
                <img src="WebpageMedia/biwa.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">琵琶</div>
                </div>

                <div class="item-title">
                    Biwa (琵琶)
                </div>
                <div class="item-description">
                    The biwa is a Japanese musical instrument with a short neck and a wooden lute-like structure. It has
                    a rich cultural history and is traditionally associated with narrative storytelling. Originating in
                    China and subsequently spreading throughout East Asia, the biwa found its way to Japan during the
                    Nara period (710–794). With a typical length ranging from 60 centimeters (24 inches) to 106
                    centimeters (42 inches), the biwa features a distinctive water drop-shaped body and a short neck,
                    often equipped with four or sometimes five strings. In Japan, the biwa is primarily played using a
                    bachi, a specialized pick, instead of finger plucking, and it frequently accompanies gagaku
                    performances. Notably, the biwa has gained renown for its role in reciting The Tale of the Heike, an
                    epic war chronicle from the Kamakura period (1185–1333).
                </div>
            </div>

            <div class="item">
                <img src="WebpageMedia/Nohkan.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">能管</div>
                </div>
                <div class="item-title">
                    Nohkan (能管)
                </div>
                <div class="item-description">
                    Nohkan is a sort of the Japanese transverse flutes. It's used not only in "Noh" (traditional masked
                    dance-drama), but also in "Kabuki" (traditional drama performed by male actors), "Yosebayashi"
                    (rakugo theater music), and "Gion bayashi" (Japanese orchestra of Gion Festival). It's one of the
                    air-reed instruments made of bamboo, and is characterized by the part called 'nodo'(throat).
                    It's 40cm long, and has seven tone holes which circumferences are hardened with lacquer. It's made
                    of "medake" (simon bamboo) or "shinodake" (small bamboo), as well as "ryuteki" (a kind of flute)
                    which is used in "gagaku" (ancient Japanese court dance and music). Dried and sooted bamboos called
                    "susudake" (soot-colored bamboo) are used. In some cases, a bamboo is cut lengthwise and turned
                    inside out to get its hard part inward. Inside of the tube is thickly lacquered. Its exterior is
                    covered with cherry bark (called kabamaki). Overall tapered tube is used.
                </div>
            </div>

            <div class="item">
                <img src="WebpageMedia/Ōtsuzumi.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">大鼓</div>
                </div>
                <div class="item-title">
                    Ōtsuzumi (大鼓)
                </div>
                <div class="item-description">
                    The ōtsuzumi (大鼓), also known as the ōkawa (大皮), is an hourglass-shaped Japanese drum. It is a
                    larger version of the tsuzumi, or kotsuzumi, and is used in traditional Japanese theater and folk
                    music. Its appearance is slightly different from that of the tsuzumi, and the sound produced is
                    vastly different from any of the four sounds the kotsuzumi produces.
                    The drum heads are made of thick, stiff horsehide taken from grown horses, and care for the drum
                    heads of the ōkawa is peculiar in that they must be kept dry at all times. In contrast, the heads of
                    the smaller kotsuzumi must always be moist. Since the sound of the ōkawa is supposed to be higher in
                    pitch, the player must ensure that the skin of the drum-heads remains as constricted as possible,
                    and this is best realized when the drum heads are kept dry.
                </div>
            </div>

            <div class="item">
                <img src="WebpageMedia/Shakuhachi.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">普化尺八</div>
                </div>
                <div class="item-title">
                    Shakuhachi (普化尺八)
                </div>
                <div class="item-description">
                    The shakuhachi is a traditional Japanese musical instrument. It is a type of woodwind instrument. It
                    falls under the category of reed instruments, and is classified as an "air reed" instrument. It
                    originated in China during the Tang Dynasty, and was transmitted to Japan during that period;
                    however, it subsequently fell out of use for a certain period before reemerging during the Kamakura
                    period, and has been used continuously since, evolving during the Edo period into the precursor of
                    its current form.
                    The origin of the name shakuhachi is derived from a traditional standardized measure of length,
                    consisting of units expressed in terms of one "shaku" and eight "sun" (or 1.8 shaku, which is
                    approximately 54.5 cm).
                </div>
            </div>

            <div class="item">
                <img src="WebpageMedia/Shamisen.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">三味線</div>
                </div>
                <div class="item-title">
                    Shamisen (三味線)
                </div>
                <div class="item-description">
                    The shamisen, also referred to as sangen or samisen, is a revered three-stringed musical instrument
                    deeply rooted in the traditions of Japan. Its origins can be traced back to the Chinese instrument
                    known as sanxian. The shamisen is played by skillfully plucking its three strings using a dedicated
                    plectrum called a bachi.
                    In the Japanese context, the prevailing pronunciation is generally shamisen, although in certain
                    cases, such as when used as a suffix, it may undergo regular sound change and be pronounced as
                    jamisen (e.g., tsugaru-jamisen). Notably, in Western Japanese dialects and various historical
                    sources from the Edo period, the term is both written and spoken as samisen.
                </div>
            </div>


            <div class="item">
                <img src="WebpageMedia/Shinobue.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">篠笛</div>
                </div>

                <div class="item-title">
                    Shinobue (篠笛)
                </div>
                <div class="item-description">
                    The shinobue is a woodwind instrument originating from Japan. It is classified as a transverse flute
                    and is known for its straightforward design. Typically crafted from shinodake, a type of small
                    bamboo such as Simon bamboo (Pleioblastus simonii), the shinobue features a coated inner surface of
                    lacquer or synthetic resin. It possesses two openings, one for the mouthpiece called Utaguchi, and
                    others for the tone holes. In the realm of traditional performing arts, the shinobue is often
                    referred to as 'fue' or 'takebue' for brevity. It falls under the category of reed instruments,
                    alongside instruments like the shakuhachi (Japanese end-blown flute) and the flute.
                </div>
            </div>

            <div class="item">
                <img src="WebpageMedia/Taiko.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">太鼓</div>
                </div>
                <div class="item-title">
                    Taiko (太鼓)
                </div>
                <div class="item-description">
                    Taiko instruments encompass a diverse range of percussion instruments originating from Japan. Within
                    the Japanese context, the term "taiko" broadly refers to drums of various types. However, when used
                    outside of Japan, it specifically denotes the distinctive Japanese drums known as "wadaiko" or
                    "Japanese drums," and more specifically, it is often associated with the ensemble style of taiko
                    drumming known as "kumi-daiko" or "drumming in a group." The construction process of taiko drums can
                    vary among manufacturers, and it involves meticulous preparation of both the drum body and the drum
                    skin, which can span several years depending on the chosen methodology.
                </div>
            </div>

            <div class="item">
                <img src="WebpageMedia/Sho.jpg" alt="">
                <div class="item-name-wrapper">
                    <div class="item-name text-center">笙</div>
                </div>
                <div class="item-title">
                    Shō (笙)
                </div>
                <div class="item-description">
                    The Shō is an ancient Japanese musical instrument that originated from China during the Nara period
                    (AD 710 to 794). It can be traced back to the Tang Dynasty era and is considered a descendant of the
                    Chinese sheng. However, the Shō is typically smaller in size compared to its sheng counterparts. It
                    comprises 17 slender bamboo pipes, each equipped with a metal free reed at its base. Interestingly,
                    two of the pipes remain silent, although historical research suggests that they might have been
                    utilized in certain musical contexts during the Heian period. It is speculated that these silent
                    pipes were retained to maintain the instrument's symmetrical shape and aesthetic balance.
                </div>
            </div>

        </div>
    </section>

    <div id="traditional-artist">
        <section class="traditional-artist" id="sectionBackground">
          
            <div class="container section">
                
                <div class="swiper-container section">
                       <h2 class="text-center" style="color: #DECFA7;">Music Artists/Traditional Japanese music</h2>
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>Kakushin Nishihara</h3>
                                <img src="WebpageMedia/biwa artist.jpg" alt="">
                                <img id="bg-image" src="" alt="">
                            </div>
                            <div class="col-6" style="text-align: left;">
                                <div class="description">
                                    <p>Kakushin Nishihara (born 1971) is a performer of a traditional instrument, the
                                        Satsuma
                                        Biwa (Satsuma lute, a five-stringed Japanese lute).</p>

                                    <p>When she was singing and playing in a rock band at around the age of 17, Kakushin
                                        had
                                        a
                                        life-changing encounter with one of Japan’s premier performers of the Satsuma
                                        Biwa,
                                        Kinshi Tsuruta (1911-1995).</p>
                                </div>

                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>Kodō</h3>
                                <img src="WebpageMedia/kodo.jpg" alt="">
                                <img id="bg-image" src="WebpageMedia/kobg.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <div class="description">
                                    <p>Kodō (鼓童) is a professional taiko drumming troupe. Based on Sado Island, Japan,
                                        they
                                        have had a role in popularizing taiko drumming, both in Japan and abroad.</p>
                                    <p>Renowned for their captivating live performances, this exceptional group of
                                        artists
                                        has established a remarkable tradition of embarking on regular tours that
                                        encompass
                                        the vibrant landscapes of Japan, the diverse musical tapestries of Europe, and
                                        the
                                        vast expanse of stages throughout the United States, showcasing their musical
                                        prowess and forging lasting connections with devoted fans across these
                                        culturally
                                        rich regions.</p>
                                    <p>In Japanese, the word "Kodō" conveys two meanings: "heartbeat," the primal source
                                        of
                                        all rhythm, and when read in a different way, the word can mean "children of the
                                        drum".</p>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>Nēnēs</h3>
                                <img src="WebpageMedia/the nenes.jpg" alt="">
                                <img id="bg-image" src="" alt="">
                            </div>
                            <div class="col-6">
                                <div class="description">
                                    <p>Nēnēs (ネーネーズ) is an Okinawan folk music group formed in 1990 by China Sadao
                                        (知名定男).
                                    </p>
                                    <p>The group name means "sisters" in Okinawan.</p>
                                    <p>Nēnēs is composed of four female singers who perform traditional Okinawan folk
                                        songs
                                        in
                                        traditional costume with sanshin accompaniment; they have also performed with a
                                        backing
                                        band, Sadao China Gakudan.</p>
                                </div>

                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>The Yoshida Brothers</h3>
                                <img src="WebpageMedia/the yoshida bros.jpg" alt="">
                                <img id="bg-image" src="" alt="">
                            </div>
                            <div class="col-6">
                                <div class="description">
                                    <p>The Yoshida Brothers (吉田兄弟, Yoshida Kyōdai) are Japanese shamisenist musicians
                                        who
                                        have released several albums on the Domo Records label.</p>
                                    <p>The two brothers are performers of the traditional Japanese music style of
                                        Tsugaru-jamisen which originated in northern Japan.</p>
                                    <p>They debuted in 1999 in Japan as a duo playing the shamisen. Their first album
                                        sold
                                        over 100,000 copies and made them minor celebrities in Japan.</p>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>Tadao Sawai</h3>
                                <img src="WebpageMedia/Tadao Sawai.jpg" alt="">
                                <img id="bg-image" src="" alt="">
                            </div>
                            <div class="col-6">
                                <div class="description">
                                    <p>Tadao Sawai (沢井 忠夫, Sawai Tadao, 1938 – April 1, 1997) was a Japanese koto player
                                        and
                                        composer.</p>
                                    <p>Born in Aichi Prefecture, Sawai graduated from the Tokyo National University of
                                        Fine
                                        Arts
                                        and Music in 1958.</p>
                                    <p>He was renowned all over Japan for his skill at the koto and also received
                                        acclaim
                                        for
                                        his compositions.</p>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>Kifu Mitsuhashi</h3>
                                <img src="WebpageMedia/KIFU MITSUHASHi.jpg" alt="">
                                <img id="bg-image" src="" alt="">
                            </div>
                            <div class="col-6">
                                <div class="description">
                                    <p>Born in Tokyo in 1950, Kifu Mitsuhashi studied Kinko­school shakuhachi with Sofu
                                        Sasaki
                                        and the classical honkyoku repertoire of the Fuke school with Chikugai Okamoto.
                                    </p>
                                    <p>He was awarded the Prize for Excellence by the Agency for Cultural Affairs for
                                        his
                                        first
                                        recital (1980) and the Arts Festival Prize by the same agency for his 1989 solo
                                        recital.
                                    </p>
                                </div>


                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>Yuka Tsujiyoko</h3>
                                <img src="WebpageMedia/Yuka Tsujiyoko.png" alt="">
                                <img id="bg-image" src="" alt="">
                            </div>
                            <div class="col-6">
                                <div class="description">
                                    <p>Yuka Tsujiyoko (辻横 由佳, Tsujiyoko Yuka, born Yuka Bamba) is a Japanese video game
                                        music composer.</p>
                                    <p>She is best known for her contributions to the Fire Emblem and Paper Mario
                                        series,
                                        and several other Intelligent Systems developed games. She also scored the Super
                                        Scope games Battle Clash, and its sequel Metal Combat: Falcon's Revenge.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="col-6">
                                <h3>Hiromitsu Agatsuma</h3>
                                <img src="WebpageMedia/Hiromitsu Agatsuma.jpg" alt="">
                                <img id="bg-image" src="" alt="">
                            </div>
                            <div class="col-6">
                                <div class="description">
                                    <p>Hiromitsu Agatsuma (上妻 宏光 Agatsuma Hiromitsu, born July 27, 1973) is a Japanese
                                        shamisen artist who plays the Tsugaru-jamisen, a larger shamisen with thicker
                                        strings than those used for most other styles. He was born in Hitachi, Ibaraki
                                        Prefecture.</p>
                                    <p>In September 2001, he made his major label debut on Toshiba EMI with the
                                        eponymous
                                        Agatsuma. This album, comprising five traditional pieces and five original ones,
                                        was
                                        named Traditional Japanese Music Album of the Year at the 16th Japan Gold Disc
                                        Awards.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </div>


    <div class="slide-wrapper">
        <a id="myBtn" href="#Home"><i class='bx bx-up-arrow-alt' style="margin-left: 6px;"></i></a>
    </div>
    <footer class="bg-dark text-dark pt-5 pd-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left" style="overflow-wrap: break-word;">
                    <div class="col-md-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold "> Abous us</h5>
                        <hr class="mb-4 text-white ">
                        <p class="text-white">sfushfusfhsufhsufhsufhsufhsufhsufhsufshfushfushufsh</p>

                    </div>
                    <div class="col-md-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold ">Contact</h5>
                        <p>
                            <a href="#" class="text-white"></i>phone</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">email</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">github</a>
                        </p>
                        
                        
                    </div>
                    <div class="col-md-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold ">Menu</h5>
                        <p>
                            <a href="#Home" class="text-white">Home</a>
                        </p>
                        <p>
                            <a href="#About" class="text-white">About</a>
                        </p>
                        <p>
                            <a href="#Instrument" class="text-white">Instrument</a>
                        </p>
                        <p>
                            <a href="#traditional-artist" class="text-white">Artists</a>
                        </p>
                    </div>
                    
                    <div class="col-md-12 text-white dongket " style="display: flex;
    justify-content: center;
    align-items: center;">
                        <p>Copy right @2023 All rights reserved by:Tran Hoang Trong and Tran Thai Ngoc Do</p>
                    </div>
            </div>
        </div>
    </footer>


</body>