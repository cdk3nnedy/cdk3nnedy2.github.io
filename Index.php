<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="portfolio.css"/>
 
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
 
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hallo, mijn naam is</div>
                <div class="text-2"> Ciaran Kennedy </div>
                <div class="text-3">en ik ben een <span class="typing"></span></div>
                <a href="#contact">Neem contact </a>
            </div>
        </div>
    </section>
 
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">about me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/1.jpg" alt="Ciaran Kennedy"> 
                </div>
                <div class="column right">
                    <div class="text">Ik ben Ciaran  en ik ben een <span class="typing-2"></span></div>
                    <p>Mijn Naam is Ciaran David Kenndy en studeer software development aan het Nova College in haarlem.<br>
                     <br>
                       Ik ben 18 Jaar oud en woon in zandvoort ik ben geboren in nederland maar ben van engelse nationaliteit. .Ik heb de opleiding Software development gekozen omdat dat mij erg interesant leek. 
                       Mijn hobbys zijn , chillen met vrienden en formule 1 kijken.
                       Ook werk ik op woensdag ,vrijdag en zaterdag bij de hema en op zondag bij Giomara Food en Drinks op de boulevard van zandvoort.<br>
                     


                    <a href="C:\xampp\htdocs\Portfolio\CV-Ciaran" download>Download CV</a>
                </div>
            </div>
        </div>
    </section>
 
    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">my services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Zoals u ziet heb ik deze website gemaakt en kan ook andere maken</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Photoshop</div>
                        <p>Ik kan met advertising helpen door websites en apps te bouwen.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Ik heb in mijn jaar meerdere applicaties (in C#) gemaakt en ben ook klaar om meerdere te maken.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
 
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">my skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>Ik ben pas in begin schooljaar 2020 begonnen met programeren en hoop er ook mee verder te gaan en veel te leren . Mijn skills bevatten meer webdesign en applicatie's bouwen.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <?php
                        $connection = mysqli_connect("localhost","root","","portfolio");
                        $select = "SELECT * FROM skills ORDER BY skill_value DESC";
                        $result = mysqli_query($connection,$select);
                        while($row = mysqli_fetch_array($result)){
                            $skill_name     = $row['skill_naam'];
                            $skill_value    = $row['skill_value'];

                        ?>

                        <div class="bars">
                            <div class="info">
                                <span><?php echo strtoupper($skill_name)?></span>
                                <span><?php echo $skill_value?></span>
                            </div>  
                            <div class="line <?php echo $skill_name ?>"></div>
                        </div>
                        <?php
                        }
                        ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Mijn Projecten</h2>
            <div class="serv-content">
                

                        <?php
                            $connection = mysqli_connect("localhost","root","","portfolio");
                            $select = "SELECT * FROM projects ORDER BY project_procent DESC";
                            $result = mysqli_query($connection,$select);
                            while($row = mysqli_fetch_array($result)){
                            $project_name       = $row['project_naam'];
                            $project_status     = $row['project_status'];
                            $project_procent    = $row['project_procent'];
                        ?>
                    <div class="card">
                        <div class="box">
                            <div class="text"><?php echo strtoupper($project_name)?></div>
                            <p>STATUS</p>
                            <p><?php echo $project_status?></p>
                            <P><?php echo $project_procent?></P>
                        </div>
                    </div>
                    <?php
                            }
                    ?>
            </div>
        </div>
    </section>

    <?php

    $Naam = "";
    $Email = "";
    $Telefoon = "";
    $Onderwerp = "";
    $Bericht = "";
    $Bedrijfsnaam = "";
    $Postcode = "";
    $Vestigingsplaats = "";
    $invoerfouten = array();

    if (isset($_POST['submit'])){
        $Naam		        = $_POST['name'];
        $Email 			    = $_POST['email'];
        $Telefoon		    = $_POST['telefoonnummer'];
        $Bedrijfsnaam	    = $_POST['bedrijfsnaam'];
        $Postcode		    = $_POST['postcode'];
        $Vestigingsplaats	= $_POST['vestigingsplaats'];
        $Onderwerp	        = $_POST['subject'];
        $Bericht		    = $_POST['message'];

        //connectie met database
        $connection = mysqli_connect("localhost","root","","portfolio");	

        // insert statement samenstellen
        $sql = "insert into contact(Naam,Email,Telefoonnummer,Onderwerp,Bericht,Bedrijfsnaam,Postcode,vestigingsplaats)
                        values('$Naam','$Email','$Telefoon','$Onderwerp','$Bericht','$Bedrijfsnaam','$Postcode','$Vestigingsplaats')";
        mysqli_query($connection, $sql);
        
    }
    ?>


    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Neem Contact!</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Contact</div>
                    <p>Neem contact met me op en ik probeer zo snel mogelijk te reageren</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Naam</div>
                                <div class="sub-title">Ciaran Kennedy </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adres</div>
                                <div class="sub-title">Haltestraat 96 , Zandvoort , Nederland </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">Ciarandavid2003@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="column right">
                    <div class="text">Message me</div>
                    
                    <form action="index.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="telefoonnummer" placeholder="telefoonnummer" required>
                            </div>
                            <div class="field name">
                                <input type="text" name="bedrijfsnaam" placeholder="bedrijfsnaam" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="postcode" placeholder="postcode" required>
                            </div>
                            <div class="field name">
                                <input type="text" name="vestigingsplaats" placeholder="vestigingsplaats" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="submit" >Send message</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
 
    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.codingnepalweb.com"></a>Ciaran Kennedy </a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
 
    <script src="portfolio.js"></script>
</body>
