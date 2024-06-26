<?php

namespace PhpTwinfield\Enums;

use PhpTwinfield\Services\DeclarationService;
use PhpTwinfield\Services\FinderService;
use PhpTwinfield\Services\ProcessXmlService;
use PhpTwinfield\Services\SessionService;

/**
 * All web services offered by Twinfield.
 *
 * Note that the services missing in this enum have not yet been implemented.
 *
 * Each constant should have a classname as the value. The class contains the WSDL link.
 *
 * @link https://accounting.twinfield.com/webservices/documentation/#/GettingStarted/WebServicesOverview
 *
 * @method static self FINDER()
 * @method static self PROCESSXML()
 * @method static self SESSION()
 * @method static self DECLARATION()
 */
class Services extends \MyCLabs\Enum\Enum
{
    /**
     * Twinfield Finder web service methods.
     */
    protected const FINDER = FinderService::class;

    /**
     * Twinfield Process XML web service methods. See below for an overview of the supported XML messages.
     */
    protected const PROCESSXML = ProcessXmlService::class;

    /**
     * The service that selects the current office in Twinfield
     */
    protected const SESSION = SessionService::class;

    /**
     * The service that enables interaction with the command query API.
     */
    protected const DECLARATION = DeclarationService::class;
}