<?php

/* layout.html.twig */
class __TwigTemplate_5544aebd5b4eb54dff8bc1a1e0f49b7d05e8ea79bb3497099714d2ecd9df396f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <header>
            <div class=\"container-fluid\">
                ";
        // line 17
        $this->loadTemplate("menu.twig", "layout.html.twig", 17)->display($context);
        // line 18
        echo "            </div>
        </header>
        <section class=\"container\">
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </section>

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/DataTables/datatables.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/normalize.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/projet.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jQuery-2.2.3/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/jquery-sizzle/src/sizzle.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/highlight.pack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Momentjs/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-datetime.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/DataTables/datatables.min.js"), "html", null, true);
        echo "\"></script>
     ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  101 => 25,  98 => 24,  93 => 21,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  70 => 7,  67 => 6,  62 => 5,  56 => 32,  54 => 24,  50 => 22,  48 => 21,  43 => 18,  41 => 17,  35 => 13,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/DataTables/datatables.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/normalize.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/projet.css') }}">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <div class="container-fluid">*/
/*                 {% include 'menu.twig' %}*/
/*             </div>*/
/*         </header>*/
/*         <section class="container">*/
/*             {% block body %}{% endblock %}*/
/*         </section>*/
/* */
/*     {% block javascripts %}*/
/*         <script src="{{ asset('bundles/jQuery-2.2.3/jquery-2.2.3.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/jquery-sizzle/src/sizzle.js') }}"></script>*/
/*         <script src="{{ asset('bundles/highlight.pack.js') }}"></script>*/
/*         <script src="{{ asset('bundles/Momentjs/moment.min.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap-datetime.js') }}"></script>*/
/*         <script src="{{ asset('bundles/DataTables/datatables.min.js') }}"></script>*/
/*      {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
