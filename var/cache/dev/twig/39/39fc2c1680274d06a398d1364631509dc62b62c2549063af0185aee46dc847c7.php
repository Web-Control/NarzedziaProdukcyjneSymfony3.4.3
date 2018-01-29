<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_20425861f47132adc257ebf493848d506df7675517d99887e869f5e631a2ba8e extends Twig_Template
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
        $__internal_9125d071ae80556349cd988c64f49c31f4bb81e1df444481149ad1824600aad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9125d071ae80556349cd988c64f49c31f4bb81e1df444481149ad1824600aad6->enter($__internal_9125d071ae80556349cd988c64f49c31f4bb81e1df444481149ad1824600aad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_16004fe9dcc2d3f19fd8e744386864e797a62a6efc9a085e75b804c5a816a368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16004fe9dcc2d3f19fd8e744386864e797a62a6efc9a085e75b804c5a816a368->enter($__internal_16004fe9dcc2d3f19fd8e744386864e797a62a6efc9a085e75b804c5a816a368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_9125d071ae80556349cd988c64f49c31f4bb81e1df444481149ad1824600aad6->leave($__internal_9125d071ae80556349cd988c64f49c31f4bb81e1df444481149ad1824600aad6_prof);

        
        $__internal_16004fe9dcc2d3f19fd8e744386864e797a62a6efc9a085e75b804c5a816a368->leave($__internal_16004fe9dcc2d3f19fd8e744386864e797a62a6efc9a085e75b804c5a816a368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
