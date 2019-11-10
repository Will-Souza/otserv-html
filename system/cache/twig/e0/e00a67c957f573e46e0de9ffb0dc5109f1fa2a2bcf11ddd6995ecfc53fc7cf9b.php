<?php

/* admin.pages.html.twig */
class __TwigTemplate_c70297f67b04354b4838a9e041fa0bd575d809f76f01a968d98f6df6c616a936 extends Twig_Template
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
\t\t<h3 class=\"box-title\">Pages:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=pages&action=new\"><span class=\"btn btn-success\">New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table id=\"tb_pages\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 22
            echo $this->getAttribute($context["page"], "link", array());
            echo "</td>
\t\t\t\t\t\t\t<td><i>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</i></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=pages&action=edit&id=";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-success btn-sm edit btn-flat\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-edit\"></i></span></a>
\t\t\t\t\t\t\t\t<a href=\"?p=pages&action=delete&id=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" class=\"ico\"
\t\t\t\t\t\t\t\t   onclick=\"return confirm('Are you sure?');\" title=\"Delete\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-danger btn-sm delete btn-flat\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-trash\"></i></span></a>
\t\t\t\t\t\t\t\t<a href=\"?p=pages&action=hide&id=";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" class=\"ico\"
\t\t\t\t\t\t\t\t   title=\"";
            // line 33
            if (($this->getAttribute($context["page"], "hidden", array()) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 34
            if (($this->getAttribute($context["page"], "hidden", array()) != 1)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm btn-flat\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-eye\"></i></span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm btn-flat\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-eye-slash\"></i></span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script>
\t\$(function () {
\t\t\$('#tb_pages').DataTable()
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "admin.pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 45,  93 => 41,  88 => 38,  83 => 35,  81 => 34,  73 => 33,  69 => 32,  62 => 28,  56 => 25,  51 => 23,  47 => 22,  44 => 21,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.pages.html.twig", "/var/www/html/system/templates/admin.pages.html.twig");
    }
}
