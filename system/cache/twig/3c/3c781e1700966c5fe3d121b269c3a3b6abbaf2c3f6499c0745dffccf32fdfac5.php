<?php

/* admin.dashboard.html.twig */
class __TwigTemplate_466ba98e23086697902433d741271b9620323c25b97b5ddb0e854da504f78dac extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-warning\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Maintenance</h3>
\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<form action=\"?p=dashboard&maintenance\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"status\" class=\"col-sm-2 control-label\">Website:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"status\" name=\"status\">
\t\t\t\t\t\t\t\t\t<option value=\"0\"";
        // line 18
        if ( !(isset($context["is_closed"]) ? $context["is_closed"] : null)) {
            echo " selected";
        }
        echo ">Open</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\"";
        // line 19
        if ((isset($context["is_closed"]) ? $context["is_closed"] : null)) {
            echo " selected";
        }
        echo ">Closed</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"message\" class=\"col-sm-2 control-label\">Message:<br>
\t\t\t\t\t\t\t\t<small>(only if closed)</small>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
                                <textarea name=\"message\" cols=\"40\" class=\"form-control\" rows=\"5\" maxlength=\"255\"
\t\t\t\t\t\t\t\t\t\t  placeholder=\"Enter ...\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["closed_message"]) ? $context["closed_message"] : null), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<a href=\"?p=dashboard&clear_cache\" onclick=\"return confirm('Are you sure?');\"><span
\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger\">Clear cache</span></a>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Update\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 44
        if (twig_test_iterable((isset($context["points"]) ? $context["points"] : null))) {
            // line 45
            echo "\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Top 10 - Most premium points</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>Account ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["account_type"]) ? $context["account_type"] : null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th>Premium points</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 58
            $context["i"] = 0;
            // line 59
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["points"]) ? $context["points"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 60
                echo "\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 61
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "premium_points", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 73
        echo "\t";
        if (twig_test_iterable((isset($context["coins"]) ? $context["coins"] : null))) {
            // line 74
            echo "\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"box\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Top 10 - Most coins</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>Account ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["account_type"]) ? $context["account_type"] : null), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th>Tibia coins</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 87
            $context["i"] = 0;
            // line 88
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coins"]) ? $context["coins"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 89
                echo "\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 90
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "coins", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 102
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "admin.dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 102,  186 => 96,  177 => 93,  173 => 92,  169 => 91,  166 => 90,  163 => 89,  158 => 88,  156 => 87,  150 => 84,  138 => 74,  135 => 73,  127 => 67,  118 => 64,  114 => 63,  110 => 62,  107 => 61,  104 => 60,  99 => 59,  97 => 58,  91 => 55,  79 => 45,  77 => 44,  59 => 29,  44 => 19,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.dashboard.html.twig", "/var/www/html/system/templates/admin.dashboard.html.twig");
    }
}
