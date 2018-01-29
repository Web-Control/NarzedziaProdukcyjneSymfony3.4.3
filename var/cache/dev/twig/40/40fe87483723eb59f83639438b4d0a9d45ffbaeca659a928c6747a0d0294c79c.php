<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c4a50551a4b7046045ec4d969f5895ea1b3ad16fc3baf7ccafba6ba395ed6f7d extends Twig_Template
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
        $__internal_c3e130a4cff3ed1a663805995d045453607eb5230639ea7fcc17ac01d2fd1e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e130a4cff3ed1a663805995d045453607eb5230639ea7fcc17ac01d2fd1e1a->enter($__internal_c3e130a4cff3ed1a663805995d045453607eb5230639ea7fcc17ac01d2fd1e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2e0aea0a9c9eadabe7ddfc5fa698841832799c16bd66e4624dc9b06d3bf00636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0aea0a9c9eadabe7ddfc5fa698841832799c16bd66e4624dc9b06d3bf00636->enter($__internal_2e0aea0a9c9eadabe7ddfc5fa698841832799c16bd66e4624dc9b06d3bf00636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c3e130a4cff3ed1a663805995d045453607eb5230639ea7fcc17ac01d2fd1e1a->leave($__internal_c3e130a4cff3ed1a663805995d045453607eb5230639ea7fcc17ac01d2fd1e1a_prof);

        
        $__internal_2e0aea0a9c9eadabe7ddfc5fa698841832799c16bd66e4624dc9b06d3bf00636->leave($__internal_2e0aea0a9c9eadabe7ddfc5fa698841832799c16bd66e4624dc9b06d3bf00636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
