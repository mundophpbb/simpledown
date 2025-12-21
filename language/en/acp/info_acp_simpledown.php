<?php
/**
 * ACP language file - English
 * Automatically loaded in the ACP
 *
 * @package mundophpbb/simpledown
 * @copyright (c) 2025 Mundo phpBB
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License, version 2.
 */
if (!defined('IN_PHPBB'))
{
    exit;
}

$lang = array_merge($lang, [
    // Títulos e Navegação Geral
    'ACP_SIMPLEDOWN_TITLE'                  => 'Simple Downloads',
    'ACP_SIMPLEDOWN_SETTINGS'               => 'Settings',
    'ACP_SIMPLEDOWN_FILES'                  => 'Files',

    // Configurações Gerais
    'ACP_SIMPLEDOWN_MAX_UPLOAD_SIZE'        => 'Maximum upload size',
    'ACP_SIMPLEDOWN_MAX_UPLOAD_SIZE_EXPLAIN'=> 'Limit in MB for uploaded files (default: 100 MB).',
    'ACP_SIMPLEDOWN_SAVE_CONFIG'            => 'Save Settings',

    // Gerenciamento de Categorias
    'ACP_SIMPLEDOWN_CATEGORY'               => 'Category',
    'ACP_SIMPLEDOWN_ADD_CATEGORY'           => 'Add Category',
    'ACP_SIMPLEDOWN_CATEGORY_NAME'          => 'Category Name',
    'ACP_SIMPLEDOWN_DELETE_CATEGORY'        => 'Delete Category',
    'ACP_SIMPLEDOWN_SELECT_CATEGORY_TO_DELETE' => 'Select a category to delete',
    'ACP_SIMPLEDOWN_NO_CATEGORIES_YET'      => 'No categories yet.',
    'ACP_SIMPLEDOWN_NO_CATEGORY'            => 'No Category',

    // Gerenciamento de Arquivos
    'ACP_SIMPLEDOWN_ADD_FILE'               => 'Add File',
    'ACP_SIMPLEDOWN_FILE_NAME'              => 'File Name',
    'ACP_SIMPLEDOWN_FILE_NAME_EXPLAIN'      => 'This is the name displayed on the downloads page. It does not affect the actual filename on the server.',
    'ACP_SIMPLEDOWN_DESCRIPTION'            => 'Description',
    'ACP_SIMPLEDOWN_UPLOAD_FILE'            => 'Upload File',
    'ACP_SIMPLEDOWN_EXISTING_FILES'         => 'Existing Files',
    'ACP_SIMPLEDOWN_SIZE'                   => 'Size',
    'ACP_SIMPLEDOWN_NO_FILES_YET'           => 'No files yet.',

    // Paginação e Tabela
    'ACP_SIMPLEDOWN_PAGINATION_INFO'        => 'Page {CURRENT} of {TOTAL}',
    'ACP_SIMPLEDOWN_DOWNLOADS'              => 'Downloads',
    'ACP_SIMPLEDOWN_ACTIONS'                => 'Actions',
    'ACP_SIMPLEDOWN_EDIT'                   => 'Edit',
    'ACP_SIMPLEDOWN_DELETE'                 => 'Delete',
    'ACP_SIMPLEDOWN_SAVE_CHANGES'           => 'Save Changes',
    'ACP_SIMPLEDOWN_CANCEL'                 => 'Cancel',

    // Segurança e Avisos
    'ACP_SIMPLEDOWN_SECURITY_WARNING_TITLE' => 'Attention!',
    'ACP_SIMPLEDOWN_SECURITY_WARNING_TEXT_1' => 'Executable files (.exe, .bat, .js, .vbs, etc.) are <strong>automatically blocked</strong> for security reasons.',
    'ACP_SIMPLEDOWN_SECURITY_WARNING_TEXT_2' => 'Even as an administrator, avoid uploading potentially malicious files.',
    'ACP_SIMPLEDOWN_ALLOWED_FILES_TITLE'    => 'Allowed Files',
    'ACP_SIMPLEDOWN_ALLOWED_FILES_TEXT_1'   => 'The following formats are <strong>allowed</strong> for upload:',
    'ACP_SIMPLEDOWN_ALLOWED_FILES_TEXT_2'   => 'PDF, ZIP, RAR, 7Z, DOC/DOCX, XLS/XLSX, PPT/PPTX, images (JPG, PNG, GIF, WEBP, SVG), TXT, MP3/WAV/OGG, MP4/AVI/MKV/MOV.',

    // Mensagens de Sucesso
    'ACP_SIMPLEDOWN_CONFIG_SAVED'           => 'Settings saved successfully!',
    'ACP_SIMPLEDOWN_CAT_ADDED'              => 'Category added successfully!',
    'ACP_SIMPLEDOWN_CAT_DELETED'            => 'Category deleted successfully!',
    'ACP_SIMPLEDOWN_FILE_ADDED'             => 'File added successfully!',
    'ACP_SIMPLEDOWN_FILE_EDITED'            => 'File description edited successfully!',
    'ACP_SIMPLEDOWN_FILE_DELETED'           => 'File deleted successfully!',

    // Erros e Validações
    'ACP_SIMPLEDOWN_NO_FILE_UPLOADED'       => 'No file uploaded.',
    'ACP_SIMPLEDOWN_CATEGORY_REQUIRED'      => 'You must select a category.',
    'ACP_SIMPLEDOWN_FILE_TOO_LARGE'         => 'File too large. Maximum limit: %d MB.',
    'ACP_SIMPLEDOWN_INVALID_MIME_TYPE'      => 'File type not allowed. The file content does not match the extension.',
    'ACP_SIMPLEDOWN_DANGEROUS_FILE'         => 'Upload blocked: executable or potentially malicious files (e.g., .exe, .bat, .js) are not allowed for security reasons.',
    'ACP_SIMPLEDOWN_FILE_DUPLICATE'         => 'This file has already been uploaded.',
    'ACP_SIMPLEDOWN_UPLOAD_FAILED'          => 'Upload failed.',
    'ACP_SIMPLEDOWN_UPLOAD_DIR_ERROR'       => 'Error creating upload directory.',
    'ACP_SIMPLEDOWN_FILE_NOT_FOUND'         => 'File not found.',
    'ACP_SIMPLEDOWN_NO_CATEGORY_NAME'       => 'Category name is required.',
    'ACP_SIMPLEDOWN_CATEGORY_NOT_FOUND'     => 'Category not found.',
    'ACP_SIMPLEDOWN_CATEGORY_DUPLICATE'     => 'Category already exists. Choose a different name.',
    'ACP_SIMPLEDOWN_FILE_NAME_REQUIRED'     => 'File name is required.',

    // Chaves para o upload customizado
    'ACP_SIMPLEDOWN_CHOOSE_FILE'            => 'Choose file',
    'ACP_SIMPLEDOWN_NO_FILE_SELECTED'       => 'No file chosen',
]);