public function up(): void
{
    Schema::create('teachers', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('subject');
        $table->string('email')->unique();
        $table->timestamps();
    });
}
