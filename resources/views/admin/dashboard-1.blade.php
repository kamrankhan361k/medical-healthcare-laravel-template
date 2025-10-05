@extends('layouts.admin')
@section('title', 'Dashboard 1 - Webstrot Admin')

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
                    <li class="active">Home</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <!-- Stats Widgets -->
    <div class="col-lg-3">
        @include('admin.widgets.stat-card', [
            'title' => 'Total Visit',
            'value' => '6,45,840',
            'icon' => 'ti-cup',
            'circleId' => 'visitor-circle',
            'leftValue' => '3,25,840',
            'leftLabel' => 'Average Visit',
            'rightValue' => '1,65,210',
            'rightLabel' => 'Unique Visit'
        ])
    </div>

    <div class="col-lg-3">
        @include('admin.widgets.stat-card', [
            'title' => 'Bounce Rate',
            'value' => '46%',
            'icon' => 'ti-wallet',
            'circleId' => 'bounce-circle',
            'leftValue' => '30%',
            'leftLabel' => 'Average Bounce',
            'rightValue' => '4%',
            'rightLabel' => 'Today Bounce'
        ])
    </div>

    <div class="col-lg-3">
        @include('admin.widgets.stat-card', [
            'title' => 'Growth Rate',
            'value' => '8,49,690',
            'icon' => 'ti-wallet',
            'circleId' => 'growth-circle',
            'leftValue' => '6,54,003',
            'leftLabel' => 'Average Growth',
            'rightValue' => '1,36,580',
            'rightLabel' => 'Today Growth'
        ])
    </div>

    <div class="col-lg-3">
        @include('admin.widgets.stat-card', [
            'title' => 'Page Views',
            'value' => '9,47,570',
            'icon' => 'ti-wallet',
            'circleId' => 'pageviews-circle',
            'leftValue' => '3,48,420',
            'leftLabel' => 'Average Views',
            'rightValue' => '1,92,035',
            'rightLabel' => 'Today Views'
        ])
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card alert">
            <div class="card-body">
                <div class="ct-bar-chart"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
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

        <div class="row">
            <div class="col-lg-4">
                <div class="card alert">
                    <div class="card-body">
                        <div class="ct-pie-chart"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                @include('admin.widgets.social-stat', [
                    'platform' => 'facebook',
                    'icon' => 'ti-facebook',
                    'value' => '8,268',
                    'label' => 'Likes'
                ])

                @include('admin.widgets.social-stat', [
                    'platform' => 'youtube',
                    'icon' => 'ti-youtube',
                    'value' => '12,545',
                    'label' => 'Subscribes'
                ])

                @include('admin.widgets.social-stat', [
                    'platform' => 'twitter',
                    'icon' => 'ti-twitter',
                    'value' => '7,982',
                    'label' => 'Tweets'
                ])

                @include('admin.widgets.social-stat', [
                    'platform' => 'danger',
                    'icon' => 'ti-linkedin',
                    'value' => '9,658',
                    'label' => 'Followers'
                ])
            </div>

            <div class="col-lg-6">
                @include('admin.partials.device-table')
            </div>
        </div>
    </div>
</div>

<!-- Other sections -->
@include('admin.sections.facebook-progress')
@include('admin.sections.weather-widget')
@include('admin.sections.testimonials')
@include('admin.sections.todo-list')
@include('admin.sections.timeline')
@include('admin.sections.profile-widget')

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
