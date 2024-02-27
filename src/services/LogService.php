<?php
class LogService
{
    private $logRepository;

    public function __construct()
    {
        $this->logRepository = new LogRepository();
    }

    public function getLogById($id)
    {
        return $this->logRepository->getById($id);
    }

    public function createLog($data)
    {
        return $this->logRepository->createLog($data);
    }
} ?>