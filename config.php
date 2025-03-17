<?php
/**
 *
 * @package    mahara
 * @subpackage core
 * @author     Catalyst IT Limited <mahara@catalyst.net.nz>
 * @license    https://www.gnu.org/licenses/gpl-3.0.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

/**
 * MAHARA CONFIGURATION FILE
 *
 * INSTRUCTIONS:
 * 1. Copy this file from config-dist.php to config.php
 * 2. Change the values in it to suit your environment.
 *
 * Information about this file is available on the Mahara wiki:
 *     https://git.mahara.org/catalyst/mahara/-/wikis/System-administration/Installing-Mahara#set-up-maharas-configphp
 *
 * This file includes only the most commonly used Mahara configuration directives. For more options
 * that can be placed in this file, see the Mahara lib file:
 *
 *     htdocs/lib/config-defaults.php
 */

$cfg = new stdClass();


/**
 * database connection details
 * valid values for dbtype are 'postgres' and 'mysql'
 */
$cfg->dbtype   = 'mysql';
$cfg->dbhost   = 'mysql';
$cfg->dbport   = null; // Change if you are using a non-standard port number for your database
$cfg->dbname   = 'mahara';
$cfg->dbuser   = 'root';
$cfg->dbpass   = 'purple';

/**
 * dataroot: The server directory where uploaded files are stored
 *
 * This is an ABSOLUTE FILESYSTEM PATH. This is NOT a URL.
 * For example, valid paths are:
 *  * /home/user/maharadata
 *  * /var/lib/mahara
 *  * c:\maharadata
 * INVALID paths:
 *  * http://yoursite/files
 *  * ~/files
 *  * ../data
 *
 * This path must be writable by the webserver and outside the document root (the
 * place where the Mahara files like index.php have been installed).
 * For security purposes, Mahara will NOT RUN if this is inside your document root.
 */
$cfg->dataroot = '/var/maharafiles';

/**
 * wwwroot: The base URL of your Mahara installation.
 *
 * (Normally, this is automatically detected. If it doesn't work for you then try specifying it here.)
 */
// Example:
// $cfg->wwwroot = 'https://myhost.com/mahara/';

/**
 * urlsecret A secret you need to add to the lib/cron.php or admin/upgrade.php
 * URL to run it through the browser rather than the commandline to prevent unauthorised users triggering
 * the cron or an upgrade, eg http://example.com/lib/cron.php?urlsecret=mysupersecret.
 *
 * You can disable this functionality by setting $cfg->urlsecret = null.
 */
// $cfg->urlsecret = 'mysupersecret';

/**
 * passwordsaltmain: A secret token used for one-way encryption of user account passwords.
 */
$cfg->passwordsaltmain = 'UJ4ymtYviqjbp6Vj4O4Hk3v18LbSSCjegUNe9X3bKt4chnn6ct';

/**
 * Uncomment the following line if this server is not a production system.
 * This will display a banner at the top of the site indicating that it is not a
 * production site, which can help prevent users confusing it with your production site.
 * It will also enable on-screen display of warnings and error messages to aid in testing.
 */
//$cfg->productionmode = false;

$cfg->sendmail = false;

$cfg->sessionhandler = "redis";
$cfg->redisserver = "redis:6379";

// closing php tag intentionally omitted to prevent whitespace issues
