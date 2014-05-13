$(document).ready ->

  window.slideHeight = $(window).height()
  window.activeSlide = 0

  $(window).stellar({
    positionProperty: 'transform',
    hideDistantElements: false
  })

  $(".nav-slide").click (event)->
    window.activeSlide = if $(this).is(".nav-prev") then window.activeSlide-1 else parseInt($(this).find("a").attr("go-to-slide"), 10) - 1

    $(".container").css "margin-top", "-"+ (window.slideHeight * window.activeSlide) + "px"