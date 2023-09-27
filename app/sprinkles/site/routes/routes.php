<?php

/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

use UserFrosting\Sprinkle\Core\Util\NoCache;

$app->group('/site', function () {
    $this->get('/page1', 'UserFrosting\Sprinkle\site\Controller\SiteController:page1');
    //$this->get('/page2', 'UserFrosting\Sprinkle\site\src\Controller\SiteController:mainpage');
})->add(new NoCache());

