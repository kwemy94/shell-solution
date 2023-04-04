<!-- Menu de gauche du dashboard -->

<div class="sidebar">
        <div class="scrollbar-inner sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="/images/profile.jpg">
                </div>
                <div class="info">
                    <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">Admin</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample" aria-expanded="true">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--  fin zone profile gauche -->
            <ul class="nav">
                <li class="nav-item active">
                    <a href="dashboard">
                        <i class="la la-dashboard"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/message">
                        <i class="la la-table"></i>
                        <p>Messages</p>
                        {{-- <span class="badge badge-count">{{$nb_message}}</span> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/news-letter">
                        <i class="la la-table"></i>
                        <p>News-letter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="la la-keyboard-o"></i>
                        <p>Client</p>
                        <span class="badge badge-count">36</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="la la-th"></i>
                        <p>Chats</p>
                        <span class="badge badge-count">6</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="la la-bell"></i>
                        <p>Contacter</p>
                        <span class="badge badge-success">3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="la la-font"></i>
                        <p>Setting</p>
                        <span class="badge badge-danger">25</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>