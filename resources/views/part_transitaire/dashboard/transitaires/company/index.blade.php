@extends('part_admin.dashboard.layout.global')
@section('contenu')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Listes Transiter Company</h3>
                    <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listes Transiter Company</li>
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
                            <h4 class="card-title">
                                <a href="{{route('admin.transiataire.company.create')}}" class="btn btn-info">
                                Ajoute company
                                </a>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <!-- *************************
                                    **************************
                                       start datatabel
                                    **************************
                                    **************************
                                -->
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Logo</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($companies as $company )
                                        <tr>
                                            <td>{{$company->name}}</td>
                                            <td>{{$company->email}}</td>
                                            <td>{{$company->telephone}}</td>
                                            <td>
                                                <img src="{{asset($company->logo)}}"
                                                width="50px" height="50px" />
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                                <!-- *************************
                                    **************************
                                     end datatabel
                                    **************************
                                    **************************
                                -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    @endsection
