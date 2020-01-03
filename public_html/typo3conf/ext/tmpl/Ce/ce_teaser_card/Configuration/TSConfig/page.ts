# **************************************************
# Add the teaser to the "New Content Element Wizard"
# **************************************************
mod.wizards.newContentElement.wizardItems.common {
    elements {
        ce_teaser_card {
            iconIdentifier = content-image
            title = LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:ce.teaser_card_title
            description = LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:ce.teaser_card_description
            tt_content_defValues {
                CType = ce_teaser_card
            }
        }
    }
    show := addToList(ce_teaser_card)
}