<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // User Alerts
    Route::apiResource('user-alerts', 'UserAlertsApiController', ['except' => ['update']]);

    // Rooms
    Route::apiResource('rooms', 'RoomsApiController');

    // Floor
    Route::apiResource('floors', 'FloorApiController');

    // Tenants
    Route::post('tenants/media', 'TenantsApiController@storeMedia')->name('tenants.storeMedia');
    Route::apiResource('tenants', 'TenantsApiController');

    // Department
    Route::apiResource('departments', 'DepartmentApiController');

    // Faculty
    Route::apiResource('faculties', 'FacultyApiController');

    // Level
    Route::apiResource('levels', 'LevelApiController');

    // Expenses
    Route::post('expenses/media', 'ExpensesApiController@storeMedia')->name('expenses.storeMedia');
    Route::apiResource('expenses', 'ExpensesApiController');

    // Payment
    Route::apiResource('payments', 'PaymentApiController');

    // Complaints
    Route::post('complaints/media', 'ComplaintsApiController@storeMedia')->name('complaints.storeMedia');
    Route::apiResource('complaints', 'ComplaintsApiController');

    // Notice
    Route::post('notices/media', 'NoticeApiController@storeMedia')->name('notices.storeMedia');
    Route::apiResource('notices', 'NoticeApiController');

    // About Us
    Route::post('aboutuses/media', 'AboutUsApiController@storeMedia')->name('aboutuses.storeMedia');
    Route::apiResource('aboutuses', 'AboutUsApiController');
});
