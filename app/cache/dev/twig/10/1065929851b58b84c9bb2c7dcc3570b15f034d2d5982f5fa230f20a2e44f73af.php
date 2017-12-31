<?php

/* AppBundle:Transaction:list.html.twig */
class __TwigTemplate_8629986a6329d095388ee53ce2d952426a5ca47b1efc3318989702997610e826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Transaction:list.html.twig", 1);
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
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Transaction:list.html.twig", 3)->display($context);
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
        echo $this->env->getExtension('routing')->getPath("transaction_add");
        echo "\" class=\"btn btn-default\" style=\"float:right\">CREATE NEW TRASACTION</a>
      </h2>
    </div>
</div>
<div class=\"row\">
     <form method=\"post\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("transaction_create");
        echo "\" id=\"filter_transaction_form\" name=\"filter_transaction_form\" novalidate=\"1\">
     <div class=\"col-md-3\">
           <div class=\"form-group\">
               <lable>Amount</lable>
               <input type=\"number\" id=\"form_amount\" name=\"amount\" required=\"required\" class=\"form-control\">
           </div>
     </div>
     <div class=\"col-md-3\">
         <div class=\"form-group\">
             <lable>Date</lable>
             <input type=\"date\" id=\"form_amount\" name=\"amount\"  class=\"form-control\" >
         </div>
     </div>
     <div class=\"col-md-3\">
             <div class=\"form-group\">
                 <lable>Customer Id</lable>
                 <input type=\"number\" id=\"form_amount\" name=\"amount\" required=\"required\" class=\"form-control\">
             </div>
     </div>
     <div class=\"col-md-3\">
             <div class=\"form-group\">
                 <button type=\"submit\" class=\"form-control btn btn-default\" style=\"margin-top:18px\">FILTER</button>
             </div>
     </div>
     </form>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th scope=\"col\">#Transaction Id</th>
            <th scope=\"col\">CustomerId</th>
            <th scope=\"col\">Amount</th>
            <th scope=\"col\">Transaction Type</th>
            <th scope=\"col\">Created @</th>
            <th scope=\"col\">Updated @</th>
            <th scope=\"col\">Action</th>
          </tr>
        </thead>
        <tbody>
            ";
        // line 55
        if ((isset($context["transactions"]) ? $context["transactions"] : $this->getContext($context, "transactions"))) {
            // line 56
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : $this->getContext($context, "transactions")));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 57
                echo "                <tr>
                  <th scope=\"row\">#";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "getId", array()), "html", null, true);
                echo "</th>
                  <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transaction"], "getCustomer", array()), "getCnp", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "getAmount", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 61
                echo ((($this->getAttribute($context["transaction"], "getType", array()) == "C")) ? ("CREDIT") : ("DEBIT"));
                echo "</td>
                  <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "getCreatedat", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                  <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "getUpdatedat", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                  <td>
                        <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transaction_edit", array("transactionid" => $this->getAttribute($context["transaction"], "getId", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">EDIT</a>
                        <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transaction_delete", array("transactionid" => $this->getAttribute($context["transaction"], "getId", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" onclick=\"return deleteTransaction(this)\">DELETE</a>
                  </td>

                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
        }
        // line 72
        echo "        </tbody>
      </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Transaction:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 72,  147 => 71,  136 => 66,  132 => 65,  127 => 63,  123 => 62,  119 => 61,  115 => 60,  111 => 59,  107 => 58,  104 => 57,  99 => 56,  97 => 55,  53 => 14,  45 => 9,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
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
/*         <a href="{{path('transaction_add')}}" class="btn btn-default" style="float:right">CREATE NEW TRASACTION</a>*/
/*       </h2>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*      <form method="post" action="{{path('transaction_create')}}" id="filter_transaction_form" name="filter_transaction_form" novalidate="1">*/
/*      <div class="col-md-3">*/
/*            <div class="form-group">*/
/*                <lable>Amount</lable>*/
/*                <input type="number" id="form_amount" name="amount" required="required" class="form-control">*/
/*            </div>*/
/*      </div>*/
/*      <div class="col-md-3">*/
/*          <div class="form-group">*/
/*              <lable>Date</lable>*/
/*              <input type="date" id="form_amount" name="amount"  class="form-control" >*/
/*          </div>*/
/*      </div>*/
/*      <div class="col-md-3">*/
/*              <div class="form-group">*/
/*                  <lable>Customer Id</lable>*/
/*                  <input type="number" id="form_amount" name="amount" required="required" class="form-control">*/
/*              </div>*/
/*      </div>*/
/*      <div class="col-md-3">*/
/*              <div class="form-group">*/
/*                  <button type="submit" class="form-control btn btn-default" style="margin-top:18px">FILTER</button>*/
/*              </div>*/
/*      </div>*/
/*      </form>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <th scope="col">#Transaction Id</th>*/
/*             <th scope="col">CustomerId</th>*/
/*             <th scope="col">Amount</th>*/
/*             <th scope="col">Transaction Type</th>*/
/*             <th scope="col">Created @</th>*/
/*             <th scope="col">Updated @</th>*/
/*             <th scope="col">Action</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% if transactions %}*/
/*             {% for transaction in transactions %}*/
/*                 <tr>*/
/*                   <th scope="row">#{{transaction.getId}}</th>*/
/*                   <td>{{transaction.getCustomer.getCnp }}</td>*/
/*                   <td>{{transaction.getAmount }}</td>*/
/*                   <td>{{transaction.getType=='C'?'CREDIT':'DEBIT'}}</td>*/
/*                   <td>{{transaction.getCreatedat|date('Y-m-d') }}</td>*/
/*                   <td>{{transaction.getUpdatedat|date('Y-m-d') }}</td>*/
/*                   <td>*/
/*                         <a href="{{path('transaction_edit',{'transactionid':transaction.getId} )}}" class="btn btn-default">EDIT</a>*/
/*                         <a href="{{path('transaction_delete',{'transactionid':transaction.getId} )}}" class="btn btn-default" onclick="return deleteTransaction(this)">DELETE</a>*/
/*                   </td>*/
/* */
/*                 </tr>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*         </tbody>*/
/*       </table>*/
/*     </div>*/
/* </div>*/
/* {% endblock content%}*/
/* */
