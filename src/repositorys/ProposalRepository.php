<?php
class ProposalRepository
{
    private $proposals;

    public function __construct()
    {
        $this->proposals = [];
    }

    public function getAll()
    {
        return $this->proposals;
    }

    public function getById($id)
    {
        foreach ($this->proposals as $proposal) {
            if ($proposal['id'] == $proposal) {
                return $proposal;
            }
        }
        return null;
    }

    public function create($data)
    {
        $proposalData['id'] = uniqid();
        $this->proposals[] = $proposalData;
        return $proposalData;
    }

    public function update($id, $newData)
    {
        foreach ($this->proposals as &$proposal) {
            if ($proposal['id'] == $proposal) {
                $proposal = array_merge($proposal, $newData);
                return $proposal;
            }
        }
        return null;
    }

    public function delete($id)
    {
        foreach ($this->proposals as $key => $proposal) {
            if ($proposal['id'] == $id) {
                unset($this->proposals[$key]);
                return true;
            }
        }
        return false;
    }
} ?>