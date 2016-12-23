<?php

/* lieux/form.twig */
class __TwigTemplate_99b1c7e564513423fee585c501e38b73fba18cdb64632154af58e77f539d62c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "lieux/form.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "    Coordonnées
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
    <h1><i class=\"fa fa-map-marker fa-lg\"></i> Lieu</h1>

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    
    <div class=\"form-group\">
        <div class=\"col-sm-2\"></div>
        <div class=\"col-sm-10\">
            <button type=\"submit\" id=\"lieu_save\" class=\"btn-default btn\">
                enregistrer</button>
        </div>
    </div>
        
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    
";
    }

    public function getTemplateName()
    {
        return "lieux/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  53 => 13,  49 => 12,  45 => 11,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Coordonnées*/
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/*     */
/*     <h1><i class="fa fa-map-marker fa-lg"></i> Lieu</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     {{ form_widget(form) }}*/
/*     */
/*     <div class="form-group">*/
/*         <div class="col-sm-2"></div>*/
/*         <div class="col-sm-10">*/
/*             <button type="submit" id="lieu_save" class="btn-default btn">*/
/*                 enregistrer</button>*/
/*         </div>*/
/*     </div>*/
/*         */
/*     {{ form_end(form) }}*/
/*     */
/* {% endblock %}*/
/* */
