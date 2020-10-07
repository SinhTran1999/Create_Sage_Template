export class Post {
  constructor() {
    this.$amountPlus = $('#amount-plus')
    this.$amountMinus = $('#amount-minus')
    this.$amount = $('#amount')
  }
  init() {
    if (this.$amountPlus.length) {
      this.addEventBtn(this.$amountPlus)
    }
    if (this.$amountMinus.length) {
      this.addEventBtn(this.$amountMinus, false)
    }
    this.addEventInput()
  }
  addEventBtn($el, plus = true) {
    $el.on('click', () => {
      let val = +this.$amount.val()
      if (plus) {
        if (val < +this.$amount.attr('max')) {
          this.$amount.val(val + 1)
        }
      } else {
        if (val > 1) {
          this.$amount.val(val - 1)
        }
      }
    })
  }
  addEventInput() {
    this.$amount.on('focusin', function() {
      $(this).data('val', $(this).val())
    }).on('input', function() {
      if (+$(this).val()) {
        $(this).val(+$(this).val())
        if (+$(this).val() < 1) {
          $(this).val(1)
        } else if (+$(this).val() > +$(this).attr('max')) {
          $(this).val($(this).attr('max'))
        }
        $(this).data('val', $(this).val())
      } else {
        $(this).val($(this).data('val'))
      }
    })
  }
}

export default new Post().init()