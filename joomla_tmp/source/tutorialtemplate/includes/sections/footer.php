    </section> 
    
    <footer id="footer">
        <hr />
<section id="footer_container" class="clearfix">
    <?php if($this->countModules('footer')) : ?>
    <jdoc:include type="modules" name="footer" style="raw" />
   <?php endif;?>
</section>


<section id="copyright" class="clearfix">
    <a href="#header">Go Up!</a>
    <p>
        <?php echo $copyright;?>
    </p>
</section>

    </footer>
