<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_458235b318b33071a538ce04e223129efa512954b323dab0b3a8914ad9e126ab extends Twig_Template
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
        $__internal_a227ebdc20d2b89880186e0b19922cfff9dc1a1ab8d5c5d3c52e62f0f5e13e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a227ebdc20d2b89880186e0b19922cfff9dc1a1ab8d5c5d3c52e62f0f5e13e1e->enter($__internal_a227ebdc20d2b89880186e0b19922cfff9dc1a1ab8d5c5d3c52e62f0f5e13e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_717a2b56b1afb73c141a67488880881b7c362568a93550d8c80bd4636a97831c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717a2b56b1afb73c141a67488880881b7c362568a93550d8c80bd4636a97831c->enter($__internal_717a2b56b1afb73c141a67488880881b7c362568a93550d8c80bd4636a97831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a227ebdc20d2b89880186e0b19922cfff9dc1a1ab8d5c5d3c52e62f0f5e13e1e->leave($__internal_a227ebdc20d2b89880186e0b19922cfff9dc1a1ab8d5c5d3c52e62f0f5e13e1e_prof);

        
        $__internal_717a2b56b1afb73c141a67488880881b7c362568a93550d8c80bd4636a97831c->leave($__internal_717a2b56b1afb73c141a67488880881b7c362568a93550d8c80bd4636a97831c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
