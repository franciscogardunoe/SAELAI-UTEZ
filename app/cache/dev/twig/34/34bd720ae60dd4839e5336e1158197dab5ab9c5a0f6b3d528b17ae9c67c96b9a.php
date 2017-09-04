<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f3b7d19c673d3b8b87dc509f41c9a9ed03ea0b0e1b76dd27a2d3a2012a61892b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e17f9650d8a579d7e67035e6da395164a6e451b20bbff6bdb54baadb7da65c2c = $this->env->getExtension("native_profiler");
        $__internal_e17f9650d8a579d7e67035e6da395164a6e451b20bbff6bdb54baadb7da65c2c->enter($__internal_e17f9650d8a579d7e67035e6da395164a6e451b20bbff6bdb54baadb7da65c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e17f9650d8a579d7e67035e6da395164a6e451b20bbff6bdb54baadb7da65c2c->leave($__internal_e17f9650d8a579d7e67035e6da395164a6e451b20bbff6bdb54baadb7da65c2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_825b8e07c7fd1ad3b05b0b7e13097df5b5f26c5ebacb80d2d6a7705381780adc = $this->env->getExtension("native_profiler");
        $__internal_825b8e07c7fd1ad3b05b0b7e13097df5b5f26c5ebacb80d2d6a7705381780adc->enter($__internal_825b8e07c7fd1ad3b05b0b7e13097df5b5f26c5ebacb80d2d6a7705381780adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_825b8e07c7fd1ad3b05b0b7e13097df5b5f26c5ebacb80d2d6a7705381780adc->leave($__internal_825b8e07c7fd1ad3b05b0b7e13097df5b5f26c5ebacb80d2d6a7705381780adc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_41eee1a2bcc7a158721bacbc0a2420d34db439d7b52ded884cea5b007cdc0ba8 = $this->env->getExtension("native_profiler");
        $__internal_41eee1a2bcc7a158721bacbc0a2420d34db439d7b52ded884cea5b007cdc0ba8->enter($__internal_41eee1a2bcc7a158721bacbc0a2420d34db439d7b52ded884cea5b007cdc0ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_41eee1a2bcc7a158721bacbc0a2420d34db439d7b52ded884cea5b007cdc0ba8->leave($__internal_41eee1a2bcc7a158721bacbc0a2420d34db439d7b52ded884cea5b007cdc0ba8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f17e6a116925a704c34a8b602066354890fe372deaf363b35f4d59947ba860c = $this->env->getExtension("native_profiler");
        $__internal_6f17e6a116925a704c34a8b602066354890fe372deaf363b35f4d59947ba860c->enter($__internal_6f17e6a116925a704c34a8b602066354890fe372deaf363b35f4d59947ba860c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6f17e6a116925a704c34a8b602066354890fe372deaf363b35f4d59947ba860c->leave($__internal_6f17e6a116925a704c34a8b602066354890fe372deaf363b35f4d59947ba860c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
