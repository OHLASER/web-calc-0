
/**
 *  main application 
 */
class App {

  /**
   * current site directory
   */
  static get currentSiteDirectory() {
    const loc = window.location
    const dirIdx = loc.pathname.lastIndexOf('/')
    let result = undefined

    if (dirIdx >= 0) {
      result = loc.pathname.substring(0, dirIdx + 1)
    } else {
      result = '/' 
    }
    return result
  }

  /**
   * get command to run element
   */
  get commandToRunElement() {
    return document.querySelector('.command-to-run')
  }

  /**
   *  input data html element 
   */
  get dataInputElement() {
    return document.querySelector('.data-input')
  }


  /**
   * data input
   */
  get dataInputUi() {
    let result = undefined
    const dataInputElem = this.dataInputElement
    if (dataInputElem) {
      result = dataInputElem.value
    }
    return result
  }

  /**
   *  output data html element
   */
  get dataOutputElement() {
    return document.querySelector('.data-output')
  }

  /**
   * data output
   */
  set dataOutputUi(value) {
    const outputElem = this.dataOutputElement

    if (outputElem) {
      outputElem.innerHTML = value
    }

  }



  /**
   * attach this object into html elements
   */
  bind() {
    const self = this


    const runCmdUi = this.commandToRunElement
    if (runCmdUi) {
      this.calcButtonHdlr = evt => self.handleEventToRun(evt)
      runCmdUi.addEventListener('click', this.calcButtonHdlr)
    }
  }

  /**
   * detach this object from html elements 
   */
  unbind() {
    if (this.calcButtonHdlr) {
      const runCmdUi = this.commandToRunElement
      if (runCmdUi) {
        runCmdUi.removeEventListener('click', this.calcButtonHdlr) 
      }
      delete this.calcButtonHdlr
    }
  }


  /**
   * handle event to calculate text input
   */
  handleEventToRun(evt) {
    this.calculate()
  }



  /**
   * calculate and update output
   */
  async calculate() {

    const dataInput = this.dataInputUi

    if (dataInput) {
      const output = await this.calculateInput(dataInput) 

      this.dataOutputUi = output
    } else {
      this.dataOutputUi = ''
    }
  }


  /**
   * calculate data input
   */
  async calculateInput(dataInput) {
    const origin = window.location.origin
    const path = `${origin}${App.currentSiteDirectory}rest/calc.php`
    const url = new URL(path)
    const searchParams = url.searchParams
    searchParams.append('run', dataInput)
    return window.fetch(url).then(res => {
      return res.text()
    })
  }

  /**
   * run application
   */
  run() {
    const self = this
    window.addEventListener('load', evt => {
      self.bind()
    }, { 
      once: true
    })

    window.addEventListener('unload', evt => {
      self.unbind()
    }, {
      once: true
    })

  }
}


// start application
(new App()).run()


// vi: se ts=2 sw=2 et:
