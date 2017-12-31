<?php

/* AppBundle:Transaction:edit.html.twig */
class __TwigTemplate_0b0b755f6fda402249eebd3af797459a27f038ede69004715d09262a9d8f53e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Transaction:edit.html.twig", 1);
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
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Transaction:edit.html.twig", 4)->display($context);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"content\">
          <div class='row text-center'>
                <div class=\"col-md-12\">
                    <h2>Updating Tansaction #";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "getId", array()), "html", null, true);
        echo "</h2>
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
        echo $this->env->getExtension('routing')->getPath("transaction_update");
        echo "\" id=\"upadate_transaction_form\" name=\"upadate_transaction_form\" novalidate=\"1\">
                         <div class=\"form-group\">
                             <lable>Customer Cnp(Customer Id)</lable>
                             <input type=\"text\" id=\"form_cnp\" name=\"cnp\" required=\"required\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "getCustomer", array()), "getCnp", array()), "html", null, true);
        echo "\">
                         </div>
                         <div class=\"form-group\">
                             <lable>Amount</lable>
                             <input type=\"number\" id=\"form_amount\" name=\"amount\" required=\"required\" class=\"form-control\"  value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "getAmount", array()), "html", null, true);
        echo "\">
                         </div>
                         <div class=\"form-group\">
                             <lable>Transaction Type</lable>
                             <select id=\"form_type\" name=\"type\" class=\"form-control form-select\">
                                  <option value=\"D\" ";
        // line 30
        echo ((($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "getType", array()) == "D")) ? ("selected") : (""));
        echo ">DEBIT(-)</a>
                                  <option value=\"C\" ";
        // line 31
        echo ((($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "getType", array()) == "C")) ? ("selected") : (""));
        echo ">CREDIT(+)</a>
                            </select>
                         </div>

                         <div class=\"form-group\">
                             <input type=\"hidden\" name=\"id\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : $this->getContext($context, "transaction")), "getId", array()), "html", null, true);
        echo "\">
                             <button type=\"submit\" class=\"btn btn-default\">UPDATE</a>
                         </div>
                   </form>
              </div>
          </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Transaction:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  91 => 31,  87 => 30,  79 => 25,  72 => 21,  66 => 18,  57 => 12,  52 => 10,  47 => 7,  44 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
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
/*                     <h2>Updating Tansaction #{{transaction.getId}}</h2>*/
/*                     <h2 class="text-left">*/
/*                         <a href="{{path('transaction_list')}}" class="btn btn-default" style="float:right">BACK TO TRANSACTION LIST</a>*/
/*                     </h2>*/
/*                 </div>*/
/*           </div>*/
/*           <div class='row'>*/
/*               <div class="col-md-12">*/
/*                     <form method="post" action="{{path('transaction_update')}}" id="upadate_transaction_form" name="upadate_transaction_form" novalidate="1">*/
/*                          <div class="form-group">*/
/*                              <lable>Customer Cnp(Customer Id)</lable>*/
/*                              <input type="text" id="form_cnp" name="cnp" required="required" class="form-control" value="{{transaction.getCustomer.getCnp}}">*/
/*                          </div>*/
/*                          <div class="form-group">*/
/*                              <lable>Amount</lable>*/
/*                              <input type="number" id="form_amount" name="amount" required="required" class="form-control"  value="{{transaction.getAmount}}">*/
/*                          </div>*/
/*                          <div class="form-group">*/
/*                              <lable>Transaction Type</lable>*/
/*                              <select id="form_type" name="type" class="form-control form-select">*/
/*                                   <option value="D" {{transaction.getType=='D'?'selected'}}>DEBIT(-)</a>*/
/*                                   <option value="C" {{transaction.getType=='C'?'selected'}}>CREDIT(+)</a>*/
/*                             </select>*/
/*                          </div>*/
/* */
/*                          <div class="form-group">*/
/*                              <input type="hidden" name="id" value="{{transaction.getId}}">*/
/*                              <button type="submit" class="btn btn-default">UPDATE</a>*/
/*                          </div>*/
/*                    </form>*/
/*               </div>*/
/*           </div>*/
/*     </div>*/
/* {% endblock content%}*/
/* */
