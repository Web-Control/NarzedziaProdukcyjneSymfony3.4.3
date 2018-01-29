<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a80ea09f0d34d33f50c2b8156eca3915629f378eba4d6944cc29d814e2c21153 extends Twig_Template
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
        $__internal_39a07937c73f5cbb39ca9c1817517fca50e7001ac04ec27a85489aed4ba5f62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a07937c73f5cbb39ca9c1817517fca50e7001ac04ec27a85489aed4ba5f62e->enter($__internal_39a07937c73f5cbb39ca9c1817517fca50e7001ac04ec27a85489aed4ba5f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_15bc440877b486e326fa43f7ecb8e32078e2bf6fd5f0d5c542a6b649a572c764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bc440877b486e326fa43f7ecb8e32078e2bf6fd5f0d5c542a6b649a572c764->enter($__internal_15bc440877b486e326fa43f7ecb8e32078e2bf6fd5f0d5c542a6b649a572c764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_39a07937c73f5cbb39ca9c1817517fca50e7001ac04ec27a85489aed4ba5f62e->leave($__internal_39a07937c73f5cbb39ca9c1817517fca50e7001ac04ec27a85489aed4ba5f62e_prof);

        
        $__internal_15bc440877b486e326fa43f7ecb8e32078e2bf6fd5f0d5c542a6b649a572c764->leave($__internal_15bc440877b486e326fa43f7ecb8e32078e2bf6fd5f0d5c542a6b649a572c764_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
