<?php
/*------------------------------------------------------------------------
# com_xcideveloper - Seamless merging of CI Development Style with Joomla CMS
# ------------------------------------------------------------------------
# author    Xavoc International / Gowrav Vishwakarma
# copyright Copyright (C) 2011 xavoc.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.xavoc.com
# Technical Support:  Forum - http://xavoc.com/index.php?option=com_discussions&view=index&Itemid=157
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div class='alert alert-error'>Not Implemented Yet</div>
<form id="form1" name="form1" method="get" action="index.php">
  <table width="100%" border="0" cellpadding="3" class='table table-stripped'>
    <tr>
      <td valign="top"><table border="0" cellpadding="3" class="adminlist" width="100%">
        <thead>
          <tr>
            <th class="title">New Module</th>
            <th><label>
              <div align="right">
                <input name="moduleTitle" type="text" id="moduleTitle" size="35" />
              </div>
            </label></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="title">Module Folder</th>
            <th><label>
              <div align="right">mod_
                <input name="moduleName" type="text" class="input" id="moduleName" size="35" />
              </div>
            </label></th>
          </tr>
          
          <tr class="row0">
            <th>Author</th>
            <td><div align="right">
              <label>
                <input name="author" type="text" id="author" value="Gowrav Vishwakarma" size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row1">
            <th>Creation Date</th>
            <td><div align="right">
              <label>
                <input name="creationDate" type="text" id="creationDate" value="7-april-1980" size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row0">
            <th>Copy Right</th>
            <td><div align="right">
              <label>
                <input name="copyright" type="text" id="copyright" value="Copyright (C) 2011 Xavoc International. All rights reserved." size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row1">
            <th>License</th>
            <td><div align="right">
              <label>
                <input name="license" type="text" id="license" value="http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL" size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row0">
            <th>Author Email</th>
            <td><div align="right">
              <label>
                <input name="authorEmail" type="text" id="authorEmail" value="gowravvishwakarma@gmail.com" size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row1">
            <th>Author URL</th>
            <td><div align="right">
              <label>
                <input name="authorUrl" type="text" id="authorUrl" value="http://www.xavoc.com" size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row0">
            <th>Version</th>
            <td><div align="right">
              <label>
                <input name="version" type="text" id="version" value="0.0.1" size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row1">
            <th>Description</th>
            <td><div align="right">
              <label>
                <input name="description" type="text" id="description" value="My New Module For Joomla" size="35" />
              </label>
            </div></td>
          </tr>
          <tr class="row0">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <th>It is a Module for use on Frontend site</th>
            <td><label>
              <div class='pull-right'><input name="ModuleSide" type="radio" id="modeSide" value="site" checked="checked" /></div>
            </label></td>
          </tr>
          <tr>
            <th>It is a module for backend administrator</th>
            <td><div class='pull-right'><input type="radio" name="ModuleSide" id="modeSide2" value="admin" disabled="disabled" /></div></td>
          </tr>
          <tr>
            <td><label>Attached with Component</label></td>
            <td><div align="right"><b>com_</b><input type="text" name="atchWith" id="atchWith" size="35"/></div></td>
          </tr>
          <tr>
            <td><input name="task" type="hidden" id="task" value="module.saveNewModule" />
            <input name="option" type="hidden" id="option" value="com_xcideveloper" /></td>
            <td><label>
              <input type="submit" name="Create" id="Create" value="Create" class='btn' disabled='disabled'/>
            </label></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>