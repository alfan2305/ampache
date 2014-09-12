<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright 2001 - 2014 Ampache.org
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
?>
<div>
    <form method="post" id="edit_tag_<?php echo $libitem->id; ?>" class="edit_dialog_content">
        <table class="tabledata" cellspacing="0" cellpadding="0">
            <tr>
                <td class="edit_dialog_content_header"><?php echo T_('Name') ?></td>
                <td><input type="text" name="name" value="<?php echo scrub_out($libitem->name); ?>" /></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td class="edit_dialog_content_header"><?php echo T_('Merge this tag to') ?></td>
                <td>
                    <select name="merge_tag" id="merge_tag">
                        <option value=""></option>
                        <?php
                        if ($libitem->merged_to) {
                            echo "<option value='" . $libitem->merged_to . "'>" . $libitem->merged_to . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="edit_dialog_content_header"><?php echo T_('Persistent merge') ?></td>
                <td><input type="checkbox" name="merge_persist" value="1" /></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                <td class="edit_dialog_content_header"><?php echo T_('Clone this tag into') ?></td>
                <td>
                    <input type="text" name="clone_tags" id="clone_tags" />
                </td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $libitem->id; ?>" />
        <input type="hidden" name="type" value="tag_row" />
    </form>
</div>
