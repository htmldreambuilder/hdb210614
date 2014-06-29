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

    <section class=\"row aire\">
        <article class=\"small-12 columns text-center\">
            <h1 class=\"logo sombraTexto\">Servicios de desarrollo y diseño web</h1>
        </article>
    </section>
    
    <!-- Servicios-->
    <section class=\"row aire fondoPie\">
        <article class=\"small-12 large-4 columns aireBottom\">
            <ul class=\"no-bullet titularSeccion\">
                <li class=\"text-center\"><h2>Wordpress</h2></li>
                <li class=\"text-center\"><h2>Joomla</h2></li>
                <li class=\"text-center\"><h2>Prestashop</h2></li>
            </ul>
            <p>Descarga la propuesta que mejor se adapte a tu negocio</p>
            <fieldset>
                <legend>Descarga propuestas para CMS</legend>
                <form action=\"#\" method=\"get\" name=\"descargaPropuestasCMS\">
                    <div class=\"row collapse\">
                        <div class=\"small-7 columns\">
                            <select id=\"propuestaCMS\">
                                <option value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("descargas/prestashop.pdf"), "html", null, true);
        echo "\" selected>Tienda prestashop</option>
                                <option value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("descargas/wordpress.pdf"), "html", null, true);
        echo "\">Blog Wordpress</option>
                                ";
        // line 47
        echo "                                ";
        // line 48
        echo "                            </select>
                        </div>
                        <div class=\"small-5 columns\">
                            <a href=\"javascript:descargarPropuesta(\$('#propuestaCMS option:selected').attr('value'));\"
                               class=\"button postfix\" 
                               id=\"descargarPropuestaCMS\">Descargar</a>
                        </div>
                    </div>
                </form>
            </fieldset>

            ";
        // line 62
        echo "            <div class=\"row collapse\">
                <div class=\"small-10 large-offset-1 columns\">
                    <h3 class=\"sombraTexto text-center\">Tiendas onlines, blogs y páginas corporativas</h3>
                </div>
            </div>
        </article>

        <article class=\"small-12 large-4 columns aireBottom\">
            <ul class=\"no-bullet titularSeccion\">
                <li class=\"text-center\"><h2>Php5</h2></li>
                <li class=\"text-center\"><h2>Symfony2</h2></li>
                <li class=\"text-center\"><h2>Angular</h2></li>
            </ul>
            <p>Te atendemos personalmente, muéstranos ese sueño en HTML</p>
            <fieldset>
                <legend>¿Tienes una idea?</legend>
                <a id=\"mostrarCuentanos\"
                   class=\"button radius expand split\">
                    ¡Cuéntanos!
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
                <div class=\"small-10 large-offset-1 columns\">
                    <h3 class=\"sombraTexto text-center\">Aplicaciones de gestión, aplicaciones móviles</h3>
                </div>
            </div>
        </article>

        <article class=\"small-12 large-4 columns aireBottom\">
            <ul class=\"no-bullet titularSeccion\">
                <li class=\"text-center\"><h2>SEO</h2></li>
                <li class=\"text-center\"><h2>Social Media</h2></li>
                <li class=\"text-center\"><h2>Adwords</h2></li>
            </ul>
            <p>Difusión social, Posicionamiento en Buscadores, Linkbuilding, SEM...</p>
            ";
        // line 122
        echo "
            ";
        // line 126
        echo "            <div class=\"row collapse\">
                <div class=\"small-10 large-offset-1 columns\">
                    <h3 class=\"sombraTexto text-center\">SEO avanzado y social marketing</h3>
                </div>
            </div>

        </article>
    </section>

    <!-- Fin slider servicios -->

    ";
        // line 137
        $this->env->loadTemplate("HDBwebBundle:Componentes:pie.html.twig")->display($context);
        // line 138
        echo "
";
    }

    // line 141
    public function block_javaScripts($context, array $blocks = array())
    {
        // line 142
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
        return array (  204 => 142,  201 => 141,  196 => 138,  194 => 137,  181 => 126,  178 => 122,  162 => 91,  158 => 86,  156 => 85,  131 => 62,  118 => 48,  116 => 47,  112 => 45,  108 => 44,  81 => 21,  78 => 20,  72 => 18,  65 => 15,  62 => 14,  55 => 11,  52 => 10,  45 => 7,  42 => 6,  36 => 4,  31 => 1,);
    }
}
