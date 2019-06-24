<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-picasa
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2012-2017 Gregor Anzelj, info@povsod.com
 *
 */

defined('INTERNAL') || die();

$string['title'] = 'Picasa';
$string['description'] = 'Select files from Picasa cloud';

$string['service'] = 'Picasa';
$string['servicename'] = 'Picasa';

$string['applicationdesc'] = '<p>You must create project and register your application in %sGoogle Cloud Platform API Manager%s. In the Google API Manager on "Credentials" tab select "OAuth client ID" from "Create credentials" drop-down box. For <code>Application type</code> select "Web application", fill-in <code>Name</code> and <code>Authorized redirect URIs</code> of your application and then create it.</p>
<p>When the application is generated you can customize the consent screen by clicking the link "OAuth consent screen" and filling-in the appropriate values.</p>';
$string['webappsclientid'] = 'Credentials';
$string['consumerkey'] = 'Client ID';
$string['consumerkeydesc'] = 'When you\'ll create a product, you\'ll get a Client ID. Paste it here.';
$string['consumersecret'] = 'Client secret';
$string['consumersecretdesc'] = 'When you\'ll create a product, you\'ll get an Client secret. Paste it here.';
$string['redirecturl'] = 'Authorized redirect URI';
$string['redirecturldesc'] = 'URL to return user to, after successful authentication. Copy it and paste it to the list of Authorized Redirect URIs.';

$string['brandinginformation'] = 'OAuth consent screen';
$string['productname'] = 'Product name shown to users';
$string['productnamedesc'] = 'You must provide unique product name, e.g. the name of this site.';
$string['productweb'] = 'Homepage URL (Optional)';
$string['productwebdesc'] = 'The URL where this product will be used, e.g. URL of your site.';
$string['productlogo'] = 'Product logo URL (Optional)';
$string['productlogodesc'] = 'You must provide URL address to your product logo. Logo size must not exceed 120x120 pixels.';
$string['privacyurl'] = 'Privacy policy URL (Optional)';
$string['termsurl'] = 'Terms of service URL (Optional)';

$string['selectfiles'] = 'Select files';
$string['revokeconnection'] = 'Revoke connection to Picasa';
$string['connecttopicasa'] = 'Connect to Picasa';

$string['display'] = 'Display';
$string['displaydesc'] = 'Please note that the more files you select to embed, the more time consuming the embedding process becomes.';
$string['displaydesc2'] = 'Embedding is only available for Google Docs files (documents, drawings, presentations and spreadsheets).';
$string['displaylist'] = 'List of files';
$string['displayembed'] = 'Embedded files';

$string['embedoptions'] = 'Embed options';
$string['size'] = 'Size';
$string['sizesquare72c'] = 'Square';
$string['sizesquare150c'] = 'Large Square';
$string['sizethumb110'] = 'Thumbnail';
$string['sizesmall220'] = 'Small';
$string['sizesmall320'] = 'Small 320';
$string['sizemedium512'] = 'Medium';
$string['sizemedium640'] = 'Medium 640';
$string['sizemedium800'] = 'Medium 800';
$string['sizelarge1024'] = 'Large';
$string['sizelarge1600'] = 'Large 1600';
$string['sizeoriginal'] = 'Original';
$string['frame'] = 'Add photo frame to each photo?';
$string['slideshow'] = 'Embed each photoset as slideshow?';
$string['allowdownload'] = 'Allow download';
$string['allowprint'] = 'Allow print';
$string['allowshare'] = 'Allow share';
$string['allow'] = 'Which actions are allowed?';

// Export text formats
$string['text/html'] = 'HTML';
$string['text/plain'] = 'Plain Text';
$string['image/jpeg'] = 'JPEG image';
$string['image/png'] = 'PNG image';
$string['image/svg+xml'] = 'SVG image';
$string['application/rtf'] = 'Rich Text';
$string['application/pdf'] = 'Adobe PDF';
$string['application/vnd.oasis.opendocument.text'] = 'OpenDocument Text';
$string['application/x-vnd.oasis.opendocument.text'] = 'OpenDocument Text';
$string['application/msword'] = 'Microsoft Word';
$string['application/vnd.openxmlformats-officedocument.wordprocessingml.document'] = 'Microsoft Word';
$string['application/vnd.oasis.opendocument.spreadsheet'] = 'OpenDocument Spreadsheet';
$string['application/x-vnd.oasis.opendocument.spreadsheet'] = 'OpenDocument Spreadsheet';
$string['application/vnd.ms-excel'] = 'Microsoft Excel';
$string['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'] = 'Microsoft Excel';
$string['application/vnd.oasis.opendocument.presentation'] = 'OpenDocument Presentation';
$string['application/x-vnd.oasis.opendocument.presentation'] = 'OpenDocument Presentation';
$string['application/vnd.openxmlformats-officedocument.presentationml.presentation'] = 'Microsoft PowerPoint';
