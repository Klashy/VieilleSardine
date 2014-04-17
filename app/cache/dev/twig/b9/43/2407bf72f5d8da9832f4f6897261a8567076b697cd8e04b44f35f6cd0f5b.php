<?php

/* VieilleSardineProduitBundle:Produit:layout_produit.html.twig */
class __TwigTemplate_b9432407bf72f5d8da9832f4f6897261a8567076b697cd8e04b44f35f6cd0f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::principal_layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'produit_body' => array($this, 'block_produit_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::principal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <table>
            <tr>
                <td><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("vieille_sardine_produit_ajout");
        echo "\">Ajout</a></td>
                <td><a href=\"\">Modification</a></td>
                <td><a href=\"\">Supprimer</a></td>
            </tr>
        </table>
        ";
        // line 11
        $this->displayBlock('produit_body', $context, $blocks);
    }

    public function block_produit_body($context, array $blocks = array())
    {
        // line 12
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "VieilleSardineProduitBundle:Produit:layout_produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  44 => 11,  36 => 6,  32 => 4,  29 => 3,);
    }
}
