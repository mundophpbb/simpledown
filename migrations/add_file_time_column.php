<?php
/**
 * @package mundophpbb/simpledown
 * @copyright (c) 2025 Mundo phpBB
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License, version 2.
 */

namespace mundophpbb\simpledown\migrations;

class add_file_time_column extends \phpbb\db\migration\migration
{
    public function effectively_installed()
    {
        return $this->db_tools->sql_column_exists($this->table_prefix . 'simpledown_files', 'file_time');
    }

    public static function depends_on()
    {
        return ['\mundophpbb\simpledown\migrations\install'];
    }

    public function update_schema()
    {
        return [
            'add_columns' => [
                $this->table_prefix . 'simpledown_files' => [
                    'file_time' => ['INT:11', 0],
                ],
            ],
        ];
    }

    public function revert_schema()
    {
        return [
            'drop_columns' => [
                $this->table_prefix . 'simpledown_files' => [
                    'file_time',
                ],
            ],
        ];
    }

    public function update_data()
    {
        return [
            // Preenche todos os arquivos existentes com a data atual
            ['custom', [[$this, 'populate_file_time']]],
        ];
    }

    public function populate_file_time()
    {
        $sql = 'UPDATE ' . $this->table_prefix . 'simpledown_files 
                SET file_time = ' . time() . ' 
                WHERE file_time = 0 OR file_time IS NULL';
        $this->db->sql_query($sql);
    }
}