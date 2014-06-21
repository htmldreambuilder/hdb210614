<?php

/* HDBwebBundle:Default:cazaycampo.html.twig */
class __TwigTemplate_f1e16965937b96e1fe019365fa061b1a1c844fec453230cd1acacb207ae452e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HDBwebBundle:Plantillas:default.html.twig");

        $this->blocks = array(
            'tilte' => array($this, 'block_tilte'),
            'metas' => array($this, 'block_metas'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsTop' => array($this, 'block_jsTop'),
            'h1' => array($this, 'block_h1'),
            'body' => array($this, 'block_body'),
            'javaScripts' => array($this, 'block_javaScripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HDBwebBundle:Plantillas:default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["opcionActiva"] = "cazaycampo";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_tilte($context, array $blocks = array())
    {
        echo "Contacto con código promocional";
    }

    // line 7
    public function block_metas($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("metas", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_jsTop($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("jsTop", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_h1($context, array $blocks = array())
    {
        echo "htmlDream Builder";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo " 

";
        // line 24
        $this->env->loadTemplate("HDBwebBundle:Componentes:slider.html.twig")->display($context);
        // line 25
        echo "
";
        // line 27
        echo "<section class=\"row aireBottom\">

    <!-- Resumen de motivos -->
    <article class=\"small-12 medium-6 large-4 large-offset-2 columns\">
        <ul class=\"no-bullet sombraTexto small-text-center medium-text-right large-text-right\">
            <li><h4>100% Responsive design</h4></li>
            <li><h4>Alta relación calidad/precio</h4></li>
            <li><h4>SEO potente en buscadores</h4></li>
            <li><h4>Webs eficientes y rápidas</h4></li>
            <li><h4>Tiendas seguras y atractivas</h4></li>
            <li><h4>Soluciones a medida</h4></li>
        </ul>
    </article>
    <!-- Fin resumen de motivos -->

    <!-- Mostramos el ormulario de contácto rápido si no se envió-->
    <article class=\"small-12 medium-6 large-3 left columns\">
        <h3><span class=\"sans\">¿Te podemos ayudar?</span> <br>¿Tienes una idea?</h3>

        ";
        // line 46
        $this->env->loadTemplate("HDBwebBundle:Componentes:contactoConCodigoForm.html.twig")->display($context);
        // line 47
        echo "
    </article>
    <!-- Fin formulario de contacto rápido -->
</section>
<!-- Fin contacto rápido -->

";
        // line 53
        $this->env->loadTemplate("HDBwebBundle:Componentes:pie.html.twig")->display($context);
        // line 54
        echo "
";
    }

    // line 57
    public function block_javaScripts($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $this->displayParentBlock("javaScripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Default:cazaycampo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  160 => 78,  155 => 75,  153 => 74,  127 => 53,  120 => 49,  118 => 48,  65 => 16,  84 => 48,  77 => 37,  70 => 38,  81 => 22,  76 => 8,  37 => 7,  126 => 59,  100 => 46,  90 => 42,  74 => 41,  52 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 53,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 58,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 35,  67 => 34,  63 => 15,  59 => 14,  47 => 16,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  40 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 79,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 53,  121 => 46,  117 => 44,  115 => 47,  105 => 40,  91 => 53,  69 => 38,  62 => 15,  49 => 15,  101 => 45,  94 => 28,  89 => 25,  85 => 41,  79 => 18,  75 => 39,  68 => 20,  56 => 13,  50 => 22,  27 => 7,  87 => 24,  72 => 19,  66 => 6,  55 => 12,  43 => 17,  41 => 7,  32 => 4,  28 => 9,  44 => 21,  31 => 1,  25 => 4,  38 => 13,  24 => 3,  46 => 7,  26 => 6,  22 => 1,  35 => 12,  29 => 6,  21 => 1,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 58,  130 => 57,  125 => 54,  122 => 58,  116 => 55,  112 => 15,  109 => 34,  106 => 33,  103 => 47,  99 => 31,  95 => 31,  92 => 27,  86 => 13,  82 => 46,  80 => 41,  73 => 40,  64 => 14,  60 => 27,  57 => 11,  54 => 12,  51 => 11,  48 => 22,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 5,  30 => 3,);
    }
}
