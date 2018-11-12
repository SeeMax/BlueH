$('.question-answer-single-q').on('click', function() {

  var $this = $(this);
  var toggle = $this.find('.faqToggle');
  var answerBox = $this.parent().find('.question-answer-single-a');
  var answerHeight = $this.parent().find('.single-a-inner').height();
  // Add the paragraph 1em padidng on both sides of 16px
  var animateHeight = answerHeight + 32;
  var tl = new TimelineMax();
  var uniEase = Power2.easeInOut;


  if ($this.hasClass('openToggle')) {
    $this.removeClass('openToggle');
    tl.to(answerBox, 0.23, {height:0, ease: uniEase}, "toggle1");
    tl.to(toggle, 0.23, {rotation:0, transformOrigin:'50% 50%', ease: uniEase}, "toggle1");
  } else {
    $this.addClass('openToggle');
    tl.to(answerBox, 0.23, {height:animateHeight, ease: uniEase}, "toggle2");
    tl.to(toggle, 0.23, {rotation:45, transformOrigin:'50% 50%', ease: uniEase}, "toggle2");
  }

});
