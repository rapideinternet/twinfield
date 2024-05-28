<?php

namespace PhpTwinfield;

class DocumentTimeFrame {
    private $year;
    private $period;

    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getPeriod() {
        return $this->period;
    }

    public function setPeriod($period) {
        $this->period = $period;
    }
}