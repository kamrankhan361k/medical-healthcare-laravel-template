@extends('layouts.admin')

@section('title', 'Dashboard - Webstrot Admin')

@section('page_title', 'Hello, <span>Welcome Here</span>')

@section('breadcrumb_active', 'Home')

@section('content')
<div id="main-content">
    <div class="row">
        <!-- Stats Cards -->
        <div class="col-lg-3">
            <div class="card">
                <div class="stat-widget-eight">
                    <div class="stat-header">
                        <div class="header-title pull-left">Daily Visit</div>
                        <div class="card-option drop-menu pull-right">
                            <i class="ti-more-alt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                            <ul class="card-option-dropdown dropdown-menu">
                                <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="stat-content">
                        <div class="pull-left">
                            <i class="ti-arrow-up color-success"></i>
                            <span class="stat-digit"> 14,2158.35</span>
                        </div>
                        <div class="pull-right">
                            <span class="progress-stats">70%</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add other stat cards similarly -->

        <!-- Charts Section -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="ct-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="ct-svg-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add other dashboard sections -->

        <!-- Footer -->
        <div class="row">
            <div class="col-lg-12">
                <div class="footer">
                    <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Page specific scripts
    document.getElementById('date-time').textContent = new Date().toLocaleString();
</script>
@endpush
