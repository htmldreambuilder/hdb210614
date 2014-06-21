<?php

/* HDBwebBundle:Default:enviado.html.twig */
class __TwigTemplate_d495af3b7cbd868db924d5c4b0e893cdbeef3d71e35b1a82de655ccc1c19829e extends Twig_Template
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
        $context["opcionActiva"] = "";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_tilte($context, array $blocks = array())
    {
        echo "Mensaje enviado con éxito";
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
        echo "Hemos recibido tu mensaje";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "    

    <!-- Enviado OK -->
    <section class=\"row collapse aire\">
        <article class=\"small-12 columns\">
            <div class=\"small-12 columns\">
                <h2 class=\" sombraTexto\">Tu mensaje ha sido enviado:</h2>
            </div>

            <div class=\"small-10 small-offset-1 columns\">
                <p class=\"sans sombraTexto\"><span class=\"comillas\">\"</span>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
        echo "<span class=\"comillas\">\"</span></p>
            </div>

            <div class=\"small-12 large-10 large-1 columns\">
                <p class=\"sombraTexto\"><strong class=\"verdeCorporativo\">Enhorabuena ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : null), "html", null, true);
        echo "</strong>, Hemos dado el primer paso para poner en marcha tu idea.<br>
                    Nos pondremos en contacto contigo lo antes posible</p>
                <p class=\"sombraTexto\">Si lo deseas puedes conocernos mejor en los siguientes canales</p>
            </div>
        </article>
    </section>
    <!-- Fin Enviado OK -->

    <!-- Redes sociales -->
    <section class=\"row\">
        <article class=\"small-12 medium-6 large-4 large-offset-2 columns\">

            <!-- Widget Facebook Seguir -->
            ";
        // line 48
        $this->env->loadTemplate("HDBwebBundle:Widgets:facebookSeguir.html.twig")->display($context);
        // line 49
        echo "
            <div class=\"aireBottom\">
                <!-- Widget Twitter Feed -->
                ";
        // line 52
        $this->env->loadTemplate("HDBwebBundle:Widgets:twitterFeed.html.twig")->display($context);
        // line 53
        echo "            </div>
        </article>

        <article class=\"small-12 medium-6 large-4 left columns aireBottom\">
            ";
        // line 57
        $this->env->loadTemplate("HDBwebBundle:Widgets:pinterestPins.html.twig")->display($context);
        // line 58
        echo "            
            <div class=\"row aireTop\">
                <div class=\"small-4 large-4 columns\">
                    <p align=\"left\">
                        <a target=\"_blank\" href=\"http://www.twago.es/p/html+dream+builder/107317\" title=\"Ver perfil en Twago\">
                            <img border=\"0\" src=\"http://www.twago.es/img/provider/es/seal-legs.png\" alt=\"Miembro destacado de twago\" />
                        </a>
                    </p>
                </div>
                <div class=\"small-8 large-8 columns\">
                    <h3 class=\" sombraTexto\">Orgullosos de estar entre los 10 mejores perfiles Freelance de Twago</h3>
                </div>
            </div>
        </article>
    </section>

    ";
        // line 74
        $this->env->loadTemplate("HDBwebBundle:Componentes:pie.html.twig")->display($context);
        // line 75
        echo "
";
    }

    // line 78
    public function block_javaScripts($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $this->displayParentBlock("javaScripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Default:enviado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 78,  155 => 75,  153 => 74,  127 => 53,  120 => 49,  118 => 48,  65 => 15,  84 => 48,  77 => 37,  70 => 38,  81 => 21,  76 => 8,  37 => 7,  126 => 59,  100 => 46,  90 => 42,  74 => 41,  52 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 53,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 58,  131 => 52,  119 => 42,  108 => 36,  102 => 35,  71 => 35,  67 => 34,  63 => 15,  59 => 14,  47 => 16,  98 => 31,  93 => 28,  88 => 6,  78 => 20,  40 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 79,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 53,  69 => 38,  62 => 14,  49 => 15,  101 => 45,  94 => 28,  89 => 20,  85 => 41,  79 => 18,  75 => 39,  68 => 20,  56 => 13,  50 => 22,  27 => 7,  87 => 39,  72 => 18,  66 => 6,  55 => 11,  43 => 17,  41 => 7,  32 => 4,  28 => 9,  44 => 21,  31 => 1,  25 => 4,  38 => 13,  24 => 3,  46 => 7,  26 => 6,  22 => 1,  35 => 12,  29 => 6,  21 => 1,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 57,  130 => 41,  125 => 52,  122 => 58,  116 => 55,  112 => 15,  109 => 34,  106 => 33,  103 => 47,  99 => 31,  95 => 31,  92 => 41,  86 => 13,  82 => 46,  80 => 41,  73 => 40,  64 => 14,  60 => 27,  57 => 11,  54 => 12,  51 => 11,  48 => 22,  45 => 7,  42 => 6,  39 => 8,  36 => 4,  33 => 5,  30 => 3,);
    }
}
