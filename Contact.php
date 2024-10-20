<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="contact.css">
    <script src="contact.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-XeWsd4oXztnWLWRl/3NtNOiM2ir7r2GtR9W2jxydutapjVBkSrF8zkhRkgHnU2t0" crossorigin="anonymous">

    <title>Contact</title>
</head>
<body>
   <!-- <header>
        <a href="index.html"><img align="left" src="logoo.jfif" alt="Logo" style="width:90px;height:60px;"></a>
    </header>
-->

<?php include "php/logo.php"; ?>

    <main>
        <section class="contact-info">
            <h1>Contact:</h1>
            <ul>
                <li><strong>Locatie:</strong> Tudor Vladimirescu</li>
                <li><strong>Adresa:</strong> <a href="https://www.google.com/maps/place/Iulius+Mall/@47.1551751,27.6054034,16z/data=!4m6!3m5!1s0x40cafb919cde6215:0x5472ea6b8cbcbd4b!8m2!3d47.1546829!4d27.6051747!16s%2Fm%2F03cb5ls?entry=ttu">Iulius Mall</a></li>
                <li><strong>Telefon:</strong> 0232 278 063</li>
                <li><strong>Telefon:</strong> 0751 208 258</li>
                <li><strong>Email:</strong> office@incarcari.ro</li>
            </ul>
            
            <h2>Ore de lucru:</h2>
            <ul>
                <li>Luni - Vinri: 08:00 – 17:00</li>
                <li>Sambata: 09:00 – 13:00</li>
                <li>Duminica: CLOSED</li>
            </ul>
        </section>
        
        <section class="contact-cards">
            <div class="card">
                <img src="contact1.jpg" alt="Matei" style="width:100%">
                <div class="card-content">
                    <h2>Matei</h2>
                    <p class="title">Technician</p>
                    <p>Cambridge University</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/"><img align="left" src="logo-fb.jpg" alt="Logo" style="width:40px;height:30px;"></a>
                        <a href="https://www.linkedin.com/"><img align="left" src="logo-lk.jpg" alt="Logo" style="width:30px;height:30px;"></a>
                        <a href="https://www.youtube.com/"><img align="left" src="logo-yt.jpg" alt="Logo" style="width:40px;height:30px;"></a>
                    </div>
                    
                    <button>Contact</button>
                </div>
            </div>

            <div class="card">
                <img src="contact2.jpg" alt="Liviu" style="width:100%">
                <div class="card-content">
                    <h2>Liviu</h2>
                    <p class="title">Sales Assistant</p>
                    <p>Harvard University</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/"><img align="left" src="logo-fb.jpg" alt="Logo" style="width:40px;height:30px;"></a>
                        <a href="https://www.linkedin.com/"><img align="left" src="logo-lk.jpg" alt="Logo" style="width:30px;height:30px;"></a>
                        <a href="https://www.youtube.com/"><img align="left" src="logo-yt.jpg" alt="Logo" style="width:40px;height:30px;"></a>
                    </div>
                    <button>Contact</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5426.095004800384!2d27.602485566658256!3d47.15692406725181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb919cde6215%3A0x5472ea6b8cbcbd4b!2sIulius%20Mall!5e0!3m2!1sro!2sro!4v1710332267099!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <img src="contact.png" alt="Contact Image" style="width:900px;height:200px;">
    </footer>

    
    <div id="myModal" class="modal">
    
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Contact Options:</p>
        <ul>
          <li>Phone: 0762332336</li>
          <li>Email: m_matei@gmail.com</li>
        </ul>
      </div>
    </div>


    

</body>
</html>
