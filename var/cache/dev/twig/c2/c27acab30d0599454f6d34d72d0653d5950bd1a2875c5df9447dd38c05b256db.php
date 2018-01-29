<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_52833beb038fded28479f80c18adb0c8ea7635faba1e1fe4eef04140bfac8e75 extends Twig_Template
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
        $__internal_14fee052cf238c4dce82bc921f36943c226705e3cf8a6bcdf03c2cea87168218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14fee052cf238c4dce82bc921f36943c226705e3cf8a6bcdf03c2cea87168218->enter($__internal_14fee052cf238c4dce82bc921f36943c226705e3cf8a6bcdf03c2cea87168218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3ff4a855294a0f2106a6ac6cf11a7d91e67740ef4287ca6256490cb3c77e4bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff4a855294a0f2106a6ac6cf11a7d91e67740ef4287ca6256490cb3c77e4bf4->enter($__internal_3ff4a855294a0f2106a6ac6cf11a7d91e67740ef4287ca6256490cb3c77e4bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_14fee052cf238c4dce82bc921f36943c226705e3cf8a6bcdf03c2cea87168218->leave($__internal_14fee052cf238c4dce82bc921f36943c226705e3cf8a6bcdf03c2cea87168218_prof);

        
        $__internal_3ff4a855294a0f2106a6ac6cf11a7d91e67740ef4287ca6256490cb3c77e4bf4->leave($__internal_3ff4a855294a0f2106a6ac6cf11a7d91e67740ef4287ca6256490cb3c77e4bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
