<?php

/* HDBwebBundle:Plantillas:default.html.twig */
class __TwigTemplate_68b5593374fd663416c235280f1bf52fb77473e543537d272c1a3c7a1dec08f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "htmlDream Builder";
    }

    // line 8
    public function block_metas($context, array $blocks = array())
    {
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Verificación Pinterest -->
    <meta name=\"p:domain_verify\" content=\"e57538ce4ed0c38eb4002a8d5a3a07ef\"/>
";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 20
    public function block_jsTop($context, array $blocks = array())
    {
        // line 21
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/modernizr.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        // line 27
        echo "    <div id=\"fb-root\"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/es_ES/sdk.js#xfbml=1&appId=209268342447451&version=v2.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    ";
        // line 39
        echo "    ";
        $this->env->loadTemplate("HDBwebBundle:Componentes:cabecera.html.twig")->display($context);
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        $this->env->loadTemplate("HDBwebBundle:Componentes:topBar.html.twig")->display($context);
        echo " 

";
    }

    // line 46
    public function block_javaScripts($context, array $blocks = array())
    {
        // line 47
        echo "    <!-- Carga librerías javaScript -->
    <!-- jQuery -->
    <script src=\"//code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>

    <!-- Zurb Foundation -->
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/foundation.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("node_modules/sweetcaptcha/index.js"), "html", null, true);
        echo "\"></script>

    <!-- Scripts propios -->
    <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/functions.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 59
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
        return array (  126 => 59,  100 => 46,  90 => 40,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 20,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 15,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  87 => 39,  28 => 3,  44 => 12,  31 => 5,  25 => 3,  38 => 6,  24 => 3,  46 => 7,  26 => 6,  21 => 2,  19 => 1,  79 => 18,  72 => 26,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 53,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 27,  66 => 24,  55 => 15,  52 => 16,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 55,  112 => 42,  109 => 34,  106 => 36,  103 => 47,  99 => 31,  95 => 28,  92 => 41,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 9,  39 => 8,  36 => 5,  33 => 5,  30 => 7,);
    }
}
