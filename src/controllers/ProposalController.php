<?php

class ProposalController {
    private $proposalService;

    public function __construct() {
        $this->proposalService = new ProposalService();
    }

    public function getAllProposals() {
        return $this->proposalService->getAllProposals();
    }

    public function getProposalById($id) {
        return $this->proposalService->getProposalById($id);
    }

    public function createProposal($data) {
        return $this->proposalService->createProposal($data);
    }

    public function updateProposal($id, $data) {
        return $this->proposalService->updateProposal($id, $data);
    }

    public function deleteProposal($id) {
        return $this->proposalService->deleteProposal($id);
    }
}
