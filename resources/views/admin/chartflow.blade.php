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
                                    <li class="active">Chart-Flot</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Real Chart</h4>
                                </div>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Line Chart</h4>
                                </div>
                                <div class="flot-container">
                                    <div id="flot-line" class="flot-line"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Pie Chart</h4>
                                </div>
                                <div class="flot-container">
                                    <div id="flot-pie" class="flot-pie-container"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Line Chart</h4>
                                </div>
                                <div class="flot-container">
                                    <div id="chart1"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Bar Chart</h4>
                                </div>
                                <div class="flot-container">
                                    <div id="flotBar"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->

                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Curve Line</h4>
                                </div>
                                <div class="flot-container">
                                    <div id="flotCurve"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
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
