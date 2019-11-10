<?php

/* admin.statistics.html.twig */
class __TwigTemplate_4b97b18c1feda1fd7b7be53b9912458a29151680d9a43f4d2cbe27afc424ebae extends Twig_Template
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
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-aqua\"><i class=\"ion ion-person-add\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total accounts:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["total_accounts"]) ? $context["total_accounts"] : null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-red\"><i class=\"fa fa-male\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total players:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["total_players"]) ? $context["total_players"] : null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"clearfix visible-sm-block\"></div>
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-green\"><i class=\"ion ion-pie-graph\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total guilds:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["total_guilds"]) ? $context["total_guilds"] : null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t<div class=\"info-box\">
\t\t\t<span class=\"info-box-icon bg-yellow\"><i class=\"fa fa-home\"></i></span>
\t\t\t<div class=\"info-box-content\">
\t\t\t\t<span class=\"info-box-text\">Total houses:</span>
\t\t\t\t<span class=\"info-box-number\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["total_houses"]) ? $context["total_houses"] : null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 35,  52 => 26,  39 => 16,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.statistics.html.twig", "/var/www/html/system/templates/admin.statistics.html.twig");
    }
}
