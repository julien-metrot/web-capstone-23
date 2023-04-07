 <div class="navbar container-fluid">
        <div class="container ">
            <!-- logo -->
            <a class="nav-brand" href="<?php echo URLROOT; ?>">
                <img src="<?php echo URLROOT; ?>/public/images/logo/updated-logo2.png" alt="" class="img-fluid">
            </a>
            <!-- Navbartoggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
                  <i class="fas fa-bars"></i>
                  </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/animals/all">Adopt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/events/upcoming">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/members/info">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/donate/donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/adopt/applications">Apply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/contact/info">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contact-dropdown" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Users
                        </a>
                        <div class="dropdown-menu pattern2" aria-labelledby="contact-dropdown">
                            <a class="dropdown-item" href="<?php echo URLROOT; ?>/user/register">Register</a>
                            <a class="dropdown-item" href="<?php echo URLROOT; ?>/user/login">Login</a>
                        </div>
                    </li>
                </ul>
                    <!--/ul -->
            </div>
            <!--collapse -->
        </div>
        <!-- /container -->
    </div>
    <!-- /navbar -->
</nav>
