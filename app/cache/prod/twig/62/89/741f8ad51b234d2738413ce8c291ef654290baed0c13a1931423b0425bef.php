<?php

/* HDBwebBundle:Componentes:topBar.html.twig */
class __TwigTemplate_6289741f8ad51b234d2738413ce8c291ef654290baed0c13a1931423b0425bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topBar' => array($this, 'block_topBar'),
            'h1' => array($this, 'block_h1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('topBar', $context, $blocks);
    }

    public function block_topBar($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["opciones"] = array(0 => "inicio", 1 => "servicios");
        // line 4
        echo "
    <!-- Menú principal -->
    <section class=\"contain-to-grid sticky\">

        <nav class=\"row top-bar\" data-topbar data-options=\"sticky_on: large\">
            <!-- Título en menú si se requiere -->
            <ul class=\"title-area\">
                <!-- Título en menú -->
                <li class=\"name\">
                    <h1 class=\"\">
                        <a href=\"#\" title=\"Ir a la página de inicio\">
                        ";
        // line 15
        $this->displayBlock('h1', $context, $blocks);
        // line 16
        echo "                    </a>
                </h1>
            </li>
            <li class=\"toggle-topbar menu-icon\">
                <a href=\"#\" title=\"Abrir menú\">Menú</a>
            </li>
        </ul>
        <article class=\"top-bar-section\">

            <!-- Zona izquierda del menú -->
            <ul class=\"left\">
                <li class=\"name\">              
                    <a href=\"tel:615091386\" title=\"Llámanos al 615091386\">Tel: 615 091 386</a>
                </li>  
            </ul>

            <!-- Zona derecha del menú -->
            <ul class=\"right\">
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 35
            echo "                    ";
            $context["url"] = ("hdb_" . (isset($context["opcion"]) ? $context["opcion"] : null));
            // line 36
            echo "                    ";
            if (((isset($context["opcion"]) ? $context["opcion"] : null) == (isset($context["opcionActiva"]) ? $context["opcionActiva"] : null))) {
                // line 37
                echo "                        <li class=\"active\">
                    ";
            } else {
                // line 39
                echo "                        <li>
                    ";
            }
            // line 41
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null));
            echo "\" 
                           title=\"Ir a ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["opcion"]) ? $context["opcion"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["opcion"]) ? $context["opcion"] : null), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </ul>

        </article>
    </nav>

</section>
<!-- Fin menú principal -->
";
    }

    // line 15
    public function block_h1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Componentes:topBar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 48,  77 => 37,  70 => 38,  81 => 39,  76 => 8,  37 => 7,  126 => 59,  100 => 46,  90 => 42,  74 => 36,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 53,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 35,  67 => 34,  63 => 15,  59 => 14,  47 => 16,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  40 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 53,  69 => 25,  62 => 31,  49 => 15,  101 => 45,  94 => 28,  89 => 20,  85 => 41,  79 => 18,  75 => 39,  68 => 20,  56 => 13,  50 => 22,  27 => 2,  87 => 39,  72 => 26,  66 => 6,  55 => 26,  43 => 17,  41 => 7,  32 => 4,  28 => 3,  44 => 12,  31 => 8,  25 => 4,  38 => 13,  24 => 3,  46 => 7,  26 => 6,  22 => 1,  35 => 6,  29 => 3,  21 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 58,  116 => 55,  112 => 15,  109 => 34,  106 => 33,  103 => 47,  99 => 31,  95 => 28,  92 => 41,  86 => 13,  82 => 46,  80 => 41,  73 => 40,  64 => 14,  60 => 27,  57 => 11,  54 => 12,  51 => 11,  48 => 18,  45 => 15,  42 => 7,  39 => 8,  36 => 9,  33 => 5,  30 => 3,);
    }
}
