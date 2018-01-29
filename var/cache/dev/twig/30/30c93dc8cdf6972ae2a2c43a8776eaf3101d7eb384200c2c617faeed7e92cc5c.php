<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4636f147e5f61754611d1e3378dfab98d1aae296d339b07bbe1163ced9283ca8 extends Twig_Template
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
        $__internal_a7960dd40544a1e44e9528bae62ff50a9840a02fdd52ec286f8bab58a2e20724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7960dd40544a1e44e9528bae62ff50a9840a02fdd52ec286f8bab58a2e20724->enter($__internal_a7960dd40544a1e44e9528bae62ff50a9840a02fdd52ec286f8bab58a2e20724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_88e68cdbd93e1f9402cfb464e6ebc98bb8d232e5d7d8ed392ccf9197d585d5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e68cdbd93e1f9402cfb464e6ebc98bb8d232e5d7d8ed392ccf9197d585d5b3->enter($__internal_88e68cdbd93e1f9402cfb464e6ebc98bb8d232e5d7d8ed392ccf9197d585d5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a7960dd40544a1e44e9528bae62ff50a9840a02fdd52ec286f8bab58a2e20724->leave($__internal_a7960dd40544a1e44e9528bae62ff50a9840a02fdd52ec286f8bab58a2e20724_prof);

        
        $__internal_88e68cdbd93e1f9402cfb464e6ebc98bb8d232e5d7d8ed392ccf9197d585d5b3->leave($__internal_88e68cdbd93e1f9402cfb464e6ebc98bb8d232e5d7d8ed392ccf9197d585d5b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
