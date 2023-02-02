@extends('part_transitaire.dashboard.layout.global')
@section('contenu')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Listes Transiter agents</h3>
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
                                            <th>Company</th>
                                            <th>Num Vol</th>

                                            <th>Airport</th>
                                            <th>
                                                Action
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($offers as $offer )
                                        <tr>
                                            <td>
                                                <img src="https://ui-avatars.com/api/?name=company/{{$offer->company_air->nom}}"/>
                                               </td>

                                            <td>{{$offer->num_vol}}</td>
                                             <td>{{$offer->airport_depart}} --  {{$offer->airport_arrive}}</td>
                                            @if(!$offer->isReserved(auth()->guard('transitaire')->user()->id))
                                            <td>
                                                <a href="{{route('transitaire.reserve.offer',$offer->id)}}" class="btn btn-danger">Reserve</a>
                                            </td>
                                            @else
                                             <td>
                                                <a href="#" class="btn btn-warning">en attend</a>
                                            </td>
                                            @endif

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
