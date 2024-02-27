<?php
class LogService
{
    private $logRepository;

    public function __construct()
    {
        $this->logRepository = new LogRepository();
    }

    public function getProposalById($id)
    {
        return $this->logRepository->getById($id);
    }

    public function createProposal($data)
    {
        return $this->logRepository->create($data);
    }
} ?>