<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_34ae3fe40e13f0d75d580d9e4a2cfd8f48fcc702f37c327e35635305b5750c0f extends Twig_Template
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
        $__internal_a23a085740af2bfce4f2313a5a4476964a0b96b835fb53f07c2686f7972528c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23a085740af2bfce4f2313a5a4476964a0b96b835fb53f07c2686f7972528c0->enter($__internal_a23a085740af2bfce4f2313a5a4476964a0b96b835fb53f07c2686f7972528c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_af360ac951894165ed7bfb923c01445fec985487f8009a1c25f49c8449d9b98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af360ac951894165ed7bfb923c01445fec985487f8009a1c25f49c8449d9b98e->enter($__internal_af360ac951894165ed7bfb923c01445fec985487f8009a1c25f49c8449d9b98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a23a085740af2bfce4f2313a5a4476964a0b96b835fb53f07c2686f7972528c0->leave($__internal_a23a085740af2bfce4f2313a5a4476964a0b96b835fb53f07c2686f7972528c0_prof);

        
        $__internal_af360ac951894165ed7bfb923c01445fec985487f8009a1c25f49c8449d9b98e->leave($__internal_af360ac951894165ed7bfb923c01445fec985487f8009a1c25f49c8449d9b98e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
