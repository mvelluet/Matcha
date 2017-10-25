
function check_submit_inscription(e) {
	if(e.which == 13) {
		inscription();
	}
}

function check_submit_connexion(e) {
	if(e.which == 13) {
		connexion();
	}
}

function check_inscription(e = "", min_length, max_length, data_1 = "", data_2 = "")
{
	var data1;
	var data2;

	if (e != "") {
		data1 = "#" + e.id;
		data2 = "#" + e.id + "_LABEL";
	} else {
		data1 = data_1;
		data2 = data_2;
	}
	if ($(data1).val().length < min_length) {
		$(data1).addClass('invalid');
		$(data2).attr('data-error', "Un minimum de " + min_length + " caractères sont requis");
		$(data2).addClass('active');
		return (1);
	}
	else if ($(data1).val().length > max_length) {
		$(data1).addClass('invalid');
		$(data2).attr('data-error', "Un maximum de " + max_length + " caractères sont permis");
		$(data2).addClass('active');
		return (1);
	}
	else {
		$(data2).attr("data-success", "OK !");
		$(data2).addClass('active');
	}

	if (data1 === "#UTI_LOGIN") {
		$.ajax({  
			type: "GET",
			url: "ajax/index.php",
			data: "UTI_LOGIN="+ $(data1).val() ,  
			success: function(data){	
				data = jQuery.parseJSON(data);
				var login = $(data1).val().toLowerCase();
				if (data[0] != undefined) {	
					if (data[0]['UTI_LOGIN'] === login) {
						$(data1).addClass('invalid');
						$(data2).attr('data-error', 'Le login existe déjà !');
						$(data2).addClass('active');
						return (1);
					} else {
						$(data2).attr("data-success", "OK !");
						$(data2).addClass('active');
					}
				}
				$("#UTI_LOGIN_LABEL").html(data);
			}
		});
	}

	if (data1 === "#UTI_PWD2") {
		if ($("#UTI_PWD").val() === $("#UTI_PWD2").val()) {
			$("#UTI_PWD2_LABEL").attr("data-success", "Mots de passe identique !");
			$("#UTI_PWD2_LABEL").addClass('active');
		} else {
			$("#UTI_PWD2").addClass('invalid');
			$("#UTI_PWD2_LABEL").attr('data-error', "Les mots de passe sont différents !");
			$("#UTI_PWD2_LABEL").addClass('active');
			return (1);
		}
	}

	if (data1 === "#UTI_MAIL") {
		$.ajax({  
			type: "GET",  
			url: "ajax/index.php", 
			data: "UTI_MAIL="+ $(data1).val() ,  
			success: function(data){	
				data = jQuery.parseJSON(data);
				var mail = $(data1).val().toLowerCase();
				if (data[0] != undefined) {	
					if (data[0]['UTI_MAIL'] === mail) {
						$(data1).addClass('invalid');
						$(data2).attr('data-error', 'Le mail existe déjà !');
						$(data2).addClass('active');
						return (1);
					} else {
						$(data2).attr("data-success", "OK !");
						$(data2).addClass('active');
					}
				}
				$("#UTI_MAIL_LABEL").html(data);
			}
		});
	}
	return (0);
}

function dataError(data1, data2, message1)
{
	var data = $(data1).val();
	if ($(data1).val() === "") {
		$(data1).addClass('invalid');
		$(data2).attr('data-error', message1);
		$(data2).addClass('active');
		return (1);
	}
	else {
		$(data2).attr("data-success", "OK !");
		$(data2).addClass('active');
	}
	return (0);
}

function inscription()
{
	var vError = 0;
	var tmp = 0;
	tmp = dataError("#UTI_LOGIN", "#UTI_LOGIN_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;
	tmp = check_inscription("", 3, 25, "#UTI_LOGIN", "#UTI_LOGIN_LABEL");
	vError += tmp;
	tmp = dataError("#UTI_NOM", "#UTI_NOM_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;
	tmp = check_inscription("", 2, 25, "#UTI_NOM", "#UTI_NOM_LABEL");
	vError += tmp;
	tmp = dataError("#UTI_PRENOM", "#UTI_PRENOM_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;
	tmp = check_inscription("", 2, 25, "#UTI_PRENOM", "#UTI_PRENOM_LABEL");
	vError += tmp;
	tmp = dataError("#UTI_PWD", "#UTI_PWD_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;
	tmp = check_inscription("", 7, 512, "#UTI_PWD", "#UTI_PWD_LABEL");
	vError += tmp;
	tmp = dataError("#UTI_PWD2", "#UTI_PWD2_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;
	tmp = check_inscription("", 7, 512, "#UTI_PWD2", "#UTI_PWD2_LABEL");
	vError += tmp;
	tmp = dataError("#UTI_MAIL", "#UTI_MAIL_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;
	tmp = check_inscription("", 0, 140, "#UTI_MAIL", "#UTI_MAIL_LABEL");
	vError += tmp;

	if (vError === 0) {	
		var jqxhr = $.post(
			'ajax/index.php',
			{
				UTI_LOGIN : $("#UTI_LOGIN").val(),
				UTI_NOM : $("#UTI_NOM").val(),
				UTI_PRENOM : $("#UTI_PRENOM").val(),
				UTI_PWD : $("#UTI_PWD").val(),
				UTI_PWD2 : $("#UTI_PWD2").val(),
				UTI_MAIL : $("#UTI_MAIL").val(),
				INSCRIPTION : "INSCRIPTION"
			}
			)
		.done(function() {
			$('#inscription').modal('close');
			Materialize.toast('Inscription réussi !', 4000)
		})
		.fail(function() {
			Materialize.toast('Error !', 4000)
		})
	}
}

function connexion()
{
	var vError = 0;
	var tmp = 0;
	tmp = dataError("#UTI_LOGIN_CO", "#UTI_LOGIN_CO_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;
	tmp = dataError("#UTI_PWD_CO", "#UTI_PWD_CO_LABEL", 'Ce champ ne peux pas être vide');
	vError += tmp;

	if (vError === 0) {	
		$.ajax({  
			type: "POST",
			url: "ajax/index.php",
			data: 	'UTI_LOGIN=' + $("#UTI_LOGIN_CO").val() +
			'&UTI_PWD=' + $("#UTI_PWD_CO").val() +
			'&CONNEXION=' + "CONNEXION",

			success: function(data){
				data = jQuery.parseJSON(data);
				if (data != undefined) {	
					if (data['MESSAGE_ERROR'] === 'OK !' ) {
						$('#UTI_LOGIN_CO_LABEL').attr("data-success", "OK !");
						$('#UTI_LOGIN_CO_LABEL').addClass('active');
						$('#UTI_PWD_CO_LABEL').attr("data-success", "OK !");
						$('#UTI_PWD_CO_LABEL').addClass('active');
						location.replace('profil.php');
					} else {
						$('#UTI_LOGIN_CO').addClass('invalid');
						$('#UTI_LOGIN_CO_LABEL').attr('data-error', data['MESSAGE_ERROR']);
						$('#UTI_LOGIN_CO_LABEL').addClass('active');
						$('#UTI_PWD_CO').addClass('invalid');
						$('#UTI_PWD_CO_LABEL').attr('data-error', data['MESSAGE_ERROR']);
						$('#UTI_PWD_CO_LABEL').addClass('active');
					}
				}
			}
		});
	}
}

function modification()
{
	var vError = 0;
	var tmp = 0;
	var check = 0;
	if ($('#UTI_NOM').val().length > 0) {
		tmp = check_inscription("", 2, 25, "#UTI_NOM", "#UTI_NOM_LABEL");
		vError += tmp;
		check++;
	}
	if ($('#UTI_PRENOM').val().length > 0) {
		tmp = check_inscription("", 2, 25, "#UTI_PRENOM", "#UTI_PRENOM_LABEL");
		vError += tmp;
		check++;
	}
	if ($('#UTI_PWD').val().length > 0) {
		tmp = check_inscription("", 7, 512, "#UTI_PWD", "#UTI_PWD_LABEL");
		vError += tmp;
		check++;
	}
	if ($('#UTI_PWD2').val().length > 0) {
		tmp = check_inscription("", 7, 512, "#UTI_PWD2", "#UTI_PWD2_LABEL");
		vError += tmp;
		check++;
	}
	if ($('#UTI_MAIL').val().length > 0) {
		tmp = check_inscription("", 0, 140, "#UTI_MAIL", "#UTI_MAIL_LABEL");
		vError += tmp;
		check++;
	}
	if (vError === 0 && check >= 1) {	
		var jqxhr = $.post(
			'ajax/modification.php',
			{
				UTI_NOM : $("#UTI_NOM").val(),
				UTI_PRENOM : $("#UTI_PRENOM").val(),
				UTI_PWD : $("#UTI_PWD").val(),
				UTI_PWD2 : $("#UTI_PWD2").val(),
				UTI_MAIL : $("#UTI_MAIL").val(),
				MODIFICATION : "MODIFICATION"
			}
			)
		.done(function() {
			// $('#menu').modal('close');
			Materialize.toast('Modification réussi !', 4000)
		})
		.fail(function() {
			Materialize.toast('Error !', 4000)
		})
	} else {
		Materialize.toast('Il faut remplir au moins un champ !', 4000)
	}
}

function information()
{
	var vError = 0;
	var tmp = 0;

	if (vError === 0) {	
		var jqxhr = $.post(
			'ajax/information.php',
			{

				INF_SEXE : $('input[name="group1"]:checked').val(),
				INF_ORIENTATION : $('input[name="group2"]:checked').val(),
				INF_AGE : $("#INF_AGE").val(),
				INF_SEARCH_SEXE : $('input[name="group3"]:checked').val(),
				INF_SEARCH_ORIENTATION : $('input[name="group4"]:checked').val(),
				INF_SEARCH_AGE_D : $("#INF_SEARCH_AGE_D").val(),
				INF_SEARCH_AGE_F : $("#INF_SEARCH_AGE_F").val(),
				INFORMATION : "INFORMATION"
			}
			)
		.done(function() {
			// $('#menu').modal('close');
			Materialize.toast('Modification réussi !', 4000)
		})
		.fail(function() {
			Materialize.toast('Error !', 4000)
		})
	} else {
		Materialize.toast('Il faut remplir au moins un champ !', 4000)
	}
}

function deconnexion()
{
	$.ajax({  
		type: "GET",
		url: "ajax/deconnexion.php",
		data: 	'DECONNEXION=' + "DECONNEXION",

		success: function(){
			location.replace('index.php');
		}
	});
}

function search()
{
	location.replace('recherche.php');
}

function message()
{
	location.replace('message.php');
}

function maPosition(position) {
	console.log(position);
  var infopos = "Position déterminée :\n";
  infopos += "Latitude : "+position.coords.latitude +"\n";
  infopos += ", "+position.coords.longitude+"\n";
  infopos += "Altitude : "+position.coords.altitude +"\n";
  document.getElementById("infoposition").innerHTML = infopos;
}

function localisation()
{
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(maPosition);
	} else {
		alert("Le service de géolocalisation n'est pas disponible sur votre ordinateur.");
	}
}
