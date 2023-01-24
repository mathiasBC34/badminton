<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">planning</span>
                        <span class="section-heading-lower">We're Open</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php
                        $array = [
                            "lundi" => "18h à 22h",
                            "mardi" => "18h à 20h",
                            "mercredi" => "16h30 à 18h",
                            "jeudi" => "19h30 à 22h",
                            "vendredi" => "18h à 22h",
                            ];
                            
                        foreach ($array as $day => $hours) {
                            echo '<li class="list-unstyled list-hours-item d-flex">' . $day . '<span class="ms-auto">' . $hours . '</span></li>';
                        }
                        ?>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>1116 Orchard Street</strong>
                            <br />
                            Golden Valley, Minnesota
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Call Anytime</em></small>
                        <br />
                        (317) 585-8468
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.7930513613082!2d3.888560615282623!3d43.61085037912276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6af75e22f7f97%3A0xa311207f5c128449!2s717%20Av.%20Jean%20Mermoz%2C%2034000%20Montpellier!5e0!3m2!1sfr!2sfr!4v1672845692149!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">les remerciment</span>
                            <span class="section-heading-lower">merci pour votre présence</span>
                        </h2>
                        <p>
                            l'équipe du secrétaria vous remercie bien d'être venu nombreux !
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>