<?php

/* saelaiBundle:Default:index.html.twig */
class __TwigTemplate_c6e35c4add890bfcc3e5e6381503b2285f7e5e5cef3c232aa3135d882864ea18 extends Twig_Template
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
        $__internal_c44bbc55aabe1e0397ea6981183ac8ec35aa1d6bec392f3c91943f6e96882a1d = $this->env->getExtension("native_profiler");
        $__internal_c44bbc55aabe1e0397ea6981183ac8ec35aa1d6bec392f3c91943f6e96882a1d->enter($__internal_c44bbc55aabe1e0397ea6981183ac8ec35aa1d6bec392f3c91943f6e96882a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saelaiBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>SAELAI</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"robots\" content=\"all,follow\">
        <!-- Bootstrap CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Google fonts - Roboto -->
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700\">
        <!-- theme stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
        <!-- Custom stylesheet - for your changes-->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/css/custom.css"), "html", null, true);
        echo "\">
        <!-- Favicon-->
        <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/img/favicon.ico"), "html", null, true);
        echo "\">
        <!-- Font Awesome CDN-->
        <!-- you can replace it by local Font Awesome-->
        <script src=\"https://use.fontawesome.com/99347ac47f.js\"></script>
        <!-- Font Icons CSS-->
        <link rel=\"stylesheet\" href=\"https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css\">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    </head>
    <body>
        <div class=\"page login-page\">
            <div class=\"container d-flex align-items-center\">
                <div class=\"form-holder has-shadow\">
                    <div class=\"row\">
                        <!-- Logo & Information Panel-->
                        <div class=\"col-lg-6\">
                            <div class=\"info d-flex align-items-center\">
                                <div class=\"content\">                
                                    <div class=\"logo\">
                                        <h1>SAELAI</h1>
                                    </div>
                                    <br>
                                    <p>SISTEMA DE APLICACIÓN DE EXAMENES EN LÍNEA PARA LA ACADEMIA DE IDIOMAS</p>                               
                                    <br><br><br><br><br><br><br>
                                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/img/logo_academia_idiomas.png"), "html", null, true);
        echo "\" alt=\"...\" height=\"63\" width=\"200\" class=\"img-rounded pull-right\"> &nbsp; &nbsp; &nbsp;    
                                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/assets/img/logo_utez.png"), "html", null, true);
        echo "\" alt=\"...\" height=\"63\" width=\"81\" class=\"img-rounded pull-left\">
                                </div>
                            </div> 

                        </div>
                        <!-- Form Panel    -->
                        <div class=\"col-lg-6 bg-white\">
                            <div class=\"form d-flex align-items-center\">
                                <div class=\"content\">
                                    <form id=\"login-form\" method=\"post\" action=\"\">
                                        <div class=\"form-group\">
                                            <input id=\"login-username\" type=\"text\" name=\"loginUsername\" required=\"\" class=\"input-material\">
                                            <label for=\"login-username\" class=\"label-material\">Email</label>
                                        </div>
                                        <div class=\"form-group\">
                                            <input id=\"login-password\" type=\"password\" name=\"loginPassword\" required=\"\" class=\"input-material\">
                                            <label for=\"login-password\" class=\"label-material\">Password</label>
                                        </div><a id=\"login\" href=\"index.html\" class=\"btn btn-primary\">Login</a>
                                        <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                                    </form><a href=\"#\" class=\"forgot-pass\">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"copyrights text-center\">
                <p>Design by <a href=\"https://bootstrapious.com/admin-templates\" class=\"external\">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
        </div>
        <!-- Javascript files-->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/js/tether.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/template/js/front.js"), "html", null, true);
        echo "\"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>
    </body>
</html>";
        
        $__internal_c44bbc55aabe1e0397ea6981183ac8ec35aa1d6bec392f3c91943f6e96882a1d->leave($__internal_c44bbc55aabe1e0397ea6981183ac8ec35aa1d6bec392f3c91943f6e96882a1d_prof);

    }

    public function getTemplateName()
    {
        return "saelaiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 82,  131 => 81,  127 => 80,  123 => 79,  119 => 78,  83 => 45,  79 => 44,  51 => 19,  46 => 17,  41 => 15,  34 => 11,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <title>SAELAI</title>*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="robots" content="all,follow">*/
/*         <!-- Bootstrap CSS-->*/
/*         <link rel="stylesheet" href="{{asset('bundles/template/css/bootstrap.min.css')}}">*/
/*         <!-- Google fonts - Roboto -->*/
/*         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">*/
/*         <!-- theme stylesheet-->*/
/*         <link rel="stylesheet" href="{{asset('bundles/template/css/style.default.css')}}" id="theme-stylesheet">*/
/*         <!-- Custom stylesheet - for your changes-->*/
/*         <link rel="stylesheet" href="{{asset('bundles/template/css/custom.css')}}">*/
/*         <!-- Favicon-->*/
/*         <link rel="shortcut icon" href="{{asset('bundles/template/img/favicon.ico')}}">*/
/*         <!-- Font Awesome CDN-->*/
/*         <!-- you can replace it by local Font Awesome-->*/
/*         <script src="https://use.fontawesome.com/99347ac47f.js"></script>*/
/*         <!-- Font Icons CSS-->*/
/*         <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">*/
/*         <!-- Tweaks for older IEs--><!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->*/
/*     </head>*/
/*     <body>*/
/*         <div class="page login-page">*/
/*             <div class="container d-flex align-items-center">*/
/*                 <div class="form-holder has-shadow">*/
/*                     <div class="row">*/
/*                         <!-- Logo & Information Panel-->*/
/*                         <div class="col-lg-6">*/
/*                             <div class="info d-flex align-items-center">*/
/*                                 <div class="content">                */
/*                                     <div class="logo">*/
/*                                         <h1>SAELAI</h1>*/
/*                                     </div>*/
/*                                     <br>*/
/*                                     <p>SISTEMA DE APLICACIÓN DE EXAMENES EN LÍNEA PARA LA ACADEMIA DE IDIOMAS</p>                               */
/*                                     <br><br><br><br><br><br><br>*/
/*                                     <img src="{{asset('bundles/assets/img/logo_academia_idiomas.png')}}" alt="..." height="63" width="200" class="img-rounded pull-right"> &nbsp; &nbsp; &nbsp;    */
/*                                     <img src="{{asset('bundles/assets/img/logo_utez.png')}}" alt="..." height="63" width="81" class="img-rounded pull-left">*/
/*                                 </div>*/
/*                             </div> */
/* */
/*                         </div>*/
/*                         <!-- Form Panel    -->*/
/*                         <div class="col-lg-6 bg-white">*/
/*                             <div class="form d-flex align-items-center">*/
/*                                 <div class="content">*/
/*                                     <form id="login-form" method="post" action="">*/
/*                                         <div class="form-group">*/
/*                                             <input id="login-username" type="text" name="loginUsername" required="" class="input-material">*/
/*                                             <label for="login-username" class="label-material">Email</label>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <input id="login-password" type="password" name="loginPassword" required="" class="input-material">*/
/*                                             <label for="login-password" class="label-material">Password</label>*/
/*                                         </div><a id="login" href="index.html" class="btn btn-primary">Login</a>*/
/*                                         <!-- This should be submit button but I replaced it with <a> for demo purposes-->*/
/*                                     </form><a href="#" class="forgot-pass">Forgot Password?</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="copyrights text-center">*/
/*                 <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>*/
/*                 <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->*/
/*             </div>*/
/*         </div>*/
/*         <!-- Javascript files-->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*         <script src="{{asset('bundles/template/js/tether.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/template/js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/template/js/jquery.cookie.js')}}"></script>*/
/*         <script src="{{asset('bundles/template/js/jquery.validate.min.js')}}"></script>*/
/*         <script src="{{asset('bundles/template/js/front.js')}}"></script>*/
/*         <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->*/
/*         <!---->*/
/*         <script>*/
/*             (function (b, o, i, l, e, r) {*/
/*                 b.GoogleAnalyticsObject = l;*/
/*                 b[l] || (b[l] =*/
/*                         function () {*/
/*                             (b[l].q = b[l].q || []).push(arguments)*/
/*                         });*/
/*                 b[l].l = +new Date;*/
/*                 e = o.createElement(i);*/
/*                 r = o.getElementsByTagName(i)[0];*/
/*                 e.src = '//www.google-analytics.com/analytics.js';*/
/*                 r.parentNode.insertBefore(e, r)*/
/*             }(window, document, 'script', 'ga'));*/
/*             ga('create', 'UA-XXXXX-X');*/
/*             ga('send', 'pageview');*/
/*         </script>*/
/*     </body>*/
/* </html>*/
