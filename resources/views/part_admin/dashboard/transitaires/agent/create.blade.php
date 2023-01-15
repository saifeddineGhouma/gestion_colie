
@extends('part_admin.dashboard.layout.global')
@section('contenu')
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
                        <a href="{{route('admin.transiataire.agent.index')}}" class="card-title btn btn-info">
                        liste agents
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="{{route('admin.transiataire.agent.store')}}"  enctype="multipart/form-data" data-parsley-validate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Nom</label>
                                            <input type="text" id="first-name-column"
                                              name="name"
                                            class="form-control" placeholder="First Name"  data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Prenom</label>
                                            <input type="text" id="first-name-column"
                                              name="prenom"
                                            class="form-control" placeholder="First Name"  data-parsley-required="true">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Email</label>
                                            <input type="email" id="first-name-column"

                                            class="form-control" placeholder="exemple@email.com"
                                            name="email" data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column" class="form-label">Telephone</label>
                                            <input type="tel" id="city-column"
                                            name="telephone"
                                            class="form-control"
                                            placeholder="+216 00 000 000"
                                            data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Fonction</label>
                                            <input type="text" id="first-name-column"
                                              name="fonction"
                                            class="form-control" placeholder="First Name"   data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Cnss Numero</label>
                                            <input type="text" id="first-name-column"
                                              name="cnss"
                                            class="form-control" placeholder="00000000"  data-parsley-required="true">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="company-column" class="form-label">company</label>
                                            <select id="company-column"  class="form-control choices form-select" name="company_id" data-parsley-required="true">
                                                <option value="">choisir une companie</option>
                                                @foreach ($companies as $company)
                                                     <option value="{{$company->id}}">{{$company->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Code Postal</label>
                                            <input type="text" id="first-name-column"
                                              name="code_postal"
                                            class="form-control" placeholder="0000"  data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Ville</label>
                                            <input type="text" id="first-name-column"
                                              name="ville"
                                            class="form-control" placeholder="ville"   data-parsley-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Pays</label>
                                            <input type="text" id="first-name-column"
                                              name="pays"
                                            class="form-control" placeholder="pays"  data-parsley-required="true">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Adress</label>
                                        <textarea class="form-control" name="adress" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
