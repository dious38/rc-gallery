jQuery(document).ready(function () {
    var snapGallery = new SnapGallery();
    snapGallery.lazyLoadImages();
});

var SnapGallery = function () {
    "use strict";

    return {
        lazyLoadImages: function () {
            var imageContainers = document.querySelectorAll(".snap_galleryimg_container"),
                snapGallery = this;

            [].forEach.call(imageContainers, function (imageContainer) {
                if (imageContainer.dataset.thumbsexist === "true") {
                    snapGallery.populateThumbnail(imageContainer);
                    return;
                }

                var imgUrl = imageContainer.parentElement.href,
                    xhr = new XMLHttpRequest(),
                    startHeight = imageContainer.parentElement.parentElement.dataset.startheight,
                    rootUrl = imageContainer.parentElement.parentElement.dataset.rooturl,
                    requestUrl = rootUrl + "?option=com_ajax",
                    postData = "group=content&plugin=MakeThumbs&format=json&tmpl=component&img=" + imgUrl + "&start_height=" + startHeight;

                xhr.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        snapGallery.populateThumbnail(imageContainer);
                    }
                };

                xhr.open("POST", requestUrl, true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                xhr.send(postData);
            });
        },

        populateThumbnail: function (imageContainer) {
            var pictures = imageContainer.querySelectorAll("picture");

            [].forEach.call(pictures, function (picture) {
                var sources = picture.querySelectorAll("source");

                [].forEach.call(sources, function (source) {
                    source.srcset = source.dataset.srcset;

                });

                var imgs = picture.querySelectorAll("img");

                [].forEach.call(imgs, function (img) {
                    img.src = img.dataset.src;
                    img.alt = img.dataset.alt;
                });
            });
        }
    };
};
