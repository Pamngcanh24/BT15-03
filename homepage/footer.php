<?php
// footer.php
require __DIR__ . '/database/database.php';

?>
<footer class="footer">
    <div class="footer-container">
        <!-- Cột 1: Logo và mô tả -->
        <div class="footer-column">
        <img src="./image/LOGO.png" alt="EduPress">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <!-- Cột 2: GET HELP -->
        <div class="footer-column">
            <h3>GET HELP</h3>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Latest Articles</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>

        <!-- Cột 3: PROGRAMS -->
        <div class="footer-column">
            <h3>PROGRAMS</h3>
            <ul>
                <li><a href="#">Art & Design</a></li>
                <li><a href="#" class="active">Business</a></li>
                <li><a href="#">IT & Software</a></li>
                <li><a href="#">Languages</a></li>
                <li><a href="#">Programming</a></li>
            </ul>
        </div>

        <!-- Cột 4: CONTACT US -->
        <div class="footer-column">
            <h3>CONTACT US</h3>
            <p>Address: 2321 New Design St, Lorem Ipsum10, Hudson Yards, USA</p>
            <p>Tel: + (123) 2500-567898</p>
            <p>Mail: supportinfo@gmail.com</p>
            <div class="social-icons">
                <div class="social-icons">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
                           
            </div>
        </div>
    </div>
    <!-- Phần bản quyền -->
    <div class="footer-bottom">
        <p>Copyright © 2024 LearnPress LMS | Powered by ThinPress</p>
        <a href="#" title="scroll-top" class="scroll-top">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>
</footer>

