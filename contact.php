<?php include('header.php');?>
<section class="contact">
<h1 class="heading"> contact <span>me</span> </h1>
<div class="row">
    <div class="info-container">
        <h1>get in touch</h1>
        <p>Tell me If You have any Project :-)</p>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info">
                    <h3>Address :</h3>
                    <p>Baku, Azerbaijan</p>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <div class="info">
                    <h3>Email :</h3>
                    <a href="mailto:talehmeherremov@outlook.com">
                    <p>talehmeherremov@outlook.com</p>
                    </a>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-phone-alt"></i>
                <div class="info">
                    <h3>Number :</h3>
                    <a href="phone:+994505100171">
                    <p>+994 50 510 0171</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="share">
            <a href="https://faceboook.com/talemaharamov"  target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://instagram.com/talemaharamov" target="_blank" class="fab fa-instagram"></a>
            <a href="https://github.com/talemaharamov" target="_blank" class="fab fa-github"></a>
            <a href="https://www.linkedin.com/in/talemaharamov/" target="_blank" class="fab fa-linkedin"></a>
        </div>
    </div>
    <form action="vendor/phpmailer/index.php" method="POST">
        <div class="inputBox">
            <input name="name" type="text" placeholder="Your name">
            <input name="number" type="number" placeholder="Your number">
        </div>
            <input class="emailInput" name="email" type="email" placeholder="Your email">
        <textarea name="text" placeholder="Your message" id="" cols="30" rows="10"></textarea>
        <button type="submit" name="contact" class="btn"><i class="fas fa-paper-plane"></i> Send Message</button>
    </form>
</div>
</section>
</body>
</html>