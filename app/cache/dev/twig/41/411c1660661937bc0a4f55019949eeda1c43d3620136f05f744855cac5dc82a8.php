<?php

/* base.html.twig */
class __TwigTemplate_f6a8dbf3a4c20326cd74c28c52c6d917e48af92780a8332a9f0d01feb77a4d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar_left' => array($this, 'block_sidebar_left'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Custom css-->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" >
        <!-- Latest jquery library-->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        <!-- Custom java Script Fucntions-->
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/app.js"), "html", null, true);
        echo "\"></script>
   </head>
    <body>
          <div class=\"container-fluid\">
               <div class=\"row\">
                     <div class=\"col-md-3\">
                          ";
        // line 29
        $this->displayBlock('sidebar_left', $context, $blocks);
        // line 31
        echo "                    </div>
                    <div class=\"col-md-9\">
                          ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "                    </div>
              </div>
          </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 29
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 30
        echo "                          ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  98 => 30,  95 => 29,  90 => 7,  84 => 6,  75 => 34,  73 => 33,  69 => 31,  67 => 29,  58 => 23,  48 => 16,  36 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*         <!-- Custom css-->*/
/*         <link rel="stylesheet" href="{{asset('bundles/app/css/style.css')}}" >*/
/*         <!-- Latest jquery library-->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*         <!-- Custom java Script Fucntions-->*/
/*         <script src="{{asset('bundles/app/js/app.js')}}"></script>*/
/*    </head>*/
/*     <body>*/
/*           <div class="container-fluid">*/
/*                <div class="row">*/
/*                      <div class="col-md-3">*/
/*                           {% block sidebar_left  %}*/
/*                           {% endblock sidebar_left %}*/
/*                     </div>*/
/*                     <div class="col-md-9">*/
/*                           {% block content  %}{% endblock content %}*/
/*                     </div>*/
/*               </div>*/
/*           </div>*/
/*     </body>*/
/* </html>*/
/* */
