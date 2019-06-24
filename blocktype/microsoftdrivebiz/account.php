<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-microsoftdrivebiz
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2015-2017 Gregor Anzelj, info@povsod.com
 *
 */

define('INTERNAL', 1);
define('MENUITEM', 'content/clouds');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'cloud');
define('SECTION_PAGE', 'index');

require(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/init.php');
define('TITLE', get_string('servicename', 'blocktype.cloud/microsoftdrivebiz'));
require_once('lib.php');

// Check sesskey to reduce risk of Cross-Site-Request Forgery
form_validate(param_alphanum('sesskey', null));
$action = param_alpha('action', 'info');
$viewid = param_integer('view', 0);

if ($viewid > 0) {
    $USER->set_account_preference('lasteditedview', $viewid);
}
else {
    $USER->set_account_preference('lasteditedview', 0);
}

switch ($action) {
    case 'login':
        PluginBlocktypeMicrosoftdrivebiz::request_token();
        break;
    case 'logout':
        PluginBlocktypeMicrosoftdrivebiz::delete_token();
        PluginBlocktypeMicrosoftdrivebiz::revoke_access();
        // Redirect is not needed, because Microsoft Graph authorization web service
        // will redirect to that URL after successfully signing the user out.
        //redirect(get_config('wwwroot').'artefact/cloud');
        break;
    default:
        throw new ParameterException("Parameter for login to or logout from Microsoft Graph is missing.");
}
