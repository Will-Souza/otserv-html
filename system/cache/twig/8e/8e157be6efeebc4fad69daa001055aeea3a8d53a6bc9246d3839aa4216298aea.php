<?php

/* admin.news.html.twig */
class __TwigTemplate_4a55613e47b22909a8931e2e4bff9eecbe12dee5e2205bfc86bc28e28cf8c886 extends Twig_Template
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
\t\t<h3 class=\"box-title\">News:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=1\"><span class=\"btn btn-success\">New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["newses"]) ? $context["newses"] : null), twig_constant("NEWS"), array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 23
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 24
            echo $this->getAttribute($context["news"], "id", array());
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["news"], "date", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "news_date_format", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "player_link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "player_name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if (($this->getAttribute($context["news"], "hidden", array()) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 42
            if (($this->getAttribute($context["news"], "hidden", array()) != 1)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Tickers:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=2\"><span class=\"btn btn-success\">New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["newses"]) ? $context["newses"] : null), twig_constant("TICKER"), array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["ticker"]) {
            // line 84
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 85
            echo $this->getAttribute($context["ticker"], "id", array());
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "title", array()), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticker"], "date", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "news_date_format", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "player_link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "player_name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticker"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "hidden", array()) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 103
            if (($this->getAttribute($context["ticker"], "hidden", array()) != 1)) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticker'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"box\">
\t<div class=\"box-header\">
\t\t<h3 class=\"box-title\">Articles:</h3>
\t\t<div class=\"box-tools pull-right\">
\t\t\t<a href=\"?p=news&action=new&type=3\"><span class=\"btn btn-success\">New</span></a>
\t\t</div>
\t</div>
\t<div class=\"box-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<table class=\"tb_datatable\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t<th>Title</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Player</th>
\t\t\t\t\t\t<th style=\"width: 150px;\">Options</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["newses"]) ? $context["newses"] : null), twig_constant("ARTICLE"), array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 145
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 146
            echo $this->getAttribute($context["article"], "id", array());
            echo "</td>
\t\t\t\t\t\t\t<td><i><a href=\"?p=news&action=edit&id=";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></i></td>
\t\t\t\t\t\t\t<td>";
            // line 148
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "news_date_format", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "player_link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "player_name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=edit&id=";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-success btn-sm edit btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=delete&id=";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" onclick=\"return confirm('Are you sure?');\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t<span class=\"btn btn-danger btn-sm delete btn-flat\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"?p=news&action=hide&id=";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" class=\"ico\" title=\"";
            if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "hidden", array()) != 1)) {
                echo "Hide";
            } else {
                echo "Show";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 162
            if (($this->getAttribute($context["article"], "hidden", array()) != 1)) {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-default btn-sm btn-flat\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye-slash\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\t\$(function () {
\t    \$('.tb_datatable').DataTable({
\t        \"order\": [[ 0, \"desc\" ]]
\t    });
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "admin.news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 175,  328 => 171,  322 => 167,  316 => 163,  314 => 162,  304 => 161,  296 => 156,  288 => 151,  281 => 149,  277 => 148,  271 => 147,  267 => 146,  264 => 145,  260 => 144,  230 => 116,  221 => 112,  215 => 108,  209 => 104,  207 => 103,  197 => 102,  188 => 96,  179 => 90,  172 => 88,  168 => 87,  162 => 86,  158 => 85,  155 => 84,  151 => 83,  121 => 55,  112 => 51,  106 => 47,  100 => 43,  98 => 42,  88 => 41,  79 => 35,  70 => 29,  63 => 27,  59 => 26,  53 => 25,  49 => 24,  46 => 23,  42 => 22,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.news.html.twig", "/var/www/html/system/templates/admin.news.html.twig");
    }
}
