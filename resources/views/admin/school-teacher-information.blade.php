@extends('layouts.admin')

@section('title', 'Student Profile - Webstrot Admin')
@section('content')
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Teacher Information</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="card-header m-b-20">
                                <h4>Teacher Information</h4>
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
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Class</label>
                                            <select class="form-control bg-ash border-none">
												<option>Please Slect Class</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Plase Select Section</label>
                                            <select class="form-control bg-ash border-none">

												<option>A</option>
												<option>B</option>
												<option>C</option>
												<option>D</option>
												<option>E</option>
											</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Gender*</label>
                                            <select class="form-control bg-ash border-none">
												<option>Please Slect Gender</option>
												<option>Male</option>
												<option>Female</option>
											</select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Date of Birthd</label>
                                            <input type="text" class="form-control calendar bg-ash" placeholder="dd/mm/yyyy" id="text-calendar">
                                            <span class="ti-calendar form-control-feedback booking-system-feedback m-t-30"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>ID No</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <select class="form-control bg-ash border-none">
												<option>Plase Select Subject</option>
												<option>A</option>
												<option>B</option>
												<option>C</option>
												<option>D</option>
												<option>E</option>
											</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Religion</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="basic-form">
                                        <div class="form-group image-type">
                                            <label>Upload Teacher Photo <span>(150 X 150)</span></label>
                                            <input type="file" name="pic" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="button">Save</button>
                            <button class="btn btn-default btn-lg m-b-10 m-l-5 sbmt-btn" type="button">Reset</button>
                        </div>
                    </div>
                    <!--<div class="row">-->
                    <!--<div class="card alert">-->
                    <!--<div class="card-body">-->
                    <!--<div class="card-header m-b-20">-->
                    <!--<h4>Teacher Information</h4>-->
                    <!--<div class="card-header-right-icon">-->
                    <!--<ul>-->
                    <!--<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>-->
                    <!--<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-3">-->
                    <!--<div class="basic-form">-->
                    <!--<div class="form-group">-->
                    <!--<label>Gender*</label>-->
                    <!--<select class="form-control bg-ash border-none">-->
                    <!--<option>Please Slect Gender</option>-->
                    <!--<option>Male</option>-->
                    <!--<option>Female</option>-->
                    <!--</select>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-3">-->
                    <!--<div class="basic-form">-->
                    <!--<div class="form-group">-->
                    <!--<label>Date of Birth</label>-->
                    <!--<input type="text" class="form-control calendar bg-ash" placeholder="dd / mm / yyyy" id="text-calendar">-->
                    <!--<span class="ti-calendar form-control-feedback booking-system-feedback m-t-30"></span>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-3">-->
                    <!--<div class="basic-form">-->
                    <!--<div class="form-group">-->
                    <!--<label>ID No</label>-->
                    <!--<input type="text" class="form-control border-none input-flat bg-ash" placeholder="">-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="col-md-3">-->
                    <!--<div class="basic-form">-->
                    <!--<div class="form-group">-->
                    <!--<label>Subject</label>-->
                    <!--<select class="form-control bg-ash border-none">-->
                    <!--<option>Plase Select Subject</option>-->
                    <!--<option>Englis</option>-->
                    <!--<option>Bangla</option>-->
                    <!--<option>Social</option>-->
                    <!--<option>D</option>-->
                    <!--<option>E</option>-->
                    <!--</select>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="row">-->
                    <!--<div class="card alert">-->
                    <!--<div class="card-body">-->
                    <!--<div class="card-header m-b-20">-->
                    <!--<h4>Teacher Information</h4>-->
                    <!--<div class="card-header-right-icon">-->
                    <!--<ul>-->
                    <!--<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>-->
                    <!--<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>-->
                    <!--</ul>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--<div class="row">-->
                    <!--<div class="col-m-12">-->
                    <!--<button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="button">Save</button>-->
                    <!--<button class="btn btn-default btn-lg m-b-10 m-l-5 sbmt-btn" type="button">Reset</button>-->
                    <!--</div>-->
                    <!--</div>-->
                    <div class="row full_grid">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
@endsection
@push('scripts')
<script>
    document.getElementById('date-time').textContent = new Date().toLocaleString();
</script>
@endpush
