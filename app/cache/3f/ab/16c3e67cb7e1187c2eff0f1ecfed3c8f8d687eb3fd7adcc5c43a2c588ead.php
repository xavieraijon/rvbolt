<?php

/* _header.twig */
class __TwigTemplate_3fab16c3e67cb7e1187c2eff0f1ecfed3c8f8d687eb3fd7adcc5c43a2c588ead extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->htmllang(), "html", null, true);
        echo "\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    ";
        // line 12
        echo "    <title>
      ";
        // line 13
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title")), "html", null, true);
            echo " | ";
        }
        // line 14
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "
      ";
        // line 15
        if (((!$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 16
        echo "    </title>

    <link href='http://fonts.googleapis.com/css?family=Alegreya:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    ";
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "stylesheets/foundation.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "stylesheets/app.css\">

    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/modernizr.foundation.js\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/jquery-1.10.2.min.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/jquery.foundation.topbar.js\"></script>

    ";
        // line 30
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "javascripts/app.js\"></script>

</head>
<body>

";
        // line 42
        echo "
<div class=\"container\">

    <!-- Positioning the Top Bar -->

    <nav class=\"top-bar\">
        <ul>
            <li class=\"name\"><h1><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</a></h1></li>
            <li class=\"toggle-topbar\"><a href=\"#\"></a></li>
        </ul>
        <section>

            <ul class=\"right\">

                ";
        // line 59
        echo "                ";
        echo $this->env->getExtension('Bolt')->menu($this->env, "main", "_sub_menu.twig");
        echo "

                ";
        // line 63
        echo "                ";
        $this->env->loadTemplate("_sub_searchbox.twig")->display($context);
        // line 64
        echo "
            </ul>

        </section>
    </nav>

    <!-- Header bar -->

    <div class=\"headerphoto\">
        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "theme/base-2013/images/header_3.jpg\" width=\"1200\" height=\"350\" />
        ";
        // line 75
        echo "        <p><span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "</span>
            ";
        // line 76
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method")) {
            // line 77
            echo "                <br><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/payoff"), "method"), "html", null, true);
            echo "</small>
            ";
        }
        // line 79
        echo "        </p>
    </div>

    <!-- End header -->
";
    }

    public function getTemplateName()
    {
        return "_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 79,  158 => 77,  156 => 76,  151 => 75,  115 => 49,  106 => 42,  98 => 33,  88 => 30,  83 => 26,  79 => 25,  75 => 24,  70 => 22,  65 => 21,  60 => 16,  45 => 13,  42 => 12,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  194 => 91,  185 => 84,  182 => 83,  173 => 75,  170 => 74,  157 => 67,  150 => 65,  147 => 73,  140 => 60,  136 => 64,  133 => 63,  131 => 57,  127 => 59,  122 => 54,  116 => 53,  111 => 47,  104 => 42,  101 => 39,  95 => 37,  93 => 31,  90 => 35,  84 => 33,  78 => 31,  72 => 29,  69 => 28,  66 => 26,  59 => 22,  55 => 15,  52 => 20,  50 => 14,  47 => 18,  41 => 16,  38 => 15,  33 => 14,  21 => 2,  19 => 1,);
    }
}
