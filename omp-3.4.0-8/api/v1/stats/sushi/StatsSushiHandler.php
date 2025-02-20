<?php

/**
 * @file api/v1/stats/sushi/StatsSushiHandler.php
 *
 * Copyright (c) 2022 Simon Fraser University
 * Copyright (c) 2022 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class StatsSushiHandler
 *
 * @ingroup api_v1_stats
 *
 * @brief Handle API requests for COUNTER R5 SUSHI statistics.
 *
 */

namespace APP\API\v1\stats\sushi;

use APP\sushi\TR;
use APP\sushi\TR_B3;
use PKP\core\APIResponse;
use Slim\Http\Request as SlimHttpRequest;

class StatsSushiHandler extends \PKP\API\v1\stats\sushi\PKPStatsSushiHandler
{
    /**
     * Get this API's endpoints definitions
     */
    protected function getGETDefinitions(array $roles = null): array
    {
        return array_merge(
            parent::getGETDefinitions($roles),
            [
                [
                    'pattern' => $this->getEndpointPattern() . '/reports/tr',
                    'handler' => [$this, 'getReportsTR'],
                    'roles' => $roles
                ],
                [
                    'pattern' => $this->getEndpointPattern() . '/reports/tr_b3',
                    'handler' => [$this, 'getReportsTRB3'],
                    'roles' => $roles
                ],
            ]
        );
    }

    /**
     * COUNTER 'Title Master Report' [TR].
     * A customizable report detailing activity at the press level
     * that allows the user to apply filters and select other configuration options for the report.
     */
    public function getReportsTR(SlimHttpRequest $slimRequest, APIResponse $response, array $args): APIResponse
    {
        return $this->getReportResponse(new TR(), $slimRequest, $response, $args);
    }

    /**
     * COUNTER 'Book Usage by Access Type' [TR_B3].
     * This is a Standard View of Title Master Report that reports on book usage showing all applicable Metric_Types broken down by Access_Type.
     */
    public function getReportsTRB3(SlimHttpRequest $slimRequest, APIResponse $response, array $args): APIResponse
    {
        return $this->getReportResponse(new TR_B3(), $slimRequest, $response, $args);
    }

    /**
     * Get the application specific list of reports supported by the API
     */
    protected function getReportList(): array
    {
        return array_merge(parent::getReportList(), [
            [
                'Report_Name' => 'Title Master Report',
                'Report_ID' => 'TR',
                'Release' => '5',
                'Report_Description' => __('sushi.reports.tr.description'),
                'Path' => 'reports/tr'
            ],
            [
                'Report_Name' => 'Book Usage by Access Type',
                'Report_ID' => 'TR_B3',
                'Release' => '5',
                'Report_Description' => __('sushi.reports.tr_b3.description'),
                'Path' => 'reports/tr_b3'
            ],
        ]);
    }
}
