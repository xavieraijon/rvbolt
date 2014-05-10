<?php

/* listing.twig */
class __TwigTemplate_df4299ae26a585fbbe8aa4f5d54e70bc2233ad414f13c38a8bd6df01c9edce50 extends Twig_Template
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
        echo "
<!-- Main Page Content and Sidebar -->

<div class=\"row\">

    <!-- Main Blog Content -->
    <div class=\"eight columns\" role=\"content\">

        ";
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        if (array_key_exists("taxonomytype", $context)) {
            // line 18
            echo "            <h1>
                ";
            // line 19
            echo $this->env->getExtension('Bolt')->trans("Overview for");
            echo "
                ";
            // line 20
            if ($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array(), "any", false, true), (isset($context["slug"]) ? $context["slug"] : null), array(), "array", true, true)) {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options"), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"), "html", null, true);
                echo "
                ";
            } else {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "
                ";
            }
            // line 25
            echo "            </h1>
        ";
        }
        // line 27
        echo "
        ";
        // line 32
        echo "        ";
        if (array_key_exists("search", $context)) {
            // line 33
            echo "            <h1>
                ";
            // line 34
            echo $this->env->getExtension('Bolt')->trans("Search results for <b> %search% </b>.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
            echo "
            </h1>
        ";
        }
        // line 37
        echo "

        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 40
            echo "            <article>

                <h2><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
            echo "</a></h2>

                ";
            // line 44
            if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image") != "")) {
                // line 45
                echo "                    <div class=\"four columns imageholder\">
                        <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image")), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image"), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "introduction")) {
                // line 54
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "introduction"), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser")) {
                // line 56
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser"), "html", null, true);
                echo "
                ";
            } else {
                // line 58
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "excerpt", array(0 => 300), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 60
            echo "
                ";
            // line 61
            $this->env->loadTemplate("_recordfooter.twig")->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
            // line 62
            echo "
            </article>

            <hr>

        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <article>


                ";
            // line 71
            if (array_key_exists("search", $context)) {
                // line 72
                echo "
                    <p>
                        ";
                // line 74
                echo $this->env->getExtension('Bolt')->trans("No results found for '%search%'. Please try another search.", array("%search%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
                echo "
                    </p>

                ";
            } else {
                // line 78
                echo "
                    <h2>No content found.</h2>

                    <p>
                        Unfortunately, no content could be found. Try another page, or go to the
                        <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
                echo "\">homepage</a>.
                    </p>

                ";
            }
            // line 87
            echo "
                ";
            // line 92
            echo "
            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
        ";
        // line 97
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->

    ";
        // line 104
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 105
        echo "
</div>

<!-- End Main Content and Sidebar -->



";
        // line 112
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 112,  232 => 105,  230 => 104,  219 => 97,  216 => 95,  208 => 92,  205 => 87,  198 => 83,  191 => 78,  184 => 74,  180 => 72,  178 => 71,  173 => 68,  155 => 62,  153 => 61,  150 => 60,  144 => 58,  138 => 56,  132 => 54,  129 => 53,  126 => 51,  119 => 47,  115 => 46,  112 => 45,  110 => 44,  103 => 42,  99 => 40,  81 => 39,  77 => 37,  71 => 34,  68 => 33,  65 => 32,  62 => 27,  58 => 25,  52 => 23,  46 => 21,  44 => 20,  40 => 19,  37 => 18,  34 => 17,  31 => 15,  21 => 2,  19 => 1,);
    }
}
