<?php

/* AcmeHomeBundle:Home:index.html.twig */
class __TwigTemplate_25081cdf7bbc21bbb3d85a1db1202672c01324f31270f0090ab95cedbd4fda81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeHomeBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'current_page' => array($this, 'block_current_page'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Inicio ";
    }

    // line 3
    public function block_current_page($context, array $blocks = array())
    {
        echo "home";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo " 
\tHello ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
