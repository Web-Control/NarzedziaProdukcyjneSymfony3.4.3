<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_072d892dc2028d8769ef8a0105d1954d01b46d8e7caf4b18670b072601f0c10b extends Twig_Template
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
        $__internal_0f6ecd418ff9fc5b0888c13db2ff0c4a0da4474c955420f5904d2fe8f93df112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6ecd418ff9fc5b0888c13db2ff0c4a0da4474c955420f5904d2fe8f93df112->enter($__internal_0f6ecd418ff9fc5b0888c13db2ff0c4a0da4474c955420f5904d2fe8f93df112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_198a6d5283e256514965c11b194d57b66a5e1c756750e6093d6b5acd855d1af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198a6d5283e256514965c11b194d57b66a5e1c756750e6093d6b5acd855d1af0->enter($__internal_198a6d5283e256514965c11b194d57b66a5e1c756750e6093d6b5acd855d1af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0f6ecd418ff9fc5b0888c13db2ff0c4a0da4474c955420f5904d2fe8f93df112->leave($__internal_0f6ecd418ff9fc5b0888c13db2ff0c4a0da4474c955420f5904d2fe8f93df112_prof);

        
        $__internal_198a6d5283e256514965c11b194d57b66a5e1c756750e6093d6b5acd855d1af0->leave($__internal_198a6d5283e256514965c11b194d57b66a5e1c756750e6093d6b5acd855d1af0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
