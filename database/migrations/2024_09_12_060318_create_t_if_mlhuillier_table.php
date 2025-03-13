<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_if_mlhuillier', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('imported_by')->nullable();
            $table->string('import_status', 25)->nullable()->default('Pending');
            $table->dateTime('import_date_time')->nullable();
            $table->integer('student_id')->nullable();
            $table->integer('sysem')->nullable();
            $table->integer('sy')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->string('control_no', 100)->nullable();
            $table->string('reference_no', 100)->nullable();
            $table->string('payor', 100)->nullable();
            $table->integer('account_no')->nullable();
            $table->string('account_name', 100)->nullable();
            $table->decimal('amount_paid', 11)->nullable();
            $table->string('contact_no', 20)->nullable();
            $table->string('ml_outlet', 20)->nullable();
            $table->string('operator', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_if_mlhuillier');
    }
};
