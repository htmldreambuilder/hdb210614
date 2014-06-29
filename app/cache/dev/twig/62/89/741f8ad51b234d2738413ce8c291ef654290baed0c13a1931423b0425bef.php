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
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 35
            echo "                    ";
            $context["url"] = ("hdb_" . (isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")));
            // line 36
            echo "                    ";
            if (((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")) == (isset($context["opcionActiva"]) ? $context["opcionActiva"] : $this->getContext($context, "opcionActiva")))) {
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
            echo $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
            echo "\" 
                           title=\"Ir a ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "html", null, true);
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
        return array (  112 => 15,  101 => 45,  77 => 37,  67 => 34,  47 => 16,  45 => 15,  32 => 4,  27 => 2,  21 => 1,  29 => 3,  19 => 1,  86 => 13,  81 => 39,  76 => 8,  66 => 6,  60 => 5,  55 => 14,  50 => 12,  43 => 9,  40 => 8,  37 => 7,  31 => 5,  25 => 5,  120 => 56,  116 => 55,  110 => 52,  103 => 47,  100 => 46,  92 => 41,  72 => 26,  69 => 25,  62 => 21,  59 => 20,  52 => 13,  49 => 15,  42 => 9,  39 => 8,  33 => 5,  131 => 61,  128 => 60,  123 => 57,  121 => 56,  113 => 50,  111 => 49,  90 => 42,  87 => 39,  85 => 41,  74 => 36,  71 => 35,  64 => 16,  61 => 15,  54 => 12,  51 => 11,  44 => 8,  41 => 7,  35 => 6,  30 => 1,);
    }
}
