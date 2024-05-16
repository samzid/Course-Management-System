<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\Admin\Backendcontroller;
use App\Http\Controllers\Admin\Certificate_ItemController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Backend\UserSearchController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\DecidedCourseController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\RegistrationFormController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('send-notification', function () {
    $user = User::find(21);
    $user->notify(new EmailNotification());
});



Route::get('/', [IndexController::class, 'index'])->name('user_home_page');
Route::get('/loginTwo', [IndexController::class, 'LoginView'])->name('user.login');

// sub-admin login start



Route::get('/allAdmin', [AdminController::class, 'allAdmin'])->name('alladmin.login');
// Route::get('/exam/login', [AdminController::class, 'ExamOfficeLoginForm'])->name('exam.login');
// Route::get('/register/login', [AdminController::class, 'RegisterOfficeLoginForm'])->name('register.login');
// Route::get('/account/login', [AdminController::class, 'AccountOfficeLoginForm'])->name('account.login');
// Route::get('/library/login', [AdminController::class, 'LibraryOfficeLoginForm'])->name('library.login');



Route::post('/allAdmin', [AdminController::class, 'allAdminStore'])->name('post.alladmin.login');
// Route::post('/exam/login', [AdminController::class, 'examLogin'])->name('post.exam.login');
// Route::post('/register/login', [AdminController::class, 'registerLogin'])->name('post.register.login');
// Route::post('/account/login', [AdminController::class, 'accountLogin'])->name('post.account.login');
// Route::post('/library/login', [AdminController::class, 'libraryLogin'])->name('post.library.login');
// sub-admin login end



// sub-admin logout start

Route::get('/exam/logout', function () {
    Auth::guard('exam')->logout();
    return redirect('/allAdmin');
})->name('exam.logout');

Route::get('/register/logout', function () {
    Auth::guard('register')->logout();
    return redirect('/allAdmin');
})->name('register.logout');

Route::get('/account/logout', function () {
    Auth::guard('account')->logout();
    return redirect('/allAdmin');
})->name('account.logout');

Route::get('/library/logout', function () {
    Auth::guard('library')->logout();
    return redirect('/allAdmin');
})->name('library.logout');

Route::get('/admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect('/allAdmin');
})->name('admin.logout');
// sub-admin logout end



//Registration Form foe take course
Route::get('/registration/form', [RegistrationFormController::class, 'RegistrationFormView'])->middleware('auth')->name('registration.form');
Route::post('/registration_form/store', [RegistrationFormController::class, 'RegistrationFormStore'])->name('store.registration_form');

Route::post('/decided_course_form/store', [DecidedCourseController::class, 'DecidedCourseFormStore'])->middleware('auth')->name('store.decided_course_form');


//Auto delete decidec Course table

Route::post('/decided_course_form/autoDelete', [DecidedCourseController::class, 'handle'])->name('auto_delete.decided_course_form');



Route::middleware('auth')->group(function () {

});

//Roll permission start
Route::group(['middleware' => ['auth:admin,exam']], function () {
    Route::get('/examOffice/form/dataview', [RegistrationFormController::class, 'ExamOfficeFormDataView'])->name('view.examOffice_form_data');
    Route::get('/examOffice/pending/dataview', [RegistrationFormController::class, 'ExamOfficePendingDataView'])->name('view.examOffice_pending_data');
});


// view.return_registerOffice_pending_data
Route::group(['middleware' => ['auth:admin,register']], function () {
    Route::get('/registerOffice/form/dataview', [RegistrationFormController::class, 'RegisterOfficeFormDataView'])->name('view.registerOffice_form_data');
    Route::get('/registerOffice/pending/dataview', [RegistrationFormController::class, 'RegisterOfficePendingDataView'])->name('view.registerOffice_pending_data');

    Route::get('/return_registerOffice/dataview', [RegistrationFormController::class, 'Return_RegisterOfficeFormDataView'])->name('view.return_registerOffice_data');
    Route::get('/return_registerOffice/pending/dataview', [RegistrationFormController::class, 'Return_RegisterOfficePendingDataView'])->name('view.return_registerOffice_pending_data');

});
Route::group(['middleware' => ['auth:admin,account']], function () {
    Route::get('/accountOffice/form/dataview', [RegistrationFormController::class, 'AccountOfficeFormDataView'])->name('view.accountOffice_form_data');
    Route::get('/accountOffice/pending/dataview', [RegistrationFormController::class, 'AccountOfficePendingDataView'])->name('view.accountOffice_pending_data');
});
Route::group(['middleware' => ['auth:admin,library']], function () {
    Route::get('/libraryOffice/form/dataview', [RegistrationFormController::class, 'LibraryOfficeFormDataView'])->name('view.libraryOffice_form_data');
    Route::get('/libraryOffice/pending/dataview', [RegistrationFormController::class, 'LibraryOfficePendingDataView'])->name('view.libraryOffice_pending_data');
});
Route::get('/returnRegistrationOffice/form/dataview', [RegistrationFormController::class, 'ReturnRegistrationOfficeFormDataView'])->name('view.returnRegistrationOffice');
Route::get('/returnRegistrationOffice/pending/dataview', [RegistrationFormController::class, 'ReturnRegistrationOfficePendingFormDataView'])->name('view.returnRegistrationOffice_pending_data');//korte hbe




//Roll permission end
Route::middleware('auth')->group(function () {
    Route::get('/track_registration', [RegistrationFormController::class, 'TrackRegistration'])->middleware('auth')->name('view.track_registration');
    Route::get('/form_count_value', [IndexController::class, 'FormCountView']);
});

//Status Updating from General View
Route::get('confirm_for_register_back/form/{id}', [RegistrationFormController::class, 'Confirm_For_Register_Back'])->name('confirm_for_register_back');
Route::get('confirm_for_accountOffice/form/{id}', [RegistrationFormController::class, 'Confirm_For_AccountOffice'])->name('confirm_for_accountOffice');
Route::get('confirm_for_examOffice/form/{id}', [RegistrationFormController::class, 'Confirm_For_ExamOffice'])->name('confirm_for_examOffice');
Route::get('confirm_for_returnRegistrationOffice/form/{id}', [RegistrationFormController::class, 'Confirm_For_returnRegistrationOffice'])->name('confirm_for_returnRegisterOffice');
Route::get('confirm_for_delivered_certificate/form/{id}', [RegistrationFormController::class, 'Confirm_For_Deliver_Certificate'])->name('confirm_for_delivered_certificate');

//Pending Confirm List
Route::get('confirm_examOffice_pending/{id}', [RegistrationFormController::class, 'Confirm_examOffice_pending'])->name('confirm_examOffice_pending');
Route::get('back_pending_to_examOffice/{id}', [RegistrationFormController::class, 'Back_Pending_to_ExamOffice'])->name('back_pending_to_examOffice');

Route::get('confirm_registerOffice_pending/{id}', [RegistrationFormController::class, 'Confirm_registerOffice_pending'])->name('confirm_registerOffice_pending');
Route::get('back_pending_to_registerOffice/{id}', [RegistrationFormController::class, 'Back_Pending_to_RegisterOffice'])->name('back_pending_to_registerOffice');

Route::get('confirm_accountOffice_pending/{id}', [RegistrationFormController::class, 'Confirm_AccountOffice_pending'])->name('confirm_accountOffice_pending');
Route::get('back_pending_to_accountOffice/{id}', [RegistrationFormController::class, 'Back_Pending_to_AccountOffice'])->name('back_pending_to_accountOffice');

Route::get('confirm_registerOffice_Back_pending/{id}', [RegistrationFormController::class, 'Confirm_RegisterOffice_Back_Pending'])->name('confirm_registerOffice_Back_pending');
Route::get('back_pending_to_registrationOffice_return/{id}', [RegistrationFormController::class, 'Back_Pending_to_RegisterOffice_Return'])->name('back_pending_to_registrationOffice_return');

// Admin Login View
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

// Admin View
Route::group(['middleware' => 'auth:admin,exam,register,account,library'], function () {
    Route::get('/admin/dashboard', [IndexController::class, 'FormCountView'])->name('dashboard');
});

Route::post('/logout', [AdminController::class, 'destroy'])->name('logout');

Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth.admin:admin')->name('admin.logout');

Route::get('/dashboard', [IndexController::class, 'index'])->middleware(['auth:sanctum,web', 'verified']);

Route::middleware('auth')->group(function () {

//NOTIFICATION
    Route::get('/notifications', [NotificationController::class, 'notification'])->middleware('auth')->name('notification');

});


//Backend User Register
Route::get('user_register/show', [UserController::class, 'RegisterView'])->name('user.register');
Route::post('user_register/store', [UserController::class, 'RegisterStore'])->name('user.store');




//Backend Teacher Register
Route::get('teacher_register/show', [TeacherController::class, 'RegisterView'])->name('teacher.register');
Route::post('teacher_register/store', [TeacherController::class, 'RegisterStore'])->name('teacher_register.store');






//Apply Registration Form
    Route::get('/registration/form/dataview', [RegistrationFormController::class, 'RegistrationFormDataView'])->name('view.registration_data');
    Route::get('registration/general_view/{student_id}/{semester_name}', [RegistrationFormController::class, 'RegistrationGeneralView'])->name('general_view.registration');
    Route::delete('registration/delete/{id}', [RegistrationFormController::class, 'RegistrationFormDelete'])->name('delete.registration_data'); //sweet alert







//route for show users
    Route::get('/user/list', [BackendController::class, 'UserView'])->name('user.list');
    Route::get('/user/list_edit/{id}', [BackendController::class, 'UserEdit'])->name('user_list.edit');
    Route::post('/user/list_update', [BackendController::class, 'UserUpdate'])->name('user_list.update');
    Route::get('/user/list_delete/{id}', [BackendController::class, 'UserDelete'])->name('user.delete');



//route for show teacher
Route::get('/teacher/list', [BackendController::class, 'TeacherView'])->name('teacher.list');
Route::get('/user/list_edit/{id}', [BackendController::class, 'UserEdit'])->name('user_list.edit');
Route::post('/user/list_update', [BackendController::class, 'UserUpdate'])->name('user_list.update');
Route::get('/user/list_delete/{id}', [BackendController::class, 'UserDelete'])->name('user.delete');






    //slider routes
    Route::get('slider/show', [SliderController::class, 'SliderView'])->name('all.sliders');
    Route::post('slider/store', [SliderController::class, 'SliderStore'])->name('store.slider');
    Route::get('slider/edit/{id}', [SliderController::class, 'SliderEdit'])->name('edit.slider');
    Route::post('slider/update', [SliderController::class, 'SliderUpdate'])->name('update.slider');
    Route::delete('slider/delete/{id}', [SliderController::class, 'SliderDelete'])->name('delete.slider'); //sweet alert

//Course for admin part
    Route::get('offered_course/show', [Certificate_ItemController::class, 'Certificate_ItemView'])->name('all.certificate_item');
    Route::post('certificate_item/store', [Certificate_ItemController::class, 'Certificate_ItemStore'])->name('store.certificate_item');
    Route::get('certificate_item/edit/{id}', [Certificate_ItemController::class, 'Certificate_ItemEdit'])->name('edit.certificate_item');
    Route::post('certificate_item/update', [Certificate_ItemController::class, 'Certificate_ItemUpdate'])->name('update.certificate_item');
    Route::get('certificate/delete/{id}', [Certificate_ItemController::class, 'Certificate_ItemDelete'])->name('delete.certificateItem');


//all course (user section)
Route::get('course/show', [Certificate_ItemController::class, 'CourseView'])->name('all.course');
Route::get('taken_course/show', [Certificate_ItemController::class, 'TakenCourseView'])->name('all.taken_course');
Route::get('taken_course_general/show/{id}', [Certificate_ItemController::class, 'TakenCourseGeneralView'])->name('all.taken_course_general');


Route::get('taken_course_semesterwise/show/{id}', [Certificate_ItemController::class, 'SemesterWise_TakenCourseView'])->name('all.semester_wise_taken_course');

//Completed Course
Route::get('completed_course/show', [Certificate_ItemController::class, 'CompletedCourseView'])->name('all.completed_course');

Route::get('take_course/show', [Certificate_ItemController::class, 'RetakeCourseView'])->name('all.retake_course');



//update for goving marks
Route::post('/course_update/{student_id}/{course_name}/{semester_name}', [Certificate_ItemController::class, 'CourseUpdate'])->name('course.update');





//Offered Course User own Batch
Route::get('offered_course_batch/show', [Certificate_ItemController::class, 'OfferedCourse_forBatch'])->name('view.Offered_course_batch');




//Offered Course User Own department
Route::get('offered_course_department/show', [Certificate_ItemController::class, 'OfferedCourse_forDepartment'])->name('view.Offered_course_department');


//Department
    Route::get('department/show', [DepartmentController::class, 'DepartmentView'])->name('all.department');
    Route::post('department/store', [DepartmentController::class, 'DepartmentStore'])->name('store.department');
    Route::get('department/edit/{id}', [DepartmentController::class, 'DepartmentEdit'])->name('edit.department');
    Route::post('department/update', [DepartmentController::class, 'DepartmentUpdate'])->name('update.department');
    Route::get('delete/{id}', [DepartmentController::class, 'DepartmentDelete'])->name('delete.department');

//Message View
    Route::get('/guestUser_message/view', [ContactMessageController::class, 'GuestMessageView'])->name('guestUser_contact_message.view');
    Route::get('/user_message/view', [ContactMessageController::class, 'ContactMessageView'])->name('contact_message.view');

//Admin Message
    Route::get('/admin_message/{param}', [AdminMessageController::class, 'AddAdminMessage'])->name('admin_message');
    Route::post('/admin_message/store', [AdminMessageController::class, 'StoreAdminMessage'])->name('store_admin_message');
    Route::get('/admin_message/view', [ContactMessageController::class, 'AdminMessageView'])->name('admin_message.view');

    //view Payment
    Route::get('/view_payment/data', [PaymentController::class, 'View_payment'])->name('view_payment');




//Contact Us
Route::post('/contact_message/store', [ContactMessageController::class, 'ContactMessageStore'])->name('contact_message.store');
Route::get('/contact_message/delete/{id}', [ContactMessageController::class, 'ContactMessageDelete'])->name('contact_message.delete');
Route::get('user_message/general_view/{id}', [ContactMessageController::class, 'ContactMessageGeneralView'])->name('contact_message.general_view');
Route::get('guest_message/general_view/{id}', [ContactMessageController::class, 'GuestMessageGeneralView'])->name('guest_message.general_view');

Route::middleware('auth')->group(function () {

    //User Message
    Route::get('/user_message', [AdminMessageController::class, 'AddUserMessage'])->name('user_message');
    Route::post('/user_message/store', [AdminMessageController::class, 'StoreUserMessage'])->name('store_user_message');
    Route::get('/frontend_message/view', [ContactMessageController::class, 'FrontendMessageView'])->name('frontend_message.view');

});

Route::get('/contact_us', [IndexController::class, 'ContactUs'])->name('contact.us');
Route::get('/about_us', [IndexController::class, 'AboutUs'])->name('about.us');

Route::middleware('auth')->group(function () {

    
//Payment Page
    Route::get('/add_payment', [PaymentController::class, 'Addpayment'])->middleware('auth')->name('add_payment');
    Route::post('/store_payment', [PaymentController::class, 'Storepayment'])->name('store_payment');


    Route::get('/payment_history', [PaymentController::class, 'addPaymentHistory'])->middleware('auth')->name('add_payment_history');

});

Route::get('/get/line', [AdminController::class, 'lineChart']);

Route::middleware('auth')->group(function () {
// SSLCOMMERZ Start
    Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
    Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

    Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

});

Route::group(['middleware' => 'auth:admin,exam,register,account,library'], function () {

    Route::post('view/searched_user', [UserSearchController::class, 'studentIdWise'])->name('add_details');
    Route::post('view/searched_form_user', [UserSearchController::class, 'studentIdWiseForm'])->name('search_form');
    Route::post('searched_user_payment', [UserSearchController::class, 'studentIdWisePayment'])->name('search_payment');


    Route::get('/allow_course/{id}', [RegistrationFormController::class, 'allow_courseId'])->name('allowCourseId');

});


//Ragistration Time control
Route::get('/registration_time/control/{id}', [AdminController::class, 'RagistrationTimeControl'])->name('registration_time_control');
