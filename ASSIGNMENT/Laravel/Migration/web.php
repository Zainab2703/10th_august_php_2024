use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/employees', function () {
    $employees = DB::table('employees')->get();
    return response()->json($employees);
});

Route::get('/add-employee', function () {
    DB::table('employees')->insert([
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'position' => 'Developer',
        'salary' => 70000,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return 'Employee added!';
});
