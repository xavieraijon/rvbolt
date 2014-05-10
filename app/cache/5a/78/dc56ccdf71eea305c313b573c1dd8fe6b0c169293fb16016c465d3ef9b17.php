<?php

/* index.twig */
class __TwigTemplate_5a78dc56ccdf71eea305c313b573c1dd8fe6b0c169293fb16016c465d3ef9b17 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "    ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['home'] =         $template_storage->getContent("page/1", array (
) );
        // line 3
        echo "    <div class=\"parallax\" gumby-parallax=\"0.5\" gumby-offset=\"400\" id=\"home\" data-target=\"home\">
        <div class=\"top-wrap\">
            <div class=\"row\">
                <div class=\"logo\">
                    ";
        // line 8
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image")), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        ";
        // line 14
        $this->env->loadTemplate("_nav.twig")->display($context);
        // line 15
        echo "
        <div class=\"row\">
            <div class=\"content first\">
                <blockquote>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "cita"), "html", null, true);
        echo "</blockquote>
            </div>
        </div>
    </div>
    <div class=\"parallax\" gumby-parallax=\".4\" gumby-offset=\"100\" id=\"salon\" data-target=\"salon\">
        <div class=\"row\">
            <div class=\"four columns content text-center\">
                <h1>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "titulo_salon"), "html", null, true);
        echo "</h1>
                <div class=\"content-box text-left\">
                    <div class=\"scroll-content\">
                        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "texto_salon"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"parallax\" gumby-parallax=\".4\" gumby-offset=\"100\" id=\"tendencias\" data-target=\"tendencias\">
        <div class=\"row\">
            <div class=\"content\">
                <h1 class=\"white\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "titulo_tendencias"), "html", null, true);
        echo "</h1>
                <div class=\"content-box\">
                    <div class=\"scroll-content\">
                        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "texto_tendencias"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"parallax\" gumby-parallax=\".4\" gumby-offset=\"100\" id=\"productos\" data-target=\"productos\">
        <div class=\"row\">
            <div class=\"content\">
                <h1>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "titulo_productos"), "html", null, true);
        echo "</h1>
                <div class=\"content-box\">
                    <div class=\"scroll-content\">
                        ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "texto_productos"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"parallax\" gumby-parallax=\".4\" gumby-offset=\"100\" id=\"contactar\" data-target=\"contactar\">
        <div class=\"row\">
            <div class=\"content\">
                <h1 class=\"text-white\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "titulo_contactar"), "html", null, true);
        echo "</h1>            
                <div class=\"content-box\">
                    <div class=\"row\">
                        <div class=\"six columns\">
                            <ul>
                                <li><strong>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "telefono"), "html", null, true);
        echo "</strong>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"mailto:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "email"), "html", null, true);
        echo "</a></li>
                                <li>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "direccion"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "ciudad"), "html", null, true);
        echo "</li>
                            </ul>
                            <form action=\"\" class=\"mb0\">
                                <ul class=\"row metro\">
                                    <li class=\"field\"><input type=\"text\" name=\"name\" class=\"input\" placeholder=\"Nombre y Apellidos...\"></li>
                                    <li class=\"field\"><input type=\"email\" name=\"email\" class=\"input\" placeholder=\"Email...\"></li>
                                    <li class=\"field\"><input type=\"text\" name=\"phone\" class=\"input\" placeholder=\"Teléfono...\"></li>
                                    <li class=\"field\"><textarea name=\"comments\" class=\"input textarea\" placeholder=\"Comentarios...\"></textarea></li>
                                    <li class=\"field\">
                                        <div class=\"right medium danger btn\">
                                            <button type=\"submit\">ENVIAR</button>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class=\"six columns\">
                            <img width=\"100%\" height=\"100%\" src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mapa_contactar"), "latitude"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mapa_contactar"), "longitude"), "html", null, true);
        echo "&zoom=15&size=430x350&sensor=false&markers=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mapa_contactar"), "latitude"), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mapa_contactar"), "longitude"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        // line 91
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 91,  151 => 84,  129 => 67,  121 => 66,  113 => 61,  101 => 52,  95 => 49,  83 => 40,  77 => 37,  65 => 28,  59 => 25,  49 => 18,  44 => 15,  42 => 14,  32 => 8,  26 => 3,  21 => 2,  19 => 1,);
    }
}
