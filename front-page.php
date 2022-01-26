<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trungta
 */

get_header();
?>

<main>
    <!--Banner-->
    <section class="section-hero">
        <div class="row">
            <div class="hero">
                <div class="col-1-of-2 hero__text-box">
                    <h1 class="heading-primary">
                        <span class="heading-primary--main">JOKO NETTISIVUSI SAATU PYSTYYN?</span>
                    </h1>
                    <p class="hero__banner-description">Nettisivu on varmaan sijoitus, joka maksaisi ennemmin tai myöhemmin 
                        rahat takaisin sinulle. Minulla saat apua nettisivun sekä suunnittelussa 
                        että toteutuksessa.</p>
                    <a href="#section-varaus" class="btn btn--primary btn--animated">Varaa soittoaika</a>
                </div>
                <div class="col-1-of-2 hero__owner-img-box">
                    <img src=<?php echo get_theme_file_uri( './images/trung-ta-lapi-1.png' )?> alt="Trung Ta" class="hero__owner-img">
                </div>
            </div>
        </div>
    </section>

       <!--AJANKOHTAISTA-->
       <section class="section-ajankohtaista">
        <div class="u-center-text u-margin-bottom-big">
            <div class="row">
                <div class="col">
                <h2 class="heading-secondary">
                    Ajankohtaista
                </h2>
                <div class="section-ajankohtaista__viva"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
                $homepagePosts = new WP_Query(array(
                    'posts_per_page'  => 2
                ));

                while($homepagePosts->have_posts()){
                    $homepagePosts->the_post();?>
                    <div class="col-1-of-2 section-ajankohtaista__item">
                        <div class="section-ajankohtaista__content">
                            <span class="section-ajankohtaista__paivamaara"><a href="<?php the_permalink(); ?>"><?php the_time('d'); ?>.<?php the_time('M'); ?>.<?php the_time('y'); ?></a></span>
                            <h2 class="heading-tertiary"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="paragraph"><?php echo wp_trim_words(get_the_content(), 18); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn--primary btn--animated">Lue lisää</a>
                        </div>
                    </div>
                <?php } wp_reset_postdata();
            ?>
        </div>
    </section>

    <!--Lupaus-->
    <section class="section-lupaus">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Seuraavat <span style="color:#00A6DA">lupaukset</span> voin antaa sinulle
            </h2>
        </div>

        <div class="row">
            <div class="col-1-of-3">
                <div class="lupaus-box">
                    <i class="lupaus-box__icon fas fa-smile"></i><br>
                    <h3 class="heading-tertiary u-margin-bottom-small">Tyytyväisyystakuu</h3>
                    <p class="lupaus-box__text">Mikäli lopputuote ei vasta odotukseesi, 
                        en veloita senttiäkään, sen sijaan pyrin 
                        korjaamaan sivuja niin kauan kuin olet 
                        tyytyväinen työhöni.</p>
                </div>
            </div>

            <div class="col-1-of-3">
                <div class="lupaus-box">
                    <i class="lupaus-box__icon fas fa-tags"></i><br>
                    <h3 class="heading-tertiary u-margin-bottom-small">Ei piilokuluja</h3>
                    <p class="lupaus-box__text">Vaatimusmäärittelyn täytettyä annan kirjallisen 
                        tarjouksen, josta näkyy kokonaishinta. sinulle jää vain 
                        verkkotunnusta maksettavaksi.</p>
                </div>
            </div>

            <div class="col-1-of-3">
                <div class="lupaus-box">
                    <i class="lupaus-box__icon fas fa-code"></i><br>
                    <h3 class="heading-tertiary u-margin-bottom-small">Jatkokehitykset ja tuki</h3>
                    <p class="lupaus-box__text">Sovittaessa tarjoan mielelläni 
                        apua nettisivun päivityksessä ja kysymyksissä sekä varmuuskopion ottamisessa</p>
                </div>
            </div>
        </div>
    </section>

    <!--video-->
    <section class="section-video">
        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src=<?php echo get_theme_file_uri( 'images/landscape-winter.mp4' ) ?> type="video/mp4">
                <source src=<?php echo get_theme_file_uri( 'images/landscape-winter.webm' ) ?> type="video/webm">
                Your browser is not supported!
            </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Kaikkea <span style="color:#00A6DA">digitaalisia palveluja</span> yhdessä paikassa
            </h2>
        </div>

        <div class="row">
            <div class="video">
                <figure class="video__shape">
                    <img src=<?php echo get_theme_file_uri( 'images/Trung-Ta.jpg' ) ?> alt="trung Ta" class="video__img">
                    <figcaption class="video__caption">Web-kehittäjä Trung Ta</figcaption>
                </figure>
                <div class="video__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Suunnittelen nettisivuja ja verkkokauppoja intohimoisena</h3>
                    <p>
                        Palveluna suunnittelen ja toteutan nettisivuja ja 
                        verkkokauppoja pienyrityksille, kaikki työtä tehdään alusta asti, 
                        Vältän valmisteeman käyttöä, vaan pyrin tekemään 
                        nettisivuja tyhjästä WordPress-sisällönhallintajärjestelmää käyttäen
                    </p>
                </div>
            </div>
        </div>

        <div class="u-center-text u-margin-top-huge">
            <a href="<?php echo site_url('/tieto-trungista') ?>" class="btn-text">Lue lisää &rarr;</a>
        </div>
    </section>

        <!--hinnasto-->
        <section class="section-hinnasto" id="section-hinnasto">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Tarjoan tällä hetkellä <span style="color:#00A6DA">seuraavat paketit</span>
                </h2>
                <p class="section-hinnasto__text">Kaikkiin hintoihin lisätään arvontalisävero</p>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                   <div class="card">
                       <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">WP-Nettisivujen 
                                    Peruspaketti</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>1-3 sivua toteutetaan 
                                        WordPress-alustalla</li>
                                    <li>Hakukoneoptimointi</li>
                                    <li>Kustomoitu teema</li>
                                    <li>Mobiiliresponsiivisuus</li>
                                </ul>
                            </div>
                       </div>
                       <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">alk.</p>
                                    <p class="card__price-value">1350,00</p>
                                </div>
                                <a href="#popup" class="btn btn--grey">Katso lisää!</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                             <div class="card__picture card__picture--1">
                                 &nbsp;
                             </div>
                             <h4 class="card__heading">
                                 <span class="card__heading-span card__heading-span--1">WP-Nettisivujen 
                                    Tehokaspaketti</span>
                             </h4>
                             <div class="card__details">
                                 <ul>
                                     <li>1-5 sivua toteutetaan 
                                        WordPress-alustalla</li>
                                     <li>Hakukoneoptimointi</li>
                                     <li>Kustomoitu teema</li>
                                     <li>Mobiiliresponsiivisuus</li>
                                 </ul>
                             </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                             <div class="card__cta">
                                 <div class="card__price-box">
                                     <p class="card__price-only">alk.</p>
                                     <p class="card__price-value">2500,00</p>
                                 </div>
                                 <a href="#popup" class="btn btn--grey">Katso lisää!</a>
                             </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                             <div class="card__picture card__picture--1">
                                 &nbsp;
                             </div>
                             <h4 class="card__heading">
                                 <span class="card__heading-span card__heading-span--1">WOO-Verkkokauppojen 
                                    Tehokaspaketti</span>
                             </h4>
                             <div class="card__details">
                                 <ul>
                                     <li>1-5 sivua toteutetaan 
                                        WooCommerce-alustalla</li>
                                     <li>Hakukoneoptimointi</li>
                                     <li>StoreFront / valmisteema</li>
                                     <li>Mobiiliresponsiivisuus</li>
                                 </ul>
                             </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                             <div class="card__cta">
                                 <div class="card__price-box">
                                     <p class="card__price-only">alk.</p>
                                     <p class="card__price-value">4000,00</p>
                                 </div>
                                 <a href="#popup" class="btn btn--grey">Pyydä tarjous!</a>
                             </div>
                        </div>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="card">
                        <div class="card__side card__side--front">
                             <div class="card__picture card__picture--1">
                                 &nbsp;
                             </div>
                             <h4 class="card__heading">
                                 <span class="card__heading-span card__heading-span--1">Muut 
                                    ohjelmistokehitykset</span>
                             </h4>
                             <div class="card__details">
                                 <ul>
                                     <li>Mobiilisovelluskehitykset</li>
                                     <li>Ohjelmointi</li>
                                     <li>PHP, Java, MySQL</li>
                                     <li>Google- ja Facebook-mainonta</li>
                                 </ul>
                             </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                             <div class="card__cta">
                                 <a href="#popup" class="btn btn--grey">Katso lisää!</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

    <!--Varaus-->
    <section class="section-varaus" id="section-varaus">
        <div class="row">
            <div class="varaus">
                <div class="varaus__form">
                    <form action="#" class="form">
                        <div class="u-margin-bottom-medium">
                            <h2 class="heading-secondary">
                                Ota <span style="color:#00A6DA">minuun</span> yhteyttä
                            </h2>
                        </div>

                        <div><?php echo do_shortcode('[wpforms id="45"]'); ?></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--POPUP-->
    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <img src=<?php echo get_theme_file_uri( './images/Trung-Ta.jpg' ) ?> alt="Trung Ta" class="popup__img">
            </div>
            <div class="popup__right">
                <a href="#section-hinnasto" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">WP-Nettisivujen Peruspaketti</h2>
                <h3 class="heading-tertiary u-margin-bottom-small">Hintaan lisätään 24% alv</h3>
                <p class="popup__text">
                    Laadukas nettisivujen paketti, jossa on kevyt hakukoneoptimointi ja verkkosivun käyttöliittymä suunnitellaan ja toteutetaan 
                    luotettavalla valmisteemalla. Valmis nettisivu toimii reponsiivisesti kaikissa laitteissa ja noudattaa 
                    nettisivuteon standardia. Saadaan myös saavutettavuutta kuntoon, saavutettavuudella tarkoittaa verkkosivun 
                    helppokäyttösyys ja sivusi on saatavilla kaikille ihmisille. Lopuksi asennetaan Googlen ja Facebookin 
                    seurantoja sivujen analysoimiseksi ja lisätään myös yhteydenottolomaketta ja mahdollisesti Googlen karttaa 
                    pyytäessä. Sivuston valmistua otan heti sivusta varmuuskopion ja tarjoan käyttökoulutus 
                    uudesta sivustosta yhdessä päivässä myös ilmainen jatkoylläpito kuukaudeksi, sen jälkeen veloitan 45€/tunti + alv.
                </p>

                <p class="popup__text">Hinta alk. 1350€</p>
                <a href="#section-varaus" class="btn btn--blue">Pyydä tarjous</a>
            </div>
        </div>
    </div>

</main>

<?php
get_footer();
