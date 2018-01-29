<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_91b4b33a8d56ac8295cc0d637773a2d242d2b31d62b769568e0934ddb51eb391 extends Twig_Template
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
        $__internal_83168ae27a171a5a993ce60ebcbb81ee493f5369f88fbcfab3d2a5cc8af04359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83168ae27a171a5a993ce60ebcbb81ee493f5369f88fbcfab3d2a5cc8af04359->enter($__internal_83168ae27a171a5a993ce60ebcbb81ee493f5369f88fbcfab3d2a5cc8af04359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9a919c062271b3c560e8c1431f8f0800bd16e6e950382e04b41c5d61db167b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a919c062271b3c560e8c1431f8f0800bd16e6e950382e04b41c5d61db167b2b->enter($__internal_9a919c062271b3c560e8c1431f8f0800bd16e6e950382e04b41c5d61db167b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_83168ae27a171a5a993ce60ebcbb81ee493f5369f88fbcfab3d2a5cc8af04359->leave($__internal_83168ae27a171a5a993ce60ebcbb81ee493f5369f88fbcfab3d2a5cc8af04359_prof);

        
        $__internal_9a919c062271b3c560e8c1431f8f0800bd16e6e950382e04b41c5d61db167b2b->leave($__internal_9a919c062271b3c560e8c1431f8f0800bd16e6e950382e04b41c5d61db167b2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
