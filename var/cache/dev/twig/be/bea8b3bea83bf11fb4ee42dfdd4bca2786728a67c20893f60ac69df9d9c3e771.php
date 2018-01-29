<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_12578b539e9f6c1173c6256a7d2d44209590d6b3e2b2dd510ee73141041d0d3f extends Twig_Template
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
        $__internal_67969bed2fe5c1d159420979aa99dfe94799ae5cee433ebcfbd6e1f1096d7717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67969bed2fe5c1d159420979aa99dfe94799ae5cee433ebcfbd6e1f1096d7717->enter($__internal_67969bed2fe5c1d159420979aa99dfe94799ae5cee433ebcfbd6e1f1096d7717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f162f28c8637f70fbaab3e7ac36be0eb128f171128fb0ec05955a70a8fc24a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f162f28c8637f70fbaab3e7ac36be0eb128f171128fb0ec05955a70a8fc24a94->enter($__internal_f162f28c8637f70fbaab3e7ac36be0eb128f171128fb0ec05955a70a8fc24a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_67969bed2fe5c1d159420979aa99dfe94799ae5cee433ebcfbd6e1f1096d7717->leave($__internal_67969bed2fe5c1d159420979aa99dfe94799ae5cee433ebcfbd6e1f1096d7717_prof);

        
        $__internal_f162f28c8637f70fbaab3e7ac36be0eb128f171128fb0ec05955a70a8fc24a94->leave($__internal_f162f28c8637f70fbaab3e7ac36be0eb128f171128fb0ec05955a70a8fc24a94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
