tt_content.ce_mainpage_slider = COA
tt_content.ce_mainpage_slider {
    10 = FLUIDTEMPLATE
    10 {
		
		file = EXT:tmpl/Ce/ce_mainpage_slider/Resources/Private/Templates/MainpageSlider.html
		partialRootPath = EXT:tmpl/Ce/ce_mainpage_slider/Resources/Private/Partials/
		layoutRootPath = EXT:tmpl/Ce/ce_mainpage_slider/Resources/Private/Layouts/
    
    dataProcessing {
			10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
			10 {
				table = tx_tmplcemainslider_item
				orderBy = sorting				
				where {
					data = field:uid
					intval = 1
					wrap = tt_content=|
					parentid=###uid### AND deleted=0 AND hidden=0 AND 1=1
				}
				#markers.uid.field = uid
				as = slides
        dataProcessing {
        	10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
					10 {
          	references {
            table = tx_tmplcemainslider_item
            fieldName = image
          	}
          	as = images
         	}
       		}
		}
     }
   }
}