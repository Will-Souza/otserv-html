<?php

/* admin.items.html.twig */
class __TwigTemplate_1137ab1f68681f4e1f9ec356940119a6b83f709e19880708266567b097968961 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
        echo "?p=items\">
\t<input type=\"hidden\" name=\"reload\" value=\"1\"/>
\t<input type=\"submit\" value=\"Reload items and weapons (it may take some time to finish)\"/>
</form>";
    }

    public function getTemplateName()
    {
        return "admin.items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.items.html.twig", "/var/www/html/system/templates/admin.items.html.twig");
    }
}
