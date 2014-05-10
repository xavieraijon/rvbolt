<?php

/* _header_basic.twig */
class __TwigTemplate_cd4ac93a74f9731c94c1d59141b2497cbaf5613e72ad5dc01d698ef709a60c0b extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "
        ";
        // line 9
        if (array_key_exists("title", $context)) {
            echo "- ";
            echo twig_escape_filter($this->env, strip_tags((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        }
        // line 10
        echo "    </title>

    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery-1.10.2.min.js\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/underscore-min.js\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/backbone-min.js\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery-ui-1.10.3.custom.min.js\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/smoothness/jquery-ui-1.10.3.custom.min.css\">

    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/jquery.plugins.js\"></script>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bootstrap-responsive.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/font-awesome.min.css\">

    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.pack.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/fancybox/jquery.fancybox.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/select2/select2.css\">
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/select2/select2.min.js\"></script>

    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/ckeditor/ckeditor.js\"></script>

    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.iframe-transport.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/lib/upload/jquery.fileupload-ui.css\">

    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/moment.min.js\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/moment-langs.min.js\"></script>
    <script type=\"text/javascript\">
        moment.lang('";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "');
    </script>

    <script>var ckeditor_lang=\"";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale"), "en")) : ("en")), "html", null, true);
        echo "\";</script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/js/bolt.js\"></script>

    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/css/bolt.css\">

    <link rel=\"shortcut icon\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/favicon-bolt.ico\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-114x114.png\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
        echo "view/img/apple-touch-icon-144x144.png\">

</head>
<body ";
        // line 57
        if (array_key_exists("class", $context)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_header_basic.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 57,  167 => 54,  163 => 53,  159 => 52,  155 => 51,  151 => 50,  146 => 48,  140 => 45,  136 => 44,  130 => 41,  125 => 39,  121 => 38,  116 => 36,  112 => 35,  108 => 34,  103 => 32,  98 => 30,  94 => 29,  89 => 27,  85 => 26,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  58 => 17,  53 => 15,  49 => 14,  65 => 24,  63 => 19,  54 => 16,  52 => 15,  41 => 12,  28 => 8,  24 => 3,  45 => 13,  37 => 10,  32 => 9,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
