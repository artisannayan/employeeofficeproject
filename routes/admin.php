<?php
Auth::routes();
Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

       Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
       Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');
          /**
         * EmpolyeeDetails
         */
        Route::group(['prefix'  => 'employeess'], function() {
            Route::get('/', 'Admin\EmpolyeeController@index')->name('admin.employee.index');
            Route::get('/create', 'Admin\EmpolyeeController@create')->name('admin.employee.create');
            Route::post('/store', 'Admin\EmpolyeeController@store')->name('admin.employee.store');
            Route::post('/member', 'Admin\EmpolyeeController@membershipStore')->name('admin.employee.membershipStore');
            Route::post('/education', 'Admin\EmpolyeeController@upedu')->name('admin.employee.educationstore');
            Route::post('/training', 'Admin\EmpolyeeController@trainingStore')->name('admin.employee.trainingStore');
            Route::post('/experience', 'Admin\EmpolyeeController@expererinceStore')->name('admin.employee.expererinceStore');
            Route::post('/referece', 'Admin\EmpolyeeController@referencesStore')->name('admin.employee.refereceStore');
            Route::post('/photo', 'Admin\EmpolyeeController@phographStore')->name('admin.employee.phographStore');
            Route::post('/cirtification', 'Admin\EmpolyeeController@cirtificationStore')->name('admin.employee.cirtificationStore');
            Route::get('/{id}/edit', 'Admin\EmpolyeeController@edit')->name('admin.employee.edit');
            // Route::post('membership/update','Admin\EmpolyeeController@memberShipupdate')->name('admin.employee.membershipUpdate');
            // Route::get('/{id}/education', 'Admin\EmpolyeeController@educationEdit')->name('admin.employee.educationEdit');
            Route::post('/update/{id}', 'Admin\EmpolyeeController@update')->name('admin.employee.update');
            Route::get('/{eid}/delete', 'Admin\EmpolyeeController@delete')->name('admin.employee.delete');
            Route::get('/{eid}/profile', 'Admin\EmpolyeeController@profile')->name('admin.employee.profile');
        });
         /*
         **Department
        */
       Route::Group(['prefix'=>'department'],function(){
            Route::get('/','admin\DepartmentController@index')->name('admin.department.index');
            Route::get('/create', 'Admin\DepartmentController@create')->name('admin.department.create');
            Route::post('/store', 'Admin\DepartmentController@store')->name('admin.department.store');
            Route::get('/{id}/edit', 'Admin\DepartmentController@edit')->name('admin.department.edit');
            Route::post('/update/{id}', 'Admin\DepartmentController@update')->name('admin.department.update');
            Route::get('/{id}/delete', 'Admin\DepartmentController@delete')->name('admin.department.delete');
    });

        /*
    **Education
    */
        Route::group(['prefix'  => 'education'], function() {
            Route::get('/', 'Admin\EducationTrainingController@index')->name('admin.education.index');
            Route::get('/create', 'Admin\EducationTrainingController@create')->name('admin.education.create');
            Route::post('/store', 'Admin\EducationTrainingController@store')->name('admin.education.store');
            Route::get('/{id}/edit', 'Admin\EducationTrainingController@edit')->name('admin.education.edit');
            Route::post('/update/{id}', 'Admin\EducationTrainingController@update')->name('admin.education.update');
            Route::get('/{id}/delete', 'Admin\EducationTrainingController@delete')->name('admin.education.delete');
            Route::get('/{id}/profile', 'Admin\EducationTrainingController@profile')->name('admin.education.profile');
        });
    // Route::resource('/ajax-department', 'admin\AjaxDepartmentController')->name('ajax.store');
    });

});
