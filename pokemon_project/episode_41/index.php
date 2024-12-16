<?php
    include "header.php";
?>
    <div class="modal-container">
        <div class="modal-exemple">
            <h2>Modal Example</h2>
            <button id="myBtn" class="btnscript">Open Modal</button>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>
        </div>
    </div>

    <button class="btn">Cliquez ici</button>
    <button class="btn"><i class="fas fa-thumbs-up"></i> Like</button>

    <?php
    $text1  = "Inscription validée";
    $text2 = "Inscription non valide";
    
    echo "<h1 class=text1> $text1 </h1>";   
    echo "<p> $text2 </p>";

    echo '<h1>' .$text1. '</h1>';   
    echo '<p>' .$text2. '</p>';

    print "Bonjour";
    print ("bonjour");

    print ("<h1>");
    ?>

<form action="form.php" method="post" name="input">   
    <label type="text">Nom</label><br>
   <input type="text" name="name"><br>
   <label type="text">Email</label><br>
   <input type="text" name="email"><br>
    <input type="submit" value="Valider">
</form>

<?php
    include "footer.php";
?>
