<?php

class ProposalController {
    private $proposalService;

    public function __construct() {
        $this->proposalService = new ProposalService();
    }

    public function index() {
        return $this->proposalService->getAllProposals();
    }

    public function show($id) {
        return $this->proposalService->getProposalById($id);
    }

    public function store($data) {
        return $this->proposalService->createProposal($data);
    }

    public function update($id, $data) {
        return $this->proposalService->updateProposal($id, $data);
    }

    public function destroy($id) {
        return $this->proposalService->deleteProposal($id);
    }
}
