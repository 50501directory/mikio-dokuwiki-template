<?php

/**
 * DokuWiki Mikio Template Default Configuration
 *
 * @link    http://dokuwiki.org/template:mikio
 * @author  James Collins <james.collins@outlook.com.au>
 * @license GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */

$conf['iconTag']                = 'icon';
$conf['customTheme']            = 'nyc-dsa';
$conf['showNotifications']      = 'always';
$conf['useLESS']                = 1;
$conf['brandURLGuest']          = '';
$conf['brandURLUser']           = '';
$conf['showLightDark']          = 1;
$conf['autoLightDark']          = 0;
$conf['defaultDark']            = 0;

$conf['navbarUseTitleIcon']     = 1;
$conf['navbarTitleIconHeight']  = '2rem';
$conf['navbarTitleIconWidth']   = '';
$conf['navbarUseTitleText']     = 0;
$conf['navbarUseTaglineText']   = 0;
$conf['navbarCustomMenuText']   = '';
$conf['navbarCustomTitleFormat'] = '%page% [%wiki%]';

$conf['navbarDWMenuType']       = 'icons';
$conf['navbarDWMenuCombine']    = 'combine';

$conf['navbarPosLeft']          = 'custom';
$conf['navbarPosMiddle']        = 'none';
$conf['navbarPosRight']         = 'dokuwiki';
$conf['navbarShowSub']          = 0;

$conf['navbarItemShowCreate']   = 'always';
$conf['navbarItemShowShow']     = 'always';
$conf['navbarItemShowRevs']     = 'always';
$conf['navbarItemShowBacklink'] = 'always';
$conf['navbarItemShowRecent']   = 'always';
$conf['navbarItemShowMedia']    = 'always';
$conf['navbarItemShowIndex']    = 'always';
$conf['navbarItemShowProfile']  = 'always';
$conf['navbarItemShowAdmin']    = 'always';
$conf['navbarItemShowLogin']    = 'always';
$conf['navbarItemShowLogout']   = 'always';

$conf['searchButton']           = 'icon';
$conf['searchUseTypeahead']     = 1;

$conf['heroTitle']              = 0;
$conf['heroImagePropagation']   = 0;

$conf['tagsConsolidate']        = 1;
$conf['tagsShowHero']           = 0;

$conf['breadcrumbHideHome']     = 1;
$conf['breadcrumbPosition']     = 'hero';
$conf['breadcrumbPrefix']       = 0;
$conf['breadcrumbPrefixText']   = 'Trace:';
$conf['breadcrumbSep']          = 0;
$conf['breadcrumbSepText']      = ' » ';

$conf['youarehereHideHome']     = 1;
$conf['youareherePosition']     = 'hero';
$conf['youareherePrefix']       = 0;
$conf['youareherePrefixText']   = 'You are here:';
$conf['youarehereSep']          = 0;
$conf['youarehereSepText']      = ' » ';
$conf['youarehereHome']         = 'page title';
$conf['youarehereShowLast']     = 0;

$conf['sidebarShowLeft']        = 1;
$conf['sidebarAlwaysShowLeft']  = 0;
$conf['sidebarLeftRow1']        = 'search';
$conf['sidebarLeftRow2']        = 'content';
$conf['sidebarLeftRow3']        = 'none';
$conf['sidebarLeftRow4']        = 'none';
$conf['sidebarMobileDefaultCollapse']    = 1;
$conf['sidebarShowRight']       = 0;
$conf['sidebarAlwaysShowRight'] = 0;

$conf['tocFull']                = 0;

$conf['pageToolsFloating']      = 'always';
$conf['pageToolsFooter']        = 'none';

$conf['pageToolsShowCreate']    = 'always';
$conf['pageToolsShowEdit']      = 'always';
$conf['pageToolsShowRevs']      = 'always';
$conf['pageToolsShowBacklink']  = 'always';
$conf['pageToolsShowTop']       = 'always';

$conf['footerPageInfoText']     = '{file} · %lastmod% {date}[LOGGEDIN=[USER= %by% {user}][LOCKED= · %lockedby% {locked}]]';
$conf['footerCustomMenuText']   = '';
$conf['footerSearch']           = 0;
$conf['footerInPage']           = 0;

$conf['licenseType']            = 'badge';
$conf['licenseImageOnly']       = 0;

$conf['includePageUseACL']      = 1;
$conf['includePagePropagate']   = 1;

$conf['stickyTopHeader']        = 0;
$conf['stickyNavbar']           = 0;
$conf['stickyHeader']           = 0;
$conf['stickyLeftSidebar']      = 0;
