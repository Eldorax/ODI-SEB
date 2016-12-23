<?php

/* menu.twig */
class __TwigTemplate_ebb1bdc974c0e82675e61c298ce9e11ceec5263efb24fe219d0d54005ff78a4b extends Twig_Template
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
        echo "<nav class=\"navbar navbar-collapse \">
    <ul class=\"nav nav-pills\">    
        <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li> 

        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">Recherche</a></li> 

        <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sunset", array("longitude" => 20, "latitude" => 40)), "html", null, true);
        echo "\">Sunset</a></li>

        <li class=\"dropdown\">
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("listlieu");
        echo "\" role=\"button\"
               data-toggle=\"dropdown\" 
               class=\"dropdown-toggle\">Personne <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("listpersonne");
        echo "\">Liste</a></li>
                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("addpersonne");
        echo "\">Ajout</a></li>
            </ul>
        </li>

        <li class=\"dropdown\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("listlieu");
        echo "\"  role=\"button\"
               data-toggle=\"dropdown\" 
               class=\"dropdown-toggle\">Lieu <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("listlieu");
        echo "\">Liste</a></li>
                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("addlieu");
        echo "\">Ajout</a></li>
            </ul>
        </li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  65 => 24,  58 => 20,  50 => 15,  46 => 14,  39 => 10,  33 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <nav class="navbar navbar-collapse ">*/
/*     <ul class="nav nav-pills">    */
/*         <li><a href="{{ path('home') }}">Accueil</a></li> */
/* */
/*         <li><a href="{{ path('search') }}">Recherche</a></li> */
/* */
/*         <li><a href="{{ path('sunset', {'longitude': 20, 'latitude': 40}) }}">Sunset</a></li>*/
/* */
/*         <li class="dropdown">*/
/*             <a href="{{ path('listlieu') }}" role="button"*/
/*                data-toggle="dropdown" */
/*                class="dropdown-toggle">Personne <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{{ path('listpersonne') }}">Liste</a></li>*/
/*                 <li><a href="{{ path('addpersonne') }}">Ajout</a></li>*/
/*             </ul>*/
/*         </li>*/
/* */
/*         <li class="dropdown">*/
/*             <a href="{{ path('listlieu') }}"  role="button"*/
/*                data-toggle="dropdown" */
/*                class="dropdown-toggle">Lieu <span class="caret"></span></a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="{{ path('listlieu') }}">Liste</a></li>*/
/*                 <li><a href="{{ path('addlieu') }}">Ajout</a></li>*/
/*             </ul>*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
/* */
