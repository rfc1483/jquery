<?php

/* AcmeJqueryBundle:Default:ajax.html.twig */
class __TwigTemplate_0eebe487cc8922d651f36591dd0c88fc extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeJqueryBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 21
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
          \$(\"button\").click(function(){
            \$(\"div.ajax\").load(\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmejquery/test.txt"), "html");
        echo "\");
          });
        });            
    </script>        
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <h1>Ajax</h1>
    
    <div class=\"ajax\">Let AJAX change this text</div>
    <button>Change Content</button>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
