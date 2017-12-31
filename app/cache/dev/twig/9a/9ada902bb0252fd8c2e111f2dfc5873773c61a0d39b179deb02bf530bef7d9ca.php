<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1e1328fb5d6bb8bad4d10d45b63915db927320867e4de3accea927b0fb223594 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row text-center\">
        <div class=col-md-12\">
              <div class='row'>
                    ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 10
        echo "
              </div>
              <div class='row'>
                      <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/img/User-icon.png"), "html", null, true);
        echo "\" alt=\"user\" width=\"150\" height=\"150\">
              </div>
              <div class='row'>
                  <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                      <div class=\"form-group\">
                          <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                      </div>
                      <div class=\"form-group\">
                          <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                      </div>
                      <div class=\"form-group\">
                          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                          <label for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                      </div>
                     <div class=\"form-group\">
                      <input class =\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                     <div class=\"form-group\">
                  </form>
              </div>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  82 => 28,  74 => 23,  68 => 20,  64 => 19,  59 => 17,  55 => 16,  49 => 13,  44 => 10,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="row text-center">*/
/*         <div class=col-md-12">*/
/*               <div class='row'>*/
/*                     {% if error %}*/
/*                         <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                     {% endif %}*/
/* */
/*               </div>*/
/*               <div class='row'>*/
/*                       <img src="{{asset('bundles/app/img/User-icon.png')}}" alt="user" width="150" height="150">*/
/*               </div>*/
/*               <div class='row'>*/
/*                   <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                       <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                       <div class="form-group">*/
/*                           <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                           <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                           <input type="password" id="password" name="_password" required="required" />*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                           <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                           <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/*                       </div>*/
/*                      <div class="form-group">*/
/*                       <input class ="btn btn-success" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                      <div class="form-group">*/
/*                   </form>*/
/*               </div>*/
/*         </div>*/
/* </div>*/
/* {% endblock content %}*/
/* */
