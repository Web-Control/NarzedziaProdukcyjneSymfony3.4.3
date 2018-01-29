<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6f31eb275bcfe2ff284ee4ce5a897064070e559597f9dbd071c2fb7b99842baf extends Twig_Template
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
        $__internal_20303f553cf761ca9f0fe83081a754d17ef90e9e962cd2c5dd292ed300d5679b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20303f553cf761ca9f0fe83081a754d17ef90e9e962cd2c5dd292ed300d5679b->enter($__internal_20303f553cf761ca9f0fe83081a754d17ef90e9e962cd2c5dd292ed300d5679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ae2e3d41da9db6976d0a0f40a21d99ab8c01667b524ffda6309c3a93d88c475d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2e3d41da9db6976d0a0f40a21d99ab8c01667b524ffda6309c3a93d88c475d->enter($__internal_ae2e3d41da9db6976d0a0f40a21d99ab8c01667b524ffda6309c3a93d88c475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_20303f553cf761ca9f0fe83081a754d17ef90e9e962cd2c5dd292ed300d5679b->leave($__internal_20303f553cf761ca9f0fe83081a754d17ef90e9e962cd2c5dd292ed300d5679b_prof);

        
        $__internal_ae2e3d41da9db6976d0a0f40a21d99ab8c01667b524ffda6309c3a93d88c475d->leave($__internal_ae2e3d41da9db6976d0a0f40a21d99ab8c01667b524ffda6309c3a93d88c475d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
