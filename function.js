jQuery(function(){
jQuery('.bio,.pericias,.combate,.equipamentos,.magia,.aprimoramentos').hide();
// Manipulação de ficha
jQuery('label').on('click',function(){
    let item = jQuery(this).text();
    switch (item) {
        case 'Biografia':
            jQuery('.atrib_info,.pericias,.combate,.equipamentos,.magia,.aprimoramentos').hide();
            jQuery('.bio').show();       
            break;
        case 'Info & Atributos':
            jQuery('.atrib_info').show();
            jQuery('.bio,.pericias,.combate,.equipamentos,.magia,.aprimoramentos').hide();
            break;
        case 'Pericias':
            jQuery('.pericias').show()
            jQuery('.bio,.atrib_info,.combate,.equipamentos,.magia,.aprimoramentos').hide();
            break;
        case 'Combate':
            jQuery('.combate').show()
            jQuery('.bio,.atrib_info,.pericias,.equipamentos,.magia,.aprimoramentos').hide();
            break;
        case 'Equipamentos':
            jQuery('.equipamentos').show();
            jQuery('.bio,.atrib_info,.pericias,.combate,.magia,.aprimoramentos').hide();
            break;
        case 'Magia':
            jQuery('.magia').show();
            jQuery('.bio,.atrib_info,.pericias,.combate,.equipamentos,.aprimoramentos').hide();
            break;
        case 'Aprimoramentos':
            jQuery('.aprimoramentos').show();
            jQuery('.bio,.atrib_info,.pericias,.combate,.equipamentos,.magia').hide();
            break;
    }
})

//Carrega dados na ficha



jQuery('input[type=number],select').on('blur', function(){
  calculaAtributo();
})
jQuery('input[type=number],select').show(function(){
  calculaAtributo();
})

jQuery('#pjimg').attr('src',jQuery('#checkImg').val());


jQuery('input,select,textarea').on('blur',function () {
    salvaDados();
  })


jQuery('#att_ficha').on('click', function(){
    window.location.href("http://rollyourdaemon.tk/ficha.php");
})


jQuery("#btn-add-pericia").click(function(){
    let numPericia =  parseInt(jQuery('#numPericias').val());
    var novaPericia = numPericia + 1;
    let i = novaPericia;

    jQuery(".all_pericias").append("<div class='row row_pericia'>     <div class='col div_for'><input type='text' class='form-control pericia' name='pericia"+i+"'             id='pericia"+i+"'             value='' onblur='calculaAtributo();salvaDados();'></div>     <div class='col div_for '><select name='base"+i+"' id='base"+i+"'             class='form-control pericia' style='text-transform: uppercase;' onblur='calculaAtributo();salvaDados();'>              <option selected hidden value=''>             <option value='for'>FOR</option>             <option value='con'>CON</option>             <option value='des'>DES</option>             <option value='agi'>AGI</option>             <option value='per'>PER</option>             <option value='int'>INT</option>             <option value='von'>VON</option>             <option value='car'>CAR</option>         </select></div>     <div class='col div_for'><input type='number' min='0'             value=''             class='form-control pericia atrib' name='gasto"+i+"' onblur='calculaAtributo();salvaDados();'>     </div>     <div class='col div_for'><input type='number' min='0'             value=''             class='form-control pericia' name='extra"+i+"' onblur='calculaAtributo();salvaDados();'></div>     <div class='col div_for'><input type='number' min='0'             value=''             class='form-control pericia' id='total"+i+"' onblur='calculaAtributo();salvaDados();'></div> </div>");

    jQuery("#numPericias").val(novaPericia);

  salvaDados();


})

jQuery("#btn-sub-pericia").click(function(){
    let numPericia =  parseInt(jQuery('#numPericias').val());
    jQuery('#row_pericia'+numPericia).remove();
    jQuery('#numPericias').val(numPericia-1);
    salvaDados();
})



jQuery("#btn-add-equip").click(function(){
    let numEquip = parseInt(jQuery('#numEquip').val());
    let novoEquip = numEquip + 1;
    let i = novoEquip;
    console.log(i);

    jQuery('.all_equips').append("<div class='row' id='row_equip"+i+"'>     <div class='col div_for'><input type='text' name='equip"+i+"' class='form-control' value=''></div>     <div class='col div_for'><input type='number' name='quant"+i+"' class='form-control' value=''></div>     <div class='col div_for'><input type='text' name='peso"+i+"' class='form-control' value=''></div>     <div class='col div_for'><input type='text' name='dura"+i+"' class='form-control' value=''></div> </div>");

    jQuery("numEquip").val(novoEquip);
    salvaDados();
})

jQuery("#btn-sub-equip").click(function(){
    let numEquip =  parseInt(jQuery('#numEquip').val());
    jQuery('#row_equip'+numEquip).remove();
    jQuery("#numEquip").val(numEquip-1);
    salvaDados();
})


jQuery("#btn-add-apri").click(function(){
    let numApri = parseInt(jQuery('#numApri').val());
    let novaApri = numApri + 1;
    let i = novaApri;
    console.log(i);

    jQuery('.all_apri').append("<div class='row' id='row_apri"+i+"'>     <div class='col col-sm-5 div_for'><input type='text' name='apri_nome"+i+"' class='form-control' value='' onblur='salvaDados()' ></div>     <div class='col col-sm-2 div_for'><input type='number' name='apri_custo"+i+"' id='' class='form-control' value='' onblur='salvaDados()'></div>     <div class='col col-sm-5 div_for'><input type='text' name='apri_desc"+i+"' class='form-control' value=''  onblur='salvaDados()'></div> </div>");

    jQuery("#numApri").val(novaApri);
    salvaDados();

})

jQuery("#btn-sub-apri").click(function(){
    let numApri =  parseInt(jQuery('#numApri').val());
    jQuery('#row_apri'+numApri).remove();
    jQuery("#numApri").val(numApri-1);
    salvaDados();

})






/* -------------------------------------------------------------------------- */
/*                                   FUNÇÕES                                  */
/* -------------------------------------------------------------------------- */

function salvaDados(){
    let form = new FormData(jQuery("form[name='form_daemon']")[0]);
    let img = jQuery('#player_img').attr('src');
    if((document.getElementById("pj_img").files.length == 0) && (img != 'img/') ){
        jQuery('#checkImg').val(img);
    }
    if(img == 'img/'){
        jQuery('#player_img').attr('src',jQuery('#checkImg').val());
    }
    
      
jQuery.ajax({
    type: "post",
    url: "control.php",
    data: form,
    processData: false,
    contentType: false,
    success: function (response) {
        console.log("sucesso");
    },
    error: function(response){
        console.log("erro");
    }
    
});
}



function calculaAtributo(){
   let size = jQuery('.row_pericia').length;
    for(i=1;i<=size;i++){
        let base = jQuery('#base'+i).val();
        let orig;
        if(base === '0'){
            orig = 0;
        }else{
            orig = parseInt(jQuery('input[name=atr_'+base+'_orig]').val());
        }
        let gasto = parseInt(jQuery('input[name=gasto'+i+']').val());
        let extra = parseInt(jQuery('input[name=extra'+i+']').val());
        let total =  orig + gasto + extra;
        jQuery('#total'+i).val(total);

        cbtbase = jQuery('#combateBase'+i).val();
        
        cbtgasto = parseInt(jQuery('input[name=combateGasto'+i+']').val());
      
        cbttipo = jQuery('#combateTipo'+i).val();
        
        cbtatk = jQuery('input[name=combateAtk'+i+']').val();
        cbtdef = jQuery('input[name=combateDef'+i+']').val();

        cbtorig = parseInt(jQuery('input[name=atr_'+cbtbase+'_orig]').val());
     
   

        if(cbttipo === 'CORPO A CORPO'){
            jQuery('input[name=combateAtk'+i+']').val(cbtatk + cbtorig);
            jQuery('input[name=combateDef'+i+']').val(cbtdef + cbtorig);    
        }else if(cbttipo === 'A DISTANCIA'){
            jQuery('input[name=combateAtk'+i+']').val(cbtgasto/2);
            jQuery('input[name=combateDef'+i+']').val(0);
        }
    }
}


})




