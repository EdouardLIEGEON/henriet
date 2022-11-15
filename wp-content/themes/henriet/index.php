<?php
/**
 * @package WordPress
 * @subpackage henriet
 * Template Name: Accueil
 * 
 */

get_header() ?>
    <header>
        <section class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <h1>Électricité Henriet</h1>
                    <h2>Expérience et savoir-faire pour les particuliers et les professionnels</h2>
                </div>
                <div class="col-lg-1 col-md-2">
                    <img src="http://localhost/henriet/wp-content/uploads/2022/11/logo_henriet.png" alt="logo henriet">
                </div>
            </div>
    </section>
    </header>
    <body>
        <section id="presentation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="big_p">Basée à Levier, <b>l’entreprise Électricité Henriet</b> propose ses services en électricité générale depuis plus de 15 ans entre Doubs et Jura (Mouthe, Pontarlier, Salins-les-Bains…).</p><br>
                                <p>Spécialisés dans les <b>installations électriques</b> des habitations, mais aussi des locaux et bureaux d’entreprises, nous avons développé des savoir-faire précis pour répondre aux 
                                besoins des particuliers et des professionnels qui nous ont fait confiance au fil des années.</p>
                    </div>
                    <div class="col-lg-4 offset-lg-2 container-grey">
                        <p>Éclairage LED décoratif, domotique, chauffage, système de secours, installation agricole… réactive et force de proposition, notre équipe saura imaginer les solutions correspondant 
                            à vos envies ou aux exigences de votre secteur d’activité.</p>
                    </div>
                    <div></div>
                </div>
            </div>
        </section>
        <section id="secteurs">
            <div class="container">
                <div class="row secteurs">
                    <div class="col-lg-4 container-red">
                        <h2>Nos services</h2>
                        <p>pour chacun de vos besoins</p>
                        <HR>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                            <img src="http://localhost/henriet/wp-content/uploads/2022/11/logo_henriet.png" alt="logo henriet">
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <img src="http://localhost/henriet/wp-content/uploads/2022/11/logo_henriet.png" alt="logo henriet">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                            <img src="http://localhost/henriet/wp-content/uploads/2022/11/logo_henriet.png" alt="logo henriet">
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <img src="http://localhost/henriet/wp-content/uploads/2022/11/logo_henriet.png" alt="logo henriet">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="atouts">
            <div class="container">
                <h2>Nos atouts</h2>
                <div class="row">
                    <div class="col-lg-4 col_atouts">
                        <img class="img_atouts1" src="http://localhost/henriet/wp-content/uploads/2022/11/Groupe-38.png"  alt="">
                        <p>+ de 15 ans<br>d’expérience</p>
                    </div>
                    <div class="col-lg-4 col_atouts">
                        <img src="http://localhost/henriet/wp-content/uploads/2022/11/Groupe-39.png"  alt="">
                        <p>Qualité et rapidité<br>d’intervention</p>
                    </div>
                    <div class="col-lg-4 col_atouts">
                        <img src="http://localhost/henriet/wp-content/uploads/2022/11/Groupe-41.png"  alt="">
                        <p>Une entreprise<br>de proximité</p>
                    </div>
                </div>
            </div>
            <button class="btn"><a href="/henriet/societe/">Découvrir l'entreprise</a></button>
        </section>
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2>Nos clients</h2>
                        <h3>témoignent</h3>
                    </div>
                    <div class="col-lg-7 offset-lg-1">
                        <div class="temoignage">
                            <p>« Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit. » </p>
                            <p>Jean DUPONT, particulier</p>
                        </div>
                        <div class="temoignage">
                            <p>« Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit. » </p>
                            <p>Nathalie Marceau, dirigeante de la société A</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="reassurance">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 offset-lg-3 col-md-12">
                        <h2>Un projet ?</h2>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <button class="btn"><a href="/henriet/contact/">Contactez-nous</a></button>
                    </div>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>
    </body>
</html>
