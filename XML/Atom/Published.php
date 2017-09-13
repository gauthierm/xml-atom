<?php

/**
 * Date class definition.
 */

/**
 * An {@link XML_Atom_Date} that indicates the date an entry or feed was
 * published
 *
 * Feeds and entries may have one or zero published dates. If an entry does not
 * have a publiched date, the published date of the parent feed or source
 * applies to the entry. In this case, the feed or source <em>must</em> have a
 * published date.
 *
 * @category  XML
 * @package   XML_Atom
 * @author    Michael Gauthier <mike@silverorange.com>
 * @copyright 2008-2017 silverorange
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @link      https://github.com/silverorange/xml-atom
 * @see       XML_Atom_Entry::setPublished()
 * @see       XML_Atom_Feed::setPublished()
 */
class XML_Atom_Published extends XML_Atom_Date
{
    // {{{ protected function createNode()

    /**
     * Creates a published DOMElement node for this published date
     *
     * @param DOMNode $context_node the context node in the XML document used
     *                              to create this node.
     *
     * @return DOMNode the author DOMElement node.
     */
    protected function createNode(DOMNode $context_node)
    {
        $document = $context_node->ownerDocument;
        return $document->createElementNS(XML_Atom_Node::NS, 'published');
    }

    // }}}
}

?>
