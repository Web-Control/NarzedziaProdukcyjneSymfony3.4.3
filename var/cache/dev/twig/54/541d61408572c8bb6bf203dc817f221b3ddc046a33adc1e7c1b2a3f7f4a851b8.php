<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0a05875b8dcd1905ced758d797c16d5bd35942831022184846e48226124ee1f2 extends Twig_Template
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
        $__internal_40a7797a7c5e1cc6d94dbfb76ee771c12711f578a34704d7e9b86a61e9d2bc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a7797a7c5e1cc6d94dbfb76ee771c12711f578a34704d7e9b86a61e9d2bc51->enter($__internal_40a7797a7c5e1cc6d94dbfb76ee771c12711f578a34704d7e9b86a61e9d2bc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_79d0347e0202866c9f9f345e37bbf2cd71a36a68a8a909d23328d3c981f28b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d0347e0202866c9f9f345e37bbf2cd71a36a68a8a909d23328d3c981f28b91->enter($__internal_79d0347e0202866c9f9f345e37bbf2cd71a36a68a8a909d23328d3c981f28b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_40a7797a7c5e1cc6d94dbfb76ee771c12711f578a34704d7e9b86a61e9d2bc51->leave($__internal_40a7797a7c5e1cc6d94dbfb76ee771c12711f578a34704d7e9b86a61e9d2bc51_prof);

        
        $__internal_79d0347e0202866c9f9f345e37bbf2cd71a36a68a8a909d23328d3c981f28b91->leave($__internal_79d0347e0202866c9f9f345e37bbf2cd71a36a68a8a909d23328d3c981f28b91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
