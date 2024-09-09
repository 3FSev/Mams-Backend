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
        DB::unprepared("CREATE DEFINER=`admindwcc`@`%` PROCEDURE `KillSleepingProcesses`()
BEGIN
  DECLARE done INT DEFAULT FALSE;
  DECLARE proc_id INT;
  DECLARE cur CURSOR FOR
    SELECT id
    FROM information_schema.processlist
    WHERE
      command = 'Sleep' AND
      (
        HOST LIKE '192.168.0.10%' OR
        HOST LIKE '192.168.0.9%' OR
        HOST LIKE '192.168.0.11%'
      );
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
  OPEN cur;
  read_loop: LOOP
    FETCH cur INTO proc_id;
    IF done THEN
      LEAVE read_loop;
    END IF;
    SET @kill_query = CONCAT('KILL ', proc_id);
    PREPARE stmt FROM @kill_query;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
  END LOOP;
  CLOSE cur;
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS KillSleepingProcesses");
    }
};
