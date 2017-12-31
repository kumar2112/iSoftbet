<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b687a6b5d53c565c1f8cea2a5038ac7da3ab8ebddf9c12cab9231573b6e1f197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'flashes' => array($this, 'block_flashes'),
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
    public function block_flashes($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 6
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  48 => 6,  41 => 5,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block flashes %}*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="alert alert-{{ type }} flash-{{ type }}">*/
/*                 {{ message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* {% endblock flashes %}*/
/* */
