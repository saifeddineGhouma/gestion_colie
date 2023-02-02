@extends('part_transitaire.dashboard.layout.global')
<style>
    @font-face {
        font-family: "Nunito-SemiBold";
        src: url("Nunito-SemiBold.ttf");
    }

    body {
        background: #F2F6FF;
        font-family: "Nunito-SemiBold";
    }

    .section-1 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding: 20px 0px;
    }

    .section-2 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding: 20px 0px;
        align-items: center;
    }

    .section-3 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding: 20px 0px;
        align-items: center;
    }

    .section-4 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding: 20px 0px;
        align-items: center;
    }

    .section-5 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding: 20px 0px;
        align-items: center;
    }

    .section-1-2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
        align-items: center;
        justify-items: center;
    }

    .section-2-2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
    }

    .section-3-2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
    }

    .section-4-2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
    }

    .section-5-2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
    }

    .date-and-time {
        margin: 0px 20px;
    }

    .date,
    .time {
        font-size: 13px;
        margin: 0px;
        padding: 0;
    }

    .fra {
        color: #BEBEBE;
        font-size: 9px;
    }

    .logo {
        width: 150px;
        height: auto;
    }

    .pill {
        width: 200px;
        height: auto;
    }

    .btn-reserver {
        width: 181px;
        height: 40px;
        background: #C20000;
        color: #fff;
        border: none;
        border-radius: 9px;
        cursor: pointer;
    }

    .btn-reserver:hover {

        background: #0036e6;
        color: #fff;

    }

    main {
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .main-1 {
        height: auto;
        width: 900px;
        border-radius: 15px;
        background: #fff;
        padding: 0px 5px;
        margin-right: 50px;
        padding: 20px 0px;
    }

    .main-2 {
        width: 371px;
        height: auto;
        background: #fff;
        display: flex;
        flex-direction: column;
        border-radius: 15px;
        padding-bottom: 70px;
        margin-bottom: 210px;
    }

    .main-2 h2 {
        color: #336A7D;
        font-size: 25px;
        padding-left: 15px;
    }

    label {
        color: #292929;
        font-size: 15px;
        font-weight: bold;
    }

    input[type='range'] {
        width: 350px;
    }

    input[type='range']::-ms-thumb {
        background: #fff;
    }

    input[type="checkbox"] {
        padding: 10px;
    }

    form {
        padding-left: 9px;
    }

    .auh {
        text-align: center;
        color: #BEBEBE;
        font-size: 9px;
    }

    .prix {
        font-size: 20px;
        font-weight: bold;
        margin: 0px;
    }

    .carrier {
        font-size: 18px;
        font-weight: bold;
    }

    .price {
        margin-left: 40px;
    }

    .label {
        font-size: 20px;
    }

    .aller {
        font-size: 20px;
        font-weight: bold;
    }

    .hor-aller {
        margin: 0px;
        padding: 0px;
    }

    /* -------------------------------------------- */
</style>
@section('contenu')
    <div class="page-heading">


        <!-- // Basic multiple Column Form section start -->
             <main>
          <div class="row">
            <div class="col-md-8">
                <div class="main-1">
                    <!-- SECTION 1-->
                    @foreach ($offers as $offer)
                    <div class="section-1">

                        <!-- SECTION 1 PART 1  -->
                        <div class="section-1-1">
                            <img class="logo"
                                 src="{{$offer->company_air->getImage()}}"
                                 alt="egyptair-logo">
                        </div>

                        <!-- SECTION 1 PART 2  -->
                        <div class="section-1-2">
                            <div class="date-and-time">
                                <p class="date">LUN 08.06</p>
                                <p class="time">9:25</p>
                                <p class="fra">{{$offer->airport_depart}}</p>
                            </div>

                            <div>
                                <img class="pill" src="{{asset('assets/images/company/pill.png')}}" alt="">
                                <p class="auh">AUH</p>
                            </div>

                            <div class="date-and-time">
                                <p class="date">MER 08.06</p>
                                <p class="time">9:25</p>
                                <p class="fra">FRA</p>
                            </div>
                        </div>

                        <div class="section-1-3">
                            <p class="prix">£{{$offer->tarif_en_kg}} /kg</p>
                            <p class="carrier">{{$offer->airport_arrive	}}</p>
                            <a href="{{route('transitaire.reserve.offer',$offer->id)}}">
                                <button class="btn-reserver">Réserver</button>
                            </a>
                        </div>
                    </div>

                    <!-- DIVIDER -->
                    <div>
                        <hr>
                    </div>
                    @endforeach


                </div>



            </div>
          {{-- <div class="col-md-4">

                <div class="main-2">
                    <div>
                        <h2>Escales</h2>
                    </div>

                    <div>
                        <hr>
                    </div>

                    <form>
                        <div>
                            <input type="checkbox" name="escale" value="direct"><label class="label">Direct</label>
                            <p class="price">Dés 80€</p>
                        </div>

                        <div>
                            <input type="checkbox" name="escale" value="1-escale"><label class="label">1 escale</label>
                            <p class="price">Dés 149€</p>
                        </div>

                        <div>
                            <input type="checkbox" name="escale" value="direct"><label class="label">2+Escales</label>
                            <p class="price">Dés 374€</p>
                        </div>

                        <div>
                            <h2>Heures de départ</h2>
                        </div>

                        <div>
                            <hr>
                        </div>

                        <div>
                            <p class="aller">Aller</p>
                            <p class="hor-aller">2:30 - 6:30</p>
                        </div>

                        <div>
                            <input id="dual-thumb-slider" class="dual-thumb-slider" step="1" type="range" min="2" max="10">
                        </div>

                        <div>
                            <h2>Durée du voyage:</h2>
                        </div>

                        <div>
                            <hr>
                        </div>

                        <div>
                            <p>2.5 Heures - 29.5 Heures</p>
                        </div>

                        <div>
                            <input type="range" min="0" max="10">
                        </div>



                    </form>
                </div>


            </div>  --}}
          </div>
            </main>

        <!-- // Basic multiple Column Form section end -->
    </div>
    @endsection
