<?php

/* menu.js.html.twig */
class __TwigTemplate_63fd02968d1ea3b24f6f584639761394307c5242b539a495447765232a17eb3e extends Twig_Template
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
        echo "var list = new Array();
";
        // line 2
        $context["i"] = 0;
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 4
            echo "\t";
            if ((($this->getAttribute($context["cat"], "id", array()) != "shops") || $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "gifts_system", array()))) {
                // line 5
                echo "\tlist[";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "] = '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                echo "';
\t";
            }
            // line 7
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
function initMenu()
{
\tvar length = list.length;
\tfor(i = 0; i < length; i++)
\t{
\t\tif(list[i] == category)
\t\t{
\t\t\tdocument.getElementById(list[i]).className = 'tab-active';
\t\t\tdocument.getElementById(list[i] + \"-submenu\").style.display = 'block';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById(list[i]).className = 'tab';
\t\t\tdocument.getElementById(list[i] + \"-submenu\").style.display = 'none';
\t\t}
\t}
}

function menuSwitch(cat)
{
\tcategory = cat;
\tinitMenu();
}
";
    }

    public function getTemplateName()
    {
        return "menu.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  39 => 7,  31 => 5,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu.js.html.twig", "/var/www/html/templates/kathrine/menu.js.html.twig");
    }
}
