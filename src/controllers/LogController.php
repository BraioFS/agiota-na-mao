<?php

class LogController {
    private $logService;

    public function __construct() {
        $this->logService = new LogService();
    }

    public function show($id) {
        return $this->logService->getProposalById($id);
    }

    public function store($data) {
        return $this->logService->createProposal($data);
    }

}
