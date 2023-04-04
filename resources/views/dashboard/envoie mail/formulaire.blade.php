@extends('dashboard/layouts/layout_dashboard')

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
                        <form method="post" action="">
                            <input type="text" placeholder="Pseudo" name="pseudo_exp">
                            <input type="email" placeholder="Email" name="email_exp">
                            <input type="text" placeholder="Objet" name="objet">
                            <textarea placeholder="Votre message" name="message"></textarea>
                            <input type="submit" value="Send" name="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  



@endsection