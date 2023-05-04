<?php

class CT_CtLanguageSwitcher_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_language_switcher';
    protected $title = 'Case Language Switcher';
    protected $icon = 'eicon-editor-list-ul';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"section_list","label":"Content","tab":"content","controls":[{"name":"current","label":"Current Item","type":"text","label_block":true},{"name":"current_item_typography","label":"Current Item Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-language-switcher1 .current--item"},{"name":"menu_item","label":"Item","type":"repeater","controls":[{"name":"text","label":"Text","type":"text","label_block":true},{"name":"link","label":"Link","type":"url","label_block":true}],"title_field":"{{{ text }}}"}]}]}';
    protected $styles = array(  );
    protected $scripts = array(  );
}