<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_057fd96f4c4f70718795b3438c121e5106fdf92611d5b2d0ecf51ec91f78baed extends Twig_Template
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
        $__internal_53b1268e05a19f3df43b1eab85bef9a0f7bcce50124fab9e04e18b5cb8e638c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b1268e05a19f3df43b1eab85bef9a0f7bcce50124fab9e04e18b5cb8e638c0->enter($__internal_53b1268e05a19f3df43b1eab85bef9a0f7bcce50124fab9e04e18b5cb8e638c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d933d7aa64c3e928a0898c0cad9cd8c4b5585d34f498c03ec19fc979f3c43015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d933d7aa64c3e928a0898c0cad9cd8c4b5585d34f498c03ec19fc979f3c43015->enter($__internal_d933d7aa64c3e928a0898c0cad9cd8c4b5585d34f498c03ec19fc979f3c43015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_53b1268e05a19f3df43b1eab85bef9a0f7bcce50124fab9e04e18b5cb8e638c0->leave($__internal_53b1268e05a19f3df43b1eab85bef9a0f7bcce50124fab9e04e18b5cb8e638c0_prof);

        
        $__internal_d933d7aa64c3e928a0898c0cad9cd8c4b5585d34f498c03ec19fc979f3c43015->leave($__internal_d933d7aa64c3e928a0898c0cad9cd8c4b5585d34f498c03ec19fc979f3c43015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
