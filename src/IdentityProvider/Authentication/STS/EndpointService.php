<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

namespace Sugarcrm\Sugarcrm\IdentityProvider\Authentication\STS;

use Sugarcrm\IdentityProvider\STS\EndpointService as LibraryEndpointService;

class EndpointService extends LibraryEndpointService
{
    public function __construct(array $oAuth2Config)
    {
        parent::__construct($oAuth2Config);
        $this->oAuth2Endpoints[] = EndpointInterface::REVOCATION_ENDPOINT;
    }
}
