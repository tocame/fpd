<div>

	<!-- Smart-Toolbar when an element is selected (V2.0) -->
	<div class="fpd-element-toolbar-smart fpd-visibility">

		<div class="fpd-top-tools fpd-clearfix">

			<div class="fpd-tool-color fpd-tooltip" data-panel="color" data-defaulttext="Color" title="toolbar.color" data-control="fill">
				<span class="fpd-icon-color-fill"></span>
			</div>

			<!-- Text Tools -->
			<div class="fpd-tool-text-size fpd-tooltip" data-panel="font-sizes" data-defaulttext="Font Size" title="toolbar.font_size">
				<span class="fpd-current-val"></span>
			</div>

			<div class="fpd-tool-edit-text fpd-tooltip"  data-panel="edit-text" data-defaulttext="Edit Text" title="toolbar.edit_text">
				<span class="fpd-icon-text-input"></span>
			</div>

			<div class="fpd-tool-font-family fpd-tooltip" data-panel="font-family" data-control="fontFamily">
				<span class="fpd-current-val"></span>
				<span class="fpd-icon-arrow-dropdown"></span>
			</div>

		</div>

		<div class="fpd-scroll-area">
			<div class="fpd-bottom-tools">

				<!-- Text Tools -->
				<div class="fpd-tools-group fpd-tool-text-styles fpd-clearfix">

					<div class="fpd-tool-text-bold fpd-toggle fpd-tooltip" data-defaulttext="Bold" data-control="fontWeight" data-enabled="bold" data-disabled="normal" title="toolbar.bold">
						<span class="fpd-icon-format-bold"></span>
					</div>
					<div class="fpd-tool-text-italic fpd-toggle fpd-tooltip" data-defaulttext="Italic" data-control="fontStyle" data-enabled="italic" data-disabled="normal" title="toolbar.italic">
						<span class="fpd-icon-format-italic"></span>
					</div>
					<div class="fpd-tool-text-underline fpd-toggle fpd-tooltip" data-defaulttext="Underline" data-control="textDecoration" data-enabled="underline" data-disabled="normal" title="toolbar.underline">
						<span class="fpd-icon-format-underline"></span>
					</div>

				</div>

				<div class="fpd-tool-text-align fpd-btn-options fpd-tooltip" data-control="textAlign" data-options='{"left":"fpd-icon-format-align-left", "center": "fpd-icon-format-align-center", "right": "fpd-icon-format-align-right", "justify": "fpd-icon-format-align-justify"}' data-defaulttext="Text Alignment" title="toolbar.text_align">
					<span class="fpd-icon-format-align-left"></span>
				</div>

				<div class="fpd-tool-text-transform fpd-btn-options fpd-tooltip" data-control="textTransform" data-options='{"none": "fpd-icon-text-transform", "uppercase": "fpd-icon-uppercase", "lowercase": "fpd-icon-lowercase"}' data-defaulttext="Text Transform" title="toolbar.text_transform">
					<span class="fpd-icon-text-transform"></span>
				</div>

				<div class="fpd-tool-curved-text fpd-tooltip" data-panel="curved-text" data-defaulttext="Curved Text" title="toolbar.curved_text">
					<span class="fpd-icon-curved-text"></span>
				</div>

				<!-- Image Tools -->
				<div class="fpd-tool-advanced-editing fpd-tooltip" data-defaulttext="Advanced Editing" title="toolbar.advanced_editing">
					<span class="fpd-icon-advanced-editing"></span>
				</div>

				<!-- Common Tools -->
				<div class="fpd-tool-transform fpd-tooltip" data-panel="transform" data-defaulttext="Transform" title="toolbar.transform">
					<span class="fpd-icon-transform"></span>
				</div>
				<div class="fpd-tool-position fpd-tooltip" data-panel="position" data-defaulttext="Position" title="toolbar.position">
					<span class="fpd-icon-alignment"></span>
				</div>
				<div class="fpd-tools-group fpd-tool-layer-depth fpd-clearfix">
					<div class="fpd-tool-move-up fpd-tool-move fpd-tooltip" data-defaulttext="Move Up" title="toolbar.move_up">
						<span class="fpd-icon-move-up"></span>
					</div>
					<div class="fpd-tool-move-down fpd-tool-move fpd-tooltip" data-defaulttext="Move Down" title="toolbar.move_down">
						<span class="fpd-icon-move-down"></span>
					</div>
				</div>
				<div class="fpd-tool-reset fpd-tooltip" data-defaulttext="Reset" title="toolbar.reset">
					<span class="fpd-icon-reset"></span>
				</div>

			</div>
		</div>

		<!-- Sub Panels -->
		<div class="fpd-sub-panel">

			<div class="fpd-close-panel">
				<span class="fpd-icon-back"></span>
				<span data-defaulttext="Back">toolbar.back</span>
			</div>

			<div class="fpd-panel-color">

				<div class="fpd-panel-tabs-content">

					<div data-id="fill" class="fpd-active">

						<div class="fpd-color-wrapper fpd-color-picker"></div>

					    <div class="fpd-tool-patterns">
						    <div class="fpd-scroll-area">
							    <div class="fpd-grid fpd-clearfix"></div>
						    </div>
					    </div>

					    <div class="fpd-tool-fill-opacity fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Transparency" title="toolbar.transparency">
						    <span class="fpd-icon-transparency"></span>
						    <div class="fpd-range-wrapper">
							     <input class="fpd-slider-range" type="range" value="1" step="0.01" min="0" max="1" data-control="opacity" />
						    </div>
						    <input class="fpd-slider-number fpd-number" type="number" value="1" step="0.01" min="0" max="1" data-control="opacity" />
					    </div>

					</div>

					<div data-id="stroke">

						<div class="fpd-stroke-color-picker fpd-color-picker">
							<input type="text" value="#000" />
						</div>
						<div class="fpd-tool-stroke-width fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Stroke Width" title="toolbar.stroke_width">
							<span class="fpd-icon-stroke-width"></span>
						    <div class="fpd-range-wrapper">
							     <input class="fpd-slider-range" type="range" value="0" step="1" min="0" max="20" data-control="strokeWidth" />
						    </div>
						    <input class="fpd-slider-number fpd-number" type="number" value="0" step="1" min="0" max="20" data-control="strokeWidth" />
					    </div>

					</div>

					<div data-id="shadow">

						<div class="fpd-shadow-color-picker fpd-color-picker">
							<input type="text" value="#000" />
						</div>
						<div class="fpd-tool-shadow-blur fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Blur" title="toolbar.shadow_blur">
							<span class="fpd-icon-shadow-blur"></span>
						    <div class="fpd-range-wrapper">
							     <input class="fpd-slider-range" type="range" value="0" step="1" min="0" max="20" data-control="shadowBlur" />
						    </div>
						    <input class="fpd-slider-number fpd-number" type="number" value="0" step="1" min="0" max="20" data-control="shadowBlur" />
					    </div>
					    <div class="fpd-tool-shadow-offsetX fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext=" Offset X" title="toolbar.shadow_offset_x">
							<span class="fpd-icon-shadow-offsetX" style="font-family: Arial !important;">X</span>
						    <div class="fpd-range-wrapper">
							     <input class="fpd-slider-range" type="range" value="0" step="1" min="-100" max="100" data-control="shadowOffsetX" />
						    </div>
						    <input class="fpd-slider-number fpd-number" type="number" value="0" step="1" min="-100" max="100" data-control="shadowOffsetX" />
					    </div>
					    <div class="fpd-tool-shadow-offsetY fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Offset Y" title="toolbar.shadow_offset_y">
							<span class="fpd-icon-shadow-offsetY"  style="font-family: Arial !important;">Y</span>
						    <div class="fpd-range-wrapper">
							     <input class="fpd-slider-range" type="range" value="0" step="1" min="-100" max="100" data-control="shadowOffsetY" />
						    </div>
						    <input class="fpd-slider-number fpd-number" type="number" value="0" step="1" min="-100" max="100" data-control="shadowOffsetY" />
					    </div>

					</div>

				</div>

				<div class="fpd-panel-tabs">
					<span data-tab="fill" data-defaulttext="Fill" class="fpd-active">toolbar.fill</span>
					<span data-tab="stroke" data-defaulttext="Stroke" class="fpd-tool-text-stroke">toolbar.stroke</span>
					<span data-tab="shadow" data-defaulttext="Shadow" class="fpd-tool-text-shadow">toolbar.shadow</span>
				</div>

			</div><!-- Fill Panel -->

			<div class="fpd-panel-font-sizes fpd-panel-content">

				<div class="fpd-tool-font-size fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Font Size" title="toolbar.font_size">
					<span class="fpd-icon-font-size"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="12" step="1" min="1" max="1000" data-control="fontSize" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="12" step="1" min="1" max="1000" data-control="fontSize" />
			    </div>

			    <div class="fpd-tool-line-height fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Line Height" title="toolbar.line_height">
					<span class="fpd-icon-format-line-spacing"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="1" step="0.1" min="1" max="3" data-control="lineHeight" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="1" step="0.1" min="1" max="3" data-control="lineHeight" />
			    </div>

			    <div class="fpd-tool-letter-spacing fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Letter Spacing" title="toolbar.letter_spacing">
					<span class="fpd-icon-letter-spacing"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="0" step="1" min="-30" max="30" data-control="letterSpacing" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="0" step="1" min="-30" max="30" data-control="letterSpacing" />
			    </div>

			</div><!-- Font Size & Spacing -->

			<div class="fpd-panel-font-family fpd-panel-content">

				<input type="text" data-defaulttext="Search Fonts" placeholder="toolbar.font_family_search" />
				<div class="fpd-fonts-list"></div>

			</div><!-- Font Family -->

			<div class="fpd-panel-edit-text fpd-panel-content">
				<textarea data-control="text"></textarea>
			</div><!-- Edit Text Panel -->

			<div class="fpd-panel-curved-text fpd-panel-content">

			 	<div class="fpd-curved-text-switcher fpd-switch-container fpd-tooltip fpd-toggle fpd-left" data-control="curved" data-enabled="true" data-disabled="false" data-defaulttext="Switch" title="toolbar.curved_text_switch">
					<div class="fpd-switch-bar"></div>
					<div class="fpd-switch-toggle"></div>
				</div>

				<div class="fpd-tool-curveReverse fpd-toggle fpd-tooltip fpd-right" data-defaulttext="Reverse" data-control="curveReverse" data-enabled="true" data-disabled="false" title="toolbar.curved_text_reverse">
					<span class="fpd-icon-curved-text-reverse"></span>
				</div>

				<div class="fpd-slider-group fpd-clearfix fpd-tooltip fpd-clear" data-defaulttext="Radius" title="toolbar.radius">
					<span class="fpd-icon-curve-radius"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="80" step="1" min="0" max="200" data-control="curveRadius" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="80" step="1" min="0" max="200" data-control="curveRadius" />
			    </div>

			    <div class="fpd-slider-group fpd-clearfix fpd-tooltip" data-defaulttext="Spacing" title="toolbar.spacing">
					<span class="fpd-icon-letter-spacing"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="10" step="1" min="0" max="100" data-control="curveSpacing" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="10" step="1" min="0" max="100" data-control="curveSpacing" />
			    </div>

			</div><!-- Curved Text -->

			<div class="fpd-panel-transform fpd-panel-content">

			 	<div class="fpd-tool-scaleX fpd-tool-scale fpd-slider-group fpd-clearfix">
					<span class="fpd-icon-scaleX"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" value="1" step="0.01" min="0" max="5" data-control="scaleX" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="1" step="0.01" min="0" max="5" data-control="scaleX" />
			    </div>

			    <div class="fpd-tool-uniscaling-locker fpd-tool-scale fpd-toggle" data-control="lockUniScaling" data-enabled="true" data-disabled="false">
					<span class="fpd-icon-unlocked"></span>
				</div>

			    <div class="fpd-tool-scaleY fpd-tool-scale fpd-slider-group fpd-clearfix">
					<span class="fpd-icon-scaleY"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="1" step="0.01" min="0" max="5" data-control="scaleY" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="1" step="0.01" min="0" max="5" data-control="scaleY" />
			    </div>

			    <div class="fpd-tool-angle fpd-slider-group fpd-clearfix">
					<span class="fpd-icon-rotate-right"></span>
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="10" value="1" step="1" min="0" max="359" data-control="angle" />
				    </div>
				    <input class="fpd-slider-number fpd-number" type="number" value="1" step="1" min="0" max="359" data-control="angle" />
			    </div>

			</div><!-- Transform -->

			<div class="fpd-panel-position fpd-panel-content fpd-icon-button-group">

				<span class="fpd-align-left fpd-tooltip" data-defaulttext="Align Left" title="toolbar.align_left">
					<span class="fpd-icon-align-left"></span>
				</span>
				<span class="fpd-align-top fpd-tooltip" data-defaulttext="Align Top" title="toolbar.align_top">
					<span class="fpd-icon-align-top"></span>
				</span>
				<span class="fpd-align-right fpd-tooltip" data-defaulttext="Align Right" title="toolbar.align_right">
					<span class="fpd-icon-align-right"></span>
				</span>
				<span class="fpd-align-bottom fpd-tooltip" data-defaulttext="Align Bottom" title="toolbar.align_bottom">
					<span class="fpd-icon-align-bottom"></span>
				</span>
				<span class="fpd-align-center-h fpd-tooltip" data-defaulttext="Center Horizontal" title="toolbar.center_h">
					<span class="fpd-icon-align-vertical-middle"></span>
				</span>
				<span class="fpd-align-center-v fpd-tooltip" data-defaulttext="Center Vertical" title="toolbar.center_v">
					<span class="fpd-icon-align-horizontal-middle"></span>
				</span>
				<span class="fpd-flip-h fpd-tooltip" data-defaulttext="Flip Horizontal" title="toolbar.flip_h">
					<span class="fpd-icon-flip-horizontal"></span>
				</span>
				<span class="fpd-flip-v fpd-tooltip" data-defaulttext="Flip Vertical" title="toolbar.flip_v">
					<span class="fpd-icon-flip-vertical"></span>
				</span>

			</div><!-- Position -->

		</div>

	</div>

	<!-- Toolbar when an element is selected (V1.0) -->
	<div class="fpd-element-toolbar fpd-visibility">

		<div class="fpd-common-tools fpd-row fpd-clearfix">
			<div class="fpd-tool-fill fpd-tooltip" data-panel="fill" data-defaulttext="Fill" title="toolbar.fill">
				<span class="fpd-current-fill" data-control="fill"></span>
			</div>
			<div class="fpd-tool-advanced-editing fpd-tooltip" data-defaulttext="Advanced Editing" title="toolbar.advanced_editing">
				<span class="fpd-icon-advanced-editing"></span>
			</div>
			<div class="fpd-tool-transform fpd-tooltip" data-panel="transform" data-defaulttext="Transform" title="toolbar.transform">
				<span class="fpd-icon-transform"></span>
			</div>
			<div class="fpd-tool-position fpd-tooltip" data-panel="position" data-defaulttext="Position" title="toolbar.position">
				<span class="fpd-icon-alignment"></span>
			</div>
			<div class="fpd-tool-move-up fpd-tool-move fpd-tooltip" data-defaulttext="Move Up" title="toolbar.move_up">
				<span class="fpd-icon-move-up"></span>
			</div>
			<div class="fpd-tool-move-down fpd-tool-move fpd-tooltip" data-defaulttext="Move Down" title="toolbar.move_down">
				<span class="fpd-icon-move-down"></span>
			</div>
			<div class="fpd-tool-reset fpd-tooltip" data-defaulttext="Reset" title="toolbar.reset">
				<span class="fpd-icon-reset"></span>
			</div>
		</div>

		<div class="fpd-text-tools fpd-text-font-tools fpd-row fpd-clearfix">
			<div class="fpd-tool-font-family fpd-dropdown fpd-search">
				<input type="text" class="fpd-dropdown-current" data-control="fontFamily" value="Helvetica" />
				<div class="fpd-dropdown-arrow"><span class="fpd-icon-arrow-dropdown"></span></div>
				<div class="fpd-dropdown-list"></div>
			</div>
		</div>

		<div class="fpd-text-tools fpd-text-size-tools fpd-row fpd-clearfix">
			<div class="fpd-tool-text-size fpd-tooltip" data-defaulttext="Font Size" title="toolbar.font_size">
				<span class="fpd-icon-font-size"></span>
				<input type="number" class="fpd-number" value="12" step="1" min="1" max="1000" data-control="fontSize" />
			</div>
			<div class="fpd-tool-text-line-height fpd-tooltip" data-defaulttext="Line Height" title="toolbar.line_height">
				<span class="fpd-icon-format-line-spacing"></span>
				<input type="number" class="fpd-number" value="1" step="0.1" min="1" max="3" data-control="lineHeight" />
			</div>
			<div class="fpd-tool-text-letter-spacing fpd-tooltip" data-defaulttext="Letter Spacing" title="toolbar.letter_spacing">
				<span class="fpd-icon-letter-spacing"></span>
				<input type="number" class="fpd-number" value="0" step="1" min="-100" max="100" data-control="letterSpacing" />
			</div>
		</div>

		<div class="fpd-text-tools fpd-text-random-tools fpd-row fpd-clearfix">
			<div class="fpd-tool-text-bold fpd-toggle fpd-tooltip" data-defaulttext="Bold" data-control="fontWeight" data-enabled="bold" data-disabled="normal" title="toolbar.bold">
				<span class="fpd-icon-format-bold"></span>
			</div>
			<div class="fpd-tool-text-italic fpd-toggle fpd-tooltip" data-defaulttext="Italic" data-control="fontStyle" data-enabled="italic" data-disabled="normal" title="toolbar.italic">
				<span class="fpd-icon-format-italic"></span>
			</div>
			<div class="fpd-tool-text-underline fpd-toggle fpd-tooltip" data-defaulttext="Underline" data-control="textDecoration" data-enabled="underline" data-disabled="normal" title="toolbar.underline">
				<span class="fpd-icon-format-underline"></span>
			</div>
			<div class="fpd-tool-text-align fpd-dropdown">
				<span class="fpd-dropdown-current fpd-tooltip" data-control="textAlign" data-defaulttext="Text Alignment" title="toolbar.text_align">
					<span class=" fpd-icon-format-align-left"></span>
				</span>
				<div class="fpd-dropdown-arrow"><span class="fpd-icon-arrow-dropdown"></span></div>
				<div class="fpd-dropdown-list">
					<span class="fpd-item" data-value="left">
						<span class="fpd-icon-format-align-left"></span>
					</span>
					<span class="fpd-item" data-value="center">
						<span class="fpd-icon-format-align-center"></span>
					</span>
					<span class="fpd-item" data-value="right">
						<span class="fpd-icon-format-align-right"></span>
					</span>
					<span class="fpd-item" data-value="justify">
						<span class="fpd-icon-format-align-justify"></span>
					</span>
				</div>
			</div>
			<div class="fpd-tool-text-transform fpd-dropdown">
				<span class="fpd-dropdown-current fpd-tooltip" data-control="textTransform" data-defaulttext="Text Transform" title="toolbar.text_transform">
					<span class=" fpd-icon-format-align-left"></span>
				</span>
				<div class="fpd-dropdown-arrow"><span class="fpd-icon-arrow-dropdown"></span></div>
				<div class="fpd-dropdown-list">
					<span class="fpd-item" data-value="none">
						<span class="fpd-icon-text-transform"></span>
					</span>
					<span class="fpd-item" data-value="uppercase">
						<span class="fpd-icon-uppercase"></span>
					</span>
					<span class="fpd-item" data-value="lowercase">
						<span class="fpd-icon-lowercase"></span>
					</span>
				</div>
			</div>
			<div class="fpd-tool-text-stroke fpd-tooltip" data-panel="stroke" data-defaulttext="Stroke" title="toolbar.stroke">
				<span class="fpd-icon-stroke"></span>
			</div>
			<div class="fpd-tool-curved-text fpd-tooltip" data-panel="curved-text" data-defaulttext="Curved Text" title="toolbar.curved_text">
				<span class="fpd-icon-curved-text"></span>
			</div>
			<div class="fpd-tool-edit-text fpd-tooltip"  data-panel="edit-text" data-defaulttext="Edit Text" title="toolbar.edit_text">
				<span class="fpd-icon-text-input"></span>
			</div>
		</div>

		<div class="fpd-sub-panel">

			<div class="fpd-panel-fill">

				<div class="fpd-panel-tabs">
					<span id="color" data-defaulttext="Color">toolbar.color</span>
					<span id="pattern" data-defaulttext="Patterns">toolbar.patterns</span>
				</div>
				<div class="fpd-panel-tabs-content">
					<div data-id="color" class="fpd-active">
						<div class="fpd-color-wrapper fpd-color-picker"></div>
						<div class="fpd-tool-fill-opacity fpd-slider-group fpd-clearfix  fpd-tooltip" data-defaulttext="Transparency" title="toolbar.transparency">
							<span class="fpd-icon-transparency"></span>
						    <input class="fpd-slider-number fpd-number" type="number" value="1" step="0.01" min="0" max="1" data-control="opacity" />
						    <div class="fpd-range-wrapper">
							     <input class="fpd-slider-range" type="range" value="1" step="0.01" min="0" max="1" data-control="opacity" />
						    </div>
					    </div>
					</div>
					<div class="fpd-patterns" data-id="pattern">
						<div class="fpd-grid fpd-clearfix"></div>
					</div>
				</div>

			</div><!-- Fill Panel -->

			<div class="fpd-panel-transform">

				<div class="fpd-tool-scaleX fpd-tool-scale fpd-slider-group fpd-clearfix">
					<span class="fpd-icon-scaleX"></span>
				    <input class="fpd-slider-number fpd-number" type="number" value="1" step="0.01" min="0" max="5" data-control="scaleX" />
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="1" step="0.01" min="0" max="5" data-control="scaleX" />
				    </div>
			    </div>
			    <div class="fpd-tool-uniscaling-locker fpd-tool-scale fpd-toggle" data-control="lockUniScaling" data-enabled="true" data-disabled="false">
					<span class="fpd-icon-unlocked"></span>
				</div>
			    <div class="fpd-tool-scaleY fpd-tool-scale fpd-slider-group fpd-clearfix">
					<span class="fpd-icon-scaleY"></span>
				    <input class="fpd-slider-number fpd-number" type="number" value="1" step="0.01" min="0" max="5" data-control="scaleY" />
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="1" step="0.01" min="0" max="5" data-control="scaleY" />
				    </div>
			    </div>

			    <div class="fpd-tool-angle fpd-slider-group fpd-clearfix">
					<span class="fpd-icon-rotate-right"></span>
				    <input class="fpd-slider-number fpd-number" type="number" value="1" step="1" min="0" max="359" data-control="angle" />
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="1" step="1" min="0" max="359" data-control="angle" />
				    </div>
			    </div>

			</div><!-- Transform Panel -->

			<div class="fpd-panel-position">

				<div class="fpd-icon-button-group">
					<span class="fpd-align-left fpd-tooltip" data-defaulttext="Align Left" title="toolbar.align_left">
						<span class="fpd-icon-align-left"></span>
					</span>
					<span class="fpd-align-top fpd-tooltip" data-defaulttext="Align Top" title="toolbar.align_top">
						<span class="fpd-icon-align-top"></span>
					</span>
					<span class="fpd-align-right fpd-tooltip" data-defaulttext="Align Right" title="toolbar.align_right">
						<span class="fpd-icon-align-right"></span>
					</span>
					<span class="fpd-align-bottom fpd-tooltip" data-defaulttext="Align Bottom" title="toolbar.align_bottom">
						<span class="fpd-icon-align-bottom"></span>
					</span>
					<span class="fpd-align-center-h fpd-tooltip" data-defaulttext="Center Horizontal" title="toolbar.center_h">
						<span class="fpd-icon-align-vertical-middle"></span>
					</span>
					<span class="fpd-align-center-v fpd-tooltip" data-defaulttext="Center Vertical" title="toolbar.center_v">
						<span class="fpd-icon-align-horizontal-middle"></span>
					</span>
					<span class="fpd-flip-h fpd-tooltip" data-defaulttext="Flip Horizontal" title="toolbar.flip_h">
						<span class="fpd-icon-flip-horizontal"></span>
					</span>
					<span class="fpd-flip-v fpd-tooltip" data-defaulttext="Flip Vertical" title="toolbar.flip_v">
						<span class="fpd-icon-flip-vertical"></span>
					</span>
				</div>

			</div><!-- Position Panel -->

			<div class="fpd-panel-stroke">
				<div class="fpd-stroke-color-picker fpd-color-picker">
					<input type="text" value="#000" />
				</div>
				<div class="fpd-tool-stroke-width fpd-slider-group fpd-clearfix">
					<span class="fpd-icon-stroke-width"></span>
				    <input class="fpd-slider-number fpd-number" type="number" value="0" step="1" min="0" max="20" data-control="strokeWidth" />
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="0" step="1" min="0" max="20" data-control="strokeWidth" />
				    </div>
			    </div>
			</div><!-- Stroke Panel -->

			<div class="fpd-panel-curved-text">

				<div class="fpd-curved-text-switcher fpd-switch-container fpd-tooltip fpd-toggle fpd-left" data-control="curved" data-enabled="true" data-disabled="false" data-defaulttext="Switch" title="toolbar.curved_text_switch">
					<div class="fpd-switch-bar"></div>
					<div class="fpd-switch-toggle"></div>
				</div>
				<div class="fpd-tool-curveReverse fpd-toggle fpd-tooltip fpd-right" data-defaulttext="Reverse" data-control="curveReverse" data-enabled="true" data-disabled="false" title="toolbar.curved_text_reverse">
					<span class="fpd-icon-curved-text-reverse"></span>
				</div>
				<div class="fpd-tool-curveRadius fpd-slider-group fpd-tooltip fpd-clearfix fpd-clear" data-defaulttext="Radius" title="toolbar.radius">
					<span class="fpd-icon-curve-radius"></span>
				    <input class="fpd-slider-number fpd-number" type="number" value="80" step="1" min="0" max="200" data-control="curveRadius" />
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="80" step="1" min="0" max="200" data-control="curveRadius" />
				    </div>
			    </div>
			    <div class="fpd-tool-curveSpacing fpd-slider-group fpd-tooltip fpd-clearfix" data-defaulttext="Spacing" title="toolbar.spacing">
					<span class="fpd-icon-letter-spacing"></span>
				    <input class="fpd-slider-number fpd-number" type="number" value="10" step="1" min="0" max="100" data-control="curveSpacing" />
				    <div class="fpd-range-wrapper">
					     <input class="fpd-slider-range" type="range" value="10" step="1" min="0" max="100" data-control="curveSpacing" />
				    </div>
			    </div>

			</div><!-- Curved Text Panel -->

			<div class="fpd-panel-edit-text">
				<textarea data-control="text"></textarea>
			</div><!-- Edit Text Panel -->

		</div>

	</div><!-- Element Toolbar -->

	<div class="fpd-mainbar fpd-clearfix">

		<div class="fpd-navigation fpd-primary-bg-color"></div>
		<div class="fpd-close-off-canvas">
			<span class="fpd-icon-close"></span>
		</div>

	</div><!-- Main Bar -->

	<div class="fpd-actions">

		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="reset-product"  data-defaulttext="Reset" title="actions.reset_product">
			<span class="fpd-icon-reset"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-sub-tooltip fpd-primary-text-color" data-action="zoom"  data-defaulttext="Zoom" title="actions.zoom">
			<span class="fpd-icon-zoom-in"></span>
			<div class="fpd-action-context-zoom fpd-action-context fpd-clearfix">
				<input class="fpd-zoom-slider" type="range" value="1" step="0.02" min="1" max="3" />
				<div class="fpd-stage-pan fpd-toggle">
					<span class="fpd-icon-drag"></span>
				</div>
			</div>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="magnify-glass" data-defaulttext="Magnify Glass" title="actions.magnify_glass">
			<span class="fpd-icon-magnify"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-sub-tooltip fpd-primary-text-color" data-action="download"  data-defaulttext="Download" title="actions.download">
			<span class="fpd-icon-cloud-download"></span>
			<div class="fpd-modal-context fpd-modal-download">
				<span data-value="jpeg">
					<span class="fpd-icon-jpg"></span>
				</span>
				<span data-value="png">
					<span class="fpd-icon-png"></span>
				</span>
				<span data-value="pdf">
					<span class="fpd-icon-pdf"></span>
				</span>
				<span data-value="svg">
					<span class="fpd-icon-svg"></span>
				</span>
				<div class="fpd-checkbox">
					<input type="checkbox" id="fpd-action-download-single-view" />
					<label for="fpd-action-download-single-view" data-defaulttext="Only export current showing view">actions.download_current_view</label>
				</div>
			</div>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="info"  data-defaulttext="Info" title="actions.info">
			<span class="fpd-icon-info-outline"></span>
			<div class="fpd-info-content" data-defaulttext="Change text in language JSON.">actions.info_content</div>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="print"  data-defaulttext="Print" title="actions.print">
			<span class="fpd-icon-print"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="save"  data-defaulttext="Save" title="actions.save">
			<span class="fpd-icon-save"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="load"  data-defaulttext="Load" title="actions.load">
			<span class="fpd-icon-file-upload"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="manage-layers"  data-defaulttext="Manage Layers" title="actions.manage_layers">
			<span class="fpd-icon-layers"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="qr-code"  data-defaulttext="Add QR-Code" title="actions.qr_code">
			<span class="fpd-icon-qrcode"></span>
			<div class="fpd-modal-context fpd-modal-qrcode">
				<input type="text" data-defaulttext="Enter a URL, some text..." placeholder="actions.qr_code_input" />
				<div class="fpd-qrcode-colors">
					<input type="text" value="#000000" class="fpd-qrcode-color-dark" />
					<input type="text" value="#ffffff" class="fpd-qrcode-color-light" />
				</div>
				<span class="fpd-add-qr-code fpd-btn" data-defaulttext="Add QR-Code">actions.qr_code_add_btn</span>
				<div class="fpd-qrcode-wrapper fpd-hidden"></div>
			</div>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-disabled fpd-primary-text-color" data-action="undo"  data-defaulttext="Undo" title="actions.undo">
			<span class="fpd-icon-undo"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-disabled fpd-primary-text-color" data-action="redo"  data-defaulttext="Redo" title="actions.redo">
			<span class="fpd-icon-redo"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="snap"  data-defaulttext="Center Snap" title="actions.snap">
			<span class="fpd-icon-magnet"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="preview-lightbox"  data-defaulttext="Preview" title="actions.preview_lightbox">
			<span class="fpd-icon-preview-lightbox"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="ruler"  data-defaulttext="Toggle Ruler" title="actions.ruler">
			<span class="fpd-icon-ruler"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-disabled fpd-primary-text-color" data-action="previous-view"  data-defaulttext="Previous View" title="actions.previous_view">
			<span class="fpd-icon-back"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-disabled fpd-primary-text-color" data-action="next-view"  data-defaulttext="Next View" title="actions.next_view">
			<span class="fpd-icon-forward"></span>
		</div>
		<div class="fpd-action-btn fpd-tooltip fpd-primary-text-color" data-action="guided-tour"  data-defaulttext="Start Guided Tour" title="actions.start_guided_tour">
			<span class="fpd-icon-guided-tour"></span>
		</div>

	</div><!-- Actions -->


	<div class="fpd-modules">

		<div class="fpd-module" data-module="products" data-moduleicon="fpd-icon-grid" data-defaulttext="Swap Product" data-title="modules.products">
			<div class="fpd-product-categories fpd-dropdown fpd-search">
				<input type="text" class="fpd-dropdown-current" />
				<div class="fpd-dropdown-arrow"><span class="fpd-icon-arrow-dropdown"></span></div>
				<div class="fpd-dropdown-list">
					<div class="fpd-scroll-area"></div>
				</div>
			</div>
			<div class="fpd-scroll-area">
				<div class="fpd-grid fpd-grid-contain fpd-padding"></div>
			</div>
		</div><!-- Products Module -->

		<div class="fpd-module" data-module="images" data-moduleicon="fpd-icon-photo" data-defaulttext="Add Image" data-title="modules.images">

			<div class="fpd-module-tabs">
                <div data-context="upload">
	                <span class="fpd-icon-cloud-upload"></span>
                </div>
                <div data-context="facebook" class="fpd-hidden fpd-tooltip" title="Facebook">
	                 <span class="fpd-icon-facebook"></span>
                </div>
                <div data-context="instagram" class="fpd-hidden fpd-tooltip" title="Instagram">
	                 <span class="fpd-icon-instagram"></span>
                </div>
                <div data-context="pixabay" class="fpd-hidden fpd-tooltip" title="Pixabay">
	                 <span class="fpd-icon-pixabay"></span>
                </div>
                <div data-context="depositphotos" class="fpd-hidden fpd-tooltip" title="Depositphotos">
	                 <span class="fpd-icon-depositphotos"></span>
                </div>
		    </div>

		    <div class="fpd-module-tabs-content">
			    <!-- uploads -->
		        <div data-context="upload">
			        <form class="fpd-upload-form" enctype="multipart/form-data" method="POST">
				        <div class="fpd-upload-zone">
					        <div>
						         <span class="fpd-icon-file-upload"></span>
								 <span data-defaulttext="Click or drop images here">modules.upload_zone</span>
								 <span class="fpd-price">Hello</span>
					        </div>
				        </div>
				        <input type="file" multiple="multiple" class="fpd-input-image" name="files[]" accept="image/jpeg,image/jpg,image/png,image/svg+xml" />
		            </form>
		            <div class="fpd-scroll-area">
						<div class="fpd-grid fpd-grid-cover fpd-photo-grid"></div>
					</div>
		        </div>
		          <!-- facebook -->
		        <div data-context="facebook">
			        <div class="fpd-head">
				        <div class="fpd-facebook-login">
					        <fb:login-button data-max-rows="1" data-show-faces="false" data-scope="user_photos"></fb:login-button>
				        </div>
						<div class="fpd-facebook-albums fpd-dropdown fpd-search fpd-on-loading">
							<input type="text" class="fpd-dropdown-current" data-defaulttext="Select An Album" placeholder="modules.facebook_select_album" />
							<div class="fpd-dropdown-arrow"><span class="fpd-icon-arrow-dropdown"></span></div>
							<div class="fpd-dropdown-list"></div>
						</div>
					</div>
					<div class="fpd-scroll-area">
						<div class="fpd-grid fpd-grid-cover fpd-photo-grid"></div>
					</div>
		        </div>
		        <!-- instagram -->
		        <div data-context="instagram">
			        <div class="fpd-scroll-area">
						<div class="fpd-grid fpd-grid-cover fpd-photo-grid"></div>
					</div>
		        </div>
		        <!-- pixabay -->
		        <div data-context="pixabay">
			        <div class="fpd-loader-wrapper"><div class="fpd-loader"><div class="fpd-loader-circle"></div></div></div>
			        <div class="fpd-head">
				        <a href="https://pixabay.com/" target="_blank" class="fpd-pixabay-logo"></a>
				        <div class="fpd-input-search">
							<input type="text" data-defaulttext="Search in Pixabay library" placeholder="modules.pixabay_search" />
							<span class="fpd-icon-magnify"></span>
						</div>
			        </div>
			        <div class="fpd-scroll-area">
						<div class="fpd-grid fpd-grid-cover fpd-photo-grid"></div>
					</div>
		        </div>
		        <!-- depositphotos -->
		        <div data-context="depositphotos">
			        <div class="fpd-loader-wrapper"><div class="fpd-loader"><div class="fpd-loader-circle"></div></div></div>
			        <div class="fpd-head">
				        <div class="fpd-input-back-search fpd-clearfix">
					        <div class="fpd-back fpd-btn">
								<span class="fpd-icon-back"></span>
							</div>
					        <div class="fpd-input-search">
								<input type="text" data-defaulttext="Search in depositphotos.com" placeholder="modules.depositphotos_search" />
								<span class="fpd-icon-magnify"></span>
							</div>
				        </div>
			        </div>
			        <div class="fpd-scroll-area">
						<div class="fpd-grid fpd-grid-cover fpd-photo-grid"></div>
					</div>
		        </div>
			</div>

		</div><!-- Images Module -->

		<div class="fpd-module" data-module="text" data-moduleicon="fpd-icon-text-secondary" data-defaulttext="Add Text" data-title="modules.text">
			<textarea data-defaulttext="Enter some text" placeholder="modules.text_input_placeholder"></textarea>
			<div class="fpd-btn"><span data-defaulttext="Add Text">modules.text_add_btn</span> <span class="fpd-price"></span></div>
		</div>

		<div class="fpd-module" data-module="designs" data-moduleicon="fpd-icon-design-library" data-defaulttext="Choose From Designs" data-title="modules.designs">
			<div class="fpd-head">
				<div class="fpd-input-back-search fpd-clearfix">
			        <div class="fpd-back fpd-btn">
						<span class="fpd-icon-back"></span>
					</div>
			        <div class="fpd-input-search">
						<input type="text" />
						<span class="fpd-icon-magnify"></span>
					</div>
		        </div>
			</div>
			<div class="fpd-scroll-area">
				<div class="fpd-grid fpd-grid-contain fpd-padding"></div>
			</div>
		</div><!-- Designs Module -->

		<div class="fpd-module" data-module="manage-layers" data-moduleicon="fpd-icon-layers" data-defaulttext="Manage Layers" data-title="modules.manage_layers">
			<div class="fpd-manage-layers-panel">
				<div class="fpd-scroll-area">
					<div class="fpd-list"></div>
				</div>
			</div>
		</div><!-- Manage Layers Module -->

		<div class="fpd-module" data-module="names-numbers" data-moduleicon="fpd-icon-name-number" data-defaulttext="Names & Numbers" data-title="plus.names_numbers">
			<div class="fpd-names-numbers-panel">
				<div class="fpd-btn" data-defaulttext="Add New">plus.names_numbers_add_new</div>
				<div class="fpd-scroll-area">
					<div class="fpd-list"></div>
				</div>
			</div>
		</div><!-- Names & Numbers Module -->

		<div class="fpd-module" data-module="drawing" data-moduleicon="fpd-icon-brush" data-defaulttext="Free Drawing" data-title="plus.drawing">
			<div class="fpd-drawing-panel">
				<div class="fpd-scroll-area">

					<div class="fpd-drawing-tools">
						<div class="fpd-label" data-defaulttext="Brush Type">plus.drawing_brush_type</div>
						<div class="fpd-drawing-brush-type fpd-dropdown">
							<span class="fpd-dropdown-current" title="">
								<span data-value="pencil" data-defaulttext="Pencil">plus.drawing_pencil</span>
							</span>
							<div class="fpd-dropdown-arrow"><span class="fpd-icon-arrow-dropdown"></span></div>
							<div class="fpd-dropdown-list">
								<span class="fpd-item" data-value="Pencil" data-defaulttext="Pencil">plus.drawing_pencil</span>
								<span class="fpd-item" data-value="Circle" data-defaulttext="Cirlce">plus.drawing_circle</span>
								<span class="fpd-item" data-value="Spray" data-defaulttext="Spray">plus.drawing_spray</span>
							</div>
						</div>

						<div class="fpd-label" data-defaulttext="Color">plus.drawing_color</div>
						<div>
							<input type="text" value="" class="fpd-drawing-line-color" />
						</div>

						<div class="fpd-label" data-defaulttext="Line Width">plus.drawing_line_width</div>
						<div class="fpd-slider-group fpd-clearfix">
						    <input class="fpd-slider-number fpd-number fpd-drawing-line-width" type="number" value="1" step="1" min="1" max="30" />
						    <div class="fpd-range-wrapper">
							     <input class="fpd-slider-range" type="range" value="1" step="1" min="1" max="30" />
						    </div>
					    </div>

						<div class="fpd-label" data-defaulttext="Draw Here">plus.drawing_draw_here</div>
					    <canvas class="fpd-drawing-canvas" width="100" height="150"></canvas>

					    <div class="fpd-buttons fpd-clearfix">
						    <span class="fpd-clear-drawing fpd-btn fpd-left fpd-secondary" data-defaulttext="Clear Drawing">plus.drawing_clear</span>
						    <span class="fpd-add-drawing fpd-btn fpd-right" data-defaulttext="Add Drawing">plus.drawing_add</span>
					    </div>
					</div>

				</div>
			</div>
		</div><!-- Drawing Module -->

		<div class="fpd-module" data-module="text-layers" data-moduleicon="fpd-icon-text-layers" data-defaulttext="Text Layers" data-title="modules.text_Layers">
			<div class="fpd-text-layers-panel">
				<div class="fpd-scroll-area">
					<div class="fpd-list"></div>
				</div>
			</div>
		</div><!-- Text Layers Module -->

		<div class="fpd-module" data-module="layouts" data-moduleicon="fpd-icon-layout" data-defaulttext="Layouts" data-title="modules.layouts">
			<div class="fpd-layouts-panel">
				<div class="fpd-scroll-area">
					<div class="fpd-grid"></div>
				</div>
			</div>
		</div><!-- Layouts Module -->

		<div class="fpd-module" data-module="dynamic-views" data-moduleicon="fpd-icon-views" data-defaulttext="Manage Views" data-title="plus.dynamic_views">
			<div class="fpd-dynamic-views-panel">
				<span class="fpd-section-title" data-defaulttext="Add new view">plus.dynamic_views_add_view_info</span>

				<div class="fpd-flex">
					<div class="fpd-btn fpd-add-blank-view" data-defaulttext="Blank">plus.dynamic_views_add_blank</div>
					<div class="fpd-btn fpd-add-from-layouts" data-defaulttext="From Layouts">plus.dynamic_views_add_from_layouts</div>
				</div>

				<div class="fpd-scroll-area">
					<div class="fpd-list"></div>
				</div>

			</div>
		</div><!-- Dynamic Views Module -->

		<div class="fpd-module fpd-secondary-module" data-module="secondary">

			<div class="fpd-upload-zone-adds-panel">
				<div class="fpd-bottom-nav fpd-primary-bg-color">
					<div class="fpd-add-image" data-module="images">
						<span class="fpd-icon-photo"></span>
					</div>
					<div class="fpd-add-text" data-module="text">
						<span class="fpd-icon-text-secondary"></span>
					</div>
					<div class="fpd-add-design" data-module="designs">
						<span class="fpd-icon-design-library"></span>
					</div>
				</div>
				<div class="fpd-upload-zone-content"></div>
			</div><!-- Upload Zone Adds -->

			<div class="fpd-saved-designs-panel">

				<div class="fpd-scroll-area">
					<div class="fpd-grid fpd-grid-contain fpd-padding"></div>
				</div>

			</div><!-- Saved Designs -->

			<div class="fpd-dynamic-views-blank">

				<span class="fpd-section-desc" data-defaulttext="Choose a format or enter a custom size.">plus.dynamic_views_add_blank_info</span>

				<div class="fpd-blank-formats fpd-dropdown fpd-search fpd-hidden">
					<input type="text" class="fpd-dropdown-current" data-defaulttext="Formats" placeholder="plus.dynamic_views_choose_format" />
					<div class="fpd-dropdown-arrow"><span class="fpd-icon-arrow-dropdown"></span></div>
					<div class="fpd-dropdown-list"></div>
				</div>

				<div class="fpd-blank-custom-size">
					<input type="number" class="fpd-width" />
					x
					<input type="number" />
					<span class="fpd-dynamic-views-unit"></span>
				</div>

				<div class="fpd-btn" data-defaulttext="Add">plus.dynamic_views_add_new</div>

			</div><!-- Dynamic Views: Blank -->

			<div class="fpd-dynamic-views-layouts">

				<div class="fpd-scroll-area">
					<div class="fpd-grid"></div>
				</div>

			</div><!-- Dynamic Views: Layouts -->

		</div><!-- Secondary Module -->

	</div><!-- Modules -->

	<div class="fpd-draggable-dialog fpd-container fpd-shadow-2">
		<div class="fpd-dialog-head fpd-primary-bg-color">
			<div class="fpd-dialog-drag-handle">
				<div>
					<span class="fpd-icon-drag"></span><span class="fpd-dialog-title"></span>
				</div>
			</div>
			<div class="fpd-close-dialog">
				<span class="fpd-icon-close"></span>
			</div>
		</div>
	</div><!-- Draggable Dialog -->

	<div class="fpd-image-editor-container">

		<div class="fpd-image-editor-menu">
			<span data-id="mask" class="fpd-active" data-defaulttext="Mask">image_editor.mask</span>
			<span data-id="filters" data-defaulttext="Filters">image_editor.filters</span>
			<span data-id="color-manipulation" data-defaulttext="Color Manipulation">image_editor.color_manipulation</span>
		</div>

		<div class="fpd-tab-content">

			<!-- MASK -->
			<div data-id="mask" class="fpd-content-mask fpd-active">

				<div class="fpd-mask-selection">
					<span data-mask="custom-rect" class="fpd-tooltip" data-defaulttext="Custom Cropping" title="image_editor.custom_cropping"><span class="fpd-icon-crop"></span></span>
				</div>
				<div class="fpd-mask-tools">
					<span class="fpd-mask-cancel fpd-btn fpd-dark"><span class="fpd-icon-close"></span></span>
					<span class="fpd-mask-save fpd-btn"><span class="fpd-icon-done"></span></span>
				</div>

			</div>

			<!-- FILTERS -->
			<div data-id="filters" class="fpd-content-filters"></div>

			<!-- COLOR MANIPULATION -->
			<div data-id="color-manipulation" class="fpd-content-color-manipulation fpd-clearfix">

				<div class="fpd-left fpd-filter-brightness">
					<div class="fpd-switch-container fpd-left" data-enabled="true" data-disabled="false" data-filter="Brightness">
						<div class="fpd-switch-bar"></div>
						<div class="fpd-switch-toggle"></div>
					</div>
					<label data-defaulttext="Brightness">image_editor.brightness</label>
					<div class="fpd-range-tooltip">
						<span data-defaulttext="Brightness">image_editor.brightness</span>
						<input type="range" name="brightness" class="fpd-input-range" value="0" min="-1" max="1" step="0.01" />
						<div class="fpd-tooltip"></div>
					</div>
				</div>

				<div class="fpd-left fpd-filter-contrast">
					<div class="fpd-switch-container fpd-left" data-enabled="true" data-disabled="false"  data-filter="Contrast">
						<div class="fpd-switch-bar"></div>
						<div class="fpd-switch-toggle"></div>
					</div>
					<label data-defaulttext="Contrast">image_editor.contrast</label>
					<div class="fpd-range-tooltip">
						<span data-defaulttext="Contrast">image_editor.contrast</span>
						<input type="range" name="contrast" class="fpd-input-range" value="0" min="-1" max="1" step="0.01" />
						<div class="fpd-tooltip"></div>
					</div>
				</div>

				<div class="fpd-left fpd-filter-remove-white">
					<div class="fpd-switch-container fpd-left" data-enabled="true" data-disabled="false" data-filter="RemoveWhite" >
						<div class="fpd-switch-bar"></div>
						<div class="fpd-switch-toggle"></div>
					</div>
					<label data-defaulttext="Remove White">image_editor.remove_white</label>
					<div class="fpd-range-tooltip">
						<span data-defaulttext="Distance">image_editor.remove_white_distance</span>
						<input type="range" class="fpd-input-range" name="distance" value="0" min="0" max="1" step="0.01" />
						<div class="fpd-tooltip"></div>
					</div>
				</div>

			</div>

		</div>

		<div class="fpd-image-editor-main"></div>

		<div class="fpd-action-buttons">
			<span class="fpd-action-restore fpd-btn fpd-dark" data-defaulttext="Restore Original">image_editor.restore</span>
			<span class="fpd-action-save fpd-btn" data-defaulttext="Save">image_editor.save</span>
		</div>

	</div><!-- Advanced Image Editor -->

	<div class="fpd-dynamic-views-modal">

		<div class="fpd-sizes">
			<div class="fpd-custom-size">
				<span class="fpd-section-title" data-defaulttext="Enter own size">plus.dynamic_views_custom_size</span>
			</div>
			<div class="fpd-predefined-sizes">
				<span class="fpd-section-title" data-defaulttext="Choose from predefined sizes">plus.dynamic_views_predefined_size</span>
			</div>
		</div>
		<div class="fpd-layouts">
			<div class="fpd-scroll-area"></div>
		</div>

	</div>

</div>


