<?php
class ProposalService
{
    private $proposalRepository;

    public function __construct()
    {
        $this->proposalRepository = new ProposalRepository();
    }

    public function getAllProposals()
    {
        return $this->proposalRepository->getAll();
    }

    public function getProposalById($id)
    {
        return $this->proposalRepository->getById($id);
    }

    public function createProposal($data)
    {
        return $this->proposalRepository->create($data);
    }

    public function updateProposal($id, $data)
    {
        return $this->proposalRepository->update($id, $data);
    }

    public function deleteProposal($id)
    {
        return $this->proposalRepository->delete($id);
    }
} ?>