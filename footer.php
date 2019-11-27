<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
                <div class="footer-logo">
                    <a href="#"><img src="images/footer-logo.png" alt="Pet Shop" class="img-responsive"></a>

                </div>
                <p>It is a long established fact that a reader <br class="hidden-xs">distracted by the readable content</p>
                <ul class="contact-list list-unstyled">
                    <li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> No: 801, petty shop, Australia.</li>
                    <li><a href="mailto:pettyshop@mail.com"><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>pettyshop@mail.com</a></li>
                    <li><a href="#"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> (+23) 900 8990 000 </a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <h3>Information</h3>
                <ul class="info-list list-unstyled">
                    <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Adoption</a></li>
                    <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Active Dogs</a></li>
                    <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Daycare</a></li>
                    <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Dog Training</a></li>
                    <li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Helpcare</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h3>Donner votre avis a propos de notre site </h3>

                <ul class="insta-list list-unstyled">

                    <br>

                    <?php
                    if(isset($_SESSION['ID'])) {
                        $idc = $_SESSION['ID'];
                        //afficher note
                    }
                    else {   $idc = gethostbyaddr($_SERVER['REMOTE_ADDR']);}
                    $sql=" SELECT * from note where ID_CLIENT='$idc'";
                    $db = config::getConnexion();

                    $listnot=$db->query($sql);



                    if($listnot->rowCount()) {

                    foreach($listnot as $row){

                    for($i=0;$i<5;$i++){
                    if($row['NOTE']>$i)
                    {
                    ?>	<td width="80%"><a href="<?php echo "ajouter_note.php?id=".$idc."&note=".($i+1)."" ?> " class="social-info">
                            <img width="30" height="30" src="img/star.png">


                            <?php }else{ ?>


                    <td><a href="<?php echo "ajouter_note.php?id=".$idc."&note=".($i+1)."" ?> " class="social-info">
                            <img width="30" height="30" src="img/star_w.png">
                            <?php }


                            }}
                            ?> <td><a href="<?php echo "ajouter_note.php?id=".$idc."&note=".(0)."" ?> " class="social-info">
                            <img width="30" height="30" src="img/del.png">
                            <?php
                            }

                            else{

                            for($i=0;$i<5;$i++){
                            ?>
                    <td><a href="<?php echo "ajouter_note.php?id=".$idc."&note=".($i+1)."" ?> " class="social-info">
                            <img width="30" height="30" src="img/star_w.png">


                            <?php

                            }
                            }  ?>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h3>Newsletter</h3>
                <div class="newsletter">
                    <p>It is a long established fact that a by <br class="hidden-xs">the readable content</p>
                    <form class="newsletter-form" action="#">
                        <fieldset>
                            <input class="form-control" placeholder="Email" type="email">
                            <button class="submit-btn round" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

</footer>