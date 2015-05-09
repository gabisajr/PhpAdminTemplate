<?php

class Template {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function display($data = null) {
        $data['pageTitle'] = (isset($data['pageTitle']) == '') ? '.: HR :.' : $data['pageTitle'];
        $data['_content'] = $this->_ci->load->view((isset($data['content_view_page']) == '') ? 'template/content' : $data['content_view_page'], $data, true);
        $this->_ci->load->view('template.php', $data);
    }

}

?>