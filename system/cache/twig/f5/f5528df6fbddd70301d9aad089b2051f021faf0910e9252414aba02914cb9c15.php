<?php

/* lastkills.html.twig */
class __TwigTemplate_411f220f46365c52a90de273ea1b8fb8f1ed87f4b50e4d9e1ebbf5c527fbe1c5 extends Twig_Template
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
        echo "<div class=\"TableContainer\" >
\t<table class=\"Table1\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t<div class=\"CaptionContainer\" >
\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t<div class=\"Text\" >Last Kills</div>
\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t</div>
\t\t</div>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t\t\t\t";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["lastkills"]) ? $context["lastkills"] : null)) <= 0)) {
            // line 21
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tNo one died on ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lua", array()), "serverName", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        } else {
            // line 24
            echo "\t
\t\t\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lastkills"]) ? $context["lastkills"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lastkill"]) {
                // line 26
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"centralizeContent\" width=\"30\">
\t\t\t\t\t\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["lastkill"], "id", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"125\">
\t\t\t\t\t\t\t\t\t<small>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["lastkill"], "date", array()), "j.m.Y, G:i:s"), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 34
                echo $this->getAttribute($context["lastkill"], "killers_string", array());
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                // line 36
                if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "multiworld", array())) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lastkill"], "world_id", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>";
    }

    public function getTemplateName()
    {
        return "lastkills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  121 => 43,  114 => 41,  108 => 38,  105 => 37,  103 => 36,  98 => 34,  92 => 31,  86 => 28,  82 => 26,  78 => 25,  75 => 24,  69 => 22,  66 => 21,  64 => 20,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lastkills.html.twig", "/var/www/html/system/templates/lastkills.html.twig");
    }
}
