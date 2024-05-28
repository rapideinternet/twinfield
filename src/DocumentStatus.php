<?php

namespace PhpTwinfield;

class DocumentStatus {
    private $description;
    private $stepIndex;
    private $extraInformation;


    public function getDescription() {
        // 1 = Created
        // 2 = Modified
        // 3 = Sending
        // 4 = Error while sending
        // 5 = Sent
        // 6 = Rejected
        // 7 = Approved
        // 8 = Authorized

        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getStepIndex() {
        return $this->stepIndex;
    }

    public function setStepIndex($stepIndex) {
        $this->stepIndex = $stepIndex;
    }

    public function getExtraInformation() {
        return $this->extraInformation;
    }

    public function setExtraInformation($extraInformation) {
        $this->extraInformation = $extraInformation;
    }
}