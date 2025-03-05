use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

Route::get('/', [AdminController::class, 'index']);
Route::resource('students', StudentController::class);
