<?php


$parola=$_POST['parola'];
$paragrafo=$_POST['paragrafo'];

$nuovoParagrafo = str_replace($parola, '***', $paragrafo);

?>

<p>
    Paragrafo: <?php echo $paragrafo; ?>
</p>

<p>
    Lunghezza : <?php echo strlen($paragrafo); ?>
</p>

<p>
    Nuovo Paragrafo: <?php echo $nuovoParagrafo; ?>
</p>

<p>
    Lunghezza : <?php echo strlen($nuovoParagrafo); ?>
</p>