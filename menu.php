<?php

require_once "manage.php";



?>

<head>
    <link rel="stylesheet" href="menu.css">

    <script src="https://kit.fontawesome.com/c2d6a5c364.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../daemon/node_modules/rpg-awesome/css/rpg-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <script type="text/javascript" src="function.js"></script>
</head>

<div class="card corpo">

<!-- ANCHOR MENU -->
    <div class="sidebar-nav">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container">

                <!-- Mobile Menu Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menus List -->
                <div class="offcanvas offcanvas-start shadow" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                   
                        <img src="logo.png" alt="" height="200" width="100%" id="pjimg" style="border:2px solid">
                    
                    <div class="offcanvas-header">
                        <h3 style="color:#fff"><?php echo strtoupper($player); ?></h3>
                    </div>
                    <div class="offcanvas-body">
                        
                        <p style="color:#fff"> Personagem: <?php echo strtoupper($data->pj_name); ?></p>
                        <hr style="color:#fff">
                        <ul class="navbar-nav">
                            <li><a href="#"><i class="ra ra-quill-ink"></i> <span class="item-text">Biografia</span></a>
                            </li>
                            <li><a href="#"><i class="ra ra-player"></i> <span class="item-text">Info & Atributos</span></a></li>
                            <li><a href="#"><i class="ra ra-trophy"></i> <span class="item-text">Pericias</span></a>
                            </li>
                            <li><a href="#"><i class="ra ra-crossed-swords"></i><span
                                        class="item-text">Combate</span></a></li>
                            <li><a href="#"><i class="ra ra-vest"></i> <span class="item-text">Equipamentos</span></a>
                            </li>
                            <li><a href="#"><i class="ra ra-doubled"></i> <span class="item-text">Magia</span></a></li>
                            <li><a href="#"><i class="ra ra-muscle-up"></i> <span
                                        class="item-text">Aprimoramentos</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </div>
    <div class="main">
        <div class="atrib_info">
            <h4 id="atributos-tag">INFO</h4>
            <hr>
            <form id="form_daemon" name="form_daemon" method="POST">
                <input type="hidden" name="player" value="<?php echo ($player); ?>">
                <input type="hidden" name="numPericias" id="numPericias"
                    value="<?php if(empty($data->numPericias)){    echo '1';}else {    echo $data->numPericias;}?>">
                <input type="hidden" name="numEquip" id="numEquip"
                    value="<?php if(empty($data->numEquip)){    echo '1';}else {    echo $data->numEquip;}?>">
                <input type="hidden" name="numApri" id="numApri"
                    value="<?php if(empty($data->numApri)){    echo '1';}else {    echo $data->numApri;}?>">

                <div class="row">
                   <div class="col col-sm-2"></div>
                    <div class="col col-sm-4">
                        <input type="text" class="form-control" name="pj_name"
                            value="<?php if(empty($data->pj_name)){    echo '0';}else {    echo $data->pj_name;}?>"><label
                            class="pj_info" for="pj_name">NOME</label>
                        <input type="text" class="form-control" name="pj_age"
                            value="<?php if(empty($data->pj_age)){    echo '0';}else {    echo $data->pj_age;}?>"><label
                            class="pj_info" for="pj_age">IDADE</label>
                        <input type="text" class="form-control" name="pj_sex"
                            value="<?php if(empty($data->pj_sex)){    echo '0';}else {    echo $data->pj_sex;}?>"><label
                            class="pj_info" for="pj_sex">SEXO</label>

                    </div>
                    <div class="col col-sm-4">
                        <input type="text" class="form-control" name="pj_race"
                            value="<?php if(empty($data->pj_race)){    echo '0';}else {    echo $data->pj_race;}?>"><label
                            class="pj_info" for="pj_race">RAÇA</label>
                        <input type="text" class="form-control" name="pj_level"
                            value="<?php if(empty($data->pj_level)){    echo '0';}else {    echo $data->pj_level;}?>"><label
                            class="pj_info" for="pj_level">NIVEL</label>
                        <input type="text" class="form-control" name="pj_exp"
                            value="<?php if(empty($data->pj_exp)){    echo '0';}else {    echo $data->pj_exp;}?>"><label
                            class="pj_info" for="pj_exp">EXPERIENCIA</label>
                    </div>
                    <div class="col col-sm-2"></div>

                </div>

                <h4 id="atributos-tag">ATRIBUTOS</h4>

                <div class="container">
                    <div class="row">
                        <div class="col atributos">
                            <label for="">Nome</label>
                        </div>
                        <div class="col atributos">
                            <label for="">Orig</label>
                        </div>
                        <div class="col atributos">
                            <label for="">Temp</label>
                        </div>
                        <div class="col atributos">
                            <label for="">Mod</label></div>
                        <div class="col atributos">
                            <label for="">Teste</label>
                        </div>
                        <div class="col atributos"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO FORÇA -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">FOR</label></div>
                        <div class="col div_for"><input type="number" min="0" class="form-control atrib atr_for"
                                name="atr_for_orig"
                                value="<?php if(empty($data->atr_for_orig)){    echo '0';}else {    echo $data->atr_for_orig;}?>">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_for_temp)){    echo '0';}else {    echo $data->atr_for_temp;}?>"
                                class="form-control atrib atr_for" name="atr_for_temp" value>
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_for_mod)){    echo '0';}else {    echo $data->atr_for_mod;}?>"
                                class="form-control atrib atr_for" name="atr_for_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_for_teste)){    echo '0';}else {    echo $data->atr_for_teste;}?>"
                                class="form-control atrib atr_for" name="atr_for_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO CONSTITUICAO -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">CON</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_con_orig)){    echo '0';}else {    echo $data->atr_con_orig;}?>"
                                class="form-control atrib atr_for" name="atr_con_orig">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_con_temp)){    echo '0';}else {    echo $data->atr_con_temp;}?>"
                                class="form-control atrib atr_for" name="atr_con_temp">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_con_mod)){    echo '0';}else {    echo $data->atr_con_mod;}?>"
                                class="form-control atrib atr_for" name="atr_con_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_con_teste)){    echo '0';}else {    echo $data->atr_con_teste;}?>"
                                class="form-control atrib atr_for" name="atr_con_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO DESTREZA -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">DES</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_des_orig)){    echo '0';}else {    echo $data->atr_des_orig;}?>"
                                class="form-control atrib atr_for" name="atr_des_orig">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_des_temp)){    echo '0';}else {    echo $data->atr_des_temp;}?>"
                                class="form-control atrib atr_for" name="atr_des_temp">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_des_mod)){    echo '0';}else {    echo $data->atr_des_mod;}?>"
                                class="form-control atrib atr_for" name="atr_des_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_des_teste)){    echo '0';}else {    echo $data->atr_des_teste;}?>"
                                class="form-control atrib atr_for" name="atr_des_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO AGILIDADE -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">AGI</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_agi_orig)){    echo '0';}else {    echo $data->atr_agi_orig;}?>"
                                class="form-control atrib atr_for" name="atr_agi_orig">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_agi_temp)){    echo '0';}else {    echo $data->atr_agi_temp;}?>"
                                class="form-control atrib atr_for" name="atr_agi_temp">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_agi_mod)){    echo '0';}else {    echo $data->atr_agi_mod;}?>"
                                class="form-control atrib atr_for" name="atr_agi_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_agi_teste)){    echo '0';}else {    echo $data->atr_agi_teste;}?>"
                                class="form-control atrib atr_for" name="atr_agi_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO PERCEPÇAO -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">PER</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_per_orig)){    echo '0';}else {    echo $data->atr_per_orig;}?>"
                                class="form-control atrib atr_for" name="atr_per_orig">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_per_temp)){    echo '0';}else {    echo $data->atr_per_temp;}?>"
                                class="form-control atrib atr_for" name="atr_per_temp">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_per_mod)){    echo '0';}else {    echo $data->atr_per_mod;}?>"
                                class="form-control atrib atr_for" name="atr_per_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_per_teste)){    echo '0';}else {    echo $data->atr_per_teste;}?>"
                                class="form-control atrib atr_for" name="atr_per_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO INTELIGENCIA -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">INT</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_int_orig)){    echo '0';}else {    echo $data->atr_int_orig;}?>"
                                class="form-control atrib atr_for" name="atr_int_orig">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_int_temp)){    echo '0';}else {    echo $data->atr_int_temp;}?>"
                                class="form-control atrib atr_for" name="atr_int_temp">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_int_mod)){    echo '0';}else {    echo $data->atr_int_mod;}?>"
                                class="form-control atrib atr_for" name="atr_int_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_int_teste)){    echo '0';}else {    echo $data->atr_int_teste;}?>"
                                class="form-control atrib atr_for" name="atr_int_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO VONTADE -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">VON</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_von_orig)){    echo '0';}else {    echo $data->atr_von_orig;}?>"
                                class="form-control atrib atr_for" name="atr_von_orig">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_von_temp)){    echo '0';}else {    echo $data->atr_von_temp;}?>"
                                class="form-control atrib atr_for" name="atr_von_temp">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_von_mod)){    echo '0';}else {    echo $data->atr_von_mod;}?>"
                                class="form-control atrib atr_for" name="atr_von_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_von_teste)){    echo '0';}else {    echo $data->atr_von_teste;}?>"
                                class="form-control atrib atr_for" name="atr_von_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                    <!-- CAMPO ATRIBUTO CARISMA -->
                    <div class="row">
                        <div class="col "><label for="" class="pj_info">CAR</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_car_orig)){    echo '0';}else {    echo $data->atr_car_orig;}?>"
                                class="form-control atrib atr_for" name="atr_car_orig">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_car_temp)){    echo '0';}else {    echo $data->atr_car_temp;}?>"
                                class="form-control atrib atr_for" name="atr_car_temp">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_car_mod)){    echo '0';}else {    echo $data->atr_car_mod;}?>"
                                class="form-control atrib atr_for" name="atr_car_mod">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->atr_car_teste)){    echo '0';}else {    echo $data->atr_car_teste;}?>"
                                class="form-control atrib atr_for" name="atr_car_teste">
                        </div>
                        <div class="col dado div_for"></div>
                    </div>
                </div>

                <!-- ABA PLAYER INFO -->

                <h3 style="padding:8px; background-color:black;"></h3>
                <div class="container">
                    <div class="row">
                        <div class="col atributos">
                        </div>
                        <div class="col atributos">
                            <label for="">Total</label>
                        </div>
                        <div class="col atributos">
                            <label for="">Atual</label>
                        </div>
                        <div class="col atributos">

                        </div>
                        <div class="col atributos">
                            <label for="">Total</label>
                        </div>
                        <div class="col atributos">
                            <label for="">Atual</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col div_for"><label for="" style="padding-left:60px">PV's</label>
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->pv)){    echo '0';}else {    echo $data->pv;}?>"
                                class="form-control atrib" name="pv"></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->pv_atual)){    echo '0';}else {    echo $data->pv_atual;}?>"
                                class="form-control atrib" name="pv_atual"></div>
                        <div class="col div_for"><label for="" style="float:right;padding-right:20px">PM's</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->pm)){    echo '0';}else {    echo $data->pm;}?>"
                                class="form-control atrib" name="pm"></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->pm_atual)){    echo '0';}else {    echo $data->pm_atual;}?>"
                                class="form-control atrib" name="pm_atual"></div>
                    </div>

                    <div class="row">
                        <div class="col div_for"><label for="" style="padding-left:60px">PH's</label>
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->ph)){    echo '0';}else {    echo $data->ph;}?>"
                                class="form-control atrib" name="ph"></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->ph_atual)){    echo '0';}else {    echo $data->ph_atual;}?>"
                                class="form-control atrib" name="ph_atual"></div>
                        <div class="col div_for"><label for="" style="float:right;padding-right:20px">P.FÉ</label></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->pfe)){    echo '0';}else {    echo $data->pfe;}?>"
                                class="form-control atrib" name="pfe"></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->pfe_atual)){    echo '0';}else {    echo $data->pfe_atual;}?>"
                                class="form-control atrib" name="pfe_atual"></div>
                    </div>

                    <div class="row">
                        <div class="col div_for"><label for="" style="padding-left:60px">SANIDADE</label>
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->sanity)){    echo '0';}else {    echo $data->sanity;}?>"
                                class="form-control atrib" name="sanity"></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->san_atual)){    echo '0';}else {    echo $data->san_atual;}?>"
                                class="form-control atrib" name="san_atual"></div>
                        <div class="col div_for"><label for="" style="float:right;padding-right:20px">SORTE</label>
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->luck)){    echo '0';}else {    echo $data->luck;}?>"
                                class="form-control atrib" name="luck"></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->luck_atual)){    echo '0';}else {    echo $data->luck_atual;}?>"
                                class="form-control atrib" name="luck_atual"></div>
                    </div>
                </div>
        </div>

        <!-- ABA BIOGRAFIA -->
        <div class="bio">
            <div class="container">


                <h4 id="atributos-tag">BIOGRAFIA</h4>
                <div class="row" style="margin-bottom: 26px;">
                    <div class="col com-sm-4"> </div>
                    <div class="col com-sm-4">
                        <label for="pj_img">
                            <img src="<?php echo $data->pj_img;?>" alt="Foto Personagem" height="400" width="400"
                                id="player_img" style="margin-left: 12px;">
                        </label>
                    </div>

                    <input type="file" name="pj_img" id="pj_img">
                    <input type="hidden" name="checkImg" id="checkImg" value="<?php echo $data->checkImg;?>">
                    <div class="col com-sm-4"> </div>
                </div>
                <div class="row">
                    <textarea name="biografia" id="pj_bio" class="form-control linhas" cols="60" rows="10"
                        style="width: 65rem; height: 40rem"> <?php if(empty($data->biografia)){    echo '';}else {    echo $data->biografia;}?></textarea>
                </div>
            </div>
        </div>

        <!-- ABA PERICIAS -->

        <div class="pericias">
            <div class="" id="atributos-tag">
                <h4>PERICIAS <buttom class='btn add_pericia' id="btn-add-pericia" style="float:right; margin-left:12px">
                        ADD</buttom>
                    <buttom class='btn add_pericia' id="btn-sub-pericia" style="float:right">REMOVE</buttom>
                </h4>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col div_for atributos"><label for="">Nome</label></div>
                    <div class="col div_for atributos"><label for="">Base</label></div>
                    <div class="col div_for atributos"><label for="">Gasto%</label></div>
                    <div class="col div_for atributos"><label for="">Extra%</label></div>
                    <div class="col div_for atributos"><label for="">Total%</label></div>

                </div>
                <div class="all_pericias">

                    <?php 
                        //$nper = $data->$a;
                      
                        $numper = $data->numPericias;
                        $j = 1;
                        for($i=1;$i<=$numper;$i++){
                                $pericia = 'pericia'.$j;
                                $base = 'base'.$j;
                                $extra = 'extra'.$j;
                                $total = 'total'.$j;
                                $gasto = 'gasto'.$j;
                               
                         ?>
                    <div class="row row_pericia" id="row_pericia<?php echo $j; ?>">
                        <div class="col div_for "><input type="text" class="form-control pericia"
                                name="pericia<?php echo $j; ?>" id="pericia<?php echo $j; ?>"
                                value="<?php if(empty($data->$pericia)){    echo '';}else {    echo $data->$pericia;}?>">
                        </div>
                        <div class="col div_for "><select name="base<?php echo $j; ?>" id="base<?php echo $j; ?>"
                                class="form-control pericia" style="text-transform: uppercase;">

                                <option selected hidden
                                    value="<?php if(empty($data->$base)){    echo '0';}else {    echo $data->$base;}?>">
                                    <?php if(empty($data->$base)){    echo '0';}else {    echo $data->$base;}?>
                                <option value="for">FOR</option>
                                <option value="con">CON</option>
                                <option value="des">DES</option>
                                <option value="agi">AGI</option>
                                <option value="per">PER</option>
                                <option value="int">INT</option>
                                <option value="von">VON</option>
                                <option value="car">CAR</option>
                            </select></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->$gasto)){    echo '0';}else {    echo $data->$gasto;}?>"
                                class="form-control pericia atrib" name="gasto<?php echo $j; ?>">
                        </div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->$extra)){    echo '0';}else {    echo $data->$extra;}?>"
                                class="form-control pericia" name="extra<?php echo $j; ?>"></div>
                        <div class="col div_for"><input type="number" min="0"
                                value="<?php if(empty($data->$total)){    echo '0';}else {    echo $data->$total;}?>"
                                class="form-control pericia" id="total<?php echo $j; ?>"></div>
                    </div>

                    <?php $j++; } ?>

                </div>
            </div>
        </div>

        <!-- ABA COMBATE -->
        <div class="combate">
            <h4 id="atributos-tag">COMBATE</h4>
            <div class="contaier">
                <div class="row">
                    <div class="col atributos"><label for="">Nome</label></div>
                    <div class="col atributos"><label for="">Tipo</label></div>
                    <div class="col atributos"><label for="">Base</label></div>
                    <div class="col atributos"><label for="">Gasto</label></div>
                    <div class="col atributos"><label for="">%Ataque</label></div>
                    <div class="col atributos"><label for="">%Defesa</label></div>
                    <div class="col atributos"><label for="">Dano</label></div>

                </div>
                <div class="row row_combate">
                    <div class="col div_for"><input type="text" name="combate1" class="form-control"
                            value="<?php if(empty($data->combate1)){    echo '';}else {    echo $data->combate1;}?>">
                    </div>
                    <div class="col div_for"><select name="combateTipo1" id="combateTipo1" class="form-control">
                            <option selected hidden
                                value="<?php if(empty($data->combateTipo1)){    echo '';}else {    echo $data->combateTipo1;}?>">
                                <?php if(empty($data->combateTipo1)){    echo '0';}else {    echo $data->combateTipo1;}?>
                            </option>
                            <option value="CORPO A CORPO">CORPO A CORPO</option>
                            <option value="A DISTANCIA">A DISTANCIA</option>
                        </select></div>
                    <div class="col div_for"><select name="combateBase1" id="combateBase1" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateBase1)){    echo 'des';}else {    echo $data->combateBase1;}?>">
                                <?php if(empty($data->combateBase1)){    echo '';}else {    echo $data->combateBase1;}?>
                            </option>
                            <option value="for">FOR</option>
                            <option value="con">CON</option>
                            <option value="des">DES</option>
                            <option value="agi">AGI</option>
                            <option value="per">PER</option>
                            <option value="int">INT</option>
                            <option value="von">VON</option>
                            <option value="car">CAR</option>
                        </select></div>
                    <div class="col div_for"><input type="number" name="combateGasto1" class="form-control"
                            value="<?php if(empty($data->combateGasto1)){    echo '0';}else {    echo $data->combateGasto1;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateAtk1" class="form-control"
                            value="<?php if(empty($data->combateAtk1)){    echo '0';}else {    echo $data->combateAtk1;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateDef1" class="form-control"
                            value="<?php if(empty($data->combateDef1)){    echo '0';}else {    echo $data->combateDef1;}?>">
                    </div>
                    <div class="col div_for"><input type="text" name="combateDano1" class="form-control"
                            value="<?php if(empty($data->combateDano1)){    echo '0';}else {    echo $data->combateDano1;}?>">
                    </div>
                </div>

                <div class="row row_combate">
                    <div class="col div_for"><input type="text" name="combate2" class="form-control"
                            value="<?php if(empty($data->combate2)){    echo '';}else {    echo $data->combate2;}?>">
                    </div>
                    <div class="col div_for"><select name="combateTipo2" id="combateTipo2" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateTipo2)){    echo '';}else {    echo $data->combateTipo2;}?>">
                                <?php if(empty($data->combateTipo2)){    echo '0';}else {    echo $data->combateTipo2;}?>
                            </option>
                            <option value="CORPO A CORPO">CORPO A CORPO</option>
                            <option value="A DISTANCIA">A DISTANCIA</option>
                        </select></div>
                    <div class="col div_for"><select name="combateBase2" id="combateBase2" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateBase2)){    echo 'des';}else {    echo $data->combateBase2;}?>">
                                <?php if(empty($data->combateBase2)){    echo '';}else {    echo $data->combateBase2;}?>
                            </option>
                            <option value="for">FOR</option>
                            <option value="con">CON</option>
                            <option value="des">DES</option>
                            <option value="agi">AGI</option>
                            <option value="per">PER</option>
                            <option value="int">INT</option>
                            <option value="von">VON</option>
                            <option value="car">CAR</option>
                        </select></div>
                    <div class="col div_for"><input type="number" name="combateGasto2" class="form-control"
                            value="<?php if(empty($data->combateGasto2)){    echo '0';}else {    echo $data->combateGasto2;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateAtk2" class="form-control"
                            value="<?php if(empty($data->combateAtk2)){    echo '0';}else {    echo $data->combateAtk2;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateDef2" class="form-control"
                            value="<?php if(empty($data->combateDef2)){    echo '0';}else {    echo $data->combateDef2;}?>">
                    </div>
                    <div class="col div_for"><input type="text" name="combateDano2" class="form-control"
                            value="<?php if(empty($data->combateDano2)){    echo '0';}else {    echo $data->combateDano2;}?>">
                    </div>
                </div>

                <div class="row row_combate">
                    <div class="col div_for"><input type="text" name="combate3" class="form-control"
                            value="<?php if(empty($data->combate3)){    echo '';}else {    echo $data->combate3;}?>">
                    </div>
                    <div class="col div_for"><select name="combateTipo3" id="combateTipo3" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateTipo3)){    echo '';}else {    echo $data->combateTipo3;}?>">
                                <?php if(empty($data->combateTipo3)){    echo '0';}else {    echo $data->combateTipo3;}?>
                            </option>
                            <option value="CORPO A CORPO">CORPO A CORPO</option>
                            <option value="A DISTANCIA">A DISTANCIA</option>
                        </select></div>
                    <div class="col div_for"><select name="combateBase3" id="combateBase3" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateBase3)){    echo 'des';}else {    echo $data->combateBase3;}?>">
                                <?php if(empty($data->combateBase3)){    echo '';}else {    echo $data->combateBase3;}?>
                            </option>
                            <option value="for">FOR</option>
                            <option value="con">CON</option>
                            <option value="des">DES</option>
                            <option value="agi">AGI</option>
                            <option value="per">PER</option>
                            <option value="int">INT</option>
                            <option value="von">VON</option>
                            <option value="car">CAR</option>
                        </select></div>
                    <div class="col div_for"><input type="number" name="combateGasto3" class="form-control"
                            value="<?php if(empty($data->combateGasto3)){    echo '0';}else {    echo $data->combateGasto3;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateAtk3" class="form-control"
                            value="<?php if(empty($data->combateAtk3)){    echo '0';}else {    echo $data->combateAtk3;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateDef3" class="form-control"
                            value="<?php if(empty($data->combateDef3)){    echo '0';}else {    echo $data->combateDef3;}?>">
                    </div>
                    <div class="col div_for"><input type="text" name="combateDano3" class="form-control"
                            value="<?php if(empty($data->combateDano3)){    echo '0';}else {    echo $data->combateDano3;}?>">
                    </div>
                </div>


                <div class="row row_combate">
                    <div class="col div_for"><input type="text" name="combate4" class="form-control"
                            value="<?php if(empty($data->combate4)){    echo '';}else {    echo $data->combate4;}?>">
                    </div>
                    <div class="col div_for"><select name="combateTipo4" id="combateTipo4" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateTipo4)){    echo '';}else {    echo $data->combateTipo4;}?>">
                                <?php if(empty($data->combateTipo4)){    echo '0';}else {    echo $data->combateTipo4;}?>
                            </option>
                            <option value="CORPO A CORPO">CORPO A CORPO</option>
                            <option value="A DISTANCIA">A DISTANCIA</option>
                        </select></div>
                    <div class="col div_for"><select name="combateBase4" id="combateBase4" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateBase4)){    echo 'des';}else {    echo $data->combateBase4;}?>">
                                <?php if(empty($data->combateBase4)){    echo '';}else {    echo $data->combateBase4;}?>
                            </option>
                            <option value="for">FOR</option>
                            <option value="con">CON</option>
                            <option value="des">DES</option>
                            <option value="agi">AGI</option>
                            <option value="per">PER</option>
                            <option value="int">INT</option>
                            <option value="von">VON</option>
                            <option value="car">CAR</option>
                        </select></div>
                    <div class="col div_for"><input type="number" name="combateGasto4" class="form-control"
                            value="<?php if(empty($data->combateGasto4)){    echo '0';}else {    echo $data->combateGasto4;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateAtk4" class="form-control"
                            value="<?php if(empty($data->combateAtk4)){    echo '0';}else {    echo $data->combateAtk4;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateDef4" class="form-control"
                            value="<?php if(empty($data->combateDef4)){    echo '0';}else {    echo $data->combateDef4;}?>">
                    </div>
                    <div class="col div_for"><input type="text" name="combateDano4" class="form-control"
                            value="<?php if(empty($data->combateDano4)){    echo '0';}else {    echo $data->combateDano4;}?>">
                    </div>
                </div>

                <div class="row row_combate">
                    <div class="col div_for"><input type="text" name="combate5" class="form-control"
                            value="<?php if(empty($data->combate5)){    echo '';}else {    echo $data->combate5;}?>">
                    </div>
                    <div class="col div_for"><select name="combateTipo5" id="combateTipo5" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateTipo5)){    echo '';}else {    echo $data->combateTipo5;}?>">
                                <?php if(empty($data->combateTipo5)){    echo '0';}else {    echo $data->combateTipo5;}?>
                            </option>
                            <option value="CORPO A CORPO">CORPO A CORPO</option>
                            <option value="A DISTANCIA">A DISTANCIA</option>
                        </select></div>
                    <div class="col div_for"><select name="combateBase5" id="combateBase5" class="form-control"
                            style="text-transform: uppercase;">
                            <option selected hidden
                                value="<?php if(empty($data->combateBase5)){    echo 'des';}else {    echo $data->combateBase5;}?>">
                                <?php if(empty($data->combateBase5)){    echo '';}else {    echo $data->combateBase5;}?>
                            </option>
                            <option value="for">FOR</option>
                            <option value="con">CON</option>
                            <option value="des">DES</option>
                            <option value="agi">AGI</option>
                            <option value="per">PER</option>
                            <option value="int">INT</option>
                            <option value="von">VON</option>
                            <option value="car">CAR</option>
                        </select></div>
                    <div class="col div_for"><input type="number" name="combateGasto5" class="form-control"
                            value="<?php if(empty($data->combateGasto5)){    echo '0';}else {    echo $data->combateGasto5;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateAtk5" class="form-control"
                            value="<?php if(empty($data->combateAtk5)){    echo '0';}else {    echo $data->combateAtk5;}?>">
                    </div>
                    <div class="col div_for"><input type="number" name="combateDef5" class="form-control"
                            value="<?php if(empty($data->combateDef5)){    echo '0';}else {    echo $data->combateDef5;}?>">
                    </div>
                    <div class="col div_for"><input type="text" name="combateDano5" class="form-control"
                            value="<?php if(empty($data->combateDano5)){    echo '0';}else {    echo $data->combateDano5;}?>">
                    </div>
                </div>

            </div>
        </div>
        <!-- ABA  EQUIPAMENTOS -->
        <div class="equipamentos">
            <div class="" id="atributos-tag">
                <h4>EQUIPAMENTOS <buttom class='btn add_pericia' id="btn-add-equip"
                        style="float:right; margin-left:12px">ADD</buttom>
                    <buttom class='btn add_pericia' id="btn-sub-equip" style="float:right">REMOVE</buttom>
                </h4>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col atributos"><label for="">Nome</label></div>
                    <div class="col atributos"><label for="">Quant.</label></div>
                    <div class="col atributos"><label for="">Peso</label></div>
                    <div class="col atributos"><label for="">Durabilidade</label></div>
                </div>

                <div class="all_equips">
                    <?php


                                $numeq = $data->numEquip;
                                $k = 1;
                                for($i=1;$i<=$numeq;$i++){
                                $equip = 'equip'.$k;
                                $quant = 'quant'.$k;
                                $peso = 'peso'.$k;
                                $dura = 'dura'.$k;
                        
                       
                                ?>

                    <div class="row" id="row_equip<?php echo $k;?>">
                        <div class="col div_for"><input type="text" name="equip<?php echo $k; ?>" class="form-control"
                                value="<?php if(empty($data->$equip)){    echo '';}else {    echo $data->$equip;}?>">
                        </div>
                        <div class="col div_for"><input type="number" name="quant<?php echo $k; ?>" class="form-control"
                                value="<?php if(empty($data->$quant)){    echo '0';}else {    echo $data->$quant;}?>">
                        </div>
                        <div class="col div_for"><input type="text" name="peso<?php echo $k; ?>" class="form-control"
                                value="<?php if(empty($data->$peso)){    echo '';}else {    echo $data->$peso;}?>">
                        </div>
                        <div class="col div_for"><input type="text" name="dura<?php echo $k; ?>" class="form-control"
                                value="<?php if(empty($data->$dura)){    echo '';}else {    echo $data->$dura;}?>">
                        </div>
                    </div>

                    <?php $k++; } ?>
                </div>

            </div>
        </div>
        <!-- ABA MAGIA -->
        <div class="magia">
            <h4 id="atributos-tag">FORMAS E CAMINHOS</h4>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-2">
                        <label for="">Fogo</label> <input type="number" class="form-control" name="cam_fogo"
                            value="<?php if(empty($data->cam_fogo)){    echo '0';}else {    echo $data->cam_fogo;}?>">
                        <label for="">Ar</label> <input type="number" class="form-control" name="cam_ar"
                            value="<?php if(empty($data->cam_ar)){    echo '0';}else {    echo $data->cam_ar;}?>">
                        <label for="">Luz</label> <input type="number" class="form-control" name="cam_luz"
                            value="<?php if(empty($data->cam_luz)){    echo '0';}else {    echo $data->cam_luz;}?>">
                        <label for="">Plantas</label> <input type="number" class="form-control" name="cam_plantas"
                            value="<?php if(empty($data->cam_plantas)){    echo '0';}else {    echo $data->cam_plantas;}?>">
                        <label for="">Humanos</label> <input type="number" class="form-control" name="cam_humanos"
                            value="<?php if(empty($data->cam_humanos)){    echo '0';}else {    echo $data->cam_humanos;}?>">
                        <label for="">Metamagia</label> <input type="number" class="form-control" name="cam_metamagia"
                            value="<?php if(empty($data->cam_metamagia)){    echo '0';}else {    echo $data->cam_metamagia;}?>">
                    </div>

                    <div class="col col-sm-3"></div>

                    <div class="col col-sm-2 atributos">

                        <label for="">Entender</label><input type="number" class="form-control faL"
                            name="forma_entender"
                            value="<?php if(empty($data->forma_entender)){    echo '0';}else {    echo $data->forma_entender;}?>">
                        <br><br> <br><br>
                        <label for="">Criar</label><input type="number" class="form-control faL" name="forma_criar"
                            value="<?php if(empty($data->forma_criar)){    echo '0';}else {    echo $data->forma_criar;}?>">
                        <br><br> <br><br>
                        <label for="">Controlar</label><input type="number" class="form-control faL"
                            name="forma_controlar"
                            value="<?php if(empty($data->forma_controlar)){    echo '0';}else {    echo $data->forma_controlar;}?>">
                    </div>
                    <div class="col col-sm-3"></div>


                    <div class="col col-sm-2 atributos">
                        <label for="">Agua</label> <input type="number" class="form-control" name="cam_agua"
                            value="<?php if(empty($data->cam_agua)){    echo '0';}else {    echo $data->cam_agua;}?>">
                        <label for="">Terra</label> <input type="number" class="form-control" name="cam_terra"
                            value="<?php if(empty($data->cam_terra)){    echo '0';}else {    echo $data->cam_terra;}?>">
                        <label for="">Trevas</label> <input type="number" class="form-control" name="cam_trevas"
                            value="<?php if(empty($data->cam_trevas)){    echo '0';}else {    echo $data->cam_trevas;}?>">
                        <label for="">Animais</label> <input type="number" class="form-control" name="cam_animais"
                            value="<?php if(empty($data->cam_animais)){    echo '0';}else {    echo $data->cam_animais;}?>">
                        <label for="">Spiritum</label> <input type="number" class="form-control" name="cam_spiritum"
                            value="<?php if(empty($data->cam_spiritum)){    echo '0';}else {    echo $data->cam_spiritum;}?>">
                        <label for="">Arkanun</label> <input type="number" class="form-control" name="cam_arkanun"
                            value="<?php if(empty($data->cam_arkanun)){    echo '0';}else {    echo $data->cam_arkanun;}?>">

                    </div>
                </div>
                <h4 id="atributos-tag">GRIMORIO <i class="fas fa-book-open"></i></h4>
                <div class="row">
                    <div class="col col-sm-6 Grimorio-L">
                        <label for="">Nome</label><input type="text" name="mg_nome1" class="form-control"
                            value="<?php if(empty($data->mg_nome1)){    echo '';}else {    echo $data->mg_nome1;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam1"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam1)){    echo '0';}else {    echo $data->mg_forma_cam1;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts1" class="form-control"
                            value="<?php if(empty($data->mg_pts1)){    echo '0';}else {    echo $data->mg_pts1;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc1" class="linhas form-control" cols="30"
                            rows="10"><?php if(empty($data->mg_desc1)){    echo '';}else {    echo $data->mg_desc1;}?></textarea>
                    </div>
                    <div class="col col-sm-6 Grimorio-R">
                        <label for="">Nome</label><input type="text" name="mg_nome2" class="form-control"
                            value="<?php if(empty($data->mg_nome2)){    echo '';}else {    echo $data->mg_nome2;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam2"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam2)){    echo '0';}else {    echo $data->mg_forma_cam2;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts2" class="form-control"
                            value="<?php if(empty($data->mg_pts2)){    echo '0';}else {    echo $data->mg_pts2;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc2" class="linhas form-control" cols="30"
                            rows="10"
                            style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc2)){    echo '';}else {    echo $data->mg_desc2;}?></textarea>

                    </div>
                </div>

                <div class="row">
                    <div class="col col-sm-6 Grimorio-L">
                        <label for="">Nome</label><input type="text" name="mg_nome3" class="form-control"
                            value="<?php if(empty($data->mg_nome3)){    echo '';}else {    echo $data->mg_nome3;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam3"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam3)){    echo '0';}else {    echo $data->mg_forma_cam3;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts3" class="form-control"
                            value="<?php if(empty($data->mg_pts3)){    echo '0';}else {    echo $data->mg_pts3;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc3" class="linhas form-control" cols="30"
                            rows="10"><?php if(empty($data->mg_desc3)){    echo '';}else {    echo $data->mg_desc3;}?></textarea>
                    </div>
                    <div class="col col-sm-6 Grimorio-R">
                        <label for="">Nome</label><input type="text" name="mg_nome4" class="form-control"
                            value="<?php if(empty($data->mg_nome4)){    echo '';}else {    echo $data->mg_nome4;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam4"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam4)){    echo '0';}else {    echo $data->mg_forma_cam4;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts4" class="form-control"
                            value="<?php if(empty($data->mg_pts4)){    echo '0';}else {    echo $data->mg_pts4;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc4" class="linhas form-control" cols="30"
                            rows="10"
                            style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc4)){    echo '';}else {    echo $data->mg_desc4;}?></textarea>

                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-6 Grimorio-L">
                        <label for="">Nome</label><input type="text" name="mg_nome5" class="form-control"
                            value="<?php if(empty($data->mg_nome5)){    echo '';}else {    echo $data->mg_nome5;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam5"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam5)){    echo '0';}else {    echo $data->mg_forma_cam5;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts5" class="form-control"
                            value="<?php if(empty($data->mg_pts5)){    echo '0';}else {    echo $data->mg_pts5;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc5" class="linhas form-control" cols="30"
                            rows="10"><?php if(empty($data->mg_desc5)){    echo '';}else {    echo $data->mg_desc5;}?></textarea>
                    </div>
                    <div class="col col-sm-6 Grimorio-R">
                        <label for="">Nome</label><input type="text" name="mg_nome6" class="form-control"
                            value="<?php if(empty($data->mg_nome6)){    echo '';}else {    echo $data->mg_nome6;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam6"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam6)){    echo '0';}else {    echo $data->mg_forma_cam6;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts6" class="form-control"
                            value="<?php if(empty($data->mg_pts6)){    echo '0';}else {    echo $data->mg_pts6;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc6" class="linhas form-control" cols="30"
                            rows="10"
                            style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc6)){    echo '';}else {    echo $data->mg_desc6;}?></textarea>

                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-6 Grimorio-L">
                        <label for="">Nome</label><input type="text" name="mg_nome7" class="form-control"
                            value="<?php if(empty($data->mg_nome7)){    echo '';}else {    echo $data->mg_nome7;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam7"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam7)){    echo '0';}else {    echo $data->mg_forma_cam7;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts7" class="form-control"
                            value="<?php if(empty($data->mg_pts7)){    echo '0';}else {    echo $data->mg_pts7;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc7" class="linhas form-control" cols="30"
                            rows="10"><<?php if(empty($data->mg_desc7)){    echo '';}else {    echo $data->mg_desc7;}?></textarea>
                    </div>
                    <div class="col col-sm-6 Grimorio-R">
                        <label for="">Nome</label><input type="text" name="mg_nome8" class="form-control"
                            value="<?php if(empty($data->mg_nome8)){    echo '';}else {    echo $data->mg_nome8;}?>">
                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam8"
                            class="form-control"
                            value="<?php if(empty($data->mg_forma_cam8)){    echo '0';}else {    echo $data->mg_forma_cam8;}?>">
                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts8" class="form-control"
                            value="<?php if(empty($data->mg_pts8)){    echo '0';}else {    echo $data->mg_pts8;}?>">
                        <label for="">Descrição</label><textarea name="mg_desc8" class="linhas form-control" cols="30"
                            rows="10"
                            style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc8)){    echo '';}else {    echo $data->mg_desc8;}?></textarea>

                    </div>
                </div>
            </div>
        </div>

        <!-- ABA APRIMORAMENTOS -->
        <div class="aprimoramentos">
            <div class="" id="atributos-tag">
                <h4>APRIMORAMENTOS <buttom class='btn add_pericia' id="btn-add-apri"
                        style="float:right; margin-left:12px">ADD</buttom>
                    <buttom class='btn add_pericia' id="btn-sub-apri" style="float:right">REMOVE</buttom>
                </h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-5 atributos"><label for="">Nome</label></div>
                    <div class="col col-sm-2 atributos"><label for="">Custo</label></div>
                    <div class="col col-sm-5 atributos"><label for="">Descrição</label></div>
                </div>

                <div class="all_apri">
                    <?php 
                        $numapri = $data->numApri;
                                $a = 1;
                                for($i=1;$i<=$numapri;$i++){
                                $anome = 'apri_nome'.$a;
                                $acusto = 'apri_custo'.$a;
                                $adesc = 'apri_desc'.$a;
                         
                        ?>
                    <div class="row" id="row_apri<?php echo $a; ?>">
                        <div class="col col-sm-5 div_for"><input type="text" name="apri_nome<?php echo $a;?>"
                                class="form-control"
                                value="<?php if(empty($data->$anome)){    echo '';}else {    echo $data->$anome;}?>">
                        </div>
                        <div class="col col-sm-2 div_for"><input type="number" name="apri_custo<?php echo $a;?>" id=""
                                class="form-control"
                                value="<?php if(empty($data->$acusto)){    echo '0';}else {    echo $data->$acusto;}?>">
                        </div>
                        <div class="col col-sm-5 div_for"><input type="text" name="apri_desc<?php echo $a;?>"
                                class="form-control"
                                value="<?php if(empty($data->$adesc)){    echo '';}else {    echo $data->$adesc;}?>">
                        </div>
                    </div>
                    <?php $a++; } ?>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>