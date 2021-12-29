<?php

require_once "conexao.php";

$player = filter_input(INPUT_POST,'player');
$senha = filter_input(INPUT_POST, 'senha');

$sql = $pdo->prepare("Select pj_info from personagem where player != 'Mestre'");
$sql->execute();
$dado =  $sql->fetchAll();
if (!empty($dado)){
    $data = json_decode($dado[0][0]);
}

?>

<head>
    <link rel="stylesheet" href="menu.css">

    <script src="https://kit.fontawesome.com/c2d6a5c364.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../node_modules/rpg-awesome/css/rpg-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    


    <script type="text/javascript" src="function_mestre.js"></script>
</head>

<div class="card corpo">

<!-- ANCHOR MENU -->
    <div class="sidebar-nav">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container" style="display: flex">
                
                <!-- Mobile Menu Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 style="color:#fff; margin:auto;">Painel do Mestre</h1>
                <!-- Menus List -->
                <button class="btn" style="text-align:flex-end;" id="novo_player">Novo Player</button>
                <div class="offcanvas offcanvas-start shadow" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                   
                        <img src="logo.png" alt="" height="200" width="96%" id="pjimg">
                    
                    <div class="offcanvas-header">
                        <h3 style="color:#fff"><?php echo strtoupper($player); ?></h3>
                    </div>
                    <div class="offcanvas-body" >
                        
                        <p style="color:#fff"> Personagens: <?php echo count($dado) ?></p>
                        <hr style="color:#fff">
                        <ul class="navbar-nav">
                            <li class="active"><a href="#"><i class="ra ra-quill-ink "></i> <span class="item-text">Jogadores</span></a></li>
                            <li><a href="logout.php"><i class="bi bi-box-arrow-in-left"></i> <span class="item-text">Sair</span></a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </div>
    <div class="jogador">
    <div class="row">
        <?php 
            for ($i=0; $i < count($dado) ; $i++) { 
                $pp =  json_decode($dado[$i][0]);

                if(empty($pp->player))
                echo "";
                else {
            ?>

        <div class="col-sm-6">
            <div class="card border-dark" style="margin-bottom: 12px;">
                <div class="card-header">
                    <?php if(!empty($pp->player))
                    echo "<h3>Personagem de $pp->player</h3>";else echo "";?>
                </div>
                <input type="hidden" name="fname" id="fname" value="<?php echo $pp->player; ?>">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                        <?php
                    if(!empty($pp->pj_name)){
                        echo "<label for='' style='font-weight:bold'>Nome</label>";
                        echo "<p class='card-text'>$pp->pj_name</p>";}
                    if(!empty($pp->pj_age)){
                        echo "<label for='' style='font-weight:bold'>Idade</label>";
                        echo "<p class='card-text'>$pp->pj_age</p>";}
                        ?>
                        </div>
                        <div class="col-sm-6">
                        <?php
                    if(!empty($pp->pj_race)){
                        echo "<label for='' style='font-weight:bold'>Raça</label>";
                        echo "<p class='card-text'>$pp->pj_race</p>";}
                    if(!empty($pp->pj_level)){
                        echo "<label for='' style='font-weight:bold'>Level</label>";
                        echo "<p class='card-text'>$pp->pj_level</p>";}
                        ?>
                        </div>
                    </div>
                    <?php
                    if(!empty($pp->pj_exp)){
                        echo "<label for='' style='font-weight:bold'>EXP</label>";
                        echo "<p class='card-text'>$pp->pj_exp</p>";}
                    ?>
                    
                </div>
                <div class="card-footer bg-transparent border-dark">
                    <button class="btn" name="<?php echo $pp->player; ?>" id="nova_ficha">Nova Ficha</button>
                </div>
            </div>
        </div>


            <?php
                }
            }
            ?>
    </div>  
    </div>
</div>