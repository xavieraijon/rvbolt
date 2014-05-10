<?php

/* _header.twig */
class __TwigTemplate_c5397b5efe1029301d18713f16c6cabf3b62af9374e96898030eed66b1df710b extends Twig_Template
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
        echo "<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class=\"no-js ie6 oldie\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js ie7 oldie\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js ie8 oldie\" lang=\"en\"> <![endif]-->
<!--[if IE 9]>    <html class=\"no-js ie9\" lang=\"en\"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class=\"no-js\" lang=\"en\" itemscope itemtype=\"http://schema.org/Product\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
             More info: h5bp.com/b/378 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">

    <title>RickyVerona</title>
    <meta name=\"description\" content=\"\" />
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"author\" content=\"humans.txt\">

    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "favicon.png\" type=\"image/x-icon\" />

    <!-- Facebook Metadata /-->
    <meta property=\"fb:page_id\" content=\"\" />
    <meta property=\"og:image\" content=\"\" />
    <meta property=\"og:description\" content=\"\"/>
    <meta property=\"og:title\" content=\"\"/>

    <!-- Google+ Metadata /-->
    <meta itemprop=\"name\" content=\"\">
    <meta itemprop=\"description\" content=\"\">
    <meta itemprop=\"image\" content=\"\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1\">

    <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
         However, there is a blank style.css in the css directory should you prefer -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "css/gumby.css\">
    <!-- <link rel=\"stylesheet\" href=\"css/style.css\"> -->

    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/modernizr-2.6.2.min.js\"></script>
</head>

<body>";
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
        return array (  67 => 41,  61 => 38,  41 => 21,  19 => 1,);
    }
}
