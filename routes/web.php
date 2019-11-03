<?php

// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

Auth::routes();
//for switching language route
  Route::get('/locale/{locale}',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});

//for language tranlation route
  Route::group(['as'=>'admin.','prefix'=>'admin/','namespace'=>'Admin','middleware' =>['auth']],function (){
	// language route	
		Route::get('languages', 'LanguageTranslationController@index')->name('languages');
		Route::post('translations/update', 'LanguageTranslationController@transUpdate')->name('translation.update.json');
		Route::post('translations/updateKey', 'LanguageTranslationController@transUpdateKey')->name('translation.update.json.key');
		Route::delete('translations/destroy/{key}', 'LanguageTranslationController@destroy')->name('translations.destroy');
		Route::post('translations/create', 'LanguageTranslationController@store')->name('translations.create');

	// activities logs	
		Route::resource('/activitylogs', 'ActivityLogsController');
		Route::resource('/settings', 'SettingsController');
		Route::get('/generator', ['uses' => 'ProcessController@getGenerator']);
		Route::post('/generator', ['uses' => 'ProcessController@postGenerator']);

	// User Role & Permission Route
		Route::resource('users', 'UserController');
		Route::resource('roles', 'RoleController');
		Route::resource('permissions', 'PermissionController');
		Route::resource('posts', 'PostController');
		Route::resource('products','ProductController');
	});
	
	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/backup','Admin\BackupController@backup');
	

// Route::get('/create_role_permission',function(){
//     		$role = Role::create(['name' => 'Super Admin',
//     			                   'display_name' => 'Administer',
//     							   'description' => 'Can Control All Roles Permission'
//                             ]);
//     		$permission = Permission::create(['group' => 'Administer',
//     										'name' => 'Administer roles & permissions',
//     										'display_name' => 'Administer roles & permissions',
//     										'description' => 'Can Control All Roles Permission'
//     																			]);
//         auth()->user()->assignRole('Super Admin');
//         auth()->user()->givePermissionTo('Administer roles & permissions');
// });
