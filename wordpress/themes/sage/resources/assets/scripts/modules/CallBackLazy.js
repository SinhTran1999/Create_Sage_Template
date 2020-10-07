export class CallBackLazy {
  init() {
    // code here
  }
  static call(elementTmp, element) {
    const datasrc = element.getAttribute('data-src')
    if (elementTmp === 'IMG') {
      element.setAttribute('src', datasrc)
    } else {
      $(element).css({ 'background-image': `url('${datasrc}')` })
    }
    $(element).addClass('b-loaded').removeClass('lazy').removeAttr('data-src')
  }
}
export default new CallBackLazy().init()