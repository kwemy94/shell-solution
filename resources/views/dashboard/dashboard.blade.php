@extends('dashboard/layouts/layout_dashboard')

{{-- ce fichier contient la section principale du dashboard --}}
@section('dashboard_main')

<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Shell-Solution Dashboard</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-stats" style="background: rgb(210,241,255);color: black;">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-users"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Newsletter</p>
                                        <h4 class="card-title">75</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-primary">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-heart"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Contact</p>
                                        <h4 class="card-title">1478</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-stats card-info">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-folder-open"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category"></p>
                                        <h4 class="card-title">156</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-stats card-success">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="la la-newspaper-o"></i>
                                    </div>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">###</p>
                                        <h4 class="card-title">7</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Task</h4>
                            <p class="card-category">Complete</p>
                        </div>
                        <div class="card-body">
                            <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                        </div>
                        <div class="card-footer">
                            <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">World Map</h4>
                            <p class="card-category">
                            Map of the distribution of users around the world</p>
                        </div>
                        <div class="card-body">
                            <div class="mapcontainer">
                                <div class="map">
                                    <span>Alternative content for the map</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users Statistics</h4>
                            <p class="card-category">
                            Users statistics this month</p>
                        </div>
                        <div class="card-body">
                            <div id="monthlyChart" class="chart chart-pie"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                {{-- <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li>
                </ul> --}}
            </nav>
            <div class="copyright ml-auto">
                2020 <i class="la la-plus-square-o text-primary"></i> by <a href="http://www.grant-shell.com">Shell-Solution</a>
            </div>				
        </div>
    </footer>
</div>

@stop