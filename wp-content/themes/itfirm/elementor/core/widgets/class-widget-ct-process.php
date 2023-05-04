<?php

class CT_CtProcess_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_process';
    protected $title = 'Process';
    protected $icon = 'eicon-sitemap';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"section_content","label":"Process","tab":"content","controls":[{"name":"content_list","label":"Process","type":"repeater","controls":[{"name":"icon_type","label":"Icon Type","type":"select","options":{"icon":"Icon","image":"Image"},"default":"icon"},{"name":"ct_icon","label":"Icon","type":"icons","condition":{"icon_type":"icon"}},{"name":"icon_image","label":"Icon Image","type":"media","condition":{"icon_type":"image"}},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"description","label":"Description","type":"textarea","label_block":true}],"title_field":"{{{ title }}}"},{"name":"column","label":"Column","type":"select","options":{"1":"1","2":"2","3":"3"},"default":"3"}]},{"name":"section_style","label":"Style","tab":"content","controls":[{"name":"icon_color","label":"Icon Color","type":"color","selectors":{"{{WRAPPER}} .ct-process1.style2 .ct-process-icon":"color: {{VALUE}};"},"condition":{"layout":"2"}},{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-process .ct-process-title":"color: {{VALUE}};"}},{"name":"description_color","label":"Description Color","type":"color","selectors":{"{{WRAPPER}}  .ct-process .ct-process-description":"color: {{VALUE}};"}},{"name":"box_bg_color","label":"Box Background Color","type":"color","selectors":{"{{WRAPPER}} .ct-process1.style2 .ct-piechart-process .ct-process-border::before":"background-color: {{VALUE}};"},"condition":{"layout":"2"}},{"name":"box_border_color","label":"Box Border Color","type":"color","selectors":{"{{WRAPPER}} .ct-process1.style2 .ct-piechart-process .ct-process-border::before":"border-color: {{VALUE}};"},"condition":{"layout":"2"}}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'easy-pie-chart-lib-js','ct-piecharts-widget-js' );
}