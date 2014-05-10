<?php

/* _sub_taxonomylinks.twig */
class __TwigTemplate_b44e6d9b30bd968b105023f1b23495394b4b0140f25c30649321fca920961014 extends Twig_Template
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
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array(), "any", true, true)) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy"));
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
            foreach ($context['_seq'] as $context["type"] => $context["values"]) {
                // line 3
                echo "        <em>
        ";
                // line 4
                if ((twig_length_filter($this->env, (isset($context["values"]) ? $context["values"] : null)) < 2)) {
                    // line 5
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "singular_name"), "html", null, true);
                    echo ":
        ";
                } else {
                    // line 7
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "name"), "html", null, true);
                    echo ":
        ";
                }
                // line 9
                echo "        </em>
        ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
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
                foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                    // line 11
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                        echo ", ";
                    }
                    // line 12
                    echo "        ";
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
                    // line 13
                    echo "            ";
                    echo $this->env->getExtension('Bolt')->trans("none");
                    echo "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "        ";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo " - ";
                }
                // line 16
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  108 => 15,  86 => 12,  59 => 10,  56 => 9,  50 => 7,  42 => 4,  39 => 3,  38 => 9,  35 => 8,  29 => 5,  24 => 4,  22 => 3,  241 => 112,  232 => 105,  230 => 104,  219 => 97,  216 => 95,  208 => 92,  205 => 87,  198 => 83,  191 => 78,  184 => 74,  180 => 72,  178 => 71,  173 => 68,  155 => 62,  153 => 61,  150 => 60,  144 => 58,  138 => 56,  132 => 54,  129 => 53,  126 => 51,  119 => 47,  115 => 46,  112 => 45,  110 => 44,  103 => 42,  99 => 13,  81 => 39,  77 => 11,  71 => 34,  68 => 33,  65 => 32,  62 => 27,  58 => 25,  52 => 23,  46 => 21,  44 => 5,  40 => 19,  37 => 18,  34 => 17,  31 => 15,  21 => 2,  19 => 1,);
    }
}
