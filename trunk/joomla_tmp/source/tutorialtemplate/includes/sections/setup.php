<jdoc:include type="head" />

<?php
unset($this->_scripts[$this->baseurl .'/media/system/js/mootools.js']);
unset($this->_scripts[$this->baseurl .'/media/system/js/caption.js']); 
unset($this->_scripts[$this->baseurl .'/media/system/js/validate.js']); 

$copyright = $this->params->get( 'copyright' );
$style = $this->params->get( 'style' );

$pretty = $this->params->get( 'pretty' );
$pretty_settings = array('theme' => $pretty);
    

?>


