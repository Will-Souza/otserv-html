<?php

/* admin.plugins.form.html.twig */
class __TwigTemplate_9cd90124ca13e588d3b65020eeb5ca1fe2f5cbc06f52c094c41c7e53fcde0688 extends Twig_Template
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
\t<div class=\"col-md-3\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Install plugin:</h3>
\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
        echo "?p=plugins\">
\t\t\t\t\t<input type=\"hidden\" name=\"upload_plugin\"/>
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputFile\">File input</label>
\t\t\t\t\t\t\t<input type=\"file\" name=\"plugin\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Upload</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.plugins.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.plugins.form.html.twig", "/var/www/html/system/templates/admin.plugins.form.html.twig");
    }
}
