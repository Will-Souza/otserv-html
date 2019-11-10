<?php

/* admin.visitors.html.twig */
class __TwigTemplate_be68ebab659e3da9fe65df21cde6a9811783ac927eeb8c437a8eb7864f75fbbc extends Twig_Template
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
        echo "<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Users active within last ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["config_visitors_counter_ttl"]) ? $context["config_visitors_counter_ttl"] : null), "html", null, true);
        echo " minutes.</h3>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table id=\"tb_visitors\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>IP</th>
\t\t\t\t\t\t<th>Last visit</th>
\t\t\t\t\t\t<th>Page</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 17
        $context["i"] = 0;
        // line 18
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visitors"]) ? $context["visitors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 19
            echo "\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 20
            echo "\t\t\t\t\t\t<tr role=\"row\" class=\"odd\">
\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "ip", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visitor"], "lastvisit", array()), "H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "page", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["visitor"], "page", array()), 0, 50), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$(function () {
\t\t\$('#tb_visitors').DataTable()
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin.visitors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  62 => 24,  57 => 22,  53 => 21,  50 => 20,  47 => 19,  42 => 18,  40 => 17,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.visitors.html.twig", "/var/www/html/system/templates/admin.visitors.html.twig");
    }
}
