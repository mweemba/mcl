<?php

class CT_CtMailchimpForm_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_mailchimp_form';
    protected $title = 'Case Mailchimp Form';
    protected $icon = 'eicon-email-field';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"source_section","label":"Color Settings","tab":"style","controls":[{"name":"style","label":"Layout","type":"select","options":{"style1":"Default"},"default":"style1"},{"name":"input_color","label":"Input Color","type":"color","selectors":{"{{WRAPPER}} .ct-mailchimp.ct-mailchimp1 .mc4wp-form .mc4wp-form-fields input[type=\"email\"]":"color: {{VALUE}};"}},{"name":"input_bg_color","label":"Input Background Color","type":"color","selectors":{"{{WRAPPER}} .ct-mailchimp.ct-mailchimp1 .mc4wp-form .mc4wp-form-fields input[type=\"email\"]":"background-color: {{VALUE}};"}},{"name":"btn_gradient_from","label":"Button Color Gradient From","type":"color"},{"name":"btn_gradient_to","label":"Button Color Gradient To","type":"color"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-inline-css-js' );
}