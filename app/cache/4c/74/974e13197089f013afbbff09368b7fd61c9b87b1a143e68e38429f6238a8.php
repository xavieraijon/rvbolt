<?php

/* editcontent.twig */
class __TwigTemplate_4c74974e13197089f013afbbff09368b7fd61c9b87b1a143e68e38429f6238a8 extends Twig_Template
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
        $context["pretty"] = $this->env->loadTemplate("_sub_pretty.twig");
        // line 3
        echo "
<div class=\"row-fluid\">
    <div class=\"span9\">

    <h1>";
        // line 7
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>

    <form method=\"post\" id=\"editcontent\" enctype=\"multipart/form-data\">

        ";
        // line 11
        $this->env->loadTemplate("_sub_editfields.twig")->display($context);
        // line 12
        echo "
        <hr>

        ";
        // line 15
        $this->env->loadTemplate("_sub_editrelations.twig")->display($context);
        // line 16
        echo "
        ";
        // line 17
        $this->env->loadTemplate("_sub_edittaxonomies.twig")->display($context);
        // line 18
        echo "
        <h3>
            ";
        // line 20
        echo $this->env->getExtension('Bolt')->trans("Meta information");
        echo "
        </h3>

        <label><b><span class='left'>Id (№)</span></b>
        <input type='text' readonly=readonly name='id' value='";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
        echo "' class=\"narrow\">
        </label>

        ";
        // line 27
        $context["can_publish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug")) . ":publish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id")));
        // line 28
        echo "
        <label><b><span class='left'>";
        // line 29
        echo $this->env->getExtension('Bolt')->trans("Publication date:");
        echo "</span></b>
        </label>
        <input type=\"text\" name=\"datepublish-dateformatted\" id=\"datepublish-date\"
               ";
        // line 32
        if ((!(isset($context["can_publish"]) ? $context["can_publish"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 33
        echo "               value='";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "l, d F Y"), "html", null, true);
        echo "' class='datepicker'>
        <input type=\"text\" name=\"datepublish-timeformatted\" id=\"datepublish-time\"
               ";
        // line 35
        if ((!(isset($context["can_publish"]) ? $context["can_publish"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 36
        echo "               value='";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "H:i"), "html", null, true);
        echo "' class='timepicker'>
        <input type=\"hidden\" name=\"datepublish\" id=\"datepublish\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish"), "html", null, true);
        echo "\">
        ";
        // line 38
        if ($this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug")) . ":publish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id")))) {
            // line 39
            echo "        <script>
            \$('#datepublish-date, #datepublish-time').on('change', function(){
                var date = \$('#datepublish-date').datepicker(\"getDate\");
                var time = \$('#datepublish-time').val() + \":00\";
                \$('#datepublish').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
            });
        </script>
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        $context["can_depublish"] = $this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug")) . ":depublish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id")));
        // line 49
        echo "
        <label><b><span class='left'>";
        // line 50
        echo $this->env->getExtension('Bolt')->trans("Depublication date:");
        echo "</span></b>
        </label>
        <input type=\"text\" name=\"datedepublish-dateformatted\" id=\"datedepublish-date\"
               ";
        // line 53
        if ((!(isset($context["can_depublish"]) ? $context["can_depublish"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 54
        echo "               value='";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datedepublish") > "1970-01-01 01:01:01")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datedepublish"), "l, d F Y"), "html", null, true);
        }
        echo "' class='datepicker'>
        <input type=\"text\" name=\"datedepublish-timeformatted\" id=\"datedepublish-time\"
               ";
        // line 56
        if ((!(isset($context["can_depublish"]) ? $context["can_depublish"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 57
        echo "               value='";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datedepublish") > "1970-01-01 01:01:01")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datedepublish"), "H:i"), "html", null, true);
        }
        echo "' class='timepicker'>
        <input type=\"hidden\" name=\"datedepublish\" id=\"datedepublish\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datedepublish"), "html", null, true);
        echo "\">
        ";
        // line 59
        if ($this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug")) . ":depublish:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id")))) {
            // line 60
            echo "        <script>
            \$('#datedepublish-date, #datedepublish-time').on('change', function(){
                var date = \$('#datedepublish-date').datepicker(\"getDate\");
                var time = \$('#datedepublish-time').val() + \":00\";
                \$('#datedepublish').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
            });
        </script>
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated") > "1970-01-01 01:01:01")) {
            // line 70
            echo "        <p>";
            echo $this->env->getExtension('Bolt')->trans("This %contenttype% was created", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
            echo "
            <time class=\"moment\" datetime=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated"), "html", null, true);
            echo "</time>
            ";
            // line 72
            echo $this->env->getExtension('Bolt')->trans("and edited");
            echo "
            <time class=\"moment\" datetime=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "html", null, true);
            echo "</time>.
            ";
        }
        // line 74
        echo "</p>

        <label><b><span class='left'>";
        // line 76
        echo $this->env->getExtension('Bolt')->trans("Status:");
        echo "</span></b>
        <select name=\"status\" ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["allowedStatuses"]) ? $context["allowedStatuses"] : null)) <= 1)) {
            echo "disabled=\"disabled\"";
        }
        echo " >
            ";
        // line 78
        $context["status_names"] = array("published" => "Published", "held" => "Not published", "timed" => "Timed publish", "draft" => "Draft");
        // line 79
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allowedStatuses"]) ? $context["allowedStatuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 80
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status") == (isset($context["status"]) ? $context["status"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), (isset($context["status"]) ? $context["status"] : null), array(), "array"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </select>
        </label>

        <label><b><span class='left'>";
        // line 85
        echo $this->env->getExtension('Bolt')->trans("Owner:");
        echo "</span></b>
        <select name=\"ownerid\" ";
        // line 86
        if ((!$this->env->getExtension('Bolt')->isAllowed(((("contenttype:" . $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug")) . ":change-owner:") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))))) {
            echo "disabled=\"disabled\"";
        }
        echo ">
            ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 88
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id") == $this->getAttribute((isset($context["contentowner"]) ? $context["contentowner"] : null), "id"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </select>
        </label>


        <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\" style=\"margin-right: 8px;\">
            <i class=\"icon-flag\"></i> ";
        // line 95
        echo $this->env->getExtension('Bolt')->trans("Save %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "
        </button>

        <button type=\"button\" class=\"btn\" id=\"previewbutton\">
            <i class=\"icon-external-link\"></i> ";
        // line 99
        echo $this->env->getExtension('Bolt')->trans("Preview");
        echo "
        </button>

        <button type=\"submit\" class=\"btn \" id=\"savebutton\" style=\"margin-right: 8px;\">
            <i class=\"icon-flag\"></i> ";
        // line 103
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
        </button>

        <p class=\"lastsaved\" style=\"margin-top: 12px;\">
            ";
        // line 107
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id") != 0)) {
            // line 108
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt')->localedatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "%b %e, %H:%M");
            echo "</strong> <small>(";
            echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"));
            echo ")</small></p>
        ";
        } else {
            // line 110
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("This %contenttype% has not been saved yet.", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
            echo "
        ";
        }
        // line 112
        echo "        </p>

    </form>

    </div><!-- /span9 -->
    <aside class=\"span3\">

    <section>
    <h2>";
        // line 120
        echo $this->env->getExtension('Bolt')->trans("Actions for this %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "</h2>

    <button type=\"button\" class=\"btn btn-primary\" id=\"sidebarsavecontinuebutton\" style=\"margin-right: 8px;\">
        <i class=\"icon-flag\"></i> ";
        // line 123
        echo $this->env->getExtension('Bolt')->trans("Save %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "
    </button>

    <button type=\"button\" class=\"btn\" id=\"sidebarpreviewbutton\">
        <i class=\"icon-external-link\"></i> ";
        // line 127
        echo $this->env->getExtension('Bolt')->trans("Preview");
        echo "
    </button>

    <button type=\"submit\" class=\"btn \" id=\"sidebarsavebutton\" style=\"margin-right: 8px;\">
        <i class=\"icon-flag\"></i> ";
        // line 131
        echo $this->env->getExtension('Bolt')->trans("Save & return to overview");
        echo "
    </button>

    <p class=\"lastsaved\">
        ";
        // line 135
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id") != 0)) {
            // line 136
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("Saved on:");
            echo " <strong>";
            echo $this->env->getExtension('Bolt')->localedatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"), "%b %e, %H:%M");
            echo "</strong> <small>(";
            echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"));
            echo ")</small></p>
        ";
        } else {
            // line 138
            echo "            ";
            echo $this->env->getExtension('Bolt')->trans("This %contenttype% has not been saved yet.", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
            echo "
        ";
        }
        // line 140
        echo "    </p>

<script type=\"text/javascript\">
    \$(function() {

        // Save the page..
        \$('#sidebarsavebutton').bind('click', function(e){
            \$('#savebutton').trigger('click');
        });
        \$('#savebutton').bind('click', function(e){
            // Re-set the changes to the form..
            \$('form').watchChanges();
        });

        // To preview the page, we set the target of the form to a new URL, and open it in a new window.
        \$('#previewbutton, #sidebarpreviewbutton').bind('click', function(e){
            e.preventDefault();
            var newaction = \"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root"), "html", null, true);
        echo "\" + \"preview\" + \"/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_slug"), "html", null, true);
        echo "\";
            \$('#editcontent').attr('action', newaction).attr('target', \"_blank\").submit();
            \$('#editcontent').attr('action', '').attr('target', \"_self\");
        });

        // Clicking the 'save & continue' button either triggers an 'ajaxy' post, or a regular
        // post which returns to this page. The latter happens if the record doesn't exist yet, so it doesn't
        // have an id yet.
        \$('#sidebarsavecontinuebutton, #savecontinuebutton').bind('click', function(e){
            e.preventDefault();

            var newrecord = ";
        // line 168
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id") != 0)) {
            echo "false";
        } else {
            echo "true";
        }
        echo ";

            // Disable the buttons, to indicate stuff is being done.
            \$('#sidebarsavecontinuebutton, #savecontinuebutton').addClass('disabled');

            \$('p.lastsaved').text('";
        // line 173
        echo $this->env->getExtension('Bolt')->trans("Saving…");
        echo "');

            if (newrecord) {

                // Re-set the changes to the form..
                \$('form').watchChanges();

                // New record.. do a regular post, and expect to be redirected back to this page.
                var newaction = \"?returnto=\" + \$(this).attr('id');
                \$('#editcontent').attr('action', newaction).submit();
            } else {
                // Existing record. Do an 'ajaxy' post to update the record.

                // Re-set the changes to the form..
                \$('form').watchChanges();

                \$.post(\"\", \$( \"#editcontent\" ).serialize() )
                    .done(function( data ) {
                        // var message = \"";
        // line 191
        echo $this->env->getExtension('Bolt')->trans("The changes to this %contenttype% have been saved.", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name")));
        echo "\";
                        \$('p.lastsaved').html('";
        // line 192
        echo $this->env->getExtension('Bolt')->trans("Saved on:");
        echo " <strong></strong> <small>(";
        echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"));
        echo ")</small></p>');
                        \$('p.lastsaved').find('strong').text(moment().format('MMM D, HH:mm'));
                        \$('p.lastsaved').find('time').attr('datetime', moment().format());
                        \$('p.lastsaved').find('time').attr('title', moment().format());
                        updateMoments();

                        // Disable the buttons, to indicate stuff is being done.
                        \$('#sidebarsavecontinuebutton, #savecontinuebutton').removeClass('disabled');

                    });
            }

        });

    });
</script>

    </section>

    ";
        // line 211
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("lastmodified", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "contentid" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"))));
        echo "

    ";
        // line 213
        echo $this->env->getExtension('silex')->render($this->env, $this->env->getExtension('routing')->getPath("showstack", array("items" => 5, "options" => "full")));
        echo "


    </aside>
</div>


";
        // line 220
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 220,  469 => 213,  464 => 211,  440 => 192,  436 => 191,  415 => 173,  403 => 168,  387 => 157,  368 => 140,  362 => 138,  352 => 136,  350 => 135,  343 => 131,  336 => 127,  329 => 123,  323 => 120,  313 => 112,  307 => 110,  297 => 108,  295 => 107,  288 => 103,  281 => 99,  274 => 95,  267 => 90,  252 => 88,  248 => 87,  242 => 86,  238 => 85,  233 => 82,  218 => 80,  213 => 79,  211 => 78,  205 => 77,  201 => 76,  197 => 74,  188 => 73,  184 => 72,  176 => 71,  171 => 70,  169 => 69,  166 => 68,  156 => 60,  154 => 59,  150 => 58,  143 => 57,  139 => 56,  131 => 54,  127 => 53,  121 => 50,  118 => 49,  116 => 48,  113 => 47,  103 => 39,  101 => 38,  97 => 37,  92 => 36,  88 => 35,  82 => 33,  78 => 32,  72 => 29,  69 => 28,  67 => 27,  61 => 24,  54 => 20,  50 => 18,  48 => 17,  45 => 16,  43 => 15,  38 => 12,  36 => 11,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
