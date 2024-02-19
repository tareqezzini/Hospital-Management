<footer class="main-footer style-two">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--big column-->
                <div class="big-column col-lg-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="footer-title  clearfix">
                                    <h2>Departments</h2>
                                    <div class="separator"></div>
                                </div>
                                <ul class="footer-list">
                                    @foreach ($sections as $section)
                                        <li><a href="#">{{ $section->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <div class="footer-title  clearfix">
                                    <h2>Contact Us</h2>
                                    <div class="separator"></div>
                                </div>

                                <ul class="contact-list">
                                    <li><span class="icon flaticon-placeholder"></span>2130 Fulton Street San
                                        Diego <br> CA 94117-1080 USA</li>
                                    <li><span class="icon flaticon-call"></span>Mon to Fri : 08:30 - 18:00 <br>
                                        <a href="tel:+898-68679-575-09">+898 68679 575 09</a>
                                    </li>
                                    <li><span class="icon flaticon-message"></span>Do you have a Question? <a
                                            href="mailto:info@gmail.com">info@gmail.com</a></li>
                                </ul>

                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo-3.png" alt="" /></a>
                                </div>
                                <div class="text">Meditech is a library of health and medical templates with
                                    predefined web elements which helps you to build your medical templates best
                                    site Provide Comprehensive Quality Care About Medical Care Health
                                    Suspendisse metus turpis.</div>
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
        </div>
    </div>

</footer>
