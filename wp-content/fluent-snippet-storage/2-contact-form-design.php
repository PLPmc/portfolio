<?php
// <Internal Doc Start>
/*
*
* @description: 
* @tags: 
* @group: 
* @name: Contact Form Design
* @type: css
* @status: published
* @created_by: 1
* @created_at: 2025-12-04 05:38:40
* @updated_at: 2025-12-04 06:08:16
* @is_valid: 1
* @updated_by: 1
* @priority: 99
* @run_at: wp_head
* @load_as_file: yes
* @load_in_block_editor: 
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
.ct-contact-form .frm-fluent-form .ff-el-input--label label {
margin-bottom: 5px
}

.ct-contact-form .fluentform .ff-el-group.ff_list_buttons .ff-el-input--content {
display: flex;
flex-wrap: wrap;
gap: 15px;
}

.ct-contact-form .fluentform .ff-el-group.ff_list_buttons .ff-el-form-check span {
border-radius: var(--theme-form-field-border-radius, 3px) !important;
border: none !important;
box-shadow: none;
transition: all 0.2s ease;
}

.ct-contact-form .fluentform .ff-el-group.ff_list_buttons .ff-el-form-check:not(.ff_item_selected) span:hover {
color: var(--theme-button-background-initial-color) !important;
}

.ct-contact-form .fluentform .ff-el-group.ff_list_buttons .ff-el-form-check:not(.ff_item_selected) span {
color: var(--theme-button-text-initial-color);
background-color: #2a3f2e;
}

.ct-contact-form .fluentform .ff-el-group.ff_list_buttons .ff_item_selected span {
background-color: var(--theme-button-background-initial-color) !important;
}