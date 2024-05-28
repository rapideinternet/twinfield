<?php

namespace PhpTwinfield\Mappers;

use PhpTwinfield\Document;
use PhpTwinfield\DocumentAssignee;
use PhpTwinfield\DocumentCompany;
use PhpTwinfield\DocumentStatus;
use PhpTwinfield\DocumentTimeFrame;
use stdClass;

class DocumentMapper {
    public static function map(stdClass $data) {
        $document = new Document();

        $document->setId($data->Id);
        $document->setDocumentCode($data->DocumentCode);
        $document->setName($data->Name);

        $documentTimeFrame = new DocumentTimeFrame();
        $documentTimeFrame->setYear($data->DocumentTimeFrame->Year);
        $documentTimeFrame->setPeriod($data->DocumentTimeFrame->Period);
        $document->setDocumentTimeFrame($documentTimeFrame);

        $status = new DocumentStatus();
        $status->setDescription($data->Status->Description);
        $status->setStepIndex($data->Status->StepIndex);
        $status->setExtraInformation($data->Status->ExtraInformation);
        $document->setStatus($status);

        $assignee = new DocumentAssignee();
        $assignee->setCode($data->Assignee->Code);
        $assignee->setName($data->Assignee->Name);
        $document->setAssignee($assignee);

        $company = new DocumentCompany();
        $company->setCode($data->Company->Code);
        $company->setName($data->Company->Name);
        $document->setCompany($company);

        return $document;
    }
}