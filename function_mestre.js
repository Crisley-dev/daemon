jQuery(function(){
    
	/*Menu-toggle*/
    jQuery("#menu-toggle").click(function(e) {
        e.preventDefault();
        jQuery("#wrapper").toggleClass("active");
    });


//Cria ficha nova e apaga a antiga

jQuery('button').click(function(){
    console.log(jQuery(this).attr('name'));
    let player = jQuery(this).attr('name');
    let tipo = 'ficha';

    jQuery.ajax({
        type: "post",
        url: "inserts.php",
        data: {"player":player, "tipo":tipo},
        dataType: "html",
        success: function (response) {
            
        }
    });
})

jQuery('#novo_player').click(function(e){
    let tipo = 'player';
    e.preventDefault();
    jQuery.alert({
        title: 'Novo Player',
        content: '' +
        '<div class="form-group">' +
        '<label>Digite o nome do Jogador</label>' +
        '<input type="text" id="nome_novo_player" placeholder="Nome ou Nick" class="name form-control" required />' +
        '</div>',
        buttons: {
            Adicionar: {
                text: 'Adicionar',
                btnClass: 'btn-green',
                action: function(){
                    console.log(jQuery('#nome_novo_player').val());
                    jQuery.ajax({
                        type: "post",
                        url: "inserts.php",
                        data: {'tipo': tipo, 'novo_player': jQuery('#nome_novo_player').val()},
                        dataType: "html",
                        success: function (response) {
                            console.log(response);
                                jQuery.alert("Sucesso");
                            
                        }
                    });
                }
            },
            Cancelar: {
                text: "Cancelar",
                action: ()=>{}
            }
            
        }
    })
   
})

})