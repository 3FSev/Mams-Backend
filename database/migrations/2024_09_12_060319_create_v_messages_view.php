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
        DB::statement("CREATE VIEW `v_messages` AS select `ts`.`ID` AS `id`,`ts`.`STUDENT_NO` AS `student_no`,concat(`ta`.`FNAME`,' ',`ta`.`LNAME`) AS `username`,`rcl`.`CODE` AS `DEPT` from (((`dwcc_data`.`t_applicant` `ta` join `dwcc_data`.`t_student` `ts` on(`ts`.`APPLICANT` = `ta`.`ID` and (ucase(`ts`.`STUD_PROGRAM_TYPE`) = 'COLLEGE' or `ts`.`STUD_PROGRAM_TYPE` = 'GS'))) join `dwcc_data`.`r_course` `rc` on(`ts`.`COURSE` = `rc`.`ID`)) join `dwcc_data`.`r_college` `rcl` on(`rc`.`COLLEGE` = `rcl`.`ID`)) union all select `dwcc_data`.`m_user`.`id` AS `id`,`dwcc_data`.`m_user`.`u_name` AS `u_name`,`dwcc_data`.`m_user`.`username` AS `username`,'' AS `Name_exp_8` from `dwcc_data`.`m_user`");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS `v_messages`");
    }
};
