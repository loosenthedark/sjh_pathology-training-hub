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
    <h2>Learning Resources</h2>
    <section class="tabset">
        <!-- Tab 1 -->
        <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
        <label for="tab1">
      <h4>ExpertPath<span>&trade;</span></h4>
    </label>
        <!-- Tab 2 -->
        <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
        <label for="tab2">
      <h4>Pathology Outlines</h4>
    </label>
        <!-- Tab 3 -->
        <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
        <label for="tab3">
      <h4>RC of Pathologists</h4>
    </label>
        <ul class="tab-panels">
            <li id="marzen" class="tab-panel">
                <div class="img-wrapper"><img src="static/images/logos/logo-expertpath.png" alt="ExpertPath logo" class='logo-expertpath'><img src="static/images/logos/logo-elsevier.jpeg" alt="Elsevier logo"></div>
                <div class="text-wrapper"><p><strong>Elsevier ExpertPath</strong> is a diagnostic decision support system for pathologists. ExpertPath gives you instant access to the collective clinical experience and knowledge of renowned sub-specialists in every field of anatomic and clinical pathology.</p><p>Each topic was written and each image was selected by the same author team that brought the world the best-selling <cite>Diagnostic Pathology</cite> collection. The team of specialists include leaders at prestigious institutions around the world.</p></div>
            </li>
            <li id="rauchbier" class="tab-panel">
                <img src="static/images/logos/logo-path-outlines.jpeg" alt="Pathology Outlines logo">
                <div class="text-wrapper"><p><strong>PathologyOutlines.com</strong> is a regularly updated, comprehensive online textbook of surgical and clinical pathology, with extensive links to images (gross, microscopic, clinical and others), virtual slides and references.</p><p>The site's main purpose is to provide useful professional information to practicing pathologists and laboratory personnel in 15 seconds or less.</p><p>Chapters include clinical and surgical pathology topics, as well as separate listings for CD markers, immunohistochemical and other stains.</p></div>
            </li>
            <li id="dunkles" class="tab-panel">
                <img src="static/images/logos/logo-rc-path.jpeg" alt="RC of Pathologists logo">
                <div class="text-wrapper"><p>The <strong>Royal College of Pathologists</strong> promotes excellence in the practice of pathology. Members work across 17 specialities in healthcare, universities & industry.</p><p>The College's Datasets for Histopathological Reporting on Cancers have been written to help pathologists work towards a consistent approach for the reporting of the more common cancers and to define the range of acceptable practice in handling pathology specimens.</p></div>
            </li>
        </ul>
    </section>
</div>