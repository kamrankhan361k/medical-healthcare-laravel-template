@extends('layouts.admin')

@section('title', 'Student Profile - Webstrot Admin')

@section('page-header')
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
            </div>
        </div>
    </div>
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Student</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Stats Cards -->
<div class="row">
    <div class="col-md-3">
        <div class="card bg-primary">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-facebook color-white"></i></div>
                <div class="fb-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Upcommig Exam</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-info">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-twitter-alt color-white"></i></div>
                <div class="twitter-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Due Fees</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-danger">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-google color-white"></i></div>
                <div class="google-plus-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Events</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-linkedin color-white"></i></div>
                <div class="linkedin-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Documents</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Student Information and Notice Board -->
<div class="row">
    <div class="col-lg-6">
        <div class="card alert">
            <div class="card-header">
                <h4>My Information</h4>
            </div>
            <div class="card-body">
                <div class="user-profile m-t-15">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="user-photo m-b-10">
                                <img class="img-responsive" src="{{ asset('assets/images/user-profile.jpg') }}" alt="" />
                            </div>
                            <div class="useful-icon">
                                <span><a href=""><i class="ti-pencil-alt"></i></a> </span>
                                <span><a href=""><i class="ti-printer"></i></a></span>
                                <span><a href=""><i class="ti-download"></i></a></span>
                                <span><a href=""><i class="ti-share"></i></a></span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="user-profile-name">Mr. Ajay</div>
                            <div class="custom-tab user-profile-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
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
                                                <span class="contact-website">6</span>
                                            </div>
                                            <div class="skype-content">
                                                <span class="contact-title">Section:</span>
                                                <span class="contact-skype">A</span>
                                            </div>
                                            <div class="address-content">
                                                <span class="contact-title">Roll:</span>
                                                <span class="mail-address">9055</span>
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
                                                <span class="contact-email">10/04/2017</span>
                                            </div>
                                            <div class="address-content">
                                                <span class="contact-title">Address:</span>
                                                <span class="mail-address">House#3,Road#34,Canada</span>
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Notice Board </h4>
            </div>
            <div class="recent-comment m-t-15">
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('assets/images/avatar/1.jpg') }}" alt="..."></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading color-primary">Mr. Ajay</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p class="comment-date">10 min ago</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('assets/images/avatar/2.jpg') }}" alt="..."></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading color-success">Mr. Ajay</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <p class="comment-date">1 hour ago</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('assets/images/avatar/3.jpg') }}" alt="..."></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading color-danger">Mr. Ajay</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <div class="comment-date">Yesterday</div>
                    </div>
                </div>
                <div class="media no-border">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('assets/images/avatar/1.jpg') }}" alt="..."></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading color-info">Mr. Ajay</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <div class="comment-date">Yesterday</div>
                    </div>
                </div>
                <div class="media no-border">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('assets/images/avatar/2.jpg') }}" alt="..."></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading color-info">Mr. Ajay</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <div class="comment-date">Yesterday</div>
                    </div>
                </div>
                <div class="media no-border">
                    <div class="media-left">
                        <a href="#"><img class="media-object" src="{{ asset('assets/images/avatar/3.jpg') }}" alt="..."></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading color-info">Mr. Ajay</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                        <div class="comment-date">Yesterday</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>

<!-- Exam Results Table -->
<div class="row">
    <div class="col-lg-12">
        <div class="card alert">
            <div class="card-header pr">
                <h4>All Exam Result</h4>
                <div class="search-action">
                    <div class="search-type dib">
                        <input class="form-control input-rounded" placeholder="Search by exam" type="text">
                    </div>
                    <div class="search-type dib">
                        <input class="form-control input-rounded" placeholder="Search by date..." type="text">
                    </div>
                    <div class="search-type dib">
                        <input class="form-control input-rounded" placeholder="search" type="text">
                    </div>
                </div>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                        <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
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
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th><label><input type="checkbox" value=""></label>Exam Name</th>
                                <th>Subject</th>
                                <th>Grade Point</th>
                                <th>Percent Form</th>
                                <th>Percent Upto</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>English</td>
                                <td>4.00</td>
                                <td>90.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>83.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>English</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>80.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Social</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Bangla</td>
                                <td>4.00</td>
                                <td>81.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>English</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>4.00</td>
                                <td>95.00</td>
                                <td>100</td>
                                <td>20/04/2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>

<!-- Social Stats -->
<div class="row">
    <div class="col-md-3">
        <div class="card bg-primary">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-facebook color-white"></i></div>
                <div class="fb-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Like us</div>
                        <div class="stat-digit">on facebook</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count m-t-18">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-warning">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-twitter-alt color-white"></i></div>
                <div class="twitter-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Like us</div>
                        <div class="stat-digit">on twitter</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count m-t-18">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-info">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-google color-white"></i></div>
                <div class="google-plus-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Like us</div>
                        <div class="stat-digit">on google</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count m-t-18">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-danger">
            <div class="stat-widget-nine">
                <div class="stat-icon"><i class="ti-linkedin color-white"></i></div>
                <div class="linkedin-card horizontal">
                    <div class="stat-content m-t-13 dib">
                        <div class="stat-text">Like us</div>
                        <div class="stat-digit">on linkedin</div>
                    </div>
                    <div class="all-like dib">
                        <span class="like-count m-t-18">3000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="row">
    <div class="col-lg-12">
        <div class="footer">
            <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('date-time').textContent = new Date().toLocaleString();
</script>
@endpush
