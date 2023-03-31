<footer class="bg-light pattern1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center ">
                <img src="images/logo/pawfect-adoption.png"  class="logo-footer img-fluid pb-4" alt=""/>
                <!-- Start Social Links -->
                <ul class="social-list text-center list-inline">
                    <li class="list-inline-item"><a title="Github" href="<?php echo GITHUB_URL?>" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a title="Twitter" href="<?php echo TWITTER_URL?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a  title="Instagram" href="<?php echo INSTAGRAM_URL?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <!-- /End Social Links -->
            </div>
            <!--/ col-lg -->
            <div class="col-lg-3">
                <h5>About us</h5>
                <!--divider -->
                <hr class="small-divider left"/>
                <p class="mt-3">Looking for a new four-legged companion? Look no further than Pawfect Adoption, your local pet adoption clinic.</p>
            </div>
            <!--/ col-lg -->
            <div class="col-lg-3">
                <h5>Contact Us</h5>
                <!--divider -->
                <hr class="small-divider left"/>
                <ul class="list-unstyled mt-3">
                    <li class="mb-1"><i class="fas fa-phone margin-icon "></i><?php echo PHONE?></li>
                    <li class="mb-1"><i class="fas fa-envelope margin-icon"></i><a href="mailto:<?php echo EMAIL_ADDRESS?>"><?php echo EMAIL_ADDRESS?></a></li>
                    <li><i class="fas fa-map-marker margin-icon"></i><?php echo ADDRESS?></li>
                </ul>
                <!--/ul -->
            </div>
            <!--/ col-lg -->
            <div class="col-lg-3">
                <h5>Working Hours</h5>
                <!--divider -->
                <hr class="small-divider left"/>
                <ul class="list-unstyled mt-3">
                    <li class="mb-1">Open from 9am - 6pm</li>
                    <li class="mb-1">Holidays - Closed</li>
                    <li>Weekends - Closed</li>
                </ul>
                <!--/ul -->
            </div>
            <!--/ col-lg -->
        </div>
        <!--/ row-->
        <hr/>
        <div class="row">
            <div class="credits col-sm-12">
                <p>Copyright <?php $year = date("Y"); echo $year?> / Designed by <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a></p>
            </div>
        </div>
        <!--/col-lg-12-->
    </div>
    <!--/ container -->
    <!-- Go To Top Link -->
    <div class="page-scroll hidden-sm hidden-xs">
        <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--/page-scroll-->
</footer>
<!--/ footer-->
<!-- Bootstrap core & Jquery -->
<script src="<?php echo URLROOT; ?>/vendor2/jquery/jquery.min.js"></script>
<script src="<?php echo URLROOT; ?>/vendor2/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom Js -->
<script src="<?php echo URLROOT; ?>/js/custom.js"></script>
<script src="<?php echo URLROOT; ?>/js/plugins.js"></script>
<!-- Prefix free -->
<script src="<?php echo URLROOT; ?>/js/prefixfree.min.js"></script>
</body>
</html>