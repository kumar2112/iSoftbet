<?php

/* AppBundle:Shared:sidebar-left.html.twig */
class __TwigTemplate_ce45be50d3bc80f6dc06b9add642e336fa92b3159648e53b3c46a37f4a5f58dd extends Twig_Template
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
        echo "  <div class=\"nav-side-menu\">
      <div class=\"brand\">
             <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/img/isoftbet_logo.png"), "html", null, true);
        echo "\" alt=\"ibosoft-logo\">
      </div>
      <i class=\"fa fa-bars fa-2x toggle-btn\" data-toggle=\"collapse\" data-target=\"#menu-content\"></i>

          <div class=\"menu-list\">

              <ul id=\"menu-content\" class=\"menu-content collapse out\">
                  ";
        // line 15
        echo "
                  <li  data-toggle=\"collapse\" data-target=\"#products\" class=\"collapsed active\">
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("customer_list");
        echo "\"><i class=\"fa fa-gift fa-lg\"></i> Customer<span class=\"arrow\"></span></a>
                  </li>
                  ";
        // line 33
        echo "
                  <li data-toggle=\"collapse\" data-target=\"#service\" class=\"collapsed\">
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("transaction_list");
        echo "\"><i class=\"fa fa-globe fa-lg\"></i> Transaction<span class=\"arrow\"></span></a>
                  </li>

                  <li  data-toggle=\"collapse\" data-target=\"#products\" class=\"collapsed active\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-logut fa-lg\"></i>logout<span class=\"arrow\"></span></a>
                  </li>
                  ";
        // line 47
        echo "
                  ";
        // line 70
        echo "              </ul>
       </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Shared:sidebar-left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 70,  58 => 47,  53 => 39,  46 => 35,  42 => 33,  37 => 17,  33 => 15,  23 => 3,  19 => 1,);
    }
}
/*   <div class="nav-side-menu">*/
/*       <div class="brand">*/
/*              <img src="{{asset('bundles/app/img/isoftbet_logo.png')}}" alt="ibosoft-logo">*/
/*       </div>*/
/*       <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>*/
/* */
/*           <div class="menu-list">*/
/* */
/*               <ul id="menu-content" class="menu-content collapse out">*/
/*                   {#<li>*/
/*                     <a href="#">*/
/*                     <i class="fa fa-dashboard fa-lg"></i> Dashboard*/
/*                     </a>*/
/*                   </li>#}*/
/* */
/*                   <li  data-toggle="collapse" data-target="#products" class="collapsed active">*/
/*                     <a href="{{path('customer_list')}}"><i class="fa fa-gift fa-lg"></i> Customer<span class="arrow"></span></a>*/
/*                   </li>*/
/*                   {#}*/
/*                   <ul class="sub-menu collapse" id="products">*/
/*                       <li class="active"><a href="#">CSS3 Animation</a></li>*/
/*                       <li><a href="#">Add Customer</a></li>*/
/*                       <li><a href="#">Buttons</a></li>*/
/*                       <li><a href="#">Tabs & Accordions</a></li>*/
/*                       <li><a href="#">Typography</a></li>*/
/*                       <li><a href="#">FontAwesome</a></li>*/
/*                       <li><a href="#">Slider</a></li>*/
/*                       <li><a href="#">Panels</a></li>*/
/*                       <li><a href="#">Widgets</a></li>*/
/*                       <li><a href="#">Bootstrap Model</a></li>*/
/*                   </ul>*/
/*                   #}*/
/* */
/*                   <li data-toggle="collapse" data-target="#service" class="collapsed">*/
/*                     <a href="{{path('transaction_list')}}"><i class="fa fa-globe fa-lg"></i> Transaction<span class="arrow"></span></a>*/
/*                   </li>*/
/* */
/*                   <li  data-toggle="collapse" data-target="#products" class="collapsed active">*/
/*                     <a href="{{path('fos_user_security_logout')}}"><i class="fa fa-logut fa-lg"></i>logout<span class="arrow"></span></a>*/
/*                   </li>*/
/*                   {#*/
/*                   <ul class="sub-menu collapse" id="service">*/
/*                     <li>Add New Transaction</li>*/
/*                     <li>Update Transaction</li>*/
/*                     <li></li>*/
/*                   </ul>#}*/
/* */
/*                   {#*/
/*                   <li data-toggle="collapse" data-target="#new" class="collapsed">*/
/*                     <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>*/
/*                   </li>*/
/*                   <ul class="sub-menu collapse" id="new">*/
/*                     <li>New New 1</li>*/
/*                     <li>New New 2</li>*/
/*                     <li>New New 3</li>*/
/*                   </ul>*/
/* */
/* */
/*                    <li>*/
/*                     <a href="#">*/
/*                     <i class="fa fa-user fa-lg"></i> Profile*/
/*                     </a>*/
/*                     </li>*/
/* */
/*                    <li>*/
/*                     <a href="#">*/
/*                     <i class="fa fa-users fa-lg"></i> Users*/
/*                     </a>*/
/*                   </li>#}*/
/*               </ul>*/
/*        </div>*/
/*   </div>*/
/* */
