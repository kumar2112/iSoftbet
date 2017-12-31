<?php

/* AppBundle:Customer:add.html.twig */
class __TwigTemplate_1ea7623f0e9cb3febc7e6d8ad68911b56a8a6e1854467fbe3f03963a5144547b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Customer:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "isoftBet -ADD NEW CUSTOMER!";
    }

    // line 3
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 4
        echo "      ";
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Customer:add.html.twig", 4)->display($context);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"content\">
          <div class='row text-center'>
                <div class=\"col-md-12\">
                    <h2> Add New Customer</h2>
                    <h2 class=\"text-left\">
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("customer_list");
        echo "\" class=\"btn btn-default\" style=\"float:right\">BACK TO CUSTOMER LIST</a>
                    </h2>
                </div>
          </div>
          <div class='row'>
               <div class=\"col-md-12\">
                   
                    <form method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("customer_create");
        echo "\" id=\"add_customer_form\" name=\"add_customer_form\" novalidate=\"1\">
                          <div class=\"form-group\">
                              <lable>Customer Cnp(Customer Id)</lable>
                              <input type=\"text\" id=\"form_cnp\" name=\"cnp\" required=\"required\" class=\"form-control\">
                          </div>
                          <div class=\"form-group\">
                              <lable>Customer Name</lable>
                              <input type=\"text\" id=\"form_name\" name=\"name\" required=\"required\" class=\"form-control\">
                          </div>

                          <div class=\"form-group\">
                              <button type=\"submit\" class=\"btn btn-default\">Create Customer</a>
                          </div>
                    </form>
              </div>
          </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Customer:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  54 => 12,  47 => 7,  44 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}isoftBet -ADD NEW CUSTOMER!{% endblock %}*/
/* {% block sidebar_left  %}*/
/*       {% include 'AppBundle:Shared:sidebar-left.html.twig' %}*/
/* {% endblock sidebar_left %}*/
/* {% block content  %}*/
/*     <div class="content">*/
/*           <div class='row text-center'>*/
/*                 <div class="col-md-12">*/
/*                     <h2> Add New Customer</h2>*/
/*                     <h2 class="text-left">*/
/*                         <a href="{{path('customer_list')}}" class="btn btn-default" style="float:right">BACK TO CUSTOMER LIST</a>*/
/*                     </h2>*/
/*                 </div>*/
/*           </div>*/
/*           <div class='row'>*/
/*                <div class="col-md-12">*/
/*                    */
/*                     <form method="post" action="{{path('customer_create')}}" id="add_customer_form" name="add_customer_form" novalidate="1">*/
/*                           <div class="form-group">*/
/*                               <lable>Customer Cnp(Customer Id)</lable>*/
/*                               <input type="text" id="form_cnp" name="cnp" required="required" class="form-control">*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <lable>Customer Name</lable>*/
/*                               <input type="text" id="form_name" name="name" required="required" class="form-control">*/
/*                           </div>*/
/* */
/*                           <div class="form-group">*/
/*                               <button type="submit" class="btn btn-default">Create Customer</a>*/
/*                           </div>*/
/*                     </form>*/
/*               </div>*/
/*           </div>*/
/*     </div>*/
/* {% endblock content%}*/
/* */
