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
        Schema::create('t_payment', function (Blueprint $table) {
            $table->id();
            $table->integer('sy')->nullable();
            $table->integer('sysem')->nullable();
            $table->integer('cashier_id')->nullable();
            $table->integer('counter_id')->nullable();
            $table->string('program_type', 50)->nullable()->comment('Co - College, Elem - Elementary, JS - Junior HS, SHS - Senior HS, GS - Graduate School');
            $table->integer('assessment_id')->nullable();
            $table->integer('student_id')->nullable();
            $table->string('transaction_type', 50)->nullable()->comment('Payment, Credit Memo, Debit Memo, Discount');
            $table->string('or_no', 50)->nullable();
            $table->text('description')->nullable();
            $table->integer('coa_id')->nullable();
            $table->integer('discount_id')->nullable();
            $table->decimal('debit', 18)->nullable()->default(0);
            $table->decimal('credit', 18)->nullable()->default(0);
            $table->decimal('balance', 18)->nullable()->default(0);
            $table->string('payment_mode', 50)->nullable()->comment('Cash, Cheque');
            $table->dateTime('payment_date')->nullable();
            $table->string('check_no', 50)->nullable();
            $table->date('check_date')->nullable();
            $table->string('bank_name', 1000)->nullable();
            $table->string('bank_branch', 1000)->nullable();
            $table->integer('is_void')->nullable()->default(0);
            $table->integer('void_by')->nullable();
            $table->dateTime('date_void')->nullable();
            $table->text('reason_for_void')->nullable();
            $table->decimal('cash_rendered', 11)->nullable();
            $table->integer('is_forwarded')->nullable()->default(0);
            $table->integer('sy_edited_by')->nullable();
            $table->dateTime('sy_date_updated')->nullable();
            $table->text('sy_reason')->nullable();
            $table->integer('from_sy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_payment');
    }
};
