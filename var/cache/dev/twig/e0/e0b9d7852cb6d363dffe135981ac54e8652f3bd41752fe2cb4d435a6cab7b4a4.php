<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d7c9841e33d27822315b0d77d96384d940b2fa010c7b0c041b18b2b395210632 extends Twig_Template
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
        $__internal_54399d5c0d2b0c101cf59a252815ff4d4b9106d7cf9b4ed61806e66a14bf3bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54399d5c0d2b0c101cf59a252815ff4d4b9106d7cf9b4ed61806e66a14bf3bde->enter($__internal_54399d5c0d2b0c101cf59a252815ff4d4b9106d7cf9b4ed61806e66a14bf3bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_66b2088e0f98238bb7c9b0d545e4d6b648beb54a3aae2f5e1ed55cd23d2c6bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b2088e0f98238bb7c9b0d545e4d6b648beb54a3aae2f5e1ed55cd23d2c6bfc->enter($__internal_66b2088e0f98238bb7c9b0d545e4d6b648beb54a3aae2f5e1ed55cd23d2c6bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_54399d5c0d2b0c101cf59a252815ff4d4b9106d7cf9b4ed61806e66a14bf3bde->leave($__internal_54399d5c0d2b0c101cf59a252815ff4d4b9106d7cf9b4ed61806e66a14bf3bde_prof);

        
        $__internal_66b2088e0f98238bb7c9b0d545e4d6b648beb54a3aae2f5e1ed55cd23d2c6bfc->leave($__internal_66b2088e0f98238bb7c9b0d545e4d6b648beb54a3aae2f5e1ed55cd23d2c6bfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
