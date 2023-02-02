<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<style>
    @font-face {
        font-family: "Nunito-Regular";
        src: url("Nunito-Regular.ttf");
    }

    body {
        font-family: "Nunito-Regular";
        margin: 50px;
        background: #F2F6FF;
    }
	
	.title {
		font-size: 21px;
		color: rgb(26, 26, 26);
		margin: 20px 0px;
	}
	
	input {
		border: 1px solid rgb(189, 189, 189);	
	}

    form {
        background: #fff;
        padding: 20px;
    }

    .form-1 {
        display: block;
        flex-direction: row;
        justify-content: space-between;
        margin-bottom: 30px;
        margin-bottom: 30px;
    }

    .form-2 {
        display: inline;
        margin-bottom: 30px;
		flex-wrap: wrap;
    }

    .form-3 {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .form-4 a {
        text-decoration: none;
        color: #00C2FF;
        font-size: 19px;
    }

    .large-input {
        width: 350px;
        height: 31px;
        border-radius: 3px;
        border: 1px solid #cfcfcf;
        margin-top: 10px;
    }

    .small-input {
        max-width: 80px;
        height: 31px;
        border-radius: 3px;
        border: 1px solid #cfcfcf;
        margin-top: 10px;
		margin-right: 0px;
    }

    .radio-group {
        margin-top: 30px;
		padding-top: 10px;
    }

    .service-btn {
        background-color: #fff;
        color: #000;
        font-size: 15px;
        height: 49px;
        border: 1px solid #cfcfcf;
        cursor: pointer;
        border-radius: 3px;
        padding: 0px 40px;
        margin-top: 10px;
        margin-right: -10px;
    }

    select {
        width: 107px;
        height: 31px;
    }

    .download-btn {
        width: 254px;
        height: 30px;
        background-color: #fff;
        border: 1px solid #cfcfcf;
        border-radius: 3px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 30px;
        cursor: pointer;
    }

    .download-btn:hover {
        background-color: lightgray;
        transition: 500ms;
    }

    .search-btn {
        background: #C20000;
        border-radius: 9px;
        height: 44px;
        width: 197px;
        border: none;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        font-weight: normal;
    }

    label {
        font-weight: bold;
		color: #000000;
		font-size: 12px;
    }
	
	.emballage-dang {
		margin-top: 15px;	
	}


    /* -------------------------------------- */
    #expedition-standard {
        display: block;
    }

    #marchandise-stc {
        display: none;
    }

    #avion-cargo {
        display: none;
    }
</style>

@extends('part_transitaire.dashboard.layout.global')
@section('contenu')
<div class="page-heading" style="margin-top: -60px">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
					<h3 class="title" style="margin-left: 50px"><i style="margin-right: 10px; color: rgb(189, 189, 189);" class="fa-solid fa-magnifying-glass"></i> Rechercher meilleur offre</h3>
               
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
				<!--
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                    </ol>
                </nav>
-->
            </div>
        </div>
    </div>

               <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
							
                            <form method="get" action="{{route('transitaire.search.offer')}}">
                                @csrf
                                <h2 style="color: #000; font-size: 15px;">Entrez vos expéditions détails</h2>
                                <input type="hidden" name="service" id="service" />
								
                                <!-- FORM 1 ---------------------------------->
                                <div class="form-1" style="width: 100%; display: flex; flex-direction: row; justify-content: flex-start;">
                                    <div style="margin-right: 50px">
                                        <br><label for="aeroport-de-depart">Aéroport de départ</label><br>
                                        <input class="large-input" id="aeroport-de-depart" name="airport_depart" type="text" style="width:120%; border: 1px solid #cfcfcf">
                                    </div>

                                    <div style="margin-right: 50px">
                                        <br><label for="aeroport-de-destination">Aéroport de destination</label><br>
                                        <input class="large-input" id="aeroport-de-destination" name="airport_arrive"  type="text" style="width:120%;">
                                    </div>

                                    <div>
                                        <br><label for="expedition-date">Expedition date</label><br>
                                        <input class="large-input" id="expedition-date" name="expire_date"  type="date" style="width:160%;">
                                    </div>
                                </div>

                                <!-- FORM 2 ---------------------------------->
                                <div class="form-2">
                                    <div>
                                        <label>Services</label><br>
                                        <button id="service-btn-1" class="service-btn" onclick="service_btn1()" type="button" name="choice"
                                            value="option1">Expedition standard</button>
                                        <button id="service-btn-2" class="service-btn" onclick="service_btn2()" type="button" name="choice"
                                            value="option2">Marchandise sous temperature controlée</button>
                                        <button id="service-btn-3" onclick="service_btn3()" class="service-btn" type="button" name="choice" value="option3">Avion
                                            CARGO</button>
                                    </div>
                                </div>

                                <!-- EXPEDITION STANDARD ---------------------------------------------------->
                                <div id="expedition-standard">
                                    <div class="form-3">
                                        <div>
                                            <br><label for="quantite">Quantité</label><br>
                                            <input class="small-input" id="quantite" name="expedition[qte]" type="number">
                                        </div>

                                        <div class="radio-group emballage">
                                            <label style="font-weight: normal; padding-bottom:10px" for="colis"><input id="colis" name="expedition[type_colis]" type="radio" value="colis" name="type-emballage">
                                                Colis</label><br>
                                            <label style="font-weight: normal" for="palette"><input id="palette" name="expedition[type_colis]" type="radio" value="palette" name="type-emballage">
                                                Palette</label><br>
                                        </div>

                                        <div>
                                            <br><label for="longueur">Longueur (cm)</label><br>
                                            <input class="small-input" id="longueur" name="expedition[longeur]" type="number">
                                        </div>

                                        <div>
                                            <br><label for="hauteur">Hauteur</label><br>
                                            <input class="small-input" id="hauteur" name="expedition[hauteur]" type="number">
                                        </div>

                                        <div>
                                            <br><label for="poids">Poids (kg)</label><br>
                                            <input class="small-input" id="hauteur" name="expedition[poids]" type="number">
                                        </div>

                                        <div class="radio-group">
                                            <label style="font-weight: normal; padding-bottom:10px" for="gerbable"><input id="gerbable" name="expedition[type_gerbable]" type="radio" value="gerbable" name="gerbable">
                                                Gerbable</label><br>
                                            <label style="font-weight: normal" for="non-gerbable"><input id="non-gerbable" name="expedition[type_gerbable]" type="radio" value="non-gerbable"
                                                    name="gerbable"> Non gerbable</label><br>
                                        </div>

                                        <div>
                                            <br><label>Type de poids</label><br>
                                            <select style="border: 1px solid #cfcfcf; color:#cfcfcf " name="expedition[type_poids]">
                                                <option selected value=""></option>
                                                <option style="color: #000">Option 1</option>
                                                <option style="color: #000">Option 2</option>
                                                <option style="color: #000">Option 3</option>
                                            </select>
                                        </div>

                                        <div class="radio-group emballage-dang">
                                            <label>Emballage</label><br>
                                            <label style="font-weight: normal; padding-bottom:10px" for="dangereux"><input id="dangereux" name="expedition[type_emballage]" type="radio" value="dangereux"
                                                  > Dangereux</label><br>
                                            <label style="font-weight: normal" for="non-dangereux"><input id="non-dangereux"
                                                name="expedition[type_emballage]"
                                                type="radio" value="non-dangereux"
                                                    > Non dangereux</label><br>
                                        </div>
                                    </div>

                                    <div class="form-4">
                                        <a class="lien-nouvel-envoi" href="#"><i class="fa-solid fa-plus"></i> Créer un nouvel envoi</a><br>
                                        <button class="download-btn"><i class="fa-solid fa-download"></i> Merci de télécharger la
                                            facture</button>
                                        <button class="download-btn"><i class="fa-solid fa-download"></i> Merci de télécharger la
                                            FDS</button><br>
                                        <button class="search-btn">rechercher</button>
                                    </div>

                                </div>



                                <!-- MARCHANDISE SOUS TEMPERATURE CONTROLEE -------------------------------------------->
                                <div id="marchandise-stc">
                                    <div class="form-3" style="flex-wrap: wrap">
                                        <div>
                                            <br><label for="quantite">Quantité</label><br>
                                            <input class="small-input" id="quantite" name="marchandise[qte]" type="number">
                                        </div>

                                        <div class="radio-group">
                                            <label for="colis" style="font-weight: normal; margin-bottom: 10px;"><input id="colis" type="radio" value="colis" name="marchandise[type_colis]">
                                                Colis</label><br>
                                            <label style="font-weight: normal; margin-bottom: 10px;" for="palette"><input id="palette" type="radio" value="palette"  name="marchandise[type_colis]">
                                                Palette</label><br>
                                        </div>

                                        <div>
                                            <br><label for="longueur">Longueur</label><br>
                                            <input class="small-input" id="longueur" type="number" name="marchandise[longeur]">
                                        </div>

                                        <div>
                                            <br><label for="acceptable-temperature">Temperature</label><br>
                                            <input class="small-input" id="acceptable-temperature" name="marchandise[accepte_tmp]" type="number">
                                        </div>

                                        <div>
                                            <br><label for="humidity-range">Humidity range</label><br>
                                            <input class="small-input" id="humidity-range" name="marchandise[humidity_rouge]" type="number">
                                        </div>

                                        <div>
                                            <br><label for="largeur">Largeur (cm)</label><br>
                                            <input class="small-input" id="largeur" name="marchandise[largeur]" type="number">
                                        </div>

                                        <div>
                                            <br><label for="hauteur">Hauteur</label><br>
                                            <input class="small-input" id="hauteur" name="marchandise[hauteur]" type="number">
                                        </div>

                                        <div>
                                            <br><label for="poids">Poids (kg)</label><br>
                                            <input class="small-input" id="hauteur" name="marchandise[poids]" type="number">
                                        </div>

                                        <div class="radio-group">
                                            <label style="font-weight: normal ;margin-bottom: 10px;" for="gerbable"><input id="gerbable" type="radio" value="gerbable" name="marchandise[type_gerbable]">
                                                Gerbable</label><br>
                                            <label style="font-weight: normal" for="non-gerbable"><input id="non-gerbable" type="radio" value="non-gerbable"
                                                name="marchandise[type_gerbable]"> Non gerbable</label>
                                        </div>
										<br>
										
                                       
                                    </div>
									
									<div style="display: flex; flex-direction: row">
										 <div>
                                            <br><label>Type de poids</label><br>
                                            <select style="border: 1px solid #cfcfcf; color:#cfcfcf " name="marchandise[type_poids]">
                                                <option selected value=""></option>
                                                <option style="color: #000">Option 1</option>
                                                <option style="color: #000">Option 2</option>
                                                <option style="color: #000">Option 3</option>
                                            </select>
                                        </div>

                                        <div style="margin-left: 50px; margin-top: 20px" class="radio-group">
                                            <label style="margin-top: -5px">Emballage</label><br>
                                            <label style="font-weight: normal; margin-bottom: 10px;" for="dangereux"><input id="dangereux" type="radio" value="dangereux"
                                                name="marchandise[type_emballage]"> Dangereux</label><br>
                                            <label style="font-weight: normal" for="non-dangereux"><input id="non-dangereux" type="radio" value="non-dangereux"
                                                name="marchandise[type_emballage]"> Non dangereux</label><br>
                                        </div>

                                        <div style="margin-left: 50px;">
                                            <br><label for="autres-instructions">Autres instructions</label><br>
                                            <input class="small-input autres-instructions" id="autres-instructions" type="text">
                                        </div>
									</div>

                                    <div style="margin-top: 30px;" class="form-4">
                                        <a class="lien-nouvel-envoi" href="#"><i class="fa-solid fa-plus"></i> Créer un nouvel envoi</a><br>
                                        <button class="download-btn"><i class="fa-solid fa-download"></i> Merci de télécharger la
                                            facture</button>
                                        <button class="download-btn"><i class="fa-solid fa-download"></i> Merci de télécharger la
                                            FDS</button><br>
                                        <button class="search-btn">rechercher</button>
                                    </div>
                                </div>

                                <!-- AVION CARGO -------------------------------------------->
                                <div id="avion-cargo">
                                    <div class="form-3">
                                        <div>
                                            <br><label for="quantite">Quantité</label><br>
                                            <input class="small-input" name="cargo[qte]" id="quantité" type="number">
                                        </div>

                                        <div class="radio-group">
                                            <label style="font-weight: normal; margin-bottom: 10px" for="colis"><input id="colis" name="cargo[type_colis]"  type="radio" value="colis">
                                                Colis</label><br>
                                            <label style="font-weight: normal" for="palette"><input  name="cargo[type_colis]" id="palette" type="radio" value="palette">
                                                Palette</label><br>
                                        </div>

                                        <div>
                                            <br><label for="longueur">Longueur</label><br>
                                            <input class="small-input" name="cargo[longeur]"  id="longueur" type="number">
                                        </div>

                                        <div>
                                            <br><label for="largeur">Largeur (cm)</label><br>
                                            <input class="small-input" name="cargo[largeur]"  id="largeur" type="number">
                                        </div>

                                        <div>
                                            <br><label for="hauteur">Hauteur</label><br>
                                            <input class="small-input" name="cargo[hauteur]"  id="hauteur" type="number">
                                        </div>

                                        <div>
                                            <br><label for="poids">Poids (kg)</label><br>
                                            <input class="small-input" id="poids" name="cargo[poids]"  type="number">
                                        </div>

                                        <div class="radio-group">
                                            <label style="font-weight: normal; margin-bottom: 10px"for="gerbable"><input id="gerbable" name="cargo[gerbable]"  type="radio"
                                                value="gerbable" >
                                                Gerbable</label><br>
                                            <label style="font-weight: normal;" for="non-gerbable"><input id="non-gerbable" name="cargo[gerbable]"  type="radio" value="non-gerbable"
                                                    > Non gerbable</label><br>
                                        </div><br>

                                        <div>
                                            <br><label>Type de poids</label><br>
                                            <select style="border: 1px solid #cfcfcf; color:#cfcfcf" name="cargo[type_poids]" >
                                                <option selected></option>
                                                <option style="color: #000">Option 1</option>
                                                <option style="color: #000">Option 2</option>
                                                <option style="color: #000">Option 3</option>
                                            </select>
                                        </div>

                                      
                                    </div>
									
									<div style="display: flex; flex-direction: row" id="sep">
									  <div style="margin-top: 12px; margin-right: 30px;" class="radio-group">
                                            <label >Emballage</label><br>
                                            <label style="font-weight: normal; margin-bottom: 10px" for="dangereux"><input id="dangereux" name="cargo[type_emb]"  type="radio" value="dangereux"
                                                    name="danger-emballage"> Dangereux</label><br>
                                            <label  style="font-weight: normal;" for="non-dangereux"><input id="non-dangereux" name="cargo[type_emb]"   type="radio" value="non-dangereux"
                                                    name="danger-emballage"> Non dangereux</label><br>
                                        </div>

                                        <div>
                                            <br><label for="type-avion">Type d'avion</label><br>
                                            <input class="small-input" name="cargo[type_avoin]"   id="type-avion" type="number">
                                        </div>
									</div>

                                    <div style="margin-top: 40px" class="form-4">
                                        <a class="lien-nouvel-envoi" href="#"><i class="fa-solid fa-plus"></i> Créer un nouvel envoi</a><br>
                                        <button class="download-btn"><i class="fa-solid fa-download"></i> Merci de télécharger la
                                            facture</button>
                                        <button class="download-btn"><i class="fa-solid fa-download"></i> Merci de télécharger la
                                            FDS</button><br>
                                        <button type="submit" class="search-btn">rechercher</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->


@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="{{asset('assets/extensions/jquery/jquery.min.js')}}"></script>

<script>

    function service_btn1(){
        $('#service').val('expedition_sandard')
        var expeditionStandard = $("#expedition-standard");
        var marchandiseStc =$("#marchandise-stc");
        var avionCargo = $("#avion-cargo");
        var serviceBtn1 =$("#service-btn-1");
        var serviceBtn2 =$("#service-btn-2");
        var serviceBtn3 = $("#service-btn-3");
        serviceBtn1.css('background','#c6d6db')
        serviceBtn2.css('background','#fff')
        serviceBtn3.css('background','#fff')
        expeditionStandard.css('display','block')
        marchandiseStc.css('display','none');
        avionCargo.css('display','none')


    }
    function service_btn2(){
        $('#service').val('marchandise')
        var expeditionStandard = $("#expedition-standard");
        var marchandiseStc =$("#marchandise-stc");
        var avionCargo = $("#avion-cargo");
        var serviceBtn1 =$("#service-btn-1");
        var serviceBtn2 =$("#service-btn-2");
        var serviceBtn3 = $("#service-btn-3");

        serviceBtn1.css('background','#fff')
        serviceBtn2.css('background','#c6d6db')
        serviceBtn3.css('background','#fff')
        expeditionStandard.css('display','none')
        marchandiseStc.css('display','block');
        avionCargo.css('display','none')


    }
    function service_btn3(){
        $('#service').val('cargo')
        var expeditionStandard = $("#expedition-standard");
        var marchandiseStc =$("#marchandise-stc");
        var avionCargo = $("#avion-cargo");
        var serviceBtn1 =$("#service-btn-1");
        var serviceBtn2 =$("#service-btn-2");
        var serviceBtn3 = $("#service-btn-3");
        serviceBtn1.css('background','#fff')
        serviceBtn2.css('background','#fff')
        serviceBtn3.css('background','#c6d6db')
        expeditionStandard.css('display','none')
        marchandiseStc.css('display','none');
        avionCargo.css('display','block')


    }
</script>
