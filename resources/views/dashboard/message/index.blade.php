@extends('dashboard/layouts/layout_dashboard')

{{-- liste des patients de la base de données --}}
@section('dashboard_main')
<div class="main-panel">
    <div class="content">
        <div class="row">
            {{-- <div class="col-md-8"></div> --}}
            <div class="col-md-11">
                <div class="card card-tasks">
                    <div class="card-header ">
                        <h4 class="card-title">Liste des emails réçus</h4>
                        <p class="card-category">Clients</p>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Identité client</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col"> Subject </th>
                                        <th scope="col">Message</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        {{-- initialisation du compteur du nbre de message --}}
                                        <?php $nb_message = 0; ?>
                                        @foreach($messages as $message)
                                            <?php $nb_message = $nb_message + 1; ?>
                                            <tr>
                                                <td> {{ $nb_message }} </td>
                                                <td>{{ $message->nom }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->subject }}</td>
                                                <td>{{ $message->message }}</td>
                                                <td> <a href="/message/{{ $message->id }}" style="font-weight: bold;"> Plus Informations</a> </td>
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