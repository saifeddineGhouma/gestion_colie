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
        font-family: 'Nunito';
        background: #F2F6FF;
    }

    .container-1 {
        background: #fff;
        width: 70%;
        padding: 0px 20px;
        margin-left: 30px;
        padding-top: 20px;
        padding-bottom: 20px;
        border-radius: 15px;
    }

    header {
        display: flex;
        flex-direction: row;
        font-family: "Nunito-SemiBold";
        align-items: center;
        margin-bottom: 80px;
    }

    header img {
        width: 150px;
        height: auto;
    }

    .destination-wrapper {
        margin-left: 80px;
    }

    .destination {
        display: flex;
        flex-direction: row;
        align-content: center;
        align-items: center;
		color: #000;
    }

    .destination p {
        margin-right: 20px;
		color: #000;
    }

    .fa-plane {
        font-size: 30px;
		color: #000;
    }

    .destination p {
        font-size: 25px;
        margin: 0px;
		color: #000;
    }

    .destination .fa-arrow-right-long {
        font-size: 40px;
        margin: 0px 20px;
		color: #000;
    }

    .destination-label p {
        font-size: 20px;
        margin: 0px; 
		color: #000;
    }

    main {
        width: auto;
        height: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
    }

    .main-1 {
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 100%;
        border: 1px solid #000;
        border-radius: 5px;
        margin-bottom: 80px;
    }

    .main-1-1 {
        margin-left: 20px;
        margin-right: 100px;
    }

    .main-1-2 {
        margin-right: 100px;
    }

    .main-1-3 {
        margin-left: 50px;
    }

    .main-2 {
		width: 100%;
        display: flex;
        flex-direction: row;
    }

    .dest {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .fa-arrow-right-long {
        margin: 0px 20px;
    }

    th {
        padding-right: 100px;
        padding-bottom: 30px;
		color: #000;
    }
	
	td {
		color: #000;	
	}

    .fa-check {
        color: green;
        font-size: 30px;
    }

    .main-3 {
        width: 100%;
        margin-top: 80px;
    }

    .main-3-description {
        color: #787878;
    }

    footer {
        padding: 40px 0px;
    }

    .book {
        width: 312px;
        height: 39px;
        color: #fff;
        background: #C20000;
        border: none;
        border-radius: 5px;
        float: right;
    }

    .book:hover {
        background: #007ce2;
        cursor: pointer;
    }


    /* -------------------------------------------------- */

    .wrapper {
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 30px;
    }


    .container-2 {
        background: #fff;
        width: 30%;
        height: 500px;
        margin-left: 10px;
        text-align: center;
        border-radius: 15px;
    }

    .container-header {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
		margin-top: 20px;
		margin-left: 10px;
		margin-right: 10px;
    }

    .container-header h2 {
        color: #336A7D;
        font-size: 18px;
    }

    .container-header p {
        color: #787474;
        font-size: 14px;
    }

    .booking-desc {
        color: #787474;
        font-size: 12px;
		font-weight: bold;
        text-align: center;
    }
	
	.ch2-2 {
		margin-top: 10px;	
		font-size: 15px;
	}
	
	

    .book-num-cont {
		width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
		padding: 0px 10px;
    }

    .book-code {
		margin-top: 15px !important;
        border: 1px solid #c4c4c4;
        height: 33px;
        width: 99%;
        font-size: 16px;
        text-align: center;
		padding: 0px 30px;
		margin-top: 10px;
		font-weight: bold;
		color: #000;
    }
	
	.amount {
		margin-top: 10px !important;	
	}

    .book-num {
        border: 1px solid #c4c4c4;
        height: 33px;
        width: 100%;
        margin-right: 5px;
        font-size: 16px;
    }

    form {
        text-align: center;
    }

    .label {
        font-size: 12px;
		color: #000; 
		font-weight: bold;
        margin-left: 5px;
    }

    .booking-btn {
        width: 90%;
        height: 50px;
        background: #C20000;
        border-radius: 15px;
        text-align: center;
        color: #fff;
        font-size: 19px;
        border: none;
        margin: 20px 0px;
        cursor: pointer;
    }

    .booking-btn:hover {
        background: #0063e4;
    }

    .booking-text {
        color: #787474;
        font-size: 12px;
    }
	
	.paper-awb label {
		color: #000;
		}
	
	p {
		color: #000;	
	}
	
	.main-1-3 p {
		font-size: 12px;	
	}
	
	.fa-arrow-right-long {
		color: #000;
		font-size: 20px;
		margin-top: -20px;
	}
</style>
<div class="wrapper">


    <div class="container-1">
        <header>
            <div class="">
                <img src="{{asset('assets/images/logo/egyptair.png')}}" alt="logo egyptair">
            </div>

            <div class="destination-wrapper">
                <div class="destination">
                    <p>FRA</p>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <p>EGY</p>
                </div>

                <div class="destination-label">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </header>

        <main>
            <div class="main-1">
                <div class="main-1-1">
                    <i class="fa-solid fa-plane"></i>
                </div>

                <div class="main-1-2">
                    <p>LH7288</p>
                </div>

                <div class="dest">
                    <p>FRA</p>
                    <i class="fa-solid fa-arrow-right-long"></i>
                    <p>EGY</p>
                </div>

                <div class="main-1-3">
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>

            <div class="main-2">
                <table>
                    <tr>
                        <th>Pièces</th>
                        <th>Dimension</th>
                        <th>Weight</th>
                        <th>Stackable</th>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>4.95cm²</td>
                        <td>726.00</td>
                        <td><i class="fa-solid fa-check"></i></td>
                    </tr>
                </table>
            </div>


            <div class="main-3">
                <div>
                    <hr>
                </div>

                <div>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p class="main-3-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    </p>
                </div>

                <div>
                    <hr>
                </div>
            </div>
        </main>


        <footer>
            <a href="{{route('transitaire.reserve.offer',$offer->id)}}">
                  <button class="book">Réserver</button>
            </a>
        </footer>
    </div>


    <div class="container-2">
        <div class="container-header">
            <div class="ch2-1">
                <h2>Booking details</h2>
            </div>

            <div class="ch2-2">
				<p><span id="amount">1039.50</span> TND</p>
            </div>
        </div>

        <div>
            <p class="booking-desc">Lorem ipsum dolor sit amet, consetetur</p>
        </div>

        <div class="book-num-cont">
            <div>
                <p class="book-code">607</p>
            </div>

            <div>
                <input class="book-num" type="number">
            </div>
        </div>
	
		
        <div>
            <form>
                <input id="paper-awb" type="radio" name="booking-details" value="paper-awb"><label for="paper-awb" class="label"> Paper AWB</label>
                <input id="eap" type="radio" name="booking-details" value="eap"><label for="eap" class="label"> EAP</label>
                <input id="eaw" type="radio" name="booking-details" value="eaw"><label for="eaw" class="label"> EAW</label>
            </form>
        </div>

        <div>
            <button class="booking-btn"><i class="fa-solid fa-lock"></i> Booking</button>
        </div>

        <div>
            <p class="booking-text">Lorem ipsum dolor sit amet, consetetur</p>
        </div>

        <div>
            <hr>
        </div>

        <div>
            <p class="booking-text">Lorem ipsum dolor sit amet, consetetur</p>
        </div>

        <div>
            <hr>
        </div>


    </div>



    <!-- part2 -->
</div>





@stop
