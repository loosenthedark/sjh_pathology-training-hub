<!-- 
  Radio version of tabs.

  Requirements:
  - not rely on specific IDs for CSS (the CSS shouldn't need to know specific IDs)
  - flexible for any number of unkown tabs [2-6]
  - accessible

  Caveats:
  - since these are checkboxes the tabs not tab-able, need to use arrow keys

  Also worth reading:
  http://simplyaccessible.com/article/danger-aria-tabs/
-->
<div class="container-tabset" id="slides">
    <h2>Virtual Slides</h2>
    <section class="tabset tabset-slides">
        <article class="container">
        <a class="image" href="https://www.virtualpathology.leeds.ac.uk/slides/
" target="_blank">
          <img
            src="static/images/logos/logo-leeds.jpeg"
            alt="Leeds University Pathology logo"
          />
          <div class="overlay"></div>
          <div class="overlay-text flex-centre"><h6>Virtual Pathology Slide Library</h6></div>
        </a>
        <a class="image" href="https://www.virtualpathology.leeds.ac.uk/eqa/

" target="_blank">
          <img
            src="static/images/slide-1.png"
            alt="pathology slide detail"
          />
          <div class="overlay"></div>
          <div class="overlay-text flex-centre"><h6>EQA Slides</h6></div>
        </a>
        <a class="image" href="https://www.virtualpathology.leeds.ac.uk/teaching/normal/

" target="_blank">
          <img
            src="static/images/slide-2.jpg"
            alt="pathology slide detail"
          />
          <div class="overlay"></div>
          <div class="overlay-text flex-centre"><h6>Normal Histology Slides</h6></div>
        </a>
        <a class="image" href="https://www.virtualpathology.leeds.ac.uk/frcpath/

" target="_blank">
          <img
            src="static/images/microscope.jpg"
            alt="hand using microscope to examine slide"
          />
          <div class="overlay"></div>
          <div class="overlay-text flex-centre"><h6>FRCPath Past Examination<br> Slides</h6></div>
        </a>
      </article>
    </section>
</div>