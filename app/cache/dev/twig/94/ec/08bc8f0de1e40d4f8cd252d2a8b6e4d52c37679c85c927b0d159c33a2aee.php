<?php

/* HDBwebBundle:Default:index.html.twig */
class __TwigTemplate_94ec08bc8f0de1e40d4f8cd252d2a8b6e4d52c37679c85c927b0d159c33a2aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HDBwebBundle:Plantillas:default.html.twig");

        $this->blocks = array(
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
        return "HDBwebBundle:Plantillas:default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["opcionActiva"] = "inicio";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        // line 6
        echo "    htmlDream Builder, consultoría web en Madrid
";
    }

    // line 9
    public function block_metas($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("metas", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_jsTop($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("jsTop", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo " 
    <section class=\"row aire\">
        <article class=\"small-12 columns text-center\">
            <h1 class=\"logo sombraTexto\">htmlDream <span class=\"logo2\">Builder</span></h1>
            <h2 class=\"subheader\">Tu consultora web low-cost en Madrid</h2>
        </article>
    </section>
    ";
        // line 29
        $this->env->loadTemplate("HDBwebBundle:Componentes:slider.html.twig")->display($context);
        // line 30
        echo "
    ";
        // line 32
        echo "    <section class=\"row aireBottom\">

        <!-- Resumen de motivos -->
        <article class=\"small-12 medium-6 large-4 large-offset-2 columns\">
            <ul class=\"no-bullet sombraTexto small-text-center medium-text-right large-text-right\">
                <li><h3>100% Responsive design</h3></li>
                <li><h3>Alta relación calidad/precio</h3></li>
                <li><h3>SEO potente en buscadores</h3></li>
                <li><h3>Webs eficientes y rápidas</h3></li>
                <li><h3>Tiendas seguras y atractivas</h3></li>
                <li><h3>Soluciones a medida</h3></li>
            </ul>
        </article>
        <!-- Fin resumen de motivos -->

        <!-- Mostramos el ormulario de contácto rápido si no se envió-->
        <article class=\"small-12 medium-6 large-3 left columns\">
            <h3><span class=\"sans\">¿Te podemos ayudar?</span> <br>¿Tienes una idea?</h3>

            ";
        // line 51
        $this->env->loadTemplate("HDBwebBundle:Componentes:contactoRapidoForm.html.twig")->display($context);
        // line 52
        echo "
        </article>
        <!-- Fin formulario de contacto rápido -->
    </section>
    <!-- Fin contacto rápido -->

    ";
        // line 58
        $this->env->loadTemplate("HDBwebBundle:Componentes:pie.html.twig")->display($context);
        // line 59
        echo "
";
    }

    // line 62
    public function block_javaScripts($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $this->displayParentBlock("javaScripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "HDBwebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 63,  130 => 62,  125 => 59,  123 => 58,  115 => 52,  113 => 51,  92 => 32,  89 => 30,  87 => 29,  76 => 22,  73 => 21,  66 => 18,  63 => 17,  56 => 14,  53 => 13,  46 => 10,  43 => 9,  38 => 6,  35 => 5,  30 => 1,);
    }
}
