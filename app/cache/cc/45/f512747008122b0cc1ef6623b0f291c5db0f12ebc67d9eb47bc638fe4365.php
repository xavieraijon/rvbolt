<?php

/* _nav.twig */
class __TwigTemplate_cc45f512747008122b0cc1ef6623b0f291c5db0f12ebc67d9eb47bc638fe4365 extends Twig_Template
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
        echo "        <nav class=\"navbar\" gumby-fixed=\"top\" id=\"main-nav\">
            <div class=\"row\">
                <!-- Toggle for mobile navigation, targeting the <ul> -->
                <a class=\"toggle\" gumby-trigger=\"#main-nav > .row > ul\" href=\"#\"><i class=\"icon-menu\"></i></a>
                <ul class=\"twelve columns\">
                    <li class=\"skiplink\"><a href=\"#\" gumby-goto=\"top\" gumby-duration=\"2000\">Inicio</a></li>
                    <li class=\"skiplink\"><a href=\"#\" gumby-goto=\"#salon\" gumby-duration=\"2000\">Salón</a></li>
                    <li class=\"skiplink\"><a href=\"#\" gumby-goto=\"#tendencias\" gumby-duration=\"2000\">Tendencias</a></li>
                    <li class=\"skiplink\"><a href=\"#\" gumby-goto=\"#productos\" gumby-duration=\"2000\">Productos</a></li>
                    <li class=\"skiplink\"><a href=\"#\" gumby-goto=\"#contactar\" gumby-duration=\"2000\">Contactar</a></li>
                </ul>           
            </div>
        </nav>";
    }

    public function getTemplateName()
    {
        return "_nav.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
