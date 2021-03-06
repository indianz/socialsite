<?php
/**
* @copyright (C) 2013 iJoomla, Inc. - All rights reserved.
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author iJoomla.com <webmaster@ijoomla.com>
* @url https://www.jomsocial.com/license-agreement
* The PHP code portions are distributed under the GPL license. If not otherwise stated, all images, manuals, cascading style sheets, and included JavaScript *are NOT GPL, and are released under the IJOOMLA Proprietary Use License v1.0
* More info at https://www.jomsocial.com/license-agreement
*/
defined('_JEXEC') or die( 'Restricted Access' );

?>

<div class="joms-subnav">
    <ul>
    <?php
    foreach($submenu as $menu)
    {
            /* extra class */
        $menuClass= $menu->class . ' ';
        if( isset($menu->action) && ($menu->action) )
        {
            $menuClass .= 'action ';
        }
        if( isset($menu->childItem) && $menu->childItem )
        {
            $menuClass .= 'hasChildItem ';
        }

        $link=''; $linkClass=''; $onclick='';
        if( isset($menu->onclick) && !empty($menu->onclick) )
        {
            $link    = 'javascript: void(0);';
            $onclick =  $menu->onclick;
        } else {
            $link    = CRoute::_($menu->link);

            if( strtolower( $menu->view ) == strtolower($view) &&
                strtolower( $menu->task ) == strtolower($task) &&
                ! $noActive)
            {
                $linkClass .= 'class="'.'active'.'"';
            }
        }
    ?>
        <li<?php if ($menuClass) { ?> class="<?php echo $menuClass ?>"<?php } ?>>
            <a href="<?php echo $link ?>"
               <?php echo $linkClass ?>
               onclick="<?php echo $onclick ?>"><?php echo $menu->title ?></a>
            <?php echo $menu->childItem ?>
        </li>
    <?php
    }
    ?>
    </ul>
</div>

<div class="joms-subnav__menu">
    <a href="javascript:" class="joms-button--neutral joms-button--full" data-ui-object="joms-dropdown-button">
        <?php echo isset($submenu[0]->title) ? $submenu[0]->title : ''; ?>
        <svg viewBox="0 0 16 16" class="joms-icon">
            <use xlink:href="<?php echo CRoute::getURI(); ?>#joms-icon-arrow-down"></use>
        </svg>
    </a>
    <ul class="joms-dropdown">
    <?php
    foreach($submenu as $menu)
    {
            /* extra class */
        $menuClass= $menu->class . ' ';
        if( isset($menu->action) && ($menu->action) )
        {
            $menuClass .= 'action ';
        }
        if( isset($menu->childItem) && $menu->childItem )
        {
            $menuClass .= 'hasChildItem ';
        }

        $link=''; $linkClass=''; $onclick='';
        if( isset($menu->onclick) && !empty($menu->onclick) )
        {
            $link    = 'javascript: void(0);';
            $onclick =  $menu->onclick;
        } else {
            $link    = CRoute::_($menu->link);

            if( JString::strtolower( $menu->view ) == JString::strtolower($view) &&
                JString::strtolower( $menu->task ) == JString::strtolower($task) &&
                ! $noActive)
            {
                $linkClass .= 'class="'.'active'.'"';
            }
        }
    ?>
        <li<?php if ($menuClass) { ?> class="<?php echo $menuClass ?>"<?php } ?>>
            <a href="<?php echo $link ?>"
               <?php echo $linkClass ?>
               onclick="<?php echo $onclick ?>"><?php echo $menu->title ?></a>
            <?php echo $menu->childItem ?>
        </li>
    <?php
    }
    ?>
    </ul>
    <div class="joms-gap"></div>
</div>

<div class="joms-subnav--desktop">
    <ul>
    <?php
    foreach($submenu as $menu)
    {
            /* extra class */
        $menuClass= $menu->class . ' ';
        if( isset($menu->action) && ($menu->action) )
        {
            $menuClass .= 'action ';
        }
        if( isset($menu->childItem) && $menu->childItem )
        {
            $menuClass .= 'hasChildItem ';
        }

        $link=''; $linkClass=''; $onclick='';
        if( isset($menu->onclick) && !empty($menu->onclick) )
        {
            $link    = 'javascript: void(0);';
            $onclick =  $menu->onclick;
        } else {
            $link    = CRoute::_($menu->link);

            if( JString::strtolower( $menu->view ) == JString::strtolower($view) &&
                JString::strtolower( $menu->task ) == JString::strtolower($task) &&
                ! $noActive)
            {
                $linkClass .= 'class="'.'active'.'"';
            }
        }
    ?>
        <li<?php if ($menuClass) { ?> class="<?php echo $menuClass ?>"<?php } ?>>
            <a href="<?php echo $link ?>"
               <?php echo $linkClass ?>
               onclick="<?php echo $onclick ?>"><?php echo $menu->title ?></a>
            <?php echo $menu->childItem ?>
        </li>
    <?php
    }
    ?>
    </ul>
</div>
