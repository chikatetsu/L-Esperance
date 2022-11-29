<footer>
    <div id="flex">
        <div>
            <!-- Partie Coordonnées -->
            <div class="sstitre">Nous contacter</div>

            <?php
                $xml = simplexml_load_file("info.xml");
                $work= $xml->footer;

                //Affiche l'adresse
                echo "<p><a href=\"https://www.google.com/maps?ll=48.426941,2.140391&z=15&t=m&hl=fr&gl=FR&mapclient=embed&cid=17633051484575925350\">";
                echo "<img class=\"icone\" src=\"img/icone\lieu.png\">", $work->contact[0], "</a></br>";
                //Affiche le numéro de téléphone
                echo "<a href=\"tel:", $work->contact[1], "\">";
                echo "<img class=\"icone\" src=\"img/icone/tel.png\">",  $work->contact[1], "</a></br>";
                //Affiche le mail
                echo "<a href=\"mailto:",  $work->contact[2], "\">";
                echo "<img class=\"icone\" src=\"img/icone/mail.png\">",  $work->contact[2], "</a></p>";
            ?>
        </div>
        
        <!-- Partie Horaire -->
        <div>
            <div class="sstitre">Horaires</div>

            <?php
                $xml = simplexml_load_file("info.xml");
                echo "<p>", $xml->footer->horaire, "</p>";
            ?>
        </div>
    </div>

    <hr>

    <div>
        <a name="map">
            <iframe class="maps" allowfullscreen="" loading="lazy"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2647.5415626802624!2d2.138201815359981!3d48.42694493894185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5cbcf05912aa3%3A0xf4b52ee6bc528466!2zQ2Fmw6kgTCdFc3DDqXJhbmNl!5e0!3m2!1sfr!2sfr!4v1622195764876!5m2!1sfr!2sfr">
            </iframe>
        </a>
    </div>

    <div id="flex">
        <div class="social">
            <img class="img-social" src="img/icone/facebook.png" usemap="#facebook">
            <map name="facebook">
                <area shape="circle" coords="32, 32, 64" href="https://fr-fr.facebook.com/esperanceetampes">
            </map>
        </div>

        <div class="social">
            <img class="img-social" src="img/icone/tripadvisor.png" usemap="#tripadvisor">
            <map name="tripadvisor">
                <area shape="circle" coords="32, 32, 68"
                    href="https://www.tripadvisor.fr/Restaurant_Review-g1067692-d3735158-Reviews-Cafe_de_l_Esperance-Etampes_Essonne_Ile_de_France.html">
            </map>
        </div>
    </div>

    <hr>

    <p> L'abus d'alcool est dangereux pour la santé. À consommer avec modération
        La vente d'alcool aux moins de 18 ans est interdite
    </p>
</footer>