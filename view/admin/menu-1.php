<ul class="navbar-mobile__list list-unstyled">
                 <?php
                        if ($_SESSION['role']=="admin-1" || $_SESSION['role']=="admin-2") {
                            ?>
                             <li class="has-sub">
                            <a class="js-arrow" href="rapport.php">
                                Tableau de bord</a>
                        </li>
                            <?php
                        }
                       
                    ?>
                        <li class="has-sub">
                            <a class="js-arrow" href="client.php">
                                Client</a>
                        </li>
                    
                        <?php if ($_SESSION['role']=="admin-1" || $_SESSION['role']=="admin-2") { ?>
                             <li>
                            <a href="utilisateur.php">
                                Utilisateur</a>
                        </li>
                       <?php  } ?>
                       
                       
                       
                     <li>
                           <a href="ai.pdf">
                                Besoin d'aide?</a>
                        </li>
                    </ul>