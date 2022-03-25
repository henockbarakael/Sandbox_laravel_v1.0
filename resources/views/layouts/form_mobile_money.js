document.addEventListener('DOMContentLoaded', function(e) {



    var n = 120; // Nombre final du compteur

    var cpt = 0; // Initialisation du compteur

    var duree = 1; // Durée en seconde pendant laquel le compteur ira de 0 à 15

    var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)

    var node = document.getElementById("compteur"); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    var retour_verification = null;



    function countdown() {

        node.innerHTML = ++cpt;

        if (cpt < n) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois

            setTimeout(countdown, 1000);

        }

    }



    var getXhr = function() {



            if (window.XMLHttpRequest)

                return new XMLHttpRequest();

            if (window.ActiveXObject) {



                var names = [

                    "Msxml2.XMLHTTP.6.0",

                    "Msxml2.XMLHTTP.3.0",

                    "Msxml2.XMLHTTP",

                    "Microsoft.XMLHTTP"

                ];



                for (var i in names) {

                    try {

                        return new ActiveXObject(names[i]);

                    } catch (e) {}

                }

            }



            window.alert("Votre navigateur ne prend pas en charge l'objet XMLHTTPRequest.");

            return null;

    }

    //

    function verifiePaiement() {

        //for (i = 0; i <= 24 ; i++) {

        var xhr = getXhr();

        xhr.onreadystatechange = function() {

                if (xhr.readyState === 4) {

                    if (xhr.status === 200) {

                        if (JSON.parse(xhr.responseText).r === false) {

                            document.location.href = JSON.parse(xhr.responseText).data.page_callback_failure;

                        } else if (JSON.parse(xhr.responseText).r === true) {

                            document.location.href = JSON.parse(xhr.responseText).data.page_callback_success;

                        }

                    }

                }

            }

            //

        xhr.open("POST", 'verifie_transaction_mobile.php', true);

        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.send();

    }

    //

    function verifiePaiement0() {

        var xhr = getXhr();

        xhr.onreadystatechange = function() {

                if (xhr.readyState === 4) {

                    if (xhr.status === 200) {

                        /*if (JSON.parse(xhr.responseText).r === false) {

                        	//document.location.href = JSON.parse(xhr.responseText).data.page_callback_failure;

                        }*/

                        if (JSON.parse(xhr.responseText).r === true) {

                            document.location.href = JSON.parse(xhr.responseText).data.page_callback_success;

                        }

                    }

                }

            }

            //

        xhr.open("POST", 'verifie_transaction_mobile.php', true);

        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.send();

    }



    var btn_payer_mm = document.getElementById("btn_mobile_money");

    var select_mobile_money = document.getElementById("select_mobile_money");

    var select_pays = document.getElementById("select_pays");

    var chargement_mm = document.getElementById("chargement_mm");

    var input_telephone_mm = document.getElementById("input_telephone_mm");

    var modal_succes = document.getElementById("modal-mobile-money-wait");





    btn_payer_mm.addEventListener('click', function(e) {

        e.preventDefault();

        btn_payer_mm.setAttribute("disabled", "");

        var message = "Patientez svp ...";

        chargement_mm.innerHTML = "<h8 style='background-color:#;color: black;padding: 10px;border-radius:5px;' width='100%'><i class=\"fa fa-info\"></i> " + message + "</h8>";

        if (select_mobile_money.value != 0 && select_pays.value != 0 && input_telephone_mm.value != "") {

            var telephone = encodeURIComponent(input_telephone_mm.value);

            var mobiie_money = encodeURIComponent(select_mobile_money.value);



            var xhr = getXhr();

            xhr.onreadystatechange = function() {

                    if (xhr.readyState === 4) {

                        if (xhr.status === 200) {

                            if (JSON.parse(xhr.responseText).r === false) {

                                btn_payer_mm.removeAttribute("disabled", "");

                                //Parler(JSON.parse(xhr.responseText).message,"Danger");

                                chargement_mm.innerHTML = "<h8 style='background-color:#;color: black;padding: 10px;border-radius:5px;' width='100%'><i class=\"fa fa-info\"></i> " + JSON.parse(xhr.responseText).message + "</h8>";

                            } else if (JSON.parse(xhr.responseText).r === true) {

                                btn_payer_mm.removeAttribute("disabled", "");

                                $("#modal-mobile-money-wait").modal('show');

                                setTimeout(countdown, 1000);

                                setTimeout(verifiePaiement0, 30000);

                                setTimeout(verifiePaiement0, 40000);

                                setTimeout(verifiePaiement0, 50000);

                                setTimeout(verifiePaiement0, 60000);
                                setTimeout(verifiePaiement0, 70000);
                                setTimeout(verifiePaiement0, 90000);
                                setTimeout(verifiePaiement, 120000);

                            }

                        }

                    }

                }

                //

            xhr.open("POST", 'form_mobile_money.php', true);

            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.send('num_tel=' + telephone + '&mobile_money=' + mobiie_money);

        }

        //

        else {

            var message = "Veillez bien remplire le formulaire svp !";

            chargement_mm.innerHTML = "<h8 style='background-color:#;color: black;padding: 10px;border-radius:5px;' width='100%'><i class=\"fa fa-info\"></i> " + message + "</h8>";

            btn_payer_mm.removeAttribute("disabled", "");

        }

    })

})