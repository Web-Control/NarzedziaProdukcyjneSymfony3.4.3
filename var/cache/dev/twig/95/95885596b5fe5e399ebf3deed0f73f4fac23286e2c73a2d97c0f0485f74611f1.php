<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_089b0ddbce0f3f5a4bbfa0fbe134fcaebc31633e3d39ad91f75ae3d0de4e4967 extends Twig_Template
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
        $__internal_4304b80e0bf53b52983a141559bae19542009ba3fffbc383e98f55b8443e8737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4304b80e0bf53b52983a141559bae19542009ba3fffbc383e98f55b8443e8737->enter($__internal_4304b80e0bf53b52983a141559bae19542009ba3fffbc383e98f55b8443e8737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_65e173a0ae698de488be2111aaf977a865106cf756edd191893df9dff6a3af3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e173a0ae698de488be2111aaf977a865106cf756edd191893df9dff6a3af3c->enter($__internal_65e173a0ae698de488be2111aaf977a865106cf756edd191893df9dff6a3af3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4304b80e0bf53b52983a141559bae19542009ba3fffbc383e98f55b8443e8737->leave($__internal_4304b80e0bf53b52983a141559bae19542009ba3fffbc383e98f55b8443e8737_prof);

        
        $__internal_65e173a0ae698de488be2111aaf977a865106cf756edd191893df9dff6a3af3c->leave($__internal_65e173a0ae698de488be2111aaf977a865106cf756edd191893df9dff6a3af3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
