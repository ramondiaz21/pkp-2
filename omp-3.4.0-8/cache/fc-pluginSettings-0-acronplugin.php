<?php return array (
  'crontab' => 
  array (
    0 => 
    array (
      'className' => 'PKP\\task\\ReviewReminder',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    1 => 
    array (
      'className' => 'PKP\\task\\PublishSubmissions',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    2 => 
    array (
      'className' => 'PKP\\task\\StatisticsReport',
      'frequency' => 
      array (
        'day' => '1',
      ),
      'args' => 
      array (
      ),
    ),
    3 => 
    array (
      'className' => 'PKP\\task\\RemoveUnvalidatedExpiredUsers',
      'frequency' => 
      array (
        'day' => '1',
      ),
      'args' => 
      array (
      ),
    ),
    4 => 
    array (
      'className' => 'PKP\\task\\UpdateIPGeoDB',
      'frequency' => 
      array (
        'day' => '10',
      ),
      'args' => 
      array (
      ),
    ),
    5 => 
    array (
      'className' => 'APP\\tasks\\UsageStatsLoader',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    6 => 
    array (
      'className' => 'PKP\\task\\EditorialReminders',
      'frequency' => 
      array (
        'day' => '1',
      ),
      'args' => 
      array (
      ),
    ),
    7 => 
    array (
      'className' => 'PKP\\task\\ProcessQueueJobs',
      'frequency' => 
      array (
        'hour' => 24,
      ),
      'args' => 
      array (
      ),
    ),
    8 => 
    array (
      'className' => 'PKP\\task\\RemoveFailedJobs',
      'frequency' => 
      array (
        'day' => '1',
      ),
      'args' => 
      array (
      ),
    ),
  ),
  'enabled' => true,
);