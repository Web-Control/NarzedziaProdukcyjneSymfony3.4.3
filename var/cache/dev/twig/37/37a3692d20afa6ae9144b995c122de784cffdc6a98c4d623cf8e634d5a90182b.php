<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3f67232da97bd6186c3c0068372e5df065d17fb0f6f1e7e380d7be4d53204bba extends Twig_Template
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
        $__internal_16e2a4121b0cc7b6366bb1b36669e3313525dd8dfacc49c9222e026d76eae128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e2a4121b0cc7b6366bb1b36669e3313525dd8dfacc49c9222e026d76eae128->enter($__internal_16e2a4121b0cc7b6366bb1b36669e3313525dd8dfacc49c9222e026d76eae128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c53ea9026d7bde0278206400dbdcd8a88e72d1879ba31adafacef032795a494a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53ea9026d7bde0278206400dbdcd8a88e72d1879ba31adafacef032795a494a->enter($__internal_c53ea9026d7bde0278206400dbdcd8a88e72d1879ba31adafacef032795a494a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_16e2a4121b0cc7b6366bb1b36669e3313525dd8dfacc49c9222e026d76eae128->leave($__internal_16e2a4121b0cc7b6366bb1b36669e3313525dd8dfacc49c9222e026d76eae128_prof);

        
        $__internal_c53ea9026d7bde0278206400dbdcd8a88e72d1879ba31adafacef032795a494a->leave($__internal_c53ea9026d7bde0278206400dbdcd8a88e72d1879ba31adafacef032795a494a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
