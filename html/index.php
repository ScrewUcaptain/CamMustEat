<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/capstyle.css">

    <title>Caméléon Must Eat.</title>
</head>

<body onload="init()">
    <div id="contenant"></div>
    <img id="personnage" src="img/cameleonModifier.png">
    <img id="mouche" src="img/mouche.png">
    <!-- <div id="control">
        <button onclick="droite();" id="droite"> Droite</button>
        <button onclick="gauche();" id="gauche"> Gauche</button>
        <button onclick="haut();" id="avancer"> Haut</button>
        <button onclick="bas();" id="reculer">Bas</button>
    </div> -->
    <!-- <button id="submit">Soumettre</button> -->
    <!-- <section id="medailles">
        <div>Médailles d'Or =<span id="or"></span></div>
        <div>Médailles d'Argent =<span id="argent"></span> </div>
        <div>Médailles de Bronze =<span id="bronze"></span></div>
    </section> -->
    <section class="help_section">
        <h3 class="help_title" style=" text-align: center;">Caméléon Must Eat</h3>
        <div class="help_text">
            <p>
                Vous devez entrez une liste de commande pour faire déplacer le caméléon jusqu'a la mouche. <br>
                Pour ajouter une instruction selectionnez-la et déplacez-la dans le cadre vert. <br>
                Appuyez sur valide quand vous pensez avoir fini et regarder le Caméléon se déplacer.<br>
                La case sur laquel est le Caméléon doit être de la même couleur que la suivante sinon vous échouerez. <br>
                Les cases directements coloriées au début du jeu ne change jamais de couleur. <br>
                Si le Caméléon touche un bord ou essaye de traverser une case d'une couleur différente de la sienne, 
                il décède.


            </p>

        </div>
    </section>
    <div id="commandes">
        <!-- <div id="moveButton"></div> -->
        <div class="dragAndDrop">
            <div id="drag1" class="dragBorderDefault" class="selectOption" ondragstart="dragStart(event)" ondragleave="dragLeave(event)">
                <div id="item1"></div>
                <div id="item2"></div>
            </div>
            <div id="drop1" class="dragBorderDefault" class="selectOption" ondragstart="dragStart(event)" ondragover="dragover(event)" ondrop="dragDrop(event)" ondragleave="dragLeave(event)">

            </div>
            <button class="valide" onclick="checkDrop()">VALIDER</button>
        </div>
    </div>
    <!-- <ul id="mapGrid"></ul> -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/script.php"></script>
    <script src="./js/milwork.js"></script>


</body>

</html>