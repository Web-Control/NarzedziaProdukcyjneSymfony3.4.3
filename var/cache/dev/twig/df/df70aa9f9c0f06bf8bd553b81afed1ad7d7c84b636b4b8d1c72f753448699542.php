<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b3c721221b590bc6ff7906c3f841c758d56c085b6fa2b9f997e202488bda381d extends Twig_Template
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
        $__internal_ac92d55cb51ae61eb21b13210407064c9c8657e766551e53c3f8721d56464484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac92d55cb51ae61eb21b13210407064c9c8657e766551e53c3f8721d56464484->enter($__internal_ac92d55cb51ae61eb21b13210407064c9c8657e766551e53c3f8721d56464484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_523bbf3e6e0cc9da84d8e3636b0f36d16977ddbdc3ab15c487865e36a5249d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523bbf3e6e0cc9da84d8e3636b0f36d16977ddbdc3ab15c487865e36a5249d0c->enter($__internal_523bbf3e6e0cc9da84d8e3636b0f36d16977ddbdc3ab15c487865e36a5249d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ac92d55cb51ae61eb21b13210407064c9c8657e766551e53c3f8721d56464484->leave($__internal_ac92d55cb51ae61eb21b13210407064c9c8657e766551e53c3f8721d56464484_prof);

        
        $__internal_523bbf3e6e0cc9da84d8e3636b0f36d16977ddbdc3ab15c487865e36a5249d0c->leave($__internal_523bbf3e6e0cc9da84d8e3636b0f36d16977ddbdc3ab15c487865e36a5249d0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
