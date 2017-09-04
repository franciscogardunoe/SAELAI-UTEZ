<?php

/* saelaiBundle:Manager\Student:Student.html.twig */
class __TwigTemplate_db3aa8cf6be0a9d4bfdfbfa6c14b783bbba219a277559c1f1d84a482823080a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("saelaiBundle::Template.html.twig", "saelaiBundle:Manager\\Student:Student.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'name' => array($this, 'block_name'),
            'students' => array($this, 'block_students'),
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
        $__internal_6c56f60a781e3cae489caf7a920eab4c820ebda04252a443deedd4ebc1e3a06d = $this->env->getExtension("native_profiler");
        $__internal_6c56f60a781e3cae489caf7a920eab4c820ebda04252a443deedd4ebc1e3a06d->enter($__internal_6c56f60a781e3cae489caf7a920eab4c820ebda04252a443deedd4ebc1e3a06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Manager\\Student:Student.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c56f60a781e3cae489caf7a920eab4c820ebda04252a443deedd4ebc1e3a06d->leave($__internal_6c56f60a781e3cae489caf7a920eab4c820ebda04252a443deedd4ebc1e3a06d_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_4fc84c7d58854bdaecb3e2ed494a2ed69da1d10e5ad5808279914141ac366aa8 = $this->env->getExtension("native_profiler");
        $__internal_4fc84c7d58854bdaecb3e2ed494a2ed69da1d10e5ad5808279914141ac366aa8->enter($__internal_4fc84c7d58854bdaecb3e2ed494a2ed69da1d10e5ad5808279914141ac366aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('students', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_4fc84c7d58854bdaecb3e2ed494a2ed69da1d10e5ad5808279914141ac366aa8->leave($__internal_4fc84c7d58854bdaecb3e2ed494a2ed69da1d10e5ad5808279914141ac366aa8_prof);

    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
        $__internal_e76ce21a8e69761961e6d01df82d38c204aa9a5a80b37fafd5aa75d6ae0d3cdd = $this->env->getExtension("native_profiler");
        $__internal_e76ce21a8e69761961e6d01df82d38c204aa9a5a80b37fafd5aa75d6ae0d3cdd->enter($__internal_e76ce21a8e69761961e6d01df82d38c204aa9a5a80b37fafd5aa75d6ae0d3cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 6
        echo "        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 
    ";
        
        $__internal_e76ce21a8e69761961e6d01df82d38c204aa9a5a80b37fafd5aa75d6ae0d3cdd->leave($__internal_e76ce21a8e69761961e6d01df82d38c204aa9a5a80b37fafd5aa75d6ae0d3cdd_prof);

    }

    // line 9
    public function block_students($context, array $blocks = array())
    {
        $__internal_9f22ce1c9c03fa4e1b6d840b7b7480ee6f83fad1b6ff53cad3cf16a01172254f = $this->env->getExtension("native_profiler");
        $__internal_9f22ce1c9c03fa4e1b6d840b7b7480ee6f83fad1b6ff53cad3cf16a01172254f->enter($__internal_9f22ce1c9c03fa4e1b6d840b7b7480ee6f83fad1b6ff53cad3cf16a01172254f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "students"));

        // line 10
        echo "        <li class=\"active\">
            <a href=\"user.html\">
                <i class=\"pe-7s-study\"></i>
                <p>Students</p>
            </a>
        </li>
    ";
        
        $__internal_9f22ce1c9c03fa4e1b6d840b7b7480ee6f83fad1b6ff53cad3cf16a01172254f->leave($__internal_9f22ce1c9c03fa4e1b6d840b7b7480ee6f83fad1b6ff53cad3cf16a01172254f_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b412aa5c774928ad2499226e0894dcb33289ae1881f4ba83dafff9e43155ae0a = $this->env->getExtension("native_profiler");
        $__internal_b412aa5c774928ad2499226e0894dcb33289ae1881f4ba83dafff9e43155ae0a->enter($__internal_b412aa5c774928ad2499226e0894dcb33289ae1881f4ba83dafff9e43155ae0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_b412aa5c774928ad2499226e0894dcb33289ae1881f4ba83dafff9e43155ae0a->leave($__internal_b412aa5c774928ad2499226e0894dcb33289ae1881f4ba83dafff9e43155ae0a_prof);

    }

    // line 30
    public function block_modal($context, array $blocks = array())
    {
        $__internal_33ae5e1077740e4c6e8f4f8b341e505c9564b37d40e015dfa638d2b2b800d995 = $this->env->getExtension("native_profiler");
        $__internal_33ae5e1077740e4c6e8f4f8b341e505c9564b37d40e015dfa638d2b2b800d995->enter($__internal_33ae5e1077740e4c6e8f4f8b341e505c9564b37d40e015dfa638d2b2b800d995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_33ae5e1077740e4c6e8f4f8b341e505c9564b37d40e015dfa638d2b2b800d995->leave($__internal_33ae5e1077740e4c6e8f4f8b341e505c9564b37d40e015dfa638d2b2b800d995_prof);

    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_540b6db0fe7d7fd87b086903224103dd3de6cdbbbf456a33ab1a893ca5892535 = $this->env->getExtension("native_profiler");
        $__internal_540b6db0fe7d7fd87b086903224103dd3de6cdbbbf456a33ab1a893ca5892535->enter($__internal_540b6db0fe7d7fd87b086903224103dd3de6cdbbbf456a33ab1a893ca5892535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_540b6db0fe7d7fd87b086903224103dd3de6cdbbbf456a33ab1a893ca5892535->leave($__internal_540b6db0fe7d7fd87b086903224103dd3de6cdbbbf456a33ab1a893ca5892535_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Manager\\Student:Student.html.twig";
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
/*     {% block students %}*/
/*         <li class="active">*/
/*             <a href="user.html">*/
/*                 <i class="pe-7s-study"></i>*/
/*                 <p>Students</p>*/
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
