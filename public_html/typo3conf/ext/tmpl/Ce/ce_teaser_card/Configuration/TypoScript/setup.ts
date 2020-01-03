tt_content.ce_teaser_card = COA
tt_content.ce_teaser_card.20 = FLUIDTEMPLATE
tt_content.ce_teaser_card.20 {
    templateName = Template
    templateRootPaths.100 = EXT:tmpl/Ce/ce_teaser_card/Resources/Private/Templates/
    partialRootPaths.100 = EXT:tmpl/Ce/ce_teaser_card/Resources/Private/Partials/
    layoutRootPaths.100 = EXT:tmpl/Ce/ce_teaser_card/Resources/Private/Layouts/

    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
            references.fieldName = image
            as = images
        }
    }

}