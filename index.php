<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Bienvenue sur la page d'équipe eSTeam ! Venez découvrir notre projet eHo, une application d'aide à la consommation énergétique de votre foyer">
        <title>eSTeam</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/svg" href="img/picto_ampoule.svg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="js/jquery.drawsvg.min.js"></script>
    </head>
    <body>
        <aside class="panneau_cookies">
            <div>
                <p title="Refuser les cookies supprimera les intégrations Google Maps du site">Accepter les cookies ?</p>
                <button class="cookies_acceptes">Oui</button>
                <button class="cookies_refuses">Non</button>
                <button class="fermer_panneau">Fermer</button>
            </div>
        </aside>
        <script>
            // On cache le panneau de cookies au chargement de la page
            $('aside.panneau_cookies').hide();
        </script>
        <?php
            if (!isset($_COOKIE["isGoogleMapsCookiesAccepted"])) {
                echo 
                '<aside class="cookies_pas_de_consentement">
                    <img class="height" src="img/cookie.svg" title="Cookie" alt="Cookie">
                    <p title="Refuser les cookies supprimera les intégrations Google Maps du site">Accepter les cookies ?</p>
                    <div>
                        <button class="cookies_acceptes">Oui</button>
                        <button class="cookies_refuses">Non</button>
                    </div>
                </aside>';
            }
        ?>
        <aside class="cookies">
            <img class="ouvrir_cookies height" src="img/cookie.svg" title="Paramètrage des cookies" alt="Paramètrage des cookies">
        </aside>
        <header>
            <div class="navigation">
                <nav>
                    <div class="picto">
                        <a href="index.html">
                            <img class="height" src="img/picto_ampoule.svg" title="Accueil" alt="Accueil">
                        </a>
                    </div>
                    <div class="categories">
                        <a href="index.html">
                            <p>ACCUEIL</p>
                        </a>
                        <a href="#eHo">
                            <p>EHO</p>
                        </a>
                        <a href="#a_propos">
                            <p>À PROPOS</p>
                        </a>
                        <a href="#contact">
                            <p>CONTACT</p>
                        </a>
                    </div>
                    <div class="pictos_categories">
                        <a href="index.html">
                            <img class="height" src="img/nav_picto/accueil.svg" title="Accueil" alt="Accueil">
                        </a>
                        <a href="#eHo">
                            <img class="height" src="img/nav_picto/eho.svg" title="eHo" alt="eHo">
                        </a>
                        <a href="#a_propos">
                            <img class="height" src="img/nav_picto/a_propos.svg" title="À propos" alt="À propos">
                        </a>
                        <a href="#contact">
                            <img class="height" src="img/nav_picto/contact.svg" title="Contact" alt="Contact">
                        </a>
                    </div>
                </nav>
            </div>
            <div class="bandeau">
                <div class="centre">
                    <div class="logo_centre">
                        <img class="height width" src="img/logo.svg" alt="Logo de l'équipe eSTeam">
                    </div>
                    <div class="elements_en_bas">
                        <h1>L'équipe de développement de l'application eHo</h1>
                        <div>
                            <a href="#eHo">
                                <img class="height" src="img/fleche.svg" title="Voir le projet eHo" alt="Voir le projet eHo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section id="eHo" class="bleu_profond">
                <h2 class="abolition">EHO</h2>
                <div class="eHo_blocs">
                    <div class="eHo_bloc">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 360">
                            <title>Configurez votre consommation</title>
                            <defs>
                                <style type="text/css">
                                @font-face {
                                font-family: 'Roboto';
                                src: url('https://esteam.mmi-velizy.fr/fonts/Roboto-Regular.ttf');
                                font-style: normal;
                                font-weight: 400;
                                }
                                @font-face {
                                font-family: 'Roboto';
                                src: url('https://esteam.mmi-velizy.fr/fonts/Roboto-Bold.ttf');
                                font-style: normal;
                                font-weight: 700;
                                }
                                </style>
                            </defs>
                            <g id="Groupe_30" data-name="Groupe 30" transform="translate(-222 -975)">
                                <g id="Composant_1_1" data-name="Composant 1 – 1" transform="translate(222 975)">
                                    <rect id="Rectangle_69" data-name="Rectangle 69" width="354" height="356" rx="35" transform="translate(3 3)" fill="#2f808c"/>
                                    <path id="Rectangle_69_-_Contour" data-name="Rectangle 69 - Contour" d="M36.86.014C16.631.014.233,15.728.233,35.111V314.889c0,19.384,16.4,35.1,36.628,35.1H313.14c20.229,0,36.628-15.714,36.628-35.1V35.111c0-19.384-16.4-35.1-36.628-35.1H36.86M36.86-5H313.14a43.176,43.176,0,0,1,16.3,3.154,41.86,41.86,0,0,1,13.3,8.594A39.922,39.922,0,0,1,351.708,19.5,38.432,38.432,0,0,1,355,35.111V314.889a38.432,38.432,0,0,1-3.292,15.615,39.921,39.921,0,0,1-8.969,12.748,41.86,41.86,0,0,1-13.3,8.594A43.175,43.175,0,0,1,313.14,355H36.86a43.175,43.175,0,0,1-16.3-3.154,41.86,41.86,0,0,1-13.3-8.594A39.921,39.921,0,0,1-1.708,330.5,38.432,38.432,0,0,1-5,314.889V35.111A38.432,38.432,0,0,1-1.708,19.5,39.921,39.921,0,0,1,7.261,6.748a41.86,41.86,0,0,1,13.3-8.594A43.176,43.176,0,0,1,36.86-5Z" transform="translate(5 5)" fill="#fff"/>
                                </g>
                                <text id="Configurez_Votre_consommation_" data-name="Configurez Votre consommation" transform="translate(288 1210)" fill="#ebaf2a" font-size="35" font-family="Roboto" font-weight="400"><tspan x="30.115" y="33">Configurez</tspan><tspan fill="#fff" font-size="24" font-family="Roboto" font-weight="700"><tspan x="1.172" y="65">Votre consommation</tspan><tspan x="114" y="94"></tspan></tspan></text>
                                <g id="Groupe_26" data-name="Groupe 26" transform="translate(297.463 1023.245)">
                                    <g id="Groupe_24" data-name="Groupe 24" transform="translate(0 0)">
                                        <path id="Tracé_58" data-name="Tracé 58" d="M87.465,38.544A26.982,26.982,0,0,0,75.733,14.6l.005-.005c-.082-.049-.158-.1-.235-.158v.005C60.909,4.419,39.51,11.377,35.331,29.2c-1.524,7.974,3.1,18.554-.694,24.152-4.233,5.232-6.653,8.936-7.27,13.147-1.262,8.526,6.816,15.921,15.058,13.387A22.837,22.837,0,0,0,44.775,79a11.654,11.654,0,0,0,5-4.4c1.071-1.666,2.376-3.709,3.676-5.68a10.86,10.86,0,0,1,3.151-3.255C68.277,58.2,86.667,59.3,87.465,38.544" transform="translate(121.528 43.877)" fill="#ebaf2a"/>
                                        <path id="Tracé_59" data-name="Tracé 59" d="M74.931,16.079C69.354,6.579,58.14-.1,45.586,0V0c-.118,0-.231,0-.349,0v0C23.021.28,6.111,22.889,14.713,44.193c4.2,9.275,16.59,16.782,16.747,25.261-.55,8.43-.358,13.973,2.052,18.741,4.875,9.653,18.5,11.4,25.118,2.838a26.681,26.681,0,0,0,1.777-2.607,14.587,14.587,0,0,0,1.944-8.131c-.1-2.484-.245-5.519-.339-8.479a13.661,13.661,0,0,1,.879-5.617c6.574-16.084,26.228-28.261,12.039-50.119" transform="translate(59.257 5.43)" fill="#fff"/>
                                        <path id="Tracé_60" data-name="Tracé 60" d="M49.645,5.467c11.355,0,22.191,5.959,27.735,15.4,9.378,14.452,3.08,23.672-4.894,35.349-3.3,4.823-6.707,9.815-8.974,15.364a20.664,20.664,0,0,0-1.382,8.488c.087,2.791.213,5.637.322,8.122l.06,1.371a10.732,10.732,0,0,1-1.393,6,24.307,24.307,0,0,1-1.611,2.37,10.373,10.373,0,0,1-8.357,4.014,11.545,11.545,0,0,1-10.394-6.3c-2.136-4.227-2.245-9.809-1.7-18.024l.016-.229-.005-.229c-.137-7.444-5.577-13.458-10.831-19.275-3.266-3.616-6.642-7.352-8.2-10.771A29.057,29.057,0,0,1,23,19.772,31.755,31.755,0,0,1,48.99,5.478l.612-.011ZM49.318,0c-.115.005-.224.005-.339.005h-.055V.016C24.215.317,5.4,25.463,14.968,49.162,19.643,59.48,33.429,67.836,33.6,77.263c-.617,9.378-.4,15.55,2.283,20.848a17.058,17.058,0,0,0,15.266,9.3,15.817,15.817,0,0,0,12.677-6.134,30,30,0,0,0,1.972-2.9,16.2,16.2,0,0,0,2.168-9.05c-.12-2.758-.273-6.134-.382-9.433a15.161,15.161,0,0,1,.983-6.243c7.313-17.9,29.172-31.438,13.392-55.76C75.808,7.406,63.48.005,49.645.005h-.328Z" transform="translate(55.462 0.002)" fill="#09535e"/>
                                        <path id="Tracé_61" data-name="Tracé 61" d="M30.941,65.664a10.86,10.86,0,0,1,3.151,3.255c1.3,1.972,2.6,4.014,3.67,5.68A11.668,11.668,0,0,0,42.771,79a21.588,21.588,0,0,0,2.349.879c8.242,2.54,16.315-4.856,15.058-13.382-.617-4.211-3.037-7.914-7.27-13.147-3.791-5.6.83-16.178-.694-24.152C48.036,11.379,26.637,4.415,12.043,14.443v-.005c-.076.055-.153.109-.235.158l.005.005A26.976,26.976,0,0,0,.081,38.546C.879,59.3,19.269,58.2,30.941,65.664" transform="translate(0.001 43.875)" fill="#ebaf2a"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="eHo_bloc">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 360">
                            <title>Visualisez votre prix moyen</title>
                            <defs>
                                <style type="text/css">
                                @font-face {
                                font-family: 'Roboto';
                                src: url('https://esteam.mmi-velizy.fr/fonts/Roboto-Regular.ttf');
                                font-style: normal;
                                font-weight: 400;
                                }
                                @font-face {
                                font-family: 'Roboto';
                                src: url('https://esteam.mmi-velizy.fr/fonts/Roboto-Bold.ttf');
                                font-style: normal;
                                font-weight: 700;
                                }
                                </style>
                            </defs>
                            <g id="Groupe_36" data-name="Groupe 36" transform="translate(-780 -975)">
                                <g id="Composant_1_2" data-name="Composant 1 – 2" transform="translate(780 975)">
                                    <rect id="Rectangle_69" data-name="Rectangle 69" width="354" height="356" rx="35" transform="translate(3 3)" fill="#2f808c"/>
                                    <path id="Rectangle_69_-_Contour" data-name="Rectangle 69 - Contour" d="M36.86.014C16.631.014.233,15.728.233,35.111V314.889c0,19.384,16.4,35.1,36.628,35.1H313.14c20.229,0,36.628-15.714,36.628-35.1V35.111c0-19.384-16.4-35.1-36.628-35.1H36.86M36.86-5H313.14a43.176,43.176,0,0,1,16.3,3.154,41.86,41.86,0,0,1,13.3,8.594A39.922,39.922,0,0,1,351.708,19.5,38.432,38.432,0,0,1,355,35.111V314.889a38.432,38.432,0,0,1-3.292,15.615,39.921,39.921,0,0,1-8.969,12.748,41.86,41.86,0,0,1-13.3,8.594A43.175,43.175,0,0,1,313.14,355H36.86a43.175,43.175,0,0,1-16.3-3.154,41.86,41.86,0,0,1-13.3-8.594A39.921,39.921,0,0,1-1.708,330.5,38.432,38.432,0,0,1-5,314.889V35.111A38.432,38.432,0,0,1-1.708,19.5,39.921,39.921,0,0,1,7.261,6.748a41.86,41.86,0,0,1,13.3-8.594A43.176,43.176,0,0,1,36.86-5Z" transform="translate(5 5)" fill="#fff"/>
                                </g>
                                <text id="Visualisez_Votre_prix_moyen" data-name="Visualisez Votre prix moyen" transform="translate(783 1210)" fill="#ebaf2a" font-size="35" font-family="Roboto" font-weight="400"><tspan x="97.968" y="33">Visualisez</tspan><tspan fill="#fff" font-size="24" font-family="Roboto" font-weight="700"><tspan x="93.48" y="65">Votre prix moyen</tspan></tspan></text>
                                <g id="Groupe_32" data-name="Groupe 32" transform="translate(871.656 1035.703)">
                                    <g id="Groupe_31" data-name="Groupe 31" transform="translate(0 0)">
                                        <path id="Tracé_62" data-name="Tracé 62" d="M167.806,64.91,125.133,93.617c-12.318,6.224-27.606,9.906-44.169,9.906S49.117,99.841,36.8,93.617L16.358,79.865c-21.146-14.224-21.143-37.5.007-51.719l5.614-3.771a.228.228,0,0,0,.1-.085l14.719-9.9.048-.03C49.154,8.164,64.42,4.485,80.964,4.485s31.814,3.679,44.117,9.873l.052.03,14.719,9.9a.228.228,0,0,0,.1.085L167.8,43.1c8.92,5.995,8.924,15.813,0,21.811" transform="translate(1.349 12.083)" fill="#ebaf2a"/>
                                        <path id="Tracé_63" data-name="Tracé 63" d="M82.313,106.716c-16.352,0-31.91-3.494-45-10.1L16.677,82.748C5.921,75.512,0,65.783,0,55.352S5.928,35.2,16.681,27.963L37.118,14.2C50.455,7.467,65.995,3.984,82.313,3.984s31.862,3.483,44.948,10.073l.321.2,42.6,28.655c4.839,3.258,7.506,7.672,7.506,12.44s-2.667,9.179-7.5,12.437L127.509,96.5c-13.286,6.722-28.848,10.217-45.2,10.217M24.238,27.335l-5.489,3.694C9.046,37.552,3.7,46.188,3.694,55.352s5.345,17.8,15.044,24.33L39.182,93.433c12.37,6.231,27.352,9.589,43.131,9.589s30.761-3.358,43.33-9.707l42.477-28.593,1.031,1.533-1.031-1.533c3.786-2.545,5.873-5.877,5.873-9.371s-2.091-6.83-5.877-9.375L125.444,17.266c-12.422-6.242-27.389-9.589-43.131-9.589S51.6,11.024,39.027,17.355Z" transform="translate(0 10.733)" fill="#09535e"/>
                                        <path id="Tracé_64" data-name="Tracé 64" d="M140.451,54c0,11.14-5.079,21.427-13.667,29.712a62.613,62.613,0,0,1-13.667,9.9c-11.436,6.224-25.623,9.9-41,9.9s-29.564-3.679-41-9.9a62.612,62.612,0,0,1-13.667-9.9C8.864,75.429,3.785,65.142,3.785,54c0-11.111,5.057-21.36,13.574-29.631a.168.168,0,0,0,.092-.081,62.613,62.613,0,0,1,13.667-9.9.248.248,0,0,0,.115-.066A86.36,86.36,0,0,1,72.118,4.485,86.36,86.36,0,0,1,113,14.321a.248.248,0,0,0,.114.066,62.613,62.613,0,0,1,13.667,9.9.168.168,0,0,0,.092.081c8.518,8.27,13.574,18.52,13.574,29.631" transform="translate(10.196 12.083)" fill="#fff"/>
                                        <path id="Tracé_65" data-name="Tracé 65" d="M74.811,109.913c-15.528,0-30.314-3.583-42.762-10.357a65.97,65.97,0,0,1-14.472-10.49C7.9,79.729,2.785,68.537,2.785,56.7c0-11.786,5.082-22.945,14.7-32.279L18,23.925a66.044,66.044,0,0,1,13.345-9.7l.011-.015.809-.44C44.6,7.041,59.35,3.484,74.811,3.484s30.21,3.557,42.643,10.283l.82.454a66.045,66.045,0,0,1,13.345,9.7l.015.007.506.488c9.615,9.334,14.7,20.492,14.7,32.279,0,11.838-5.116,23.03-14.8,32.371a65.947,65.947,0,0,1-14.472,10.49c-12.444,6.77-27.23,10.353-42.758,10.353M22.192,30.149C14.328,37.964,10.172,47.136,10.172,56.7c0,9.785,4.336,19.137,12.54,27.056a58.759,58.759,0,0,0,12.861,9.312c11.373,6.191,24.94,9.459,39.238,9.459s27.865-3.269,39.234-9.456a58.939,58.939,0,0,0,12.865-9.312c8.2-7.923,12.54-17.275,12.54-27.06,0-9.544-4.133-18.69-11.964-26.491l-.251-.107-.491-.617a58.541,58.541,0,0,0-12.533-9.064l-.986-.532a82.606,82.606,0,0,0-38.414-9.016A82.693,82.693,0,0,0,36.482,19.84l-.122.185-.949.4A58.664,58.664,0,0,0,22.9,29.465Z" transform="translate(7.502 9.387)" fill="#09535e"/>
                                        <path id="Tracé_66" data-name="Tracé 66" d="M44.734,9.557a30.754,30.754,0,0,0-9.068,1.363A14.709,14.709,0,0,1,15.314,31.268,30.785,30.785,0,1,0,44.734,9.557" transform="translate(37.579 25.745)" fill="#09535e"/>
                                        <path id="Tracé_67" data-name="Tracé 67" d="M46.082,74.313A32.642,32.642,0,0,1,14.9,32.069l.72-2.334,2.05,1.333a12.861,12.861,0,0,0,17.8-17.792l-1.333-2.054,2.338-.717a32.628,32.628,0,1,1,9.615,63.808M17.84,35.363A28.916,28.916,0,1,0,39.762,13.445,16.564,16.564,0,0,1,17.84,35.363" transform="translate(36.235 24.398)" fill="#09535e"/>
                                        <path id="Tracé_68" data-name="Tracé 68" d="M141.3,39.218l-.048-.048a2.11,2.11,0,0,1-.092-2.929l9.847-10.7a2.107,2.107,0,0,1,3.01-.1c.373.366.742.739,1.1,1.108a2.092,2.092,0,0,1-.126,3l-10.767,9.777a2.115,2.115,0,0,1-2.929-.111m-128.436.063L2.1,29.493a2.1,2.1,0,0,1-.118-3q.549-.565,1.119-1.119a2.1,2.1,0,0,1,3.01.107l9.814,10.73a2.114,2.114,0,0,1-.1,2.929l-.041.041a2.113,2.113,0,0,1-2.925.1M119.373,25.374l-.366-.144a2.107,2.107,0,0,1-1.212-2.685l5.071-13.633a2.1,2.1,0,0,1,2.726-1.23c.388.155.776.31,1.16.469a2.089,2.089,0,0,1,1.112,2.77L122.1,24.273a2.1,2.1,0,0,1-2.726,1.1M35,24.244l-5.747-13.36a2.1,2.1,0,0,1,1.115-2.77c.384-.155.768-.307,1.156-.462a2.1,2.1,0,0,1,2.726,1.234l5.053,13.637A2.1,2.1,0,0,1,38.091,25.2c-.118.048-.24.1-.362.148A2.1,2.1,0,0,1,35,24.244m57.747-5.511c-.174-.022-.347-.041-.524-.063a2.081,2.081,0,0,1-1.854-2.261l1.4-14.5A2.1,2.1,0,0,1,94.083.024l1.141.133a2.093,2.093,0,0,1,1.81,2.368L95.062,16.956a2.073,2.073,0,0,1-2.312,1.777M62.066,16.927l-2-14.405A2.1,2.1,0,0,1,61.882.15c.388-.048.776-.092,1.167-.137A2.1,2.1,0,0,1,65.357,1.9l1.378,14.479a2.1,2.1,0,0,1-1.869,2.279l-.462.055a2.1,2.1,0,0,1-2.338-1.791" transform="translate(3.792 0.003)" fill="#09535e"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="eHo_bloc">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 360">
                            <title>Économisez sur votre facture mensuelle</title>
                            <defs>
                                <style type="text/css">
                                @font-face {
                                font-family: 'Roboto';
                                src: url('https://esteam.mmi-velizy.fr/fonts/Roboto-Regular.ttf');
                                font-style: normal;
                                font-weight: 400;
                                }
                                @font-face {
                                font-family: 'Roboto';
                                src: url('https://esteam.mmi-velizy.fr/fonts/Roboto-Bold.ttf');
                                font-style: normal;
                                font-weight: 700;
                                }
                                </style>
                            </defs>
                            <g id="Groupe_35" data-name="Groupe 35" transform="translate(-1338 -975)">
                                <g id="Composant_1_3" data-name="Composant 1 – 3" transform="translate(1338 975)">
                                    <rect id="Rectangle_69" data-name="Rectangle 69" width="354" height="356" rx="35" transform="translate(3 3)" fill="#2f808c"/>
                                    <path id="Rectangle_69_-_Contour" data-name="Rectangle 69 - Contour" d="M36.86.014C16.631.014.233,15.728.233,35.111V314.889c0,19.384,16.4,35.1,36.628,35.1H313.14c20.229,0,36.628-15.714,36.628-35.1V35.111c0-19.384-16.4-35.1-36.628-35.1H36.86M36.86-5H313.14a43.176,43.176,0,0,1,16.3,3.154,41.86,41.86,0,0,1,13.3,8.594A39.922,39.922,0,0,1,351.708,19.5,38.432,38.432,0,0,1,355,35.111V314.889a38.432,38.432,0,0,1-3.292,15.615,39.921,39.921,0,0,1-8.969,12.748,41.86,41.86,0,0,1-13.3,8.594A43.175,43.175,0,0,1,313.14,355H36.86a43.175,43.175,0,0,1-16.3-3.154,41.86,41.86,0,0,1-13.3-8.594A39.921,39.921,0,0,1-1.708,330.5,38.432,38.432,0,0,1-5,314.889V35.111A38.432,38.432,0,0,1-1.708,19.5,39.921,39.921,0,0,1,7.261,6.748a41.86,41.86,0,0,1,13.3-8.594A43.176,43.176,0,0,1,36.86-5Z" transform="translate(5 5)" fill="#fff"/>
                                </g>
                                <text id="Économisez_Sur_votre_facture_mensuelle_" data-name="Économisez Sur votre facture mensuelle" transform="translate(1414.14 1210)" fill="#ebaf2a" font-size="35" font-family="Roboto" font-weight="400"><tspan x="8.886" y="33">Économisez</tspan><tspan fill="#fff" font-size="24" font-family="Roboto" font-weight="700"><tspan x="13.473" y="65">Sur votre facture </tspan><tspan x="48.184" y="94">mensuelle</tspan></tspan></text>
                                <g id="Groupe_34" data-name="Groupe 34" transform="translate(1426.105 1022.973)">
                                    <g id="Groupe_33" data-name="Groupe 33" transform="translate(0 0)">
                                        <path id="Tracé_69" data-name="Tracé 69" d="M125.062,150.755H19.461a5.745,5.745,0,0,1-5.745-5.745V5.745A5.745,5.745,0,0,1,19.461,0h105.6a5.745,5.745,0,0,1,5.745,5.745V145.01a5.745,5.745,0,0,1-5.745,5.745" transform="translate(19.474 -0.001)" fill="#d9f0ed"/>
                                        <path id="Tracé_70" data-name="Tracé 70" d="M60.983,30.24h-40.5A4.242,4.242,0,0,1,16.246,26V7.7a4.243,4.243,0,0,1,4.242-4.247h40.5A4.243,4.243,0,0,1,65.225,7.7V26a4.242,4.242,0,0,1-4.242,4.239" transform="translate(23.066 4.902)" fill="#fff"/>
                                        <path id="Tracé_71" data-name="Tracé 71" d="M61.337,31.2H20.844A4.854,4.854,0,0,1,16,26.352V8.051A4.854,4.854,0,0,1,20.844,3.2H61.337a4.853,4.853,0,0,1,4.849,4.847v18.3A4.853,4.853,0,0,1,61.337,31.2M20.844,4.414A3.642,3.642,0,0,0,17.2,8.051v18.3a3.641,3.641,0,0,0,3.639,3.637H61.337a3.641,3.641,0,0,0,3.639-3.637V8.051a3.642,3.642,0,0,0-3.639-3.637Z" transform="translate(22.709 4.548)" fill="#09535e"/>
                                        <path id="Tracé_72" data-name="Tracé 72" d="M86.954,10.209H40.691a1.357,1.357,0,0,1-1.358-1.357V5.444a1.357,1.357,0,0,1,1.358-1.357H86.954a1.357,1.357,0,0,1,1.357,1.357V8.852a1.357,1.357,0,0,1-1.357,1.357" transform="translate(55.844 5.802)" fill="#09535e"/>
                                        <path id="Tracé_73" data-name="Tracé 73" d="M86.954,14H40.691a1.357,1.357,0,0,1-1.358-1.357V9.239a1.357,1.357,0,0,1,1.358-1.357H86.954a1.357,1.357,0,0,1,1.357,1.357v3.407A1.357,1.357,0,0,1,86.954,14" transform="translate(55.844 11.19)" fill="#09535e"/>
                                        <path id="Tracé_74" data-name="Tracé 74" d="M86.954,17.8H40.691a1.357,1.357,0,0,1-1.358-1.357V13.034a1.357,1.357,0,0,1,1.358-1.357H86.954a1.357,1.357,0,0,1,1.357,1.357v3.407A1.357,1.357,0,0,1,86.954,17.8" transform="translate(55.844 16.578)" fill="#09535e"/>
                                        <rect id="Rectangle_72" data-name="Rectangle 72" width="104.847" height="4.097" transform="translate(39.312 47.198)" fill="#09535e"/>
                                        <rect id="Rectangle_73" data-name="Rectangle 73" width="48.212" height="4.097" transform="translate(95.947 55.57)" fill="#09535e"/>
                                        <rect id="Rectangle_74" data-name="Rectangle 74" width="45.831" height="4.097" transform="translate(39.694 55.57)" fill="#09535e"/>
                                        <rect id="Rectangle_75" data-name="Rectangle 75" width="48.212" height="4.097" transform="translate(95.947 63.943)" fill="#09535e"/>
                                        <rect id="Rectangle_76" data-name="Rectangle 76" width="45.831" height="4.097" transform="translate(39.694 63.943)" fill="#09535e"/>
                                        <rect id="Rectangle_77" data-name="Rectangle 77" width="104.847" height="4.097" transform="translate(39.312 82.202)" fill="#09535e"/>
                                        <rect id="Rectangle_78" data-name="Rectangle 78" width="48.212" height="4.097" transform="translate(95.947 90.575)" fill="#09535e"/>
                                        <rect id="Rectangle_79" data-name="Rectangle 79" width="45.831" height="4.097" transform="translate(39.694 90.575)" fill="#09535e"/>
                                        <rect id="Rectangle_80" data-name="Rectangle 80" width="48.212" height="4.097" transform="translate(95.947 98.947)" fill="#09535e"/>
                                        <rect id="Rectangle_81" data-name="Rectangle 81" width="45.831" height="4.097" transform="translate(39.694 98.947)" fill="#09535e"/>
                                        <path id="Tracé_75" data-name="Tracé 75" d="M82.23,68.3H45.619a4.242,4.242,0,0,1-4.242-4.242V56.915a4.242,4.242,0,0,1,4.242-4.242H82.23a4.242,4.242,0,0,1,4.242,4.242v7.146A4.242,4.242,0,0,1,82.23,68.3" transform="translate(58.746 74.783)" fill="#fff"/>
                                        <path id="Tracé_76" data-name="Tracé 76" d="M82.584,69.262H45.975a4.852,4.852,0,0,1-4.847-4.847V57.27a4.852,4.852,0,0,1,4.847-4.847H82.584a4.854,4.854,0,0,1,4.849,4.847v7.146a4.854,4.854,0,0,1-4.849,4.847M45.975,53.633a3.64,3.64,0,0,0-3.637,3.637v7.146a3.64,3.64,0,0,0,3.637,3.637H82.584a3.642,3.642,0,0,0,3.639-3.637V57.27a3.642,3.642,0,0,0-3.639-3.637Z" transform="translate(58.393 74.429)" fill="#09535e"/>
                                        <path id="Tracé_77" data-name="Tracé 77" d="M178.3,117.735l-17.614-54.98-9.607,10.64L109.427,27.262,96.638,13.094l-.019-.022L64.789,48.328a11.856,11.856,0,0,1-17.974,0L14.157,12.155,1.347,26.342l54.44,60.3.012-.015.015.017L87.632,51.4a11.853,11.853,0,0,1,17.972,0l32.665,36.181-9.607,10.642Z" transform="translate(1.912 17.257)" fill="#ebaf2a"/>
                                        <path id="Tracé_78" data-name="Tracé 78" d="M16.07,14.273,48.727,50.449a11.856,11.856,0,0,0,17.974,0l31.83-35.256.019.022L111.339,29.38l41.649,46.136L162.6,64.873l17.611,54.982-49.635-19.511,9.607-10.64L107.518,53.525a11.856,11.856,0,0,0-17.974,0L57.729,88.766l-.017-.017-.012.015-54.44-60.3Zm0-3.61-1.8,1.989L1.464,26.842,0,28.463l1.464,1.621,54.44,60.3,1.781,1.975.024-.027.015.015,1.8-1.96L91.34,55.146a9.438,9.438,0,0,1,14.381,0l31.2,34.559-8.145,9.019-2.342,2.594,3.255,1.28,49.635,19.508,4.745,1.866-1.553-4.854L164.9,64.135l-1.283-4L160.8,63.252l-7.811,8.653L113.137,27.759,100.346,13.593,98.55,11.6l-1.817,1.967L64.906,48.828a9.438,9.438,0,0,1-14.381,0L17.865,12.652Z" transform="translate(0 15.138)" fill="#fff"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="jouer">
                    <a class="abolition" href="https://eho.esteam.mmi-velizy.fr/" target="_self">JOUER</a>
                </div>
            </section>
            <section class="blanc">
                <div class="eHo_blocs">
                    <div class="eHo_bloc">
                        <svg id="Calque_2" class="drawsvg" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 195">
                            <title>1 Projet</title>
                            <defs>
                                <style>
                                    .cls-1 {
                                    fill: none;
                                    stroke: #ebaf2a;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                    stroke-width: 20px;
                                    }
                                    @font-face {
                                    font-family: 'Abolition';
                                    src: url('https://esteam.mmi-velizy.fr/fonts/Abolition-Regular.ttf');
                                    font-style: normal;
                                    font-weight: 400;
                                    }
                                </style>
                            </defs>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Abolition" font-size="30px" fill="black">1 Projet</text>
                            <g id="Calque_1-2" data-name="Calque 1">
                                <path class="cls-1" d="m157.93,43.56c-15.36-17.21-37.36-27.06-60.43-27.06-44.44,0-81,36.56-81,81s36.56,81,81,81,81-36.56,81-81"/>
                            </g>
                        </svg>
                    </div>
                    <div class="eHo_bloc">
                        <svg id="Calque_2" class="drawsvg" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 195">
                            <title>4 Étudiants</title>
                            <defs>
                                <style>
                                    .cls-1 {
                                    fill: none;
                                    stroke: #ebaf2a;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                    stroke-width: 20px;
                                    }
                                    @font-face {
                                    font-family: 'Abolition';
                                    src: url('https://esteam.mmi-velizy.fr/fonts/Abolition-Regular.ttf');
                                    font-style: normal;
                                    font-weight: 400;
                                    }
                                </style>
                            </defs>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Abolition" font-size="30px" fill="black">4 Étudiants</text>
                            <g id="Calque_1-2" data-name="Calque 1">
                                <path class="cls-1" d="m157.93,43.56c-15.36-17.21-37.36-27.06-60.43-27.06-44.44,0-81,36.56-81,81s36.56,81,81,81,81-36.56,81-81"/>
                            </g>
                        </svg>
                    </div>
                    <div class="eHo_bloc">
                        <svg id="Calque_2" class="drawsvg" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 195">
                            <title>600 Heures</title>
                            <defs>
                                <style>
                                    .cls-1 {
                                    fill: none;
                                    stroke: #ebaf2a;
                                    stroke-linecap: round;
                                    stroke-miterlimit: 10;
                                    stroke-width: 20px;
                                    }
                                    @font-face {
                                    font-family: 'Abolition';
                                    src: url('https://esteam.mmi-velizy.fr/fonts/Abolition-Regular.ttf');
                                    font-style: normal;
                                    font-weight: 400;
                                    }
                                </style>
                            </defs>
                            <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-family="Abolition" font-size="30px" fill="black">600 Heures</text>
                            <g id="Calque_1-2" data-name="Calque 1">
                                <path class="cls-1" d="m157.93,43.56c-15.36-17.21-37.36-27.06-60.43-27.06-44.44,0-81,36.56-81,81s36.56,81,81,81,81-36.56,81-81"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </section>
            <section id="a_propos" class="bleu_pastel">
                <h2 class="abolition">À PROPOS</h2>
                <div class="colonnes">
                    <div class="colonne">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam orci libero, mollis eget ligula ullamcorper, mattis congue nunc. Nulla quis maximus mauris. Pellentesque auctor, purus quis tempor venenatis, tellus diam suscipit libero, vitae dapibus dolor leo at elit. Praesent iaculis augue ligula, vitae molestie justo maximus ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur venenatis consectetur rutrum. Integer quis tincidunt magna, nec aliquet enim. In gravida volutpat eleifend. Mauris sodales blandit lectus, a lacinia libero accumsan et.</p>
                        <p>Aliquam accumsan erat sit amet nulla interdum, et ornare ligula vestibulum. Sed sed consectetur magna. Sed tincidunt nulla vitae pulvinar egestas. In at sem eu felis molestie efficitur cursus a lacus. Sed et gravida orci, vitae euismod nibh. Praesent at malesuada dolor, eget cursus tortor. Suspendisse erat sem, porttitor eu porta et, condimentum id enim.</p>
                    </div>
                    <div class="colonne maps">
                        <?php
                            if (isset($_COOKIE["isGoogleMapsCookiesAccepted"]) && $_COOKIE["isGoogleMapsCookiesAccepted"] == "true") {
                                echo '<iframe class="google_maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.3328801622456!2d2.2192653943151535!3d48.782909826281475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67bd6e0de7851%3A0xbabe984ad233bd22!2sIUT%20de%20V%C3%A9lizy!5e1!3m2!1sfr!2sfr!4v1678632623411!5m2!1sfr!2sfr" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
                            }
                            else {
                                echo '<img class="width plan" src="img/plan.jpg" alt="Image statique Google Maps - IUT de Vélizy">';
                            }
                        ?>
                    </div>
                </div>
            </section>
            <section id="contact" class="bleu_profond">
                <h2 class="abolition">CONTACT</h2>
                <form class="formulaire_contact" action="contact.php" method="POST">
                    <input type="text" name="nom" placeholder="Votre nom" required>
                    <input type="email" name="email" placeholder="Votre email" required>
                    <textarea rows="10" name="message" placeholder="Votre message" required></textarea>
                    <input type="submit" name="envoyer" value="Envoyer">
                </form>
            </section>
        </main>
        <footer>
            <div>
                <p>© Copyright 2023 - eSTeam</p>
                <p><a class="underline icons8" href="https://www.esteam.mmi-velizy.fr" target="_self">Mentions légales</a></p>
                <p><a class="underline icons8" href="https://icons8.com" target="_blank" rel="noopener noreferrer nofollow">Icônes par Icons8</a></p>
                <div class="reseaux_sociaux">
                    <a href="https://twitter.com/home/" target="_blank" rel="noopener noreferrer nofollow">
                        <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px"><title>Twitter</title><path d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer nofollow">
                        <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px"><title>LinkedIn</title><path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"/></svg>
                    </a>
                    <a href="https://github.com/MattMatt-aka-Matt/projetTuteure" target="_blank" rel="noopener noreferrer nofollow">
                        <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px"><title>GitHub</title><path d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39 c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2 c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975 c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714 c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999 c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6 c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5 c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999 c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689 c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33 c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25 C2,35.164,8.63,43.804,17.791,46.836z"/></svg>
                    </a>
                </div>
            </div>
        </footer>
        <!-- Script DrawSVG  -->
        <script>
            // Fonction qui détecte si l'élément est dans le viewport - Crédits : https://medium.com/talk-like/detecting-if-an-element-is-in-the-viewport-jquery-a6a4405a3ea2
            $.fn.isInViewport = function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();
                return elementBottom > viewportTop && elementTop < viewportBottom;
            };
            
            $(document).ready(function() {
                var notDone = true;
                $(window).on('scroll', function() {
                    if ($('svg.drawsvg').isInViewport() && notDone) {
                        var cercle = $('svg.drawsvg').drawsvg({ // DrawSVG : définition du svg à animer
                            reverse: true
                        });
                        cercle.drawsvg('animate'); // Démarrage de l'animation
                        notDone = false;
                    }
                });
            });
        </script>
        <!-- Script de gestion des cookies -->
        <script>
            $(document).ready(function() {
                // Fonction qui appelle via AJAX le fichier cookies.php qui s'occupe de déposer le cookies d'acceptation ou de refus d'utilisation de Google Maps
                function googleMapsCookiesAccept(choix) {
                    console.log("Clic");
                    jQuery.ajax({
                        type: "POST",
                        url: "cookies.php",
                        dataType: "json",
                        data: {
                            isGoogleMapsCookiesAccepted : choix
                        },
                        success: function(reponse) {
                            console.log(JSON.parse(reponse));
                            if (JSON.parse(reponse) == true) {
                                console.log("Test cookie accepté");
                                $('div.maps').html('<iframe class="google_maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.3328801622456!2d2.2192653943151535!3d48.782909826281475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67bd6e0de7851%3A0xbabe984ad233bd22!2sIUT%20de%20V%C3%A9lizy!5e1!3m2!1sfr!2sfr!4v1678632623411!5m2!1sfr!2sfr" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>');
                            }
                            else {
                                console.log("Test cookie refusé");
                                $('div.maps').html('<img class="width plan" src="img/plan.jpg" alt="Image statique Google Maps - IUT de Vélizy">');
                            }
                        }
                    });
                    console.log("AJAX cookies");
                    $('aside.cookies_pas_de_consentement').animate({opacity: 'hide', height: 'hide'}, 'slow');
                }
                
                // Détection des clics des boutons de consentement des cookies
                $('button.cookies_acceptes').on('click', function(){
                    googleMapsCookiesAccept(true);
                    $('aside.panneau_cookies').animate({opacity: 'hide', height: 'hide'}, 'slow');
                });
                $('button.cookies_refuses').on('click', function(){
                    googleMapsCookiesAccept(false);
                    $('aside.panneau_cookies').animate({opacity: 'hide', height: 'hide'}, 'slow');
                });
                // Détection du clic sur l'image pour ouvrir le panneau de configuration des cookies
                $('img.ouvrir_cookies').on('click', function() {
                    $('aside.panneau_cookies').animate({opacity: 'toggle', height: 'toggle'}, 'slow');
                });
                $('button.fermer_panneau').on('click', function() {
                    $('aside.panneau_cookies').animate({opacity: 'hide', height: 'hide'}, 'slow');
                });
            });
        </script>
    </body>
</html>