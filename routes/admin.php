<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\AppController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ComponentController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\MapController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All admin routes are defined here with proper prefix and name spacing
|
*/

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'admin'] // Add your auth and admin middleware
], function () {

    // ==================== DASHBOARD ROUTES ====================
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/dashboard-1', 'dashboard1')->name('dashboard.1');
        Route::get('/dashboard-2', 'dashboard2')->name('dashboard.2');
        Route::get('/dashboard-3', 'dashboard3')->name('dashboard.3');
        Route::get('/dashboard-5', 'dashboard5')->name('dashboard.5');
        Route::get('/dashboard-6', 'dashboard6')->name('dashboard.6');
    });

    // ==================== SCHOOL MANAGEMENT ROUTES ====================
    Route::prefix('school')->name('school.')->controller(SchoolController::class)->group(function () {
        // Student Routes
        Route::get('/student', 'student')->name('student');
        Route::get('/student-profile', 'studentProfile')->name('student-profile');
        Route::get('/student-details', 'studentDetails')->name('student-details');
        Route::get('/all-student-table', 'allStudentTable')->name('all-student-table');
        Route::get('/student-search', 'studentSearch')->name('student-search');
        
        // Teacher Routes
        Route::get('/teacher-information', 'teacherInformation')->name('teacher-information');
        Route::get('/teacher-details', 'teacherDetails')->name('teacher-details');
        Route::get('/all-teacher-table', 'allTeacherTable')->name('all-teacher-table');
        
        // Academic Routes
        Route::get('/class-information', 'classInformation')->name('class-information');
        Route::get('/subject', 'subject')->name('subject');
        Route::get('/class-routine', 'classRoutine')->name('class-routine');
        Route::get('/attendance-sheet', 'attendanceSheet')->name('attendance-sheet');
        Route::get('/grade-list', 'gradeList')->name('grade-list');
        Route::get('/new-exam', 'newExam')->name('new-exam');
        
        // Financial Routes
        Route::get('/account-setting', 'accountSetting')->name('account-setting');
        Route::get('/student-fees-collection', 'studentFeesCollection')->name('student-fees-collection');
        Route::get('/payment-information', 'paymentInformation')->name('payment-information');
        Route::get('/add-new-expenses', 'addNewExpenses')->name('add-new-expenses');
        Route::get('/all-expense-list', 'allExpenseList')->name('all-expense-list');
        
        // Other School Routes
        Route::get('/hostel-room', 'hostelRoom')->name('hostel-room');
        Route::get('/book-information', 'bookInformation')->name('book-information');
        Route::get('/book-list', 'bookList')->name('book-list');
        Route::get('/all-parents-list', 'allParentsList')->name('all-parents-list');
        Route::get('/parents', 'parents')->name('parents');
        Route::get('/form', 'form')->name('form');
        Route::get('/notice', 'notice')->name('notice');
        Route::get('/transport', 'transport')->name('transport');
    });

    // ==================== RESTAURANT ROUTES ====================
    Route::prefix('restaurant')->name('restaurant.')->controller(RestaurantController::class)->group(function () {
        Route::get('/menu-one', 'menuOne')->name('menu.one');
        Route::get('/menu-two', 'menuTwo')->name('menu.two');
        Route::get('/menu-three', 'menuThree')->name('menu.three');
        Route::get('/favourite-list', 'favouriteList')->name('favourite.list');
        Route::get('/order-list', 'orderList')->name('order.list');
        Route::get('/booking', 'booking')->name('booking');
        Route::get('/upload-menu', 'uploadMenu')->name('upload.menu');
    });

    // ==================== APPS ROUTES ====================
    Route::prefix('apps')->name('apps.')->group(function () {
        // Charts Routes
        Route::controller(ChartController::class)->group(function () {
            Route::get('/chart-flot', 'flot')->name('chart.flot');
            Route::get('/chart-morris', 'morris')->name('chart.morris');
            Route::get('/chartjs', 'chartjs')->name('chart.chartjs');
            Route::get('/chartist', 'chartist')->name('chart.chartist');
            Route::get('/chart-peity', 'peity')->name('chart.peity');
            Route::get('/chart-sparkline', 'sparkline')->name('chart.sparkline');
            Route::get('/chart-knob', 'knob')->name('chart.knob');
        });

        // Other App Routes
        Route::controller(AppController::class)->group(function () {
            Route::get('/event-calender', 'eventCalender')->name('event.calender');
            Route::get('/email', 'email')->name('email');
            Route::get('/profile', 'profile')->name('profile');
            Route::get('/widget-card', 'widgetCard')->name('widget.card');
        });
    });

    // ==================== FEATURES ROUTES ====================
    Route::prefix('features')->name('features.')->controller(FeatureController::class)->group(function () {
        // UI Elements
        Route::get('/ui-accordion', 'uiAccordion')->name('ui.accordion');
        Route::get('/ui-alerts', 'uiAlerts')->name('ui.alerts');
        Route::get('/ui-badges', 'uiBadges')->name('ui.badges');
        Route::get('/ui-button', 'uiButton')->name('ui.button');
        Route::get('/ui-dropdown', 'uiDropdown')->name('ui.dropdown');
        Route::get('/ui-images', 'uiImages')->name('ui.images');
        Route::get('/ui-list-group', 'uiListGroup')->name('ui.list-group');
        Route::get('/ui-panels', 'uiPanels')->name('ui.panels');
        Route::get('/ui-progressbar', 'uiProgressbar')->name('ui.progressbar');
        Route::get('/ui-tab', 'uiTab')->name('ui.tab');
        Route::get('/ui-wells', 'uiWells')->name('ui.wells');
    });

    // ==================== COMPONENTS ROUTES ====================
    Route::prefix('components')->name('components.')->controller(ComponentController::class)->group(function () {
        Route::get('/calendar', 'calendar')->name('calendar');
        Route::get('/carousel', 'carousel')->name('carousel');
        Route::get('/weather', 'weather')->name('weather');
        Route::get('/datamap', 'datamap')->name('datamap');
        Route::get('/todo-list', 'todoList')->name('todo.list');
        Route::get('/scrollable', 'scrollable')->name('scrollable');
        Route::get('/sweetalert', 'sweetalert')->name('sweetalert');
        Route::get('/toastr', 'toastr')->name('toastr');
        Route::get('/range-slider-basic', 'rangeSliderBasic')->name('range.slider.basic');
        Route::get('/range-slider-advance', 'rangeSliderAdvance')->name('range.slider.advance');
        Route::get('/nestable', 'nestable')->name('nestable');
        Route::get('/portlets', 'portlets')->name('portlets');
        Route::get('/rating-bar-rating', 'ratingBarRating')->name('rating.bar.rating');
        Route::get('/rating-jrate', 'ratingJrate')->name('rating.jrate');
    });

    // ==================== TABLE ROUTES ====================
    Route::prefix('tables')->name('tables.')->controller(TableController::class)->group(function () {
        Route::get('/basic', 'basic')->name('basic');
        Route::get('/data', 'data')->name('data');
        Route::get('/export', 'export')->name('export');
        Route::get('/row-select', 'rowSelect')->name('row.select');
        Route::get('/jsgrid', 'jsgrid')->name('jsgrid');
    });

    // ==================== ICONS ROUTES ====================
    Route::prefix('icons')->name('icons.')->controller(IconController::class)->group(function () {
        Route::get('/themify', 'themify')->name('themify');
    });

    // ==================== MAPS ROUTES ====================
    Route::prefix('maps')->name('maps.')->controller(MapController::class)->group(function () {
        Route::get('/gmaps', 'gmaps')->name('gmaps');
        Route::get('/vector-map', 'vectorMap')->name('vector.map');
    });

    // ==================== FORM ROUTES ====================
    Route::prefix('forms')->name('forms.')->controller(FormController::class)->group(function () {
        Route::get('/basic', 'basic')->name('basic');
    });

    // ==================== MISCELLANEOUS ROUTES ====================
    Route::prefix('misc')->name('misc.')->group(function () {
        // Invoice Routes
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('/invoice', 'invoice')->name('invoice');
            Route::get('/invoice-editable', 'invoiceEditable')->name('invoice.editable');
        });

        // Page Routes
        Route::controller(PageController::class)->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::get('/register', 'register')->name('register');
            Route::get('/reset-password', 'resetPassword')->name('reset.password');
        });

        // Documentation
        Route::get('/documentation', function () {
            return view('admin.documentation');
        })->name('documentation');

        // Logout
        Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
    });

});