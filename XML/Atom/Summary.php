<?php

/**
 * A class used to represent a summary node.
 *
 * @package   XML_Atom
 * @copyright 2008-2017 silverorange
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @link      https://github.com/silverorange/xml-atom
 */
class XML_Atom_Summary extends XML_Atom_Text
{
    // {{{ protected function createNode()

    /**
     * Creates a summary node
     *
     * @param DOMNode $context_node the parent node that will contain this
     *                              summary node.
     *
     * @return DOMNode the summary node.
     */
    protected function createNode(DOMNode $context_node)
    {
        $document = $context_node->ownerDocument;
        return $document->createElementNS(XML_Atom_Node::NS, 'summary');
    }

    // }}}
}

?>
