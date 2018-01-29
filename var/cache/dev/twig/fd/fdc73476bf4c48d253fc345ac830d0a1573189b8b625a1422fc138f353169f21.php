<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d428abc728fc7632698bbf226d2fdc4b0ffe50afa32859bbdbe7dfa08e7b3e8d extends Twig_Template
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
        $__internal_2dae851bc4a0b775c35f412b774035ef90b2f61f40097ee2d127530a42aa788c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dae851bc4a0b775c35f412b774035ef90b2f61f40097ee2d127530a42aa788c->enter($__internal_2dae851bc4a0b775c35f412b774035ef90b2f61f40097ee2d127530a42aa788c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9ea7ae9da74c0c76bdd094903a1a9b07f352072c664067eecbad186d11da3221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea7ae9da74c0c76bdd094903a1a9b07f352072c664067eecbad186d11da3221->enter($__internal_9ea7ae9da74c0c76bdd094903a1a9b07f352072c664067eecbad186d11da3221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2dae851bc4a0b775c35f412b774035ef90b2f61f40097ee2d127530a42aa788c->leave($__internal_2dae851bc4a0b775c35f412b774035ef90b2f61f40097ee2d127530a42aa788c_prof);

        
        $__internal_9ea7ae9da74c0c76bdd094903a1a9b07f352072c664067eecbad186d11da3221->leave($__internal_9ea7ae9da74c0c76bdd094903a1a9b07f352072c664067eecbad186d11da3221_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
