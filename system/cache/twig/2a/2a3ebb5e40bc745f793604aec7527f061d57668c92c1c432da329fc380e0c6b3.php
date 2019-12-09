<?php

/* /gesior-shop-system/show-history.html.twig */
class __TwigTemplate_797883c4acb1d0164e01272521879aa54920e3c6c647f0458e990c1bde56a58f extends Twig_Template
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
        echo "<div style=\"text-align: center\"><h1>Transactions History</h1></div>

<h2>Item transactions</h2>
<table border=0 cellpadding=\"1\" cellspacing=\"1\" width=100%>
\t<tr bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t<td>
\t\t\t<b>To:</b>
\t\t</td>
\t\t<td>
\t\t\t<b>From:</b>
\t\t</td>
\t\t<td>
\t\t\t<b>Offer name</b>
\t\t</td>
\t\t<td>
\t\t\t<b>Bought on page</b>
\t\t</td>
\t\t<td>
\t\t\t<b>Received on OTS</b>
\t\t</td>
\t</tr>

\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items_history"]) ? $context["items_history"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item_received"]) {
            if ( !twig_test_empty((isset($context["items_history"]) ? $context["items_history"] : null))) {
                // line 24
                echo "\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
                echo "\">
\t\t\t<td>
\t\t\t\t<span style=\"color: ";
                // line 26
                if (((isset($context["logged_id"]) ? $context["logged_id"] : null) == $this->getAttribute($context["item_received"], "to_account", array(), "array"))) {
                    echo "green";
                } else {
                    echo "red";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item_received"], "to_name", array()), "html", null, true);
                echo "</span>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 29
                if (((isset($context["logged_id"]) ? $context["logged_id"] : null) == $this->getAttribute($context["item_received"], "from_account", array()))) {
                    // line 30
                    echo "\t\t\t\t\t<i>Your account</i>
\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item_received"], "from_nick", array()), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item_received"], "item_name", array()), "name", array()), "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item_received"], "trans_start", array()), "j F Y, H:i:s"), "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 42
                if (($this->getAttribute($context["item_received"], "trans_real", array()) && ($this->getAttribute($context["item_received"], "trans_real", array()) > 0))) {
                    // line 43
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item_received"], "trans_real", array()), "j F Y, H:i:s"), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t<span style=\"color: red\">Not realized yet.</span>
\t\t\t\t";
                }
                // line 47
                echo "\t\t\t</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 50
            echo "\t\t<tr>
\t\t\t<td colspan=\"5\">
\t\t\t\tThere wasn't item transactions yet.
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item_received'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</table>

<h2>PACC transactions</h2>
<table border=0 cellpadding=\"1\" cellspacing=\"1\" width=100%>
\t<tr bgcolor=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t<td>
\t\t\t<b>To:</b>
\t\t</td>
\t\t<td>
\t\t\t<b>From:</b>
\t\t</td>
\t\t<td>
\t\t\t<b>Duration</b>
\t\t</td>
\t\t<td>
\t\t\t<b>Cost</b>
\t\t</td>
\t\t<td>
\t\t\t<b>Added</b>
\t\t</td>
\t</tr>

\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paccs_history"]) ? $context["paccs_history"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pacc_received"]) {
            if ( !twig_test_empty((isset($context["paccs_history"]) ? $context["paccs_history"] : null))) {
                // line 79
                echo "\t\t<tr bgcolor=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "lightborder", array()), "html", null, true);
                echo "\">
\t\t\t<td>
\t\t\t\t<span style=\"color: ";
                // line 81
                if (((isset($context["logged_id"]) ? $context["logged_id"] : null) == $this->getAttribute($context["pacc_received"], "to_account", array(), "array"))) {
                    echo "green";
                } else {
                    echo "red";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pacc_received"], "to_name", array()), "html", null, true);
                echo "</span>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 84
                if (((isset($context["logged_id"]) ? $context["logged_id"] : null) == $this->getAttribute($context["pacc_received"], "from_account", array()))) {
                    // line 85
                    echo "\t\t\t\t\t<i>Your account</i>
\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pacc_received"], "from_nick", array()), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 89
                echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pacc_received"], "pacc", array()), "days", array()), "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["pacc_received"], "price", array()), "html", null, true);
                echo " Points
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 97
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pacc_received"], "trans_real", array()), "j F Y, H:i:s"), "html", null, true);
                echo "
\t\t\t</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 101
            echo "\t\t<tr>
\t\t\t<td colspan=\"5\">
\t\t\t\tThere wasn't paccs transactions yet.
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacc_received'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "/gesior-shop-system/show-history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 107,  218 => 101,  208 => 97,  202 => 94,  196 => 91,  192 => 89,  186 => 87,  182 => 85,  180 => 84,  168 => 81,  162 => 79,  156 => 78,  135 => 60,  129 => 56,  118 => 50,  110 => 47,  106 => 45,  100 => 43,  98 => 42,  92 => 39,  86 => 36,  82 => 34,  76 => 32,  72 => 30,  70 => 29,  58 => 26,  52 => 24,  46 => 23,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/gesior-shop-system/show-history.html.twig", "/var/www/html/system/templates/gesior-shop-system/show-history.html.twig");
    }
}
