<!-- header area start -->
<header class="header header__sticky v__2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="index.php" class="header__logo--link">
                            <img src="assets/images/logo/group-21.png" alt="<?php echo htmlspecialchars(defined('SMS_SITE_SHORT') ? SMS_SITE_SHORT : 'Sant Manjit Singh College'); ?>" width="380" height="90" loading="eager" decoding="async">
                        </a>
                    </div>
                    <div class="header__menu">
                        <?php include_once 'partials/elements/nav__two.php'; ?>
                    </div>
                    <div class="header__right">
                        <div class="header__right--item">
                            <div id="langSwitcher" class="lang__trigger">
                                <span class="selected__lang">English</span>
                                <i class="fa-light fa-globe"></i>
                                <div class="translate__lang">
                                    <ul>
                                        <li><a href="#" class="active">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Romanian</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="search-btn" class="search__trigger">
                                <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                            </div>
                            <div id="menu-btn" class="menu__trigger">
                                <img src="assets/images/icon/menu__bar.svg" alt="bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->