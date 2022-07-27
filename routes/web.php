<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\sidebar;
use App\Http\Controllers\stu_logincontroller;
use App\Http\Controllers\StudentLiveTable;
use App\Http\Controllers\subjectlivetable;
use App\Http\Controllers\co;
use App\Http\Controllers\result;
use App\Http\Controllers\teacherlivetable;
use App\Http\Controllers\teacher_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//sidebar
route::get('sidebar',[sidebar::class,'sidebar']);
route::get('sidebar2',[sidebar::class,'sidebar2']);
//login of admin
route::get('ad_log_reg',[admin_controller::class,'admin'])->name('ad_log_reg');
route::post('admin_login',[admin_controller::class,'admin_login_sub']);
route::post('admin_register',[admin_controller::class,'admin_register']);
//login for student
route::get('login_stu',[stu_logincontroller::class,'login'])->name('login_stu');
route::get('login_sub',[stu_logincontroller::class,'login_sub']);
//login for teacher
route::get('teacher',[teacher_controller::class,'teacher'])->name('teacher');
route::get('admin_login',[teacher_controller::class,'teacher_login_sub']);



//student table
//Route::get('sel_stu_exam','StudentLiveTable@select_stu_for_exam');
Route::get('/stu_livetable',[StudentLiveTable::class,'index']);
//Route::get('display_stu/{examid:_id}','StudentLiveTable@display');
Route::get('/stu_livetable/fetch_data',[StudentLiveTable::class,'fetch_data']);
Route::post('/stu_livetable/add_data',[StudentLiveTable::class,'add_data'])->name('stu_livetable.add_data');
Route::post('/stu_livetable/update_data',[StudentLiveTable::class,'update_data'])->name('stu_livetable.update_data');
Route::post('/stu_livetable/delete_data',[StudentLiveTable::class,'delete_data'])->name('stu_livetable.delete_data');
Route::get('/delete_all_data',[StudentLiveTable::class,'delete_all_data']);
//Route::get('search_stu', 'StudentLiveTable@search_stu');



//student imp exp

Route::get('file-import-export-stu', [StudentLiveTable::class, 'fileImportExportstu']);
Route::post('file-import-stu', [StudentLiveTable::class, 'fileImport'])->name('file-import-stu');
Route::get('file-export-stu', [StudentLiveTable::class, 'fileExport'])->name('file-export-stu');



//teacher table

Route::get('/teacher_livetable',[teacherlivetable::class,'index']);
//Route::get('display_stu/{examid:_id}','StudentLiveTable@display');
Route::get('/teacher_livetable/fetch_data',[teacherlivetable::class,'fetch_data']);
Route::post('/teacher_livetable/add_data',[teacherlivetable::class,'add_data'])->name('teacher_livetable.add_data');
Route::post('/teacher_livetable/update_data',[teacherlivetable::class,'update_data'])->name('teacher_livetable.update_data');
Route::post('/teacher_livetable/delete_data',[subjectlivetable::class,'delete_data'])->name('teacher_livetable.delete_data');
Route::get('/teacher_all_data',[teacherlivetable::class,'delete_all_data']);



//subject table
Route::get('/subject_livetable',[subjectlivetable::class,'index']);
//Route::get('display_stu/{examid:_id}','StudentLiveTable@display');
Route::get('/subject_livetable/fetch_data',[subjectlivetable::class,'fetch_data']);
Route::post('/subject_livetable/add_data',[subjectlivetable::class,'add_data'])->name('subject_livetable.add_data');
Route::post('/subject_livetable/update_data',[subjectlivetable::class,'update_data'])->name('subject_livetable.update_data');
Route::post('/subject_livetable/delete_data',[subjectlivetable::class,'delete_data'])->name('subject_livetable.delete_data');
Route::get('/delete_all_data',[subjectlivetable::class,'delete_all_data']);

//co-curricular

//graphs
//route::get('/result',[result::class,'barchart']);



Route::get('/co_livetable',[co::class,'index']);
//Route::get('display_stu/{examid:_id}','StudentLiveTable@display');
Route::get('/co_livetable/fetch_data',[co::class,'fetch_data']);
Route::post('/co_livetable/add_data',[co::class,'add_data'])->name('co_livetable.add_data');
Route::post('/co_livetable/update_data',[co::class,'update_data'])->name('co_livetable.update_data');
Route::post('/co_livetable/delete_data',[co::class,'delete_data'])->name('co_livetable.delete_data');
Route::get('/delete_all_data',[co::class,'delete_all_data']);

//result
//Route::get('/result',[result::class,'index']);

Route::get('/result',[result::class,'fetchresult']);
//attendence
//Route::view('/std','std');
//Route::view('std', [StudentLiveTable::class, 'std'])->name('std');
Route::get('/std',[StudentLiveTable::class,'disp']);
//Route::post('store', [FileUploadController::class, 'store']);

//graph
// route::view('graph','graph');
// route::get('totaldept','dashContro@totaldept');
// route::get('barchart','dashContro@barchart');