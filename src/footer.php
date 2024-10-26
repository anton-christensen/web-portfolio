        <div class="lang">
            <a href="<?= $translationTable['footer.lang.other.link'][$lang] ?>"><?= $translationTable['footer.lang.other.full'][$lang] ?></a>
        </div>
        <? 
        	if(!empty($notices)) {
        		echo '<div id="noticesBox">';
        		foreach ($notices as $notice) {
        			echo '<span class="notice shown" onclick="$(this).toggleClass(\'shown\');setTimeout(() => $(this).remove(), 500)">'.$notice.'</div>';
        		}
        		echo '</div>';
        	}
        ?>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/main.js?v17"></script>
    </body>
</html>