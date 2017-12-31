<?php

/* AppBundle:Transaction:add.html.twig */
class __TwigTemplate_092ef45227b23cea2e690afb170494a6e575762e2d6ecc93a9f8fcfe2518b5f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Transaction:add.html.twig", 1);
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
        echo "isoftBet -ADD NEW TRANSACTION!";
    }

    // line 3
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 4
        echo "      ";
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Transaction:add.html.twig", 4)->display($context);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"content\">
          <div class='row text-center'>
                <div class=\"col-md-12\">
                    <h2> Create New Transaction</h2>
                    <h2 class=\"text-left\">
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("transaction_list");
        echo "\" class=\"btn btn-default\" style=\"float:right\">BACK TO TRANSACTION LIST</a>
                    </h2>
                </div>
          </div>
          <div class='row'>
              <div class=\"col-md-12\">
                    <form method=\"post\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("transaction_create");
        echo "\" id=\"create_transaction_form\" name=\"create_transaction_form\" novalidate=\"1\">
                         <div class=\"form-group\">
                             <lable>Customer Cnp(Customer Id)</lable>
                             <input type=\"text\" id=\"form_cnp\" name=\"cnp\" required=\"required\" class=\"form-control\">
                         </div>
                         <div class=\"form-group\">
                             <lable>Amount</lable>
                             <input type=\"number\" id=\"form_amount\" name=\"amount\" required=\"required\" class=\"form-control\">
                         </div>
                         <div class=\"form-group\">
                             <lable>Transaction Type</lable>
                             <select id=\"form_type\" name=\"type\" class=\"form-control form-select\">
                                  <option value=\"D\">DEBIT(-)</a>
                                  <option value=\"C\">CREDIT(+)</a>
                            </select>
                         </div>

                         <div class=\"form-group\">
                             <button type=\"submit\" class=\"btn btn-default\">Process</a>
                         </div>
                   </form>
              </div>
          </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Transaction:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  54 => 12,  47 => 7,  44 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}isoftBet -ADD NEW TRANSACTION!{% endblock %}*/
/* {% block sidebar_left  %}*/
/*       {% include 'AppBundle:Shared:sidebar-left.html.twig' %}*/
/* {% endblock sidebar_left %}*/
/* {% block content  %}*/
/*     <div class="content">*/
/*           <div class='row text-center'>*/
/*                 <div class="col-md-12">*/
/*                     <h2> Create New Transaction</h2>*/
/*                     <h2 class="text-left">*/
/*                         <a href="{{path('transaction_list')}}" class="btn btn-default" style="float:right">BACK TO TRANSACTION LIST</a>*/
/*                     </h2>*/
/*                 </div>*/
/*           </div>*/
/*           <div class='row'>*/
/*               <div class="col-md-12">*/
/*                     <form method="post" action="{{path('transaction_create')}}" id="create_transaction_form" name="create_transaction_form" novalidate="1">*/
/*                          <div class="form-group">*/
/*                              <lable>Customer Cnp(Customer Id)</lable>*/
/*                              <input type="text" id="form_cnp" name="cnp" required="required" class="form-control">*/
/*                          </div>*/
/*                          <div class="form-group">*/
/*                              <lable>Amount</lable>*/
/*                              <input type="number" id="form_amount" name="amount" required="required" class="form-control">*/
/*                          </div>*/
/*                          <div class="form-group">*/
/*                              <lable>Transaction Type</lable>*/
/*                              <select id="form_type" name="type" class="form-control form-select">*/
/*                                   <option value="D">DEBIT(-)</a>*/
/*                                   <option value="C">CREDIT(+)</a>*/
/*                             </select>*/
/*                          </div>*/
/* */
/*                          <div class="form-group">*/
/*                              <button type="submit" class="btn btn-default">Process</a>*/
/*                          </div>*/
/*                    </form>*/
/*               </div>*/
/*           </div>*/
/*     </div>*/
/* {% endblock content%}*/
/* */
