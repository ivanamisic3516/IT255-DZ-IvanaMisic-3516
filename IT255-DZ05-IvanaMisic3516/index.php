<?php
session_start();

    if(isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must log in first to view this page";
        header("location: log.php");
    }
    if (isset($GET['logout'])){

        session_destroy();
        unset($_SESSION['username']);
        header("location : log.php");
    }
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>MetHotels</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet">
    <script src="js.js"></script>
</head>

<body onload="timer()">
    <div id="container">
        <div class="top">
            <div id="slikaRight">
                <img src="img/met.jpg" />
            </div>
        </div>
    </div>
    <div id="mainMenu">
	<nav>
		<ul>
		<div class="menuItem">
            <li><a href="index.php">Pocetna</a></li>
        </div>
        <div class="menuItem">
            <li><a href="onama.html">O nama</a></li>
        </div>
        <div class="menuItem">
            <li><a href="rezervacija.html">Rezervacija</a></li>
        </div>
        <div class="menuItem">
            <li><a href="galerija.html">Galerija</a></li>
        </div>
        <div class="menuItem">
           <li><a href="kontakt.html">Kontakt</a></li>
        </div>
        <div class="menuItem">
                <li><a href="register.php">Register</a></li>
                </div>
		<div class="menuItem">
		<li><a href="log.php">Login</a></li>
		</div>
		</ul>
		</nav>
    </div>
    <div id="naslov">
        Uplovite u nestvaran svet!
    </div>
    <div id="container2">
        <p>
            Met Hotel Solun<br> U živom gradu Solunu,<br> 
			gde istorija i umetnost neprekidno informišu unapred razmišljaju o poslovnoj kulturi<br>
			MET HOTEL, nudi raznovrsnim korporativnim i zabavnim putnicima savršen i inspirativan metropolitansko iskustvo.
		  <br>U hotelu Hotel MET pronaći ćete sve usluge, 
		  <br>a posebno: Restoran, Room Service, Bar, Recepcija je otvorena 24 sata,<br> 
			Teniski teren, Sobe za nepušače, Poslovni centar, Perionica, 
		  <br>Posluženje doručka u sobi, i vrhunski spa centar i centar za podmlađivanje,
		  <br>koji su svi podržani izvanrednim uslugama i detaljnom pažnjom na detalje. 
		  <br>Za vreme vašeg boravka u The Met hotelu,
		  <br>možete koristiti naš besplatni prevoz autobusom sa i na Aristotel Central Square-a.
		</p>
    </div>
    
    <?php

        if(isset($_SESSION['success']));

    ?>
    <div>
        <h3>
    <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    ?>
        </h3>
    </div>

<?php endif ?>

<?php

        if(isset($_SESSION['username']));
    <h3>Welcome  <strong><?php echo ($_SESSION['username'])) ?> </strong></h3>

    <button <a href="index.php?logout='1'"></button>
?>
<?php endif ?>

</body>
<footer>
        <div class="posetiteNas">
            <p>
                Posetite nas i uverite se u kvalitet usluge!
            </p><br><br>
        </div>
</footer>
</html>