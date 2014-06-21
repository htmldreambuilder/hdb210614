<?php

/* HDBwebBundle:Patrones:default.html.twig */
class __TwigTemplate_e8ea73382aed7712cf4e2db2b54e949a94a6f307320309775b6fe836445049db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HDBwebBundle:Plantillas:default.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HDBwebBundle:Plantillas:default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "htmlDream Builder";
    }

    // line 5
    public function block_h1($context, array $blocks = array())
    {
        echo "html Dream Builder";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

";
        // line 11
        echo "
";
        // line 12
        $this->env->loadTemplate("HDBwebBundle:Componentes:cabecera.html.twig")->display($context);
        // line 13
        echo "
";
        // line 14
        $this->env->loadTemplate("HDBwebBundle:Componentes:slider.html.twig")->display($context);
        // line 15
        echo "    
    <!-- Comienzo cuerpo de la página -->
    <h1>Servicios</h1>
    <!-- Fin comienzo de la página -->
    
    ";
        // line 20
        $this->env->loadTemplate("HDBwebBundle:Componentes:pie.html.twig")->display($context);
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Patrones:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  81 => 12,  76 => 8,  37 => 7,  126 => 59,  100 => 46,  90 => 40,  74 => 27,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 53,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 7,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  40 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 21,  49 => 15,  101 => 32,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 20,  56 => 13,  50 => 12,  27 => 4,  87 => 39,  72 => 26,  66 => 6,  55 => 14,  43 => 9,  41 => 7,  32 => 4,  28 => 3,  44 => 12,  31 => 5,  25 => 1,  38 => 6,  24 => 3,  46 => 7,  26 => 6,  22 => 1,  35 => 6,  29 => 3,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 55,  112 => 42,  109 => 34,  106 => 33,  103 => 47,  99 => 31,  95 => 28,  92 => 41,  86 => 13,  82 => 22,  80 => 41,  73 => 19,  64 => 14,  60 => 5,  57 => 11,  54 => 12,  51 => 11,  48 => 8,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 5,  30 => 3,);
    }
}
