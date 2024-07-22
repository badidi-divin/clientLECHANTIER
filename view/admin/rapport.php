<?php  
    session_start();
    require_once('securite.php');
    require_once('../../controller/cookie-config.php');
    require_once('../../model/connexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <?php require_once('header.php'); ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                    LE CHANTIER C.R.M
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
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
                    
                    
                         <?php if ($_SESSION['role']=="admin-1" || $_SESSION['role']=="admin-2") { ?>
                             <li>
                            <a href="utilisateur.php">
                                Utilisateur</a>
                        </li>
                        <?php } ?>
                        <li>
                           <a href="ai.pdf">
                                Besoin d'aide?</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
               <h4>
                    LE CHANTIER C.R.M
                </h4>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
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


                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" method="get" action="">
                                
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['username']."(".$_SESSION['role'].")"."(".$_SESSION['extension'].")"; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">INFORMATION SUR LES CLIENTS </h2>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                           <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                
                                            </div>
                                            <div class="text">
                                                <h3 style="color:white;">CLIENT</h3>
                                                <h2 align="center">
                                                    <?php
                                    $nblmd=$pdo->prepare('SELECT * FROM client WHERE nom_complet<>"inconnue"');
                                    $nblmd->execute();
                                    $nblmd=$nblmd->fetchAll();
                                    echo count($nblmd);
                                ?><br><a href="imprimer-clients.php" class="btn btn-secondary" title="Souhaitez-vous imprimer?">Imprimer</a></h2>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            
                                                        
                        </div>
                     
   <?php require_once('footer.php'); ?>
</body>

</html>
<!-- end document-->
