<?php

/* VieilleSardineProduitBundle:Produit:ajout_produit.html.twig */
class __TwigTemplate_1d49c6f8d099f447e3228a13c1370b7ab25031b4caf55441ccb01d616bea763a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VieilleSardineProduitBundle::layout_produit.html.twig");

        $this->blocks = array(
            'produit_body' => array($this, 'block_produit_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VieilleSardineProduitBundle::layout_produit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_produit_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>
Titre de test
</h1>
";
    }

    public function getTemplateName()
    {
        return "VieilleSardineProduitBundle:Produit:ajout_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
