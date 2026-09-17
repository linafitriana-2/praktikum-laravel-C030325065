public function up(): void
{
    Schema::table('mahasiswas', function (Blueprint $table) {
        $table->string('email')->nullable()->after('nama');
    });
}

public function down(): void
{
    Schema::table('mahasiswas', function (Blueprint $table) {
        $table->dropColumn('email');
    });
}