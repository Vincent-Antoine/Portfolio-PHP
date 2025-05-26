<div class="container justify-content-center d-flex pt-5" id="contact">
    <h2 class="about">Contact</h2>
    <h2 class="about2">Contact</h2>
</div>


<div class="container d-flex align-items-center justify-content-center pt-5">
    <section id="contact" class="contact_box">
        <div class="container_contact">
            <div class="contact-box">
                <div class="right">
                    <p class="text-white">Intéressé par mon profil ? Remplissez le formulaire ci-dessous pour que nous puissions discuter de votre projet !</p>
                    <div class=" d-flex align-items-center ">
                        <div style="width: 30%;height: 2px;background-color: #ffcf00;"></div>
                    </div>
                    <form action="send_email.php" method="POST" autocomplete="off">
                        <label for="name"></label>
                        <input type="text" id="name" name="name" class="field" placeholder="Nom, Prenom" required autocomplete="name">

                        <label for="email"></label>
                        <input type="email" id="email" name="email" class="field" placeholder="Adresse email" required autocomplete="email">

                        <label for="message"></label>
                        <textarea id="message" name="message" rows="5" class="field" placeholder="Message" required></textarea>

                        <label for="consent" class="text-white">
                            <input type="checkbox" id="consent" name="consent" required>
                            J'accepte que mes données soient collectées et traitées selon la politique de confidentialité.
                        </label>
                        </br></br>
                        <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                        <button type="submit" class="button_contact rounded">Envoyer</button>
                    </form>

                    <?php if (isset($_SESSION['feedback'])) : ?>
                        <div class="feedback <?php echo $_SESSION['feedback_type']; ?>">
                            <?php echo $_SESSION['feedback']; ?>
                        </div>
                        <?php
                        unset($_SESSION['feedback']);
                        unset($_SESSION['feedback_type']);
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>