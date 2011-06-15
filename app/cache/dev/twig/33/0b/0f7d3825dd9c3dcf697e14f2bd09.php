<?php

/* AcmeJqueryBundle:Default:fade.html.twig */
class __TwigTemplate_330b0f7d3825dd9c3dcf697e14f2bd09 extends Twig_Template
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

        // line 22
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
                \$(\"div.fade\").fadeTo(\"slow\", 0.25)
            });
        });
    </script>        
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <h1>Fade</h1>
    
    <div class=\"fade\" style=\"background:yellow;width:300px;height:300px\">
        <button>Click to Fade</button>
    </div>  
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:fade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
