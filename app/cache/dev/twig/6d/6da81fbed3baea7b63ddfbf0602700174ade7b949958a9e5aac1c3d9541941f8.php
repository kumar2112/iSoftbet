<?php

/* AppBundle:Dashboard:index.html.twig */
class __TwigTemplate_a35bbf0b34c6da428b1c85f2fc00b689fc2d2656682cee2d77181aa9ecb4217c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'sidebar_left' => array($this, 'block_sidebar_left'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 3
        echo "      ";
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Dashboard:index.html.twig", 3)->display($context);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block sidebar_left  %}*/
/*       {% include 'AppBundle:Shared:sidebar-left.html.twig' %}*/
/* {% endblock sidebar_left %}*/
/* {% block content  %}*/
/* */
/*     */
/* {% endblock content%}*/
/* */
