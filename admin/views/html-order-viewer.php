<div id="fpd-order-panel">
	<div id="fpd-order-designer-wrapper">

		<!-- Product Designer Container -->

		<div id="fpd-order-designer-wrapper">
			<div id="fpd-order-designer" class="fpd-views-outside fpd-container fpd-top-actions-centered fpd-topbar fpd-off-canvas-left"></div>
		</div>

		<div id="fpd-order-quick-actions">
			<button class="button-secondary" id="fpd-save-order"><?php _e('Save Order Changes', 'radykal' ); ?></button>
			<button class="button-secondary fpd-admin-tooltip" id="fpd-create-new-fp" title="<?php _e( 'Create a new Product with the current showing views in the Order Viewer.', 'radykal' ); ?>"><?php _e( 'Create Product From Order', 'radykal' ); ?></button>
		</div>

		<!-- Tabs -->
		<div class="radykal-tabs">

			<div class="radykal-tabs-nav">
				<?php

					$order_viewer_tabs = array(
						array( 'id' => 'export', 'name' => __('Basic Export', 'radykal') ),
						array( 'id' => 'print-ready-export-placeholder', 'name' => __('Print-Ready Export', 'radykal') ),
						array( 'id' => 'single-elements', 'name' => __('Single Elements', 'radykal') ),
						array( 'id' => 'depositphotos', 'name' => __('Depositphotos', 'radykal') )
					);

					$order_viewer_tabs = apply_filters( 'fpd_order_viewer_tabs', $order_viewer_tabs );

					$select_first = 'current';
					foreach( $order_viewer_tabs as $order_viewer_tab ) {

						echo '<a href="'. esc_attr( $order_viewer_tab['id'] ) .'" class="'.$select_first.'">'. esc_html( $order_viewer_tab['name'] ) .'</a>';
						$select_first = '';

					}

				?>

				<?php do_action( 'fpd_order_viewer_tabs_end' ); ?>
			</div>

			<div class="radykal-tabs-content">

				<div data-id="export" class="current radykal-columns-two">

					<div>
						<table class="form-table">
							<tr>
								<th><?php _e('Output File', 'radykal' ); ?></th>
								<td>
									<select name="fpd_output_file" style="width: 300px;"  class="radykal-input">
										<option value="pdf" selected="selected"><?php _e('Layered PDF', 'radykal' ); ?></option>
										<option value="pdf-png"><?php _e('PDF with static PNG', 'radykal' ); ?></option>
										<option value="png"><?php _e('PNG', 'radykal' ); ?></option>
										<option value="jpeg"><?php _e('JPEG', 'radykal' ); ?></option>
										<option value="svg"><?php _e('SVG', 'radykal' ); ?></option>
									</select>
								</td>
							</tr>
							<tr class="fpd-views-range">
								<th><?php _e('View(s)', 'radykal' ); ?></th>
								<td>
									<label>
										<?php _e('From:', 'radykal' ); ?>
										<input type="number" name="fpd_view_start" value="1" min="1" step="1" class="widefat radykal-input" />
									</label>
									<label>
										<?php _e('To:', 'radykal' ); ?>
										<input type="number" name="fpd_view_end" value="1" min="1" step="1" class="widefat radykal-input" />
									</label>
								</td>
							</tr>
						</table>
						<button id="fpd-generate-file" class="button button-primary"><?php _e( 'Create', 'radykal' ); ?></button>
						<p class="description"><?php _e( 'The created pdfs will be stored in: ', 'radykal' ); ?><br /><?php echo content_url('/fancy_products_orders/pdfs'); ?></p>
					</div>

					<div>
						<table class="form-table">
							<tr>
								<th>
									<?php _e('Size', 'radykal' ); ?><br />
									<a href="http://www.pixelcalculator.com/" target="_blank" style="font-size: 11px;"><?php _e('DPI - Pixel Converter', 'radykal' ); ?></a>
								</th>
								<td>
									<label class="fpd-block">
										<input type="number" value="210" id="fpd-pdf-width" class="radykal-input" />
										<br />
										<?php _e('PDF width in mm', 'radykal' ); ?>
									</label>
									<label class="fpd-block">
										<input type="number" value="297" id="fpd-pdf-height" class="radykal-input" />
										<br />
										<?php _e('PDF height in mm', 'radykal' ); ?>
									</label>
									<label class="fpd-block">
										<input type="number" value="" name="fpd_scale" placeholder="1" class="radykal-input" />
										<br />
										<?php _e('Scale Factor', 'radykal' ); ?>
									</label>
								</td>
							</tr>
							<tr>
								<th>
								</th>
								<td>
									<label>
										<input type="checkbox" id="fpd-pdf-include-text-summary" />
										<?php _e( 'Adds an additional page with information about all elements.', 'radykal' ); ?>
									</label>
								</td>
							</tr>
						</table>
					</div>

				</div><!-- Export -->

				<div data-id="print-ready-export-placeholder">

					<div class="radykal-columns-two">

						<div>
							<h3 style="margin-top: 0;"><?php _e( 'Create ready-to-print files <u>on your server</u>', 'radykal' ); ?></h3>
							<ul style="list-style: circle; margin-left: 20px;">
								<li>Layered PDF with <b>embedded  fonts</b></li>
								<li>Bitmap (PNG/JPEG) Export in <b>any</b> DPI (Requires Imagick on your server)</li>
								<li>Exclude Layers From Export</li>
								<li>Define <b>printing areas</b>(Media Box, Bleeding Box)</li><li>Define <b>any size</b> for the exported printing area (e.g. A1, A2 or a custom size)</li>
							</ul>

							<h3><?php _e( 'Automated Export Via Mail', 'radykal' ); ?></h3>
							<p>As soon as you receive an order from a customer, the system  automatically sends the customized product as print-ready file to the Site Owner. It can also be sent automatically to the customer as soon as the order is paid.</p>
						</div>

						<div>

							<a href="https://elopage.com/s/radykal/fancy-product-designer-export-add-on/payment?locale=en" target="blank" class="button button-primary" id="banner-pr-get-button">
								<span class="dashicons dashicons-download"></span>GET EXPORT ADD-ON
							</a>

						</div>

					</div>
					<style type="text/css">

						#banner-pr-get-button {
							font-size: 22px;
							height: 45px;
							margin-top: 80px;
							margin-left: 60px;
							line-height: 40px;
						}

						#banner-pr-get-button span {
							font-size: 24px;
							margin-right: 5px;
							line-height: 40px;
						}

					</style>


				</div>
				<!-- Print-Ready Export Placeholder -->


				<div data-id="single-elements">

					<h4><?php _e( 'Selected Element', 'radykal' ); ?></h4>
					<div id="fpd-editor-box-wrapper"></div>

					<h4><?php _e( 'Export Options', 'radykal' ); ?></h4>
					<div class="radykal-columns-two">

						<div>
							<table class="form-table">
								<tr>
									<th><?php _e('Image Format', 'radykal' ); ?></th>
									<td>
										<label>
											<input type="radio" name="fpd_single_image_format" value="png" checked="checked" /> PNG
										</label>
										<label>
											<input type="radio" name="fpd_single_image_format" value="jpeg" /> JPEG
										</label>
										<label>
											<input type="radio" name="fpd_single_image_format" value="svg" /> SVG
											<i class="fpd-admin-tooltip fpd-admin-icon-info-outline" title="<?php _e( 'When creating an SVG image with a text element, make sure that the font you are using is installed on your computer otherwise it will not be shown.', 'radykal' ); ?>"></i>
										</label>

									</td>
								</tr>
								<tr>
									<th><?php _e('Padding around exported element.', 'radykal' ); ?></th>
									<td>
										<input type="number" min="0" value="" name="fpd_single_element_padding" placeholder="0"  class="radykal-input" />
									</td>
								</tr>
								<tr>
									<th><?php _e('DPI', 'radykal' ); ?></th>
									<td>
										<input type="number" min="0" value="" name="fpd_single_element_dpi" placeholder="72"  class="radykal-input" />
									</td>
								</tr>
							</table>

							<button id="fpd-save-element-as-image" class="button button-primary"><?php _e( 'Create', 'radykal' ); ?></button>
						</div>
						<div>
							<table class="form-table">
								<tr>
									<td colspan="2">
										<label>
											<input type="checkbox" id="fpd-restore-oring-size" />
											<?php _e( 'Use origin size, that will set the scaling to 1, when exporting the image.', 'radykal' ); ?>
										</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<label>
											<input type="checkbox" id="fpd-save-on-server" />
											<?php _e( 'Save exported image on server.', 'radykal' ); ?>
											<i class="fpd-admin-tooltip fpd-admin-icon-info-outline" title="<?php _e( 'You can save all elements of the Product as an image on your server, to be stored in: ', 'radykal' ); echo content_url('/fancy_products_orders/images'); ?>"></i>
										</label>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<label>
											<input type="checkbox" id="fpd-without-bounding-box" />
											<?php _e( 'Export without bounding box clipping if element has one.', 'radykal' ); ?>
										</label>
									</td>
								</tr>
							</table>
						</div>

					</div><!-- export options -->

					<div id="fpd-elements-lists" class="fpd-clearfix">
						<div>
							<h4>
								<?php _e( 'Added By Customer', 'radykal' ); ?>
							</h4>

							<ul id="fpd-custom-elements-list"></ul>
						</div>
						<div>
							<h4><?php _e( 'Saved Images On Server', 'radykal' ); ?></h4>
							<ul id="fpd-order-image-list"></ul>
						</div>
					</div>

				</div><!-- Single Elements -->

				<div data-id="depositphotos">
					<h4><?php _e('Depositphotos Images added by user', 'radykal' ); ?></h4>
					<p class="description"><?php _e( 'Be aware that downloading an image will take coins from your depositphotos reseller account.', 'radykal' ); ?></p>
					<table class="form-table">
						<tbody id="fpd-dp-src-list"></tbody>
					</table>
				</div>

				<?php do_action( 'fpd_order_viewer_tabs_content_end' ); ?>

				<div class="fpd-ui-blocker"></div>

			</div><!-- tabs content -->
		</div><!-- tabs -->
	</div><!-- wrapper -->
</div>