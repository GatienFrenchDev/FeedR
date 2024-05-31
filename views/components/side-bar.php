<?php

/**
 * @param onglet_actif - définit le n-ème onglet comme actif (commence à n=1). 0 si aucun onglet d'actif.
 */
function createSideBar(int $onglet_actif): void
{
?>
    <div class="side-bar" style="width: 96px;">

        <a href="/" class="onglet <?= $onglet_actif == 1 ? "actif" : "" ?>">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="20" height="20" viewBox="0 0 24 24" fill="#000" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4909 1.31589C11.8246 1.22804 12.1754 1.22804 12.5091 1.31589C12.8964 1.41782 13.2249 1.66653 13.487 1.8649L13.56 1.92L14.1668 2.37507C14.2432 2.43182 14.3206 2.49004 14.3993 2.54927L14.52 2.64L22.6 8.7C23.0418 9.03137 23.1314 9.65817 22.8 10.1C22.4686 10.5418 21.8418 10.6314 21.4 10.3L21 10V17.8386C21 18.3657 21 18.8205 20.9694 19.195C20.9371 19.5904 20.8658 19.9836 20.673 20.362C20.3854 20.9265 19.9265 21.3854 19.362 21.673C18.9836 21.8658 18.5904 21.9371 18.195 21.9694C17.8205 22 17.3657 22 16.8386 22H7.16144C6.6343 22 6.17954 22 5.80497 21.9694C5.40963 21.9371 5.01641 21.8658 4.63803 21.673C4.07354 21.3854 3.6146 20.9265 3.32698 20.362C3.13419 19.9836 3.06287 19.5904 3.03057 19.195C2.99997 18.8205 2.99998 18.3657 3 17.8385L3 10L2.6 10.3C2.15817 10.6314 1.53137 10.5418 1.2 10.1C0.868627 9.65817 0.95817 9.03137 1.4 8.7L9.48 2.64L9.60068 2.5493C9.67938 2.49008 9.75675 2.43187 9.83316 2.37513L10.44 1.92L10.513 1.8649C10.7751 1.66653 11.1036 1.41782 11.4909 1.31589ZM9 13.6V20H15V13.6C15 13.0399 15 12.7599 14.891 12.546C14.7951 12.3578 14.6422 12.2049 14.454 12.109C14.2401 12 13.9601 12 13.4 12H10.6C10.0399 12 9.75992 12 9.54601 12.109C9.35785 12.2049 9.20487 12.3578 9.10899 12.546C9 12.7599 9 13.0399 9 13.6Z" fill="#E9E8F9"></path>
            </svg>
            <p>Accueil</p>
        </a>



        <a href="notifications" class="onglet <?= $onglet_actif == 2 ? "actif" : "" ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m5.705 3.71-1.41-1.42C1 5.563 1 7.935 1 11h1l1-.063C3 8.009 3 6.396 5.705 3.71zm13.999-1.42-1.408 1.42C21 6.396 21 8.009 21 11l2-.063c0-3.002 0-5.374-3.296-8.647zM12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm7-7.414V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.184 4.073 5 6.783 5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.996.996 0 0 0-.293-.707L19 14.586z" />
            </svg>
            <p>Notifications</p>
        </a>

        <a href="recherche" class="onglet <?= $onglet_actif == 3 ? "actif" : "" ?>">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 122.879 119.799" xml:space="preserve">
                <path d="M49.988,0h0.016v0.007C63.803,0.011,76.298,5.608,85.34,14.652c9.027,9.031,14.619,21.515,14.628,35.303h0.007v0.033v0.04 h-0.007c-0.005,5.557-0.917,10.905-2.594,15.892c-0.281,0.837-0.575,1.641-0.877,2.409v0.007c-1.446,3.66-3.315,7.12-5.547,10.307 l29.082,26.139l0.018,0.016l0.157,0.146l0.011,0.011c1.642,1.563,2.536,3.656,2.649,5.78c0.11,2.1-0.543,4.248-1.979,5.971 l-0.011,0.016l-0.175,0.203l-0.035,0.035l-0.146,0.16l-0.016,0.021c-1.565,1.642-3.654,2.534-5.78,2.646 c-2.097,0.111-4.247-0.54-5.971-1.978l-0.015-0.011l-0.204-0.175l-0.029-0.024L78.761,90.865c-0.88,0.62-1.778,1.209-2.687,1.765 c-1.233,0.755-2.51,1.466-3.813,2.115c-6.699,3.342-14.269,5.222-22.272,5.222v0.007h-0.016v-0.007 c-13.799-0.004-26.296-5.601-35.338-14.645C5.605,76.291,0.016,63.805,0.007,50.021H0v-0.033v-0.016h0.007 c0.004-13.799,5.601-26.296,14.645-35.338C23.683,5.608,36.167,0.016,49.955,0.007V0H49.988L49.988,0z M50.004,11.21v0.007h-0.016 h-0.033V11.21c-10.686,0.007-20.372,4.35-27.384,11.359C15.56,29.578,11.213,39.274,11.21,49.973h0.007v0.016v0.033H11.21 c0.007,10.686,4.347,20.367,11.359,27.381c7.009,7.012,16.705,11.359,27.403,11.361v-0.007h0.016h0.033v0.007 c10.686-0.007,20.368-4.348,27.382-11.359c7.011-7.009,11.358-16.702,11.36-27.4h-0.006v-0.016v-0.033h0.006 c-0.006-10.686-4.35-20.372-11.358-27.384C70.396,15.56,60.703,11.213,50.004,11.21L50.004,11.21z" />
            </svg>
            <p>Recherche</p>
        </a>

        <a href="collections" class="onglet <?= $onglet_actif == 4 ? "actif" : "" ?>">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1 5C1 3.34315 2.34315 2 4 2H20C21.6569 2 23 3.34315 23 5C23 6.65685 21.6569 8 20 8H4C2.34315 8 1 6.65685 1 5Z" fill="#A3A3A3"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 10C3.44772 10 3 10.4477 3 11V16.2413C2.99999 17.0463 2.99998 17.7106 3.04419 18.2518C3.09012 18.8139 3.18868 19.3306 3.43597 19.816C3.81947 20.5686 4.43139 21.1805 5.18404 21.564C5.66937 21.8113 6.18608 21.9099 6.74817 21.9558C7.28936 22 7.95372 22 8.75868 22H15.2413C16.0463 22 16.7106 22 17.2518 21.9558C17.8139 21.9099 18.3306 21.8113 18.816 21.564C19.5686 21.1805 20.1805 20.5686 20.564 19.816C20.8113 19.3306 20.9099 18.8139 20.9558 18.2518C21 17.7106 21 17.0463 21 16.2413V11C21 10.4477 20.5523 10 20 10H4ZM10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15H14C14.5523 15 15 14.5523 15 14C15 13.4477 14.5523 13 14 13H10Z" fill="#A3A3A3"></path>
            </svg>
            <p>Collections</p>
        </a>

        <!-- <a href="" class="onglet">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0316 14.8768C18.1693 14.3419 18.7144 14.0199 19.2493 14.1576C21.4056 14.7126 23 16.6688 23 19V21C23 21.5523 22.5523 22 22 22C21.4478 22 21 21.5523 21 21V19C21 17.6035 20.0449 16.4275 18.7508 16.0945C18.2159 15.9568 17.8939 15.4116 18.0316 14.8768Z" fill="#A3A3A3"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5731 2.91554C14.7803 2.40361 15.3633 2.1566 15.8753 2.36382C17.7058 3.10481 19 4.90006 19 7C19 9.09994 17.7058 10.8952 15.8753 11.6362C15.3633 11.8434 14.7803 11.5964 14.5731 11.0845C14.3659 10.5725 14.6129 9.98953 15.1248 9.7823C16.2261 9.33652 17 8.25744 17 7C17 5.74256 16.2261 4.66348 15.1248 4.2177C14.6129 4.01047 14.3659 3.42748 14.5731 2.91554Z" fill="#A3A3A3"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.17898 14C8.72635 14.0005 10.2737 14.0005 11.8211 14C12.9117 13.9996 13.6559 13.9994 14.2941 14.1704C16.0196 14.6327 17.3673 15.9804 17.8297 17.7059C18.0599 18.5652 17.9933 19.4836 18.0002 20.3641C18.0011 20.471 18.0028 20.6872 17.9489 20.8882C17.8102 21.4059 17.4059 21.8102 16.8883 21.9489C16.6873 22.0028 16.471 22.001 16.3641 22.0002C11.7891 21.9637 7.21096 21.9637 2.63595 22.0002C2.52904 22.001 2.31282 22.0028 2.11181 21.9489C1.59417 21.8102 1.18985 21.4059 1.05115 20.8882C0.997286 20.6872 0.99901 20.471 0.999862 20.3641C1.00686 19.4858 0.940521 18.5639 1.17041 17.7059C1.63274 15.9804 2.98048 14.6327 4.70594 14.1704C5.34416 13.9994 6.08836 13.9996 7.17898 14Z" fill="#A3A3A3"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.50004 7C4.50004 4.23858 6.73861 2 9.50004 2C12.2615 2 14.5 4.23858 14.5 7C14.5 9.76142 12.2615 12 9.50004 12C6.73861 12 4.50004 9.76142 4.50004 7Z" fill="#A3A3A3"></path>
            </svg>
            <p>Équipe</p>
        </a> -->


        <div class="ajout-flux">
            <a class="ajout-flux-rss">
                <span class="plus">
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon white large" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5V19M5 12H19" stroke="#E9E8F9" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round" fill="#A3A3A3"></path>
                    </svg>
                </span>
                <p>Ajouter un flux</p>
            </a>
        </div>

        <div style="margin-top: auto;"></div>

        <!-- <div class="onglet-bottom">
            <a href="">
                <span>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.3951 19.3711L9.97955 20.6856C10.1533 21.0768 10.4368 21.4093 10.7958 21.6426C11.1547 21.8759 11.5737 22.0001 12.0018 22C12.4299 22.0001 12.8488 21.8759 13.2078 21.6426C13.5667 21.4093 13.8503 21.0768 14.024 20.6856L14.6084 19.3711C14.8165 18.9047 15.1664 18.5159 15.6084 18.26C16.0532 18.0034 16.5678 17.8941 17.0784 17.9478L18.5084 18.1C18.9341 18.145 19.3637 18.0656 19.7451 17.8713C20.1265 17.6771 20.4434 17.3763 20.6573 17.0056C20.8715 16.635 20.9735 16.2103 20.9511 15.7829C20.9286 15.3555 20.7825 14.9438 20.5307 14.5978L19.684 13.4344C19.3825 13.0171 19.2214 12.5148 19.224 12C19.2239 11.4866 19.3865 10.9864 19.6884 10.5711L20.5351 9.40778C20.787 9.06175 20.933 8.65007 20.9555 8.22267C20.978 7.79528 20.8759 7.37054 20.6618 7C20.4479 6.62923 20.131 6.32849 19.7496 6.13423C19.3681 5.93997 18.9386 5.86053 18.5129 5.90556L17.0829 6.05778C16.5722 6.11141 16.0577 6.00212 15.6129 5.74556C15.17 5.48825 14.82 5.09736 14.6129 4.62889L14.024 3.31444C13.8503 2.92317 13.5667 2.59072 13.2078 2.3574C12.8488 2.12408 12.4299 1.99993 12.0018 2C11.5737 1.99993 11.1547 2.12408 10.7958 2.3574C10.4368 2.59072 10.1533 2.92317 9.97955 3.31444L9.3951 4.62889C9.18803 5.09736 8.83798 5.48825 8.3951 5.74556C7.95032 6.00212 7.43577 6.11141 6.9251 6.05778L5.49066 5.90556C5.06499 5.86053 4.6354 5.93997 4.25397 6.13423C3.87255 6.32849 3.55567 6.62923 3.34177 7C3.12759 7.37054 3.02555 7.79528 3.04804 8.22267C3.07052 8.65007 3.21656 9.06175 3.46844 9.40778L4.3151 10.5711C4.61704 10.9864 4.77964 11.4866 4.77955 12C4.77964 12.5134 4.61704 13.0137 4.3151 13.4289L3.46844 14.5922C3.21656 14.9382 3.07052 15.3499 3.04804 15.7773C3.02555 16.2047 3.12759 16.6295 3.34177 17C3.55589 17.3706 3.8728 17.6712 4.25417 17.8654C4.63554 18.0596 5.06502 18.1392 5.49066 18.0944L6.92066 17.9422C7.43133 17.8886 7.94587 17.9979 8.39066 18.2544C8.83519 18.511 9.18687 18.902 9.3951 19.3711Z" stroke="#5B4ECF" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        </path>
                        <path d="M12 15C13.6568 15 15 13.6569 15 12C15 10.3431 13.6568 9 12 9C10.3431 9 8.99998 10.3431 8.99998 12C8.99998 13.6569 10.3431 15 12 15Z" stroke="#5B4ECF" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        </path>
                    </svg>
                </span>
                <p>Paramètres</p>
            </a>
        </div> -->

        <div class="onglet-bottom">
            <a href="compte">
                <span>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.3163 19.4384C5.92462 18.0052 7.34492 17 9 17H15C16.6551 17 18.0754 18.0052 18.6837 19.4384M16 9.5C16 11.7091 14.2091 13.5 12 13.5C9.79086 13.5 8 11.7091 8 9.5C8 7.29086 9.79086 5.5 12 5.5C14.2091 5.5 16 7.29086 16 9.5ZM22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#5B4ECF" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        </path>
                    </svg>
                </span>
                <p>Compte</p>
            </a>
        </div>

        <!-- <div class="onglet-bottom">
            <a href="">
                <span>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.09 9C9.3251 8.33167 9.78915 7.76811 10.4 7.40913C11.0108 7.05016 11.7289 6.91894 12.4272 7.03871C13.1255 7.15849 13.7588 7.52152 14.2151 8.06353C14.6713 8.60553 14.9211 9.29152 14.92 10C14.92 12 11.92 13 11.92 13M12 17H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#5B4ECF" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        </path>
                    </svg>
                </span>
                <p>Aide</p>
            </a>
        </div> -->

        <div class="onglet-bottom">
            <a href="logout">
                <span>
                    <svg xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18L9 12L15 6" stroke="#5B4ECF" stroke-width="2px" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
                    </svg>
                </span>
                <p>Déconnexion</p>
            </a>
        </div>

    </div>
<?php
}
?>