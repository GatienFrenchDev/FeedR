<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout | MyRSS</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/side-bar.css">
    <link rel="stylesheet" href="view/css/font.css">
    <link rel="stylesheet" href="view/css/add-content.css">
    <link rel="stylesheet" href="view/css/colors.css">
</head>

<body>
    <?php
    createSideBar(0);
    ?>

    <div class="container">


        <div class="categorie-ajout">
            <h1>/<code><?= $nom ?></code></h1>

            <h4>Fluxs disponibles</h4>

            <div class="type">
                <?php if (!isset($id_categorie)) { ?>
                <a class="non-disponible">
                <?php } else { ?>
                <a href="ajout-content?type=rss&<?= $parametre_balise ?>">
                <?php } ?>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 11C3 10.4477 3.44772 10 4 10C6.65216 10 9.1957 11.0536 11.0711 12.9289C12.9464 14.8043 14 17.3478 14 20C14 20.5523 13.5523 21 13 21C12.4477 21 12 20.5523 12 20C12 17.8783 11.1571 15.8434 9.65685 14.3431C8.15656 12.8429 6.12173 12 4 12C3.44772 12 3 11.5523 3 11Z" fill="#FFFFFF"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 4C3 3.44772 3.44772 3 4 3C8.50868 3 12.8327 4.79107 16.0208 7.97919C19.2089 11.1673 21 15.4913 21 20C21 20.5523 20.5523 21 20 21C19.4477 21 19 20.5523 19 20C19 16.0218 17.4196 12.2064 14.6066 9.3934C11.7936 6.58035 7.97825 5 4 5C3.44772 5 3 4.55228 3 4Z" fill="#FFFFFF"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 19C3 17.8954 3.89543 17 5 17C6.10457 17 7 17.8954 7 19C7 20.1046 6.10457 21 5 21C3.89543 21 3 20.1046 3 19Z" fill="#FFFFFF"></path>
                    </svg>
                    <span>Flux RSS</span>
                </a>

                <?php if (!isset($id_categorie)) { ?>
                <a class="non-disponible">
                <?php } else { ?>
                <a href="ajout-content?type=yt&<?= $parametre_balise ?>">
                <?php } ?>
                    <svg id="yt-icon" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.20445 10.4471C4 11.2101 4 12.1401 4 14C4 15.8599 4 16.7899 4.20445 17.5529C4.75925 19.6235 6.37653 21.2408 8.44709 21.7956C9.21008 22 10.1401 22 12 22H16C17.8599 22 18.7899 22 19.5529 21.7956C21.6235 21.2408 23.2408 19.6235 23.7956 17.5529C24 16.7899 24 15.8599 24 14C24 12.1401 24 11.2101 23.7956 10.4471C23.2408 8.37653 21.6235 6.75925 19.5529 6.20445C18.7899 6 17.8599 6 16 6H12C10.1401 6 9.21008 6 8.44709 6.20445C6.37653 6.75925 4.75925 8.37653 4.20445 10.4471ZM18 14.0004L12 18V10L18 14.0004Z" fill="#FFFFFF"></path></svg>
                    <span>Youtube</span>
                </a>

                <?php if (!isset($id_categorie)) { ?>
                <a class="non-disponible">
                    <?php } else { ?>
                <a href="ajout-content?type=google-news&<?= $parametre_balise ?>">
                    <?php } ?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 6550.8 5359.7" xml:space="preserve" heigth="24" width="24"><path fill="#0C9D58" d="M5210.8 3635.7c0 91.2-75.2 165.9-167.1 165.9H1507c-91.9 0-167.1-74.7-167.1-165.9V165.9C1339.9 74.7 1415.1 0 1507 0h3536.8c91.9 0 167.1 74.7 167.1 165.9v3469.8z" /><polygon opacity=".2" fill="#004D40" points="5210.8,892 3885.3,721.4 5210.8,1077" /><path opacity=".2" fill="#004D40" d="M3339.3 180.9L1332 1077.2l2218.5-807.5v-2.2c-39-83.6-134-122.6-211.2-86.6z" /><path opacity=".2" fill="#FFFFFF" d="M5043.8 0H1507c-91.9 0-167.1 74.7-167.1 165.9v37.2c0-91.2 75.2-165.9 167.1-165.9h3536.8c91.9 0 167.1 74.7 167.1 165.9v-37.2C5210.8 74.7 5135.7 0 5043.8 0z" /><path fill="#EA4335" d="M2198.2 3529.1c-23.9 89.1 23.8 180 106 202l3275.8 881c82.2 22 169-32.9 192.8-122l771.7-2880c23.9-89.1-23.8-180-106-202l-3275.8-881c-82.2-22-169 32.9-192.8 122l-771.7 2880z" /><polygon opacity=".2" fill="#3E2723" points="5806.4,2638.1 5978.7,3684.8 5806.4,4328.1" /><polygon opacity=".2" fill="#3E2723" points="3900.8,764.1 4055.2,805.6 4151,1451.6" /><path opacity=".2" fill="#FFFFFF" d="M6438.6 1408.1l-3275.8-881c-82.2-22-169 32.9-192.8 122l-771.7 2880c-1.3 4.8-1.6 9.7-2.5 14.5l765.9-2858.2c23.9-89.1 110.7-144 192.8-122l3275.8 881c77.7 20.8 123.8 103.3 108.5 187.6l5.9-21.9c23.8-89.1-23.9-180-106.1-202z" /><path fill="#FFC107" d="M4778.1 3174.4c31.5 86.7-8.1 181.4-88 210.5L1233.4 4643c-80 29.1-171.2-18-202.7-104.7L10.9 1736.5c-31.5-86.7 8.1-181.4 88-210.5L3555.6 267.9c80-29.1 171.2 18 202.7 104.7l1019.8 2801.8z" /><path opacity=".2" fill="#FFFFFF" d="M24 1771.8c-31.5-86.7 8.1-181.4 88-210.5L3568.7 303.1c79.1-28.8 169 17.1 201.5 102l-11.9-32.6c-31.6-86.7-122.8-133.8-202.7-104.7L98.9 1526c-80 29.1-119.6 123.8-88 210.5l1019.8 2801.8c.3.9.9 1.7 1.3 2.7L24 1771.8z" /><path fill="#4285F4" d="M5806.4 5192.2c0 92.1-75.4 167.5-167.5 167.5h-4727c-92.1 0-167.5-75.4-167.5-167.5V1619.1c0-92.1 75.4-167.5 167.5-167.5h4727c92.1 0 167.5 75.4 167.5 167.5v3573.1z" /><path fill="#FFFFFF" d="M4903.8 2866H3489.4v-372.2h1414.4c41.1 0 74.4 33.3 74.4 74.4v223.3c0 41.1-33.3 74.5-74.4 74.5zM4903.8 4280.3H3489.4v-372.2h1414.4c41.1 0 74.4 33.3 74.4 74.4v223.3c0 41.2-33.3 74.5-74.4 74.5zM5127.1 3573.1H3489.4v-372.2h1637.7c41.1 0 74.4 33.3 74.4 74.4v223.3c0 41.2-33.3 74.5-74.4 74.5z" /><path opacity=".2" fill="#1A237E" d="M5638.9 5322.5h-4727c-92.1 0-167.5-75.4-167.5-167.5v37.2c0 92.1 75.4 167.5 167.5 167.5h4727c92.1 0 167.5-75.4 167.5-167.5V5155c0 92.1-75.4 167.5-167.5 167.5z" /><path opacity=".2" fill="#FFFFFF" d="M911.9 1488.8h4727c92.1 0 167.5 75.4 167.5 167.5v-37.2c0-92.1-75.4-167.5-167.5-167.5h-4727c-92.1 0-167.5 75.4-167.5 167.5v37.2c0-92.1 75.4-167.5 167.5-167.5z" /><path fill="#FFFFFF" d="M2223.9 3238.2v335.7h481.7c-39.8 204.5-219.6 352.8-481.7 352.8-292.4 0-529.5-247.3-529.5-539.7s237.1-539.7 529.5-539.7c131.7 0 249.6 45.3 342.7 134v.2l254.9-254.9c-154.8-144.3-356.7-232.8-597.7-232.8-493.3 0-893.3 399.9-893.3 893.3s399.9 893.3 893.3 893.3c515.9 0 855.3-362.7 855.3-873 0-58.5-5.4-114.9-14.1-169.2h-841.1z" /><g opacity=".2" fill="#1A237E"><path d="M2233.2 3573.9v37.2h472.7c3.5-12.2 6.5-24.6 9-37.2h-481.7z" /><path d="M2233.2 4280.3c-487.1 0-882.9-389.9-892.8-874.7-.1 6.2-.5 12.4-.5 18.6 0 493.4 399.9 893.3 893.3 893.3 515.9 0 855.3-362.7 855.3-873 0-4.1-.5-7.9-.5-12-11.1 497-347.4 847.8-854.8 847.8zM2575.9 2981.3c-93.1-88.6-211.1-134-342.7-134-292.4 0-529.5 247.3-529.5 539.7 0 6.3.7 12.4.9 18.6 9.9-284.2 242.4-521.1 528.6-521.1 131.7 0 249.6 45.3 342.7 134v.2l273.5-273.5c-6.4-6-13.5-11.3-20.1-17.1L2576 2981.5l-.1-.2z" /></g><path opacity=".2" fill="#1A237E" d="M4978.2 2828.7v-37.2c0 41.1-33.3 74.4-74.4 74.4H3489.4v37.2h1414.4c41.1.1 74.4-33.2 74.4-74.4zM4903.8 4280.3H3489.4v37.2h1414.4c41.1 0 74.4-33.3 74.4-74.4v-37.2c0 41.1-33.3 74.4-74.4 74.4zM5127.1 3573.1H3489.4v37.2h1637.7c41.1 0 74.4-33.3 74.4-74.4v-37.2c0 41.1-33.3 74.4-74.4 74.4z" /><radialGradient id="a" cx="1476.404" cy="434.236" r="6370.563" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff" stop-opacity=".1" /><stop offset="1" stop-color="#fff" stop-opacity="0" /></radialGradient><path fill="url(#a)" d="M6438.6 1408.1l-1227.7-330.2v-912c0-91.2-75.2-165.9-167.1-165.9H1507c-91.9 0-167.1 74.7-167.1 165.9v908.4L98.9 1526c-80 29.1-119.6 123.8-88 210.5l733.5 2015.4v1440.3c0 92.1 75.4 167.5 167.5 167.5h4727c92.1 0 167.5-75.4 167.5-167.5v-826.9l738.3-2755.2c23.8-89.1-23.9-180-106.1-202z" /></svg>
                    <span>Google News</span>
                </a>

                <?php if (!isset($id_categorie)) { ?>
                <a class="non-disponible">
                    <?php } else { ?>
                <a href="ajout-content?type=bing-news&<?= $parametre_balise ?>">
                    <?php } ?>
                    <svg height="24" viewBox="213 138.2 598 747.6" width="24" xmlns="http://www.w3.org/2000/svg" style="background-color: #008373"><path d="m435 332 76.2 165.1 112.4 50.7-405.7 213.4 166.3-148v-422.5l-171.2-52.5v628.4l170.2 119.2 427.8-255v-183.7z" fill="white"/></svg>
                    <span>Bing News</span>
                </a>

            </div>

            <h4>Dossier</h4>
            <div class="type">
                <a href="ajout-content?type=categorie&<?= $parametre_balise ?>">
                    <svg id="dossier-icon" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="white" fill-rule="evenodd" clip-rule="evenodd" d="M1 6.16167C0.999984 5.63454 0.999969 5.17975 1.03057 4.80519C1.06287 4.40984 1.13419 4.01662 1.32698 3.63824C1.6146 3.07376 2.07354 2.61482 2.63803 2.3272C3.01641 2.1344 3.40963 2.06309 3.80497 2.03078C4.17955 2.00018 4.63431 2.0002 5.16145 2.00021L9.14666 2.00011C9.74022 1.99932 10.2622 1.99863 10.7421 2.16418C11.1625 2.30918 11.5454 2.54581 11.8631 2.85696C12.2258 3.21221 12.4586 3.67939 12.7234 4.21064L13.6179 6H17.2413C18.0463 5.99999 18.7106 5.99998 19.2518 6.04419C19.8139 6.09012 20.3306 6.18868 20.816 6.43598C21.5686 6.81947 22.1805 7.43139 22.564 8.18404C22.8113 8.66937 22.9099 9.18608 22.9558 9.74817C23 10.2894 23 10.9537 23 11.7587V16.2413C23 17.0463 23 17.7106 22.9558 18.2518C22.9099 18.8139 22.8113 19.3306 22.564 19.816C22.1805 20.5686 21.5686 21.1805 20.816 21.564C20.3306 21.8113 19.8139 21.9099 19.2518 21.9558C18.7106 22 18.0463 22 17.2413 22H6.75873C5.95376 22 5.28937 22 4.74818 21.9558C4.18608 21.9099 3.66938 21.8113 3.18404 21.564C2.43139 21.1805 1.81947 20.5686 1.43598 19.816C1.18868 19.3306 1.09012 18.8139 1.0442 18.2518C0.999978 17.7106 0.999988 17.0463 1 16.2413V6.16167ZM9.02229 4.00022C9.81271 4.00022 9.96938 4.01326 10.09 4.05487C10.2301 4.1032 10.3578 4.18208 10.4637 4.2858C10.5548 4.37508 10.6366 4.50938 10.99 5.21635L11.3819 6L3.00007 6C3.00052 5.53501 3.00358 5.21716 3.02393 4.96805C3.04613 4.69639 3.0838 4.59567 3.109 4.54622C3.20487 4.35806 3.35785 4.20508 3.54601 4.10921C3.59546 4.08402 3.69618 4.04634 3.96784 4.02414C4.25118 4.00099 4.62345 4.00022 5.2 4.00022H9.02229Z" fill="#4893CD"></path>
                    </svg>
                    <span>Catégorie</span>
                </a>

            </div>

        </div>

    </div>
</body>

</html>