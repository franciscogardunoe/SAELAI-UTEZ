<?php

/* saelaiBundle:Manager\Career:Career.html.twig */
class __TwigTemplate_f53e0f96c648fb83a60f730c597f272e17631239a9463fd19fa61607a692bc19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("saelaiBundle::Template.html.twig", "saelaiBundle:Manager\\Career:Career.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'name' => array($this, 'block_name'),
            'careers' => array($this, 'block_careers'),
            'contenido' => array($this, 'block_contenido'),
            'modal' => array($this, 'block_modal'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "saelaiBundle::Template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6964eb5e877117aff4b0058057c59e441eabdb6b54e150f1670af50667064ecf = $this->env->getExtension("native_profiler");
        $__internal_6964eb5e877117aff4b0058057c59e441eabdb6b54e150f1670af50667064ecf->enter($__internal_6964eb5e877117aff4b0058057c59e441eabdb6b54e150f1670af50667064ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Manager\\Career:Career.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6964eb5e877117aff4b0058057c59e441eabdb6b54e150f1670af50667064ecf->leave($__internal_6964eb5e877117aff4b0058057c59e441eabdb6b54e150f1670af50667064ecf_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_defcb84dfb32a4da08056187db2d2fae839cbc08b03ebb064784c79f9b858d26 = $this->env->getExtension("native_profiler");
        $__internal_defcb84dfb32a4da08056187db2d2fae839cbc08b03ebb064784c79f9b858d26->enter($__internal_defcb84dfb32a4da08056187db2d2fae839cbc08b03ebb064784c79f9b858d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('careers', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_defcb84dfb32a4da08056187db2d2fae839cbc08b03ebb064784c79f9b858d26->leave($__internal_defcb84dfb32a4da08056187db2d2fae839cbc08b03ebb064784c79f9b858d26_prof);

    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
        $__internal_4dc49c7821a6698fd1c19d5124f31afb0cb2fe23548cd10cfcec036909130d3f = $this->env->getExtension("native_profiler");
        $__internal_4dc49c7821a6698fd1c19d5124f31afb0cb2fe23548cd10cfcec036909130d3f->enter($__internal_4dc49c7821a6698fd1c19d5124f31afb0cb2fe23548cd10cfcec036909130d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 6
        echo "        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 
    ";
        
        $__internal_4dc49c7821a6698fd1c19d5124f31afb0cb2fe23548cd10cfcec036909130d3f->leave($__internal_4dc49c7821a6698fd1c19d5124f31afb0cb2fe23548cd10cfcec036909130d3f_prof);

    }

    // line 9
    public function block_careers($context, array $blocks = array())
    {
        $__internal_bf8ce2186ff215c5939d5bebad588a047b7010809ec7b986e50e9aa470df802b = $this->env->getExtension("native_profiler");
        $__internal_bf8ce2186ff215c5939d5bebad588a047b7010809ec7b986e50e9aa470df802b->enter($__internal_bf8ce2186ff215c5939d5bebad588a047b7010809ec7b986e50e9aa470df802b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "careers"));

        // line 10
        echo "        <li class=\"active\">
            <a href=\"typography.html\">
                <i class=\"pe-7s-science\"></i>
                <p>Careers</p>
            </a>
        </li>
    ";
        
        $__internal_bf8ce2186ff215c5939d5bebad588a047b7010809ec7b986e50e9aa470df802b->leave($__internal_bf8ce2186ff215c5939d5bebad588a047b7010809ec7b986e50e9aa470df802b_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7b0390f1543cd8c171bcdc2a82d2a6938715973651507f85caeb2bd0c2084b28 = $this->env->getExtension("native_profiler");
        $__internal_7b0390f1543cd8c171bcdc2a82d2a6938715973651507f85caeb2bd0c2084b28->enter($__internal_7b0390f1543cd8c171bcdc2a82d2a6938715973651507f85caeb2bd0c2084b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"card\">
                    <!--AQUÍ VA TODO EL CONTENIDO DE LA PÁGINA-->
                    HOLA
                </div>
            </div>
        </div>
    ";
        
        $__internal_7b0390f1543cd8c171bcdc2a82d2a6938715973651507f85caeb2bd0c2084b28->leave($__internal_7b0390f1543cd8c171bcdc2a82d2a6938715973651507f85caeb2bd0c2084b28_prof);

    }

    // line 30
    public function block_modal($context, array $blocks = array())
    {
        $__internal_b3e5ac29f050c47b0a420607354f09a06f8ec1ef823f58b6f35c9194a3f8bacb = $this->env->getExtension("native_profiler");
        $__internal_b3e5ac29f050c47b0a420607354f09a06f8ec1ef823f58b6f35c9194a3f8bacb->enter($__internal_b3e5ac29f050c47b0a420607354f09a06f8ec1ef823f58b6f35c9194a3f8bacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_b3e5ac29f050c47b0a420607354f09a06f8ec1ef823f58b6f35c9194a3f8bacb->leave($__internal_b3e5ac29f050c47b0a420607354f09a06f8ec1ef823f58b6f35c9194a3f8bacb_prof);

    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b65e9f23b3d2d734406e9e821276dfd09b931ae7b90fa1dc49df4cff32f6f735 = $this->env->getExtension("native_profiler");
        $__internal_b65e9f23b3d2d734406e9e821276dfd09b931ae7b90fa1dc49df4cff32f6f735->enter($__internal_b65e9f23b3d2d734406e9e821276dfd09b931ae7b90fa1dc49df4cff32f6f735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_b65e9f23b3d2d734406e9e821276dfd09b931ae7b90fa1dc49df4cff32f6f735->leave($__internal_b65e9f23b3d2d734406e9e821276dfd09b931ae7b90fa1dc49df4cff32f6f735_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Manager\\Career:Career.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  119 => 30,  104 => 19,  98 => 18,  85 => 10,  79 => 9,  71 => 6,  65 => 5,  58 => 18,  55 => 17,  53 => 9,  50 => 8,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "saelaiBundle::Template.html.twig" %}*/
/* */
/* {% block main %}*/
/* */
/*     {% block name %}*/
/*         <h6 class="navbar-brand" href="#">Manager | Amalia Rojas</h6> */
/*     {% endblock %}*/
/* */
/*     {% block careers %}*/
/*         <li class="active">*/
/*             <a href="typography.html">*/
/*                 <i class="pe-7s-science"></i>*/
/*                 <p>Careers</p>*/
/*             </a>*/
/*         </li>*/
/*     {% endblock %}*/
/* */
/*     {% block contenido %}*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="card">*/
/*                     <!--AQUÍ VA TODO EL CONTENIDO DE LA PÁGINA-->*/
/*                     HOLA*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
/* {% block modal %}*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* {% endblock %}*/
/* */
