<?php /* Template Name: commander-page */ ?>
<?php include "header.php";?>
<div id="orderpage">
    <h1 class="h1p3">Commander</h1>
    <hr class="line"/>
    <h2 class="textp2 h2p3">Votre commande</h2>
    <div class="commandegout">
        <div class="fruit fraisep3">
            <p class="pfruit">Fraise<p>
            <div class="flexdivfruit fruitcourt" >
                <div class="buttonfruit">
                    <p class="chiffrefruit">0</p>
                </div>
                <div class="divbuttonfruit">
                    <div class="divplusetmoins borderfruit divplus">
                        <p>+</p>
                    </div>
                    <div class="divplusetmoins divmoins">
                        <p>-</p>
                    </div>
                </div>
                <div class="buttonok">
                    <p>Ok</p>
                </div>
            </div>
        </div>
    
        <div class="fruit pamplemoussep3">
            <p class="pfruit">pample<br>mousse<p>
            <div class="flexdivfruit">
                <div class="buttonfruit">
                    <p class="chiffrefruit">0</p>
                </div>
                <div class="divbuttonfruit">
                    <div class="divplusetmoins borderfruit divplus">
                        <p>+</p>
                    </div>
                    <div class="divplusetmoins divmoins">
                        <p>-</p>
                    </div>
                </div>
                <div class="buttonok">
                    <p>Ok</p>
                </div>
            </div>
        </div>
        <div class="fruit framboisep3">
            <p class="pfruit">fram<br>boise<p>
            <div class="flexdivfruit ">
                <div class="buttonfruit">
                    <p class="chiffrefruit">0</p>
                </div>
                <div class="divbuttonfruit">
                    <div class="divplusetmoins borderfruit divplus">
                        <p>+</p>
                    </div>
                    <div class="divplusetmoins divmoins">
                        <p>-</p>
                    </div>
                </div>
                <div class="buttonok">
                    <p>Ok</p>
                </div>
            </div>
        </div>
        <div class="fruit citronp3">
            <p class="pfruit">citron<p>
            <div class="flexdivfruit fruitcourt" >
                <div class="buttonfruit">
                    <p class="chiffrefruit">0</p>
                </div>
                <div class="divbuttonfruit">
                    <div class="divplusetmoins borderfruit divplus">
                        <p>+</p>
                    </div>
                    <div class="divplusetmoins divmoins">
                        <p>-</p>
                    </div>
                </div>
                <div class="buttonok">
                    <p>Ok</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="line linemargin"/>
    <?php 
    echo do_shortcode ("[contact-form-7 id='6e42b91' title='formulaire commander']"); ?>
</div>
<?php include "footer.php";?>

