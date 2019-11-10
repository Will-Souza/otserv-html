<?php

/* admin.menus.js.html.twig */
class __TwigTemplate_8f4d11d6a959c4240587d8f5f6613a4d8a9130fcb99fd97540f40e535df32f44 extends Twig_Template
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
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/css/jquery-ui.min.css\">
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/js/jquery-ui.min.js\"></script>
<script>
\tvar last_id = [];
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["cat"] => $context["menu"]) {
            // line 6
            echo "\tlast_id[";
            echo twig_escape_filter($this->env, $context["cat"], "html", null, true);
            echo "] = ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["last_id"]) ? $context["last_id"] : null), $context["cat"], array(), "array"), "html", null, true);
            echo ";
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\$(function () {
\t\t\$(\".sortable\").sortable();
\t\t\$(\".sortable\").disableSelection();

\t\t\$(\".remove-button\").click(function () {
\t\t\tvar id = \$(this).attr(\"id\");
\t\t\t\$('#list-' + id.replace('remove-button-', '')).remove();
\t\t});

\t\t\$(\".add-button\").click(function () {
\t\t\tvar cat = \$(this).attr(\"id\").replace('add-button-', '');
\t\t\tvar id = last_id[cat];
\t\t\tlast_id[cat]++;
\t\t\t\$('#sortable-' + cat).append('<li class=\"ui-state-default\" id=\"list-' + cat + '-' + id + '\"><label>Name:</label><input type=\"text\" name=\"menu[' + cat + '][]\" value=\"\"/> <label>Link:</label><input type=\"text\" name=\"menu_link[' + cat + '][]\" value=\"\"/><input type=\"hidden\" name=\"menu_blank[' + cat + '][]\" value=\"0\" /> <label><input class=\"blank-checkbox\" type=\"checkbox\"/><span title=\"Open in New Window\">Open in New Window</span></label> <input class=\"color-picker\" type=\"text\" name=\"menu_color[' + cat + '][]\" value=\"#ffffff\" /><a class=\"remove-button\" id=\"remove-button-' + cat + '-' + id + '\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "images/del.png\"/></a></li>'); //add input bo
\t\t\t\$('#remove-button-' + cat + '-' + id).click(function () {
\t\t\t\t\$('#list-' + \$(this).attr(\"id\").replace('remove-button-', '')).remove();
\t\t\t});

\t\t\tinitialiceSpectrum();
\t\t});

\t\t\$(\"#menus-form\").submit(function (e) {
\t\t\t\$('.blank-checkbox:not(:checked)').each(function (i, obj) {
\t\t\t\t\$(obj).parent().prev().val(\"off\");
\t\t\t});

\t\t\t\$('.blank-checkbox:checked').each(function (i, obj) {
\t\t\t\t\$(obj).parent().prev().val(\"on\");
\t\t\t});
\t\t});

\t});
</script>
<style type=\"text/css\">
\t.sortable {
\t\tlist-style-type: none;
\t\tmargin: 0;
\t\tpadding: 0;
\t\twidth: 100%;
\t}

\t.remove-button, .add-button {
\t\tcursor: pointer;
\t}
</style>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/js/spectrum.js\"></script>
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/css/spectrum.css\"/>
<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\tinitialiceSpectrum();
\t});

\tfunction initialiceSpectrum() {
\t\t\$(\".color-picker\").spectrum({
\t\t\tpreferredFormat: \"hex\",
\t\t\tshowInput: true,
\t\t\tshowPalette: true,
\t\t\tpalette: [
\t\t\t\t['black', 'white', 'blanchedalmond',
\t\t\t\t\t'rgb(255, 128, 0);', 'hsv 100 70 50'],
\t\t\t\t['red', 'yellow', 'green', 'blue', 'violet']
\t\t\t]
\t\t});
\t}
</script>";
    }

    public function getTemplateName()
    {
        return "admin.menus.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 54,  95 => 53,  60 => 21,  45 => 8,  34 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.menus.js.html.twig", "/var/www/html/system/templates/admin.menus.js.html.twig");
    }
}
