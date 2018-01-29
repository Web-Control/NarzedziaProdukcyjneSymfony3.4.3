<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_113717d6c361d3729295ae0a22e6b3442cc024aad8fb94a19ef8a115a0508e4c extends Twig_Template
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
        $__internal_c9fa899793ed60fb5edfc6cb16a4c1aed25caec3b0913ff130bb77fc8f22e873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fa899793ed60fb5edfc6cb16a4c1aed25caec3b0913ff130bb77fc8f22e873->enter($__internal_c9fa899793ed60fb5edfc6cb16a4c1aed25caec3b0913ff130bb77fc8f22e873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_24f4786be76b7820f756f959ecbba58b9c1c463d9e77090ad22faf16e8826438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f4786be76b7820f756f959ecbba58b9c1c463d9e77090ad22faf16e8826438->enter($__internal_24f4786be76b7820f756f959ecbba58b9c1c463d9e77090ad22faf16e8826438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c9fa899793ed60fb5edfc6cb16a4c1aed25caec3b0913ff130bb77fc8f22e873->leave($__internal_c9fa899793ed60fb5edfc6cb16a4c1aed25caec3b0913ff130bb77fc8f22e873_prof);

        
        $__internal_24f4786be76b7820f756f959ecbba58b9c1c463d9e77090ad22faf16e8826438->leave($__internal_24f4786be76b7820f756f959ecbba58b9c1c463d9e77090ad22faf16e8826438_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
