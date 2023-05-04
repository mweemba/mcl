<?php

class CT_CtImage_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_image';
    protected $title = 'Case Image';
    protected $icon = 'eicon-image';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"content_section","label":"Content","tab":"content","controls":[{"name":"image","label":"Choose Image","type":"media"},{"name":"image_type","label":"Image Type","type":"select","options":{"img":"Image","bg":"Background"},"default":"img"},{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Example: 200x100 (Width x Height).","condition":{"image_type":"img"}},{"name":"image_overlay","label":"Image Overlay","type":"slider","range":{"px":{"max":1,"step":0.01000000000000000020816681711721685132943093776702880859375}},"control_type":"responsive","selectors":{"{{WRAPPER}} .ct-image-single::before":"opacity: {{SIZE}};"}},{"name":"image_max_height","label":"Image Max Height","type":"slider","description":"Enter number.","condition":{"image_type":"img"},"range":{"px":{"min":0,"max":3000}},"control_type":"responsive","selectors":{"{{WRAPPER}} .ct-image-single img":"max-height: {{SIZE}}{{UNIT}};"}},{"name":"image_height","label":"Image Height","type":"slider","description":"Enter number.","condition":{"image_type":"bg"},"range":{"px":{"min":0,"max":3000}},"control_type":"responsive","selectors":{"{{WRAPPER}} .ct-image-single .ct-image-bg":"height: {{SIZE}}{{UNIT}};"}},{"name":"image_width","label":"Image Width","type":"choose","control_type":"responsive","options":{"100%":{"title":"100%","icon":"eicon-text-align-justify"},"auto":{"title":"Auto","icon":"eicon-h-align-stretch"}},"selectors":{"{{WRAPPER}} .ct-image-single img, {{WRAPPER}} .ct-image-single .ct-image-single--inner":"width: {{VALUE}};"}},{"name":"image_align","label":"Image Alignment","type":"choose","control_type":"responsive","options":{"left":{"title":"Left","icon":"fa fa-align-left"},"center":{"title":"Center","icon":"fa fa-align-center"},"right":{"title":"Right","icon":"fa fa-align-right"}},"selectors":{"{{WRAPPER}} .ct-image-single":"text-align: {{VALUE}};"}},{"name":"image_link","label":"Link","type":"url"},{"name":"img_tilt","label":"Parallax Move Mouse","type":"select","options":{"no":"No","yes":"Yes"},"default":"no","condition":{"image_type":"img"}},{"name":"img_parallax","label":"Parallax Scrolling","type":"select","options":{"no":"No","yes":"Yes"},"default":"no","condition":{"image_type":"img"}},{"name":"img_parallax_w","label":"Parallax Section Width","type":"text","label_block":true,"condition":{"img_parallax":"yes"},"default":"1920"},{"name":"img_parallax_h","label":"Parallax Section Height","type":"text","label_block":true,"condition":{"img_parallax":"yes"},"default":"490"},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'elementor-waypoints' );
}