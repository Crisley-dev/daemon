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



size = jQuery('.row_pericia').length;
jQuery('input[type=number],select').on('blur', function(){
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
    }
})
jQuery('input[type=number],select').show(function(){
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
    }
})

jQuery('#pjimg').attr('src',jQuery('#checkImg').val());


jQuery('input,select,textarea').on('blur',function () {

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

  })


jQuery('#att_ficha').on('click', function(){
    window.location.href("http://rollyourdaemon.tk/ficha.php");
})

var numPericia =  parseInt(jQuery('#numPericias').val());
jQuery('#countpericia').val(numPericia);

jQuery("#btn-add-pericia").click(function(){
    count = jQuery("#countpericia").val();
    jQuery('#numPericias').val(count);

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
        console.log("sucesso add");
        location.reload();
    },
    error: function(response){
        console.log("erro");
    }
    
});
 
    
})


})


