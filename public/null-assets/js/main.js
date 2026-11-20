/**
 * E-Commerce Admin Dashboard - Main JavaScript
 * Vanilla JS + jQuery
 */

(function ($) {
  'use strict';

  /* --- DOM Ready --- */
  $(document).ready(function () {
    initSidebar();
    initPasswordToggle();
    initImageUpload();
    initMessages();
    initTooltips();
    initDeleteModals();
    initFormValidation();
    setActiveNavLink();
    initChartBars();
  });

  /**
   * Sidebar toggle (collapse/expand + mobile)
   */
  function initSidebar() {
    var $sidebar = $('#sidebar');
    var $mainContent = $('#mainContent');
    var $topNavbar = $('#topNavbar');
    var $overlay = $('#sidebarOverlay');
    var $toggleBtn = $('#sidebarToggle');

    // Restore collapsed state from localStorage
    if (localStorage.getItem('sidebarCollapsed') === 'true' && $(window).width() > 991) {
      $sidebar.addClass('collapsed');
      $mainContent.addClass('expanded');
      $topNavbar.addClass('expanded');
    }

    $toggleBtn.on('click', function () {
      if ($(window).width() <= 991) {
        // Mobile: slide in/out
        $sidebar.toggleClass('mobile-open');
        $overlay.toggleClass('active');
      } else {
        // Desktop: collapse/expand
        $sidebar.toggleClass('collapsed');
        $mainContent.toggleClass('expanded');
        $topNavbar.toggleClass('expanded');
        localStorage.setItem('sidebarCollapsed', $sidebar.hasClass('collapsed'));
      }
    });

    $overlay.on('click', function () {
      $sidebar.removeClass('mobile-open');
      $overlay.removeClass('active');
    });

    // Close mobile sidebar on nav click
    $('.sidebar-nav .nav-link').on('click', function () {
      if ($(window).width() <= 991) {
        $sidebar.removeClass('mobile-open');
        $overlay.removeClass('active');
      }
    });

    // Handle resize
    $(window).on('resize', function () {
      if ($(window).width() > 991) {
        $sidebar.removeClass('mobile-open');
        $overlay.removeClass('active');
      }
    });
  }

  /**
   * Set active nav link based on current page
   */
  function setActiveNavLink() {
    var currentPage = window.location.pathname.split('/').pop() || 'dashboard.html';
    $('.sidebar-nav .nav-link').each(function () {
      var href = $(this).attr('href');
      if (href === currentPage) {
        $(this).addClass('active');
      }
    });
  }

  /**
   * Password visibility toggle
   */
  function initPasswordToggle() {
    $(document).on('click', '.password-toggle', function () {
      var $input = $(this).siblings('input');
      var $icon = $(this).find('i');

      if ($input.attr('type') === 'password') {
        $input.attr('type', 'text');
        $icon.removeClass('bi-eye').addClass('bi-eye-slash');
      } else {
        $input.attr('type', 'password');
        $icon.removeClass('bi-eye-slash').addClass('bi-eye');
      }
    });
  }

  /**
   * Image upload preview (UI only)
   */
  function initImageUpload() {
    $(document).on('change', '.image-upload-input', function () {
      var file = this.files[0];
      var $preview = $(this).closest('.image-upload-wrapper').find('.image-preview');

      if (file && $preview.length) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $preview.attr('src', e.target.result).show();
        };
        reader.readAsDataURL(file);
      }
    });

    $(document).on('click', '.image-upload', function () {
      $(this).find('.image-upload-input').trigger('click');
    });
  }

  /**
   * Messages inbox interaction
   */
  function initMessages() {
    $('.message-item').on('click', function () {
      $('.message-item').removeClass('active');
      $(this).addClass('active').removeClass('unread');

      // Update unread badge count
      var unreadCount = $('.message-item.unread').length;
      $('.unread-badge').text(unreadCount);
      if (unreadCount === 0) {
        $('.unread-badge').hide();
      }
    });
  }

  /**
   * Bootstrap tooltips
   */
  function initTooltips() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (el) {
      return new bootstrap.Tooltip(el);
    });
  }

  /**
   * Delete confirmation modals
   */
  function initDeleteModals() {
    $(document).on('click', '[data-action="delete"]', function (e) {
      e.preventDefault();
      var itemName = $(this).data('item') || 'this item';
      var $modal = $('#deleteModal');

      if ($modal.length) {
        $modal.find('.delete-item-name').text(itemName);
        $modal.modal('show');
      }
    });

    $('#confirmDelete').on('click', function () {
      $('#deleteModal').modal('hide');
      showAlert('Item deleted successfully.', 'success');
    });
  }

  /**
   * Basic form validation (UI feedback)
   */
  function initFormValidation() {
    $('form[data-validate]').on('submit', function (e) {
      e.preventDefault();
      var $form = $(this);
      var isValid = true;

      $form.find('[required]').each(function () {
        var $field = $(this);
        if (!$field.val().trim()) {
          $field.addClass('is-invalid');
          isValid = false;
        } else {
          $field.removeClass('is-invalid');
        }
      });

      // Password match check
      var $password = $form.find('[name="password"]');
      var $confirm = $form.find('[name="confirm_password"]');
      if ($password.length && $confirm.length) {
        if ($password.val() !== $confirm.val()) {
          $confirm.addClass('is-invalid');
          isValid = false;
        }
      }

      if (isValid) {
        showLoader();
        setTimeout(function () {
          hideLoader();
          showAlert('Saved successfully!', 'success');
        }, 800);
      }
    });

    // Remove invalid class on input
    $(document).on('input', '.form-control, .form-select', function () {
      $(this).removeClass('is-invalid');
    });
  }

  /**
   * Animate chart bars on load
   */
  function initChartBars() {
    $('.chart-bar').each(function (index) {
      var $bar = $(this);
      var height = $bar.data('height') || 50;
      $bar.css('height', '0');

      setTimeout(function () {
        $bar.css('height', height + '%');
      }, 100 + index * 80);
    });
  }

  /**
   * Show alert notification
   */
  window.showAlert = function (message, type) {
    type = type || 'success';
    var iconMap = {
      success: 'bi-check-circle',
      danger: 'bi-x-circle',
      warning: 'bi-exclamation-triangle',
      info: 'bi-info-circle'
    };

    var $alert = $(
      '<div class="alert alert-' + type + ' alert-dismissible fade show position-fixed" ' +
      'style="top: 80px; right: 20px; z-index: 9999; min-width: 280px; box-shadow: var(--shadow);">' +
      '<i class="bi ' + (iconMap[type] || iconMap.info) + ' me-2"></i>' + message +
      '<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>'
    );

    $('body').append($alert);

    setTimeout(function () {
      $alert.alert('close');
    }, 4000);
  };

  /**
   * Loader overlay
   */
  window.showLoader = function () {
    $('#loaderOverlay').addClass('active');
  };

  window.hideLoader = function () {
    $('#loaderOverlay').removeClass('active');
  };

})(jQuery);
