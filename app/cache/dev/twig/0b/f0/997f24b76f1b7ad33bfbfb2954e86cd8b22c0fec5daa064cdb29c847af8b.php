<?php

/* HDBwebBundle:Componentes:cabecera.html.twig */
class __TwigTemplate_0bf0997f24b76f1b7ad33bfbfb2954e86cd8b22c0fec5daa064cdb29c847af8b extends Twig_Template
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
        // line 1
        echo "<!-- Cabecera -->
<div class=\"fondoOscuro\">
    <section class=\"row\" id=\"alerta\">
        <article class=\"small-12 columns\">
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("hdb_inicio");
        echo "\" title=\"Ir a la página inicial\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logoInvertidoSombra.png"), "html", null, true);
        echo "\" alt=\"Logo\">
            </a>
        </article>
    </section>
</div>
<!-- Fin cabecera -->";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Componentes:cabecera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  19 => 1,  86 => 13,  81 => 12,  76 => 8,  66 => 6,  60 => 5,  55 => 14,  50 => 12,  43 => 9,  40 => 8,  37 => 7,  31 => 5,  25 => 5,  120 => 56,  116 => 55,  110 => 52,  103 => 47,  100 => 46,  92 => 41,  72 => 26,  69 => 25,  62 => 21,  59 => 20,  52 => 13,  49 => 15,  42 => 9,  39 => 8,  33 => 5,  131 => 61,  128 => 60,  123 => 57,  121 => 56,  113 => 50,  111 => 49,  90 => 40,  87 => 39,  85 => 27,  74 => 27,  71 => 7,  64 => 16,  61 => 15,  54 => 12,  51 => 11,  44 => 8,  41 => 7,  35 => 6,  30 => 1,);
    }
}
