<?php

/* overview.twig */
class __TwigTemplate_9214b5be265f08279df734d600b09ff56c77447113840ff3eadbf2f56a097d9d extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "content")));
        // line 2
        echo "
<div class=\"row-fluid\">
    <div class=\"span9\">

        <h1>
            ";
        // line 7
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "
            <span>";
        // line 8
        if ((array_key_exists("pager", $context) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages") > 1))) {
            // line 9
            echo "                ";
            echo $this->env->getExtension('Bolt')->trans("Showing");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "showing_from"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "showing_to"), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Bolt')->trans("of");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "count"), "html", null, true);
            echo "
            ";
        }
        // line 10
        echo "</span>
        </h1>

        ";
        // line 13
        $context["lastgroup"] = "----";
        // line 14
        echo "
    <table class='dashboardlisting'>

        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 18
            echo "

            ";
            // line 20
            $context["editable"] = $this->env->getExtension('Bolt')->isAllowed("edit", (isset($context["content"]) ? $context["content"] : null));
            // line 21
            echo "            ";
            $template = $this->env->resolveTemplate(array(0 => (("custom/listing/" . twig_lower_filter($this->env, $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name"))) . ".twig"), 1 => "_sub_listing.twig"));
            $template->display(array_merge($context, array("excerptlength" => 380, "thumbsize" => 80, "compact" => false)));
            // line 22
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first") || ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name") != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))))) {
                // line 23
                echo "                ";
                $context["lastgroup"] = $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group"), "name");
                // line 24
                echo "            ";
            }
            // line 25
            echo "
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
            // line 27
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("No %contenttypes% available.", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>

    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "

    </div><!-- /span9 -->

    <aside class=\"span3\">

    <section>
        <h2>";
        // line 38
        echo $this->env->getExtension('Bolt')->trans("Actions for %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
        echo ":</h2>

        <a class=\"btn\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "id" => "")), "html", null, true);
        echo "\">
            <i class=\"icon-plus\"></i> ";
        // line 41
        echo $this->env->getExtension('Bolt')->trans("New %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "
        </a>
        ";
        // line 43
        if (($this->env->getExtension('Bolt')->request("filter") || $this->env->getExtension('Bolt')->request("order"))) {
            // line 44
            echo "        <a class=\"btn\" href=\"?\">";
            echo $this->env->getExtension('Bolt')->trans("Clear sort/filter");
            echo "</a>
        ";
        }
        // line 46
        echo "
        <h2>";
        // line 47
        echo $this->env->getExtension('Bolt')->trans("Filtering:");
        echo "</h2>

        <form class=\"form-inline\">
          <input type=\"text\" class=\"input-small\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->request("filter", "", true), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\">
          <button type=\"submit\" class=\"btn\">";
        // line 51
        echo $this->env->getExtension('Bolt')->trans("Filter");
        echo "</button>
              ";
        // line 52
        if ($this->env->getExtension('Bolt')->request("filter")) {
            echo "<p><a href=\"?\">";
            echo $this->env->getExtension('Bolt')->trans("Clear filter");
            echo "</a></p>";
        }
        // line 53
        echo "        </form>


    </section>

    ";
        // line 58
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"))));
        echo "

    ";
        // line 60
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("showstack", array("items" => 5, "options" => "full")));
        echo "

    </aside>
</div>


";
        // line 66
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 66,  191 => 60,  186 => 58,  179 => 53,  173 => 52,  169 => 51,  165 => 50,  159 => 47,  156 => 46,  150 => 44,  148 => 43,  143 => 41,  139 => 40,  134 => 38,  124 => 31,  120 => 29,  111 => 27,  97 => 25,  94 => 24,  91 => 23,  88 => 22,  84 => 21,  82 => 20,  78 => 18,  60 => 17,  55 => 14,  53 => 13,  48 => 10,  34 => 9,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
