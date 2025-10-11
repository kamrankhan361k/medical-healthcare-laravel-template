@extends('layouts.admin')

@section('title', 'Student Profile - Webstrot Admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <h1>Student Profile</h1>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">App-Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <div id="main-content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card p-0">
                        <div class="stat-widget-three">
                            <div class="stat-icon bg-primary">
                                <i class="ti-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-digit">123</div>
                                <div class="stat-text">New User</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-0">
                        <div class="stat-widget-three">
                            <div class="stat-icon bg-success">
                                <i class="ti-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-digit">123</div>
                                <div class="stat-text">New User</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-0">
                        <div class="stat-widget-three">
                            <div class="stat-icon bg-warning">
                                <i class="ti-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-digit">123</div>
                                <div class="stat-text">New User</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-0">
                        <div class="stat-widget-three">
                            <div class="stat-icon bg-danger">
                                <i class="ti-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-digit">123</div>
                                <div class="stat-text">New User</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Student Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="user-profile m-t-15">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="user-photo m-b-30">
                                            <img class="img-responsive" src="assets/images/user-profile.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="user-profile-name">Mr. Ajay</div>
                                        <div class="custom-tab user-profile-tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#1" aria-controls="1"
                                                        role="tab" data-toggle="tab">About</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="1">
                                                    <div class="contact-information">
                                                        <div class="phone-content">
                                                            <span class="contact-title">Name:</span>
                                                            <span class="phone-number">Mr. Ajay</span>
                                                        </div>
                                                        <div class="website-content">
                                                            <span class="contact-title">Class:</span>
                                                            <span class="contact-website">3</span>
                                                        </div>
                                                        <div class="skype-content">
                                                            <span class="contact-title">Section:</span>
                                                            <span class="contact-skype">A</span>
                                                        </div>
                                                        <div class="address-content">
                                                            <span class="contact-title">Roll:</span>
                                                            <span class="mail-address">#2909</span>
                                                        </div>
                                                        <div class="gender-content">
                                                            <span class="contact-title">Gender:</span>
                                                            <span class="gender">Male</span>
                                                        </div>
                                                        <div class="phone-content">
                                                            <span class="contact-title">Father Name:</span>
                                                            <span class="phone-number">----</span>
                                                        </div>
                                                        <div class="phone-content">
                                                            <span class="contact-title">Mother Name:</span>
                                                            <span class="phone-number">----</span>
                                                        </div>
                                                        <div class="birthday-content">
                                                            <span class="contact-title">Date of Birth:</span>
                                                            <span class="birth-date">January 31, 1990 </span>
                                                        </div>
                                                        <div class="phone-content">
                                                            <span class="contact-title">Father Occupation:</span>
                                                            <span class="phone-number">Banker</span>
                                                        </div>
                                                        <div class="phone-content">
                                                            <span class="contact-title">Religion:</span>
                                                            <span class="phone-number">----</span>
                                                        </div>
                                                        <div class="email-content">
                                                            <span class="contact-title">Email:</span>
                                                            <span class="contact-email">Support@example.com</span>
                                                        </div>
                                                        <div class="email-content">
                                                            <span class="contact-title">Admission Date:</span>
                                                            <span class="contact-email">10/05/2017</span>
                                                        </div>
                                                        <div class="address-content">
                                                            <span class="contact-title">Address:</span>
                                                            <span class="mail-address">ST-Canada</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Home Work </h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul>
                                                <li><label><input type="checkbox"><i></i><span>get up</span><a
                                                            href='#' class="ti-close"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>don't give up the
                                                            fight.</span><a href='#' class="ti-close"></a></label>
                                                </li>
                                                <li><label><input type="checkbox" checked><i></i><span>stand up</span><a
                                                            href='#' class="ti-close"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>don't give up the
                                                            fight.</span><a href='#' class="ti-close"></a></label>
                                                </li>
                                                <li><label><input type="checkbox" checked><i></i><span>do something
                                                            else</span><a href='#' class="ti-close"></a></label>
                                                </li>
                                                <li><label><input type="checkbox" checked><i></i><span>do something
                                                            else</span><a href='#' class="ti-close"></a></label>
                                                </li>
                                                <li><label><input type="checkbox" checked><i></i><span>stand up</span><a
                                                            href='#' class="ti-close"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>don't give up the
                                                            fight.</span><a href='#' class="ti-close"></a></label>
                                                </li>
                                                <li><label><input type="checkbox" checked><i></i><span>do something
                                                            else</span><a href='#' class="ti-close"></a></label>
                                                </li>
                                                <li><label><input type="checkbox"><i></i><span>don't give up the
                                                            fight.</span><a href='#' class="ti-close"></a></label>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="text" class="tdl-new form-control"
                                            placeholder="Write new item and hit 'Enter'...">
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Recent Project </h4>
                            <div class="card-header-right-icon">
                                <ul>
                                    <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                    <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="true" role="link"></i>
                                        <ul class="card-option-dropdown dropdown-menu">
                                            <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                            <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                            <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                            <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                        </ul>
                                    </li>
                                    <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kolor Tea Shirt For Man</td>
                                            <td><span class="badge badge-primary">Ongoing</span></td>
                                            <td>January 22</td>
                                            <td class="color-primary">$21.56</td>
                                        </tr>
                                        <tr>
                                            <td>Kolor Tea Shirt For Women</td>
                                            <td><span class="badge badge-success">Complete</span></td>
                                            <td>January 30</td>
                                            <td class="color-success">$55.32</td>
                                        </tr>
                                        <tr>
                                            <td>Blue Backpack For Baby</td>
                                            <td><span class="badge badge-danger">Rejected</span></td>
                                            <td>January 25</td>
                                            <td class="color-danger">$14.85</td>
                                        </tr>
                                        <tr>
                                            <td>Kolor Tea Shirt For Man</td>
                                            <td><span class="badge badge-primary">Ongoing</span></td>
                                            <td>January 22</td>
                                            <td class="color-primary">$21.56</td>
                                        </tr>
                                        <tr>
                                            <td>Kolor Tea Shirt For Women</td>
                                            <td><span class="badge badge-success">Complete</span></td>
                                            <td>January 30</td>
                                            <td class="color-success">$55.32</td>
                                        </tr>
                                        <tr>
                                            <td>Blue Backpack For Baby</td>
                                            <td><span class="badge badge-danger">Rejected</span></td>
                                            <td>January 25</td>
                                            <td class="color-danger">$14.85</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-header">
                            <h4>Recent Comments </h4>
                            <div class="card-header-right-icon">
                                <ul>
                                    <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                    <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="recent-comment m-t-20">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="assets/images/avatar/1.jpg"
                                            alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. Ajay</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. </p>
                                    <div class="comment-action">
                                        <div class="badge badge-success">Approved</div>
                                        <span class="m-l-10">
                                            <a href="#"><i class="ti-check color-success"></i></a>
                                            <a href="#"><i class="ti-close color-danger"></i></a>
                                            <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                        </span>
                                    </div>
                                    <p class="comment-date">October 21, 2017</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="assets/images/avatar/2.jpg"
                                            alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. Ajay</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. </p>
                                    <div class="comment-action">
                                        <div class="badge badge-warning">Pending</div>
                                        <span class="m-l-10">
                                            <a href="#"><i class="ti-check color-success"></i></a>
                                            <a href="#"><i class="ti-close color-danger"></i></a>
                                            <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                        </span>
                                    </div>
                                    <p class="comment-date">October 21, 2017</p>
                                </div>
                            </div>
                            <div class="media no-border">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="assets/images/avatar/3.jpg"
                                            alt="..."></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mr. Ajay</h4>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin commodo. </p>
                                    <div class="comment-action">
                                        <div class="badge badge-danger">Rejected</div>
                                        <span class="m-l-10">
                                            <a href="#"><i class="ti-check color-success"></i></a>
                                            <a href="#"><i class="ti-close color-danger"></i></a>
                                            <a href="#"><i class="fa fa-reply color-primary"></i></a>
                                        </span>
                                    </div>
                                    <div class="comment-date">October 21, 2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <!-- /# column -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p>This dashboard was generated on <span id="date-time"></span> <a href="#"
                                class="page-refresh">Refresh Dashboard</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.getElementById('date-time').textContent = new Date().toLocaleString();
    </script>
@endpush
