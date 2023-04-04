@extends('dashboard/layouts/layout_dashboard')

{{-- liste des patients de la base de données --}}
@section('dashboard_main')
<div class="main-panel">
    <div class="content">
        <div class="row">
            {{-- <div class="col-md-8"></div> --}}  
            <div class="col-md-11">
                <div class="card card-tasks">
                    
                    {{-- Alerte de suppression --}}
                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert" style="text-align:center">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="card-header ">
                        <h4 class="card-title">Liste des Abonnés à la lettre d'information</h4>
                        <p class="card-category">Visiteurs & Clients</p>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Adresse E-mail Visiteur/Clients</th>
                                        <th> </th>
                                        <th> <a href="/newsletter-mail"> <button class="btn btn-primary">Message commun </button> </a> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        {{-- initialisation du compteur du nbre de message --}}
                                        <?php $nb_message = 0; ?>
                                        @foreach($newsletters as $news)
                                            <tr>
                                                <?php $nb_message = $nb_message + 1; ?>
                                                <td> {{ $nb_message }} </td>
                                                <td>{{ $news->email }}</td>
                                                <td> </td>
                                                <td> <a href="/news-letter/{{ $news->id }}" style="font-weight: bold;"> Plus</a> </td>
                                                
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop