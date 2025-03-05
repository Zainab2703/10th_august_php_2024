Insert Employee:
use Illuminate\Support\Facades\DB;

DB::table('employees')->insert([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'position' => 'Manager',
    'salary' => 50000,
    'created_at' => now(),
    'updated_at' => now(),
]);

Fetch all employees:
$employees = DB::table('employees')->get();

foreach ($employees as $employee) {
    echo $employee->name . '<br>';
}

Update employee data:
DB::table('employees')
    ->where('id', 1)
    ->update(['salary' => 60000]);

Delete an employee:
DB::table('employees')->where('id', 1)->delete();
