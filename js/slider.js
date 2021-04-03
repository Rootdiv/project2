'use strict';

//ширина слайдера при загрузке
$(document).ready(function() {
  const sliders = $('.slider');
  for (let i = 0; i < sliders.length; i++) {
    const slider = sliders[i];
    let slidesAmount = 1;
    if ($(slider).attr('data-slides')) {
      slidesAmount = $(slider).attr('data-slides');
    }
    const sliderWidth = $(slider).closest('div').width() / slidesAmount;
    $(slider).find('.slides > li').css('width', sliderWidth + 'px');
    //добавляем элементы управления горизонтальные
    if ($(slider).hasClass('horizontal-arrows')) {
      $(slider).prepend('<div class="slider-nav slider-prev bg-fix" data-scroll="-1"></div>');
      $(slider).prepend('<div class="slider-nav slider-next bg-fix" data-scroll="1"></div>');
    }
  }
});

//Изменение ширины слайдер при ресайзе окна
$(window).resize(function() {
  const sliders = $('.slider');
  for (let i = 0; i < sliders.length; i++) {
    const slider = sliders[i];
    const sliderWidth = $(slider).closest('div').width();
    $(slider).find('.slides > li').css('width', sliderWidth + 'px');
  }
});

let canScroll = 1;
const slideSpeed = 1000;
//клик на стрелку горизонтальную
$('body').on('click', '.slider-nav', function() {
  if (canScroll === 1) {
    canScroll = 0;
    //определяем текущий слайдер что работаем именно в нем
    const slider = $(this).closest('.slider');
    //делаем слайды в строчку
    $(slider).find('.slides').css('display', 'flex');
    //определяем текущую величину прокрутки
    const currOffset = Math.ceil($(slider).find('.slides').scrollLeft());
    //Определяем ширину слайда (на сколько куртить)
    let deltaOffset = parseInt($(slider).css('width'));
    //определяем количество слайдов
    const slidesCount = $(slider).find('.slides > li').length;
    //Направление прокрутки
    if ($(this).attr('data-scroll') === '-1') {
      deltaOffset = -deltaOffset;
    }
    //крутим
    if (Math.ceil(currOffset + deltaOffset) <= 0) {
      //если достигли начала ленты то дальше не едем влево
      $(slider).find('.slides').animate({
        scrollLeft: 0
      }, slideSpeed);
    } else if (currOffset + deltaOffset >= slidesCount * Math.abs(deltaOffset)) {
      //если достигли конца ленты -листаем в начало
      $(slider).find('.slides').animate({
        scrollLeft: 0
      }, slideSpeed);
    } else {
      //иначе крутим либо вперед либо назад
      $(slider).find('.slides').animate({
        scrollLeft: currOffset + deltaOffset
      }, slideSpeed);
    }
    setTimeout(function() {
      canScroll = 1;
    }, slideSpeed);
  }
});
