<?php

/* admin/personne/voyage.html.twig */
class __TwigTemplate_7f9c429f8f89dbf21bb3838e5822f13a55aed8e1096be8c6347eea3a1f541376 extends Twig_Template
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
        echo "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <i class='fa fa-close fa-lg' aria-hidden=\"true\"></i>
    </button>
    <h1 class=\"modal-title\" id=\"myModalLabel\"><i class=\"fa fa-plane fa-lg\"></i> Liste des voyages</h1>
</div>
<div class=\"modal-body\">
    ";
        // line 8
        if ((isset($context["personne"]) ? $context["personne"] : null)) {
            // line 9
            echo "        <div class=\"alert alert-info\">
            ";
            // line 10
            if (($this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "genre", array()) == "M")) {
                // line 11
                echo "                <i class=\"fa fa-male fa-lg\"></i>
            ";
            } elseif (($this->getAttribute(            // line 12
(isset($context["personne"]) ? $context["personne"] : null), "genre", array()) == "Mme")) {
                // line 13
                echo "                <i class=\"fa fa-female fa-lg\"></i>
            ";
            } else {
                // line 15
                echo "                <i class=\"fa fa-question-circle-o fa-lg\"></i>
            ";
            }
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "prenompersonne", array()), "html", null, true);
            echo "
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "nompersonne", array()), "html", null, true);
            echo "
        </div>

        ";
            // line 21
            if ( !$this->getAttribute($this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "voyage", array()), "empty", array())) {
                // line 22
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["personne"]) ? $context["personne"] : null), "voyage", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                    // line 23
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lieu"], "nom", array()), "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    // line 24
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        ";
            } else {
                // line 26
                echo "            Aucun voyage.    
        ";
            }
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        Aucune information pour cette personne.
    ";
        }
        // line 31
        echo "</div>
<div class=\"modal-footer\">
    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/personne/voyage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  109 => 29,  106 => 28,  102 => 26,  99 => 25,  85 => 24,  79 => 23,  61 => 22,  59 => 21,  53 => 18,  48 => 17,  44 => 15,  40 => 13,  38 => 12,  35 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="modal-header">*/
/*     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*         <i class='fa fa-close fa-lg' aria-hidden="true"></i>*/
/*     </button>*/
/*     <h1 class="modal-title" id="myModalLabel"><i class="fa fa-plane fa-lg"></i> Liste des voyages</h1>*/
/* </div>*/
/* <div class="modal-body">*/
/*     {% if personne %}*/
/*         <div class="alert alert-info">*/
/*             {% if personne.genre == 'M' %}*/
/*                 <i class="fa fa-male fa-lg"></i>*/
/*             {% elseif personne.genre =='Mme' %}*/
/*                 <i class="fa fa-female fa-lg"></i>*/
/*             {% else %}*/
/*                 <i class="fa fa-question-circle-o fa-lg"></i>*/
/*             {% endif %}*/
/*             {{ personne.prenompersonne }}*/
/*             {{ personne.nompersonne }}*/
/*         </div>*/
/* */
/*         {% if not personne.voyage.empty %}*/
/*             {% for lieu in personne.voyage %}*/
/*                 {{ lieu.nom }}{% if not loop.last %},{% endif %}*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             Aucun voyage.    */
/*         {% endif %}*/
/*     {% else %}*/
/*         Aucune information pour cette personne.*/
/*     {% endif %}*/
/* </div>*/
/* <div class="modal-footer">*/
/*     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>*/
/* </div>*/
