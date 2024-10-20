<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Computer Service</title>
</head>
<body style="background-color:rgb(24, 24, 24);">
<!--
    <header>
        <img align="left" src="logoo.jfif" alt="Logo" style="width:90px;height:60px;">
        <h1>Computer Service</h1>
    </header>
-->
<?php include "php/logo.php"; ?>

    <nav class="vertical-menu" id="verticalMenu">
        <a href="despre.php" class="active">Despre noi</a>
        <a href="Periferice.php">Periferice</a>
        <a href="Servicii.php">Servicii</a>
        <a href="Contact.php">Contact</a>
    </nav>

    <div id="contenitor">
        <span id="textIndex">
            <h2>Simplu și rapid</h2>
            <h3>Service laptop în 4 pași simpli:</h3>
        </span>

        <div class="container">
            <div class="col">
                <h4>Pasul 1</h4>
                <h5>Diagnosticare laptop</h5>
                <ul>
                    <li>Vi se emite o fișă de intrare în service cu toate datele laptopului;</li>
                    <li>Unul dintre tehnicienii noștri preia laptopul și face diagnosticarea acestuia;</li>
                    <li>În urma defectului constatat vi se transmite prețul reparației.</li>
                    <li>Diagnosticarea este gratuită.</li>
                </ul>
            </div>
            <div class="col">
                <h4>Pasul 2</h4>
                <h5>Reparație laptop</h5>
                <ul>
                    <li>Un tehnician va repara laptopul în cel mai scurt timp posibil și în ordinea intrării în service a laptopurilor;</li>
                    <li>Reparațiile minore se pot repara în aceeași zi lucrătoare, excepție făcând înlocuirea plăcii de bază sau reparația plăcii de bază;</li>
                    <li>Reparație completă;</li>
                    <li>Testare reparație – un tehnician se va asigura că toate componentele sunt conectate și funcționale;</li>
                    <li>Veți fi contactat(ă) pentru a ridica laptopul reparat.</li>
                </ul>
            </div>
            <div class="col">
                <h4>Pasul 3</h4>
                <h5>Garanție laptop</h5>
                <ul>
                    <li>Toate echipamentele sau laptopurile reparate la noi primesc garanție;</li>
                    <li>Garanție între 3-6 luni reparație placă de bază, înlocuire placă de bază sau pentru orice defect hardware reparat;</li>
                    <li>Garanție între 6-12 luni pentru orice înlocuire de componente laptop, display, hard disk laptop, carcasă, tastatură, încărcător etc.</li>
                </ul>
            </div>
            <div class="col">
                <h4>Pasul 4</h4>
                <h5>Ridicare laptop</h5>
                <ul>
                    <li>Laptopul se poate ridica din service doar pe baza fișei.</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <img src="contact.png" alt="Contact Image" style="width:900px;height:200px;">
    </footer>

    <div id="messageBox" class="hidden">
        <p id="messageText"></p>
    </div>

    <script src="index.js"></script>
</body>
</html>
