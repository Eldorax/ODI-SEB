<?php

/* form/fields.html.twig */
class __TwigTemplate_a0c814e78963bcb2f167ddaf3f91a6c09c100ec5a0ec2eaef3a1925e20865e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
            'number_widget' => array($this, 'block_number_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('number_widget', $context, $blocks);
        // line 27
        echo "
";
    }

    // line 10
    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_number_widget($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"number_widget\">
        ";
        // line 23
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 24
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  62 => 23,  59 => 22,  56 => 21,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  31 => 27,  29 => 21,  26 => 20,  24 => 10,  21 => 9,);
    }
}
/* {#*/
/*    Each field type is rendered by a template fragment, which is determined*/
/*    by the name of your form type class (DateTimePickerType -> date_time_picker)*/
/*    and the suffix "_widget". This can be controlled by overriding getBlockPrefix()*/
/*    in DateTimePickerType.*/
/* */
/*    See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field*/
/* #}*/
/* */
/* {% block date_time_picker_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group date" data-toggle="datetimepicker">*/
/*             {{ block('datetime_widget') }}*/
/*             <span class="input-group-addon">*/
/*                 <span class="fa fa-calendar"></span>*/
/*             </span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block number_widget %}*/
/*     <div class="number_widget">*/
/*         {% set type = type|default('number') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     </div>*/
/* {% endblock number_widget %}*/
/* */
/* */
