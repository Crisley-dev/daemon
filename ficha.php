<?php

require_once "manage.php";



?>

<!-- IMPÓRTS -->


<link rel="stylesheet" href="style.css">

<script src="https://kit.fontawesome.com/c2d6a5c364.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="function.js"></script>


<title>Ficha</title>

<!-- ANCHOR ABA INFO & ATRIBUTOS -->

<div class="card corpo">
   
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav">
                                <li class="nav-item">
                                        <label for="" id="lb_biografia" class="nav-link">Biografia</label>
                                </li>
                                <li class="nav-item">
                                        <label class="nav-link" id="lb_info">Info & Atributos</label>
                                </li>
                                <li class="nav-item">
                                        <label class="nav-link" id="lb_pericia">Pericias</label>
                                </li>
                                <li class="nav-item">
                                        <label class="nav-link" id="lb_combate">Combate</label>
                                </li>
                                <li class="nav-item">
                                        <label class="nav-link" id="lb_equip">Equipamentos</label>
                                </li>
                                <li class="nav-item">
                                        <label class="nav-link" id="lb_magia">Magia</label>
                                </li>
                                <li class="nav-item">
                                        <label class="nav-link" id="lb_aprim">Aprimoramentos</label>
                                </li>
                                <li class="nav-item pull-right">
                                        <label class="nav-link" id="logout"><a id="alogout" href="logout.php">Sair</a></label>
                                </li>
                        </ul>
                </div>
        </nav>
        <div class="main">
        <div class="atrib_info">
                <h2>FICHA DO <?php echo strtoupper($player); ?></h2>
                <hr>
                <form id="form_daemon" name="form_daemon" method="POST">
                        <input type="hidden" name="player" value="<?php echo ($player); ?>">
                        <input type="hidden" name="numPericias" id="numPericias" value="<?php if(empty($data->numPericias)){    echo '1';}else {    echo $data->numPericias;}?>">
                        <div class="row">
                                <div class="col col-sm-4 ">
                                        <img src="logo.png" alt="" height="200" width="300" id="pjimg">
                                </div>
                                <div class="col col-sm-4">
                                        <input type="text" class="form-control" name="pj_name"
                                                value="<?php if(empty($data->pj_name)){    echo '0';}else {    echo $data->pj_name;}?>"><label class="pj_info"
                                                for="pj_name">NOME</label>
                                        <input type="text" class="form-control" name="pj_age" value="<?php if(empty($data->pj_age)){    echo '0';}else {    echo $data->pj_age;}?>"><label class="pj_info"
                                                for="pj_age">IDADE</label>
                                        <input type="text" class="form-control" name="pj_sex" value="<?php if(empty($data->pj_sex)){    echo '0';}else {    echo $data->pj_sex;}?>"><label class="pj_info"
                                                for="pj_sex">SEXO</label>

                                </div>
                                <div class="col col-sm-4">
                                        <input type="text" class="form-control" name="pj_race" value="<?php if(empty($data->pj_race)){    echo '0';}else {    echo $data->pj_race;}?>"><label class="pj_info"
                                                for="pj_race">RAÇA</label>
                                        <input type="text" class="form-control" name="pj_level" value="<?php if(empty($data->pj_level)){    echo '0';}else {    echo $data->pj_level;}?>"><label class="pj_info"
                                                for="pj_level">NIVEL</label>
                                        <input type="text" class="form-control" name="pj_exp" value="<?php if(empty($data->pj_exp)){    echo '0';}else {    echo $data->pj_exp;}?>"><label class="pj_info"
                                                for="pj_exp">EXPERIENCIA</label>
                                </div>

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
                                <!-- ANCHOR ATRIBUTO FORÇA -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">FOR</label></div>
                                        <div class="col div_for"><input type="number" min="0"
                                                        class="form-control atrib atr_for" name="atr_for_orig"
                                                        value="<?php if(empty($data->atr_for_orig)){    echo '0';}else {    echo $data->atr_for_orig;}?>">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_for_temp)){    echo '0';}else {    echo $data->atr_for_temp;}?>"
                                                        class="form-control atrib atr_for" name="atr_for_temp" value>
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_for_mod)){    echo '0';}else {    echo $data->atr_for_mod;}?>"
                                                        class="form-control atrib atr_for" name="atr_for_mod">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_for_teste)){    echo '0';}else {    echo $data->atr_for_teste;}?>"
                                                        class="form-control atrib atr_for" name="atr_for_teste">
                                        </div>
                                        <div class="col dado div_for" ></div>
                                </div>
                                <!-- ANCHOR ATRIBUTO CONSTITUICAO -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">CON</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_con_orig)){    echo '0';}else {    echo $data->atr_con_orig;}?>"
                                                        class="form-control atrib atr_for" name="atr_con_orig">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_con_temp)){    echo '0';}else {    echo $data->atr_con_temp;}?>"
                                                        class="form-control atrib atr_for" name="atr_con_temp">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_con_mod)){    echo '0';}else {    echo $data->atr_con_mod;}?>"
                                                        class="form-control atrib atr_for" name="atr_con_mod">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_con_teste)){    echo '0';}else {    echo $data->atr_con_teste;}?>"
                                                        class="form-control atrib atr_for" name="atr_con_teste">
                                        </div>
                                        <div class="col dado div_for" ></div>
                                </div>
                                <!-- ANCHOR ATRIBUTO DESTREZA -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">DES</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_des_orig)){    echo '0';}else {    echo $data->atr_des_orig;}?>"
                                                        class="form-control atrib atr_for" name="atr_des_orig">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_des_temp)){    echo '0';}else {    echo $data->atr_des_temp;}?>"
                                                        class="form-control atrib atr_for" name="atr_des_temp">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_des_mod)){    echo '0';}else {    echo $data->atr_des_mod;}?>"
                                                        class="form-control atrib atr_for" name="atr_des_mod">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_des_teste)){    echo '0';}else {    echo $data->atr_des_teste;}?>"
                                                        class="form-control atrib atr_for" name="atr_des_teste">
                                        </div>
                                        <div class="col dado div_for" ></div>
                                </div>
                                <!-- ANCHOR ATRIBUTO AGILIDADE -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">AGI</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_agi_orig)){    echo '0';}else {    echo $data->atr_agi_orig;}?>"
                                                        class="form-control atrib atr_for" name="atr_agi_orig">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_agi_temp)){    echo '0';}else {    echo $data->atr_agi_temp;}?>"
                                                        class="form-control atrib atr_for" name="atr_agi_temp">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_agi_mod)){    echo '0';}else {    echo $data->atr_agi_mod;}?>"
                                                        class="form-control atrib atr_for" name="atr_agi_mod">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_agi_teste)){    echo '0';}else {    echo $data->atr_agi_teste;}?>"
                                                        class="form-control atrib atr_for" name="atr_agi_teste">
                                        </div>
                                        <div class="col dado div_for" ></div>
                                </div>
                                <!-- ANCHOR ATRIBUTO PERCEPÇAO -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">PER</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_per_orig)){    echo '0';}else {    echo $data->atr_per_orig;}?>"
                                                        class="form-control atrib atr_for" name="atr_per_orig">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_per_temp)){    echo '0';}else {    echo $data->atr_per_temp;}?>"
                                                        class="form-control atrib atr_for" name="atr_per_temp">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_per_mod)){    echo '0';}else {    echo $data->atr_per_mod;}?>"
                                                        class="form-control atrib atr_for" name="atr_per_mod">
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_per_teste)){    echo '0';}else {    echo $data->atr_per_teste;}?>"
                                                        class="form-control atrib atr_for" name="atr_per_teste">
                                        </div>
                                        <div class="col dado div_for" ></div>
                                </div>
                                <!-- ANCHOR ATRIBUTO INTELIGENCIA -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">INT</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_int_orig)){    echo '0';}else {    echo $data->atr_int_orig;}?>"
                                                class="form-control atrib atr_for" name="atr_int_orig">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_int_temp)){    echo '0';}else {    echo $data->atr_int_temp;}?>"
                                                class="form-control atrib atr_for" name="atr_int_temp">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_int_mod)){    echo '0';}else {    echo $data->atr_int_mod;}?>"
                                                class="form-control atrib atr_for" name="atr_int_mod">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_int_teste)){    echo '0';}else {    echo $data->atr_int_teste;}?>"
                                                class="form-control atrib atr_for" name="atr_int_teste">
                                </div>
                                <div class="col dado div_for" ></div>
                                </div>
                                <!-- ANCHOR ATRIBUTO VONTADE -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">VON</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_von_orig)){    echo '0';}else {    echo $data->atr_von_orig;}?>"
                                                class="form-control atrib atr_for" name="atr_von_orig">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_von_temp)){    echo '0';}else {    echo $data->atr_von_temp;}?>"
                                                class="form-control atrib atr_for" name="atr_von_temp">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_von_mod)){    echo '0';}else {    echo $data->atr_von_mod;}?>"
                                                class="form-control atrib atr_for" name="atr_von_mod">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_von_teste)){    echo '0';}else {    echo $data->atr_von_teste;}?>"
                                                class="form-control atrib atr_for" name="atr_von_teste">
                                </div>
                                <div class="col dado div_for" ></div>
                                </div>
                                <!-- ANCHOR ATRIBUTO CARISMA -->
                                <div class="row">
                                        <div class="col "><label for="" class="pj_info">CAR</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_car_orig)){    echo '0';}else {    echo $data->atr_car_orig;}?>"
                                                class="form-control atrib atr_for" name="atr_car_orig">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_car_temp)){    echo '0';}else {    echo $data->atr_car_temp;}?>"
                                                class="form-control atrib atr_for" name="atr_car_temp">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_car_mod)){    echo '0';}else {    echo $data->atr_car_mod;}?>"
                                                class="form-control atrib atr_for" name="atr_car_mod">
                                </div>
                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->atr_car_teste)){    echo '0';}else {    echo $data->atr_car_teste;}?>"
                                                class="form-control atrib atr_for" name="atr_car_teste">
                                </div>
                                <div class="col dado div_for" ></div>
                                </div>
                        </div>

                        <!-- ANCHOR PLAYER INFO -->

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
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->pv)){    echo '0';}else {    echo $data->pv;}?>"
                                                        class="form-control atrib" name="pv"></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->pv_atual)){    echo '0';}else {    echo $data->pv_atual;}?>"
                                                        class="form-control atrib" name="pv_atual"></div>
                                        <div class="col div_for"><label for=""
                                                        style="float:right;padding-right:20px">PM's</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->pm)){    echo '0';}else {    echo $data->pm;}?>"
                                                        class="form-control atrib" name="pm"></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->pm_atual)){    echo '0';}else {    echo $data->pm_atual;}?>"
                                                        class="form-control atrib" name="pm_atual"></div>
                                </div>

                                <div class="row">
                                        <div class="col div_for"><label for="" style="padding-left:60px">PH's</label>
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->ph)){    echo '0';}else {    echo $data->ph;}?>"
                                                        class="form-control atrib" name="ph"></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->ph_atual)){    echo '0';}else {    echo $data->ph_atual;}?>"
                                                        class="form-control atrib" name="ph_atual"></div>
                                        <div class="col div_for"><label for=""
                                                        style="float:right;padding-right:20px">P.FÉ</label></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->pfe)){    echo '0';}else {    echo $data->pfe;}?>"
                                                        class="form-control atrib" name="pfe"></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->pfe_atual)){    echo '0';}else {    echo $data->pfe_atual;}?>"
                                                        class="form-control atrib" name="pfe_atual"></div>
                                </div>

                                <div class="row">
                                        <div class="col div_for"><label for="" style="padding-left:60px">SANIDADE</label>
                                        </div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->sanity)){    echo '0';}else {    echo $data->sanity;}?>"
                                                        class="form-control atrib" name="sanity"></div>
                                        <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->san_atual)){    echo '0';}else {    echo $data->san_atual;}?>"
                                                        class="form-control atrib" name="san_atual"></div>
                                                        <div class="col div_for"><label for=""
                                                                style="float:right;padding-right:20px">SORTE</label></div>
                                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->luck)){    echo '0';}else {    echo $data->luck;}?>"
                                                                class="form-control atrib" name="luck"></div>
                                                <div class="col div_for"><input type="number" min="0" value="<?php if(empty($data->luck_atual)){    echo '0';}else {    echo $data->luck_atual;}?>"
                                                                class="form-control atrib" name="luck_atual"></div>
                                </div>
                        </div>
        </div>


        <!-- ANCHOR ABA BIOGRAFIA -->
        <div class="bio">
                <div class="container">
                        
              
                <h4 id="atributos-tag">BIOGRAFIA</h4>
                <div class="row" style="margin-bottom: 26px;">
                        <div class="col com-sm-4"> </div>
                        <div class="col com-sm-4">
                                <label for="pj_img">                
                                        <img src="<?php echo $data->pj_img;?>" alt="Foto Personagem" height="400" width="400" id="player_img" style="margin-left: 12px;">
                                </label>
                        </div>
                        
                        <input type="file" name="pj_img" id="pj_img">
                        <input type="hidden" name="checkImg" id="checkImg" value="<?php echo $data->checkImg;?>">
                        <div class="col com-sm-4"> </div>
                </div>
                <div class="row">
                <textarea name="biografia" id="pj_bio" class="form-control linhas" cols="60" rows="10" style="width: 65rem; height: 40rem"> <?php if(empty($data->biografia)){    echo '';}else {    echo $data->biografia;}?></textarea>
                </div>
        </div>
</div>

        <!-- ANCHOR PERICIAS -->

        <div class="pericias">
                <h4 id="atributos-tag">PERICIAS <buttom class='btn add_pericia' id="btn-add-pericia" style="float:right">ADD</buttom> <input type="number" min="<?php echo $data->numPericias;?>" name="countpericia" id="countpericia" style="float:right;text-align:center;"></h4>
                
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
                         <div class="row row_pericia">
    <div class="col div_for "><input type="text" class="form-control pericia" name="pericia<?php echo $j; ?>" id="pericia<?php echo $j; ?>"
            value="<?php if(empty($data->$pericia)){    echo '';}else {    echo $data->$pericia;}?>"></div>
    <div class="col div_for "><select name="base<?php echo $j; ?>" id="base<?php echo $j; ?>" class="form-control pericia"
            style="text-transform: uppercase;">

            <option selected hidden value="<?php if(empty($data->$base)){    echo '0';}else {    echo $data->$base;}?>"><?php if(empty($data->$base)){    echo '0';}else {    echo $data->$base;}?>
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
        <!-- COMBATE -->
        <div class="combate">
                <h4 id="atributos-tag">COMBATE</h4>
                <div class="contaier">
                        <div class="row">
                                <div class="col atributos"><label for="">Nome</label></div>
                                <div class="col atributos"><label for="">Base</label></div>
                                <div class="col atributos"><label for="">Gasto</label></div>
                                <div class="col atributos"><label for="">%Ataque</label></div>
                                <div class="col atributos"><label for="">%Defesa</label></div>
                                <div class="col atributos"><label for="">Dano</label></div>

                        </div>
                        <div class="row row_combate">
                                <div class="col div_for"><input type="text" name="combate1" class="form-control" value="<?php if(empty($data->combate1)){    echo '';}else {    echo $data->combate1;}?>"></div>
                                <div class="col div_for"><select name="combateBase1" id="combateBase1"
                                                class="form-control">
                                                <option value="<?php if(empty($data->combateBase1)){    echo '0';}else {    echo $data->combateBase1;}?>"><?php if(empty($data->combateBase1)){    echo '0';}else {    echo $data->combateBase1;}?></option>
                                                <option value="for">FOR</option>
                                                <option value="con">CON</option>
                                                <option value="des">DES</option>
                                                <option value="agi">AGI</option>
                                                <option value="per">PER</option>
                                                <option value="int">INT</option>
                                                <option value="von">VON</option>
                                                <option value="car">CAR</option>
                                        </select></div>
                                <div class="col div_for"><input type="number" name="combateGasto1" class="form-control" value="<?php if(empty($data->combateGasto1)){    echo '0';}else {    echo $data->combateGasto1;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateAtk1" class="form-control" value="<?php if(empty($data->combateAtk1)){    echo '0';}else {    echo $data->combateAtk1;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateDef1" class="form-control" value="<?php if(empty($data->combateDef1)){    echo '0';}else {    echo $data->combateDef1;}?>">
                                </div>
                                <div class="col div_for"><input type="text" name="combateDano1" class="form-control" value="<?php if(empty($data->combateDano1)){    echo '0';}else {    echo $data->combateDano1;}?>">
                                </div>
                        </div>

                        <div class="row row_combate">
                                <div class="col div_for"><input type="text" name="combate2" class="form-control" value="<?php if(empty($data->combate2)){    echo '';}else {    echo $data->combate2;}?>"></div>
                                <div class="col div_for"><select name="combateBase2" id="combateBase2"
                                                class="form-control">
                                                <option value="<?php if(empty($data->combateBase2)){    echo '0';}else {    echo $data->combateBase2;}?>"><?php if(empty($data->combateBase2)){    echo '0';}else {    echo $data->combateBase2;}?></option>
                                                <option value="for">FOR</option>
                                                <option value="con">CON</option>
                                                <option value="des">DES</option>
                                                <option value="agi">AGI</option>
                                                <option value="per">PER</option>
                                                <option value="int">INT</option>
                                                <option value="von">VON</option>
                                                <option value="car">CAR</option>
                                        </select></div>
                                <div class="col div_for"><input type="number" name="combateGasto2" class="form-control" value="<?php if(empty($data->combateGasto2)){    echo '0';}else {    echo $data->combateGasto2;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateAtk2" class="form-control" value="<?php if(empty($data->combateAtk2)){    echo '0';}else {    echo $data->combateAtk2;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateDef2" class="form-control" value="<?php if(empty($data->combateDef2)){    echo '0';}else {    echo $data->combateDef2;}?>">
                                </div>
                                <div class="col div_for"><input type="text" name="combateDano2" class="form-control" value="<?php if(empty($data->combateDano2)){    echo '0';}else {    echo $data->combateDano2;}?>">
                                </div>
                        </div>

                        <div class="row row_combate">
                                <div class="col div_for"><input type="text" name="combate3" class="form-control" value="<?php if(empty($data->combate3)){    echo '';}else {    echo $data->combate3;}?>"></div>
                                <div class="col div_for"><select name="combateBase3" id="combateBase3"
                                                class="form-control">
                                                <option value="<?php if(empty($data->combateBase3)){    echo '0';}else {    echo $data->combateBase3;}?>"><?php if(empty($data->combateBase3)){    echo '0';}else {    echo $data->combateBase3;}?></option>
                                                <option value="for">FOR</option>
                                                <option value="con">CON</option>
                                                <option value="des">DES</option>
                                                <option value="agi">AGI</option>
                                                <option value="per">PER</option>
                                                <option value="int">INT</option>
                                                <option value="von">VON</option>
                                                <option value="car">CAR</option>
                                        </select></div>
                                <div class="col div_for"><input type="number" name="combateGasto3" class="form-control" value="<?php if(empty($data->combateGasto3)){    echo '0';}else {    echo $data->combateGasto3;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateAtk3" class="form-control" value="<?php if(empty($data->combateAtk3)){    echo '0';}else {    echo $data->combateAtk3;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateDef3" class="form-control" value="<?php if(empty($data->combateDef3)){    echo '0';}else {    echo $data->combateDef3;}?>">
                                </div>
                                <div class="col div_for"><input type="text" name="combateDano3" class="form-control" value="<?php if(empty($data->combateDano3)){    echo '0';}else {    echo $data->combateDano3;}?>">
                                </div>
                        </div>

                        
                        <div class="row row_combate">
                                <div class="col div_for"><input type="text" name="combate4" class="form-control" value="<?php if(empty($data->combate4)){    echo '';}else {    echo $data->combate4;}?>"></div>
                                <div class="col div_for"><select name="combateBase4" id="combateBase4"
                                                class="form-control">
                                                <option value="<?php if(empty($data->combateBase4)){    echo '0';}else {    echo $data->combateBase4;}?>"><?php if(empty($data->combateBase4)){    echo '0';}else {    echo $data->combateBase4;}?></option>
                                                <option value="for">FOR</option>
                                                <option value="con">CON</option>
                                                <option value="des">DES</option>
                                                <option value="agi">AGI</option>
                                                <option value="per">PER</option>
                                                <option value="int">INT</option>
                                                <option value="von">VON</option>
                                                <option value="car">CAR</option>
                                        </select></div>
                                <div class="col div_for"><input type="number" name="combateGasto4" class="form-control" value="<?php if(empty($data->combateGasto4)){    echo '0';}else {    echo $data->combateGasto4;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateAtk4" class="form-control" value="<?php if(empty($data->combateAtk4)){    echo '0';}else {    echo $data->combateAtk4;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateDef4" class="form-control" value="<?php if(empty($data->combateDef4)){    echo '0';}else {    echo $data->combateDef4;}?>">
                                </div>
                                <div class="col div_for"><input type="text" name="combateDano4" class="form-control" value="<?php if(empty($data->combateDano4)){    echo '0';}else {    echo $data->combateDano4;}?>">
                                </div>
                        </div>

                        <div class="row row_combate">
                                <div class="col div_for"><input type="text" name="combate5" class="form-control" value="<?php if(empty($data->combate5)){    echo '';}else {    echo $data->combate5;}?>"></div>
                                <div class="col div_for"><select name="combateBase5" id="combateBase5"
                                                class="form-control">
                                                <option value="<?php if(empty($data->combateBase5)){    echo '0';}else {    echo $data->combateBase5;}?>"><?php if(empty($data->combateBase5)){    echo '0';}else {    echo $data->combateBase5;}?></option>
                                                <option value="for">FOR</option>
                                                <option value="con">CON</option>
                                                <option value="des">DES</option>
                                                <option value="agi">AGI</option>
                                                <option value="per">PER</option>
                                                <option value="int">INT</option>
                                                <option value="von">VON</option>
                                                <option value="car">CAR</option>
                                        </select></div>
                                <div class="col div_for"><input type="number" name="combateGasto5" class="form-control" value="<?php if(empty($data->combateGasto5)){    echo '0';}else {    echo $data->combateGasto5;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateAtk5" class="form-control" value="<?php if(empty($data->combateAtk5)){    echo '0';}else {    echo $data->combateAtk5;}?>">
                                </div>
                                <div class="col div_for"><input type="number" name="combateDef5" class="form-control" value="<?php if(empty($data->combateDef5)){    echo '0';}else {    echo $data->combateDef5;}?>">
                                </div>
                                <div class="col div_for"><input type="text" name="combateDano5" class="form-control" value="<?php if(empty($data->combateDano5)){    echo '0';}else {    echo $data->combateDano5;}?>">
                                </div>
                        </div>

                 </div>
                <!-- Equipamentos -->

        </div>

        <div class="equipamentos">
                <h4 id="atributos-tag">EQUIPAMENTOS</h4>
                <div class="container">
                        <div class="row">
                                <div class="col atributos"><label for="">Nome</label></div>
                                <div class="col atributos"><label for="">Quant.</label></div>
                                <div class="col atributos"><label for="">Peso</label></div>
                                <div class="col atributos"><label for="">Durabilidade</label></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip1" class="form-control" value="<?php if(empty($data->equip1)){    echo '';}else {    echo $data->equip1;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant1" class="form-control" value="<?php if(empty($data->quant1)){    echo '0';}else {    echo $data->quant1;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso1" class="form-control" value="<?php if(empty($data->peso1)){    echo '';}else {    echo $data->peso1;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura1" class="form-control" value="<?php if(empty($data->dura1)){    echo '';}else {    echo $data->dura1;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip2" class="form-control" value="<?php if(empty($data->equip2)){    echo '';}else {    echo $data->equip2;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant2" class="form-control" value="<?php if(empty($data->quant2)){    echo '0';}else {    echo $data->quant2;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso2" class="form-control" value="<?php if(empty($data->peso2)){    echo '';}else {    echo $data->peso2;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura2" class="form-control" value="<?php if(empty($data->dura2)){    echo '';}else {    echo $data->dura2;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip3" class="form-control" value="<?php if(empty($data->equip3)){    echo '';}else {    echo $data->equip3;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant3" class="form-control" value="<?php if(empty($data->quant3)){    echo '0';}else {    echo $data->quant3;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso3" class="form-control" value="<?php if(empty($data->peso3)){    echo '';}else {    echo $data->peso3;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura3" class="form-control" value="<?php if(empty($data->dura3)){    echo '';}else {    echo $data->dura3;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip4" class="form-control" value="<?php if(empty($data->equip4)){    echo '';}else {    echo $data->equip4;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant4" class="form-control" value="<?php if(empty($data->quant4)){    echo '0';}else {    echo $data->quant4;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso4" class="form-control" value="<?php if(empty($data->peso4)){    echo '';}else {    echo $data->peso4;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura4" class="form-control" value="<?php if(empty($data->dura4)){    echo '';}else {    echo $data->dura4;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip5" class="form-control" value="<?php if(empty($data->equip5)){    echo '';}else {    echo $data->equip5;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant5" class="form-control" value="<?php if(empty($data->quant5)){    echo '0';}else {    echo $data->quant5;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso5" class="form-control" value="<?php if(empty($data->peso5)){    echo '';}else {    echo $data->peso5;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura5" class="form-control" value="<?php if(empty($data->dura5)){    echo '';}else {    echo $data->dura5;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip6" class="form-control" value="<?php if(empty($data->equip6)){    echo '';}else {    echo $data->equip6;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant6" class="form-control" value="<?php if(empty($data->quant6)){    echo '0';}else {    echo $data->quant6;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso6" class="form-control" value="<?php if(empty($data->peso6)){    echo '';}else {    echo $data->peso6;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura6" class="form-control" value="<?php if(empty($data->dura6)){    echo '';}else {    echo $data->dura6;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip7" class="form-control" value="<?php if(empty($data->equip7)){    echo '';}else {    echo $data->equip7;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant7" class="form-control" value="<?php if(empty($data->quant7)){    echo '0';}else {    echo $data->quant7;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso7" class="form-control" value="<?php if(empty($data->peso7)){    echo '';}else {    echo $data->peso7;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura7" class="form-control" value="<?php if(empty($data->dura7)){    echo '';}else {    echo $data->dura7;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip8" class="form-control" value="<?php if(empty($data->equip8)){    echo '';}else {    echo $data->equip8;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant8" class="form-control" value="<?php if(empty($data->quant8)){    echo '0';}else {    echo $data->quant8;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso8" class="form-control" value="<?php if(empty($data->peso8)){    echo '';}else {    echo $data->peso8;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura8" class="form-control" value="<?php if(empty($data->dura8)){    echo '';}else {    echo $data->dura8;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip9" class="form-control" value="<?php if(empty($data->equip9)){    echo '';}else {    echo $data->equip9;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant9" class="form-control" value="<?php if(empty($data->quant9)){    echo '0';}else {    echo $data->quant9;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso9" class="form-control" value="<?php if(empty($data->peso9)){    echo '';}else {    echo $data->peso9;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura9" class="form-control" value="<?php if(empty($data->dura9)){    echo '';}else {    echo $data->dura9;}?>"></div>
                        </div>

                         <div class="row">
                                <div class="col div_for"><input type="text" name="equip10" class="form-control" value="<?php if(empty($data->equip10)){    echo '';}else {    echo $data->equip10;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant10" class="form-control" value="<?php if(empty($data->quant10)){    echo '0';}else {    echo $data->quant10;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso10" class="form-control" value="<?php if(empty($data->peso10)){    echo '';}else {    echo $data->peso10;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura10" class="form-control" value="<?php if(empty($data->dura10)){    echo '';}else {    echo $data->dura10;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip11" class="form-control" value="<?php if(empty($data->equip11)){    echo '';}else {    echo $data->equip11;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant11" class="form-control" value="<?php if(empty($data->quant11)){    echo '0';}else {    echo $data->quant11;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso11" class="form-control" value="<?php if(empty($data->peso11)){    echo '';}else {    echo $data->peso11;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura11" class="form-control" value="<?php if(empty($data->dura11)){    echo '';}else {    echo $data->dura11;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip12" class="form-control" value="<?php if(empty($data->equip12)){    echo '';}else {    echo $data->equip12;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant12" class="form-control" value="<?php if(empty($data->quant12)){    echo '0';}else {    echo $data->quant12;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso12" class="form-control" value="<?php if(empty($data->peso12)){    echo '';}else {    echo $data->peso12;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura12" class="form-control" value="<?php if(empty($data->dura12)){    echo '';}else {    echo $data->dura12;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip13" class="form-control" value="<?php if(empty($data->equip13)){    echo '';}else {    echo $data->equip13;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant13" class="form-control" value="<?php if(empty($data->quant13)){    echo '0';}else {    echo $data->quant13;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso13" class="form-control" value="<?php if(empty($data->peso13)){    echo '';}else {    echo $data->peso13;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura13" class="form-control" value="<?php if(empty($data->dura13)){    echo '';}else {    echo $data->dura13;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip14" class="form-control" value="<?php if(empty($data->equip14)){    echo '';}else {    echo $data->equip14;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant14" class="form-control" value="<?php if(empty($data->quant14)){    echo '0';}else {    echo $data->quant14;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso14" class="form-control" value="<?php if(empty($data->peso14)){    echo '';}else {    echo $data->peso14;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura14" class="form-control" value="<?php if(empty($data->dura14)){    echo '';}else {    echo $data->dura14;}?>"></div>
                        </div>

                        <div class="row">
                                <div class="col div_for"><input type="text" name="equip15" class="form-control" value="<?php if(empty($data->equip15)){    echo '';}else {    echo $data->equip15;}?>"></div>
                                <div class="col div_for"><input type="number" name="quant15" class="form-control" value="<?php if(empty($data->quant15)){    echo '0';}else {    echo $data->quant15;}?>"></div>
                                <div class="col div_for"><input type="text" name="peso15" class="form-control" value="<?php if(empty($data->peso15)){    echo '';}else {    echo $data->peso15;}?>"></div>
                                <div class="col div_for"><input type="text" name="dura15" class="form-control" value="<?php if(empty($data->dura15)){    echo '';}else {    echo $data->dura15;}?>"></div>
                        </div>

                </div>
        </div>

        <div class="magia">
                <h4 id="atributos-tag">FORMAS E CAMINHOS</h4>
                <div class="container">
                        <div class="row">
                                <div class="col col-sm-2">
                                        <label  for="">Fogo</label> <input type="number" class="form-control"
                                                name="cam_fogo" value="<?php if(empty($data->cam_fogo)){    echo '0';}else {    echo $data->cam_fogo;}?>">
                                        <label for="" >Ar</label> <input type="number" class="form-control"
                                                name="cam_ar" value="<?php if(empty($data->cam_ar)){    echo '0';}else {    echo $data->cam_ar;}?>">
                                        <label for="">Luz</label> <input type="number" class="form-control"
                                                name="cam_luz" value="<?php if(empty($data->cam_luz)){    echo '0';}else {    echo $data->cam_luz;}?>">
                                        <label for="">Plantas</label> <input type="number" class="form-control"
                                                name="cam_plantas" value="<?php if(empty($data->cam_plantas)){    echo '0';}else {    echo $data->cam_plantas;}?>">
                                        <label for="">Humanos</label> <input type="number" class="form-control"
                                                name="cam_humanos" value="<?php if(empty($data->cam_humanos)){    echo '0';}else {    echo $data->cam_humanos;}?>">
                                        <label for="">Metamagia</label> <input type="number" class="form-control"
                                                name="cam_metamagia" value="<?php if(empty($data->cam_metamagia)){    echo '0';}else {    echo $data->cam_metamagia;}?>">
                                </div>

                                <div class="col col-sm-3"></div>

                                <div class="col col-sm-2 atributos">

                                        <label  for="">Entender</label><input type="number" class="form-control faL" name="forma_entender" value="<?php if(empty($data->forma_entender)){    echo '0';}else {    echo $data->forma_entender;}?>">
                                        <br><br> <br><br>
                                        <label   for="">Criar</label><input type="number" class="form-control faL" name="forma_criar" value="<?php if(empty($data->forma_criar)){    echo '0';}else {    echo $data->forma_criar;}?>">
                                        <br><br> <br><br>
                                        <label  for="">Controlar</label><input type="number" class="form-control faL" name="forma_controlar" value="<?php if(empty($data->forma_controlar)){    echo '0';}else {    echo $data->forma_controlar;}?>">
                                </div>
                                <div class="col col-sm-3"></div>


                                <div class="col col-sm-2 atributos">
                                        <label for="">Agua</label> <input type="number" class="form-control"
                                                name="cam_agua" value="<?php if(empty($data->cam_agua)){    echo '0';}else {    echo $data->cam_agua;}?>">
                                        <label for="">Terra</label> <input type="number" class="form-control"
                                                name="cam_terra" value="<?php if(empty($data->cam_terra)){    echo '0';}else {    echo $data->cam_terra;}?>">
                                        <label for="">Trevas</label> <input type="number" class="form-control"
                                                name="cam_trevas" value="<?php if(empty($data->cam_trevas)){    echo '0';}else {    echo $data->cam_trevas;}?>">
                                        <label for="">Animais</label> <input type="number" class="form-control"
                                                name="cam_animais" value="<?php if(empty($data->cam_animais)){    echo '0';}else {    echo $data->cam_animais;}?>">
                                        <label for="">Spiritum</label> <input type="number" class="form-control"
                                                name="cam_spiritum" value="<?php if(empty($data->cam_spiritum)){    echo '0';}else {    echo $data->cam_spiritum;}?>">
                                        <label for="">Arkanun</label> <input type="number" class="form-control"
                                                name="cam_arkanun" value="<?php if(empty($data->cam_arkanun)){    echo '0';}else {    echo $data->cam_arkanun;}?>">

                                </div>
                        </div>
                        <h4 id="atributos-tag">GRIMORIO <i class="fas fa-book-open"></i></h4>
                        <div class="row">
                                <div class="col col-sm-6 Grimorio-L">
                                        <label for="">Nome</label><input type="text" name="mg_nome1"
                                                class="form-control" value="<?php if(empty($data->mg_nome1)){    echo '';}else {    echo $data->mg_nome1;}?>">
                                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam1"
                                                class="form-control" value="<?php if(empty($data->mg_forma_cam1)){    echo '0';}else {    echo $data->mg_forma_cam1;}?>">
                                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts1"
                                                class="form-control" value="<?php if(empty($data->mg_pts1)){    echo '0';}else {    echo $data->mg_pts1;}?>">
                                        <label for="">Descrição</label><textarea name="mg_desc1"
                                                class="linhas form-control" cols="30" rows="10"><?php if(empty($data->mg_desc1)){    echo '';}else {    echo $data->mg_desc1;}?></textarea>
                                </div>
                                <div class="col col-sm-6 Grimorio-R">
                                        <label for="">Nome</label><input type="text" name="mg_nome2"
                                                class="form-control" value="<?php if(empty($data->mg_nome2)){    echo '';}else {    echo $data->mg_nome2;}?>">
                                        <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam2"
                                                class="form-control" value="<?php if(empty($data->mg_forma_cam2)){    echo '0';}else {    echo $data->mg_forma_cam2;}?>">
                                        <label for="">Pontos de Magia</label> <input type="number" name="mg_pts2"
                                                class="form-control" value="<?php if(empty($data->mg_pts2)){    echo '0';}else {    echo $data->mg_pts2;}?>">
                                        <label for="">Descrição</label><textarea name="mg_desc2"
                                                class="linhas form-control" cols="30" rows="10"
                                                style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc2)){    echo '';}else {    echo $data->mg_desc2;}?></textarea>

                                </div>
                        </div>

                        <div class="row">
                                <div class="col col-sm-6 Grimorio-L">
                                <label for="">Nome</label><input type="text" name="mg_nome3"
                                        class="form-control" value="<?php if(empty($data->mg_nome3)){    echo '';}else {    echo $data->mg_nome3;}?>">
                                <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam3"
                                        class="form-control" value="<?php if(empty($data->mg_forma_cam3)){    echo '0';}else {    echo $data->mg_forma_cam3;}?>">
                                <label for="">Pontos de Magia</label> <input type="number" name="mg_pts3"
                                        class="form-control" value="<?php if(empty($data->mg_pts3)){    echo '0';}else {    echo $data->mg_pts3;}?>">
                                <label for="">Descrição</label><textarea name="mg_desc3"
                                                class="linhas form-control" cols="30" rows="10"><?php if(empty($data->mg_desc3)){    echo '';}else {    echo $data->mg_desc3;}?></textarea>
                                </div>
                                <div class="col col-sm-6 Grimorio-R">
                                <label for="">Nome</label><input type="text" name="mg_nome4"
                                        class="form-control" value="<?php if(empty($data->mg_nome4)){    echo '';}else {    echo $data->mg_nome4;}?>">
                                <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam4"
                                        class="form-control" value="<?php if(empty($data->mg_forma_cam4)){    echo '0';}else {    echo $data->mg_forma_cam4;}?>">
                                <label for="">Pontos de Magia</label> <input type="number" name="mg_pts4"
                                        class="form-control" value="<?php if(empty($data->mg_pts4)){    echo '0';}else {    echo $data->mg_pts4;}?>">
                                <label for="">Descrição</label><textarea name="mg_desc4"
                                                class="linhas form-control" cols="30" rows="10"
                                                style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc4)){    echo '';}else {    echo $data->mg_desc4;}?></textarea>

                                </div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-6 Grimorio-L">
                                        <label for="">Nome</label><input type="text" name="mg_nome5"
                                        class="form-control" value="<?php if(empty($data->mg_nome5)){    echo '';}else {    echo $data->mg_nome5;}?>">
                                <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam5"
                                        class="form-control" value="<?php if(empty($data->mg_forma_cam5)){    echo '0';}else {    echo $data->mg_forma_cam5;}?>">
                                <label for="">Pontos de Magia</label> <input type="number" name="mg_pts5"
                                        class="form-control" value="<?php if(empty($data->mg_pts5)){    echo '0';}else {    echo $data->mg_pts5;}?>">
                                <label for="">Descrição</label><textarea name="mg_desc5"
                                                class="linhas form-control" cols="30" rows="10"><?php if(empty($data->mg_desc5)){    echo '';}else {    echo $data->mg_desc5;}?></textarea>
                                </div>
                                <div class="col col-sm-6 Grimorio-R">
                                        <label for="">Nome</label><input type="text" name="mg_nome6"
                                        class="form-control" value="<?php if(empty($data->mg_nome6)){    echo '';}else {    echo $data->mg_nome6;}?>">
                                <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam6"
                                        class="form-control" value="<?php if(empty($data->mg_forma_cam6)){    echo '0';}else {    echo $data->mg_forma_cam6;}?>">
                                <label for="">Pontos de Magia</label> <input type="number" name="mg_pts6"
                                        class="form-control" value="<?php if(empty($data->mg_pts6)){    echo '0';}else {    echo $data->mg_pts6;}?>">
                                <label for="">Descrição</label><textarea name="mg_desc6"
                                                class="linhas form-control" cols="30" rows="10"
                                                style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc6)){    echo '';}else {    echo $data->mg_desc6;}?></textarea>

                                </div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-6 Grimorio-L">
                                        <label for="">Nome</label><input type="text" name="mg_nome7"
                                        class="form-control" value="<?php if(empty($data->mg_nome7)){    echo '';}else {    echo $data->mg_nome7;}?>">
                                <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam7"
                                        class="form-control" value="<?php if(empty($data->mg_forma_cam7)){    echo '0';}else {    echo $data->mg_forma_cam7;}?>">
                                <label for="">Pontos de Magia</label> <input type="number" name="mg_pts7"
                                        class="form-control" value="<?php if(empty($data->mg_pts7)){    echo '0';}else {    echo $data->mg_pts7;}?>">
                                <label for="">Descrição</label><textarea name="mg_desc7"
                                                class="linhas form-control" cols="30" rows="10"><<?php if(empty($data->mg_desc7)){    echo '';}else {    echo $data->mg_desc7;}?></textarea>
                                </div>
                                <div class="col col-sm-6 Grimorio-R">
                                        <label for="">Nome</label><input type="text" name="mg_nome8"
                                        class="form-control" value="<?php if(empty($data->mg_nome8)){    echo '';}else {    echo $data->mg_nome8;}?>">
                                <label for="">Formas e caminhos</label><input type="text" name="mg_forma_cam8"
                                        class="form-control" value="<?php if(empty($data->mg_forma_cam8)){    echo '0';}else {    echo $data->mg_forma_cam8;}?>">
                                <label for="">Pontos de Magia</label> <input type="number" name="mg_pts8"
                                        class="form-control" value="<?php if(empty($data->mg_pts8)){    echo '0';}else {    echo $data->mg_pts8;}?>">
                                <label for="">Descrição</label><textarea name="mg_desc8"
                                                class="linhas form-control" cols="30" rows="10"
                                                style="width: 31rem; height: 15rem"><?php if(empty($data->mg_desc8)){    echo '';}else {    echo $data->mg_desc8;}?></textarea>

                                </div>
                        </div>
                </div>
        </div>

        <div class="aprimoramentos">
                <h4 id="atributos-tag">Aprimoramentos</h4>
                <div class="container">
                        <div class="row">
                                <div class="col col-sm-5 atributos"><label for="">Nome</label></div>
                                <div class="col col-sm-2 atributos"><label for="">Custo</label></div>
                                <div class="col col-sm-5 atributos"><label for="">Descrição</label></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome1" class="form-control" value="<?php if(empty($data->apri_nome1)){    echo '';}else {    echo $data->apri_nome1;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo1" id="" class="form-control" value="<?php if(empty($data->apri_custo1)){    echo '0';}else {    echo $data->apri_custo1;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc1" class="form-control" value="<?php if(empty($data->apri_desc1)){    echo '';}else {    echo $data->apri_desc1;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome2" class="form-control" value="<?php if(empty($data->apri_nome2)){    echo '';}else {    echo $data->apri_nome2;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo2" id="" class="form-control" value="<?php if(empty($data->apri_custo2)){    echo '0';}else {    echo $data->apri_custo2;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc2" class="form-control" value="<?php if(empty($data->apri_desc2)){    echo '';}else {    echo $data->apri_desc2;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome3" class="form-control" value="<?php if(empty($data->apri_nome3)){    echo '';}else {    echo $data->apri_nome3;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo3" id="" class="form-control" value="<?php if(empty($data->apri_custo3)){    echo '0';}else {    echo $data->apri_custo3;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc3" class="form-control" value="<?php if(empty($data->apri_desc3)){    echo '';}else {    echo $data->apri_desc3;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome4" class="form-control" value="<?php if(empty($data->apri_nome4)){    echo '';}else {    echo $data->apri_nome4;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo4" id="" class="form-control" value="<?php if(empty($data->apri_custo4)){    echo '0';}else {    echo $data->apri_custo4;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc4" class="form-control" value="<?php if(empty($data->apri_desc4)){    echo '';}else {    echo $data->apri_desc4;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome5" class="form-control" value="<?php if(empty($data->apri_nome5)){    echo '';}else {    echo $data->apri_nome5;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo5" id="" class="form-control" value="<?php if(empty($data->apri_custo5)){    echo '0';}else {    echo $data->apri_custo5;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc5" class="form-control" value="<?php if(empty($data->apri_desc5)){    echo '';}else {    echo $data->apri_desc5;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome6" class="form-control" value="<?php if(empty($data->apri_nome6)){    echo '';}else {    echo $data->apri_nome6;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo6" id="" class="form-control" value="<?php if(empty($data->apri_custo6)){    echo '0';}else {    echo $data->apri_custo6;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc6" class="form-control" value="<?php if(empty($data->apri_desc6)){    echo '';}else {    echo $data->apri_desc6;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome7" class="form-control" value="<?php if(empty($data->apri_nome7)){    echo '';}else {    echo $data->apri_nome7;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo7" id="" class="form-control" value="<?php if(empty($data->apri_custo7)){    echo '0';}else {    echo $data->apri_custo7;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc7" class="form-control" value="<?php if(empty($data->apri_desc7)){    echo '';}else {    echo $data->apri_desc7;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome8" class="form-control" value="<?php if(empty($data->apri_nome8)){    echo '';}else {    echo $data->apri_nome8;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo8" id="" class="form-control" value="<?php if(empty($data->apri_custo8)){    echo '0';}else {    echo $data->apri_custo8;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc8" class="form-control" value="<?php if(empty($data->apri_desc8)){    echo '';}else {    echo $data->apri_desc8;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome9" class="form-control" value="<?php if(empty($data->apri_nome9)){    echo '';}else {    echo $data->apri_nome9;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo9" id="" class="form-control" value="<?php if(empty($data->apri_custo9)){    echo '0';}else {    echo $data->apri_custo9;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc9" class="form-control" value="<?php if(empty($data->apri_desc9)){    echo '';}else {    echo $data->apri_desc9;}?>"></div>
                        </div>
                        <div class="row">
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_nome10" class="form-control" value="<?php if(empty($data->apri_nome10)){    echo '';}else {    echo $data->apri_nome10;}?>" ></div>
                                <div class="col col-sm-2 div_for"><input type="number" name="apri_custo10" id="" class="form-control" value="<?php if(empty($data->apri_custo10)){    echo '0';}else {    echo $data->apri_custo10;}?>"></div>
                                <div class="col col-sm-5 div_for"><input type="text" name="apri_desc10" class="form-control" value="<?php if(empty($data->apri_desc10)){    echo '';}else {    echo $data->apri_desc10;}?>"></div>
                        </div>
                </div>
        </div>
</form>
</div>
</div>
