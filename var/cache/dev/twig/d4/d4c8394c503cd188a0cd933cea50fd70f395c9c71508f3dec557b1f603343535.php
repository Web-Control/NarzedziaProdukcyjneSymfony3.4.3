<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d07e9508ee4a2ce5cabe0f56f327e648e6199659feb57db5a513b73c0eb7a406 extends Twig_Template
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
        $__internal_ad799ee071e8f970523604620593464459f2455f3444dcf300959306ff2a72c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad799ee071e8f970523604620593464459f2455f3444dcf300959306ff2a72c2->enter($__internal_ad799ee071e8f970523604620593464459f2455f3444dcf300959306ff2a72c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_30692d108122bdf8336f5cdefd43e12c73c7dc3c3fb3e3c0c20cff05a13b9e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30692d108122bdf8336f5cdefd43e12c73c7dc3c3fb3e3c0c20cff05a13b9e1f->enter($__internal_30692d108122bdf8336f5cdefd43e12c73c7dc3c3fb3e3c0c20cff05a13b9e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ad799ee071e8f970523604620593464459f2455f3444dcf300959306ff2a72c2->leave($__internal_ad799ee071e8f970523604620593464459f2455f3444dcf300959306ff2a72c2_prof);

        
        $__internal_30692d108122bdf8336f5cdefd43e12c73c7dc3c3fb3e3c0c20cff05a13b9e1f->leave($__internal_30692d108122bdf8336f5cdefd43e12c73c7dc3c3fb3e3c0c20cff05a13b9e1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
