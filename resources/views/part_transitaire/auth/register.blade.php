<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
    <title>Document</title>
    <style>
        @font-face {
            font-family: "Nunito-SemiBold";
            src: url("Nunito-SemiBold.ttf");
        }

        body {
            font-family: "Nunito-SemiBold";
            font-family: "Nunito-SemiBold";
            background-image: url({{asset('assets/images/auth/img/background.png')}});
            background-size: cover;
        }

        img {
            margin: 0 auto;
        }

        .container {
            width: 800px;
            height: auto;
            background: #336A7D;
            margin: 0 auto;
            border-radius: 9px;
            opacity: 0.9;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin: 0 auto;
            border-radius: 9px;
            text-align: left;
            padding-bottom: 40px;
        }

        form h2 {
            padding-top: 60px;
            color: #fff;
            font-size: 34px;
            margin-bottom: 20px;
        }

        .logo-container {
            text-align: center;
        }

        .label {
            text-align: left;
            color: #fff;
        }

        input[type="text"] {
            width: 583px;
            height: 40px;
            background: #F8F8F8;
            border: none;
            border-radius: 7px;
            margin-top: 20px;
        }
        input[type="password"] {
            width: 583px;
            height: 40px;
            background: #F8F8F8;
            border: none;
            border-radius: 7px;
            margin-top: 20px;
        }

        input[type="number"] {
            width: 583px;
            height: 40px;
            background: #F8F8F8;
            border: none;
            border-radius: 7px;
            margin-top: 20px;
        }

        input[type="email"] {
            width: 583px;
            height: 40px;
            background: #F8F8F8;
            border: none;
            border-radius: 7px;
            margin-top: 20px;
        }

        #next-btn {
            color: #fff;
            font-size: 20px;
            text-decoration: none;
            float: right;
            margin-top: 40px;
            margin-left: 500px;
            cursor: pointer;
        }

        select {
            width: 583px;
            height: 40px;
            background: #F8F8F8;
            border: none;
            border-radius: 7px;
            margin-top: 20px;
        }

        .checkbox-container {
            width: 590px;
            margin-top: 20px;
        }

        .checkbox-container:nth-child(1) {
            margin: 10px 0px;
        }

        .checkbox-container .label {
            color: #fff;
            font-size: 15px;
        }

        .register-btn {
            width: 356px;
            height: 52px;
            background: #C20000;
            border: none;
            color: white;
            border-radius: 9px;
            margin-top: 20px;
            font-size: 25px;
            cursor: pointer;
            text-align: center;
        }

        .register-btn:hover {
            background: #008ce9;
            transition: 500ms;
        }

        .final-input {
            margin-bottom: 20px;
        }

        #register-2 {
            display: none;
            margin-top: 100px;
        }

        .animateHeading {
            transform: translateY(-60px);
            transition: 500ms;
        }

        .animateReg2 {
            transform: translateY(-200px);
            transition: 500ms;
        }

        .reg-btn-cont {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="logo-container">
            <img src="{{asset('assets/images/auth/img/logo-cargo.PNG')}}" alt="logo">
        </div>

        <div class="container">
            <form method="POST" action="{{route('transitaire.register')}}">
                @csrf
                <h2 id="heading">Transitaires</h2>

                <!-- REGISTER SECTION 1 ------------------------------------------->
                <div id="register-1">
                    <div>
                        <br><label class="label">Nom</label> <br>
                        <input class="part_1" type="text" name="nom">
                    </div>

                    <div>
                        <br><label class="label">Prénom</label> <br>
                        <input class="part_1"  type="text" required name="prenom">
                    </div>

                    <div>
                        <br> <label class="label">Nom de la compagnie</label> <br>
                        <select name="company_id"  class="part_1" >
                            <option value="">Select Company</option>
                            @foreach ($companies as  $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div>
                        <br> <label class="label">Adresse filiale</label> <br>
                        <input type="text" name="address" class="part_1" >
                    </div>

                    <div>
                        <br> <label class="label">Ville</label> <br>
                        <input type="text" name="ville" class="part_1" >
                    </div>

                    <p   id="next-btn">suivant <i class="fa-regular fa-circle-right"></i></p>
                </div>


                <!-- REGISTER SECTION 2 ------------------------------------------->
                <div id="register-2">
                    <div>
                        <br> <label class="label">Code postal</label> <br>
                        <input type="number" name="code_postal">
                    </div>

                    <div>
                        <br> <label class="label">Pays</label> <br>
                        <select name="pays" required>
                            <option value="" selected></option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antartica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo">Congo, the Democratic Republic of the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia (Hrvatska)</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="France Metropolitan">France, Metropolitan</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                            <option value="Holy See">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran (Islamic Republic of)</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of
                            </option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia, Federated States of</option>
                            <option value="Moldova">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint LUCIA">Saint LUCIA</option>
                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                            <option value="Span">Spain</option>
                            <option value="SriLanka">Sri Lanka</option>
                            <option value="St. Helena">St. Helena</option>
                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                            </option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Viet Nam</option>
                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>


                    <div>
                        <br> <label class="label">Fonction</label> <br>
                        <input type="text" name="fonction" required>
                    </div>

                    <div>
                        <br> <label class="label">Email</label> <br>
                        <input type="email" name="email" required>
                    </div>

                    <div>
                        <br> <label class="label">Numéro de téléphone</label> <br>
                        <input type="number" name="telephone" required>
                    </div>

                    <div>
                        <br> <label class="label">IATA CASS numéro</label> <br>
                        <input type="number" name="cass_numero" required>
                    </div>
                    <div>
                        <br> <label class="label">Password</label> <br>
                        <input type="password" name="password" required>
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox"><label class="label"> je confirme que ce numéro et bien mon numéro IATA
                            CASS et je prends connaissance qu'il va être utilisé pour la facturation de mes
                            réservations</label><br>
                        <input type="checkbox"><label name="conf" class="label"> j'accepte les termes, conditions et règles de
                            confidentialité</label>
                    </div>

                    <div class="reg-btn-cont">
                        <button type="submit" class="register-btn">S'inscrire</button>
                    </div>

                </div>
            </form>
        </div>

    </div>

    <script>
        const register1 = document.getElementById("register-1");
        const register2 = document.getElementById("register-2");
        const nextBtn = document.getElementById("next-btn");
        const heading = document.getElementById("heading")

        nextBtn.addEventListener("click", function () {
            let elements = document.getElementsByClassName('part_1')//querySelectorAll('input');
            if(elements != null)
               {
                   let elements = document.querySelectorAll('select');
               }

            for (let elem of elements) {
                if ( elem.value == '') {
                    console.log(elem)
                     alert("vous pouvez remplir tous formulaire!");
                     return ;
                 }
            }
            register1.style.display = "none";
            register2.style.display = "block";
            register2.classList.add("animateReg2");
            heading.classList.add("animateHeading");
        })
    </script>
</body>

</html>
