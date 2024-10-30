(function($) {
	'use strict';
	$(document).ready(function() {

		$('#ccis_l1_font_family').fontselect();
		$('#ccis_l2_font_family').fontselect();
		$('#ccis_l3_font_family').fontselect();
		$('#ccis_l4_font_family').fontselect();

		var fileFrame;
		$('#ccis-upload-image-btn').on('click',function(e) {
			e.preventDefault();
			if(fileFrame) {
				fileFrame.open();
				return;
			}

			var imagesList = $('#ccis-slider-images');
			var title = $(this).data('title');
			var buttonText = $(this).data('button-text');

			var slideTitle = $(this).data('slide-title');
			var slideDesc = $(this).data('slide-desc');
			var slideLink = $(this).data('slide-link');
			var richEditor = $(this).data('rich-editor');

			fileFrame = wp.media.frames.file_frame = wp.media({
				title: title,
				button: {
					text: buttonText
				},
				multiple: true
			});

			fileFrame.on('select', function() {
				var attachment = fileFrame.state().get('selection').toJSON();
				if(attachment.length > 0) {
					var i;
					for(i = 0; i < attachment.length; i++) {
						imagesList.append('<li class="ccis-image-entry"><input type="hidden" name="image[]" value="' + attachment[i].id + '"><img src="' + attachment[i].url + '" /><label>' + slideTitle + '</label><input type="text" name="image_title[]" placeholder="' + slideTitle + '" value="' + attachment[i].title + '" /><label>' + slideDesc + '</label><label>' + slideLink + '</label><input type="text" name="image_link[]" placeholder="' + slideLink + '" /><textarea rows="4" class="ccis_textarea_' + attachment[i].id + '" name="image_desc[]" placeholder="' + slideDesc + '">' + attachment[i].caption + '</textarea> <button type="button" data-id="' + attachment[i].id + '" class="btn btn-sm btn-primary btn-block ccis-rich-editor-btn" data-toggle="modal" data-target="#ccis-editor-modal">' + richEditor + ' <span class="dashicons dashicons-admin-appearance"></span></button><button type="button" class="btn btn-sm btn-danger btn-block ccis-remove-image-btn" >Delete <span class="dashicons dashicons-trash"></span></button></li>');
					}
				}
			});

			fileFrame.open();

		});

		jQuery('#ccis-slider-images').sortable({
			placeholder: '',
			revert: true
		});

		$(document).on('click', '.ccis-remove-image-btn', function() {
			$(this).parent().fadeOut(300, function() {
				$(this).remove();
			});
		});

		$(document).on('click', '#ccis-delete-all-btn', function() {
			if(confirm($(this).data('message'))) {
				$('#ccis-slider-images').html('');
			}
		});

		$(document).on('click', '.ccis-rich-editor-btn', function() {
			var id = $(this).data('id');
			var desc = $('.ccis_textarea_' + id).val();
			$('#fetch_wpeditor_data').val(desc);
			$("#fetch_wpelement").val(id);
		});

		$(document).on('click', '.ccis-rich-editor-continue-btn', function() {
			$("#fetch_wpeditor_data").click();
			$("#fetch_wpeditor_data-html").click();
			var id = $("#fetch_wpelement").val();
			var desc = $("#fetch_wpeditor_data").val();
			$('.ccis_textarea_' + id).val(desc);
		});

		var smoothUp = $('.ccis-smooth-up');
		$(window).on('scroll', function() {
			var scrollTop = $(this).scrollTop();
			if(scrollTop < 1000) {
				smoothUp.fadeOut();
			} else {
				smoothUp.fadeIn();
			}
		});

		$(document).on('click', '.ccis-smooth-up', function() {
			$('html, body').animate({ scrollTop: 0 }, 'fast');
			return false;
		});

		var layout1 = $('.ccis-setting-layout1');
		var layout2 = $('.ccis-setting-layout2');
		var layout3 = $('.ccis-setting-layout3');
		var layout4 = $('.ccis-setting-layout4');
		var layout = $('.ccis-setting-general input[name="layout"]:checked').val();
		if('layout1' === layout) {
			layout1.show();
		} else if('layout2' === layout) {
			layout2.show();
		} else if('layout3' === layout) {
			layout3.show();
		} else if('layout4' === layout) {
			layout4.show();
		}

		$(document).on('change', '.ccis-setting-general input[name="layout"]', function() {
			var layout = this.value;
			var settingLayouts = $('.ccis-setting-layout');
			settingLayouts.hide();
			if('layout1' === layout) {
				layout1.fadeIn();
			} else if('layout2' === layout) {
				layout2.fadeIn();
			} else if('layout3' === layout) {
				layout3.fadeIn();
			} else if('layout4' === layout) {
				layout4.fadeIn();
			}
		});

		$('.ccis-custom-css').each(function(index, el) {
			CodeMirror.fromTextArea(el, {
				lineNumbers: true,
				styleActiveLine: true,
				theme: 'blackboard'
			});
		});

		var l1WidthFixed = $('.ccis_l1_width_fixed');
		var l1WidthPercentage = $('.ccis_l1_width_percentage');
		var l1WidthType = $('input[name="l1_width_type"]:checked').val();
		if('fixed' === l1WidthType) {
			l1WidthFixed.show();
		} else if('percentage' === l1WidthType) {
			l1WidthPercentage.show();
		}

		$(document).on('change', 'input[name="l1_width_type"]', function() {
			var l1WidthType = this.value;
			var l1Width = $('.ccis_l1_width');
			l1Width.hide();
			if('fixed' === l1WidthType) {
				l1WidthFixed.fadeIn();
			} else if('percentage' === l1WidthType) {
				l1WidthPercentage.fadeIn();
			}
		});

		var l1HeightFixed = $('.ccis_l1_height_fixed');
		var l1HeightPercentage = $('.ccis_l1_height_percentage');
		var l1HeightType = $('input[name="l1_height_type"]:checked').val();
		if('fixed' === l1HeightType) {
			l1HeightFixed.show();
		} else if('percentage' === l1HeightType) {
			l1HeightPercentage.show();
		}

		$(document).on('change', 'input[name="l1_height_type"]', function() {
			var l1HeightType = this.value;
			var l1Height = $('.ccis_l1_height');
			l1Height.hide();
			if('fixed' === l1HeightType) {
				l1HeightFixed.fadeIn();
			} else if('percentage' === l1HeightType) {
				l1HeightPercentage.fadeIn();
			}
		});

		$('.color-picker').wpColorPicker();

		var l3MaxHeightFixed = $('.ccis_l3_max_height_fixed');

		var l3MaxHeight = $('input[name="l3_max_height"]:checked').val();
		if('fixed' === l3MaxHeight) {
			l3MaxHeightFixed.show();
		}
		$(document).on('change', 'input[name="l3_max_height"]', function() {
			var l3MaxHeight = this.value;
			if('fixed' === l3MaxHeight) {
				l3MaxHeightFixed.fadeIn();
			} else {
				l3MaxHeightFixed.hide();
			}
		});

	});
})(jQuery);
