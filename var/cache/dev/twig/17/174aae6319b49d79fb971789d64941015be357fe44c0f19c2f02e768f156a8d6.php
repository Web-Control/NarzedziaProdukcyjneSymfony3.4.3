<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_15cac7b37526b2c0b23674c767ddea7669c8a2217d38e99f500b014ea0bffba2 extends Twig_Template
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
        $__internal_49e1338d2cdc9344c366abf6b3c0189c49b25e8f93421646bc48c0331f8f86d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e1338d2cdc9344c366abf6b3c0189c49b25e8f93421646bc48c0331f8f86d3->enter($__internal_49e1338d2cdc9344c366abf6b3c0189c49b25e8f93421646bc48c0331f8f86d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e28ae5fe0a246814cd39233fcbb37848d04132811356cbbbeb9692bced9f4b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28ae5fe0a246814cd39233fcbb37848d04132811356cbbbeb9692bced9f4b31->enter($__internal_e28ae5fe0a246814cd39233fcbb37848d04132811356cbbbeb9692bced9f4b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_49e1338d2cdc9344c366abf6b3c0189c49b25e8f93421646bc48c0331f8f86d3->leave($__internal_49e1338d2cdc9344c366abf6b3c0189c49b25e8f93421646bc48c0331f8f86d3_prof);

        
        $__internal_e28ae5fe0a246814cd39233fcbb37848d04132811356cbbbeb9692bced9f4b31->leave($__internal_e28ae5fe0a246814cd39233fcbb37848d04132811356cbbbeb9692bced9f4b31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
