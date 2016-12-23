<?php

/* admin/personne/list.html.twig */
class __TwigTemplate_8438c347a8491583edd3eb9ec75cbd96621de2c4ff829119a5dcb451300a39b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin/personne/list.html.twig", 1);
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
        echo "   Personnes
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/projet.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<h1><i class=\"fa fa-users fa-lg\"></i> Personnes</h1>

    ";
        // line 14
        if ( !twig_test_empty((isset($context["msg"]) ? $context["msg"] : null))) {
            // line 15
            echo "        <div class='alert alert-success'>
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
                <i class='fa fa-times fa-lg'></i>
            </a>

            ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 23
        echo "    
    ";
        // line 24
        if ((isset($context["personnes"]) ? $context["personnes"] : null)) {
            // line 25
            echo "    <table class=\"table table-striped\" id='tab'>
        <thead>
            <tr>
                <th>Genre</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th><i class=\"fa fa-envelope fa-lg\"></i></th>
                <th>Abonnement</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
                // line 38
                echo "            <tr>
                <td>";
                // line 39
                if (($this->getAttribute($context["personne"], "genre", array()) == "M")) {
                    // line 40
                    echo "                        <i class=\"fa fa-male fa-lg\"></i>
                    ";
                } elseif (($this->getAttribute(                // line 41
$context["personne"], "genre", array()) == "Mme")) {
                    // line 42
                    echo "                        <i class=\"fa fa-female fa-lg\"></i>
                    ";
                } else {
                    // line 44
                    echo "                        <i class=\"fa fa-question-circle-o fa-lg\"></i>
                    ";
                }
                // line 46
                echo "                </td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "nompersonne", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "prenompersonne", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "email", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["personne"], "personneAbonnement", array()), "html", null, true);
                echo "</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updatepersonne", array("nompersonne" => $this->getAttribute($context["personne"], "nompersonne", array()), "prenompersonne" => $this->getAttribute($context["personne"], "prenompersonne", array()))), "html", null, true);
                echo "\" 
                           class=\"btn btn-sm btn-primary\" title=\"modifier\">
                            <i class=\"fa fa-pencil fa-lg\"></i>
                        </a>
                            
                        <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listvoyages", array("nompersonne" => $this->getAttribute($context["personne"], "nompersonne", array()), "prenompersonne" => $this->getAttribute($context["personne"], "prenompersonne", array()))), "html", null, true);
                echo "\" 
                           class=\"btn btn-sm btn-default\" title=\"voyages\" data-toggle=\"modal\" data-target=\"#myModal\">
                            <i class=\"fa fa-plane fa-lg\"></i>
                        </a>    
                    </div>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        </tbody>
    </table>
        
    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
        </div>
      </div>
    </div>
    ";
        } else {
            // line 77
            echo "       Aucune personne dans la base.
    ";
        }
    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tab_personne.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "admin/personne/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 84,  186 => 83,  181 => 82,  178 => 81,  172 => 77,  159 => 66,  145 => 58,  137 => 53,  131 => 50,  127 => 49,  123 => 48,  119 => 47,  116 => 46,  112 => 44,  108 => 42,  106 => 41,  103 => 40,  101 => 39,  98 => 38,  94 => 37,  80 => 25,  78 => 24,  75 => 23,  69 => 20,  62 => 15,  60 => 14,  56 => 12,  53 => 11,  47 => 8,  42 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*    Personnes*/
/* {% endblock %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/projet.css') }}">*/
/* {% endblock %}*/
/*         */
/* {% block body %}*/
/* <h1><i class="fa fa-users fa-lg"></i> Personnes</h1>*/
/* */
/*     {% if msg is not empty %}*/
/*         <div class='alert alert-success'>*/
/*             <a href="#" class="close" data-dismiss="alert" aria-label="close">*/
/*                 <i class='fa fa-times fa-lg'></i>*/
/*             </a>*/
/* */
/*             {{ msg }}*/
/*         </div>*/
/*     {% endif %}*/
/*     */
/*     {% if personnes %}*/
/*     <table class="table table-striped" id='tab'>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Genre</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prénom</th>*/
/*                 <th><i class="fa fa-envelope fa-lg"></i></th>*/
/*                 <th>Abonnement</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for personne in personnes %}*/
/*             <tr>*/
/*                 <td>{% if personne.genre == 'M' %}*/
/*                         <i class="fa fa-male fa-lg"></i>*/
/*                     {% elseif personne.genre =='Mme' %}*/
/*                         <i class="fa fa-female fa-lg"></i>*/
/*                     {% else %}*/
/*                         <i class="fa fa-question-circle-o fa-lg"></i>*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>{{ personne.nompersonne }}</td>*/
/*                 <td>{{ personne.prenompersonne }}</td>*/
/*                 <td>{{ personne.email }}</td>*/
/*                 <td>{{ personne.personneAbonnement }}</td>*/
/*                 <td>*/
/*                     <div class="item-actions">*/
/*                         <a href="{{ path('updatepersonne', { nompersonne: personne.nompersonne, prenompersonne: personne.prenompersonne }) }}" */
/*                            class="btn btn-sm btn-primary" title="modifier">*/
/*                             <i class="fa fa-pencil fa-lg"></i>*/
/*                         </a>*/
/*                             */
/*                         <a href="{{ path('listvoyages', { nompersonne: personne.nompersonne, prenompersonne: personne.prenompersonne }) }}" */
/*                            class="btn btn-sm btn-default" title="voyages" data-toggle="modal" data-target="#myModal">*/
/*                             <i class="fa fa-plane fa-lg"></i>*/
/*                         </a>    */
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         */
/*     <!-- Modal -->*/
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*       <div class="modal-dialog" role="document">*/
/*         <div class="modal-content">*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% else %}*/
/*        Aucune personne dans la base.*/
/*     {% endif %}*/
/* {% endblock %}*/
/*     */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('js/modal.js') }}"></script>*/
/*     <script src="{{ asset('js/tab_personne.js') }}"></script>*/
/* {% endblock %}*/
