<?php

/* HDBwebBundle:Default:servicios.html.twig */
class __TwigTemplate_6be3d57725e91c6adf852237930d577a627306a6a7bcc45485ea117e1cafe5bb extends Twig_Template
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
        $context["opcionActiva"] = "servicios";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_tilte($context, array $blocks = array())
    {
        echo "Servicios de consultoría web de htmlDreamBuilder";
    }

    // line 6
    public function block_metas($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("metas", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_jsTop($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->displayParentBlock("jsTop", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_h1($context, array $blocks = array())
    {
        echo "Servicios";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <!-- Slider servicios-->
    <section class=\"row aire fondoPie\">
        <article class=\"small-12 large-4 columns\">
            <ul class=\"no-bullet titularSeccion\">
                <li class=\"text-center\"><h2>Wordpress</h2></li>
                <li class=\"text-center\"><h2>Joomla</h2></li>
                <li class=\"text-center\"><h2>Prestashop</h2></li>
            </ul>
            <p>Hazte fan y descarga la propuesta que mejor se adapte a tu negocio</p>
            <fieldset>
                <legend>Descarga propuestas para CMS</legend>
                <form action=\"#\" method=\"get\" name=\"descargaPropuestasCMS\">
                    <div class=\"row collapse\">
                        <div class=\"small-8 columns\">
                            <select id=\"propuestaCMS\">
                                <option value=\"prestashop\" selected>Tienda prestashop</option>
                                <option value=\"wordpress\">Blog Wordpress</option>
                                ";
        // line 41
        echo "                                ";
        // line 42
        echo "                            </select>
                        </div>
                        <div class=\"small-4 columns\">
                            <a href=\"javascript:descargarPropuesta(\$('#propuestaCMS option:selected').attr('value'));\"
                               class=\"button postfix\" 
                               id=\"descargarPropuestaCMS\">Desgargar</a>
                        </div>
                    </div>
                </form>
            </fieldset>

            ";
        // line 56
        echo "            <div class=\"row collapse\">
                <div class=\"small-1 columns\">
                    <span class=\"comillas\">\"</span>
                </div>
                <div class=\"small-10 columns\">
                    <h3 class=\"sombraTexto\">Tiendas onlines, blogs y páginas corporativas</h3>
                </div>
                <div class=\"small-1 columns\">
                    <span class=\"comillas\">\"</span>
                </div>
            </div>
        </article>

        <article class=\"small-12 large-4 columns\">
            <ul class=\"no-bullet titularSeccion\">
                <li class=\"text-center\"><h2>Php5</h2></li>
                <li class=\"text-center\"><h2>Synfony2</h2></li>
                <li class=\"text-center\"><h2>Angular</h2></li>
            </ul>
            <p>Te atendemos personalmente, muestranos ese sueño en HTML</p>
            <fieldset>
                <legend>¿Tienes una idea?</legend>
                <a class=\"button small radius expand split\" 
                   id=\"mostrarCuentanos\">
                    ¡Cuentanos!
                    <span data-dropdown=\"drop\"></span>
                </a>
                
                <div id=\"formulario\" class=\"hide aireTop\">
                    ";
        // line 85
        $this->env->loadTemplate("HDBwebBundle:Componentes:contactoRapidoForm.html.twig")->display($context);
        // line 86
        echo "                </div>
            </fieldset>
            ";
        // line 91
        echo "            <div class=\"row collapse\">
                <div class=\"small-1 columns\">
                    <span class=\"comillas\">\"</span>
                </div>
                <div class=\"small-10 columns\">
                    <h3 class=\"sombraTexto\">Aplicaciones de gestión, aplicaciones móviles, widets</h3>
                </div>
                <div class=\"small-1 columns\">
                    <span class=\"comillas\">\"</span>
                </div>
            </div>
        </article>

        <article class=\"small-12 large-4 columns\">
            <ul class=\"no-bullet titularSeccion\">
                <li class=\"text-center\"><h2>SEO</h2></li>
                <li class=\"text-center\"><h2>Social Media</h2></li>
                <li class=\"text-center\"><h2>Adwords</h2></li>
            </ul>
            <p>Difusión social, Posicionamiento en Buscadores, Linkbuilding, SEM...</p>
            ";
        // line 128
        echo "
            ";
        // line 132
        echo "            <div class=\"row collapse\">
                <div class=\"small-1 columns\">
                    <span class=\"comillas\">\"</span>
                </div>
                <div class=\"small-10 columns\">
                    <h3 class=\"sombraTexto\">SEO avanzado y social marketing</h3>
                </div>
                <div class=\"small-1 columns\">
                    <span class=\"comillas\">\"</span>
                </div>
            </div>

        </article>
    </section>

    <!-- Fin slider servicios -->

    ";
        // line 149
        $this->env->loadTemplate("HDBwebBundle:Componentes:pie.html.twig")->display($context);
        // line 150
        echo "
";
    }

    // line 153
    public function block_javaScripts($context, array $blocks = array())
    {
        // line 154
        echo "    ";
        $this->displayParentBlock("javaScripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Default:servicios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 154,  207 => 153,  202 => 150,  200 => 149,  181 => 132,  178 => 128,  152 => 86,  150 => 85,  104 => 41,  113 => 46,  160 => 78,  155 => 75,  153 => 74,  127 => 53,  118 => 48,  65 => 15,  84 => 48,  77 => 37,  70 => 38,  81 => 21,  76 => 8,  126 => 59,  100 => 46,  90 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 58,  119 => 56,  102 => 35,  71 => 35,  67 => 34,  63 => 15,  59 => 14,  93 => 28,  88 => 6,  78 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 79,  158 => 67,  156 => 91,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 53,  62 => 14,  49 => 15,  94 => 28,  89 => 25,  85 => 41,  75 => 39,  68 => 20,  56 => 13,  27 => 7,  87 => 24,  28 => 9,  44 => 21,  31 => 1,  25 => 4,  38 => 13,  24 => 3,  46 => 7,  26 => 6,  21 => 1,  19 => 2,  79 => 18,  72 => 18,  69 => 38,  47 => 16,  40 => 20,  37 => 7,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 49,  115 => 47,  111 => 53,  108 => 36,  101 => 45,  98 => 31,  96 => 31,  83 => 25,  74 => 41,  66 => 6,  55 => 11,  52 => 10,  50 => 22,  43 => 17,  41 => 7,  35 => 12,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 58,  130 => 57,  125 => 54,  122 => 58,  116 => 55,  112 => 15,  109 => 34,  106 => 42,  103 => 47,  99 => 31,  95 => 31,  92 => 27,  86 => 13,  82 => 46,  80 => 41,  73 => 40,  64 => 14,  60 => 27,  57 => 11,  54 => 12,  51 => 11,  48 => 22,  45 => 7,  42 => 6,  39 => 8,  36 => 4,  33 => 5,  30 => 3,);
    }
}
