<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95712cb5621cc7e9aadc0750b7264ba081c1b2e755c07cf5ac99faf4eb44463b extends Twig_Template
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
        $__internal_0502bdd0d9985d6a3dddca683b1cfee575e8324f88ab7f637cf2fee28cb9cf8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0502bdd0d9985d6a3dddca683b1cfee575e8324f88ab7f637cf2fee28cb9cf8f->enter($__internal_0502bdd0d9985d6a3dddca683b1cfee575e8324f88ab7f637cf2fee28cb9cf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0aee700d4b62da13dd468114a2385419f1c0bb2626fe993bcda77f613d507c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aee700d4b62da13dd468114a2385419f1c0bb2626fe993bcda77f613d507c58->enter($__internal_0aee700d4b62da13dd468114a2385419f1c0bb2626fe993bcda77f613d507c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0502bdd0d9985d6a3dddca683b1cfee575e8324f88ab7f637cf2fee28cb9cf8f->leave($__internal_0502bdd0d9985d6a3dddca683b1cfee575e8324f88ab7f637cf2fee28cb9cf8f_prof);

        
        $__internal_0aee700d4b62da13dd468114a2385419f1c0bb2626fe993bcda77f613d507c58->leave($__internal_0aee700d4b62da13dd468114a2385419f1c0bb2626fe993bcda77f613d507c58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
