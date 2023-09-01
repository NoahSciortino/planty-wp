<?php /* Template Name: commander-page */ ?>
<?php include "header.php";?>
<main class="page3">
    <h1 class="h1p3">Commander</h1>
    <hr class="line"></hr>
    <h2 class="textp2 h2p3">Votre commande</h2>
<div class=commandegout>
<div class="fraise">
    <p class="fraisetxt">Fraise<p>
</div>
<div class="pamplemousse">
    <p class="framboisetxt">pample<p>
    <p class="framboisetxt2">mousse<p> 
</div>
<div class="framboise">
    <p class="framboisetxt">fram<p>
    <p class="framboisetxt2">boise<p>
</div>
<div class="citron">
    <p class="fraisetxt">citron<p>
</div>
</div>
<hr class="line"></hr>
<?php 
echo do_shortcode ("[contact-form-7 id='6e42b91' title='formulaire commander']"); ?>
 <?php include "footer.php";?>

