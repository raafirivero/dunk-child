// not working yet, but could this go in a jquery file and preload other things??

$.ajax({
  url: "http://ledunk.com/?add-to-cart=1362",
  cache: true
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/dunk-child/style.css?ver=1.6.2",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/dunk-child/style.css?ver=1.6.2",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/flatsome/css/foundation.css",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://ledunk.com/wp-content/themes/dunk-child/css/ledunk.css",
  cache: true,
  contentType: "text/css"
})
$.ajax({
  url: "https://dmdtrecbrfzyi.cloudfront.net/fonts/haymaker-webfont.ttf",
  cache: true,
  contentType: "application/x-font-ttf"
})