    <header id="header" class="navbar navbar-expand-lg navbar-light navbar-end">
        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">

                <a class="navbar-brand" href="./" aria-label="Koinwa">
                    <img class="navbar-brand-logo" src="assets/img/logo-dark.png" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'Home') {echo 'active';} ?>" href="./">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'About') {echo 'active';} ?>" href="about">About us</a>
                        </li>

                        <li class="hs-has-sub-menu nav-item">
                            <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Services</a>

                            <div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 12rem;">
                                <a class="dropdown-item" href="">International Payments</a>
                                <a class="dropdown-item" href="">Corporate Treasury</a>
                                <a class="dropdown-item" href="">Currency Swaps Currency</a>
                                <!-- <a class="dropdown-item" href="">OTC</a> -->
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == 'FAQ') {echo 'active';} ?>" href="faq">FAQ's</a>
                        </li>

                        <li class="nav-divider"></li>

                        <li class="nav-item">
                            <a class="js-animation-link btn btn-ghost-secondary btn-no-focus me-2 me-lg-0" href="https://wa.me/message/TPBP2S5TYMQ5G1" target="_blank">Trade with us</a>

                            <a class="js-animation-link d-lg-none btn btn-primary" href="contact">Contact us</a>
                        </li>

                        <li class="nav-item">
                            <a class="js-animation-link d-none d-lg-inline-block btn btn-primary" href="contact">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>