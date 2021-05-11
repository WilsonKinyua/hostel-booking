<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Rooms
    Route::delete('rooms/destroy', 'RoomsController@massDestroy')->name('rooms.massDestroy');
    Route::post('rooms/parse-csv-import', 'RoomsController@parseCsvImport')->name('rooms.parseCsvImport');
    Route::post('rooms/process-csv-import', 'RoomsController@processCsvImport')->name('rooms.processCsvImport');
    Route::resource('rooms', 'RoomsController');

    // Floor
    Route::delete('floors/destroy', 'FloorController@massDestroy')->name('floors.massDestroy');
    Route::post('floors/parse-csv-import', 'FloorController@parseCsvImport')->name('floors.parseCsvImport');
    Route::post('floors/process-csv-import', 'FloorController@processCsvImport')->name('floors.processCsvImport');
    Route::resource('floors', 'FloorController');

    // Tenants
    Route::delete('tenants/destroy', 'TenantsController@massDestroy')->name('tenants.massDestroy');
    Route::post('tenants/media', 'TenantsController@storeMedia')->name('tenants.storeMedia');
    Route::post('tenants/ckmedia', 'TenantsController@storeCKEditorImages')->name('tenants.storeCKEditorImages');
    Route::post('tenants/parse-csv-import', 'TenantsController@parseCsvImport')->name('tenants.parseCsvImport');
    Route::post('tenants/process-csv-import', 'TenantsController@processCsvImport')->name('tenants.processCsvImport');
    Route::resource('tenants', 'TenantsController');

    // Department
    Route::delete('departments/destroy', 'DepartmentController@massDestroy')->name('departments.massDestroy');
    Route::resource('departments', 'DepartmentController');

    // Faculty
    Route::delete('faculties/destroy', 'FacultyController@massDestroy')->name('faculties.massDestroy');
    Route::resource('faculties', 'FacultyController');

    // Level
    Route::delete('levels/destroy', 'LevelController@massDestroy')->name('levels.massDestroy');
    Route::post('levels/parse-csv-import', 'LevelController@parseCsvImport')->name('levels.parseCsvImport');
    Route::post('levels/process-csv-import', 'LevelController@processCsvImport')->name('levels.processCsvImport');
    Route::resource('levels', 'LevelController');

    // Expenses
    Route::delete('expenses/destroy', 'ExpensesController@massDestroy')->name('expenses.massDestroy');
    Route::post('expenses/media', 'ExpensesController@storeMedia')->name('expenses.storeMedia');
    Route::post('expenses/ckmedia', 'ExpensesController@storeCKEditorImages')->name('expenses.storeCKEditorImages');
    Route::resource('expenses', 'ExpensesController');

    // Payment
    Route::delete('payments/destroy', 'PaymentController@massDestroy')->name('payments.massDestroy');
    Route::resource('payments', 'PaymentController');

    // Complaints
    Route::delete('complaints/destroy', 'ComplaintsController@massDestroy')->name('complaints.massDestroy');
    Route::post('complaints/media', 'ComplaintsController@storeMedia')->name('complaints.storeMedia');
    Route::post('complaints/ckmedia', 'ComplaintsController@storeCKEditorImages')->name('complaints.storeCKEditorImages');
    Route::resource('complaints', 'ComplaintsController');

    // Notice
    Route::delete('notices/destroy', 'NoticeController@massDestroy')->name('notices.massDestroy');
    Route::post('notices/media', 'NoticeController@storeMedia')->name('notices.storeMedia');
    Route::post('notices/ckmedia', 'NoticeController@storeCKEditorImages')->name('notices.storeCKEditorImages');
    Route::resource('notices', 'NoticeController');

    // About Us
    Route::delete('aboutuses/destroy', 'AboutUsController@massDestroy')->name('aboutuses.massDestroy');
    Route::post('aboutuses/media', 'AboutUsController@storeMedia')->name('aboutuses.storeMedia');
    Route::post('aboutuses/ckmedia', 'AboutUsController@storeCKEditorImages')->name('aboutuses.storeCKEditorImages');
    Route::resource('aboutuses', 'AboutUsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
