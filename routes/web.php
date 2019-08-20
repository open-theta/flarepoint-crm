<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Login/Logout Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => ['auth']], function () {
    /*
     * Main
     */
    Route::get('/', 'PagesController@dashboard');
    Route::get('dashboard', 'PagesController@dashboard')->name('dashboard');

    /*
     * Users
     */
    Route::group(['prefix' => 'users'], function () {
        Route::get('/data', 'UsersController@anyData')->name('users.data');
        Route::get('/taskdata/{id}', 'UsersController@taskData')->name('users.taskdata');
        Route::get('/leaddata/{id}', 'UsersController@leadData')->name('users.leaddata');
        Route::get('/clientdata/{id}', 'UsersController@clientData')->name('users.clientdata');
        Route::get('/users', 'UsersController@users')->name('users.users');
    });
    Route::resource('users', 'UsersController');

    /*
    * Roles
    */
    Route::resource('roles', 'RolesController');

    /*
     * CDP Profile Data Collection Builder, from offline media, website, app, social media , uploaded files and CRM
     */
    Route::group(['prefix' => 'cdp-data-collector'], function () {
        Route::get('/build-by-tagging', 'CdpDataCollectorController@byTagging')->name('cdp-build-by-tagging');
        Route::get('/build-by-api', 'CdpDataCollectorController@byApiEndpoint')->name('cdp-build-by-api');
        Route::get('/build-by-profile-uploader', 'CdpDataCollectorController@byProfileUploader')->name('cdp-build-by-profile-uploader');
        Route::get('/build-by-profile-importer', 'CdpDataCollectorController@byProfileImporter')->name('cdp-build-by-profile-importer');
    });
    Route::resource('cdp-data-collector', 'CdpDataCollectorController');

    /*
     * CDP Unified Analytics: collection, campaign, brand, product
     */
    Route::group(['prefix' => 'cdp-unified-analytics'], function () {
        // Analytics for data collection, data from offline media, website, app, social media , uploaded files and CRM
        Route::get('/collections', 'CdpUnifiedAnalyticsController@collections')->name('cdp-analytics-collections');
        Route::get('/collection/{id}', 'CdpUnifiedAnalyticsController@collection')->name('cdp-analytics-collection');

        // Analytics for 360-view of user profiles, data from offline media, website, app, social media , uploaded files and CRM
        Route::get('/profiles', 'CdpUnifiedAnalyticsController@profiles')->name('cdp-analytics-profiles');
        Route::get('/profile/{id}', 'CdpUnifiedAnalyticsController@profile')->name('cdp-analytics-profile');
        
        // Analytics for general marketing campaigns (user acquisition for app installation)
        Route::get('/campaigns', 'CdpUnifiedAnalyticsController@campaigns')->name('cdp-analytics-campaigns');
        Route::get('/campaign/{id}', 'CdpUnifiedAnalyticsController@campaign')->name('cdp-analytics-campaign');

        // Analytics for branding marketing: CPM or CPV (reach and in-target segment)
        Route::get('/brands', 'CdpUnifiedAnalyticsController@brands')->name('cdp-analytics-brands');
        Route::get('/brand/{id}', 'CdpUnifiedAnalyticsController@brand')->name('cdp-analytics-brand');

        // Analytics for performance marketing: CPL or CPC (user click, tap or marketer's rules tracking event)
        Route::get('/products', 'CdpUnifiedAnalyticsController@products')->name('cdp-analytics-products');
        Route::get('/product/{id}', 'CdpUnifiedAnalyticsController@product')->name('cdp-analytics-product');
    });
    Route::resource('cdp-unified-analytics', 'CdpUnifiedAnalyticsController');

    /*
     * CDP Data Segmetation for Profile data
     */
    Route::group(['prefix' => 'cdp-data-segmetation'], function () {
        Route::get('/list', 'CdpDataSegmetationController@list')->name('cdp-segmetation-list');
        Route::get('/build', 'CdpDataSegmetationController@build')->name('cdp-segmetation-build');
    });
    Route::resource('cdp-data-segmetation', 'CdpDataSegmetationController');

    /*
     * CDP Customer Activation from segments or smart profile
     */
    Route::group(['prefix' => 'cdp-customer-activation'], function () {
        Route::get('/by-email-marketing', 'CdpCustomerActivationController@byEmailMarketing')->name('cdp-email-marketing');
        Route::get('/by-social-marketing', 'CdpCustomerActivationController@bySocialMarketing')->name('cdp-social-marketing');
    });
    Route::resource('cdp-customer-activation', 'CdpCustomerActivationController');

    

    /*
     * Clients
     */
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/data', 'ClientsController@anyData')->name('clients.data');
        Route::get('/my', 'ClientsController@my')->name('clients.my');
        Route::get('/mydata', 'ClientsController@myData')->name('clients.mydata');
        Route::post('/create/cvrapi', 'ClientsController@cvrapiStart');
        Route::post('/upload/{id}', 'DocumentsController@upload');
        Route::patch('/updateassign/{id}', 'ClientsController@updateAssign');
    });
    Route::resource('clients', 'ClientsController');
    Route::resource('documents', 'DocumentsController');

    /*
     * Contacts
     */
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/data', 'ContactsController@anyData')->name('contacts.data');
        Route::get('/my', 'ContactsController@my')->name('contacts.my');
        Route::get('/mydata', 'ContactsController@myData')->name('contacts.mydata');
    });
    Route::resource('contacts', 'ContactsController');

    /*
     * Tasks
     */
    Route::group(['prefix' => 'tasks'], function () {
        Route::get('/data', 'TasksController@anyData')->name('tasks.data');
        Route::get('/my', 'TasksController@my')->name('tasks.my');
        Route::get('/mydata', 'TasksController@myData')->name('tasks.mydata');
        Route::patch('/updatestatus/{id}', 'TasksController@updateStatus');
        Route::patch('/updateassign/{id}', 'TasksController@updateAssign');
        Route::post('/updatetime/{id}', 'TasksController@updateTime');
    });
    Route::resource('tasks', 'TasksController');

    /*
     * Leads
     */
    Route::group(['prefix' => 'leads'], function () {
        Route::get('/data', 'LeadsController@anyData')->name('leads.data');
        Route::get('/my', 'LeadsController@my')->name('leads.my');
        Route::get('/mydata', 'LeadsController@myData')->name('leads.mydata');
        Route::patch('/updateassign/{id}', 'LeadsController@updateAssign');
        Route::patch('/updatestatus/{id}', 'LeadsController@updateStatus');
        Route::patch('/updatefollowup/{id}', 'LeadsController@updateFollowup')->name('leads.followup');
    });
    Route::resource('leads', 'LeadsController');
    Route::post('/comments/{type}/{id}', 'CommentController@store');
    /*
     * Settings
     */
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', 'SettingsController@index')->name('settings.index');
        Route::patch('/permissionsUpdate', 'SettingsController@permissionsUpdate');
        Route::patch('/overall', 'SettingsController@updateOverall');
    });

    /*
     * Departments
     */
    Route::resource('departments', 'DepartmentsController');

    /*
     * Integrations
     */
    Route::group(['prefix' => 'integrations'], function () {
        Route::get('Integration/slack', 'IntegrationsController@slack');
    });
    Route::resource('integrations', 'IntegrationsController');

    /*
     * Notifications
     */
    Route::group(['prefix' => 'notifications'], function () {
        Route::post('/markread', 'NotificationsController@markRead')->name('notification.read');
        Route::get('/markall', 'NotificationsController@markAll');
        Route::get('/{id}', 'NotificationsController@markRead');
    });

    /*
     * Invoices
     */
    Route::group(['prefix' => 'invoices'], function () {
        Route::post('/updatepayment/{id}', 'InvoicesController@updatePayment')->name('invoice.payment.date');
        Route::post('/reopenpayment/{id}', 'InvoicesController@reopenPayment')->name('invoice.payment.reopen');
        Route::post('/sentinvoice/{id}', 'InvoicesController@updateSentStatus')->name('invoice.sent');
        Route::post('/newitem/{id}', 'InvoicesController@newItem')->name('invoice.new.item');
    });
    Route::resource('invoices', 'InvoicesController');
});
