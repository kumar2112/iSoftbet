<?php

/* AppBundle:Customer:list.html.twig */
class __TwigTemplate_2449167c452164c02523719b78302268ad2d3f41e3dc20b611cc0c677a4b3c29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Customer:list.html.twig", 1);
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
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Customer:list.html.twig", 3)->display($context);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
      <h2 class=\"text-left\">Customer List
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("customer_add");
        echo "\" class=\"btn btn-default\" style=\"float:right\">ADD NEW CUSTOMER</a>
      </h2>
    </div>
</div>

<div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th scope=\"col\">#Customer Id</th>
            <th scope=\"col\">First Name</th>
            <th scope=\"col\">Cnp</th>
            <th scope=\"col\">Balance</th>
            <th scope=\"col\">Created @</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 27
        if ((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers"))) {
            // line 28
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : $this->getContext($context, "customers")));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 29
                echo "              <tr>
                <th scope=\"row\">#";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "getId", array()), "html", null, true);
                echo "</th>
                <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "getName", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "getCnp", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "getBalance", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["customer"], "getCreatedat", array()), "Y-m-d"), "html", null, true);
                echo "</td>
              </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "          ";
        }
        // line 38
        echo "        </tbody>
      </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Customer:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  101 => 37,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  76 => 30,  73 => 29,  68 => 28,  66 => 27,  45 => 9,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block sidebar_left  %}*/
/*       {% include 'AppBundle:Shared:sidebar-left.html.twig' %}*/
/* {% endblock sidebar_left %}*/
/* {% block content  %}*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*       <h2 class="text-left">Customer List*/
/*         <a href="{{path('customer_add')}}" class="btn btn-default" style="float:right">ADD NEW CUSTOMER</a>*/
/*       </h2>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <th scope="col">#Customer Id</th>*/
/*             <th scope="col">First Name</th>*/
/*             <th scope="col">Cnp</th>*/
/*             <th scope="col">Balance</th>*/
/*             <th scope="col">Created @</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% if customers %}*/
/*           {% for customer in customers %}*/
/*               <tr>*/
/*                 <th scope="row">#{{customer.getId}}</th>*/
/*                 <td>{{customer.getName }}</td>*/
/*                 <td>{{customer.getCnp }}</td>*/
/*                 <td>{{customer.getBalance }}</td>*/
/*                 <td>{{customer.getCreatedat|date('Y-m-d') }}</td>*/
/*               </tr>*/
/*           {% endfor %}*/
/*           {% endif %}*/
/*         </tbody>*/
/*       </table>*/
/*     </div>*/
/* </div>*/
/* {% endblock content%}*/
/* */
