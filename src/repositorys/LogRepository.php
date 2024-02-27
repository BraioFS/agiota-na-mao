<?php
class LogRepository
{
    private $logs;

    public function __construct()
    {
        $this->logs = [];
    }


    public function getById($id)
    {
        foreach ($this->logs as $log) {
            if ($log['id'] == $log) {
                return $log;
            }
        }
        return null;
    }

    public function createLog($data)
    {
        $logData['id'] = uniqid();
        $this->logs[] = $logData;
        return $logData;
    }
} ?>