<?php

// Här definieras kattens namn som variabel, som sedan används i funktion nedan.

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

    <div class="picture-box">
        <img src='<?= $catPictures[0][1]; ?>' alt="Cat picture" />
        <?php

        //Funktionen catPhotos ropas in.

        echo "<pre>";

        print_r(catPhotos($catName));

        ?>
        <div class="picture-box">
            <img src='<?= $picture ?>' alt="Cat picture" />
        </div>
    </div>
</article>
<nav>
    <a href='./index.php'>Back</a>
</nav>

<?php

require('./footer.php');


    /* <?php
$users = ['john', 'dave', 'tim'];

for($i = 0;$i < count($users);$i++)
	echo $users[$i]."\n";
?> */

    /*     $my_array = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "e" => "purple");

    shuffle($my_array);
    print_r($my_array); */
