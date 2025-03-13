<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `auto_inc`()
BEGIN
	SELECT GROUP_CONCAT(CONCAT('ALTER TABLE ', t.table_name, ' AUTO_INCREMENT = 1')
 SEPARATOR ';') 
FROM information_schema.tables t WHERE t.table_schema = 'dwcc_mams'
AND  t.`AUTO_INCREMENT` > 1;
    END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS auto_inc");
    }
};
