<?php
/**
 * ACP Language File (English)
 *
 * @package mundophpbb/simpledown
 * @copyright (c) 2025 Mundo phpBB
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License, version 2.
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = [];
}

$lang = array_merge($lang, [

    // ===================================================================
    // General Titles and Navigation
    // ===================================================================
    'ACP_SIMPLEDOWN_TITLE'               => 'Simple Downloads',
    'ACP_SIMPLEDOWN_SETTINGS'            => 'Settings',
    'ACP_SIMPLEDOWN_FILES'               => 'Files',
    'ACP_SIMPLEDOWN_TOOLS'               => 'Tools',
    'ACP_SIMPLEDOWN_ADD_FILE'            => 'Add File',
    'ACP_SIMPLEDOWN_EXISTING_FILES'      => 'Existing Files',

    // ===================================================================
    // General Settings
    // ===================================================================
    'ACP_SIMPLEDOWN_MAX_UPLOAD_SIZE'             => 'Maximum upload size',
    'ACP_SIMPLEDOWN_MAX_UPLOAD_SIZE_EXPLAIN'     => 'Maximum file upload size in MB (default: 100 MB).',
    'ACP_SIMPLEDOWN_SHORT_DESC_LIMIT'            => 'Short description character limit',
    'ACP_SIMPLEDOWN_SHORT_DESC_LIMIT_EXPLAIN'    => 'Maximum characters for the short description displayed in cards (default: 150).',

    // Category-based privacy control
    'ACP_SIMPLEDOWN_PRIVATE_CATEGORIES'          => 'Private categories',
    'ACP_SIMPLEDOWN_PRIVATE_CATEGORIES_EXPLAIN'  => 'Select categories whose files require login to download. Leave empty if no category should be private (individual control still works).',
    'ACP_SIMPLEDOWN_PRIVATE_CATEGORIES_HOLD_CTRL'=> 'Hold Ctrl (or Cmd on Mac) to select multiple categories.',

    // Default visibility for new files
    'ACP_SIMPLEDOWN_DEFAULT_VISIBILITY'          => 'Default visibility for new files',
    'ACP_SIMPLEDOWN_DEFAULT_VISIBILITY_EXPLAIN'  => 'This sets the pre-selected value (public or private) when adding a new file.<br /><strong style="color: #c62828;">Individual file settings always take highest priority:</strong> if a specific file is marked Public, it will be accessible to everyone (even if the default is Private), and vice-versa.',
    'ACP_SIMPLEDOWN_SAVE_CONFIG'                 => 'Save Settings',

    // ===================================================================
    // Category Management
    // ===================================================================
    'ACP_SIMPLEDOWN_CATEGORY'                    => 'Category',
    'ACP_SIMPLEDOWN_ADD_CATEGORY'                => 'Add Category',
    'ACP_SIMPLEDOWN_CATEGORY_NAME'               => 'Category Name',
    'ACP_SIMPLEDOWN_DELETE_CATEGORY'             => 'Delete Category',
    'ACP_SIMPLEDOWN_SELECT_CATEGORY_TO_DELETE'   => 'Select a category to delete',
    'ACP_SIMPLEDOWN_NO_CATEGORIES_YET'           => 'No categories yet.',
    'ACP_SIMPLEDOWN_NO_CATEGORY'                 => 'No Category',
    'ACP_SIMPLEDOWN_NO_CATEGORY_NAME'            => 'Category name is required.',
    'ACP_SIMPLEDOWN_CATEGORY_NOT_FOUND'          => 'Category not found.',
    'ACP_SIMPLEDOWN_CATEGORY_DUPLICATE'          => 'This category already exists.',
    'ACP_SIMPLEDOWN_SELECT_CATEGORY_REQUIRED'    => 'Select a category',

    // ===================================================================
    // File Management
    // ===================================================================
    'ACP_SIMPLEDOWN_FILE_NAME'                   => 'File Name',
    'ACP_SIMPLEDOWN_FILE_NAME_EXPLAIN'           => 'This is the name displayed on the downloads page.',
    'ACP_SIMPLEDOWN_DISPLAY_NAME'                => 'Display name (download title)',
    'ACP_SIMPLEDOWN_DISPLAY_NAME_EXPLAIN'        => 'This is the name users will see in the downloads list. It does not affect the server file name.',
    'ACP_SIMPLEDOWN_SHORT_DESCRIPTION'           => 'Short Description',
    'ACP_SIMPLEDOWN_SHORT_DESCRIPTION_EXPLAIN'   => 'Brief summary displayed in cards (recommended 100-150 characters).',
    'ACP_SIMPLEDOWN_DESCRIPTION'                 => 'Full Description',
    'ACP_SIMPLEDOWN_DESCRIPTION_EXPLAIN'         => 'Full description shown on the details page.',
    'ACP_SIMPLEDOWN_EDIT_DESCRIPTION'            => 'Edit Description',
    'ACP_SIMPLEDOWN_UPLOAD_FILE'                 => 'Upload File',
    'ACP_SIMPLEDOWN_SIZE'                        => 'Size',
    'ACP_SIMPLEDOWN_NO_FILES_YET'                => 'No files yet.',
    'ACP_SIMPLEDOWN_NO_DESCRIPTION'              => 'No description available.',
    'ACP_SIMPLEDOWN_VERSION'                     => 'Version',
    'ACP_SIMPLEDOWN_VERSION_EXPLAIN'             => 'Optional: e.g., 1.0, 2.1-beta, Final 2025',
    'ACP_SIMPLEDOWN_REPLACE_FILE'                => 'Replace file',
    'ACP_SIMPLEDOWN_REPLACE_FILE_EXPLAIN'        => 'Check to upload a new file. The old one will be deleted.',
    'ACP_SIMPLEDOWN_REPLACE_FILE_WARNING'        => 'The old file will be permanently deleted upon saving.',
    'ACP_SIMPLEDOWN_REPLACE_FILE_HELP'           => 'The old file will be permanently deleted. The new one will be saved with a sanitized name (may be renamed automatically if there is a conflict).',
    'ACP_SIMPLEDOWN_CURRENT_FILE'                => 'Current file',
    'ACP_SIMPLEDOWN_CURRENT_SERVER_FILE'         => 'Current server name',

    // ===================================================================
    // Public/Private Visibility (individual)
    // ===================================================================
    'ACP_SIMPLEDOWN_VISIBILITY'                  => 'File visibility',
    'ACP_SIMPLEDOWN_VISIBILITY_EXPLAIN'          => 'Define whether the file is public (any visitor) or private (only logged-in users can download).',
    'ACP_SIMPLEDOWN_PUBLIC'                      => 'Public',
    'ACP_SIMPLEDOWN_PRIVATE'                     => 'Private',

    // ===================================================================
    // Thumbnails
    // ===================================================================
    'ACP_SIMPLEDOWN_UPLOAD_THUMB'                => 'Upload Thumbnail',
    'ACP_SIMPLEDOWN_UPLOAD_THUMB_EXPLAIN'        => 'Upload an image to be used as a thumbnail on the details page. Recommended: 300x300px or larger.',
    'ACP_SIMPLEDOWN_THUMB_ALREADY_EXISTS_WARNING'=> 'Warning: A thumbnail with this name already existed and has been overwritten.',
    'ACP_SIMPLEDOWN_THUMB_UPLOAD_SUCCESS'        => 'Thumbnail uploaded successfully!',
    'ACP_SIMPLEDOWN_SELECT_THUMB'                => 'Select existing thumbnail',
    'ACP_SIMPLEDOWN_NO_THUMB'                    => 'No thumbnail',
    'ACP_SIMPLEDOWN_NO_THUMBS'                   => 'No thumbnails found in the thumbs folder.',
    'ACP_SIMPLEDOWN_THUMB_PREVIEW'               => 'Thumbnail preview',

    // ===================================================================
    // Table and Controls
    // ===================================================================
    'ACP_SIMPLEDOWN_DOWNLOADS'                   => 'Downloads',
    'ACP_SIMPLEDOWN_ACTIONS'                     => 'Actions',
    'ACP_SIMPLEDOWN_EDIT'                        => 'Edit',
    'ACP_SIMPLEDOWN_DELETE'                      => 'Delete',
    'ACP_SIMPLEDOWN_SAVE_CHANGES'                => 'Save Changes',
    'ACP_SIMPLEDOWN_CANCEL'                      => 'Cancel',
    'ACP_SIMPLEDOWN_TOTAL_FILES'                 => 'Total files',
    'ACP_SIMPLEDOWN_ITEMS_PER_PAGE'              => 'Items per page',
    'ACP_SIMPLEDOWN_ALL_ITEMS'                   => 'All',

    // ===================================================================
    // Warnings and Security
    // ===================================================================
    'ACP_SIMPLEDOWN_SECURITY_WARNING_TITLE'      => 'Warning!',
    'ACP_SIMPLEDOWN_SECURITY_WARNING_TEXT_1'     => 'Executable files (.exe, .bat, .js, .vbs, etc.) are <strong>automatically blocked</strong>.',
    'ACP_SIMPLEDOWN_SECURITY_WARNING_TEXT_2'     => 'Avoid uploading potentially malicious files.',
    'ACP_SIMPLEDOWN_ALLOWED_FILES_TITLE'         => 'Allowed Files',
    'ACP_SIMPLEDOWN_ALLOWED_FILES_TEXT_1'        => 'Allowed formats:',
    'ACP_SIMPLEDOWN_ALLOWED_FILES_TEXT_2'        => 'PDF, ZIP, RAR, 7Z, DOC/DOCX, XLS/XLSX, PPT/PPTX, images, TXT, MP3/WAV/OGG, MP4/AVI/MKV/MOV.',

    // ===================================================================
    // Success Messages
    // ===================================================================
    'ACP_SIMPLEDOWN_CONFIG_SAVED'                => 'Settings saved successfully!',
    'ACP_SIMPLEDOWN_CAT_ADDED'                   => 'Category added successfully!',
    'ACP_SIMPLEDOWN_CAT_DELETED'                 => 'Category deleted successfully!',
    'ACP_SIMPLEDOWN_FILE_ADDED'                  => 'File added successfully!',
    'ACP_SIMPLEDOWN_FILE_EDITED'                 => 'File updated successfully!',
    'ACP_SIMPLEDOWN_FILE_DELETED'                => 'File deleted successfully!',
    'ACP_SIMPLEDOWN_THUMB_UPLOAD_SUCCESS'        => 'Thumbnail uploaded successfully!',
    'ACP_SIMPLEDOWN_ORPHANS_DELETED'             => '%d orphan thumbnails were deleted.',
    'ACP_SIMPLEDOWN_THUMB_DELETED'               => 'Thumbnail deleted successfully.',

    // ===================================================================
    // Errors and Validation
    // ===================================================================
    'ACP_SIMPLEDOWN_NO_FILE_UPLOADED'            => 'No file uploaded.',
    'ACP_SIMPLEDOWN_CATEGORY_REQUIRED'           => 'You must select a valid category for the file.',
    'ACP_SIMPLEDOWN_NO_CATEGORIES_EXIST'         => 'No categories have been created yet. Create at least one category before adding files.',
    'ACP_SIMPLEDOWN_FILE_TOO_LARGE'              => 'File too large. Maximum limit: %d MB.',
    'ACP_SIMPLEDOWN_INVALID_MIME_TYPE'           => 'Invalid file type.',
    'ACP_SIMPLEDOWN_DANGEROUS_FILE'              => 'Upload blocked: executable or malicious files are not allowed.',
    'ACP_SIMPLEDOWN_FILE_DUPLICATE'              => 'This file has already been uploaded.',
    'ACP_SIMPLEDOWN_FILE_DUPLICATE_DETECTED'     => 'This file was previously uploaded as "<strong>%1$s</strong>" (server name: <code>%2$s</code>).<br />Use the <strong>Files</strong> tab to edit it or upload a different version.',
    'ACP_SIMPLEDOWN_UPLOAD_FAILED'               => 'Failed to upload the file.',
    'ACP_SIMPLEDOWN_UPLOAD_DIR_ERROR'            => 'Error creating upload directory.',
    'ACP_SIMPLEDOWN_FILE_NOT_FOUND'              => 'File not found.',
    'ACP_SIMPLEDOWN_FILE_NAME_REQUIRED'          => 'File name is required.',
    'ACP_SIMPLEDOWN_THUMB_NOT_FOUND'             => 'Thumbnail not found.',

    // ===================================================================
    // Custom Upload and Search Keys
    // ===================================================================
    'ACP_SIMPLEDOWN_CHOOSE_FILE'                 => 'Choose file',
    'ACP_SIMPLEDOWN_NO_FILE_SELECTED'            => 'No file selected',
    'ACP_SIMPLEDOWN_SEARCH_FILES'                => 'Search files',
    'ACP_SIMPLEDOWN_SEARCH_PLACEHOLDER'          => 'Enter file name...',

    // Tooltip for preview icon
    'ACP_SIMPLEDOWN_VIEW_FULL_DESC'              => 'View full description',

    // ===================================================================
    // Modal and General Messages
    // ===================================================================
    'ACP_SIMPLEDOWN_ERROR'                       => 'Error',
    'ACP_SIMPLEDOWN_SUCCESS'                     => 'Success',
    'ACP_SIMPLEDOWN_CLOSE'                       => 'Close',
    'ACP_SIMPLEDOWN_WARNING'                     => 'Warning',
    'ACP_SIMPLEDOWN_CONFIRM_DELETE'              => 'Are you sure you want to delete this file? This action cannot be undone.',
    'CHARACTERS'                                 => 'characters',

    // ===================================================================
    // Tools Tab
    // ===================================================================
    'ACP_SIMPLEDOWN_TOOLS_LEGEND'                => 'Custom content for the Tools tab',
    'ACP_SIMPLEDOWN_TOOLS_LABEL'                 => 'Custom text/HTML:',
    'ACP_SIMPLEDOWN_TOOLS_EXPLAIN'               => 'Write any content you want to display in the Tools tab.<br />Supports basic HTML (links, images, lists, bold, etc.).',
    'ACP_SIMPLEDOWN_SAVE_TOOLS_CONTENT'          => 'Save content',

    // Thumbnail Management
    'ACP_SIMPLEDOWN_THUMBNAILS_MANAGEMENT'       => 'Thumbnail Management',
    'ACP_SIMPLEDOWN_THUMBNAILS_EXPLAIN_SIMPLE'   => 'Select a thumbnail below to view details and deletion option.',
    'ACP_SIMPLEDOWN_AVAILABLE_THUMBS'            => 'Available thumbnails:',
    'ACP_SIMPLEDOWN_SELECT_ONE_THUMB'            => '-- Select an image --',
    'ACP_SIMPLEDOWN_PREVIEW_TITLE'               => 'Preview:',
    'ACP_SIMPLEDOWN_DELETE_THIS_THUMB'           => 'Delete this thumbnail',
    'ACP_SIMPLEDOWN_NO_THUMBS_FOUND'             => 'No thumbnails found in the <code>/files/thumbs/</code> folder.',
    'ACP_SIMPLEDOWN_CONFIRM_DELETE_THUMB'        => 'Are you sure you want to delete the thumbnail "%s"?',
    'ACP_SIMPLEDOWN_CONFIRM_CLEAN_THUMBS'        => 'Are you sure you want to delete all orphan thumbnails?',
    'ACP_SIMPLEDOWN_ORPHAN_THUMB'                => 'Orphan (not used)',
    'ACP_SIMPLEDOWN_TOTAL_THUMBS'                => 'Total thumbnails',
    'ACP_SIMPLEDOWN_ORPHAN_THUMBS'               => 'Orphan thumbnails',
    'ACP_SIMPLEDOWN_CLEAN_ORPHAN_THUMBS'         => 'Delete all orphan thumbnails',

    // ===================================================================
    // Public Site Theme
    // ===================================================================
    'ACP_SIMPLEDOWN_THEME'                       => 'Interface theme',
    'ACP_SIMPLEDOWN_SITE_THEME'                  => 'Site theme',
    'ACP_SIMPLEDOWN_SITE_THEME_EXPLAIN'          => 'Choose the default visual theme (light or dark) displayed on the public SimpleDown page for all visitors.',
    'ACP_SIMPLEDOWN_LIGHT_THEME'                 => 'Light theme',
    'ACP_SIMPLEDOWN_DARK_THEME'                  => 'Dark theme',

]);