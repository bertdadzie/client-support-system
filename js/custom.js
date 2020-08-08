$(function () {
    "use strict";
    $(function () {
        $(".preloader").fadeOut();
    }),
        jQuery(document).on("click", ".mega-dropdown", function (i) {
            i.stopPropagation();
        });
    var i = function () {
        (window.innerWidth > 0 ? window.innerWidth : this.screen.width) < 3170
            ? ($("body").addClass("mini-sidebar"), $(".navbar-brand span").hide(), $(".scroll-sidebar, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible"), $(".sidebartoggler i").addClass("ti-menu"))
            : ($("body").removeClass("mini-sidebar"), $(".navbar-brand span").show());
        var i = (window.innerHeight > 0 ? window.innerHeight : this.screen.height) - 1;
        (i -= 70) < 1 && (i = 1), i > 70 && $(".page-wrapper").css("min-height", i + "px");
    };
    $(window).ready(i),
        $(window).on("resize", i),
        $(".sidebartoggler").on("click", function () {
            $("body").hasClass("mini-sidebar")
                ? ($("body").trigger("resize"), $(".scroll-sidebar, .slimScrollDiv").css("overflow", "hidden").parent().css("overflow", "visible"), $("body").removeClass("mini-sidebar"), $(".navbar-brand span").show())
                : ($("body").trigger("resize"), $(".scroll-sidebar, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible"), $("body").addClass("mini-sidebar"), $(".navbar-brand span").hide());
        }),
        $(".fix-header .topbar").stick_in_parent({}),
        $(".nav-toggler").click(function () {
            $("body").toggleClass("show-sidebar"), $(".nav-toggler i").toggleClass("mdi mdi-menu"), $(".nav-toggler i").addClass("mdi mdi-close");
        }),
        $(".search-box a, .search-box .app-search .srh-btn").on("click", function () {
            $(".app-search").toggle(200);
        }),
        $(".right-side-toggle").click(function () {
            $(".right-sidebar").slideDown(50), $(".right-sidebar").toggleClass("shw-rside");
        }),
        $(".floating-labels .form-control")
            .on("focus blur", function (i) {
                $(this)
                    .parents(".form-group")
                    .toggleClass("focused", "focus" === i.type || this.value.length > 0);
            })
            .trigger("blur"),
        $(function () {
            for (
                var i = window.location,
                    o = $("ul#sidebarnav a")
                        .filter(function () {
                            return this.href == i;
                        })
                        .addClass("active")
                        .parent()
                        .addClass("active");
                o.is("li");

            )
                o = o.parent().addClass("in").parent().addClass("active");
        }),
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        }),
        $(function () {
            $('[data-toggle="popover"]').popover();
        }),
        $(function () {
            $("#sidebarnav").metisMenu();
        }),
        $(".scroll-sidebar").slimScroll({ position: "left", size: "5px", height: "100%", color: "#dcdcdc" }),
        $(".message-center").slimScroll({ position: "right", size: "5px", color: "#dcdcdc" }),
        $(".aboutscroll").slimScroll({ position: "right", size: "5px", height: "80", color: "#dcdcdc" }),
        $(".message-scroll").slimScroll({ position: "right", size: "5px", height: "570", color: "#dcdcdc" }),
        $(".chat-box").slimScroll({ position: "right", size: "5px", height: "470", color: "#dcdcdc" }),
        $(".slimscrollright").slimScroll({ height: "100%", position: "right", size: "5px", color: "#dcdcdc" }),
        $("body").trigger("resize"),
        $(".list-task li label").click(function () {
            $(this).toggleClass("task-done");
        }),
        $("#to-recover").on("click", function () {
            $("#loginform").slideUp(), $("#recoverform").fadeIn();
        }),
        $('a[data-action="collapse"]').on("click", function (i) {
            i.preventDefault(), $(this).closest(".card").find('[data-action="collapse"] i').toggleClass("ti-minus ti-plus"), $(this).closest(".card").children(".card-block").collapse("toggle");
        }),
        $('a[data-action="expand"]').on("click", function (i) {
            i.preventDefault(), $(this).closest(".card").find('[data-action="expand"] i').toggleClass("mdi-arrow-expand mdi-arrow-compress"), $(this).closest(".card").toggleClass("card-fullscreen");
        }),
        $('a[data-action="close"]').on("click", function () {
            $(this).closest(".card").removeClass().slideUp("fast");
        }),
        $(".custom-file-input").on("change", function () {
            var i = $(this).val();
            $(this).next(".custom-file-label").html(i);
        });


        var dropzone = new Dropzone('#demo-upload', {
  previewTemplate: document.querySelector('#preview-template').innerHTML,
  parallelUploads: 2,
  thumbnailHeight: 120,
  thumbnailWidth: 120,
  maxFilesize: 3,
  filesizeBase: 1000,
  thumbnail: function(file, dataUrl) {
    if (file.previewElement) {
      file.previewElement.classList.remove("dz-file-preview");
      var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
      for (var i = 0; i < images.length; i++) {
        var thumbnailElement = images[i];
        thumbnailElement.alt = file.name;
        thumbnailElement.src = dataUrl;
      }
      setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
    }
  }

});


// Now fake the file upload, since GitHub does not handle file uploads
// and returns a 404

var minSteps = 6,
    maxSteps = 60,
    timeBetweenSteps = 100,
    bytesPerStep = 100000;

dropzone.uploadFiles = function(files) {
  var self = this;

  for (var i = 0; i < files.length; i++) {

    var file = files[i];
    totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

    for (var step = 0; step < totalSteps; step++) {
      var duration = timeBetweenSteps * (step + 1);
      setTimeout(function(file, totalSteps, step) {
        return function() {
          file.upload = {
            progress: 100 * (step + 1) / totalSteps,
            total: file.size,
            bytesSent: (step + 1) * file.size / totalSteps
          };

          self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
          if (file.upload.progress == 100) {
            file.status = Dropzone.SUCCESS;
            self.emit("success", file, 'success', null);
            self.emit("complete", file);
            self.processQueue();
            //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
          }
        };
      }(file, totalSteps, step), duration);
    }
  }
}

});
