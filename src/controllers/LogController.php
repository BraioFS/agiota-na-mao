<?php

class LogController {
    private $logService;

    public function __construct() {
        $this->logService = new LogService();
    }

    public function getLogById($id) {
        return $this->logService->getLogById($id);
    }

    public function createLog($data) {
        return $this->logService->createLog($data);
    }

}
