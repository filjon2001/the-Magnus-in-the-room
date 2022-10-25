<?php

// Här definieras kattens namn, $catName, som variabel, som sedan används i funktioner nedan. Namnet kommer från parametern "name" som ligger i de tre klickbara länkarna på "index.php". Parametern fångas upp av super global-variabeln $_GET.

$catName = $_GET['name'];

require('./header.php');

require('./functions.php');

require('./arrays.php');

?>

<article>
    <h2><?= $catName ?></h2>
    <p>
        <?php

        //Funktionen aboutCat ropas in.

        aboutCat($catName);

        ?>

    </p>

</article>

<section class="picture-container">

    <?php

    //Foreach-loop för att ropa in och skriva ut bilderna. Funktionen catPhotos anropas och loopen skickar ut fyra stycken HTML-div:ar med slumpade bilder.

    foreach (catPhotos($catName) as $picture) {

    ?>
        <div class="picture-box">
            <img src="<?= $picture ?> " alt="Cat picture" />
        </div>
    <?php

    }

    ?>

</section>

<nav>
    <a href='./index.php'>Back</a>
</nav>

<?php

require('./footer.php');
