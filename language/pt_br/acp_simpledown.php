<?php
/**
 * Arquivo de Idioma - ACP (acp/acp_simpledown.php)
 *
 * @package mundophpbb/simpledown
 * @copyright (c) 2025 Mundo phpBB
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License, version 2.
 */
if (!defined('IN_PHPBB')) {
    exit;
}
if (empty($lang) || !is_array($lang)) {
    $lang = array();
}
$lang = array_merge($lang, array(
    // Chaves Principais do Módulo ACP
    'ACP_SIMPLEDOWN_TITLE' => 'Simple Down',
    'ACP_SIMPLEDOWN_SETTINGS' => 'Configurações',
    // Chaves da Interface do ACP (Labels e Fieldsets)
    'ACP_SIMPLEDOWN_ADD_CATEGORY' => 'Adicionar Categoria',
    'ACP_SIMPLEDOWN_CATEGORY_NAME' => 'Nome da Categoria',
    'ACP_SIMPLEDOWN_ADD_FILE' => 'Adicionar Arquivo',
    'ACP_SIMPLEDOWN_FILE_NAME' => 'Nome do Arquivo',
    'ACP_SIMPLEDOWN_DESCRIPTION' => 'Descrição',
    'ACP_SIMPLEDOWN_CATEGORY' => 'Categoria',
    'ACP_SIMPLEDOWN_NO_CATEGORY' => 'Sem Categoria',
    'ACP_SIMPLEDOWN_UPLOAD_FILE' => 'Carregar Arquivo',
    'ACP_SIMPLEDOWN_EXISTING_FILES' => 'Arquivos Existentes',
    'ACP_SIMPLEDOWN_EXISTING_CATEGORIES'=> 'Categorias Existentes',
    'ACP_SIMPLEDOWN_DELETE_CATEGORY' => 'Excluir Categoria', // Nova chave para o label do dropdown
    'ACP_SIMPLEDOWN_SELECT_CATEGORY_TO_DELETE' => 'Selecione uma categoria para excluir', // Nova chave para a opção default
    // Chaves de Listagem (Reutilizadas no Index, mas definidas aqui)
    'ACP_SIMPLEDOWN_DOWNLOADS' => 'Downloads',
    'ACP_SIMPLEDOWN_SIZE' => 'Tamanho',
    'ACP_SIMPLEDOWN_DELETE' => 'Excluir',
    'ACP_SIMPLEDOWN_EDIT' => 'Editar',
    'ACP_SIMPLEDOWN_ACTIONS' => 'Ações',
    'ACP_SIMPLEDOWN_EDIT_DESCRIPTION' => 'Editar Descrição',
    'ACP_SIMPLEDOWN_SAVE_CHANGES' => 'Salvar Alterações',
    'ACP_SIMPLEDOWN_CANCEL' => 'Cancelar',
    'ACP_SIMPLEDOWN_NO_FILES_YET' => 'Nenhum arquivo ainda.',
    'ACP_SIMPLEDOWN_NO_CATEGORIES_YET' => 'Nenhuma categoria ainda.',
    // Mensagens de Sucesso e Erro (Retornadas pelo admin_controller)
    'ACP_SIMPLEDOWN_FILE_ADDED' => 'Arquivo adicionado com sucesso!',
    'ACP_SIMPLEDOWN_CAT_ADDED' => 'Categoria adicionada com sucesso!',
    'ACP_SIMPLEDOWN_FILE_DELETED' => 'Arquivo excluído com sucesso!',
    'ACP_SIMPLEDOWN_CAT_DELETED' => 'Categoria excluída com sucesso!',
    'ACP_SIMPLEDOWN_FILE_EDITED' => 'Descrição do arquivo editada com sucesso!',
    'ACP_SIMPLEDOWN_NO_FILE_UPLOADED' => 'Nenhum arquivo enviado.',
    'ACP_SIMPLEDOWN_UPLOAD_FAILED' => 'Falha no upload.',
    'ACP_SIMPLEDOWN_NO_CATEGORY_NAME' => 'Nome da categoria obrigatório.',
    'ACP_SIMPLEDOWN_FILE_NOT_FOUND' => 'Arquivo não encontrado.',
    'ACP_SIMPLEDOWN_CATEGORY_NOT_FOUND' => 'Categoria não encontrada.', // Nova chave para erro
    'ACP_SIMPLEDOWN_CATEGORY_DUPLICATE' => 'Categoria já existe. Escolha um nome diferente.',
    'ACP_SIMPLEDOWN_NO_CATEGORY_SELECTED' => 'Nenhuma categoria selecionada para exclusão.', // Nova chave para erro
    'ACP_SIMPLEDOWN_CATEGORY_REQUIRED' => 'Você deve selecionar uma categoria.',
    'ACP_SIMPLEDOWN_FILE_DUPLICATE' => 'Este arquivo já foi enviado.',
    'ACP_SIMPLEDOWN_UPLOAD_DIR_ERROR' => 'Erro ao criar o diretório de upload.',
    // Chaves de Log (Ações administrativas)
    'LOG_SIMPLEDOWN_FILE_ADDED' => 'Arquivo SimpleDown adicionado: %s',
    'LOG_SIMPLEDOWN_CAT_ADDED' => 'Categoria SimpleDown adicionada: %s',
    'LOG_SIMPLEDOWN_FILE_DELETED' => 'Arquivo SimpleDown excluído: %s',
    'LOG_SIMPLEDOWN_CAT_DELETED' => 'Categoria SimpleDown excluída: %s', // Adicionada para log de exclusão
    'LOG_SIMPLEDOWN_FILE_EDITED' => 'Descrição do arquivo SimpleDown editada: %s',
));