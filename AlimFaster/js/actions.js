// JavaScript Document
$(window).load(function() {
	$("#restaurante").change(function(){
		activarSiguiente(this);// funcio que activa el siguiente --> combos anidados
		$("#reserva").fadeIn();
		res = $(this).val();
		$.ajax({
				  type:"POST",
				  url: "php/ajaxCoord.php",
				  data: "res="+res,
				  dataType: "html",
				  error: function(){
						alert("Algo salio mal reintente en breve");
				  },
				  success: function(data){                                                      
						$("#cord").html(data);
				  }
			  });
		});
	$("select#cord").change(function(){//selecciona sucursal del/o establecimiento
		enviaCoord($(this).val())
		})
		
	$("select#mesaPara").change(function(){//selecciona la opcion Mesa para...
		seleccionMesa(this);
	})	

	$("#fecha").change(function(){
		verFecha($(this).val())
	})	
	
});

function seleccionMesa(t){
para = $(t).val();
$(".mesas>span").removeClass('pushed').removeClass('selected').css('opacity',0.3);
$(".mesas").find("span.mesa"+para).addClass('pushed');
$(".msg").html("Escoja una de las mesas pintadas habilitadas").fadeIn();

$(".pushed").click(function(event){
	if($(this).hasClass("pushed")){
		$(".mesas>span").removeClass('selected')//remuevo clase selected para escoger la otra mesa
		$(this).addClass('selected');// le agrego clase selected a la que le di click
		$(".msg").html("Su mesa escogida se pinta en gris");
		}
	});
}

function enviaCoord(t){
	//var coords = document.getElementById("cord").value;
			var coord = t.split(",");
			initialize(coord[0], coord[1], coord[2], coord[3]);
	}
function verFecha(t){
	alert(t)
	}
function activarSiguiente(t){
	$('div#cargando').fadeIn().delay(500).fadeOut();
	$(t).next().fadeIn();
	}	
function enviarDatos(a,b,c,d,e){
	var ini = d.split(":");
	var fin = e.split(":");

	$('#horarioReserv').empty();//vacia el select del horario para ponoer el nuevo
	$('#horarioAtencion>span').html('De '+d+' a'+e);
	
	
	c =ini[0];
	x = fin[0];
	while(c<= x){
	   	$('#horarioReserv').append('<option>'+c+':00:00</option>')
		c++;
		}
	}	