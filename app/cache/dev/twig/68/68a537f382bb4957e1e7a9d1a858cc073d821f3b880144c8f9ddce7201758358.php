<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_903fb8a4a2c3daab1faad896a15b421515541e4b402223b96327b38da994b958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupname" => (isset($context["groupname"]) ? $context["groupname"] : $this->getContext($context, "groupname")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 2,  19 => 1,);
    }
}
/* <form action="{{ path('fos_user_group_edit', {'groupname': groupname} ) }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
