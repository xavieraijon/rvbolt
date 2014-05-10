<?php

/* _sub_lastmodified.twig */
class __TwigTemplate_4a2c70ad8821e674bd8340eea2b5363d420681793e9cd9123b87e7dc20d2047d extends Twig_Template
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
        $context["pretty"] = $this->env->loadTemplate("_sub_pretty.twig");
        // line 2
        echo "<section>
    <h2>
    ";
        // line 4
        if ((array_key_exists("filtered", $context) && (isset($context["filtered"]) ? $context["filtered"] : null))) {
            // line 5
            echo "        ";
            echo "Recent modifications";
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("Last modified %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
            echo "
    ";
        }
        // line 9
        echo "    </h2>
    <ul>
    ";
        // line 11
        if (array_key_exists("changelog", $context)) {
            // line 12
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["changelog"]) ? $context["changelog"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 13
                echo "            <li>
                ";
                // line 14
                if ((array_key_exists("filtered", $context) && (isset($context["filtered"]) ? $context["filtered"] : null))) {
                    // line 15
                    echo "                    ";
                    $context["title"] = $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name");
                    // line 16
                    echo "                ";
                } else {
                    // line 17
                    echo "                    ";
                    if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title")) {
                        // line 18
                        echo "                        ";
                        $context["title"] = $context["pretty"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid"));
                        // line 19
                        echo "                    ";
                    } else {
                        // line 20
                        echo "                        ";
                        $context["title"] = $this->env->getExtension('Bolt')->trans("%name% № %id%", array("%name%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name"), "%id%" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid")));
                        // line 21
                        echo "                    ";
                    }
                    // line 22
                    echo "                    № ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid"), "html", null, true);
                    echo ".
                ";
                }
                // line 24
                echo "               ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
               ";
                // line 25
                echo $context["pretty"]->getchangelogmutation($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "effectiveMutationType"));
                echo "
               ";
                // line 26
                echo $this->env->getExtension('Bolt')->trans("by");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "username"), "html", null, true);
                echo "
               <small>(";
                // line 27
                echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "date"));
                echo ")</small>
               <small><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changelogdetails", array("contenttype" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "contentid" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid"), "id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"))), "html", null, true);
                echo "\">view</a></small>
            </li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "            <li><em>";
                echo $this->env->getExtension('Bolt')->trans("No latest %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
                echo ".</em></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latest"]) ? $context["latest"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 35
                echo "            <li>
               № ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
                echo ".
               ";
                // line 37
                echo $context["pretty"]->getcontentlink((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["content"]) ? $context["content"] : null));
                echo "
               <small>(";
                // line 38
                echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"));
                echo ")</small>
            </li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 41
                echo "            <li><em>";
                echo $this->env->getExtension('Bolt')->trans("No latest %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
                echo ".</em></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
        }
        // line 44
        echo "    </ul>
    ";
        // line 45
        if (((array_key_exists("changelog", $context) && (isset($context["contentid"]) ? $context["contentid"] : null)) && (isset($context["filtered"]) ? $context["filtered"] : null))) {
            // line 46
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changeloglist", array("contenttype" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "contentid" => (isset($context["contentid"]) ? $context["contentid"] : null))), "html", null, true);
            echo "\">
            ";
            // line 47
            echo $this->env->getExtension('Bolt')->trans("Full list...");
            echo "
        </a>
    ";
        }
        // line 50
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "_sub_lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 50,  164 => 46,  162 => 45,  147 => 41,  131 => 36,  122 => 34,  119 => 33,  110 => 31,  102 => 28,  98 => 27,  92 => 26,  83 => 24,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  45 => 12,  43 => 11,  39 => 9,  27 => 5,  155 => 55,  146 => 52,  137 => 50,  135 => 37,  132 => 47,  128 => 35,  126 => 44,  123 => 42,  107 => 40,  103 => 39,  100 => 38,  96 => 36,  75 => 28,  73 => 27,  67 => 24,  58 => 19,  50 => 16,  46 => 14,  42 => 12,  40 => 11,  37 => 10,  33 => 7,  29 => 6,  25 => 4,  200 => 66,  191 => 60,  186 => 58,  179 => 53,  173 => 52,  169 => 47,  165 => 50,  159 => 44,  156 => 43,  150 => 44,  148 => 53,  143 => 41,  139 => 38,  134 => 38,  124 => 31,  120 => 29,  111 => 27,  97 => 25,  94 => 35,  91 => 33,  88 => 25,  84 => 31,  82 => 30,  78 => 18,  60 => 20,  55 => 18,  53 => 17,  48 => 10,  34 => 9,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
