<?php

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_f14bbe391dc5cda891df53f489e66f392fa777154bdda0afaa08c3d6cbcffa68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3df580a5e129a88eabcb195e258c9cae8054f90b68bd6c60ce5e419be1ff5e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df580a5e129a88eabcb195e258c9cae8054f90b68bd6c60ce5e419be1ff5e4f->enter($__internal_3df580a5e129a88eabcb195e258c9cae8054f90b68bd6c60ce5e419be1ff5e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        $__internal_2f135d7f34323f042426e7fb22e01abd3ea58b6ae10d15a07a8faeefe85b2e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f135d7f34323f042426e7fb22e01abd3ea58b6ae10d15a07a8faeefe85b2e9c->enter($__internal_2f135d7f34323f042426e7fb22e01abd3ea58b6ae10d15a07a8faeefe85b2e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@VichUploader/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_3df580a5e129a88eabcb195e258c9cae8054f90b68bd6c60ce5e419be1ff5e4f->leave($__internal_3df580a5e129a88eabcb195e258c9cae8054f90b68bd6c60ce5e419be1ff5e4f_prof);

        
        $__internal_2f135d7f34323f042426e7fb22e01abd3ea58b6ae10d15a07a8faeefe85b2e9c->leave($__internal_2f135d7f34323f042426e7fb22e01abd3ea58b6ae10d15a07a8faeefe85b2e9c_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_0999cec364b41641475292d1c075d46188f8f16ccbebd4da8f1505fae127fa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0999cec364b41641475292d1c075d46188f8f16ccbebd4da8f1505fae127fa56->enter($__internal_0999cec364b41641475292d1c075d46188f8f16ccbebd4da8f1505fae127fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_7ce2450c7bc3562c445dfb559e5b982f35ea49f2c2c5442c5df375ea1a477abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce2450c7bc3562c445dfb559e5b982f35ea49f2c2c5442c5df375ea1a477abe->enter($__internal_7ce2450c7bc3562c445dfb559e5b982f35ea49f2c2c5442c5df375ea1a477abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7ce2450c7bc3562c445dfb559e5b982f35ea49f2c2c5442c5df375ea1a477abe->leave($__internal_7ce2450c7bc3562c445dfb559e5b982f35ea49f2c2c5442c5df375ea1a477abe_prof);

        
        $__internal_0999cec364b41641475292d1c075d46188f8f16ccbebd4da8f1505fae127fa56->leave($__internal_0999cec364b41641475292d1c075d46188f8f16ccbebd4da8f1505fae127fa56_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_22ba8e4d19deee69e6c4acdc67429a825ba17a9b295842b5239e691a62854c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ba8e4d19deee69e6c4acdc67429a825ba17a9b295842b5239e691a62854c94->enter($__internal_22ba8e4d19deee69e6c4acdc67429a825ba17a9b295842b5239e691a62854c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_6bc2149df4db1274a9ef32c89abeebab9b7f9f7f11ae0951d1ef791fff389ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc2149df4db1274a9ef32c89abeebab9b7f9f7f11ae0951d1ef791fff389ca5->enter($__internal_6bc2149df4db1274a9ef32c89abeebab9b7f9f7f11ae0951d1ef791fff389ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6bc2149df4db1274a9ef32c89abeebab9b7f9f7f11ae0951d1ef791fff389ca5->leave($__internal_6bc2149df4db1274a9ef32c89abeebab9b7f9f7f11ae0951d1ef791fff389ca5_prof);

        
        $__internal_22ba8e4d19deee69e6c4acdc67429a825ba17a9b295842b5239e691a62854c94->leave($__internal_22ba8e4d19deee69e6c4acdc67429a825ba17a9b295842b5239e691a62854c94_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_2df9cae3207dd08da35a2e3d1b22c4b3f3a8031bbce81f9860b45c0ce5c8fdc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df9cae3207dd08da35a2e3d1b22c4b3f3a8031bbce81f9860b45c0ce5c8fdc7->enter($__internal_2df9cae3207dd08da35a2e3d1b22c4b3f3a8031bbce81f9860b45c0ce5c8fdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_1a3c8095d95ba26a664e7eb9a454fc475d27bdec5c1da3d913c3b609842c3e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3c8095d95ba26a664e7eb9a454fc475d27bdec5c1da3d913c3b609842c3e10->enter($__internal_1a3c8095d95ba26a664e7eb9a454fc475d27bdec5c1da3d913c3b609842c3e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1a3c8095d95ba26a664e7eb9a454fc475d27bdec5c1da3d913c3b609842c3e10->leave($__internal_1a3c8095d95ba26a664e7eb9a454fc475d27bdec5c1da3d913c3b609842c3e10_prof);

        
        $__internal_2df9cae3207dd08da35a2e3d1b22c4b3f3a8031bbce81f9860b45c0ce5c8fdc7->leave($__internal_2df9cae3207dd08da35a2e3d1b22c4b3f3a8031bbce81f9860b45c0ce5c8fdc7_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_a81ec92c284be18185fa693f17fd1ecdf3eb62953ac5e8362643d8359ac58043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81ec92c284be18185fa693f17fd1ecdf3eb62953ac5e8362643d8359ac58043->enter($__internal_a81ec92c284be18185fa693f17fd1ecdf3eb62953ac5e8362643d8359ac58043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_4702c7e3507082c4340c76932e0762f019942d9b456adf1886176bc1e145f28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4702c7e3507082c4340c76932e0762f019942d9b456adf1886176bc1e145f28b->enter($__internal_4702c7e3507082c4340c76932e0762f019942d9b456adf1886176bc1e145f28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4702c7e3507082c4340c76932e0762f019942d9b456adf1886176bc1e145f28b->leave($__internal_4702c7e3507082c4340c76932e0762f019942d9b456adf1886176bc1e145f28b_prof);

        
        $__internal_a81ec92c284be18185fa693f17fd1ecdf3eb62953ac5e8362643d8359ac58043->leave($__internal_a81ec92c284be18185fa693f17fd1ecdf3eb62953ac5e8362643d8359ac58043_prof);

    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "@VichUploader/Form/fields.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
