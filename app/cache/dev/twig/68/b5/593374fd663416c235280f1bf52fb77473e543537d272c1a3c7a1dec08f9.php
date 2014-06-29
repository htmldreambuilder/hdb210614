<?php

/* HDBwebBundle:Plantillas:default.html.twig */
class __TwigTemplate_68b5593374fd663416c235280f1bf52fb77473e543537d272c1a3c7a1dec08f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'pagina' => array($this, 'block_pagina'),
            'titulo' => array($this, 'block_titulo'),
            'metas' => array($this, 'block_metas'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsTop' => array($this, 'block_jsTop'),
            'body' => array($this, 'block_body'),
            'javaScripts' => array($this, 'block_javaScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pagina($context, array $blocks = array())
    {
        // line 4
        echo "
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"UTF-8\" />
            <title>";
        // line 9
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>
            ";
        // line 10
        $this->displayBlock('metas', $context, $blocks);
        // line 17
        echo "            ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('jsTop', $context, $blocks);
        // line 24
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        </head>
        <body class=\"fondo\">
            ";
        // line 28
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "            ";
        $this->displayBlock('javaScripts', $context, $blocks);
        // line 78
        echo "        </body>
    </html>

";
    }

    // line 9
    public function block_titulo($context, array $blocks = array())
    {
        echo "htmlDream Builder";
    }

    // line 10
    public function block_metas($context, array $blocks = array())
    {
        // line 11
        echo "                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                <!-- VErificación WebmasterTools -->
                <meta name=\"google-site-verification\" content=\"RIBD5CANUndscleC5symCe6mwAhEyFRw34_3axFMmSA\" />
                <!-- Verificación Pinterest -->
                <meta name=\"p:domain_verify\" content=\"e57538ce4ed0c38eb4002a8d5a3a07ef\"/>
            ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "                ";
        // line 19
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            ";
    }

    // line 21
    public function block_jsTop($context, array $blocks = array())
    {
        // line 22
        echo "                <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/modernizr.js"), "html", null, true);
        echo "\"></script>
            ";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        // line 30
        echo "                <div id=\"fb-root\"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = \"//connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=209268342447451&version=v2.0\";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <!-- Analytics -->
                <script>
                    (function(i, s, o, g, r, a, m) {
                        i['GoogleAnalyticsObject'] = r;
                        i[r] = i[r] || function() {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                        a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                        a.async = 1;
                        a.src = g;
                        m.parentNode.insertBefore(a, m)
                    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                    ga('create', 'UA-52067062-1', 'auto');
                    ga('send', 'pageview');

                </script>

                ";
        // line 61
        echo "                ";
        $this->env->loadTemplate("HDBwebBundle:Componentes:cabecera.html.twig")->display($context);
        // line 62
        echo "                ";
        // line 63
        echo "                ";
        $this->env->loadTemplate("HDBwebBundle:Componentes:topBar.html.twig")->display($context);
        echo " 

            ";
    }

    // line 66
    public function block_javaScripts($context, array $blocks = array())
    {
        // line 67
        echo "                <!-- Carga librerías javaScript -->
                <script src=\"//code.jquery.com/jquery-1.9.1.js\"></script>
                <script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>

                <!-- Zurb Foundation -->
                <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/foundation.min.js"), "html", null, true);
        echo "\"></script>

                <!-- Scripts propios -->
                <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/constructor.js"), "html", null, true);
        echo "\"></script>
            ";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Plantillas:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 76,  182 => 75,  176 => 72,  169 => 67,  166 => 66,  158 => 63,  156 => 62,  153 => 61,  121 => 30,  119 => 29,  116 => 28,  109 => 22,  106 => 21,  99 => 19,  97 => 18,  94 => 17,  85 => 11,  82 => 10,  76 => 9,  69 => 78,  66 => 66,  63 => 28,  56 => 24,  53 => 21,  50 => 17,  48 => 10,  44 => 9,  37 => 4,  34 => 3,);
    }
}
