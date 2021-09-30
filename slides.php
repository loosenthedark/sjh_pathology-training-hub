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
<div class="container-tabset">
    <h2>Virtual Slides</h2>
    <section class="tabset tabset-slides">
        <article class="container">
        <figure class="image">
          <img
            src="static/images/logos/logo-leeds.jpeg"
            alt="Photo by Joseph Gonzalez"
            loading="lazy"
          />
        </figure>
        <figure class="image">
          <img
            src="static/images/slide-1.png"
            alt="Photo by EDDIE DEAN"
            width="5184"
            height="3456"
            loading="lazy"
          />
        </figure>
        <figure class="image">
          <img
            src="static/images/slide-2.jpg"
            alt="Photo by Karabo Mdluli"
            width="4000"
            height="6016"
            loading="lazy"
          />
        </figure>
        <figure class="image">
          <img
            src="static/images/microscope.jpg"
            alt="Photo by Jeffery Erhunse"
            width="4024"
            height="6048"
            loading="lazy"
          />
        </figure>
      </article>
    </section>
</div>