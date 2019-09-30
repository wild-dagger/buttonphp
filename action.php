<?php
/**
 * DokuWiki Plugin buttonphp (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Wild Dagger
 */
 
if (!defined('DOKU_INC')) die();
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
require_once (DOKU_PLUGIN . 'action.php');
 
class action_plugin_buttonphp extends DokuWiki_Action_Plugin {
 
     /**
     * Register the eventhandlers
     */
    public function register(Doku_Event_Handler $controller) {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button_php', array ());
    }
 
    /**
     * Inserts the toolbar button
     */
    function insert_button_php(Doku_Event $event, $param) {
        $event->data[] = array (
            'type' => 'format',
            'title' => $this->getLang('insertbuttonphp'),
            'icon' => '../../plugins/buttonphp/pix/code.png',
            'open' => '<php>',
            'close' => '</php>',
        );
    }
 
}
