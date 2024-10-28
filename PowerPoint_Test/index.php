<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name= viewport content= width=device-width initial-scale=1.0>
    <title> Mein Profil</title>
    <link rel="stylesheet" href="styles.css">
    <script src="js.js"></script>
</head>
<body>
    <script>
        var my_text ="Hello Js World";
        //var my_second_text ="it is my world";
        var my_text = my_text + " it is my world";
    
        var my_int = 300;
        my_int = my_int +100;
    
        //window.alert(my_text);
    
        my_int =my_int +" "+ my_text;
    
        window.alert(my_int);

    </script>
           
    <header>
        <h1>Willkommen auf meiner Profilseite</h1>
        <nav>
            <a href="#about">Über mich</a>
            <a href="#projects">Projekte</a>
            <a href="#contact">Kontakt</a>
        </nav>
    </header>
<!-- comment-->
    <section id="about">
        <h2>Über mich</menu></h2>
        <p>Ich bin ein Webentwickler und lerne HTML und CSS.</p>
    </section>

    <input id="my_input" types="text">

    <section id="projects">
        <h2>Projekte Header</h2>
        <div class="project">
            <h3>Projekt 1</h3>
            <p>Beschreibung des Projekts.</p>
        </div>
        <div class="project">
            <h3>Projekt 2</h3>
            <p>Beschreibung des Projekts.</p>
        </div>
    </section>

    <footer>
        <p>Kontakt: <a href="mailto:example@example.com">example@example.com</a></p>
    </footer>
</body>
</html>
