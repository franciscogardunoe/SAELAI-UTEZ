<?php

/* saelaiBundle:Universal:Start.html.twig */
class __TwigTemplate_79ba46f523c27638c02550c73b7704a8f35fc8494b0e1a382f023eee5ebf1c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("saelaiBundle::Template.html.twig", "saelaiBundle:Universal:Start.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'name' => array($this, 'block_name'),
            'start' => array($this, 'block_start'),
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
        $__internal_a31996441916bfdac2d203b89beb368fbba7b7416f7cba5a8d9b31d8c628e213 = $this->env->getExtension("native_profiler");
        $__internal_a31996441916bfdac2d203b89beb368fbba7b7416f7cba5a8d9b31d8c628e213->enter($__internal_a31996441916bfdac2d203b89beb368fbba7b7416f7cba5a8d9b31d8c628e213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Universal:Start.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31996441916bfdac2d203b89beb368fbba7b7416f7cba5a8d9b31d8c628e213->leave($__internal_a31996441916bfdac2d203b89beb368fbba7b7416f7cba5a8d9b31d8c628e213_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_205a6d88344020b46b28d1817fd535c2248c5c99c73824ccfb3573184f15607c = $this->env->getExtension("native_profiler");
        $__internal_205a6d88344020b46b28d1817fd535c2248c5c99c73824ccfb3573184f15607c->enter($__internal_205a6d88344020b46b28d1817fd535c2248c5c99c73824ccfb3573184f15607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('name', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('start', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_205a6d88344020b46b28d1817fd535c2248c5c99c73824ccfb3573184f15607c->leave($__internal_205a6d88344020b46b28d1817fd535c2248c5c99c73824ccfb3573184f15607c_prof);

    }

    // line 5
    public function block_name($context, array $blocks = array())
    {
        $__internal_7baf905726f1e2508abb7cca88f0270ef6b234da78fddb54accf6a978adafcb3 = $this->env->getExtension("native_profiler");
        $__internal_7baf905726f1e2508abb7cca88f0270ef6b234da78fddb54accf6a978adafcb3->enter($__internal_7baf905726f1e2508abb7cca88f0270ef6b234da78fddb54accf6a978adafcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        // line 6
        echo "        <h6 class=\"navbar-brand\" href=\"#\">Manager | Amalia Rojas</h6> 
    ";
        
        $__internal_7baf905726f1e2508abb7cca88f0270ef6b234da78fddb54accf6a978adafcb3->leave($__internal_7baf905726f1e2508abb7cca88f0270ef6b234da78fddb54accf6a978adafcb3_prof);

    }

    // line 9
    public function block_start($context, array $blocks = array())
    {
        $__internal_af6bece7a7056b12f0c3f981d44a77aeb66cf93198644353302f3f9c7e57ac25 = $this->env->getExtension("native_profiler");
        $__internal_af6bece7a7056b12f0c3f981d44a77aeb66cf93198644353302f3f9c7e57ac25->enter($__internal_af6bece7a7056b12f0c3f981d44a77aeb66cf93198644353302f3f9c7e57ac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "start"));

        // line 10
        echo "        <li class=\"active\">
            <a href=\"dashboard.html\">
                <i class=\"pe-7s-home\"></i>
                <p>Start</p>
            </a>
        </li>
    ";
        
        $__internal_af6bece7a7056b12f0c3f981d44a77aeb66cf93198644353302f3f9c7e57ac25->leave($__internal_af6bece7a7056b12f0c3f981d44a77aeb66cf93198644353302f3f9c7e57ac25_prof);

    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1359962f91b6031b7fdf9cde07dba6a8d54c19f6304c996603473cb327916db7 = $this->env->getExtension("native_profiler");
        $__internal_1359962f91b6031b7fdf9cde07dba6a8d54c19f6304c996603473cb327916db7->enter($__internal_1359962f91b6031b7fdf9cde07dba6a8d54c19f6304c996603473cb327916db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 19
        echo "        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <!--AQUÍ VA TODO EL CONTENIDO DE LA PÁGINA-->
                            <div class=\"header\">
                                <h4 class=\"title\">Students</h4>
                                <p class=\"category\">Here is a subtitle for this table</p>
                                <button type=\"submit\" class=\"btn btn-success btn-fill pull-right\">New Student</button>
                            </div>
                            <table id=\"tabla\" class=\"footable table table-stripped\" data-page-size=\"8\" data-filter=#filter>
                                <thead>
                                    <tr>
                                        <th>Nombre completo</th>
                                        <th>Clasificación</th>
                                        <th>Roles</th>
                                        <th>Fecha ingreso CDS</th>
                                        <th>Estatus</th>
                                        <th class=\"actions\"></th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test</td>
                                        <td>test<td>
                                        <td class=\"actions pull-right\">
                                            <a data-toggle='modal' data-target=\"#modal-updatestatus\" title=\"Cambiar estatus\" class=\"btn btn-primary btn-fill\">
                                                <i class=\"fa fa-refresh\"></i>
                                            </a>
                                            <a data-toggle=\"tooltip\" href=\"\" data-placement=\"top\" title=\"Ver perfil\" class=\"btn btn-info btn-fill\">
                                                <i class=\"fa fa-eye\"></i>
                                            </a>
                                            <a data-toggle='modal' data-target=\"#modal-deleteResource\" title=\"Eliminar recurso\" class=\"btn btn-warning btn-fill\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </a>
                                            <a data-toggle='modal' data-target=\"#modal-deleteResource\" title=\"Eliminar recurso\" class=\"btn btn-danger btn-fill\">
                                                <i class=\"fa fa-times\"></i>
                                            </a>
                                        </td>
                                    <tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"12\">
                                            <ul class=\"pagination pull-right\"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_1359962f91b6031b7fdf9cde07dba6a8d54c19f6304c996603473cb327916db7->leave($__internal_1359962f91b6031b7fdf9cde07dba6a8d54c19f6304c996603473cb327916db7_prof);

    }

    // line 80
    public function block_modal($context, array $blocks = array())
    {
        $__internal_a0f7719dcd9809e5a254e32c86bef9e65334c786604488f7cbbf861ed33ee5c7 = $this->env->getExtension("native_profiler");
        $__internal_a0f7719dcd9809e5a254e32c86bef9e65334c786604488f7cbbf861ed33ee5c7->enter($__internal_a0f7719dcd9809e5a254e32c86bef9e65334c786604488f7cbbf861ed33ee5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_a0f7719dcd9809e5a254e32c86bef9e65334c786604488f7cbbf861ed33ee5c7->leave($__internal_a0f7719dcd9809e5a254e32c86bef9e65334c786604488f7cbbf861ed33ee5c7_prof);

    }

    // line 83
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_463fa85a26bfcf4f5af0a1e442752993000c41205cdb0d5a474d0975c46a1973 = $this->env->getExtension("native_profiler");
        $__internal_463fa85a26bfcf4f5af0a1e442752993000c41205cdb0d5a474d0975c46a1973->enter($__internal_463fa85a26bfcf4f5af0a1e442752993000c41205cdb0d5a474d0975c46a1973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_463fa85a26bfcf4f5af0a1e442752993000c41205cdb0d5a474d0975c46a1973->leave($__internal_463fa85a26bfcf4f5af0a1e442752993000c41205cdb0d5a474d0975c46a1973_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Universal:Start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 83,  169 => 80,  104 => 19,  98 => 18,  85 => 10,  79 => 9,  71 => 6,  65 => 5,  58 => 18,  55 => 17,  53 => 9,  50 => 8,  48 => 5,  45 => 4,  39 => 3,  11 => 1,);
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
/*     {% block start %}*/
/*         <li class="active">*/
/*             <a href="dashboard.html">*/
/*                 <i class="pe-7s-home"></i>*/
/*                 <p>Start</p>*/
/*             </a>*/
/*         </li>*/
/*     {% endblock %}*/
/* */
/*     {% block contenido %}*/
/*         <div class="content">*/
/*             <div class="container-fluid">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="card">*/
/*                             <!--AQUÍ VA TODO EL CONTENIDO DE LA PÁGINA-->*/
/*                             <div class="header">*/
/*                                 <h4 class="title">Students</h4>*/
/*                                 <p class="category">Here is a subtitle for this table</p>*/
/*                                 <button type="submit" class="btn btn-success btn-fill pull-right">New Student</button>*/
/*                             </div>*/
/*                             <table id="tabla" class="footable table table-stripped" data-page-size="8" data-filter=#filter>*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Nombre completo</th>*/
/*                                         <th>Clasificación</th>*/
/*                                         <th>Roles</th>*/
/*                                         <th>Fecha ingreso CDS</th>*/
/*                                         <th>Estatus</th>*/
/*                                         <th class="actions"></th>  */
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     <tr>*/
/*                                         <td>test</td>*/
/*                                         <td>test</td>*/
/*                                         <td>test</td>*/
/*                                         <td>test</td>*/
/*                                         <td>test<td>*/
/*                                         <td class="actions pull-right">*/
/*                                             <a data-toggle='modal' data-target="#modal-updatestatus" title="Cambiar estatus" class="btn btn-primary btn-fill">*/
/*                                                 <i class="fa fa-refresh"></i>*/
/*                                             </a>*/
/*                                             <a data-toggle="tooltip" href="" data-placement="top" title="Ver perfil" class="btn btn-info btn-fill">*/
/*                                                 <i class="fa fa-eye"></i>*/
/*                                             </a>*/
/*                                             <a data-toggle='modal' data-target="#modal-deleteResource" title="Eliminar recurso" class="btn btn-warning btn-fill">*/
/*                                                 <i class="fa fa-pencil"></i>*/
/*                                             </a>*/
/*                                             <a data-toggle='modal' data-target="#modal-deleteResource" title="Eliminar recurso" class="btn btn-danger btn-fill">*/
/*                                                 <i class="fa fa-times"></i>*/
/*                                             </a>*/
/*                                         </td>*/
/*                                     <tr>*/
/*                                 </tbody>*/
/*                                 <tfoot>*/
/*                                     <tr>*/
/*                                         <td colspan="12">*/
/*                                             <ul class="pagination pull-right"></ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 </tfoot>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
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
/* */
