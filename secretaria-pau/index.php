<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="font-family: Arial,serif">
<header class="bg-primary text-white text-center py-5">
    <h1 class="display-4">Secretaria Pau</h1>
    <p class="lead">El teu lloc per a l'aprenentatge i el creixement!</p>
</header>

<div class="container mt-5 text-center">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center text-decoration-underline mb-4">Sobre Nosaltres</h2>
            <p>Al Pau, ens comprometem a proporcionar una educació de alta qualitat per als nostres estudiants.
                Oferim un ambient d'aprenentatge inclusiu i divers que fomenta l'excel·lència acadèmica i personal.</p>
        </div>
        <div class="col-md-6">
            <h2 class="text-center text-decoration-underline mb-4">Els Nostres Cursos</h2>
            <p>Oferim una àmplia gamma de cursos dissenyats per satisfer les necessitats i interessos dels nostres estudiants.
                Des de les arts fins a les ciències, la nostra escola té alguna cosa per a tothom.</p>
        </div>
    </div>
</div>

<div class="container mt-5 text-center">
        <h2 class="text-decoration-underline text-center">
            ALUMNES MATRICULATS
        </h2>
            <?php
            require("funcions.php");
            $alumnes = alumnesMatriculats();
            if(count($alumnes)> 0) {
                echo '<ul class="list-group mx-auto" style="max-width: 400px;">';
                foreach ($alumnes as $alumne){
                    echo '<li class="list-group-item d-flex justify-content-between align-items-center">'.stringAlumne($alumne).'</li>';
                }
                echo '</ul>';
            }else{
                echo "<p class='mx-auto'>cap alumne matriculat</p>";
            }
            ?>
</div>


<footer class="bg-dark text-white text-center py-3 mt-5 position-absolute bottom-0" style="width: 100vw">
    <p>Drets d'autor &copy; 2023 Gori Franco</p>
</footer>
</body>
</html>