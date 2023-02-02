@extends('part_transitaire.dashboard.layout.global')
@section('contenu')
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">

<style>
    @font-face {
        font-family: "Nunito-SemiBold";
        src: url("Nunito-SemiBold.ttf");
    }

    body {
        background: #F2F6FF;
        font-family: "Nunito";
    }

    .filter-section {
		width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        height: 84px;
        background: #FFFFFF;
        border-radius: 9px;
        justify-content: space-around;
		padding: 0px 20px;
    }

    .search-field {
        width: 250px;
        height: 39px;
        background: #F5F5F5;
        border-radius: 7px;
        border: none;
        margin-left: 5px;
        margin-top: 0px;
		padding-left: 20px;
    }

    form {
        margin-right: 50px;
    }

    .fa-calendar-day {
        margin-top: 0px;
        font-size: 30px;
        color: #707070;
    }

    .date-input {
        width: 150px;
        height: 39px;
        background: #F5F5F5;
        border-radius: 7px;
        border: none;
        margin-left: 13px;
        margin-top: 0px;
		color: #000;
        margin-right: 40px;
		padding-left: 20px;
    }

    .fa-filter {
        color: #336A7D;
        font-size: 30px;
        margin-top: 0px;
        cursor: pointer;
    }

    .btn-filtre {
        width: 92px;
        height: 39px;
        border: none;
        border-radius: 7px;
        background: #336A7D;
        margin-left: 50px;
        margin-top: 0px;
        color: #fff;
        cursor: pointer;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    .table-section {
        background: #fff;
        border-radius: 15px;
        height: auto;
        margin-top: 10px;
    }

    thead {
        height: 60px;
        border-bottom: 1px solid #cccccc;

    }

    .table-section table {
        text-align: center;
    }

    .table-section th {
        font-size: 12px;
        padding-right: 5px;
        font-weight: bold;
		color: #000000;
		padding-left: 5px;
    }

    .approved {
        width: 100px;
        height: 30px;
		margin: 0px 20px;
        background: #198754;
        border-radius: 7px;
        border: none;
        color: #fff;
        font-size: 17px;
    }

    .pending {
        width: 137px;
        height: 30px;
        background: #CFBB06;
        border-radius: 7px;
        border: none;
        color: #fff;
        font-size: 17px;
    }

    .rejected {
        width: 137px;
        height: 30px;
        background: #DC3545;
        border-radius: 7px;
        border: none;
        color: #fff;
        font-size: 17px;
    }

    .pdf {
        color: #336A7D;
        font-size: 25px;
        cursor: pointer;
		margin: 0px 10px;
    }

    td {
		font-size: 14px;
        padding: 20px 5px;
    }

    tr:nth-child(even) {
        background-color: #EFEFEF;
    }
</style>
<div class="main-wrapper">


    <!-- FILTER SECTION ------------------------------------------------------------------->
    <div class="filter-section">

        <div>
            <form>
                <input class="search-field" type="text" placeholder="Recherche par mot clé">
            </form>
        </div>


        <div>
            <hr>
        </div>

        <div>
            <i class="fa-solid fa-calendar-day"></i>
        </div>

        <div>
            <input class="date-input" type="text" placeholder="06/06/1986">
        </div>

        <div>
            <i class="fa-solid fa-calendar-day"></i>
        </div>

        <div>
            <input class="date-input" type="text" placeholder="06/06/1986">
        </div>


        <div>
            <i class="fa-solid fa-filter"></i>
        </div>

        <div>
            <button class="btn-filtre">Filtre</button>
        </div>
    </div>



    <!-- TABLE SECTION --------------------------------------------------------------->
    <div class="table-section">
        <table>
            <thead>
                <th>Num LTA</th>
                <th>Date de départ</th>
                <th>Date d'arrivée </th>
                <th>Aéroport de départ </th>
                <th>Aéroport d'arrivée </th>
                <th>Réservé par </th>
                <th>Compagnie aérienne </th>

                <th>Coût </th>
                <th>Etat </th>
            </thead>

            <tbody>
                @foreach ($reservations as $reservation)


                <tr>
                    <td>{{$reservation->offer->num_vol	}}</td>
                    <td>{{$reservation->offer->day_depart}}</td>
                    <td>{{$reservation->offer->expire_date}}</td>
                    <td>{{$reservation->offer->airport_depart}}</td>
                    <td>{{$reservation->offer->airport_arrive	}}</td>
                    <td>{{$reservation->transitaire->nom}}	</td>
                    <td>{{$reservation->offer->company_air->nom}}</td>
                    <td>{{$reservation->total() }} TND</td>
                    <td><button class="approved">Approuvé</button></td>

                    <td><i class="pdf fa-solid fa-file-pdf"></i></td>
                </tr>
				
				 <tr>
                    <td>{{$reservation->offer->num_vol	}}</td>
                    <td>{{$reservation->offer->day_depart}}</td>
                    <td>{{$reservation->offer->expire_date}}</td>
                    <td>{{$reservation->offer->airport_depart}}</td>
                    <td>{{$reservation->offer->airport_arrive	}}</td>
                    <td>{{$reservation->transitaire->nom}}	</td>
                    <td>{{$reservation->offer->company_air->nom}}</td>
                    <td>{{$reservation->total() }} TND</td>
                    <td><button class="approved">Approuvé</button></td>

                    <td><i class="pdf fa-solid fa-file-pdf"></i></td>
                </tr>
				
				 <tr>
                    <td>{{$reservation->offer->num_vol	}}</td>
                    <td>{{$reservation->offer->day_depart}}</td>
                    <td>{{$reservation->offer->expire_date}}</td>
                    <td>{{$reservation->offer->airport_depart}}</td>
                    <td>{{$reservation->offer->airport_arrive	}}</td>
                    <td>{{$reservation->transitaire->nom}}	</td>
                    <td>{{$reservation->offer->company_air->nom}}</td>
                    <td>{{$reservation->total() }} TND</td>
                    <td><button class="approved">Approuvé</button></td>

                    <td><i class="pdf fa-solid fa-file-pdf"></i></td>
                </tr>
				
				 <tr>
                    <td>{{$reservation->offer->num_vol	}}</td>
                    <td>{{$reservation->offer->day_depart}}</td>
                    <td>{{$reservation->offer->expire_date}}</td>
                    <td>{{$reservation->offer->airport_depart}}</td>
                    <td>{{$reservation->offer->airport_arrive	}}</td>
                    <td>{{$reservation->transitaire->nom}}	</td>
                    <td>{{$reservation->offer->company_air->nom}}</td>
                    <td>{{$reservation->total() }} TND</td>
                    <td><button class="approved">Approuvé</button></td>

                    <td><i class="pdf fa-solid fa-file-pdf"></i></td>
                </tr>
                @endforeach

            </tbody>

            </tr>
        </table>


    </div>
</div>

@stop

