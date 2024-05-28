<?php

namespace PhpTwinfield;

class Document {
    private $id;
    private $documentCode;
    private $name;
    private $documentTimeFrame;
    private $status;
    private $assignee;
    private $company;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDocumentCode() {
        return $this->documentCode;
    }

    public function setDocumentCode($documentCode) {
        $this->documentCode = $documentCode;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDocumentTimeFrame() {
        return $this->documentTimeFrame;
    }

    public function setDocumentTimeFrame($documentTimeFrame) {
        $this->documentTimeFrame = $documentTimeFrame;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getAssignee() {
        return $this->assignee;
    }

    public function setAssignee($assignee) {
        $this->assignee = $assignee;
    }

    public function getCompany() {
        return $this->company;
    }

    public function setCompany($company) {
        $this->company = $company;
    }
}