<?php

defined('_JEXEC') or die;



$doc = JFactory::getDocument();

$doc->addStyleSheet($this->baseurl.'/media/jui/css/bootstrap.min.css');

$doc->addStyleSheet($this->baseurl.'/media/jui/css/bootstrap-responsive.css');

$doc->addStyleSheet('templates/'.$this->template.'/css/styles.css');

?>



<!DOCTYPE html>

<html>

<head>

  <jdoc:include type="head" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>



<body>



  <!-- container voor de hele pagina -->

  <div class='container'>



    <!-- header -->

    <div class='row'>

      <div class='span8'>

        <jdoc:include type="modules" name="logo" style="none" />

      </div>

      <div class='span4'>

        <jdoc:include type="modules" name="zoek" style="none" />

      </div>

    </div>



    <!-- navigatie -->

    <div class='row'>

      <div class='span12'>

        <jdoc:include type="modules" name="navigatie" style="xhtml" />

      </div>

    </div>



    <!-- contentgebied -->

    <div class='row'>

      <div class='span9'>

        <jdoc:include type="modules" name="bovencontent" style="xhtml" />

        <jdoc:include type="message" />

        <jdoc:include type="component" />

        <jdoc:include type="modules" name="ondercontent" style="xhtml" />

      </div>



      <div class='span3'>

        <jdoc:include type="modules" name="zijkolom" style="xhtml" />

      </div>

    </div>



    <!-- footer -->

    <div class='row'>

      <div class='span12'>

        <jdoc:include type="modules" name="footer" style="xhtml" />

      </div>

    </div>



  </div>



</body>

</html>