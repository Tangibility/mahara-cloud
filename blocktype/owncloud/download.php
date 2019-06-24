<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-owncloud
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2012-2017 Gregor Anzelj, info@povsod.com
 *
 */

define('INTERNAL', 1);
define('PUBLIC', 1);

require(dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/init.php');
require_once(get_config('libroot') . 'view.php');
safe_require('artefact', 'cloud');
safe_require('blocktype', 'cloud/owncloud');

$id = param_variable('id', 0); // Possible values: numerical (= folder id), 0 (= root folder), parent (= get parent folder id from path)
$save = param_integer('save', 0); // Indicate to download file or save it (save=1) to local Mahara file repository...
$viewid = param_integer('view', 0);


if ($save) {
    // Save file to Mahara
    $saveform = pieform(array(
        'name'       => 'saveform',
        'plugintype' => 'artefact',
        'pluginname' => 'cloud',
        'template'   => 'saveform.php',
        'templatedir' => pieform_template_dir('saveform.php', 'artefact/cloud'),
        'elements'   => array(
            'fileid' => array(
                'type'  => 'hidden',
                'value' => $id,
            ),
            'folderid' => array(
                'type'    => 'select',
                'title'   => get_string('savetofolder', 'artefact.cloud'),
                'options' => get_foldertree_options(),
                //'size'    => 8,                
                'rules'   => array(
                    'required' => true
                ),
                'collapseifoneoption' => false,
            ),
            'submit' => array(
                'type' => 'submitcancel',
                'value' => array(get_string('save'), get_string('cancel')),
                'goto' => get_config('wwwroot') . 'artefact/cloud/blocktype/owncloud/manage.php',
            )
        ),
    ));
    
    $smarty = smarty();
    $smarty->assign('PAGEHEADING', get_string('savetomahara', 'artefact.cloud'));
    $smarty->assign('form', $saveform);
    $smarty->display('form.tpl');
}
else {
    // Download file
    $ownerid = null;
    if ($viewid > 0) {
        $view = new View($viewid);
        $ownerid = $view->get('owner');
    }
    else {
        $ownerid = null;
    }
    $file = PluginBlocktypeOwncloud::get_file_info($id, $ownerid);
    $content = PluginBlocktypeOwncloud::download_file($id, $ownerid);

    header('Pragma: no-cache');
    header('Content-disposition: attachment; filename="' . str_replace('"', '\"', $file['name']) . '"');
    header('Content-Transfer-Encoding: binary');
    header('Content-type: application/octet-stream');
    echo $content;
}

function saveform_submit(Pieform $form, $values) {
    PluginBlocktypeOwncloud::download_to_artefact(
        $values['fileid'],
        $values['folderid']
    );

    redirect(get_config('wwwroot') . 'artefact/cloud/blocktype/owncloud/manage.php');
}
