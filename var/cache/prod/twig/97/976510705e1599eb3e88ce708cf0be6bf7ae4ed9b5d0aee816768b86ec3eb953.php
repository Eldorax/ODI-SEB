<?php

/* lieux/list.html.twig */
class __TwigTemplate_39f7d049fe8e3751207a83836acfbd3fd71af5cd78fd7931c2dd374cb4f52c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "lieux/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Lieux
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<h1><i class=\"fa fa-globe fa-lg\"></i> Lieux</h1>

    ";
        // line 13
        if ( !twig_test_empty((isset($context["msg"]) ? $context["msg"] : null))) {
            // line 14
            echo "        <div class='alert alert-success'>
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
                <i class='fa fa-times fa-lg'></i>
            </a>
            ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["lieux"]) ? $context["lieux"] : null)) {
            // line 23
            echo "    <table class=\"table table-striped\" id='tab'>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lieux"]) ? $context["lieux"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 34
                echo "            <tr>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "nom", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "longitude", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "latitude", array()), "html", null, true);
                echo "</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updatelieu", array("nomlieu" => $this->getAttribute($context["lieu"], "nom", array()))), "html", null, true);
                echo "\" 
                           class=\"btn btn-sm btn-primary\" 
                           title=\"modifier\">
                            <i class=\"fa fa-pencil fa-lg\"></i>
                        </a>
                        <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deletelieu", array("nomlieu" => $this->getAttribute($context["lieu"], "nom", array()))), "html", null, true);
                echo "\" 
                           class=\"btn btn-sm btn-danger\"
                           title=\"supprimer\">
                            <i class=\"fa fa-trash fa-lg\"></i> 
                        </a>
                    </div>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 57
            echo "       Aucun lieu dans la base.
    ";
        }
    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tab_lieu.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "lieux/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  145 => 62,  142 => 61,  136 => 57,  131 => 54,  116 => 45,  108 => 40,  102 => 37,  98 => 36,  94 => 35,  91 => 34,  87 => 33,  75 => 23,  73 => 22,  70 => 21,  64 => 18,  58 => 14,  56 => 13,  52 => 11,  49 => 10,  42 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Lieux*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/*         */
/* {% block body %}*/
/* <h1><i class="fa fa-globe fa-lg"></i> Lieux</h1>*/
/* */
/*     {% if msg is not empty %}*/
/*         <div class='alert alert-success'>*/
/*             <a href="#" class="close" data-dismiss="alert" aria-label="close">*/
/*                 <i class='fa fa-times fa-lg'></i>*/
/*             </a>*/
/*             {{ msg }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if lieux %}*/
/*     <table class="table table-striped" id='tab'>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Longitude</th>*/
/*                 <th>Latitude</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for lieu in lieux %}*/
/*             <tr>*/
/*                 <td>{{ lieu.nom }}</td>*/
/*                 <td>{{ lieu.longitude }}</td>*/
/*                 <td>{{ lieu.latitude }}</td>*/
/*                 <td>*/
/*                     <div class="item-actions">*/
/*                         <a href="{{ path('updatelieu', { nomlieu: lieu.nom }) }}" */
/*                            class="btn btn-sm btn-primary" */
/*                            title="modifier">*/
/*                             <i class="fa fa-pencil fa-lg"></i>*/
/*                         </a>*/
/*                         <a href="{{ path('deletelieu', { nomlieu: lieu.nom }) }}" */
/*                            class="btn btn-sm btn-danger"*/
/*                            title="supprimer">*/
/*                             <i class="fa fa-trash fa-lg"></i> */
/*                         </a>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     {% else %}*/
/*        Aucun lieu dans la base.*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('js/tab_lieu.js') }}"></script>*/
/* {% endblock %}*/
/* */
