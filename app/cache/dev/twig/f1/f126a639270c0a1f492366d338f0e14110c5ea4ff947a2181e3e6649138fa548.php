<?php

/* saelaiBundle:Manager\Teacher:Teacher.html.twig */
class __TwigTemplate_f77beeb201646201945bd015c27b78853b606f357703ddcd5204c815191f5646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("saelaiBundle::Template.html.twig", "saelaiBundle:Manager\\Teacher:Teacher.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'name' => array($this, 'block_name'),
            'teachers' => array($this, 'block_teachers'),
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
        $__internal_bb6fb6a4dfc2e04aaf74fdf68db314170a77091b3ef97eb1a4e2bb11f1770954 = $this->env->getExtension("native_profiler");
        $__internal_bb6fb6a4dfc2e04aaf74fdf68db314170a77091b3ef97eb1a4e2bb11f1770954->enter($__internal_bb6fb6a4dfc2e04aaf74fdf68db314170a77091b3ef97eb1a4e2bb11f1770954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Manager\\Teacher:Teacher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6fb6a4dfc2e04aaf74fdf68db314170a77091b3ef97eb1a4e2bb11f1770954->leave($__internal_bb6fb6a4dfc2e04aaf74fdf68db314170a77091b3ef97eb1a4e2bb11f1770954_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e6edeb5ce8d189a071da07edda5cdca02a96107a667edd98e9a8fd36d15ec750 = $this->env->getExtension("native_profiler");
        $__internal_e6edeb5ce8d189a071da07edda5cdca02a96107a667edd98e9a8fd36d15ec750->enter($__internal_e6edeb5ce8d189a071da07edda5cdca02a96107a667edd98e9a8fd36d15ec750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('teachers', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_e6edeb5ce8d189a071da07edda5cdca02a96107a667edd98e9a8fd36d15ec750->leave($__internal_e6edeb5ce8d189a071da07edda5cdca02a96107a667edd98e9a8fd36d15ec750_prof);

    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
        $__internal_7bab263165107a1e315aad8f82c4ce3944af44d5f9123b8b82b4131f4c057d96 = $this->env->getExtension("native_profiler");
        $__internal_7bab263165107a1e315aad8f82c4ce3944af44d5f9123b8b82b4131f4c057d96->enter($__internal_7bab263165107a1e315aad8f82c4ce3944af44d5f9123b8b82b4131f4c057d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 6
        echo "        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 
    ";
        
        $__internal_7bab263165107a1e315aad8f82c4ce3944af44d5f9123b8b82b4131f4c057d96->leave($__internal_7bab263165107a1e315aad8f82c4ce3944af44d5f9123b8b82b4131f4c057d96_prof);

    }

    // line 9
    public function block_teachers($context, array $blocks = array())
    {
        $__internal_99cec06ce0e0a4683c6ff734fdacb45df12d201d5589d792a1eb6c45e2ae88f8 = $this->env->getExtension("native_profiler");
        $__internal_99cec06ce0e0a4683c6ff734fdacb45df12d201d5589d792a1eb6c45e2ae88f8->enter($__internal_99cec06ce0e0a4683c6ff734fdacb45df12d201d5589d792a1eb6c45e2ae88f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "teachers"));

        // line 10
        echo "        <li class=\"active\">
            <a href=\"table.html\">
                <i class=\"pe-7s-users\"></i>
                <p>Teachers</p>
            </a>
        </li>
    ";
        
        $__internal_99cec06ce0e0a4683c6ff734fdacb45df12d201d5589d792a1eb6c45e2ae88f8->leave($__internal_99cec06ce0e0a4683c6ff734fdacb45df12d201d5589d792a1eb6c45e2ae88f8_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_20a4a59ddfb691b475b1f2d2cdd58ec668d2c9103473ff49e264534c4e1343ae = $this->env->getExtension("native_profiler");
        $__internal_20a4a59ddfb691b475b1f2d2cdd58ec668d2c9103473ff49e264534c4e1343ae->enter($__internal_20a4a59ddfb691b475b1f2d2cdd58ec668d2c9103473ff49e264534c4e1343ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

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
        
        $__internal_20a4a59ddfb691b475b1f2d2cdd58ec668d2c9103473ff49e264534c4e1343ae->leave($__internal_20a4a59ddfb691b475b1f2d2cdd58ec668d2c9103473ff49e264534c4e1343ae_prof);

    }

    // line 30
    public function block_modal($context, array $blocks = array())
    {
        $__internal_3e2d47531bf59041f18bbb76e740c80f52b08826d50fc43243e9e793db85f1c9 = $this->env->getExtension("native_profiler");
        $__internal_3e2d47531bf59041f18bbb76e740c80f52b08826d50fc43243e9e793db85f1c9->enter($__internal_3e2d47531bf59041f18bbb76e740c80f52b08826d50fc43243e9e793db85f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_3e2d47531bf59041f18bbb76e740c80f52b08826d50fc43243e9e793db85f1c9->leave($__internal_3e2d47531bf59041f18bbb76e740c80f52b08826d50fc43243e9e793db85f1c9_prof);

    }

    // line 33
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_380a7eba31a93efb2de879e87b6d3c1731b7d94a81182a70cc023d89b7d2316b = $this->env->getExtension("native_profiler");
        $__internal_380a7eba31a93efb2de879e87b6d3c1731b7d94a81182a70cc023d89b7d2316b->enter($__internal_380a7eba31a93efb2de879e87b6d3c1731b7d94a81182a70cc023d89b7d2316b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_380a7eba31a93efb2de879e87b6d3c1731b7d94a81182a70cc023d89b7d2316b->leave($__internal_380a7eba31a93efb2de879e87b6d3c1731b7d94a81182a70cc023d89b7d2316b_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Manager\\Teacher:Teacher.html.twig";
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
/*     {% block teachers %}*/
/*         <li class="active">*/
/*             <a href="table.html">*/
/*                 <i class="pe-7s-users"></i>*/
/*                 <p>Teachers</p>*/
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
