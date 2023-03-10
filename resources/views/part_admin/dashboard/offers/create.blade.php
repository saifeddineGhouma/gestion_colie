
@extends('part_admin.dashboard.layout.global')
@section('contenu')
<style>
    @font-face {
        font-family: "Nunito-Bold";
        src: url("Nunito-Bold.ttf");
    }
    body {
        font-family: "Nunito-Bold";
        background: #F2F6FF;
    }

    label {
        color: #336A7D;
    }

    form {

        margin: 0 auto;
        width: 700px;
        background: #fff;
        padding: 40px;
        border-radius: 15px;
    }

    form div {
        margin-bottom: 30px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    select {
        width: 305px;
        margin-left: 50px;
        border-radius: 5px;
        border: 1px solid #bdbdbd;
    }

    input {
        width: 300px;
        margin-left: 50px;
        border-radius: 5px;
        border: 1px solid #bdbdbd;
    }

    .creer-offre-btn {
        background: #C20000;
        font-size: 18px;
        border: none;
        color: #fff;
        border-radius: 5px;
        float: right;
        padding: 3px 50px;
        cursor: pointer;
    }

    .creer-offre-btn:hover {
        background: #8b0f0f;
    }
</style>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Vertical Layout with Navbar</h3>
                <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

               <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.offer.index')}}" class="card-title btn btn-info">
                        liste offers
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="{{route('admin.offer.store')}}"  enctype="multipart/form-data" data-parsley-validate>
                                @csrf
                                <div>
                                    <label>Choisir compagnie</label>
                                    <select name="company_air_id" required>
                                        <option value="">Choisir compagnie</option>
                                        @foreach ($companies as $company)
                                        <option value="{{$company->id}}">{{$company->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label>Num??ro de vol</label>
                                    <input type="number" name="num_vol" required >
                                </div>
                                <div>
                                    <label>A??roport de d??part</label>
                                    <input type="text"  name="airport_depart" required>
                                </div>

                                <div>
                                    <label>A??roport d'arrive</label>
                                    <input type="text"  name="airport_arrive" required>
                                </div>

                                <div>
                                    <label>Jour de d??part</label>
                                    <input type="date"   name="day_depart" required>
                                </div>
                                <div>
                                    <label>freq_depart</label>
                                    <input type="date"   name="freq_depart" required>
                                </div>
                                <div>
                                    <label>Intervalle poids</label>
                                    <input type="number"  name="poids" required>
                                </div>

                                <div>
                                    <label>Tarif en fonction de l'intervalle poids</label>
                                    <input type="number"   name="tarif_en_kg" required>
                                </div>

                                <div>
                                    <label>Capacitaire en poids taxable</label>
                                    <input type="number"  name="capacite_en_text" required >
                                </div>



                                <div>
                                    <label>Type Gerbable</label>
                                    <select name="type_emballage" required>
                                        <option value="gerbable">Gerbable</option>
                                        <option value="non_gerbable">Non Gerbable</option>
                                     </select>
                                </div>

                                <div>
                                    <label>exipre date</label>
                                    <input type="date"   name="expire_date" required>
                                </div>
                                <div>
                                    <label>service</label>
                                    <select name="service" required>
                                        <option value="expedition">Expedition standard</option>
                                        <option value="marchandise">Marchandise</option>
                                        <option value="cargo">Avoin Cargo</option>

                                     </select>
                                </div>
                                <div>
                                    <label>longeur</label>
                                    <input type="number"   name="longeur" required>
                                </div>
                                <div>
                                    <label>largeur</label>
                                    <input type="number"   name="largeur" required>
                                </div>
                                <div>
                                    <label>hauteur</label>
                                    <input type="number"   name="hauteur" required>
                                </div>
                                <div>
                                    <label>type de point</label>
                                    <input type="number"   name="type_de_point" required>
                                </div>
                                <div>
                                    <label> Emballage</label>
                                     <select name="type_emballage" required>
                                        <option value="dangereux">Dangereux</option>
                                        <option value="non_dangereux">Non Dangeureux</option>
                                     </select>

                                </div>
                                <div>
                                    <label>Comissions</label>
                                    <input type="number"   name="commission" required>
                                </div>

                                <button ype="submit" class="creer-offre-btn">Cr??er l'offre</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->

@endsection
