<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e50e89ffe675fdeb199d22a64eb9ee7f8c2a5ef0ecbb489458430e0b67d74ccb extends Twig_Template
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
        $__internal_8c305c8fe9d489478560e1c26c3a6b40e0a8b01e535d3447b5857bc2388727df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c305c8fe9d489478560e1c26c3a6b40e0a8b01e535d3447b5857bc2388727df->enter($__internal_8c305c8fe9d489478560e1c26c3a6b40e0a8b01e535d3447b5857bc2388727df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1f1147b1ccba4d75ab887c2737e47a3033045c408feaa9c19ce74210b175de1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1147b1ccba4d75ab887c2737e47a3033045c408feaa9c19ce74210b175de1b->enter($__internal_1f1147b1ccba4d75ab887c2737e47a3033045c408feaa9c19ce74210b175de1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8c305c8fe9d489478560e1c26c3a6b40e0a8b01e535d3447b5857bc2388727df->leave($__internal_8c305c8fe9d489478560e1c26c3a6b40e0a8b01e535d3447b5857bc2388727df_prof);

        
        $__internal_1f1147b1ccba4d75ab887c2737e47a3033045c408feaa9c19ce74210b175de1b->leave($__internal_1f1147b1ccba4d75ab887c2737e47a3033045c408feaa9c19ce74210b175de1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
