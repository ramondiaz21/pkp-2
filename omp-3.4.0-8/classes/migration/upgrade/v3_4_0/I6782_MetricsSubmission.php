<?php

/**
 * @file classes/migration/upgrade/v3_4_0/I6782_MetricsSubmission.php
 *
 * Copyright (c) 2022 Simon Fraser University
 * Copyright (c) 2022 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class I6782_MetricsSubmission
 *
 * @brief Migrate submission stats data from the old DB table metrics into the new DB tables metrics_submission.
 */

namespace APP\migration\upgrade\v3_4_0;

use Illuminate\Support\Facades\DB;
use PKP\config\Config;
use PKP\install\DowngradeNotSupportedException;
use PKP\migration\Migration;

class I6782_MetricsSubmission extends Migration
{
    private const ASSOC_TYPE_SUBMISSION = 0x0100009;
    private const ASSOC_TYPE_SUBMISSION_FILE = 0x0000203;
    private const ASSOC_TYPE_SUBMISSION_FILE_COUNTER_OTHER = 0x0000213;

    /**
      * Run the migration.
      */
    public function up(): void
    {
        $dayFormatSql = "DATE_FORMAT(STR_TO_DATE(m.day, '%Y%m%d'), '%Y-%m-%d')";
        $bigIntCast = 'UNSIGNED';
        if (substr(Config::getVar('database', 'driver'), 0, strlen('postgres')) === 'postgres') {
            $dayFormatSql = "to_date(m.day, 'YYYYMMDD')";
            $bigIntCast = 'BIGINT';
        }

        // The not existing foreign keys should already be moved to the metrics_tmp in I6782_OrphanedMetrics
        // Migrate submission metrics; consider abstracts, galley and supp files
        $selectSubmissionMetrics = DB::table('metrics as m')
            ->select(DB::raw("m.load_id, m.context_id, m.assoc_id, null, null, null, null, m.assoc_type, {$dayFormatSql}, m.metric"))
            ->where('m.assoc_type', '=', self::ASSOC_TYPE_SUBMISSION)
            ->where('m.metric_type', '=', 'omp::counter');
        DB::table('metrics_submission')->insertUsing(['load_id', 'context_id', 'submission_id', 'chapter_id', 'representation_id', 'submission_file_id', 'file_type', 'assoc_type', 'date', 'metric'], $selectSubmissionMetrics);

        $selectSubmissionFileMetrics = DB::table('metrics as m')
            ->leftJoin('submission_file_settings as sfs', function ($join) {
                $join->on('m.assoc_id', '=', 'sfs.submission_file_id');
                $join->where('m.assoc_type', '=', self::ASSOC_TYPE_SUBMISSION_FILE);
                $join->where('sfs.setting_name', '=', 'chapterId');
            })
            ->select(DB::raw("m.load_id, m.context_id, m.submission_id, CAST(sfs.setting_value AS {$bigIntCast}), m.representation_id, m.assoc_id, m.file_type, m.assoc_type, {$dayFormatSql}, m.metric"))
            ->where('m.assoc_type', '=', self::ASSOC_TYPE_SUBMISSION_FILE)
            ->where('m.metric_type', '=', 'omp::counter');
        DB::table('metrics_submission')->insertUsing(['load_id', 'context_id', 'submission_id', 'chapter_id', 'representation_id', 'submission_file_id', 'file_type', 'assoc_type', 'date', 'metric'], $selectSubmissionFileMetrics);

        $selectSubmissionSuppFileMetrics = DB::table('metrics as m')
            ->leftJoin('submission_file_settings as sfs', function ($join) {
                $join->on('m.assoc_id', '=', 'sfs.submission_file_id');
                $join->where('m.assoc_type', '=', self::ASSOC_TYPE_SUBMISSION_FILE_COUNTER_OTHER);
                $join->where('sfs.setting_name', '=', 'chapterId');
            })
            ->select(DB::raw("m.load_id, m.context_id, m.submission_id, CAST(sfs.setting_value AS {$bigIntCast}), m.representation_id, m.assoc_id, m.file_type, m.assoc_type, {$dayFormatSql}, m.metric"))
            ->where('m.assoc_type', '=', self::ASSOC_TYPE_SUBMISSION_FILE_COUNTER_OTHER)
            ->where('m.metric_type', '=', 'omp::counter');
        DB::table('metrics_submission')->insertUsing(['load_id', 'context_id', 'submission_id', 'chapter_id', 'representation_id', 'submission_file_id', 'file_type', 'assoc_type', 'date', 'metric'], $selectSubmissionSuppFileMetrics);
    }

    /**
     * Reverse the downgrades
     *
     * @throws DowngradeNotSupportedException
     */
    public function down(): void
    {
        throw new DowngradeNotSupportedException();
    }
}
