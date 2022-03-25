document.addEventListener('DOMContentLoaded', function(e) {

    var getXhr = function() {

		if (window.XMLHttpRequest)
			return new XMLHttpRequest();
		if (window.ActiveXObject) {

			var names = [
			"Msxml2.XMLHTTP.6.0",
			"Msxml2.XMLHTTP.3.0",
			"Msxml2.XMLHTTP",
			"Microsoft.XMLHTTP" ];

			for(var i in names) {

				try {
					return new ActiveXObject(names[i]);
				} catch(e) {}
			}
		}
		
		window.alert("Votre navigateur ne prend pas en charge l'objet XMLHTTPRequest.");
		return null;
    }
    // Les variables
    var btn_payer_mpay = document.getElementById("payer_mpay");
    var input_num_mpay = document.getElementById("num_mpay");
    var input_pin_mpay = document.getElementById("pin_mpay");

    btn_payer_mpay.addEventListener('click', function(e){

		e.preventDefault();
		btn_payer_mpay.setAttribute("disabled","");
		btn_payer_mpay.getAttribute("value","patientez ...");
		
		if (input_num_mpay.value != "" && input_pin_mpay.value != "") {
				//input_num_mpay.focus();
				var num_compte = input_num_mpay.value;
				var pin = input_pin_mpay.value;
				var token = document.getElementById("token").value;

				var xhr = getXhr();
			    xhr.onreadystatechange = function() {
                    if(xhr.readyState === 4) {
                        if(xhr.status === 200) {

                        	//alert(xhr.responseText);
                            if (JSON.parse(xhr.responseText).r === false) {
                                btn_payer_mpay.removeAttribute("disabled","");
								//Parler(JSON.parse(xhr.responseText).message,"Danger");
								$("#h2-text-model").html("<i class=\"fa fa-info\"> </i>");
								$('#p-text-model').text(JSON.parse(xhr.responseText).message);
								$("#modal-message").modal('show');
								//alert(JSON.parse(xhr.responseText).message);
								input_num_mpay.focus();
                            }
                            else if(JSON.parse(xhr.responseText).r === true) {
                                btn_payer_mpay.removeAttribute("disabled","");
								//Parler(JSON.parse(xhr.responseText).message,"Succes");
								$("#h2-text-model").text("Succès !");
								$('#p-text-model').text(JSON.parse(xhr.responseText).message);
								$("#modal-message").modal('show');
                         		
                         		document.location.href = JSON.parse(xhr.responseText).data.page_callback_success;
                            }
                        }
                    }
                }
                //
                xhr.open("POST",'form_mpay.php',true);
                xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                xhr.send('num_compte='+num_compte+'&pin='+pin+'&token='+token);
		}
		else{
			//alert("Veillez remplire tous les champs svp !");
			$("#h2-text-model").html("<i class=\"fa fa-info\"> </i>")
			$("#p-text-model").text("Veillez remplire tous les champs !");
			$("#modal-message").modal('show');
			btn_payer_mpay.removeAttribute("disabled","");
			input_num_mpay.focus();
		}
    })
})