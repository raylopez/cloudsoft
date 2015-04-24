<?php

/* ::base.html.twig */
class __TwigTemplate_a4f7e7a979a73b80cd8444a3bd9c9c85741ddb9866ba5eda028a405011beeb68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'current_page' => array($this, 'block_current_page'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>CloudSoft |";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../vendor/twbs/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../vendor/components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("public/css/main.css"), "html", null, true);
        echo "\">
\t\t<script src=\"https://code.jquery.com/jquery-2.1.3.min.js\"></script>
\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script>
\t\t\t\$(document).ready(function(e){
\t\t\t\tvar current = \"";
        // line 15
        $this->displayBlock('current_page', $context, $blocks);
        echo "\";
\t\t\t\t\$('#menu li#' + current).addClass('active');
\t\t\t});
\t\t</script>
    </head>
    <body>
\t\t<nav class=\"navbar navbar-inverse\">
\t\t  <div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">Brand</a>
\t\t\t</div>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t  <ul class=\"nav navbar-nav\" id=\"menu\">
\t\t\t\t<li id=\"home\"><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_welcome"), "html", null, true);
        echo "home/eric\"><i class=\"fa fa-home\"></i> Inicio</a></li>
\t\t\t\t<li id=\"about\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_welcome"), "html", null, true);
        echo "about/\"><i class=\"fa fa-users\"></i> Nosotros</a></li>
\t\t\t\t<li id=\"contact\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_welcome"), "html", null, true);
        echo "contact/\"><i class=\"fa fa-envelope\"></i> Contacto</a></li>
\t\t\t\t<li id=\"help\"><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("_welcome"), "html", null, true);
        echo "help/\"><i class=\"fa fa-info-circle\"></i> Ayuda</a></li>
\t\t\t  </ul>
\t\t\t</div><!-- /.navbar-collapse -->
\t\t  </div><!-- /.container-fluid -->
\t\t</nav>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 15
    public function block_current_page($context, array $blocks = array())
    {
        echo "home";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  138 => 46,  132 => 15,  127 => 6,  121 => 5,  115 => 51,  113 => 50,  108 => 47,  106 => 46,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  60 => 15,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
