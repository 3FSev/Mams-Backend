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
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `FORWARDBALANCE_SHS`(IN fr_sem INT,to_sem INT)
BEGIN
DECLARE done INT DEFAULT 0;
DECLARE a INT;
DECLARE b DECIMAL(19,2);
DECLARE emprec CURSOR FOR 
	SELECT STUDENT_ID,
	SUM(`DEBIT`) - SUM(CREDIT) AS TOTAL
	FROM t_payment p
	WHERE p.sysem = fr_sem AND program_type = 'SHS' AND p.is_void = 0
	AND p.student_id IN
	(SELECT ts.id
	FROM 	`t_applicant` ta INNER JOIN t_student ts
		ON ta.id = ts.`APPLICANT` 	
		INNER JOIN `t_student_enrollment_shs` tse
		ON tse.student = ts.`id`
		INNER JOIN t_student_enrollment_shs_line tsel
		ON tse.id = tsel.enrollment_id
		INNER JOIN `t_assessment_shs` tas
		ON tas.student = tse.student	 AND tse.sysem = tas.sysem
	WHERE	tse.sysem = fr_sem AND TSE.STUDENT IN
		(SELECT STUDENT_ID FROM t_payment tp
			WHERE program_type = 'SHS' AND sysem = fr_sem AND transaction_type = 'Payment' AND is_void = 0)
	GROUP BY 1)
	GROUP BY 1
	HAVING TOTAL > 0
	ORDER BY 1;
DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
OPEN emprec;
REPEAT
	FETCH emprec INTO a,b;
	IF (! done) THEN
		INSERT INTO t_promisory(`fromsysem`,`tosysem`,`processed_by`,`reason`,`amount`,`student_id`,`date_processed`,`is_forwarded`)
				VALUES (fr_sem,to_sem,'752','FORWARDED BALANCE 1819B - 1819C',
				ABS(b),a,NOW(),'1');
		INSERT INTO t_payment(`sysem`,`cashier_id`,`program_type`,`student_id`,
				`transaction_type`,`description`,`credit`,`payment_date`,`is_forwarded`)
				VALUES (fr_sem,'752','SHS',a,'Credit','CREDIT MEMO - Balance Forwarded',
				ABS(b),NOW(),'1');
		INSERT INTO t_payment(`sysem`,`cashier_id`,`program_type`,`student_id`,
				`transaction_type`,`description`,`debit`,`payment_date`,`is_forwarded`)
				VALUES (to_sem,'752','SHS',a,'Debit','DEBIT MEMO - Balance Forwarded',
				ABS(b),NOW(),'1');
	END IF;		
UNTIL done END REPEAT;
    END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS FORWARDBALANCE_SHS");
    }
};
