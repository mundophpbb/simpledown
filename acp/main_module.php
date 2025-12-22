<?php
/**
 * @package mundophpbb/simpledown
 * @copyright (c) 2025 Mundo phpBB
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License, version 2.
 */
namespace mundophpbb\simpledown\acp;

class main_module
{
    public $u_action;
    public $tpl_name;
    public $page_title;

    public function main($id, $mode)
    {
        global $phpbb_container, $user;

        // Carrega idioma comum (frontend)
        $user->add_lang_ext('mundophpbb/simpledown', 'common');

        // Carrega idioma ACP em inglês como fallback
        $user->add_lang_ext('mundophpbb/simpledown', 'acp/info_acp_simpledown', 'en');

        // Carrega idioma do usuário se diferente do inglês
        if ($user->lang['CODE'] !== 'en') {
            $user->add_lang_ext('mundophpbb/simpledown', 'acp/info_acp_simpledown');
        }

        /** @var \mundophpbb\simpledown\controller\admin_controller $admin_controller */
        $admin_controller = $phpbb_container->get('mundophpbb.simpledown.admin_controller');
        $admin_controller->set_u_action($this->u_action);

        add_form_key('mundophpbb_simpledown');

        switch ($mode) {
            case 'settings':
                $this->tpl_name = 'acp_simpledown_settings';
                $this->page_title = $user->lang('ACP_SIMPLEDOWN_TITLE');
                $admin_controller->display_settings();
                break;

            case 'files':
            default:
                $this->tpl_name = 'acp_simpledown_files';
                $this->page_title = $user->lang('ACP_SIMPLEDOWN_TITLE');
                $admin_controller->display_files();
                break;
        }
    }
}