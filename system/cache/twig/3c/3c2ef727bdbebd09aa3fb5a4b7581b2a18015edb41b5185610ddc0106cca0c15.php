<?php

/* lastlogin.html.twig */
class __TwigTemplate_7b3f59b97167e9270b8015b1257e47d5baed260ea676b10d41c880027496db62 extends Twig_Template
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
        if (twig_test_iterable((isset($context["players"]) ? $context["players"] : null))) {
            // line 2
            echo "\t<div class=\"col-md-3\">
\t\t<div class=\"box\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3 class=\"box-title\">Last 10 Logins</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body no-padding\">
\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th>Login Date</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            // line 15
            $context["i"] = 0;
            // line 16
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 17
                echo "\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "lastlogin", array()), "M d Y, H:i:s"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "lastlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  57 => 21,  53 => 20,  49 => 19,  46 => 18,  43 => 17,  38 => 16,  36 => 15,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "lastlogin.html.twig", "/var/www/html/system/pages/admin/modules/templates/lastlogin.html.twig");
    }
}
